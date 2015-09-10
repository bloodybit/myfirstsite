<?php

/**
 * @file
 * Contains \Drupal\Tests\Core\EventSubscriber\RedirectResponseSubscriberTest.
 */

namespace Drupal\Tests\Core\EventSubscriber;

use Drupal\Core\EventSubscriber\RedirectResponseSubscriber;
use Drupal\Core\Routing\RequestContext;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Drupal\Tests\UnitTestCase;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * @coversDefaultClass \Drupal\Core\EventSubscriber\RedirectResponseSubscriber
 * @group EventSubscriber
 */
class RedirectResponseSubscriberTest extends UnitTestCase {

  /**
   * The mocked request context.
   *
   * @var \Drupal\Core\Routing\RequestContext|\PHPUnit_Framework_MockObject_MockObject
   */
  protected $requestContext;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->requestContext = $this->getMockBuilder('Drupal\Core\Routing\RequestContext')
      ->disableOriginalConstructor()
      ->getMock();
    $this->requestContext->expects($this->any())
      ->method('getCompleteBaseUrl')
      ->willReturn('http://example.com/drupal');

    $container = new Container();
    $container->set('router.request_context', $this->requestContext);
    \Drupal::setContainer($container);
  }

  /**
   * Test destination detection and redirection.
   *
   * @param Request $request
   *   The request object with destination query set.
   * @param string|bool $expected
   *   The expected target URL or FALSE.
   *
   * @covers ::checkRedirectUrl
   * @dataProvider providerTestDestinationRedirect
   */
  public function testDestinationRedirect(Request $request, $expected) {
    $dispatcher = new EventDispatcher();
    $kernel = $this->getMock('Symfony\Component\HttpKernel\HttpKernelInterface');
    $response = new RedirectResponse('http://example.com/drupal');
    $url_generator = $this->getMockBuilder('Drupal\Core\Routing\UrlGenerator')
      ->disableOriginalConstructor()
      ->setMethods(array('generateFromPath'))
      ->getMock();

    if ($expected) {
      $url_generator
        ->expects($this->any())
        ->method('generateFromPath')
          ->willReturnMap([
            ['test', ['query' => [], 'fragment' => '', 'absolute' => TRUE], FALSE, 'http://example.com/drupal/test'],
            ['example.com', ['query' => [], 'fragment' => '', 'absolute' => TRUE], FALSE, 'http://example.com/drupal/example.com'],
            ['example:com', ['query' => [], 'fragment' => '', 'absolute' => TRUE], FALSE, 'http://example.com/drupal/example:com'],
            ['javascript:alert(0)', ['query' => [], 'fragment' => '', 'absolute' => TRUE], FALSE, 'http://example.com/drupal/javascript:alert(0)'],
            ['/test', ['query' => [], 'fragment' => '', 'absolute' => TRUE], FALSE, 'http://example.com/test'],
          ]);
    }

    $request->headers->set('HOST', 'example.com');

    $listener = new RedirectResponseSubscriber($url_generator, $this->requestContext);
    $dispatcher->addListener(KernelEvents::RESPONSE, array($listener, 'checkRedirectUrl'));
    $event = new FilterResponseEvent($kernel, $request, HttpKernelInterface::SUB_REQUEST, $response);
    $dispatcher->dispatch(KernelEvents::RESPONSE, $event);

    $target_url = $event->getResponse()->getTargetUrl();
    if ($expected) {
      $this->assertEquals($expected, $target_url);
    }
    else {
      $this->assertEquals('http://example.com/drupal', $target_url);
    }
  }

  /**
   * Data provider for testDestinationRedirect().
   *
   * @see \Drupal\Tests\Core\EventSubscriber\RedirectResponseSubscriberTest::testDestinationRedirect()
   */
  public static function providerTestDestinationRedirect() {
    return array(
      array(new Request(), FALSE),
      array(new Request(array('destination' => 'test')), 'http://example.com/drupal/test'),
      array(new Request(array('destination' => '/drupal/test')), 'http://example.com/drupal/test'),
      array(new Request(array('destination' => 'example.com')), 'http://example.com/drupal/example.com'),
      array(new Request(array('destination' => 'example:com')), 'http://example.com/drupal/example:com'),
      array(new Request(array('destination' => 'javascript:alert(0)')), 'http://example.com/drupal/javascript:alert(0)'),
      array(new Request(array('destination' => 'http://example.com/drupal/')), 'http://example.com/drupal/'),
      array(new Request(array('destination' => 'http://example.com/drupal/test')), 'http://example.com/drupal/test'),
    );
  }

  /**
   * @dataProvider providerTestDestinationRedirectToExternalUrl
   *
   * @expectedException \PHPUnit_Framework_Error
   */
  public function testDestinationRedirectToExternalUrl($request, $expected) {
    $dispatcher = new EventDispatcher();
    $kernel = $this->getMock('Symfony\Component\HttpKernel\HttpKernelInterface');
    $response = new RedirectResponse('http://other-example.com');
    $url_generator = $this->getMockBuilder('Drupal\Core\Routing\UrlGenerator')
      ->disableOriginalConstructor()
      ->setMethods(array('generateFromPath'))
      ->getMock();

    $request_context = $this->getMockBuilder('Drupal\Core\Routing\RequestContext')
      ->disableOriginalConstructor()
      ->getMock();
    $request_context->expects($this->any())
      ->method('getCompleteBaseUrl')
      ->willReturn('http://example.com/drupal');

    if ($expected) {
      $url_generator
        ->expects($this->any())
        ->method('generateFromPath')
        ->willReturnMap([
          ['test', ['query' => [], 'fragment' => '', 'absolute' => TRUE], FALSE, 'http://example.com/drupal/test'],
          ['example.com', ['query' => [], 'fragment' => '', 'absolute' => TRUE], FALSE, 'http://example.com/drupal/example.com'],
          ['example:com', ['query' => [], 'fragment' => '', 'absolute' => TRUE], FALSE, 'http://example.com/drupal/example:com'],
          ['javascript:alert(0)', ['query' => [], 'fragment' => '', 'absolute' => TRUE], FALSE, 'http://example.com/drupal/javascript:alert(0)'],
          ['/test', ['query' => [], 'fragment' => '', 'absolute' => TRUE], FALSE, 'http://example.com/test'],
        ]);
    }

    $listener = new RedirectResponseSubscriber($url_generator, $request_context);
    $dispatcher->addListener(KernelEvents::RESPONSE, array($listener, 'checkRedirectUrl'));
    $event = new FilterResponseEvent($kernel, $request, HttpKernelInterface::SUB_REQUEST, $response);
    $dispatcher->dispatch(KernelEvents::RESPONSE, $event);

    $this->assertEquals(400, $event->getResponse()->getStatusCode());
  }

  /**
   * @covers ::checkRedirectUrl
   */
  public function testRedirectWithOptInExternalUrl() {
    $dispatcher = new EventDispatcher();
    $kernel = $this->getMock('Symfony\Component\HttpKernel\HttpKernelInterface');
    $response = new TrustedRedirectResponse('http://external-url.com');
    $url_generator = $this->getMockBuilder('Drupal\Core\Routing\UrlGenerator')
      ->disableOriginalConstructor()
      ->setMethods(array('generateFromPath'))
      ->getMock();

    $request_context = $this->getMockBuilder('Drupal\Core\Routing\RequestContext')
      ->disableOriginalConstructor()
      ->getMock();
    $request_context->expects($this->any())
      ->method('getCompleteBaseUrl')
      ->willReturn('http://example.com/drupal');

    $request = Request::create('');
    $request->headers->set('HOST', 'example.com');

    $listener = new RedirectResponseSubscriber($url_generator, $request_context);
    $dispatcher->addListener(KernelEvents::RESPONSE, array($listener, 'checkRedirectUrl'));
    $event = new FilterResponseEvent($kernel, $request, HttpKernelInterface::SUB_REQUEST, $response);
    $dispatcher->dispatch(KernelEvents::RESPONSE, $event);

    $target_url = $event->getResponse()->getTargetUrl();
    $this->assertEquals('http://external-url.com', $target_url);
  }

  /**
   * Data provider for testDestinationRedirectToExternalUrl().
   */
  public function providerTestDestinationRedirectToExternalUrl() {
    return [
      'absolute external url' => [new Request(['destination' => 'http://example.com']), 'http://example.com'],
      'absolute external url with folder' => [new Request(['destination' => 'http://example.com/foobar']), 'http://example.com/foobar'],
      'absolute external url with folder2' => [new Request(['destination' => 'http://example.ca/drupal']), 'http://example.ca/drupal'],
      'path without drupal basepath' => [new Request(['destination' => '/test']), 'http://example.com/test'],
      'path with URL' => [new Request(['destination' => '/example.com']), 'http://example.com/example.com'],
      'path with URL and two slashes' => [new Request(['destination' => '//example.com']), 'http://example.com//example.com'],
    ];
  }

  /**
   * @expectedException \PHPUnit_Framework_Error
   *
   * @dataProvider providerTestDestinationRedirectWithInvalidUrl
   */
  public function testDestinationRedirectWithInvalidUrl(Request $request) {
    $dispatcher = new EventDispatcher();
    $kernel = $this->getMock('Symfony\Component\HttpKernel\HttpKernelInterface');
    $response = new RedirectResponse('http://example.com/drupal');
    $url_generator = $this->getMock('Drupal\Core\Routing\UrlGeneratorInterface');

    $request_context = $this->getMockBuilder('Drupal\Core\Routing\RequestContext')
      ->disableOriginalConstructor()
      ->getMock();

    $listener = new RedirectResponseSubscriber($url_generator, $request_context);
    $dispatcher->addListener(KernelEvents::RESPONSE, array($listener, 'checkRedirectUrl'));
    $event = new FilterResponseEvent($kernel, $request, HttpKernelInterface::SUB_REQUEST, $response);
    $dispatcher->dispatch(KernelEvents::RESPONSE, $event);

    $this->assertEquals(400, $event->getResponse()->getStatusCode());
  }

  /**
   * Data provider for testDestinationRedirectWithInvalidUrl().
   */
  public function providerTestDestinationRedirectWithInvalidUrl() {
    $data = [];
    $data[] = [new Request(array('destination' => '//example:com'))];
    $data[] = [new Request(array('destination' => '//example:com/test'))];
    $data['absolute external url'] = [new Request(['destination' => 'http://example.com'])];
    $data['absolute external url with folder'] = [new Request(['destination' => 'http://example.ca/drupal'])];
    $data['path without drupal basepath'] = [new Request(['destination' => '/test'])];
    $data['path with URL'] = [new Request(['destination' => '/example.com'])];
    $data['path with URL and two slashes'] = [new Request(['destination' => '//example.com'])];

    return $data;
  }

  /**
   * Tests that $_GET only contain internal URLs.
   *
   * @covers ::sanitizeDestination
   *
   * @dataProvider providerTestSanitizeDestination
   *
   * @see \Drupal\Component\Utility\UrlHelper::isExternal
   */
  public function testSanitizeDestinationForGet($input, $output) {
    $request = new Request();
    $request->query->set('destination', $input);

    $url_generator = $this->getMock('Drupal\Core\Routing\UrlGeneratorInterface');
    $request_context = new RequestContext();
    $listener = new RedirectResponseSubscriber($url_generator, $request_context);
    $kernel = $this->getMock('Symfony\Component\HttpKernel\HttpKernelInterface');
    $event = new GetResponseEvent($kernel, $request, HttpKernelInterface::MASTER_REQUEST);

    $dispatcher = new EventDispatcher();
    $dispatcher->addListener(KernelEvents::REQUEST, [$listener, 'sanitizeDestination'], 100);
    $dispatcher->dispatch(KernelEvents::REQUEST, $event);

    $this->assertEquals($output, $request->query->get('destination'));
  }

  /**
   * Tests that $_REQUEST['destination'] only contain internal URLs.
   *
   * @covers ::sanitizeDestination
   *
   * @dataProvider providerTestSanitizeDestination
   *
   * @see \Drupal\Component\Utility\UrlHelper::isExternal
   */
  public function testSanitizeDestinationForPost($input, $output) {
    $request = new Request();
    $request->request->set('destination', $input);

    $url_generator = $this->getMock('Drupal\Core\Routing\UrlGeneratorInterface');
    $request_context = new RequestContext();
    $listener = new RedirectResponseSubscriber($url_generator, $request_context);
    $kernel = $this->getMock('Symfony\Component\HttpKernel\HttpKernelInterface');
    $event = new GetResponseEvent($kernel, $request, HttpKernelInterface::MASTER_REQUEST);

    $dispatcher = new EventDispatcher();
    $dispatcher->addListener(KernelEvents::REQUEST, [$listener, 'sanitizeDestination'], 100);
    $dispatcher->dispatch(KernelEvents::REQUEST, $event);

    $this->assertEquals($output, $request->request->get('destination'));
  }

  /**
   * Data provider for testSanitizeDestination().
   */
  public function providerTestSanitizeDestination() {
    $data = [];
    // Standard internal example node path is present in the 'destination'
    // parameter.
    $data[] = ['node', 'node'];
    // Internal path with one leading slash is allowed.
    $data[] = ['/example.com', '/example.com'];
    // External URL without scheme is not allowed.
    $data[] = ['//example.com/test', ''];
    // Internal URL using a colon is allowed.
    $data[] = ['example:test', 'example:test'];
    // External URL is not allowed.
    $data[] = ['http://example.com', ''];
    // Javascript URL is allowed because it is treated as an internal URL.
    $data[] = ['javascript:alert(0)', 'javascript:alert(0)'];

    return $data;
  }
}

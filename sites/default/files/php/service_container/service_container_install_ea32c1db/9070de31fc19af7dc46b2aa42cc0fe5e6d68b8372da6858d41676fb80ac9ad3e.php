<?php
namespace Drupal\Core\DependencyInjection\Container\install;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * service_container_install_ea32c1db.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class service_container_install_ea32c1db extends \Drupal\Core\DependencyInjection\Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'accept_negotiation_406' => 'getAcceptNegotiation406Service',
            'access_arguments_resolver_factory' => 'getAccessArgumentsResolverFactoryService',
            'access_check.cron' => 'getAccessCheck_CronService',
            'access_check.csrf' => 'getAccessCheck_CsrfService',
            'access_check.custom' => 'getAccessCheck_CustomService',
            'access_check.db_update' => 'getAccessCheck_DbUpdateService',
            'access_check.default' => 'getAccessCheck_DefaultService',
            'access_check.entity' => 'getAccessCheck_EntityService',
            'access_check.entity_create' => 'getAccessCheck_EntityCreateService',
            'access_check.permission' => 'getAccessCheck_PermissionService',
            'access_check.theme' => 'getAccessCheck_ThemeService',
            'access_check.user.login_status' => 'getAccessCheck_User_LoginStatusService',
            'access_check.user.register' => 'getAccessCheck_User_RegisterService',
            'access_check.user.role' => 'getAccessCheck_User_RoleService',
            'access_manager' => 'getAccessManagerService',
            'access_manager.check_provider' => 'getAccessManager_CheckProviderService',
            'account_switcher' => 'getAccountSwitcherService',
            'ajax_response.attachments_processor' => 'getAjaxResponse_AttachmentsProcessorService',
            'ajax_response.subscriber' => 'getAjaxResponse_SubscriberService',
            'anonymous_user_response_subscriber' => 'getAnonymousUserResponseSubscriberService',
            'app.root' => 'getApp_RootService',
            'asset.css.collection_grouper' => 'getAsset_Css_CollectionGrouperService',
            'asset.css.collection_optimizer' => 'getAsset_Css_CollectionOptimizerService',
            'asset.css.collection_renderer' => 'getAsset_Css_CollectionRendererService',
            'asset.css.dumper' => 'getAsset_Css_DumperService',
            'asset.css.optimizer' => 'getAsset_Css_OptimizerService',
            'asset.js.collection_grouper' => 'getAsset_Js_CollectionGrouperService',
            'asset.js.collection_optimizer' => 'getAsset_Js_CollectionOptimizerService',
            'asset.js.collection_renderer' => 'getAsset_Js_CollectionRendererService',
            'asset.js.dumper' => 'getAsset_Js_DumperService',
            'asset.js.optimizer' => 'getAsset_Js_OptimizerService',
            'asset.resolver' => 'getAsset_ResolverService',
            'authentication' => 'getAuthenticationService',
            'authentication_collector' => 'getAuthenticationCollectorService',
            'authentication_subscriber' => 'getAuthenticationSubscriberService',
            'bare_html_page_renderer' => 'getBareHtmlPageRendererService',
            'batch.storage' => 'getBatch_StorageService',
            'breadcrumb' => 'getBreadcrumbService',
            'cache.backend.apcu' => 'getCache_Backend_ApcuService',
            'cache.backend.chainedfast' => 'getCache_Backend_ChainedfastService',
            'cache.backend.database' => 'getCache_Backend_DatabaseService',
            'cache.backend.php' => 'getCache_Backend_PhpService',
            'cache.bootstrap' => 'getCache_BootstrapService',
            'cache.config' => 'getCache_ConfigService',
            'cache.data' => 'getCache_DataService',
            'cache.default' => 'getCache_DefaultService',
            'cache.discovery' => 'getCache_DiscoveryService',
            'cache.entity' => 'getCache_EntityService',
            'cache.menu' => 'getCache_MenuService',
            'cache.render' => 'getCache_RenderService',
            'cache_context.cookies' => 'getCacheContext_CookiesService',
            'cache_context.headers' => 'getCacheContext_HeadersService',
            'cache_context.ip' => 'getCacheContext_IpService',
            'cache_context.languages' => 'getCacheContext_LanguagesService',
            'cache_context.request_format' => 'getCacheContext_RequestFormatService',
            'cache_context.route' => 'getCacheContext_RouteService',
            'cache_context.route.menu_active_trails' => 'getCacheContext_Route_MenuActiveTrailsService',
            'cache_context.route.name' => 'getCacheContext_Route_NameService',
            'cache_context.session' => 'getCacheContext_SessionService',
            'cache_context.theme' => 'getCacheContext_ThemeService',
            'cache_context.timezone' => 'getCacheContext_TimezoneService',
            'cache_context.url' => 'getCacheContext_UrlService',
            'cache_context.url.query_args' => 'getCacheContext_Url_QueryArgsService',
            'cache_context.url.query_args.pagers' => 'getCacheContext_Url_QueryArgs_PagersService',
            'cache_context.url.site' => 'getCacheContext_Url_SiteService',
            'cache_context.user' => 'getCacheContext_UserService',
            'cache_context.user.is_super_user' => 'getCacheContext_User_IsSuperUserService',
            'cache_context.user.permissions' => 'getCacheContext_User_PermissionsService',
            'cache_context.user.roles' => 'getCacheContext_User_RolesService',
            'cache_contexts_manager' => 'getCacheContextsManagerService',
            'cache_factory' => 'getCacheFactoryService',
            'cache_router_rebuild_subscriber' => 'getCacheRouterRebuildSubscriberService',
            'cache_tags.invalidator' => 'getCacheTags_InvalidatorService',
            'cache_tags.invalidator.checksum' => 'getCacheTags_Invalidator_ChecksumService',
            'class_loader' => 'getClassLoaderService',
            'class_resolver' => 'getClassResolverService',
            'client_error_response_subscriber' => 'getClientErrorResponseSubscriberService',
            'config.factory' => 'getConfig_FactoryService',
            'config.importer_subscriber' => 'getConfig_ImporterSubscriberService',
            'config.installer' => 'getConfig_InstallerService',
            'config.manager' => 'getConfig_ManagerService',
            'config.storage' => 'getConfig_StorageService',
            'config.storage.schema' => 'getConfig_Storage_SchemaService',
            'config.storage.snapshot' => 'getConfig_Storage_SnapshotService',
            'config.storage.staging' => 'getConfig_Storage_StagingService',
            'config.typed' => 'getConfig_TypedService',
            'config_import_subscriber' => 'getConfigImportSubscriberService',
            'config_snapshot_subscriber' => 'getConfigSnapshotSubscriberService',
            'container.namespaces' => 'getContainer_NamespacesService',
            'content_type_header_matcher' => 'getContentTypeHeaderMatcherService',
            'content_uninstall_validator' => 'getContentUninstallValidatorService',
            'context.handler' => 'getContext_HandlerService',
            'context.repository' => 'getContext_RepositoryService',
            'controller.entity_form' => 'getController_EntityFormService',
            'controller.form' => 'getController_FormService',
            'controller_resolver' => 'getControllerResolverService',
            'country_manager' => 'getCountryManagerService',
            'cron' => 'getCronService',
            'csrf_token' => 'getCsrfTokenService',
            'current_route_match' => 'getCurrentRouteMatchService',
            'current_user' => 'getCurrentUserService',
            'database' => 'getDatabaseService',
            'database.replica' => 'getDatabase_ReplicaService',
            'date.formatter' => 'getDate_FormatterService',
            'diff.formatter' => 'getDiff_FormatterService',
            'drupal.proxy_original_service.bare_html_page_renderer' => 'getDrupal_ProxyOriginalService_BareHtmlPageRendererService',
            'drupal.proxy_original_service.batch.storage' => 'getDrupal_ProxyOriginalService_Batch_StorageService',
            'drupal.proxy_original_service.config.installer' => 'getDrupal_ProxyOriginalService_Config_InstallerService',
            'drupal.proxy_original_service.content_uninstall_validator' => 'getDrupal_ProxyOriginalService_ContentUninstallValidatorService',
            'drupal.proxy_original_service.cron' => 'getDrupal_ProxyOriginalService_CronService',
            'drupal.proxy_original_service.field_uninstall_validator' => 'getDrupal_ProxyOriginalService_FieldUninstallValidatorService',
            'drupal.proxy_original_service.file.mime_type.guesser' => 'getDrupal_ProxyOriginalService_File_MimeType_GuesserService',
            'drupal.proxy_original_service.file.mime_type.guesser.extension' => 'getDrupal_ProxyOriginalService_File_MimeType_Guesser_ExtensionService',
            'drupal.proxy_original_service.lock' => 'getDrupal_ProxyOriginalService_LockService',
            'drupal.proxy_original_service.lock.persistent' => 'getDrupal_ProxyOriginalService_Lock_PersistentService',
            'drupal.proxy_original_service.module_installer' => 'getDrupal_ProxyOriginalService_ModuleInstallerService',
            'drupal.proxy_original_service.page_cache_response_policy' => 'getDrupal_ProxyOriginalService_PageCacheResponsePolicyService',
            'drupal.proxy_original_service.paramconverter.configentity_admin' => 'getDrupal_ProxyOriginalService_Paramconverter_ConfigentityAdminService',
            'drupal.proxy_original_service.paramconverter.menu_link' => 'getDrupal_ProxyOriginalService_Paramconverter_MenuLinkService',
            'drupal.proxy_original_service.plugin.cache_clearer' => 'getDrupal_ProxyOriginalService_Plugin_CacheClearerService',
            'drupal.proxy_original_service.required_module_uninstall_validator' => 'getDrupal_ProxyOriginalService_RequiredModuleUninstallValidatorService',
            'drupal.proxy_original_service.router.builder' => 'getDrupal_ProxyOriginalService_Router_BuilderService',
            'drupal.proxy_original_service.router.dumper' => 'getDrupal_ProxyOriginalService_Router_DumperService',
            'early_rendering_controller_wrapper_subscriber' => 'getEarlyRenderingControllerWrapperSubscriberService',
            'email.validator' => 'getEmail_ValidatorService',
            'entity.autocomplete_matcher' => 'getEntity_AutocompleteMatcherService',
            'entity.bundle_config_import_validator' => 'getEntity_BundleConfigImportValidatorService',
            'entity.definition_update_manager' => 'getEntity_DefinitionUpdateManagerService',
            'entity.form_builder' => 'getEntity_FormBuilderService',
            'entity.manager' => 'getEntity_ManagerService',
            'entity.query' => 'getEntity_QueryService',
            'entity.query.config' => 'getEntity_Query_ConfigService',
            'entity.query.keyvalue' => 'getEntity_Query_KeyvalueService',
            'entity.query.null' => 'getEntity_Query_NullService',
            'entity.query.sql' => 'getEntity_Query_SqlService',
            'entity_route_subscriber' => 'getEntityRouteSubscriberService',
            'event_dispatcher' => 'getEventDispatcherService',
            'exception.custom_page_html' => 'getException_CustomPageHtmlService',
            'exception.custom_page_json' => 'getException_CustomPageJsonService',
            'exception.default' => 'getException_DefaultService',
            'exception.default_html' => 'getException_DefaultHtmlService',
            'exception.default_json' => 'getException_DefaultJsonService',
            'exception.enforced_form_response' => 'getException_EnforcedFormResponseService',
            'exception.fast_404_html' => 'getException_Fast404HtmlService',
            'exception.logger' => 'getException_LoggerService',
            'exception.test_site' => 'getException_TestSiteService',
            'feed.bridge.reader' => 'getFeed_Bridge_ReaderService',
            'feed.bridge.writer' => 'getFeed_Bridge_WriterService',
            'feed.reader.atomentry' => 'getFeed_Reader_AtomentryService',
            'feed.reader.atomfeed' => 'getFeed_Reader_AtomfeedService',
            'feed.reader.contententry' => 'getFeed_Reader_ContententryService',
            'feed.reader.dublincoreentry' => 'getFeed_Reader_DublincoreentryService',
            'feed.reader.dublincorefeed' => 'getFeed_Reader_DublincorefeedService',
            'feed.reader.podcastentry' => 'getFeed_Reader_PodcastentryService',
            'feed.reader.podcastfeed' => 'getFeed_Reader_PodcastfeedService',
            'feed.reader.slashentry' => 'getFeed_Reader_SlashentryService',
            'feed.reader.threadentry' => 'getFeed_Reader_ThreadentryService',
            'feed.reader.wellformedwebentry' => 'getFeed_Reader_WellformedwebentryService',
            'feed.writer.atomrendererfeed' => 'getFeed_Writer_AtomrendererfeedService',
            'feed.writer.contentrendererentry' => 'getFeed_Writer_ContentrendererentryService',
            'feed.writer.dublincorerendererentry' => 'getFeed_Writer_DublincorerendererentryService',
            'feed.writer.dublincorerendererfeed' => 'getFeed_Writer_DublincorerendererfeedService',
            'feed.writer.itunesentry' => 'getFeed_Writer_ItunesentryService',
            'feed.writer.itunesfeed' => 'getFeed_Writer_ItunesfeedService',
            'feed.writer.itunesrendererentry' => 'getFeed_Writer_ItunesrendererentryService',
            'feed.writer.itunesrendererfeed' => 'getFeed_Writer_ItunesrendererfeedService',
            'feed.writer.slashrendererentry' => 'getFeed_Writer_SlashrendererentryService',
            'feed.writer.threadingrendererentry' => 'getFeed_Writer_ThreadingrendererentryService',
            'feed.writer.wellformedwebrendererentry' => 'getFeed_Writer_WellformedwebrendererentryService',
            'field_uninstall_validator' => 'getFieldUninstallValidatorService',
            'file.mime_type.guesser' => 'getFile_MimeType_GuesserService',
            'file.mime_type.guesser.extension' => 'getFile_MimeType_Guesser_ExtensionService',
            'file_system' => 'getFileSystemService',
            'finish_response_subscriber' => 'getFinishResponseSubscriberService',
            'flood' => 'getFloodService',
            'form_ajax_response_builder' => 'getFormAjaxResponseBuilderService',
            'form_ajax_subscriber' => 'getFormAjaxSubscriberService',
            'form_builder' => 'getFormBuilderService',
            'form_error_handler' => 'getFormErrorHandlerService',
            'form_submitter' => 'getFormSubmitterService',
            'form_validator' => 'getFormValidatorService',
            'html_response.attachments_processor' => 'getHtmlResponse_AttachmentsProcessorService',
            'html_response.subscriber' => 'getHtmlResponse_SubscriberService',
            'http_client' => 'getHttpClientService',
            'http_client_factory' => 'getHttpClientFactoryService',
            'http_kernel' => 'getHttpKernelService',
            'http_kernel.basic' => 'getHttpKernel_BasicService',
            'http_middleware.kernel_pre_handle' => 'getHttpMiddleware_KernelPreHandleService',
            'http_middleware.negotiation' => 'getHttpMiddleware_NegotiationService',
            'http_middleware.reverse_proxy' => 'getHttpMiddleware_ReverseProxyService',
            'http_middleware.session' => 'getHttpMiddleware_SessionService',
            'http_negotiation.format_negotiator' => 'getHttpNegotiation_FormatNegotiatorService',
            'image.factory' => 'getImage_FactoryService',
            'image.toolkit.manager' => 'getImage_Toolkit_ManagerService',
            'image.toolkit.operation.manager' => 'getImage_Toolkit_Operation_ManagerService',
            'info_parser' => 'getInfoParserService',
            'kernel' => 'getKernelService',
            'kernel_destruct_subscriber' => 'getKernelDestructSubscriberService',
            'keyvalue' => 'getKeyvalueService',
            'keyvalue.database' => 'getKeyvalue_DatabaseService',
            'keyvalue.expirable' => 'getKeyvalue_ExpirableService',
            'keyvalue.expirable.database' => 'getKeyvalue_Expirable_DatabaseService',
            'language.current_language_context' => 'getLanguage_CurrentLanguageContextService',
            'language.default' => 'getLanguage_DefaultService',
            'language_manager' => 'getLanguageManagerService',
            'library.dependency_resolver' => 'getLibrary_DependencyResolverService',
            'library.discovery' => 'getLibrary_DiscoveryService',
            'library.discovery.collector' => 'getLibrary_Discovery_CollectorService',
            'library.discovery.parser' => 'getLibrary_Discovery_ParserService',
            'link_generator' => 'getLinkGeneratorService',
            'lock' => 'getLockService',
            'lock.persistent' => 'getLock_PersistentService',
            'logger.channel.cron' => 'getLogger_Channel_CronService',
            'logger.channel.default' => 'getLogger_Channel_DefaultService',
            'logger.channel.file' => 'getLogger_Channel_FileService',
            'logger.channel.form' => 'getLogger_Channel_FormService',
            'logger.channel.image' => 'getLogger_Channel_ImageService',
            'logger.channel.php' => 'getLogger_Channel_PhpService',
            'logger.factory' => 'getLogger_FactoryService',
            'logger.log_message_parser' => 'getLogger_LogMessageParserService',
            'main_content_renderer.ajax' => 'getMainContentRenderer_AjaxService',
            'main_content_renderer.dialog' => 'getMainContentRenderer_DialogService',
            'main_content_renderer.html' => 'getMainContentRenderer_HtmlService',
            'main_content_renderer.modal' => 'getMainContentRenderer_ModalService',
            'main_content_view_subscriber' => 'getMainContentViewSubscriberService',
            'maintenance_mode' => 'getMaintenanceModeService',
            'maintenance_mode_subscriber' => 'getMaintenanceModeSubscriberService',
            'menu.active_trail' => 'getMenu_ActiveTrailService',
            'menu.default_tree_manipulators' => 'getMenu_DefaultTreeManipulatorsService',
            'menu.link_tree' => 'getMenu_LinkTreeService',
            'menu.parent_form_selector' => 'getMenu_ParentFormSelectorService',
            'menu.rebuild_subscriber' => 'getMenu_RebuildSubscriberService',
            'menu.tree_storage' => 'getMenu_TreeStorageService',
            'menu_link.static.overrides' => 'getMenuLink_Static_OverridesService',
            'module_handler' => 'getModuleHandlerService',
            'module_installer' => 'getModuleInstallerService',
            'page_cache_kill_switch' => 'getPageCacheKillSwitchService',
            'page_cache_request_policy' => 'getPageCacheRequestPolicyService',
            'page_cache_response_policy' => 'getPageCacheResponsePolicyService',
            'paramconverter.configentity_admin' => 'getParamconverter_ConfigentityAdminService',
            'paramconverter.entity' => 'getParamconverter_EntityService',
            'paramconverter.menu_link' => 'getParamconverter_MenuLinkService',
            'paramconverter_manager' => 'getParamconverterManagerService',
            'paramconverter_subscriber' => 'getParamconverterSubscriberService',
            'password' => 'getPasswordService',
            'path.alias_manager' => 'getPath_AliasManagerService',
            'path.alias_storage' => 'getPath_AliasStorageService',
            'path.alias_whitelist' => 'getPath_AliasWhitelistService',
            'path.current' => 'getPath_CurrentService',
            'path.matcher' => 'getPath_MatcherService',
            'path.validator' => 'getPath_ValidatorService',
            'path_processor.files' => 'getPathProcessor_FilesService',
            'path_processor_alias' => 'getPathProcessorAliasService',
            'path_processor_decode' => 'getPathProcessorDecodeService',
            'path_processor_front' => 'getPathProcessorFrontService',
            'path_processor_manager' => 'getPathProcessorManagerService',
            'path_subscriber' => 'getPathSubscriberService',
            'pgsql.entity.query.sql' => 'getPgsql_Entity_Query_SqlService',
            'plugin.cache_clearer' => 'getPlugin_CacheClearerService',
            'plugin.manager.action' => 'getPlugin_Manager_ActionService',
            'plugin.manager.archiver' => 'getPlugin_Manager_ArchiverService',
            'plugin.manager.block' => 'getPlugin_Manager_BlockService',
            'plugin.manager.condition' => 'getPlugin_Manager_ConditionService',
            'plugin.manager.display_variant' => 'getPlugin_Manager_DisplayVariantService',
            'plugin.manager.element_info' => 'getPlugin_Manager_ElementInfoService',
            'plugin.manager.entity_reference_selection' => 'getPlugin_Manager_EntityReferenceSelectionService',
            'plugin.manager.field.field_type' => 'getPlugin_Manager_Field_FieldTypeService',
            'plugin.manager.field.formatter' => 'getPlugin_Manager_Field_FormatterService',
            'plugin.manager.field.widget' => 'getPlugin_Manager_Field_WidgetService',
            'plugin.manager.mail' => 'getPlugin_Manager_MailService',
            'plugin.manager.menu.contextual_link' => 'getPlugin_Manager_Menu_ContextualLinkService',
            'plugin.manager.menu.link' => 'getPlugin_Manager_Menu_LinkService',
            'plugin.manager.menu.local_action' => 'getPlugin_Manager_Menu_LocalActionService',
            'plugin.manager.menu.local_task' => 'getPlugin_Manager_Menu_LocalTaskService',
            'plugin.manager.queue_worker' => 'getPlugin_Manager_QueueWorkerService',
            'private_key' => 'getPrivateKeyService',
            'psr7.http_foundation_factory' => 'getPsr7_HttpFoundationFactoryService',
            'psr7.http_message_factory' => 'getPsr7_HttpMessageFactoryService',
            'psr_response_view_subscriber' => 'getPsrResponseViewSubscriberService',
            'queue' => 'getQueueService',
            'queue.database' => 'getQueue_DatabaseService',
            'redirect.destination' => 'getRedirect_DestinationService',
            'redirect_leading_slashes_subscriber' => 'getRedirectLeadingSlashesSubscriberService',
            'redirect_response_subscriber' => 'getRedirectResponseSubscriberService',
            'render_cache' => 'getRenderCacheService',
            'renderer' => 'getRendererService',
            'replica_database_ignore__subscriber' => 'getReplicaDatabaseIgnoreSubscriberService',
            'request_close_subscriber' => 'getRequestCloseSubscriberService',
            'request_format_route_filter' => 'getRequestFormatRouteFilterService',
            'request_stack' => 'getRequestStackService',
            'required_module_uninstall_validator' => 'getRequiredModuleUninstallValidatorService',
            'resolver_manager.entity' => 'getResolverManager_EntityService',
            'response_filter.active_link' => 'getResponseFilter_ActiveLinkService',
            'response_generator_subscriber' => 'getResponseGeneratorSubscriberService',
            'route_access_response_subscriber' => 'getRouteAccessResponseSubscriberService',
            'route_content_controller_subscriber' => 'getRouteContentControllerSubscriberService',
            'route_enhancer.entity' => 'getRouteEnhancer_EntityService',
            'route_enhancer.lazy_collector' => 'getRouteEnhancer_LazyCollectorService',
            'route_enhancer.param_conversion' => 'getRouteEnhancer_ParamConversionService',
            'route_enhancer_subscriber' => 'getRouteEnhancerSubscriberService',
            'route_filter.lazy_collector' => 'getRouteFilter_LazyCollectorService',
            'route_filter_subscriber' => 'getRouteFilterSubscriberService',
            'route_http_method_subscriber' => 'getRouteHttpMethodSubscriberService',
            'route_processor_csrf' => 'getRouteProcessorCsrfService',
            'route_processor_current' => 'getRouteProcessorCurrentService',
            'route_processor_manager' => 'getRouteProcessorManagerService',
            'route_special_attributes_subscriber' => 'getRouteSpecialAttributesSubscriberService',
            'route_subscriber.entity' => 'getRouteSubscriber_EntityService',
            'route_subscriber.module' => 'getRouteSubscriber_ModuleService',
            'router' => 'getRouterService',
            'router.admin_context' => 'getRouter_AdminContextService',
            'router.builder' => 'getRouter_BuilderService',
            'router.dumper' => 'getRouter_DumperService',
            'router.dynamic' => 'getRouter_DynamicService',
            'router.matcher' => 'getRouter_MatcherService',
            'router.matcher.final_matcher' => 'getRouter_Matcher_FinalMatcherService',
            'router.no_access_checks' => 'getRouter_NoAccessChecksService',
            'router.path_roots_subscriber' => 'getRouter_PathRootsSubscriberService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router.route_preloader' => 'getRouter_RoutePreloaderService',
            'router.route_provider' => 'getRouter_RouteProviderService',
            'router_listener' => 'getRouterListenerService',
            'serialization.json' => 'getSerialization_JsonService',
            'serialization.phpserialize' => 'getSerialization_PhpserializeService',
            'serialization.yaml' => 'getSerialization_YamlService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session_configuration' => 'getSessionConfigurationService',
            'session_handler.storage' => 'getSessionHandler_StorageService',
            'session_handler.write_check' => 'getSessionHandler_WriteCheckService',
            'session_handler.write_safe' => 'getSessionHandler_WriteSafeService',
            'session_manager' => 'getSessionManagerService',
            'session_manager.metadata_bag' => 'getSessionManager_MetadataBagService',
            'settings' => 'getSettingsService',
            'site.path' => 'getSite_PathService',
            'state' => 'getStateService',
            'stream_wrapper.public' => 'getStreamWrapper_PublicService',
            'stream_wrapper.temporary' => 'getStreamWrapper_TemporaryService',
            'stream_wrapper_manager' => 'getStreamWrapperManagerService',
            'string_translation' => 'getStringTranslationService',
            'string_translator.custom_strings' => 'getStringTranslator_CustomStringsService',
            'system.admin_path.route_subscriber' => 'getSystem_AdminPath_RouteSubscriberService',
            'system.automatic_cron' => 'getSystem_AutomaticCronService',
            'system.breadcrumb.default' => 'getSystem_Breadcrumb_DefaultService',
            'system.config_cache_tag' => 'getSystem_ConfigCacheTagService',
            'system.config_subscriber' => 'getSystem_ConfigSubscriberService',
            'system.manager' => 'getSystem_ManagerService',
            'theme.initialization' => 'getTheme_InitializationService',
            'theme.manager' => 'getTheme_ManagerService',
            'theme.negotiator' => 'getTheme_NegotiatorService',
            'theme.negotiator.admin_theme' => 'getTheme_Negotiator_AdminThemeService',
            'theme.negotiator.ajax_base_page' => 'getTheme_Negotiator_AjaxBasePageService',
            'theme.negotiator.default' => 'getTheme_Negotiator_DefaultService',
            'theme.negotiator.system.batch' => 'getTheme_Negotiator_System_BatchService',
            'theme.negotiator.system.db_update' => 'getTheme_Negotiator_System_DbUpdateService',
            'theme.registry' => 'getTheme_RegistryService',
            'theme_handler' => 'getThemeHandlerService',
            'theme_installer' => 'getThemeInstallerService',
            'title_resolver' => 'getTitleResolverService',
            'token' => 'getTokenService',
            'transliteration' => 'getTransliterationService',
            'twig' => 'getTwigService',
            'twig.extension' => 'getTwig_ExtensionService',
            'twig.extension.debug' => 'getTwig_Extension_DebugService',
            'twig.loader.filesystem' => 'getTwig_Loader_FilesystemService',
            'twig.loader.string' => 'getTwig_Loader_StringService',
            'twig.loader.theme_registry' => 'getTwig_Loader_ThemeRegistryService',
            'typed_data_manager' => 'getTypedDataManagerService',
            'unrouted_url_assembler' => 'getUnroutedUrlAssemblerService',
            'url_generator' => 'getUrlGeneratorService',
            'user.auth' => 'getUser_AuthService',
            'user.authentication.cookie' => 'getUser_Authentication_CookieService',
            'user.current_user_context' => 'getUser_CurrentUserContextService',
            'user.data' => 'getUser_DataService',
            'user.permissions' => 'getUser_PermissionsService',
            'user.private_tempstore' => 'getUser_PrivateTempstoreService',
            'user.shared_tempstore' => 'getUser_SharedTempstoreService',
            'user_access_denied_subscriber' => 'getUserAccessDeniedSubscriberService',
            'user_last_access_subscriber' => 'getUserLastAccessSubscriberService',
            'user_maintenance_mode_subscriber' => 'getUserMaintenanceModeSubscriberService',
            'user_permissions_hash_generator' => 'getUserPermissionsHashGeneratorService',
            'uuid' => 'getUuidService',
            'validation.constraint' => 'getValidation_ConstraintService',
        );
        $this->aliases = array(
            'element_info' => 'plugin.manager.element_info',
            'session_handler' => 'session_handler.write_safe',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * Gets the 'accept_negotiation_406' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\AcceptNegotiation406 A Drupal\Core\EventSubscriber\AcceptNegotiation406 instance.
     */
    protected function getAcceptNegotiation406Service()
    {
        $this->services['accept_negotiation_406'] = $instance = new \Drupal\Core\EventSubscriber\AcceptNegotiation406();

        $instance->_serviceId = 'accept_negotiation_406';

        return $instance;
    }

    /**
     * Gets the 'access_arguments_resolver_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\AccessArgumentsResolverFactory A Drupal\Core\Access\AccessArgumentsResolverFactory instance.
     */
    protected function getAccessArgumentsResolverFactoryService()
    {
        $this->services['access_arguments_resolver_factory'] = $instance = new \Drupal\Core\Access\AccessArgumentsResolverFactory();

        $instance->_serviceId = 'access_arguments_resolver_factory';

        return $instance;
    }

    /**
     * Gets the 'access_check.cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\Access\CronAccessCheck A Drupal\system\Access\CronAccessCheck instance.
     */
    protected function getAccessCheck_CronService()
    {
        $this->services['access_check.cron'] = $instance = new \Drupal\system\Access\CronAccessCheck();

        $instance->_serviceId = 'access_check.cron';

        return $instance;
    }

    /**
     * Gets the 'access_check.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\CsrfAccessCheck A Drupal\Core\Access\CsrfAccessCheck instance.
     */
    protected function getAccessCheck_CsrfService()
    {
        $this->services['access_check.csrf'] = $instance = new \Drupal\Core\Access\CsrfAccessCheck($this->get('csrf_token'));

        $instance->_serviceId = 'access_check.csrf';

        return $instance;
    }

    /**
     * Gets the 'access_check.custom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\CustomAccessCheck A Drupal\Core\Access\CustomAccessCheck instance.
     */
    protected function getAccessCheck_CustomService()
    {
        $this->services['access_check.custom'] = $instance = new \Drupal\Core\Access\CustomAccessCheck($this->get('controller_resolver'), $this->get('access_arguments_resolver_factory'));

        $instance->_serviceId = 'access_check.custom';

        return $instance;
    }

    /**
     * Gets the 'access_check.db_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\Access\DbUpdateAccessCheck A Drupal\system\Access\DbUpdateAccessCheck instance.
     */
    protected function getAccessCheck_DbUpdateService()
    {
        $this->services['access_check.db_update'] = $instance = new \Drupal\system\Access\DbUpdateAccessCheck();

        $instance->_serviceId = 'access_check.db_update';

        return $instance;
    }

    /**
     * Gets the 'access_check.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\DefaultAccessCheck A Drupal\Core\Access\DefaultAccessCheck instance.
     */
    protected function getAccessCheck_DefaultService()
    {
        $this->services['access_check.default'] = $instance = new \Drupal\Core\Access\DefaultAccessCheck();

        $instance->_serviceId = 'access_check.default';

        return $instance;
    }

    /**
     * Gets the 'access_check.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityAccessCheck A Drupal\Core\Entity\EntityAccessCheck instance.
     */
    protected function getAccessCheck_EntityService()
    {
        $this->services['access_check.entity'] = $instance = new \Drupal\Core\Entity\EntityAccessCheck();

        $instance->_serviceId = 'access_check.entity';

        return $instance;
    }

    /**
     * Gets the 'access_check.entity_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityCreateAccessCheck A Drupal\Core\Entity\EntityCreateAccessCheck instance.
     */
    protected function getAccessCheck_EntityCreateService()
    {
        $this->services['access_check.entity_create'] = $instance = new \Drupal\Core\Entity\EntityCreateAccessCheck($this->get('entity.manager'));

        $instance->_serviceId = 'access_check.entity_create';

        return $instance;
    }

    /**
     * Gets the 'access_check.permission' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Access\PermissionAccessCheck A Drupal\user\Access\PermissionAccessCheck instance.
     */
    protected function getAccessCheck_PermissionService()
    {
        $this->services['access_check.permission'] = $instance = new \Drupal\user\Access\PermissionAccessCheck();

        $instance->_serviceId = 'access_check.permission';

        return $instance;
    }

    /**
     * Gets the 'access_check.theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\ThemeAccessCheck A Drupal\Core\Theme\ThemeAccessCheck instance.
     */
    protected function getAccessCheck_ThemeService()
    {
        $this->services['access_check.theme'] = $instance = new \Drupal\Core\Theme\ThemeAccessCheck($this->get('theme_handler'));

        $instance->_serviceId = 'access_check.theme';

        return $instance;
    }

    /**
     * Gets the 'access_check.user.login_status' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Access\LoginStatusCheck A Drupal\user\Access\LoginStatusCheck instance.
     */
    protected function getAccessCheck_User_LoginStatusService()
    {
        $this->services['access_check.user.login_status'] = $instance = new \Drupal\user\Access\LoginStatusCheck();

        $instance->_serviceId = 'access_check.user.login_status';

        return $instance;
    }

    /**
     * Gets the 'access_check.user.register' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Access\RegisterAccessCheck A Drupal\user\Access\RegisterAccessCheck instance.
     */
    protected function getAccessCheck_User_RegisterService()
    {
        $this->services['access_check.user.register'] = $instance = new \Drupal\user\Access\RegisterAccessCheck();

        $instance->_serviceId = 'access_check.user.register';

        return $instance;
    }

    /**
     * Gets the 'access_check.user.role' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Access\RoleAccessCheck A Drupal\user\Access\RoleAccessCheck instance.
     */
    protected function getAccessCheck_User_RoleService()
    {
        $this->services['access_check.user.role'] = $instance = new \Drupal\user\Access\RoleAccessCheck();

        $instance->_serviceId = 'access_check.user.role';

        return $instance;
    }

    /**
     * Gets the 'access_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\AccessManager A Drupal\Core\Access\AccessManager instance.
     */
    protected function getAccessManagerService()
    {
        $this->services['access_manager'] = $instance = new \Drupal\Core\Access\AccessManager($this->get('router.route_provider'), $this->get('paramconverter_manager'), $this->get('access_arguments_resolver_factory'), $this->get('current_user'), $this->get('access_manager.check_provider'));

        $instance->_serviceId = 'access_manager';

        return $instance;
    }

    /**
     * Gets the 'account_switcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\AccountSwitcher A Drupal\Core\Session\AccountSwitcher instance.
     */
    protected function getAccountSwitcherService()
    {
        $this->services['account_switcher'] = $instance = new \Drupal\Core\Session\AccountSwitcher($this->get('current_user'), $this->get('session_handler.write_safe'));

        $instance->_serviceId = 'account_switcher';

        return $instance;
    }

    /**
     * Gets the 'ajax_response.attachments_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Ajax\AjaxResponseAttachmentsProcessor A Drupal\Core\Ajax\AjaxResponseAttachmentsProcessor instance.
     */
    protected function getAjaxResponse_AttachmentsProcessorService()
    {
        $this->services['ajax_response.attachments_processor'] = $instance = new \Drupal\Core\Ajax\AjaxResponseAttachmentsProcessor($this->get('asset.resolver'), $this->get('config.factory'), $this->get('asset.css.collection_renderer'), $this->get('asset.js.collection_renderer'), $this->get('request_stack'), $this->get('renderer'), $this->get('module_handler'));

        $instance->_serviceId = 'ajax_response.attachments_processor';

        return $instance;
    }

    /**
     * Gets the 'ajax_response.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\AjaxResponseSubscriber A Drupal\Core\EventSubscriber\AjaxResponseSubscriber instance.
     */
    protected function getAjaxResponse_SubscriberService()
    {
        $this->services['ajax_response.subscriber'] = $instance = new \Drupal\Core\EventSubscriber\AjaxResponseSubscriber($this->get('ajax_response.attachments_processor'));

        $instance->_serviceId = 'ajax_response.subscriber';

        return $instance;
    }

    /**
     * Gets the 'anonymous_user_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\AnonymousUserResponseSubscriber A Drupal\Core\EventSubscriber\AnonymousUserResponseSubscriber instance.
     */
    protected function getAnonymousUserResponseSubscriberService()
    {
        $this->services['anonymous_user_response_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\AnonymousUserResponseSubscriber($this->get('current_user'));

        $instance->_serviceId = 'anonymous_user_response_subscriber';

        return $instance;
    }

    /**
     * Gets the 'app.root' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SplString A SplString instance.
     */
    protected function getApp_RootService()
    {
        return $this->services['app.root'] = call_user_func(array(new \Drupal\Core\AppRootFactory($this->get('kernel')), 'get'));
    }

    /**
     * Gets the 'asset.css.collection_grouper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\CssCollectionGrouper A Drupal\Core\Asset\CssCollectionGrouper instance.
     */
    protected function getAsset_Css_CollectionGrouperService()
    {
        $this->services['asset.css.collection_grouper'] = $instance = new \Drupal\Core\Asset\CssCollectionGrouper();

        $instance->_serviceId = 'asset.css.collection_grouper';

        return $instance;
    }

    /**
     * Gets the 'asset.css.collection_optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\CssCollectionOptimizer A Drupal\Core\Asset\CssCollectionOptimizer instance.
     */
    protected function getAsset_Css_CollectionOptimizerService()
    {
        $this->services['asset.css.collection_optimizer'] = $instance = new \Drupal\Core\Asset\CssCollectionOptimizer($this->get('asset.css.collection_grouper'), $this->get('asset.css.optimizer'), $this->get('asset.css.dumper'), $this->get('state'));

        $instance->_serviceId = 'asset.css.collection_optimizer';

        return $instance;
    }

    /**
     * Gets the 'asset.css.collection_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\CssCollectionRenderer A Drupal\Core\Asset\CssCollectionRenderer instance.
     */
    protected function getAsset_Css_CollectionRendererService()
    {
        $this->services['asset.css.collection_renderer'] = $instance = new \Drupal\Core\Asset\CssCollectionRenderer($this->get('state'));

        $instance->_serviceId = 'asset.css.collection_renderer';

        return $instance;
    }

    /**
     * Gets the 'asset.css.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\AssetDumper A Drupal\Core\Asset\AssetDumper instance.
     */
    protected function getAsset_Css_DumperService()
    {
        $this->services['asset.css.dumper'] = $instance = new \Drupal\Core\Asset\AssetDumper();

        $instance->_serviceId = 'asset.css.dumper';

        return $instance;
    }

    /**
     * Gets the 'asset.css.optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\CssOptimizer A Drupal\Core\Asset\CssOptimizer instance.
     */
    protected function getAsset_Css_OptimizerService()
    {
        $this->services['asset.css.optimizer'] = $instance = new \Drupal\Core\Asset\CssOptimizer();

        $instance->_serviceId = 'asset.css.optimizer';

        return $instance;
    }

    /**
     * Gets the 'asset.js.collection_grouper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\JsCollectionGrouper A Drupal\Core\Asset\JsCollectionGrouper instance.
     */
    protected function getAsset_Js_CollectionGrouperService()
    {
        $this->services['asset.js.collection_grouper'] = $instance = new \Drupal\Core\Asset\JsCollectionGrouper();

        $instance->_serviceId = 'asset.js.collection_grouper';

        return $instance;
    }

    /**
     * Gets the 'asset.js.collection_optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\JsCollectionOptimizer A Drupal\Core\Asset\JsCollectionOptimizer instance.
     */
    protected function getAsset_Js_CollectionOptimizerService()
    {
        $this->services['asset.js.collection_optimizer'] = $instance = new \Drupal\Core\Asset\JsCollectionOptimizer($this->get('asset.js.collection_grouper'), $this->get('asset.js.optimizer'), $this->get('asset.js.dumper'), $this->get('state'));

        $instance->_serviceId = 'asset.js.collection_optimizer';

        return $instance;
    }

    /**
     * Gets the 'asset.js.collection_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\JsCollectionRenderer A Drupal\Core\Asset\JsCollectionRenderer instance.
     */
    protected function getAsset_Js_CollectionRendererService()
    {
        $this->services['asset.js.collection_renderer'] = $instance = new \Drupal\Core\Asset\JsCollectionRenderer($this->get('state'));

        $instance->_serviceId = 'asset.js.collection_renderer';

        return $instance;
    }

    /**
     * Gets the 'asset.js.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\AssetDumper A Drupal\Core\Asset\AssetDumper instance.
     */
    protected function getAsset_Js_DumperService()
    {
        $this->services['asset.js.dumper'] = $instance = new \Drupal\Core\Asset\AssetDumper();

        $instance->_serviceId = 'asset.js.dumper';

        return $instance;
    }

    /**
     * Gets the 'asset.js.optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\JsOptimizer A Drupal\Core\Asset\JsOptimizer instance.
     */
    protected function getAsset_Js_OptimizerService()
    {
        $this->services['asset.js.optimizer'] = $instance = new \Drupal\Core\Asset\JsOptimizer();

        $instance->_serviceId = 'asset.js.optimizer';

        return $instance;
    }

    /**
     * Gets the 'asset.resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\AssetResolver A Drupal\Core\Asset\AssetResolver instance.
     */
    protected function getAsset_ResolverService()
    {
        $this->services['asset.resolver'] = $instance = new \Drupal\Core\Asset\AssetResolver($this->get('library.discovery'), $this->get('library.dependency_resolver'), $this->get('module_handler'), $this->get('theme.manager'), $this->get('language_manager'), $this->get('cache.data'));

        $instance->_serviceId = 'asset.resolver';

        return $instance;
    }

    /**
     * Gets the 'authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Authentication\AuthenticationManager A Drupal\Core\Authentication\AuthenticationManager instance.
     */
    protected function getAuthenticationService()
    {
        $this->services['authentication'] = $instance = new \Drupal\Core\Authentication\AuthenticationManager($this->get('authentication_collector'));

        $instance->_serviceId = 'authentication';

        return $instance;
    }

    /**
     * Gets the 'authentication_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Authentication\AuthenticationCollector A Drupal\Core\Authentication\AuthenticationCollector instance.
     */
    protected function getAuthenticationCollectorService()
    {
        $this->services['authentication_collector'] = $instance = new \Drupal\Core\Authentication\AuthenticationCollector();

        $instance->addProvider($this->get('user.authentication.cookie'), 'cookie', 0, true);
        $instance->_serviceId = 'authentication_collector';

        return $instance;
    }

    /**
     * Gets the 'authentication_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\AuthenticationSubscriber A Drupal\Core\EventSubscriber\AuthenticationSubscriber instance.
     */
    protected function getAuthenticationSubscriberService()
    {
        $this->services['authentication_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\AuthenticationSubscriber($this->get('authentication'), $this->get('current_user'));

        $instance->_serviceId = 'authentication_subscriber';

        return $instance;
    }

    /**
     * Gets the 'bare_html_page_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Render\BareHtmlPageRenderer A Drupal\Core\ProxyClass\Render\BareHtmlPageRenderer instance.
     */
    protected function getBareHtmlPageRendererService()
    {
        $this->services['bare_html_page_renderer'] = $instance = new \Drupal\Core\ProxyClass\Render\BareHtmlPageRenderer($this, 'drupal.proxy_original_service.bare_html_page_renderer');

        $instance->_serviceId = 'bare_html_page_renderer';

        return $instance;
    }

    /**
     * Gets the 'batch.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Batch\BatchStorage A Drupal\Core\ProxyClass\Batch\BatchStorage instance.
     */
    protected function getBatch_StorageService()
    {
        $this->services['batch.storage'] = $instance = new \Drupal\Core\ProxyClass\Batch\BatchStorage($this, 'drupal.proxy_original_service.batch.storage');

        $instance->_serviceId = 'batch.storage';

        return $instance;
    }

    /**
     * Gets the 'breadcrumb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Breadcrumb\BreadcrumbManager A Drupal\Core\Breadcrumb\BreadcrumbManager instance.
     */
    protected function getBreadcrumbService()
    {
        $this->services['breadcrumb'] = $instance = new \Drupal\Core\Breadcrumb\BreadcrumbManager($this->get('module_handler'));

        $instance->addBuilder($this->get('system.breadcrumb.default'), 0);
        $instance->_serviceId = 'breadcrumb';

        return $instance;
    }

    /**
     * Gets the 'cache.backend.apcu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\ApcuBackendFactory A Drupal\Core\Cache\ApcuBackendFactory instance.
     */
    protected function getCache_Backend_ApcuService()
    {
        $this->services['cache.backend.apcu'] = $instance = new \Drupal\Core\Cache\ApcuBackendFactory($this->get('app.root'), $this->get('site.path'), $this->get('cache_tags.invalidator.checksum'));

        $instance->_serviceId = 'cache.backend.apcu';

        return $instance;
    }

    /**
     * Gets the 'cache.backend.chainedfast' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\ChainedFastBackendFactory A Drupal\Core\Cache\ChainedFastBackendFactory instance.
     */
    protected function getCache_Backend_ChainedfastService()
    {
        $this->services['cache.backend.chainedfast'] = $instance = new \Drupal\Core\Cache\ChainedFastBackendFactory($this->get('settings'));

        $instance->setContainer($this);
        $instance->_serviceId = 'cache.backend.chainedfast';

        return $instance;
    }

    /**
     * Gets the 'cache.backend.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\DatabaseBackendFactory A Drupal\Core\Cache\DatabaseBackendFactory instance.
     */
    protected function getCache_Backend_DatabaseService()
    {
        $this->services['cache.backend.database'] = $instance = new \Drupal\Core\Cache\DatabaseBackendFactory($this->get('database'), $this->get('cache_tags.invalidator.checksum'));

        $instance->_serviceId = 'cache.backend.database';

        return $instance;
    }

    /**
     * Gets the 'cache.backend.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\PhpBackendFactory A Drupal\Core\Cache\PhpBackendFactory instance.
     */
    protected function getCache_Backend_PhpService()
    {
        $this->services['cache.backend.php'] = $instance = new \Drupal\Core\Cache\PhpBackendFactory($this->get('cache_tags.invalidator.checksum'));

        $instance->_serviceId = 'cache.backend.php';

        return $instance;
    }

    /**
     * Gets the 'cache.bootstrap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_BootstrapService()
    {
        $this->services['cache.bootstrap'] = $instance = $this->get('cache_factory')->get('bootstrap');

        $instance->_serviceId = 'cache.bootstrap';

        return $instance;
    }

    /**
     * Gets the 'cache.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_ConfigService()
    {
        $this->services['cache.config'] = $instance = $this->get('cache_factory')->get('config');

        $instance->_serviceId = 'cache.config';

        return $instance;
    }

    /**
     * Gets the 'cache.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DataService()
    {
        $this->services['cache.data'] = $instance = $this->get('cache_factory')->get('data');

        $instance->_serviceId = 'cache.data';

        return $instance;
    }

    /**
     * Gets the 'cache.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DefaultService()
    {
        $this->services['cache.default'] = $instance = $this->get('cache_factory')->get('default');

        $instance->_serviceId = 'cache.default';

        return $instance;
    }

    /**
     * Gets the 'cache.discovery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DiscoveryService()
    {
        $this->services['cache.discovery'] = $instance = $this->get('cache_factory')->get('discovery');

        $instance->_serviceId = 'cache.discovery';

        return $instance;
    }

    /**
     * Gets the 'cache.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_EntityService()
    {
        $this->services['cache.entity'] = $instance = $this->get('cache_factory')->get('entity');

        $instance->_serviceId = 'cache.entity';

        return $instance;
    }

    /**
     * Gets the 'cache.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_MenuService()
    {
        $this->services['cache.menu'] = $instance = $this->get('cache_factory')->get('menu');

        $instance->_serviceId = 'cache.menu';

        return $instance;
    }

    /**
     * Gets the 'cache.render' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_RenderService()
    {
        $this->services['cache.render'] = $instance = $this->get('cache_factory')->get('render');

        $instance->_serviceId = 'cache.render';

        return $instance;
    }

    /**
     * Gets the 'cache_context.cookies' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\CookiesCacheContext A Drupal\Core\Cache\Context\CookiesCacheContext instance.
     */
    protected function getCacheContext_CookiesService()
    {
        $this->services['cache_context.cookies'] = $instance = new \Drupal\Core\Cache\Context\CookiesCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.cookies';

        return $instance;
    }

    /**
     * Gets the 'cache_context.headers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\HeadersCacheContext A Drupal\Core\Cache\Context\HeadersCacheContext instance.
     */
    protected function getCacheContext_HeadersService()
    {
        $this->services['cache_context.headers'] = $instance = new \Drupal\Core\Cache\Context\HeadersCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.headers';

        return $instance;
    }

    /**
     * Gets the 'cache_context.ip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\IpCacheContext A Drupal\Core\Cache\Context\IpCacheContext instance.
     */
    protected function getCacheContext_IpService()
    {
        $this->services['cache_context.ip'] = $instance = new \Drupal\Core\Cache\Context\IpCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.ip';

        return $instance;
    }

    /**
     * Gets the 'cache_context.languages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\LanguagesCacheContext A Drupal\Core\Cache\Context\LanguagesCacheContext instance.
     */
    protected function getCacheContext_LanguagesService()
    {
        $this->services['cache_context.languages'] = $instance = new \Drupal\Core\Cache\Context\LanguagesCacheContext($this->get('language_manager'));

        $instance->_serviceId = 'cache_context.languages';

        return $instance;
    }

    /**
     * Gets the 'cache_context.request_format' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\RequestFormatCacheContext A Drupal\Core\Cache\Context\RequestFormatCacheContext instance.
     */
    protected function getCacheContext_RequestFormatService()
    {
        $this->services['cache_context.request_format'] = $instance = new \Drupal\Core\Cache\Context\RequestFormatCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.request_format';

        return $instance;
    }

    /**
     * Gets the 'cache_context.route' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\RouteCacheContext A Drupal\Core\Cache\Context\RouteCacheContext instance.
     */
    protected function getCacheContext_RouteService()
    {
        $this->services['cache_context.route'] = $instance = new \Drupal\Core\Cache\Context\RouteCacheContext($this->get('current_route_match'));

        $instance->_serviceId = 'cache_context.route';

        return $instance;
    }

    /**
     * Gets the 'cache_context.route.menu_active_trails' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\MenuActiveTrailsCacheContext A Drupal\Core\Cache\Context\MenuActiveTrailsCacheContext instance.
     */
    protected function getCacheContext_Route_MenuActiveTrailsService()
    {
        $this->services['cache_context.route.menu_active_trails'] = $instance = new \Drupal\Core\Cache\Context\MenuActiveTrailsCacheContext();

        $instance->setContainer($this);
        $instance->_serviceId = 'cache_context.route.menu_active_trails';

        return $instance;
    }

    /**
     * Gets the 'cache_context.route.name' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\RouteNameCacheContext A Drupal\Core\Cache\Context\RouteNameCacheContext instance.
     */
    protected function getCacheContext_Route_NameService()
    {
        $this->services['cache_context.route.name'] = $instance = new \Drupal\Core\Cache\Context\RouteNameCacheContext($this->get('current_route_match'));

        $instance->_serviceId = 'cache_context.route.name';

        return $instance;
    }

    /**
     * Gets the 'cache_context.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\SessionCacheContext A Drupal\Core\Cache\Context\SessionCacheContext instance.
     */
    protected function getCacheContext_SessionService()
    {
        $this->services['cache_context.session'] = $instance = new \Drupal\Core\Cache\Context\SessionCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.session';

        return $instance;
    }

    /**
     * Gets the 'cache_context.theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\ThemeCacheContext A Drupal\Core\Cache\Context\ThemeCacheContext instance.
     */
    protected function getCacheContext_ThemeService()
    {
        $this->services['cache_context.theme'] = $instance = new \Drupal\Core\Cache\Context\ThemeCacheContext($this->get('theme.manager'));

        $instance->_serviceId = 'cache_context.theme';

        return $instance;
    }

    /**
     * Gets the 'cache_context.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\TimeZoneCacheContext A Drupal\Core\Cache\Context\TimeZoneCacheContext instance.
     */
    protected function getCacheContext_TimezoneService()
    {
        $this->services['cache_context.timezone'] = $instance = new \Drupal\Core\Cache\Context\TimeZoneCacheContext();

        $instance->_serviceId = 'cache_context.timezone';

        return $instance;
    }

    /**
     * Gets the 'cache_context.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\UrlCacheContext A Drupal\Core\Cache\Context\UrlCacheContext instance.
     */
    protected function getCacheContext_UrlService()
    {
        $this->services['cache_context.url'] = $instance = new \Drupal\Core\Cache\Context\UrlCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.url';

        return $instance;
    }

    /**
     * Gets the 'cache_context.url.query_args' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\QueryArgsCacheContext A Drupal\Core\Cache\Context\QueryArgsCacheContext instance.
     */
    protected function getCacheContext_Url_QueryArgsService()
    {
        $this->services['cache_context.url.query_args'] = $instance = new \Drupal\Core\Cache\Context\QueryArgsCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.url.query_args';

        return $instance;
    }

    /**
     * Gets the 'cache_context.url.query_args.pagers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\PagersCacheContext A Drupal\Core\Cache\Context\PagersCacheContext instance.
     */
    protected function getCacheContext_Url_QueryArgs_PagersService()
    {
        $this->services['cache_context.url.query_args.pagers'] = $instance = new \Drupal\Core\Cache\Context\PagersCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.url.query_args.pagers';

        return $instance;
    }

    /**
     * Gets the 'cache_context.url.site' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\SiteCacheContext A Drupal\Core\Cache\Context\SiteCacheContext instance.
     */
    protected function getCacheContext_Url_SiteService()
    {
        $this->services['cache_context.url.site'] = $instance = new \Drupal\Core\Cache\Context\SiteCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.url.site';

        return $instance;
    }

    /**
     * Gets the 'cache_context.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\UserCacheContext A Drupal\Core\Cache\Context\UserCacheContext instance.
     */
    protected function getCacheContext_UserService()
    {
        $this->services['cache_context.user'] = $instance = new \Drupal\Core\Cache\Context\UserCacheContext($this->get('current_user'));

        $instance->_serviceId = 'cache_context.user';

        return $instance;
    }

    /**
     * Gets the 'cache_context.user.is_super_user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\IsSuperUserCacheContext A Drupal\Core\Cache\Context\IsSuperUserCacheContext instance.
     */
    protected function getCacheContext_User_IsSuperUserService()
    {
        $this->services['cache_context.user.is_super_user'] = $instance = new \Drupal\Core\Cache\Context\IsSuperUserCacheContext($this->get('current_user'));

        $instance->_serviceId = 'cache_context.user.is_super_user';

        return $instance;
    }

    /**
     * Gets the 'cache_context.user.permissions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\AccountPermissionsCacheContext A Drupal\Core\Cache\Context\AccountPermissionsCacheContext instance.
     */
    protected function getCacheContext_User_PermissionsService()
    {
        $this->services['cache_context.user.permissions'] = $instance = new \Drupal\Core\Cache\Context\AccountPermissionsCacheContext($this->get('current_user'), $this->get('user_permissions_hash_generator'));

        $instance->_serviceId = 'cache_context.user.permissions';

        return $instance;
    }

    /**
     * Gets the 'cache_context.user.roles' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\UserRolesCacheContext A Drupal\Core\Cache\Context\UserRolesCacheContext instance.
     */
    protected function getCacheContext_User_RolesService()
    {
        $this->services['cache_context.user.roles'] = $instance = new \Drupal\Core\Cache\Context\UserRolesCacheContext($this->get('current_user'));

        $instance->_serviceId = 'cache_context.user.roles';

        return $instance;
    }

    /**
     * Gets the 'cache_contexts_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\CacheContextsManager A Drupal\Core\Cache\Context\CacheContextsManager instance.
     */
    protected function getCacheContextsManagerService()
    {
        $this->services['cache_contexts_manager'] = $instance = new \Drupal\Core\Cache\Context\CacheContextsManager($this, array(0 => 'cookies', 1 => 'headers', 2 => 'ip', 3 => 'languages', 4 => 'request_format', 5 => 'route', 6 => 'route.menu_active_trails', 7 => 'route.name', 8 => 'session', 9 => 'theme', 10 => 'timezone', 11 => 'url', 12 => 'url.query_args', 13 => 'url.query_args.pagers', 14 => 'url.site', 15 => 'user', 16 => 'user.is_super_user', 17 => 'user.permissions', 18 => 'user.roles'));

        $instance->_serviceId = 'cache_contexts_manager';

        return $instance;
    }

    /**
     * Gets the 'cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheFactory A Drupal\Core\Cache\CacheFactory instance.
     */
    protected function getCacheFactoryService()
    {
        $this->services['cache_factory'] = $instance = new \Drupal\Core\Cache\CacheFactory($this->get('settings'), array('bootstrap' => 'cache.backend.chainedfast', 'config' => 'cache.backend.chainedfast', 'discovery' => 'cache.backend.chainedfast'));

        $instance->setContainer($this);
        $instance->_serviceId = 'cache_factory';

        return $instance;
    }

    /**
     * Gets the 'cache_router_rebuild_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\CacheRouterRebuildSubscriber A Drupal\Core\EventSubscriber\CacheRouterRebuildSubscriber instance.
     */
    protected function getCacheRouterRebuildSubscriberService()
    {
        $this->services['cache_router_rebuild_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\CacheRouterRebuildSubscriber();

        $instance->_serviceId = 'cache_router_rebuild_subscriber';

        return $instance;
    }

    /**
     * Gets the 'cache_tags.invalidator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheTagsInvalidator A Drupal\Core\Cache\CacheTagsInvalidator instance.
     */
    protected function getCacheTags_InvalidatorService()
    {
        $this->services['cache_tags.invalidator'] = $instance = new \Drupal\Core\Cache\CacheTagsInvalidator();

        $instance->setContainer($this);
        $instance->setContainer($this);
        $instance->addInvalidator($this->get('cache_tags.invalidator.checksum'));
        $instance->_serviceId = 'cache_tags.invalidator';

        return $instance;
    }

    /**
     * Gets the 'cache_tags.invalidator.checksum' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\DatabaseCacheTagsChecksum A Drupal\Core\Cache\DatabaseCacheTagsChecksum instance.
     */
    protected function getCacheTags_Invalidator_ChecksumService()
    {
        $this->services['cache_tags.invalidator.checksum'] = $instance = new \Drupal\Core\Cache\DatabaseCacheTagsChecksum($this->get('database'));

        $instance->_serviceId = 'cache_tags.invalidator.checksum';

        return $instance;
    }

    /**
     * Gets the 'class_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getClassLoaderService()
    {
        throw new RuntimeException('You have requested a synthetic service ("class_loader"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'class_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\DependencyInjection\ClassResolver A Drupal\Core\DependencyInjection\ClassResolver instance.
     */
    protected function getClassResolverService()
    {
        $this->services['class_resolver'] = $instance = new \Drupal\Core\DependencyInjection\ClassResolver();

        $instance->setContainer($this);
        $instance->_serviceId = 'class_resolver';

        return $instance;
    }

    /**
     * Gets the 'client_error_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ClientErrorResponseSubscriber A Drupal\Core\EventSubscriber\ClientErrorResponseSubscriber instance.
     */
    protected function getClientErrorResponseSubscriberService()
    {
        $this->services['client_error_response_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ClientErrorResponseSubscriber();

        $instance->_serviceId = 'client_error_response_subscriber';

        return $instance;
    }

    /**
     * Gets the 'config.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\ConfigFactory A Drupal\Core\Config\ConfigFactory instance.
     */
    protected function getConfig_FactoryService()
    {
        $this->services['config.factory'] = $instance = new \Drupal\Core\Config\ConfigFactory($this->get('config.storage'), $this->get('event_dispatcher'), $this->get('config.typed'));

        $instance->_serviceId = 'config.factory';

        return $instance;
    }

    /**
     * Gets the 'config.importer_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\Importer\FinalMissingContentSubscriber A Drupal\Core\Config\Importer\FinalMissingContentSubscriber instance.
     */
    protected function getConfig_ImporterSubscriberService()
    {
        $this->services['config.importer_subscriber'] = $instance = new \Drupal\Core\Config\Importer\FinalMissingContentSubscriber();

        $instance->_serviceId = 'config.importer_subscriber';

        return $instance;
    }

    /**
     * Gets the 'config.installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Config\ConfigInstaller A Drupal\Core\ProxyClass\Config\ConfigInstaller instance.
     */
    protected function getConfig_InstallerService()
    {
        $this->services['config.installer'] = $instance = new \Drupal\Core\ProxyClass\Config\ConfigInstaller($this, 'drupal.proxy_original_service.config.installer');

        $instance->_serviceId = 'config.installer';

        return $instance;
    }

    /**
     * Gets the 'config.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\ConfigManager A Drupal\Core\Config\ConfigManager instance.
     */
    protected function getConfig_ManagerService()
    {
        $this->services['config.manager'] = $instance = new \Drupal\Core\Config\ConfigManager($this->get('entity.manager'), $this->get('config.factory'), $this->get('config.typed'), $this->get('string_translation'), $this->get('config.storage'), $this->get('event_dispatcher'));

        $instance->_serviceId = 'config.manager';

        return $instance;
    }

    /**
     * Gets the 'config.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\CachedStorage A Drupal\Core\Config\CachedStorage instance.
     */
    protected function getConfig_StorageService()
    {
        $this->services['config.storage'] = $instance = new \Drupal\Core\Config\CachedStorage(new \Drupal\Core\Config\DatabaseStorage($this->get('database'), 'config'), $this->get('cache.config'));

        $instance->_serviceId = 'config.storage';

        return $instance;
    }

    /**
     * Gets the 'config.storage.schema' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\ExtensionInstallStorage A Drupal\Core\Config\ExtensionInstallStorage instance.
     */
    protected function getConfig_Storage_SchemaService()
    {
        $this->services['config.storage.schema'] = $instance = new \Drupal\Core\Config\ExtensionInstallStorage($this->get('config.storage'), 'config/schema');

        $instance->_serviceId = 'config.storage.schema';

        return $instance;
    }

    /**
     * Gets the 'config.storage.snapshot' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\DatabaseStorage A Drupal\Core\Config\DatabaseStorage instance.
     */
    protected function getConfig_Storage_SnapshotService()
    {
        $this->services['config.storage.snapshot'] = $instance = new \Drupal\Core\Config\DatabaseStorage($this->get('database'), 'config_snapshot');

        $instance->_serviceId = 'config.storage.snapshot';

        return $instance;
    }

    /**
     * Gets the 'config.storage.staging' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\FileStorage A Drupal\Core\Config\FileStorage instance.
     */
    protected function getConfig_Storage_StagingService()
    {
        $this->services['config.storage.staging'] = $instance = \Drupal\Core\Config\FileStorageFactory::getStaging();

        $instance->_serviceId = 'config.storage.staging';

        return $instance;
    }

    /**
     * Gets the 'config.typed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\TypedConfigManager A Drupal\Core\Config\TypedConfigManager instance.
     */
    protected function getConfig_TypedService()
    {
        $this->services['config.typed'] = $instance = new \Drupal\Core\Config\TypedConfigManager($this->get('config.storage'), $this->get('config.storage.schema'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'config.typed';

        return $instance;
    }

    /**
     * Gets the 'config_import_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ConfigImportSubscriber A Drupal\Core\EventSubscriber\ConfigImportSubscriber instance.
     */
    protected function getConfigImportSubscriberService()
    {
        $this->services['config_import_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ConfigImportSubscriber($this->get('theme_handler'));

        $instance->_serviceId = 'config_import_subscriber';

        return $instance;
    }

    /**
     * Gets the 'config_snapshot_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber A Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber instance.
     */
    protected function getConfigSnapshotSubscriberService()
    {
        $this->services['config_snapshot_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber($this->get('config.manager'), $this->get('config.storage'), $this->get('config.storage.snapshot'));

        $instance->_serviceId = 'config_snapshot_subscriber';

        return $instance;
    }

    /**
     * Gets the 'container.namespaces' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ArrayObject A ArrayObject instance.
     */
    protected function getContainer_NamespacesService()
    {
        $this->services['container.namespaces'] = $instance = new \ArrayObject(array('Drupal\\system' => 'core/modules/system/src', 'Drupal\\user' => 'core/modules/user/src', 'Drupal\\Core\\Block' => 'core/lib/Drupal/Core/Block', 'Drupal\\Core\\Config' => 'core/lib/Drupal/Core/Config', 'Drupal\\Core\\Datetime' => 'core/lib/Drupal/Core/Datetime', 'Drupal\\Core\\Entity' => 'core/lib/Drupal/Core/Entity', 'Drupal\\Core\\Field' => 'core/lib/Drupal/Core/Field', 'Drupal\\Core\\Mail' => 'core/lib/Drupal/Core/Mail', 'Drupal\\Core\\ProxyClass' => 'core/lib/Drupal/Core/ProxyClass', 'Drupal\\Core\\Render' => 'core/lib/Drupal/Core/Render', 'Drupal\\Core\\TypedData' => 'core/lib/Drupal/Core/TypedData', 'Drupal\\Core\\Validation' => 'core/lib/Drupal/Core/Validation', 'Drupal\\Component\\Annotation' => 'core/lib/Drupal/Component/Annotation'));

        $instance->_serviceId = 'container.namespaces';

        return $instance;
    }

    /**
     * Gets the 'content_type_header_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\ContentTypeHeaderMatcher A Drupal\Core\Routing\ContentTypeHeaderMatcher instance.
     */
    protected function getContentTypeHeaderMatcherService()
    {
        $this->services['content_type_header_matcher'] = $instance = new \Drupal\Core\Routing\ContentTypeHeaderMatcher();

        $instance->_serviceId = 'content_type_header_matcher';

        return $instance;
    }

    /**
     * Gets the 'content_uninstall_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Entity\ContentUninstallValidator A Drupal\Core\ProxyClass\Entity\ContentUninstallValidator instance.
     */
    protected function getContentUninstallValidatorService()
    {
        $this->services['content_uninstall_validator'] = $instance = new \Drupal\Core\ProxyClass\Entity\ContentUninstallValidator($this, 'drupal.proxy_original_service.content_uninstall_validator');

        $instance->_serviceId = 'content_uninstall_validator';

        return $instance;
    }

    /**
     * Gets the 'context.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Plugin\Context\ContextHandler A Drupal\Core\Plugin\Context\ContextHandler instance.
     */
    protected function getContext_HandlerService()
    {
        $this->services['context.handler'] = $instance = new \Drupal\Core\Plugin\Context\ContextHandler($this->get('typed_data_manager'));

        $instance->_serviceId = 'context.handler';

        return $instance;
    }

    /**
     * Gets the 'context.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Plugin\Context\LazyContextRepository A Drupal\Core\Plugin\Context\LazyContextRepository instance.
     */
    protected function getContext_RepositoryService()
    {
        $this->services['context.repository'] = $instance = new \Drupal\Core\Plugin\Context\LazyContextRepository($this, array(0 => 'language.current_language_context', 1 => 'user.current_user_context'));

        $instance->_serviceId = 'context.repository';

        return $instance;
    }

    /**
     * Gets the 'controller.entity_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\HtmlEntityFormController A Drupal\Core\Entity\HtmlEntityFormController instance.
     */
    protected function getController_EntityFormService()
    {
        $this->services['controller.entity_form'] = $instance = new \Drupal\Core\Entity\HtmlEntityFormController($this->get('controller_resolver'), $this->get('form_builder'), $this->get('entity.manager'));

        $instance->_serviceId = 'controller.entity_form';

        return $instance;
    }

    /**
     * Gets the 'controller.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Controller\HtmlFormController A Drupal\Core\Controller\HtmlFormController instance.
     */
    protected function getController_FormService()
    {
        $this->services['controller.form'] = $instance = new \Drupal\Core\Controller\HtmlFormController($this->get('controller_resolver'), $this->get('form_builder'), $this->get('class_resolver'));

        $instance->_serviceId = 'controller.form';

        return $instance;
    }

    /**
     * Gets the 'controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Controller\ControllerResolver A Drupal\Core\Controller\ControllerResolver instance.
     */
    protected function getControllerResolverService()
    {
        $this->services['controller_resolver'] = $instance = new \Drupal\Core\Controller\ControllerResolver($this->get('class_resolver'));

        $instance->_serviceId = 'controller_resolver';

        return $instance;
    }

    /**
     * Gets the 'country_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Locale\CountryManager A Drupal\Core\Locale\CountryManager instance.
     */
    protected function getCountryManagerService()
    {
        $this->services['country_manager'] = $instance = new \Drupal\Core\Locale\CountryManager($this->get('module_handler'));

        $instance->_serviceId = 'country_manager';

        return $instance;
    }

    /**
     * Gets the 'cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Cron A Drupal\Core\ProxyClass\Cron instance.
     */
    protected function getCronService()
    {
        $this->services['cron'] = $instance = new \Drupal\Core\ProxyClass\Cron($this, 'drupal.proxy_original_service.cron');

        $instance->_serviceId = 'cron';

        return $instance;
    }

    /**
     * Gets the 'csrf_token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\CsrfTokenGenerator A Drupal\Core\Access\CsrfTokenGenerator instance.
     */
    protected function getCsrfTokenService()
    {
        $this->services['csrf_token'] = $instance = new \Drupal\Core\Access\CsrfTokenGenerator($this->get('private_key'), $this->get('session_manager.metadata_bag'));

        $instance->_serviceId = 'csrf_token';

        return $instance;
    }

    /**
     * Gets the 'current_route_match' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\CurrentRouteMatch A Drupal\Core\Routing\CurrentRouteMatch instance.
     */
    protected function getCurrentRouteMatchService()
    {
        $this->services['current_route_match'] = $instance = new \Drupal\Core\Routing\CurrentRouteMatch($this->get('request_stack'));

        $instance->_serviceId = 'current_route_match';

        return $instance;
    }

    /**
     * Gets the 'current_user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\AccountProxy A Drupal\Core\Session\AccountProxy instance.
     */
    protected function getCurrentUserService()
    {
        $this->services['current_user'] = $instance = new \Drupal\Core\Session\AccountProxy();

        $instance->_serviceId = 'current_user';

        return $instance;
    }

    /**
     * Gets the 'database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Database\Connection A Drupal\Core\Database\Connection instance.
     */
    protected function getDatabaseService()
    {
        $this->services['database'] = $instance = \Drupal\Core\Database\Database::getConnection('default');

        $instance->_serviceId = 'database';

        return $instance;
    }

    /**
     * Gets the 'database.replica' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Database\Connection A Drupal\Core\Database\Connection instance.
     */
    protected function getDatabase_ReplicaService()
    {
        $this->services['database.replica'] = $instance = \Drupal\Core\Database\Database::getConnection('replica');

        $instance->_serviceId = 'database.replica';

        return $instance;
    }

    /**
     * Gets the 'date.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Datetime\DateFormatter A Drupal\Core\Datetime\DateFormatter instance.
     */
    protected function getDate_FormatterService()
    {
        $this->services['date.formatter'] = $instance = new \Drupal\Core\Datetime\DateFormatter($this->get('entity.manager'), $this->get('language_manager'), $this->get('string_translation'), $this->get('config.factory'), $this->get('request_stack'));

        $instance->_serviceId = 'date.formatter';

        return $instance;
    }

    /**
     * Gets the 'diff.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Diff\DiffFormatter A Drupal\Core\Diff\DiffFormatter instance.
     */
    protected function getDiff_FormatterService()
    {
        $this->services['diff.formatter'] = $instance = new \Drupal\Core\Diff\DiffFormatter($this->get('config.factory'));

        $instance->_serviceId = 'diff.formatter';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.bare_html_page_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\BareHtmlPageRenderer A Drupal\Core\Render\BareHtmlPageRenderer instance.
     */
    protected function getDrupal_ProxyOriginalService_BareHtmlPageRendererService()
    {
        $this->services['drupal.proxy_original_service.bare_html_page_renderer'] = $instance = new \Drupal\Core\Render\BareHtmlPageRenderer($this->get('renderer'), $this->get('html_response.attachments_processor'));

        $instance->_serviceId = 'drupal.proxy_original_service.bare_html_page_renderer';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.batch.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Batch\BatchStorage A Drupal\Core\Batch\BatchStorage instance.
     */
    protected function getDrupal_ProxyOriginalService_Batch_StorageService()
    {
        $this->services['drupal.proxy_original_service.batch.storage'] = $instance = new \Drupal\Core\Batch\BatchStorage($this->get('database'), $this->get('session'), $this->get('csrf_token'));

        $instance->_serviceId = 'drupal.proxy_original_service.batch.storage';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.config.installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\ConfigInstaller A Drupal\Core\Config\ConfigInstaller instance.
     */
    protected function getDrupal_ProxyOriginalService_Config_InstallerService()
    {
        $this->services['drupal.proxy_original_service.config.installer'] = $instance = new \Drupal\Core\Config\ConfigInstaller($this->get('config.factory'), $this->get('config.storage'), $this->get('config.typed'), $this->get('config.manager'), $this->get('event_dispatcher'));

        $instance->_serviceId = 'drupal.proxy_original_service.config.installer';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.content_uninstall_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\ContentUninstallValidator A Drupal\Core\Entity\ContentUninstallValidator instance.
     */
    protected function getDrupal_ProxyOriginalService_ContentUninstallValidatorService()
    {
        $this->services['drupal.proxy_original_service.content_uninstall_validator'] = $instance = new \Drupal\Core\Entity\ContentUninstallValidator($this->get('entity.manager'), $this->get('string_translation'));

        $instance->_serviceId = 'drupal.proxy_original_service.content_uninstall_validator';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cron A Drupal\Core\Cron instance.
     */
    protected function getDrupal_ProxyOriginalService_CronService()
    {
        $this->services['drupal.proxy_original_service.cron'] = $instance = new \Drupal\Core\Cron($this->get('module_handler'), $this->get('lock'), $this->get('queue'), $this->get('state'), $this->get('account_switcher'), $this->get('logger.channel.cron'), $this->get('plugin.manager.queue_worker'));

        $instance->_serviceId = 'drupal.proxy_original_service.cron';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.field_uninstall_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Field\FieldModuleUninstallValidator A Drupal\Core\Field\FieldModuleUninstallValidator instance.
     */
    protected function getDrupal_ProxyOriginalService_FieldUninstallValidatorService()
    {
        $this->services['drupal.proxy_original_service.field_uninstall_validator'] = $instance = new \Drupal\Core\Field\FieldModuleUninstallValidator($this->get('entity.manager'), $this->get('string_translation'));

        $instance->_serviceId = 'drupal.proxy_original_service.field_uninstall_validator';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.file.mime_type.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\File\MimeType\MimeTypeGuesser A Drupal\Core\File\MimeType\MimeTypeGuesser instance.
     */
    protected function getDrupal_ProxyOriginalService_File_MimeType_GuesserService()
    {
        $this->services['drupal.proxy_original_service.file.mime_type.guesser'] = $instance = new \Drupal\Core\File\MimeType\MimeTypeGuesser($this->get('stream_wrapper_manager'));

        $instance->addGuesser($this->get('drupal.proxy_original_service.file.mime_type.guesser.extension'), 0);
        $instance->_serviceId = 'drupal.proxy_original_service.file.mime_type.guesser';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.file.mime_type.guesser.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser A Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser instance.
     */
    protected function getDrupal_ProxyOriginalService_File_MimeType_Guesser_ExtensionService()
    {
        $this->services['drupal.proxy_original_service.file.mime_type.guesser.extension'] = $instance = new \Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser($this->get('module_handler'));

        $instance->_serviceId = 'drupal.proxy_original_service.file.mime_type.guesser.extension';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.lock' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Lock\DatabaseLockBackend A Drupal\Core\Lock\DatabaseLockBackend instance.
     */
    protected function getDrupal_ProxyOriginalService_LockService()
    {
        $this->services['drupal.proxy_original_service.lock'] = $instance = new \Drupal\Core\Lock\DatabaseLockBackend($this->get('database'));

        $instance->_serviceId = 'drupal.proxy_original_service.lock';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.lock.persistent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Lock\PersistentDatabaseLockBackend A Drupal\Core\Lock\PersistentDatabaseLockBackend instance.
     */
    protected function getDrupal_ProxyOriginalService_Lock_PersistentService()
    {
        $this->services['drupal.proxy_original_service.lock.persistent'] = $instance = new \Drupal\Core\Lock\PersistentDatabaseLockBackend($this->get('database'));

        $instance->_serviceId = 'drupal.proxy_original_service.lock.persistent';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.module_installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Extension\ModuleInstaller A Drupal\Core\Extension\ModuleInstaller instance.
     */
    protected function getDrupal_ProxyOriginalService_ModuleInstallerService()
    {
        $this->services['drupal.proxy_original_service.module_installer'] = $instance = new \Drupal\Core\Extension\ModuleInstaller($this->get('app.root'), $this->get('module_handler'), $this->get('kernel'));

        $instance->addUninstallValidator($this->get('drupal.proxy_original_service.required_module_uninstall_validator'));
        $instance->addUninstallValidator($this->get('drupal.proxy_original_service.field_uninstall_validator'));
        $instance->addUninstallValidator($this->get('drupal.proxy_original_service.content_uninstall_validator'));
        $instance->_serviceId = 'drupal.proxy_original_service.module_installer';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.page_cache_response_policy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PageCache\ChainResponsePolicy A Drupal\Core\PageCache\ChainResponsePolicy instance.
     */
    protected function getDrupal_ProxyOriginalService_PageCacheResponsePolicyService()
    {
        $this->services['drupal.proxy_original_service.page_cache_response_policy'] = $instance = new \Drupal\Core\PageCache\ChainResponsePolicy();

        $instance->addPolicy(new \Drupal\Core\PageCache\ResponsePolicy\NoServerError());
        $instance->addPolicy(new \Drupal\Core\PageCache\ResponsePolicy\DenyNoCacheRoutes($this->get('current_route_match')));
        $instance->addPolicy($this->get('page_cache_kill_switch'));
        $instance->_serviceId = 'drupal.proxy_original_service.page_cache_response_policy';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.paramconverter.configentity_admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ParamConverter\AdminPathConfigEntityConverter A Drupal\Core\ParamConverter\AdminPathConfigEntityConverter instance.
     */
    protected function getDrupal_ProxyOriginalService_Paramconverter_ConfigentityAdminService()
    {
        $this->services['drupal.proxy_original_service.paramconverter.configentity_admin'] = $instance = new \Drupal\Core\ParamConverter\AdminPathConfigEntityConverter($this->get('entity.manager'), $this->get('config.factory'), $this->get('router.admin_context'));

        $instance->_serviceId = 'drupal.proxy_original_service.paramconverter.configentity_admin';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.paramconverter.menu_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ParamConverter\MenuLinkPluginConverter A Drupal\Core\ParamConverter\MenuLinkPluginConverter instance.
     */
    protected function getDrupal_ProxyOriginalService_Paramconverter_MenuLinkService()
    {
        $this->services['drupal.proxy_original_service.paramconverter.menu_link'] = $instance = new \Drupal\Core\ParamConverter\MenuLinkPluginConverter($this->get('plugin.manager.menu.link'));

        $instance->_serviceId = 'drupal.proxy_original_service.paramconverter.menu_link';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.plugin.cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Plugin\CachedDiscoveryClearer A Drupal\Core\Plugin\CachedDiscoveryClearer instance.
     */
    protected function getDrupal_ProxyOriginalService_Plugin_CacheClearerService()
    {
        $this->services['drupal.proxy_original_service.plugin.cache_clearer'] = $instance = new \Drupal\Core\Plugin\CachedDiscoveryClearer();

        $instance->_serviceId = 'drupal.proxy_original_service.plugin.cache_clearer';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.required_module_uninstall_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Extension\RequiredModuleUninstallValidator A Drupal\Core\Extension\RequiredModuleUninstallValidator instance.
     */
    protected function getDrupal_ProxyOriginalService_RequiredModuleUninstallValidatorService()
    {
        $this->services['drupal.proxy_original_service.required_module_uninstall_validator'] = $instance = new \Drupal\Core\Extension\RequiredModuleUninstallValidator($this->get('string_translation'));

        $instance->_serviceId = 'drupal.proxy_original_service.required_module_uninstall_validator';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.router.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\RouteBuilder A Drupal\Core\Routing\RouteBuilder instance.
     */
    protected function getDrupal_ProxyOriginalService_Router_BuilderService()
    {
        $this->services['drupal.proxy_original_service.router.builder'] = $instance = new \Drupal\Core\Routing\RouteBuilder($this->get('router.dumper'), $this->get('lock'), $this->get('event_dispatcher'), $this->get('module_handler'), $this->get('controller_resolver'), $this->get('access_manager.check_provider'));

        $instance->_serviceId = 'drupal.proxy_original_service.router.builder';

        return $instance;
    }

    /**
     * Gets the 'drupal.proxy_original_service.router.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\MatcherDumper A Drupal\Core\Routing\MatcherDumper instance.
     */
    protected function getDrupal_ProxyOriginalService_Router_DumperService()
    {
        $this->services['drupal.proxy_original_service.router.dumper'] = $instance = new \Drupal\Core\Routing\MatcherDumper($this->get('database'), $this->get('state'));

        $instance->_serviceId = 'drupal.proxy_original_service.router.dumper';

        return $instance;
    }

    /**
     * Gets the 'early_rendering_controller_wrapper_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\EarlyRenderingControllerWrapperSubscriber A Drupal\Core\EventSubscriber\EarlyRenderingControllerWrapperSubscriber instance.
     */
    protected function getEarlyRenderingControllerWrapperSubscriberService()
    {
        $this->services['early_rendering_controller_wrapper_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\EarlyRenderingControllerWrapperSubscriber($this->get('controller_resolver'), $this->get('renderer'));

        $instance->_serviceId = 'early_rendering_controller_wrapper_subscriber';

        return $instance;
    }

    /**
     * Gets the 'email.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Egulias\EmailValidator\EmailValidator A Egulias\EmailValidator\EmailValidator instance.
     */
    protected function getEmail_ValidatorService()
    {
        $this->services['email.validator'] = $instance = new \Egulias\EmailValidator\EmailValidator();

        $instance->_serviceId = 'email.validator';

        return $instance;
    }

    /**
     * Gets the 'entity.autocomplete_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityAutocompleteMatcher A Drupal\Core\Entity\EntityAutocompleteMatcher instance.
     */
    protected function getEntity_AutocompleteMatcherService()
    {
        $this->services['entity.autocomplete_matcher'] = $instance = new \Drupal\Core\Entity\EntityAutocompleteMatcher($this->get('plugin.manager.entity_reference_selection'));

        $instance->_serviceId = 'entity.autocomplete_matcher';

        return $instance;
    }

    /**
     * Gets the 'entity.bundle_config_import_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\Event\BundleConfigImportValidate A Drupal\Core\Entity\Event\BundleConfigImportValidate instance.
     */
    protected function getEntity_BundleConfigImportValidatorService()
    {
        $this->services['entity.bundle_config_import_validator'] = $instance = new \Drupal\Core\Entity\Event\BundleConfigImportValidate($this->get('config.manager'), $this->get('entity.manager'));

        $instance->_serviceId = 'entity.bundle_config_import_validator';

        return $instance;
    }

    /**
     * Gets the 'entity.definition_update_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityDefinitionUpdateManager A Drupal\Core\Entity\EntityDefinitionUpdateManager instance.
     */
    protected function getEntity_DefinitionUpdateManagerService()
    {
        $this->services['entity.definition_update_manager'] = $instance = new \Drupal\Core\Entity\EntityDefinitionUpdateManager($this->get('entity.manager'));

        $instance->_serviceId = 'entity.definition_update_manager';

        return $instance;
    }

    /**
     * Gets the 'entity.form_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityFormBuilder A Drupal\Core\Entity\EntityFormBuilder instance.
     */
    protected function getEntity_FormBuilderService()
    {
        $this->services['entity.form_builder'] = $instance = new \Drupal\Core\Entity\EntityFormBuilder($this->get('entity.manager'), $this->get('form_builder'));

        $instance->_serviceId = 'entity.form_builder';

        return $instance;
    }

    /**
     * Gets the 'entity.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityManager A Drupal\Core\Entity\EntityManager instance.
     */
    protected function getEntity_ManagerService()
    {
        $this->services['entity.manager'] = $instance = new \Drupal\Core\Entity\EntityManager($this->get('container.namespaces'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('string_translation'), $this->get('class_resolver'), $this->get('typed_data_manager'), $this->get('keyvalue'), $this->get('event_dispatcher'));

        $instance->setContainer($this);
        $instance->_serviceId = 'entity.manager';

        return $instance;
    }

    /**
     * Gets the 'entity.query' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\Query\QueryFactory A Drupal\Core\Entity\Query\QueryFactory instance.
     */
    protected function getEntity_QueryService()
    {
        $this->services['entity.query'] = $instance = new \Drupal\Core\Entity\Query\QueryFactory($this->get('entity.manager'));

        $instance->setContainer($this);
        $instance->_serviceId = 'entity.query';

        return $instance;
    }

    /**
     * Gets the 'entity.query.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\Entity\Query\QueryFactory A Drupal\Core\Config\Entity\Query\QueryFactory instance.
     */
    protected function getEntity_Query_ConfigService()
    {
        $this->services['entity.query.config'] = $instance = new \Drupal\Core\Config\Entity\Query\QueryFactory($this->get('config.factory'), $this->get('keyvalue'), $this->get('config.manager'));

        $instance->_serviceId = 'entity.query.config';

        return $instance;
    }

    /**
     * Gets the 'entity.query.keyvalue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\KeyValueStore\Query\QueryFactory A Drupal\Core\Entity\KeyValueStore\Query\QueryFactory instance.
     */
    protected function getEntity_Query_KeyvalueService()
    {
        $this->services['entity.query.keyvalue'] = $instance = new \Drupal\Core\Entity\KeyValueStore\Query\QueryFactory($this->get('keyvalue'));

        $instance->_serviceId = 'entity.query.keyvalue';

        return $instance;
    }

    /**
     * Gets the 'entity.query.null' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\Query\Null\QueryFactory A Drupal\Core\Entity\Query\Null\QueryFactory instance.
     */
    protected function getEntity_Query_NullService()
    {
        $this->services['entity.query.null'] = $instance = new \Drupal\Core\Entity\Query\Null\QueryFactory();

        $instance->_serviceId = 'entity.query.null';

        return $instance;
    }

    /**
     * Gets the 'entity.query.sql' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\Query\Sql\QueryFactory A Drupal\Core\Entity\Query\Sql\QueryFactory instance.
     */
    protected function getEntity_Query_SqlService()
    {
        $this->services['entity.query.sql'] = $instance = new \Drupal\Core\Entity\Query\Sql\QueryFactory($this->get('database'));

        $instance->_serviceId = 'entity.query.sql';

        return $instance;
    }

    /**
     * Gets the 'entity_route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\EntityRouteProviderSubscriber A Drupal\Core\EventSubscriber\EntityRouteProviderSubscriber instance.
     */
    protected function getEntityRouteSubscriberService()
    {
        $this->services['entity_route_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\EntityRouteProviderSubscriber($this->get('entity.manager'));

        $instance->_serviceId = 'entity_route_subscriber';

        return $instance;
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher A Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher($this, array('routing.route_finished' => array(200 => array(0 => array('service' => array(0 => 'cache_router_rebuild_subscriber', 1 => 'onRouterFinished'))), 100 => array(0 => array('service' => array(0 => 'menu.rebuild_subscriber', 1 => 'onRouterRebuild'))), 0 => array(0 => array('service' => array(0 => 'router.route_provider', 1 => 'reset')), 1 => array('service' => array(0 => 'router.route_preloader', 1 => 'onFinishedRoutes')), 2 => array('service' => array(0 => 'router.path_roots_subscriber', 1 => 'onRouteFinished')))), 'config.save' => array(255 => array(0 => array('service' => array(0 => 'config.factory', 1 => 'onConfigSave'))), 128 => array(0 => array('service' => array(0 => 'entity.query.config', 1 => 'onConfigSave'))), 0 => array(0 => array('service' => array(0 => 'system.config_cache_tag', 1 => 'onSave')))), 'config.delete' => array(255 => array(0 => array('service' => array(0 => 'config.factory', 1 => 'onConfigDelete'))), 128 => array(0 => array('service' => array(0 => 'entity.query.config', 1 => 'onConfigDelete')))), 'config.importer.missing_content' => array(-1024 => array(0 => array('service' => array(0 => 'config.importer_subscriber', 1 => 'onMissingContent')))), 'routing.route_dynamic' => array(0 => array(0 => array('service' => array(0 => 'entity_route_subscriber', 1 => 'onDynamicRouteEvent')))), 'config.importer.validate' => array(512 => array(0 => array('service' => array(0 => 'system.config_subscriber', 1 => 'onConfigImporterValidateNotEmpty'))), 256 => array(0 => array('service' => array(0 => 'system.config_subscriber', 1 => 'onConfigImporterValidateSiteUUID'))), 20 => array(0 => array('service' => array(0 => 'entity.bundle_config_import_validator', 1 => 'onConfigImporterValidate')), 1 => array('service' => array(0 => 'config_import_subscriber', 1 => 'onConfigImporterValidate')))), 'routing.route_alter' => array(5000 => array(0 => array('service' => array(0 => 'route_http_method_subscriber', 1 => 'onRouteBuilding'))), 0 => array(0 => array('service' => array(0 => 'route_subscriber.module', 1 => 'onAlterRoutes')), 1 => array('service' => array(0 => 'route_special_attributes_subscriber', 1 => 'onAlterRoutes'))), -150 => array(0 => array('service' => array(0 => 'route_subscriber.entity', 1 => 'onRoutingRouteAlterSetType'))), -200 => array(0 => array('service' => array(0 => 'system.admin_path.route_subscriber', 1 => 'onAlterRoutes'))), -220 => array(0 => array('service' => array(0 => 'paramconverter_subscriber', 1 => 'onRoutingRouteAlterSetParameterConverters'))), -300 => array(0 => array('service' => array(0 => 'route_filter_subscriber', 1 => 'onRouteAlter')), 1 => array('service' => array(0 => 'route_enhancer_subscriber', 1 => 'onRouteAlter'))), -1024 => array(0 => array('service' => array(0 => 'router.route_preloader', 1 => 'onAlterRoutes')), 1 => array('service' => array(0 => 'router.path_roots_subscriber', 1 => 'onRouteAlter')))), 'kernel.request' => array(1000 => array(0 => array('service' => array(0 => 'redirect_leading_slashes_subscriber', 1 => 'redirect'))), 300 => array(0 => array('service' => array(0 => 'authentication_subscriber', 1 => 'onKernelRequestAuthenticate'))), 100 => array(0 => array('service' => array(0 => 'redirect_response_subscriber', 1 => 'sanitizeDestination'))), 50 => array(0 => array('service' => array(0 => 'ajax_response.subscriber', 1 => 'onRequest'))), 32 => array(0 => array('service' => array(0 => 'router_listener', 1 => 'onKernelRequest'))), 31 => array(0 => array('service' => array(0 => 'authentication_subscriber', 1 => 'onKernelRequestFilterProvider')), 1 => array('service' => array(0 => 'user_maintenance_mode_subscriber', 1 => 'onKernelRequestMaintenance'))), 30 => array(0 => array('service' => array(0 => 'maintenance_mode_subscriber', 1 => 'onKernelRequestMaintenance'))), 29 => array(0 => array('service' => array(0 => 'route_content_controller_subscriber', 1 => 'onRequestDeriveFormWrapper'))), 0 => array(0 => array('service' => array(0 => 'router.route_preloader', 1 => 'onRequest')), 1 => array('service' => array(0 => 'replica_database_ignore__subscriber', 1 => 'checkReplicaServer')))), 'kernel.response' => array(128 => array(0 => array('service' => array(0 => 'exception.enforced_form_response', 1 => 'onKernelResponse'))), 10 => array(0 => array('service' => array(0 => 'route_access_response_subscriber', 1 => 'onRespond')), 1 => array('service' => array(0 => 'client_error_response_subscriber', 1 => 'onRespond'))), 5 => array(0 => array('service' => array(0 => 'anonymous_user_response_subscriber', 1 => 'onRespond'))), 0 => array(0 => array('service' => array(0 => 'html_response.subscriber', 1 => 'onRespond')), 1 => array('service' => array(0 => 'finish_response_subscriber', 1 => 'onRespond')), 2 => array('service' => array(0 => 'response_generator_subscriber', 1 => 'onRespond')), 3 => array('service' => array(0 => 'redirect_response_subscriber', 1 => 'checkRedirectUrl'))), -100 => array(0 => array('service' => array(0 => 'ajax_response.subscriber', 1 => 'onResponse'))), -512 => array(0 => array('service' => array(0 => 'response_filter.active_link', 1 => 'onResponse')))), 'kernel.exception' => array(200 => array(0 => array('service' => array(0 => 'exception.fast_404_html', 1 => 'onException'))), 128 => array(0 => array('service' => array(0 => 'exception.enforced_form_response', 1 => 'onKernelException'))), 75 => array(0 => array('service' => array(0 => 'route_enhancer.param_conversion', 1 => 'onException')), 1 => array('service' => array(0 => 'authentication_subscriber', 1 => 'onExceptionSendChallenge')), 2 => array('service' => array(0 => 'user_access_denied_subscriber', 1 => 'onException'))), 51 => array(0 => array('service' => array(0 => 'form_ajax_subscriber', 1 => 'onException'))), 50 => array(0 => array('service' => array(0 => 'exception.logger', 1 => 'onException'))), 3 => array(0 => array('service' => array(0 => 'exception.test_site', 1 => 'onException'))), 0 => array(0 => array('service' => array(0 => 'maintenance_mode_subscriber', 1 => 'onKernelRequestMaintenance'))), -50 => array(0 => array('service' => array(0 => 'exception.custom_page_html', 1 => 'onException'))), -75 => array(0 => array('service' => array(0 => 'exception.default_json', 1 => 'onException')), 1 => array('service' => array(0 => 'exception.custom_page_json', 1 => 'onException'))), -128 => array(0 => array('service' => array(0 => 'exception.default_html', 1 => 'onException'))), -256 => array(0 => array('service' => array(0 => 'exception.default', 1 => 'onException')))), 'kernel.view' => array(1 => array(0 => array('service' => array(0 => 'form_ajax_subscriber', 1 => 'onView'))), 0 => array(0 => array('service' => array(0 => 'psr_response_view_subscriber', 1 => 'onKernelView')), 1 => array('service' => array(0 => 'main_content_view_subscriber', 1 => 'onViewRenderArray'))), -10 => array(0 => array('service' => array(0 => 'accept_negotiation_406', 1 => 'onViewDetect406')))), 'kernel.finish_request' => array(0 => array(0 => array('service' => array(0 => 'router_listener', 1 => 'onKernelFinishRequest')))), 'kernel.controller' => array(200 => array(0 => array('service' => array(0 => 'path_subscriber', 1 => 'onKernelController'))), 0 => array(0 => array('service' => array(0 => 'early_rendering_controller_wrapper_subscriber', 1 => 'onController')))), 'kernel.terminate' => array(300 => array(0 => array('service' => array(0 => 'user_last_access_subscriber', 1 => 'onKernelTerminate'))), 200 => array(0 => array('service' => array(0 => 'path_subscriber', 1 => 'onKernelTerminate'))), 100 => array(0 => array('service' => array(0 => 'request_close_subscriber', 1 => 'onTerminate')), 1 => array('service' => array(0 => 'kernel_destruct_subscriber', 1 => 'onKernelTerminate')), 2 => array('service' => array(0 => 'system.automatic_cron', 1 => 'onTerminate')))), 'config.importer.import' => array(40 => array(0 => array('service' => array(0 => 'config_snapshot_subscriber', 1 => 'onConfigImporterImport'))))));

        $instance->_serviceId = 'event_dispatcher';

        return $instance;
    }

    /**
     * Gets the 'exception.custom_page_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\CustomPageExceptionHtmlSubscriber A Drupal\Core\EventSubscriber\CustomPageExceptionHtmlSubscriber instance.
     */
    protected function getException_CustomPageHtmlService()
    {
        $this->services['exception.custom_page_html'] = $instance = new \Drupal\Core\EventSubscriber\CustomPageExceptionHtmlSubscriber($this->get('config.factory'), $this->get('path.alias_manager'), $this->get('http_kernel'), $this->get('logger.channel.php'), $this->get('redirect.destination'));

        $instance->_serviceId = 'exception.custom_page_html';

        return $instance;
    }

    /**
     * Gets the 'exception.custom_page_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ExceptionJsonSubscriber A Drupal\Core\EventSubscriber\ExceptionJsonSubscriber instance.
     */
    protected function getException_CustomPageJsonService()
    {
        $this->services['exception.custom_page_json'] = $instance = new \Drupal\Core\EventSubscriber\ExceptionJsonSubscriber($this->get('config.factory'), $this->get('path.alias_manager'), $this->get('http_kernel'));

        $instance->_serviceId = 'exception.custom_page_json';

        return $instance;
    }

    /**
     * Gets the 'exception.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\DefaultExceptionSubscriber A Drupal\Core\EventSubscriber\DefaultExceptionSubscriber instance.
     */
    protected function getException_DefaultService()
    {
        $this->services['exception.default'] = $instance = new \Drupal\Core\EventSubscriber\DefaultExceptionSubscriber($this->get('config.factory'));

        $instance->_serviceId = 'exception.default';

        return $instance;
    }

    /**
     * Gets the 'exception.default_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\DefaultExceptionHtmlSubscriber A Drupal\Core\EventSubscriber\DefaultExceptionHtmlSubscriber instance.
     */
    protected function getException_DefaultHtmlService()
    {
        $this->services['exception.default_html'] = $instance = new \Drupal\Core\EventSubscriber\DefaultExceptionHtmlSubscriber($this->get('http_kernel'), $this->get('logger.channel.php'), $this->get('redirect.destination'));

        $instance->_serviceId = 'exception.default_html';

        return $instance;
    }

    /**
     * Gets the 'exception.default_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ExceptionJsonSubscriber A Drupal\Core\EventSubscriber\ExceptionJsonSubscriber instance.
     */
    protected function getException_DefaultJsonService()
    {
        $this->services['exception.default_json'] = $instance = new \Drupal\Core\EventSubscriber\ExceptionJsonSubscriber();

        $instance->_serviceId = 'exception.default_json';

        return $instance;
    }

    /**
     * Gets the 'exception.enforced_form_response' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\EnforcedFormResponseSubscriber A Drupal\Core\EventSubscriber\EnforcedFormResponseSubscriber instance.
     */
    protected function getException_EnforcedFormResponseService()
    {
        $this->services['exception.enforced_form_response'] = $instance = new \Drupal\Core\EventSubscriber\EnforcedFormResponseSubscriber();

        $instance->_serviceId = 'exception.enforced_form_response';

        return $instance;
    }

    /**
     * Gets the 'exception.fast_404_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\Fast404ExceptionHtmlSubscriber A Drupal\Core\EventSubscriber\Fast404ExceptionHtmlSubscriber instance.
     */
    protected function getException_Fast404HtmlService()
    {
        $this->services['exception.fast_404_html'] = $instance = new \Drupal\Core\EventSubscriber\Fast404ExceptionHtmlSubscriber($this->get('config.factory'), $this->get('http_kernel'));

        $instance->_serviceId = 'exception.fast_404_html';

        return $instance;
    }

    /**
     * Gets the 'exception.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ExceptionLoggingSubscriber A Drupal\Core\EventSubscriber\ExceptionLoggingSubscriber instance.
     */
    protected function getException_LoggerService()
    {
        $this->services['exception.logger'] = $instance = new \Drupal\Core\EventSubscriber\ExceptionLoggingSubscriber($this->get('logger.factory'));

        $instance->_serviceId = 'exception.logger';

        return $instance;
    }

    /**
     * Gets the 'exception.test_site' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ExceptionTestSiteSubscriber A Drupal\Core\EventSubscriber\ExceptionTestSiteSubscriber instance.
     */
    protected function getException_TestSiteService()
    {
        $this->services['exception.test_site'] = $instance = new \Drupal\Core\EventSubscriber\ExceptionTestSiteSubscriber();

        $instance->_serviceId = 'exception.test_site';

        return $instance;
    }

    /**
     * Gets the 'feed.bridge.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Bridge\ZfExtensionManagerSfContainer A Drupal\Component\Bridge\ZfExtensionManagerSfContainer instance.
     */
    protected function getFeed_Bridge_ReaderService()
    {
        $this->services['feed.bridge.reader'] = $instance = new \Drupal\Component\Bridge\ZfExtensionManagerSfContainer('feed.reader.');

        $instance->setContainer($this);
        $instance->_serviceId = 'feed.bridge.reader';

        return $instance;
    }

    /**
     * Gets the 'feed.bridge.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Bridge\ZfExtensionManagerSfContainer A Drupal\Component\Bridge\ZfExtensionManagerSfContainer instance.
     */
    protected function getFeed_Bridge_WriterService()
    {
        $this->services['feed.bridge.writer'] = $instance = new \Drupal\Component\Bridge\ZfExtensionManagerSfContainer('feed.writer.');

        $instance->setContainer($this);
        $instance->_serviceId = 'feed.bridge.writer';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.atomentry' service.
     *
     * @return \Zend\Feed\Reader\Extension\Atom\Entry A Zend\Feed\Reader\Extension\Atom\Entry instance.
     */
    protected function getFeed_Reader_AtomentryService()
    {
        $instance = new \Zend\Feed\Reader\Extension\Atom\Entry();

        $instance->_serviceId = 'feed.reader.atomentry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.atomfeed' service.
     *
     * @return \Zend\Feed\Reader\Extension\Atom\Feed A Zend\Feed\Reader\Extension\Atom\Feed instance.
     */
    protected function getFeed_Reader_AtomfeedService()
    {
        $instance = new \Zend\Feed\Reader\Extension\Atom\Feed();

        $instance->_serviceId = 'feed.reader.atomfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.contententry' service.
     *
     * @return \Zend\Feed\Reader\Extension\Content\Entry A Zend\Feed\Reader\Extension\Content\Entry instance.
     */
    protected function getFeed_Reader_ContententryService()
    {
        $instance = new \Zend\Feed\Reader\Extension\Content\Entry();

        $instance->_serviceId = 'feed.reader.contententry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.dublincoreentry' service.
     *
     * @return \Zend\Feed\Reader\Extension\DublinCore\Entry A Zend\Feed\Reader\Extension\DublinCore\Entry instance.
     */
    protected function getFeed_Reader_DublincoreentryService()
    {
        $instance = new \Zend\Feed\Reader\Extension\DublinCore\Entry();

        $instance->_serviceId = 'feed.reader.dublincoreentry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.dublincorefeed' service.
     *
     * @return \Zend\Feed\Reader\Extension\DublinCore\Feed A Zend\Feed\Reader\Extension\DublinCore\Feed instance.
     */
    protected function getFeed_Reader_DublincorefeedService()
    {
        $instance = new \Zend\Feed\Reader\Extension\DublinCore\Feed();

        $instance->_serviceId = 'feed.reader.dublincorefeed';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.podcastentry' service.
     *
     * @return \Zend\Feed\Reader\Extension\Podcast\Entry A Zend\Feed\Reader\Extension\Podcast\Entry instance.
     */
    protected function getFeed_Reader_PodcastentryService()
    {
        $instance = new \Zend\Feed\Reader\Extension\Podcast\Entry();

        $instance->_serviceId = 'feed.reader.podcastentry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.podcastfeed' service.
     *
     * @return \Zend\Feed\Reader\Extension\Podcast\Feed A Zend\Feed\Reader\Extension\Podcast\Feed instance.
     */
    protected function getFeed_Reader_PodcastfeedService()
    {
        $instance = new \Zend\Feed\Reader\Extension\Podcast\Feed();

        $instance->_serviceId = 'feed.reader.podcastfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.slashentry' service.
     *
     * @return \Zend\Feed\Reader\Extension\Slash\Entry A Zend\Feed\Reader\Extension\Slash\Entry instance.
     */
    protected function getFeed_Reader_SlashentryService()
    {
        $instance = new \Zend\Feed\Reader\Extension\Slash\Entry();

        $instance->_serviceId = 'feed.reader.slashentry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.threadentry' service.
     *
     * @return \Zend\Feed\Reader\Extension\Thread\Entry A Zend\Feed\Reader\Extension\Thread\Entry instance.
     */
    protected function getFeed_Reader_ThreadentryService()
    {
        $instance = new \Zend\Feed\Reader\Extension\Thread\Entry();

        $instance->_serviceId = 'feed.reader.threadentry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.wellformedwebentry' service.
     *
     * @return \Zend\Feed\Reader\Extension\WellFormedWeb\Entry A Zend\Feed\Reader\Extension\WellFormedWeb\Entry instance.
     */
    protected function getFeed_Reader_WellformedwebentryService()
    {
        $instance = new \Zend\Feed\Reader\Extension\WellFormedWeb\Entry();

        $instance->_serviceId = 'feed.reader.wellformedwebentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.atomrendererfeed' service.
     *
     * @return \Zend\Feed\Writer\Extension\Atom\Renderer\Feed A Zend\Feed\Writer\Extension\Atom\Renderer\Feed instance.
     */
    protected function getFeed_Writer_AtomrendererfeedService()
    {
        $instance = new \Zend\Feed\Writer\Extension\Atom\Renderer\Feed();

        $instance->_serviceId = 'feed.writer.atomrendererfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.contentrendererentry' service.
     *
     * @return \Zend\Feed\Writer\Extension\Content\Renderer\Entry A Zend\Feed\Writer\Extension\Content\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ContentrendererentryService()
    {
        $instance = new \Zend\Feed\Writer\Extension\Content\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.contentrendererentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.dublincorerendererentry' service.
     *
     * @return \Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry A Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry instance.
     */
    protected function getFeed_Writer_DublincorerendererentryService()
    {
        $instance = new \Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.dublincorerendererentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.dublincorerendererfeed' service.
     *
     * @return \Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed A Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed instance.
     */
    protected function getFeed_Writer_DublincorerendererfeedService()
    {
        $instance = new \Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed();

        $instance->_serviceId = 'feed.writer.dublincorerendererfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.itunesentry' service.
     *
     * @return \Zend\Feed\Writer\Extension\ITunes\Entry A Zend\Feed\Writer\Extension\ITunes\Entry instance.
     */
    protected function getFeed_Writer_ItunesentryService()
    {
        $instance = new \Zend\Feed\Writer\Extension\ITunes\Entry();

        $instance->_serviceId = 'feed.writer.itunesentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.itunesfeed' service.
     *
     * @return \Zend\Feed\Writer\Extension\ITunes\Feed A Zend\Feed\Writer\Extension\ITunes\Feed instance.
     */
    protected function getFeed_Writer_ItunesfeedService()
    {
        $instance = new \Zend\Feed\Writer\Extension\ITunes\Feed();

        $instance->_serviceId = 'feed.writer.itunesfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.itunesrendererentry' service.
     *
     * @return \Zend\Feed\Writer\Extension\ITunes\Renderer\Entry A Zend\Feed\Writer\Extension\ITunes\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ItunesrendererentryService()
    {
        $instance = new \Zend\Feed\Writer\Extension\ITunes\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.itunesrendererentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.itunesrendererfeed' service.
     *
     * @return \Zend\Feed\Writer\Extension\ITunes\Renderer\Feed A Zend\Feed\Writer\Extension\ITunes\Renderer\Feed instance.
     */
    protected function getFeed_Writer_ItunesrendererfeedService()
    {
        $instance = new \Zend\Feed\Writer\Extension\ITunes\Renderer\Feed();

        $instance->_serviceId = 'feed.writer.itunesrendererfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.slashrendererentry' service.
     *
     * @return \Zend\Feed\Writer\Extension\Slash\Renderer\Entry A Zend\Feed\Writer\Extension\Slash\Renderer\Entry instance.
     */
    protected function getFeed_Writer_SlashrendererentryService()
    {
        $instance = new \Zend\Feed\Writer\Extension\Slash\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.slashrendererentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.threadingrendererentry' service.
     *
     * @return \Zend\Feed\Writer\Extension\Threading\Renderer\Entry A Zend\Feed\Writer\Extension\Threading\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ThreadingrendererentryService()
    {
        $instance = new \Zend\Feed\Writer\Extension\Threading\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.threadingrendererentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.wellformedwebrendererentry' service.
     *
     * @return \Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry A Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry instance.
     */
    protected function getFeed_Writer_WellformedwebrendererentryService()
    {
        $instance = new \Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.wellformedwebrendererentry';

        return $instance;
    }

    /**
     * Gets the 'field_uninstall_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Field\FieldModuleUninstallValidator A Drupal\Core\ProxyClass\Field\FieldModuleUninstallValidator instance.
     */
    protected function getFieldUninstallValidatorService()
    {
        $this->services['field_uninstall_validator'] = $instance = new \Drupal\Core\ProxyClass\Field\FieldModuleUninstallValidator($this, 'drupal.proxy_original_service.field_uninstall_validator');

        $instance->_serviceId = 'field_uninstall_validator';

        return $instance;
    }

    /**
     * Gets the 'file.mime_type.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\File\MimeType\MimeTypeGuesser A Drupal\Core\ProxyClass\File\MimeType\MimeTypeGuesser instance.
     */
    protected function getFile_MimeType_GuesserService()
    {
        $this->services['file.mime_type.guesser'] = $instance = new \Drupal\Core\ProxyClass\File\MimeType\MimeTypeGuesser($this, 'drupal.proxy_original_service.file.mime_type.guesser');

        $instance->_serviceId = 'file.mime_type.guesser';

        return $instance;
    }

    /**
     * Gets the 'file.mime_type.guesser.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\File\MimeType\ExtensionMimeTypeGuesser A Drupal\Core\ProxyClass\File\MimeType\ExtensionMimeTypeGuesser instance.
     */
    protected function getFile_MimeType_Guesser_ExtensionService()
    {
        $this->services['file.mime_type.guesser.extension'] = $instance = new \Drupal\Core\ProxyClass\File\MimeType\ExtensionMimeTypeGuesser($this, 'drupal.proxy_original_service.file.mime_type.guesser.extension');

        $instance->_serviceId = 'file.mime_type.guesser.extension';

        return $instance;
    }

    /**
     * Gets the 'file_system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\File\FileSystem A Drupal\Core\File\FileSystem instance.
     */
    protected function getFileSystemService()
    {
        $this->services['file_system'] = $instance = new \Drupal\Core\File\FileSystem($this->get('stream_wrapper_manager'), $this->get('settings'), $this->get('logger.channel.file'));

        $instance->_serviceId = 'file_system';

        return $instance;
    }

    /**
     * Gets the 'finish_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\FinishResponseSubscriber A Drupal\Core\EventSubscriber\FinishResponseSubscriber instance.
     */
    protected function getFinishResponseSubscriberService()
    {
        $this->services['finish_response_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\FinishResponseSubscriber($this->get('language_manager'), $this->get('config.factory'), $this->get('page_cache_request_policy'), $this->get('page_cache_response_policy'), $this->get('cache_contexts_manager'));

        $instance->_serviceId = 'finish_response_subscriber';

        return $instance;
    }

    /**
     * Gets the 'flood' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Flood\DatabaseBackend A Drupal\Core\Flood\DatabaseBackend instance.
     */
    protected function getFloodService()
    {
        $this->services['flood'] = $instance = new \Drupal\Core\Flood\DatabaseBackend($this->get('database'), $this->get('request_stack'));

        $instance->_serviceId = 'flood';

        return $instance;
    }

    /**
     * Gets the 'form_ajax_response_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\FormAjaxResponseBuilder A Drupal\Core\Form\FormAjaxResponseBuilder instance.
     */
    protected function getFormAjaxResponseBuilderService()
    {
        $this->services['form_ajax_response_builder'] = $instance = new \Drupal\Core\Form\FormAjaxResponseBuilder($this->get('main_content_renderer.ajax'), $this->get('current_route_match'));

        $instance->_serviceId = 'form_ajax_response_builder';

        return $instance;
    }

    /**
     * Gets the 'form_ajax_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\EventSubscriber\FormAjaxSubscriber A Drupal\Core\Form\EventSubscriber\FormAjaxSubscriber instance.
     */
    protected function getFormAjaxSubscriberService()
    {
        $this->services['form_ajax_subscriber'] = $instance = new \Drupal\Core\Form\EventSubscriber\FormAjaxSubscriber($this->get('form_ajax_response_builder'), $this->get('string_translation'));

        $instance->_serviceId = 'form_ajax_subscriber';

        return $instance;
    }

    /**
     * Gets the 'form_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\FormBuilder A Drupal\Core\Form\FormBuilder instance.
     */
    protected function getFormBuilderService()
    {
        $a = $this->get('module_handler');
        $b = $this->get('request_stack');
        $c = $this->get('csrf_token');

        $this->services['form_builder'] = $instance = new \Drupal\Core\Form\FormBuilder($this->get('form_validator'), $this->get('form_submitter'), new \Drupal\Core\Form\FormCache($this->get('app.root'), $this->get('keyvalue.expirable'), $a, $this->get('current_user'), $c, $this->get('logger.channel.form'), $b, $this->get('page_cache_request_policy')), $a, $this->get('event_dispatcher'), $b, $this->get('class_resolver'), $this->get('plugin.manager.element_info'), $this->get('theme.manager'), $c);

        $instance->_serviceId = 'form_builder';

        return $instance;
    }

    /**
     * Gets the 'form_error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\FormErrorHandler A Drupal\Core\Form\FormErrorHandler instance.
     */
    protected function getFormErrorHandlerService()
    {
        $this->services['form_error_handler'] = $instance = new \Drupal\Core\Form\FormErrorHandler($this->get('string_translation'), $this->get('link_generator'));

        $instance->_serviceId = 'form_error_handler';

        return $instance;
    }

    /**
     * Gets the 'form_submitter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\FormSubmitter A Drupal\Core\Form\FormSubmitter instance.
     */
    protected function getFormSubmitterService()
    {
        $this->services['form_submitter'] = $instance = new \Drupal\Core\Form\FormSubmitter($this->get('request_stack'), $this->get('url_generator'));

        $instance->_serviceId = 'form_submitter';

        return $instance;
    }

    /**
     * Gets the 'form_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\FormValidator A Drupal\Core\Form\FormValidator instance.
     */
    protected function getFormValidatorService()
    {
        $this->services['form_validator'] = $instance = new \Drupal\Core\Form\FormValidator($this->get('request_stack'), $this->get('string_translation'), $this->get('csrf_token'), $this->get('logger.channel.form'), $this->get('form_error_handler'));

        $instance->_serviceId = 'form_validator';

        return $instance;
    }

    /**
     * Gets the 'html_response.attachments_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\HtmlResponseAttachmentsProcessor A Drupal\Core\Render\HtmlResponseAttachmentsProcessor instance.
     */
    protected function getHtmlResponse_AttachmentsProcessorService()
    {
        $this->services['html_response.attachments_processor'] = $instance = new \Drupal\Core\Render\HtmlResponseAttachmentsProcessor($this->get('asset.resolver'), $this->get('config.factory'), $this->get('asset.css.collection_renderer'), $this->get('asset.js.collection_renderer'), $this->get('request_stack'), $this->get('renderer'));

        $instance->_serviceId = 'html_response.attachments_processor';

        return $instance;
    }

    /**
     * Gets the 'html_response.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\HtmlResponseSubscriber A Drupal\Core\EventSubscriber\HtmlResponseSubscriber instance.
     */
    protected function getHtmlResponse_SubscriberService()
    {
        $this->services['html_response.subscriber'] = $instance = new \Drupal\Core\EventSubscriber\HtmlResponseSubscriber($this->get('html_response.attachments_processor'));

        $instance->_serviceId = 'html_response.subscriber';

        return $instance;
    }

    /**
     * Gets the 'http_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \GuzzleHttp\Client A GuzzleHttp\Client instance.
     */
    protected function getHttpClientService()
    {
        $this->services['http_client'] = $instance = $this->get('http_client_factory')->fromOptions();

        $instance->_serviceId = 'http_client';

        return $instance;
    }

    /**
     * Gets the 'http_client_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Http\ClientFactory A Drupal\Core\Http\ClientFactory instance.
     */
    protected function getHttpClientFactoryService()
    {
        $a = \GuzzleHttp\HandlerStack::create();
        call_user_func(array(new \Drupal\Core\Http\HandlerStackConfigurator($this, array()), 'configure'), $a);

        $this->services['http_client_factory'] = $instance = new \Drupal\Core\Http\ClientFactory($a);

        $instance->_serviceId = 'http_client_factory';

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stack\StackedHttpKernel A Stack\StackedHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        $a = $this->get('http_middleware.negotiation');

        $this->services['http_kernel'] = $instance = new \Stack\StackedHttpKernel($a, array(0 => $a, 1 => $this->get('http_middleware.reverse_proxy'), 2 => $this->get('http_middleware.kernel_pre_handle'), 3 => $this->get('http_middleware.session'), 4 => $this->get('http_kernel.basic')));

        $instance->_serviceId = 'http_kernel';

        return $instance;
    }

    /**
     * Gets the 'http_kernel.basic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance.
     */
    protected function getHttpKernel_BasicService()
    {
        $this->services['http_kernel.basic'] = $instance = new \Symfony\Component\HttpKernel\HttpKernel($this->get('event_dispatcher'), $this->get('controller_resolver'), $this->get('request_stack'));

        $instance->_serviceId = 'http_kernel.basic';

        return $instance;
    }

    /**
     * Gets the 'http_middleware.kernel_pre_handle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StackMiddleware\KernelPreHandle A Drupal\Core\StackMiddleware\KernelPreHandle instance.
     */
    protected function getHttpMiddleware_KernelPreHandleService()
    {
        $this->services['http_middleware.kernel_pre_handle'] = $instance = new \Drupal\Core\StackMiddleware\KernelPreHandle($this->get('http_middleware.session'), $this->get('kernel'));

        $instance->_serviceId = 'http_middleware.kernel_pre_handle';

        return $instance;
    }

    /**
     * Gets the 'http_middleware.negotiation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StackMiddleware\NegotiationMiddleware A Drupal\Core\StackMiddleware\NegotiationMiddleware instance.
     */
    protected function getHttpMiddleware_NegotiationService()
    {
        $this->services['http_middleware.negotiation'] = $instance = new \Drupal\Core\StackMiddleware\NegotiationMiddleware($this->get('http_middleware.reverse_proxy'), $this->get('http_negotiation.format_negotiator'));

        $instance->_serviceId = 'http_middleware.negotiation';

        return $instance;
    }

    /**
     * Gets the 'http_middleware.reverse_proxy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StackMiddleware\ReverseProxyMiddleware A Drupal\Core\StackMiddleware\ReverseProxyMiddleware instance.
     */
    protected function getHttpMiddleware_ReverseProxyService()
    {
        $this->services['http_middleware.reverse_proxy'] = $instance = new \Drupal\Core\StackMiddleware\ReverseProxyMiddleware($this->get('http_middleware.kernel_pre_handle'), $this->get('settings'));

        $instance->_serviceId = 'http_middleware.reverse_proxy';

        return $instance;
    }

    /**
     * Gets the 'http_middleware.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StackMiddleware\Session A Drupal\Core\StackMiddleware\Session instance.
     */
    protected function getHttpMiddleware_SessionService()
    {
        $this->services['http_middleware.session'] = $instance = new \Drupal\Core\StackMiddleware\Session($this->get('http_kernel.basic'));

        $instance->setContainer($this);
        $instance->_serviceId = 'http_middleware.session';

        return $instance;
    }

    /**
     * Gets the 'http_negotiation.format_negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ContentNegotiation A Drupal\Core\ContentNegotiation instance.
     */
    protected function getHttpNegotiation_FormatNegotiatorService()
    {
        $this->services['http_negotiation.format_negotiator'] = $instance = new \Drupal\Core\ContentNegotiation();

        $instance->_serviceId = 'http_negotiation.format_negotiator';

        return $instance;
    }

    /**
     * Gets the 'image.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Image\ImageFactory A Drupal\Core\Image\ImageFactory instance.
     */
    protected function getImage_FactoryService()
    {
        $this->services['image.factory'] = $instance = new \Drupal\Core\Image\ImageFactory($this->get('image.toolkit.manager'));

        $instance->_serviceId = 'image.factory';

        return $instance;
    }

    /**
     * Gets the 'image.toolkit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ImageToolkit\ImageToolkitManager A Drupal\Core\ImageToolkit\ImageToolkitManager instance.
     */
    protected function getImage_Toolkit_ManagerService()
    {
        $this->services['image.toolkit.manager'] = $instance = new \Drupal\Core\ImageToolkit\ImageToolkitManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('config.factory'));

        $instance->_serviceId = 'image.toolkit.manager';

        return $instance;
    }

    /**
     * Gets the 'image.toolkit.operation.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ImageToolkit\ImageToolkitOperationManager A Drupal\Core\ImageToolkit\ImageToolkitOperationManager instance.
     */
    protected function getImage_Toolkit_Operation_ManagerService()
    {
        $this->services['image.toolkit.operation.manager'] = $instance = new \Drupal\Core\ImageToolkit\ImageToolkitOperationManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('logger.channel.image'));

        $instance->_serviceId = 'image.toolkit.operation.manager';

        return $instance;
    }

    /**
     * Gets the 'info_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Extension\InfoParser A Drupal\Core\Extension\InfoParser instance.
     */
    protected function getInfoParserService()
    {
        $this->services['info_parser'] = $instance = new \Drupal\Core\Extension\InfoParser();

        $instance->_serviceId = 'info_parser';

        return $instance;
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel_destruct_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\KernelDestructionSubscriber A Drupal\Core\EventSubscriber\KernelDestructionSubscriber instance.
     */
    protected function getKernelDestructSubscriberService()
    {
        $this->services['kernel_destruct_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\KernelDestructionSubscriber();

        $instance->setContainer($this);
        $instance->registerService('path.alias_whitelist');
        $instance->registerService('menu.active_trail');
        $instance->registerService('theme.registry');
        $instance->registerService('library.discovery.collector');
        $instance->registerService('drupal.proxy_original_service.router.builder');
        $instance->_serviceId = 'kernel_destruct_subscriber';

        return $instance;
    }

    /**
     * Gets the 'keyvalue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\KeyValueStore\KeyValueFactory A Drupal\Core\KeyValueStore\KeyValueFactory instance.
     */
    protected function getKeyvalueService()
    {
        $this->services['keyvalue'] = $instance = new \Drupal\Core\KeyValueStore\KeyValueFactory($this, array('default' => 'keyvalue.database'));

        $instance->_serviceId = 'keyvalue';

        return $instance;
    }

    /**
     * Gets the 'keyvalue.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\KeyValueStore\KeyValueDatabaseFactory A Drupal\Core\KeyValueStore\KeyValueDatabaseFactory instance.
     */
    protected function getKeyvalue_DatabaseService()
    {
        $this->services['keyvalue.database'] = $instance = new \Drupal\Core\KeyValueStore\KeyValueDatabaseFactory($this->get('serialization.phpserialize'), $this->get('database'));

        $instance->_serviceId = 'keyvalue.database';

        return $instance;
    }

    /**
     * Gets the 'keyvalue.expirable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\KeyValueStore\KeyValueExpirableFactory A Drupal\Core\KeyValueStore\KeyValueExpirableFactory instance.
     */
    protected function getKeyvalue_ExpirableService()
    {
        $this->services['keyvalue.expirable'] = $instance = new \Drupal\Core\KeyValueStore\KeyValueExpirableFactory($this, array('default' => 'keyvalue.expirable.database'));

        $instance->_serviceId = 'keyvalue.expirable';

        return $instance;
    }

    /**
     * Gets the 'keyvalue.expirable.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory A Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory instance.
     */
    protected function getKeyvalue_Expirable_DatabaseService()
    {
        $this->services['keyvalue.expirable.database'] = $instance = new \Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory($this->get('serialization.phpserialize'), $this->get('database'));

        $instance->_serviceId = 'keyvalue.expirable.database';

        return $instance;
    }

    /**
     * Gets the 'language.current_language_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Language\ContextProvider\CurrentLanguageContext A Drupal\Core\Language\ContextProvider\CurrentLanguageContext instance.
     */
    protected function getLanguage_CurrentLanguageContextService()
    {
        $this->services['language.current_language_context'] = $instance = new \Drupal\Core\Language\ContextProvider\CurrentLanguageContext($this->get('language_manager'));

        $instance->_serviceId = 'language.current_language_context';

        return $instance;
    }

    /**
     * Gets the 'language.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Language\LanguageDefault A Drupal\Core\Language\LanguageDefault instance.
     */
    protected function getLanguage_DefaultService()
    {
        $this->services['language.default'] = $instance = new \Drupal\Core\Language\LanguageDefault(array('id' => 'en', 'name' => 'English', 'direction' => 'ltr', 'weight' => 0, 'locked' => false));

        $instance->_serviceId = 'language.default';

        return $instance;
    }

    /**
     * Gets the 'language_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Language\LanguageManager A Drupal\Core\Language\LanguageManager instance.
     */
    protected function getLanguageManagerService()
    {
        $this->services['language_manager'] = $instance = new \Drupal\Core\Language\LanguageManager($this->get('language.default'));

        $instance->_serviceId = 'language_manager';

        return $instance;
    }

    /**
     * Gets the 'library.dependency_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\LibraryDependencyResolver A Drupal\Core\Asset\LibraryDependencyResolver instance.
     */
    protected function getLibrary_DependencyResolverService()
    {
        $this->services['library.dependency_resolver'] = $instance = new \Drupal\Core\Asset\LibraryDependencyResolver($this->get('library.discovery'));

        $instance->_serviceId = 'library.dependency_resolver';

        return $instance;
    }

    /**
     * Gets the 'library.discovery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\LibraryDiscovery A Drupal\Core\Asset\LibraryDiscovery instance.
     */
    protected function getLibrary_DiscoveryService()
    {
        $this->services['library.discovery'] = $instance = new \Drupal\Core\Asset\LibraryDiscovery($this->get('library.discovery.collector'), $this->get('cache_tags.invalidator'));

        $instance->_serviceId = 'library.discovery';

        return $instance;
    }

    /**
     * Gets the 'library.discovery.collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\LibraryDiscoveryCollector A Drupal\Core\Asset\LibraryDiscoveryCollector instance.
     */
    protected function getLibrary_Discovery_CollectorService()
    {
        $this->services['library.discovery.collector'] = $instance = new \Drupal\Core\Asset\LibraryDiscoveryCollector($this->get('cache.discovery'), $this->get('lock'), $this->get('library.discovery.parser'), $this->get('theme.manager'));

        $instance->_serviceId = 'library.discovery.collector';

        return $instance;
    }

    /**
     * Gets the 'library.discovery.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\LibraryDiscoveryParser A Drupal\Core\Asset\LibraryDiscoveryParser instance.
     */
    protected function getLibrary_Discovery_ParserService()
    {
        $this->services['library.discovery.parser'] = $instance = new \Drupal\Core\Asset\LibraryDiscoveryParser($this->get('app.root'), $this->get('module_handler'), $this->get('theme.manager'));

        $instance->_serviceId = 'library.discovery.parser';

        return $instance;
    }

    /**
     * Gets the 'link_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Utility\LinkGenerator A Drupal\Core\Utility\LinkGenerator instance.
     */
    protected function getLinkGeneratorService()
    {
        $this->services['link_generator'] = $instance = new \Drupal\Core\Utility\LinkGenerator($this->get('url_generator'), $this->get('module_handler'), $this->get('renderer'));

        $instance->_serviceId = 'link_generator';

        return $instance;
    }

    /**
     * Gets the 'lock' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Lock\DatabaseLockBackend A Drupal\Core\ProxyClass\Lock\DatabaseLockBackend instance.
     */
    protected function getLockService()
    {
        $this->services['lock'] = $instance = new \Drupal\Core\ProxyClass\Lock\DatabaseLockBackend($this, 'drupal.proxy_original_service.lock');

        $instance->_serviceId = 'lock';

        return $instance;
    }

    /**
     * Gets the 'lock.persistent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Lock\PersistentDatabaseLockBackend A Drupal\Core\ProxyClass\Lock\PersistentDatabaseLockBackend instance.
     */
    protected function getLock_PersistentService()
    {
        $this->services['lock.persistent'] = $instance = new \Drupal\Core\ProxyClass\Lock\PersistentDatabaseLockBackend($this, 'drupal.proxy_original_service.lock.persistent');

        $instance->_serviceId = 'lock.persistent';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_CronService()
    {
        $this->services['logger.channel.cron'] = $instance = $this->get('logger.factory')->get('cron');

        $instance->_serviceId = 'logger.channel.cron';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_DefaultService()
    {
        $this->services['logger.channel.default'] = $instance = $this->get('logger.factory')->get('system');

        $instance->_serviceId = 'logger.channel.default';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_FileService()
    {
        $this->services['logger.channel.file'] = $instance = $this->get('logger.factory')->get('file');

        $instance->_serviceId = 'logger.channel.file';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_FormService()
    {
        $this->services['logger.channel.form'] = $instance = $this->get('logger.factory')->get('form');

        $instance->_serviceId = 'logger.channel.form';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_ImageService()
    {
        $this->services['logger.channel.image'] = $instance = $this->get('logger.factory')->get('image');

        $instance->_serviceId = 'logger.channel.image';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_PhpService()
    {
        $this->services['logger.channel.php'] = $instance = $this->get('logger.factory')->get('php');

        $instance->_serviceId = 'logger.channel.php';

        return $instance;
    }

    /**
     * Gets the 'logger.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannelFactory A Drupal\Core\Logger\LoggerChannelFactory instance.
     */
    protected function getLogger_FactoryService()
    {
        $this->services['logger.factory'] = $instance = new \Drupal\Core\Logger\LoggerChannelFactory();

        $instance->setContainer($this);
        $instance->_serviceId = 'logger.factory';

        return $instance;
    }

    /**
     * Gets the 'logger.log_message_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LogMessageParser A Drupal\Core\Logger\LogMessageParser instance.
     */
    protected function getLogger_LogMessageParserService()
    {
        $this->services['logger.log_message_parser'] = $instance = new \Drupal\Core\Logger\LogMessageParser();

        $instance->_serviceId = 'logger.log_message_parser';

        return $instance;
    }

    /**
     * Gets the 'main_content_renderer.ajax' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\MainContent\AjaxRenderer A Drupal\Core\Render\MainContent\AjaxRenderer instance.
     */
    protected function getMainContentRenderer_AjaxService()
    {
        $this->services['main_content_renderer.ajax'] = $instance = new \Drupal\Core\Render\MainContent\AjaxRenderer($this->get('plugin.manager.element_info'));

        $instance->_serviceId = 'main_content_renderer.ajax';

        return $instance;
    }

    /**
     * Gets the 'main_content_renderer.dialog' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\MainContent\DialogRenderer A Drupal\Core\Render\MainContent\DialogRenderer instance.
     */
    protected function getMainContentRenderer_DialogService()
    {
        $this->services['main_content_renderer.dialog'] = $instance = new \Drupal\Core\Render\MainContent\DialogRenderer($this->get('title_resolver'));

        $instance->_serviceId = 'main_content_renderer.dialog';

        return $instance;
    }

    /**
     * Gets the 'main_content_renderer.html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\MainContent\HtmlRenderer A Drupal\Core\Render\MainContent\HtmlRenderer instance.
     */
    protected function getMainContentRenderer_HtmlService()
    {
        $this->services['main_content_renderer.html'] = $instance = new \Drupal\Core\Render\MainContent\HtmlRenderer($this->get('title_resolver'), $this->get('plugin.manager.display_variant'), $this->get('event_dispatcher'), $this->get('module_handler'), $this->get('renderer'), $this->get('render_cache'));

        $instance->_serviceId = 'main_content_renderer.html';

        return $instance;
    }

    /**
     * Gets the 'main_content_renderer.modal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\MainContent\ModalRenderer A Drupal\Core\Render\MainContent\ModalRenderer instance.
     */
    protected function getMainContentRenderer_ModalService()
    {
        $this->services['main_content_renderer.modal'] = $instance = new \Drupal\Core\Render\MainContent\ModalRenderer($this->get('title_resolver'));

        $instance->_serviceId = 'main_content_renderer.modal';

        return $instance;
    }

    /**
     * Gets the 'main_content_view_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\MainContentViewSubscriber A Drupal\Core\EventSubscriber\MainContentViewSubscriber instance.
     */
    protected function getMainContentViewSubscriberService()
    {
        $this->services['main_content_view_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\MainContentViewSubscriber($this->get('class_resolver'), $this->get('current_route_match'), array('html' => 'main_content_renderer.html', 'drupal_ajax' => 'main_content_renderer.ajax', 'iframeupload' => 'main_content_renderer.ajax', 'drupal_dialog' => 'main_content_renderer.dialog', 'drupal_modal' => 'main_content_renderer.modal'));

        $instance->_serviceId = 'main_content_view_subscriber';

        return $instance;
    }

    /**
     * Gets the 'maintenance_mode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Site\MaintenanceMode A Drupal\Core\Site\MaintenanceMode instance.
     */
    protected function getMaintenanceModeService()
    {
        $this->services['maintenance_mode'] = $instance = new \Drupal\Core\Site\MaintenanceMode($this->get('state'), $this->get('current_user'));

        $instance->_serviceId = 'maintenance_mode';

        return $instance;
    }

    /**
     * Gets the 'maintenance_mode_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\MaintenanceModeSubscriber A Drupal\Core\EventSubscriber\MaintenanceModeSubscriber instance.
     */
    protected function getMaintenanceModeSubscriberService()
    {
        $this->services['maintenance_mode_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\MaintenanceModeSubscriber($this->get('maintenance_mode'), $this->get('config.factory'), $this->get('string_translation'), $this->get('url_generator'), $this->get('current_user'), $this->get('bare_html_page_renderer'));

        $instance->_serviceId = 'maintenance_mode_subscriber';

        return $instance;
    }

    /**
     * Gets the 'menu.active_trail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\MenuActiveTrail A Drupal\Core\Menu\MenuActiveTrail instance.
     */
    protected function getMenu_ActiveTrailService()
    {
        $this->services['menu.active_trail'] = $instance = new \Drupal\Core\Menu\MenuActiveTrail($this->get('plugin.manager.menu.link'), $this->get('current_route_match'), $this->get('cache.menu'), $this->get('lock'));

        $instance->_serviceId = 'menu.active_trail';

        return $instance;
    }

    /**
     * Gets the 'menu.default_tree_manipulators' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\DefaultMenuLinkTreeManipulators A Drupal\Core\Menu\DefaultMenuLinkTreeManipulators instance.
     */
    protected function getMenu_DefaultTreeManipulatorsService()
    {
        $this->services['menu.default_tree_manipulators'] = $instance = new \Drupal\Core\Menu\DefaultMenuLinkTreeManipulators($this->get('access_manager'), $this->get('current_user'), $this->get('entity.query'));

        $instance->_serviceId = 'menu.default_tree_manipulators';

        return $instance;
    }

    /**
     * Gets the 'menu.link_tree' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\MenuLinkTree A Drupal\Core\Menu\MenuLinkTree instance.
     */
    protected function getMenu_LinkTreeService()
    {
        $this->services['menu.link_tree'] = $instance = new \Drupal\Core\Menu\MenuLinkTree($this->get('menu.tree_storage'), $this->get('plugin.manager.menu.link'), $this->get('router.route_provider'), $this->get('menu.active_trail'), $this->get('controller_resolver'));

        $instance->_serviceId = 'menu.link_tree';

        return $instance;
    }

    /**
     * Gets the 'menu.parent_form_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\MenuParentFormSelector A Drupal\Core\Menu\MenuParentFormSelector instance.
     */
    protected function getMenu_ParentFormSelectorService()
    {
        $this->services['menu.parent_form_selector'] = $instance = new \Drupal\Core\Menu\MenuParentFormSelector($this->get('menu.link_tree'), $this->get('entity.manager'), $this->get('string_translation'));

        $instance->_serviceId = 'menu.parent_form_selector';

        return $instance;
    }

    /**
     * Gets the 'menu.rebuild_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\MenuRouterRebuildSubscriber A Drupal\Core\EventSubscriber\MenuRouterRebuildSubscriber instance.
     */
    protected function getMenu_RebuildSubscriberService()
    {
        $this->services['menu.rebuild_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\MenuRouterRebuildSubscriber($this->get('lock'), $this->get('plugin.manager.menu.link'));

        $instance->_serviceId = 'menu.rebuild_subscriber';

        return $instance;
    }

    /**
     * Gets the 'menu_link.static.overrides' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\StaticMenuLinkOverrides A Drupal\Core\Menu\StaticMenuLinkOverrides instance.
     */
    protected function getMenuLink_Static_OverridesService()
    {
        $this->services['menu_link.static.overrides'] = $instance = new \Drupal\Core\Menu\StaticMenuLinkOverrides($this->get('config.factory'));

        $instance->_serviceId = 'menu_link.static.overrides';

        return $instance;
    }

    /**
     * Gets the 'module_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Extension\ModuleHandler A Drupal\Core\Extension\ModuleHandler instance.
     */
    protected function getModuleHandlerService()
    {
        $this->services['module_handler'] = $instance = new \Drupal\Core\Extension\ModuleHandler($this->get('app.root'), array('system' => array('type' => 'module', 'pathname' => 'core/modules/system/system.info.yml', 'filename' => 'system.module'), 'user' => array('type' => 'module', 'pathname' => 'core/modules/user/user.info.yml', 'filename' => 'user.module')), $this->get('cache.bootstrap'));

        $instance->_serviceId = 'module_handler';

        return $instance;
    }

    /**
     * Gets the 'module_installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Extension\ModuleInstaller A Drupal\Core\ProxyClass\Extension\ModuleInstaller instance.
     */
    protected function getModuleInstallerService()
    {
        $this->services['module_installer'] = $instance = new \Drupal\Core\ProxyClass\Extension\ModuleInstaller($this, 'drupal.proxy_original_service.module_installer');

        $instance->_serviceId = 'module_installer';

        return $instance;
    }

    /**
     * Gets the 'page_cache_kill_switch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PageCache\ResponsePolicy\KillSwitch A Drupal\Core\PageCache\ResponsePolicy\KillSwitch instance.
     */
    protected function getPageCacheKillSwitchService()
    {
        $this->services['page_cache_kill_switch'] = $instance = new \Drupal\Core\PageCache\ResponsePolicy\KillSwitch();

        $instance->_serviceId = 'page_cache_kill_switch';

        return $instance;
    }

    /**
     * Gets the 'page_cache_request_policy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PageCache\DefaultRequestPolicy A Drupal\Core\PageCache\DefaultRequestPolicy instance.
     */
    protected function getPageCacheRequestPolicyService()
    {
        $this->services['page_cache_request_policy'] = $instance = new \Drupal\Core\PageCache\DefaultRequestPolicy($this->get('session_configuration'));

        $instance->_serviceId = 'page_cache_request_policy';

        return $instance;
    }

    /**
     * Gets the 'page_cache_response_policy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\PageCache\ChainResponsePolicy A Drupal\Core\ProxyClass\PageCache\ChainResponsePolicy instance.
     */
    protected function getPageCacheResponsePolicyService()
    {
        $this->services['page_cache_response_policy'] = $instance = new \Drupal\Core\ProxyClass\PageCache\ChainResponsePolicy($this, 'drupal.proxy_original_service.page_cache_response_policy');

        $instance->_serviceId = 'page_cache_response_policy';

        return $instance;
    }

    /**
     * Gets the 'paramconverter.configentity_admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\ParamConverter\AdminPathConfigEntityConverter A Drupal\Core\ProxyClass\ParamConverter\AdminPathConfigEntityConverter instance.
     */
    protected function getParamconverter_ConfigentityAdminService()
    {
        $this->services['paramconverter.configentity_admin'] = $instance = new \Drupal\Core\ProxyClass\ParamConverter\AdminPathConfigEntityConverter($this, 'drupal.proxy_original_service.paramconverter.configentity_admin');

        $instance->_serviceId = 'paramconverter.configentity_admin';

        return $instance;
    }

    /**
     * Gets the 'paramconverter.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ParamConverter\EntityConverter A Drupal\Core\ParamConverter\EntityConverter instance.
     */
    protected function getParamconverter_EntityService()
    {
        $this->services['paramconverter.entity'] = $instance = new \Drupal\Core\ParamConverter\EntityConverter($this->get('entity.manager'));

        $instance->_serviceId = 'paramconverter.entity';

        return $instance;
    }

    /**
     * Gets the 'paramconverter.menu_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\ParamConverter\MenuLinkPluginConverter A Drupal\Core\ProxyClass\ParamConverter\MenuLinkPluginConverter instance.
     */
    protected function getParamconverter_MenuLinkService()
    {
        $this->services['paramconverter.menu_link'] = $instance = new \Drupal\Core\ProxyClass\ParamConverter\MenuLinkPluginConverter($this, 'drupal.proxy_original_service.paramconverter.menu_link');

        $instance->_serviceId = 'paramconverter.menu_link';

        return $instance;
    }

    /**
     * Gets the 'paramconverter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ParamConverter\ParamConverterManager A Drupal\Core\ParamConverter\ParamConverterManager instance.
     */
    protected function getParamconverterManagerService()
    {
        $this->services['paramconverter_manager'] = $instance = new \Drupal\Core\ParamConverter\ParamConverterManager();

        $instance->addConverter($this->get('drupal.proxy_original_service.paramconverter.configentity_admin'), 'drupal.proxy_original_service.paramconverter.configentity_admin');
        $instance->addConverter($this->get('drupal.proxy_original_service.paramconverter.menu_link'), 'drupal.proxy_original_service.paramconverter.menu_link');
        $instance->addConverter($this->get('paramconverter.entity'), 'paramconverter.entity');
        $instance->_serviceId = 'paramconverter_manager';

        return $instance;
    }

    /**
     * Gets the 'paramconverter_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ParamConverterSubscriber A Drupal\Core\EventSubscriber\ParamConverterSubscriber instance.
     */
    protected function getParamconverterSubscriberService()
    {
        $this->services['paramconverter_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ParamConverterSubscriber($this->get('paramconverter_manager'));

        $instance->_serviceId = 'paramconverter_subscriber';

        return $instance;
    }

    /**
     * Gets the 'password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Password\PhpassHashedPassword A Drupal\Core\Password\PhpassHashedPassword instance.
     */
    protected function getPasswordService()
    {
        $this->services['password'] = $instance = new \Drupal\Core\Password\PhpassHashedPassword(16);

        $instance->_serviceId = 'password';

        return $instance;
    }

    /**
     * Gets the 'path.alias_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\AliasManager A Drupal\Core\Path\AliasManager instance.
     */
    protected function getPath_AliasManagerService()
    {
        $this->services['path.alias_manager'] = $instance = new \Drupal\Core\Path\AliasManager($this->get('path.alias_storage'), $this->get('path.alias_whitelist'), $this->get('language_manager'), $this->get('cache.data'));

        $instance->_serviceId = 'path.alias_manager';

        return $instance;
    }

    /**
     * Gets the 'path.alias_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\AliasStorage A Drupal\Core\Path\AliasStorage instance.
     */
    protected function getPath_AliasStorageService()
    {
        $this->services['path.alias_storage'] = $instance = new \Drupal\Core\Path\AliasStorage($this->get('database'), $this->get('module_handler'));

        $instance->_serviceId = 'path.alias_storage';

        return $instance;
    }

    /**
     * Gets the 'path.alias_whitelist' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\AliasWhitelist A Drupal\Core\Path\AliasWhitelist instance.
     */
    protected function getPath_AliasWhitelistService()
    {
        $this->services['path.alias_whitelist'] = $instance = new \Drupal\Core\Path\AliasWhitelist('path_alias_whitelist', $this->get('cache.default'), $this->get('lock'), $this->get('state'), $this->get('path.alias_storage'));

        $instance->_serviceId = 'path.alias_whitelist';

        return $instance;
    }

    /**
     * Gets the 'path.current' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\CurrentPathStack A Drupal\Core\Path\CurrentPathStack instance.
     */
    protected function getPath_CurrentService()
    {
        $this->services['path.current'] = $instance = new \Drupal\Core\Path\CurrentPathStack($this->get('request_stack'));

        $instance->_serviceId = 'path.current';

        return $instance;
    }

    /**
     * Gets the 'path.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\PathMatcher A Drupal\Core\Path\PathMatcher instance.
     */
    protected function getPath_MatcherService()
    {
        $this->services['path.matcher'] = $instance = new \Drupal\Core\Path\PathMatcher($this->get('config.factory'), $this->get('current_route_match'));

        $instance->_serviceId = 'path.matcher';

        return $instance;
    }

    /**
     * Gets the 'path.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\PathValidator A Drupal\Core\Path\PathValidator instance.
     */
    protected function getPath_ValidatorService()
    {
        $this->services['path.validator'] = $instance = new \Drupal\Core\Path\PathValidator($this->get('router'), $this->get('router.no_access_checks'), $this->get('current_user'), $this->get('path_processor_manager'));

        $instance->_serviceId = 'path.validator';

        return $instance;
    }

    /**
     * Gets the 'path_processor.files' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\PathProcessor\PathProcessorFiles A Drupal\system\PathProcessor\PathProcessorFiles instance.
     */
    protected function getPathProcessor_FilesService()
    {
        $this->services['path_processor.files'] = $instance = new \Drupal\system\PathProcessor\PathProcessorFiles();

        $instance->_serviceId = 'path_processor.files';

        return $instance;
    }

    /**
     * Gets the 'path_processor_alias' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PathProcessor\PathProcessorAlias A Drupal\Core\PathProcessor\PathProcessorAlias instance.
     */
    protected function getPathProcessorAliasService()
    {
        $this->services['path_processor_alias'] = $instance = new \Drupal\Core\PathProcessor\PathProcessorAlias($this->get('path.alias_manager'));

        $instance->_serviceId = 'path_processor_alias';

        return $instance;
    }

    /**
     * Gets the 'path_processor_decode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PathProcessor\PathProcessorDecode A Drupal\Core\PathProcessor\PathProcessorDecode instance.
     */
    protected function getPathProcessorDecodeService()
    {
        $this->services['path_processor_decode'] = $instance = new \Drupal\Core\PathProcessor\PathProcessorDecode();

        $instance->_serviceId = 'path_processor_decode';

        return $instance;
    }

    /**
     * Gets the 'path_processor_front' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PathProcessor\PathProcessorFront A Drupal\Core\PathProcessor\PathProcessorFront instance.
     */
    protected function getPathProcessorFrontService()
    {
        $this->services['path_processor_front'] = $instance = new \Drupal\Core\PathProcessor\PathProcessorFront($this->get('config.factory'));

        $instance->_serviceId = 'path_processor_front';

        return $instance;
    }

    /**
     * Gets the 'path_processor_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PathProcessor\PathProcessorManager A Drupal\Core\PathProcessor\PathProcessorManager instance.
     */
    protected function getPathProcessorManagerService()
    {
        $a = $this->get('path_processor_front');
        $b = $this->get('path_processor_alias');

        $this->services['path_processor_manager'] = $instance = new \Drupal\Core\PathProcessor\PathProcessorManager();

        $instance->addInbound($this->get('path_processor_decode'), 1000);
        $instance->addInbound($this->get('path_processor.files'), 200);
        $instance->addInbound($a, 200);
        $instance->addInbound($b, 100);
        $instance->addOutbound($b, 300);
        $instance->addOutbound($a, 200);
        $instance->_serviceId = 'path_processor_manager';

        return $instance;
    }

    /**
     * Gets the 'path_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\PathSubscriber A Drupal\Core\EventSubscriber\PathSubscriber instance.
     */
    protected function getPathSubscriberService()
    {
        $this->services['path_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\PathSubscriber($this->get('path.alias_manager'), $this->get('path.current'));

        $instance->_serviceId = 'path_subscriber';

        return $instance;
    }

    /**
     * Gets the 'pgsql.entity.query.sql' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\Query\Sql\pgsql\QueryFactory A Drupal\Core\Entity\Query\Sql\pgsql\QueryFactory instance.
     */
    protected function getPgsql_Entity_Query_SqlService()
    {
        $this->services['pgsql.entity.query.sql'] = $instance = new \Drupal\Core\Entity\Query\Sql\pgsql\QueryFactory($this->get('database'));

        $instance->_serviceId = 'pgsql.entity.query.sql';

        return $instance;
    }

    /**
     * Gets the 'plugin.cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Plugin\CachedDiscoveryClearer A Drupal\Core\ProxyClass\Plugin\CachedDiscoveryClearer instance.
     */
    protected function getPlugin_CacheClearerService()
    {
        $this->services['plugin.cache_clearer'] = $instance = new \Drupal\Core\ProxyClass\Plugin\CachedDiscoveryClearer($this, 'drupal.proxy_original_service.plugin.cache_clearer');

        $instance->addCachedDiscovery($this->get('config.typed'));
        $instance->addCachedDiscovery($this->get('entity.manager'));
        $instance->addCachedDiscovery($this->get('plugin.manager.entity_reference_selection'));
        $instance->addCachedDiscovery($this->get('plugin.manager.block'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.field_type'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.widget'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.formatter'));
        $instance->addCachedDiscovery($this->get('plugin.manager.archiver'));
        $instance->addCachedDiscovery($this->get('plugin.manager.action'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.local_action'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.local_task'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.contextual_link'));
        $instance->addCachedDiscovery($this->get('plugin.manager.display_variant'));
        $instance->addCachedDiscovery($this->get('plugin.manager.queue_worker'));
        $instance->addCachedDiscovery($this->get('typed_data_manager'));
        $instance->addCachedDiscovery($this->get('validation.constraint'));
        $instance->addCachedDiscovery($this->get('plugin.manager.mail'));
        $instance->addCachedDiscovery($this->get('plugin.manager.condition'));
        $instance->addCachedDiscovery($this->get('plugin.manager.element_info'));
        $instance->addCachedDiscovery($this->get('image.toolkit.manager'));
        $instance->addCachedDiscovery($this->get('image.toolkit.operation.manager'));
        $instance->_serviceId = 'plugin.cache_clearer';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Action\ActionManager A Drupal\Core\Action\ActionManager instance.
     */
    protected function getPlugin_Manager_ActionService()
    {
        $this->services['plugin.manager.action'] = $instance = new \Drupal\Core\Action\ActionManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.action';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.archiver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Archiver\ArchiverManager A Drupal\Core\Archiver\ArchiverManager instance.
     */
    protected function getPlugin_Manager_ArchiverService()
    {
        $this->services['plugin.manager.archiver'] = $instance = new \Drupal\Core\Archiver\ArchiverManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.archiver';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Block\BlockManager A Drupal\Core\Block\BlockManager instance.
     */
    protected function getPlugin_Manager_BlockService()
    {
        $this->services['plugin.manager.block'] = $instance = new \Drupal\Core\Block\BlockManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.block';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.condition' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Condition\ConditionManager A Drupal\Core\Condition\ConditionManager instance.
     */
    protected function getPlugin_Manager_ConditionService()
    {
        $this->services['plugin.manager.condition'] = $instance = new \Drupal\Core\Condition\ConditionManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.condition';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.display_variant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Display\VariantManager A Drupal\Core\Display\VariantManager instance.
     */
    protected function getPlugin_Manager_DisplayVariantService()
    {
        $this->services['plugin.manager.display_variant'] = $instance = new \Drupal\Core\Display\VariantManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.display_variant';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.element_info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\ElementInfoManager A Drupal\Core\Render\ElementInfoManager instance.
     */
    protected function getPlugin_Manager_ElementInfoService()
    {
        $this->services['plugin.manager.element_info'] = $instance = new \Drupal\Core\Render\ElementInfoManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('cache_tags.invalidator'), $this->get('module_handler'), $this->get('theme.manager'));

        $instance->_serviceId = 'plugin.manager.element_info';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.entity_reference_selection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManager A Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManager instance.
     */
    protected function getPlugin_Manager_EntityReferenceSelectionService()
    {
        $this->services['plugin.manager.entity_reference_selection'] = $instance = new \Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.entity_reference_selection';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.field.field_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Field\FieldTypePluginManager A Drupal\Core\Field\FieldTypePluginManager instance.
     */
    protected function getPlugin_Manager_Field_FieldTypeService()
    {
        $this->services['plugin.manager.field.field_type'] = $instance = new \Drupal\Core\Field\FieldTypePluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('typed_data_manager'));

        $instance->_serviceId = 'plugin.manager.field.field_type';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.field.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Field\FormatterPluginManager A Drupal\Core\Field\FormatterPluginManager instance.
     */
    protected function getPlugin_Manager_Field_FormatterService()
    {
        $this->services['plugin.manager.field.formatter'] = $instance = new \Drupal\Core\Field\FormatterPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('plugin.manager.field.field_type'));

        $instance->_serviceId = 'plugin.manager.field.formatter';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.field.widget' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Field\WidgetPluginManager A Drupal\Core\Field\WidgetPluginManager instance.
     */
    protected function getPlugin_Manager_Field_WidgetService()
    {
        $this->services['plugin.manager.field.widget'] = $instance = new \Drupal\Core\Field\WidgetPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('plugin.manager.field.field_type'));

        $instance->_serviceId = 'plugin.manager.field.widget';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.mail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Mail\MailManager A Drupal\Core\Mail\MailManager instance.
     */
    protected function getPlugin_Manager_MailService()
    {
        $this->services['plugin.manager.mail'] = $instance = new \Drupal\Core\Mail\MailManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('config.factory'), $this->get('logger.factory'), $this->get('string_translation'));

        $instance->_serviceId = 'plugin.manager.mail';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.menu.contextual_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\ContextualLinkManager A Drupal\Core\Menu\ContextualLinkManager instance.
     */
    protected function getPlugin_Manager_Menu_ContextualLinkService()
    {
        $this->services['plugin.manager.menu.contextual_link'] = $instance = new \Drupal\Core\Menu\ContextualLinkManager($this->get('controller_resolver'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'), $this->get('request_stack'));

        $instance->_serviceId = 'plugin.manager.menu.contextual_link';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.menu.link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\MenuLinkManager A Drupal\Core\Menu\MenuLinkManager instance.
     */
    protected function getPlugin_Manager_Menu_LinkService()
    {
        $this->services['plugin.manager.menu.link'] = $instance = new \Drupal\Core\Menu\MenuLinkManager($this->get('menu.tree_storage'), $this->get('menu_link.static.overrides'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.menu.link';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.menu.local_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\LocalActionManager A Drupal\Core\Menu\LocalActionManager instance.
     */
    protected function getPlugin_Manager_Menu_LocalActionService()
    {
        $this->services['plugin.manager.menu.local_action'] = $instance = new \Drupal\Core\Menu\LocalActionManager($this->get('controller_resolver'), $this->get('request_stack'), $this->get('current_route_match'), $this->get('router.route_provider'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'));

        $instance->_serviceId = 'plugin.manager.menu.local_action';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.menu.local_task' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\LocalTaskManager A Drupal\Core\Menu\LocalTaskManager instance.
     */
    protected function getPlugin_Manager_Menu_LocalTaskService()
    {
        $this->services['plugin.manager.menu.local_task'] = $instance = new \Drupal\Core\Menu\LocalTaskManager($this->get('controller_resolver'), $this->get('request_stack'), $this->get('current_route_match'), $this->get('router.route_provider'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'));

        $instance->_serviceId = 'plugin.manager.menu.local_task';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.queue_worker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Queue\QueueWorkerManager A Drupal\Core\Queue\QueueWorkerManager instance.
     */
    protected function getPlugin_Manager_QueueWorkerService()
    {
        $this->services['plugin.manager.queue_worker'] = $instance = new \Drupal\Core\Queue\QueueWorkerManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.queue_worker';

        return $instance;
    }

    /**
     * Gets the 'private_key' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PrivateKey A Drupal\Core\PrivateKey instance.
     */
    protected function getPrivateKeyService()
    {
        $this->services['private_key'] = $instance = new \Drupal\Core\PrivateKey($this->get('state'));

        $instance->_serviceId = 'private_key';

        return $instance;
    }

    /**
     * Gets the 'psr7.http_foundation_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory A Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory instance.
     */
    protected function getPsr7_HttpFoundationFactoryService()
    {
        $this->services['psr7.http_foundation_factory'] = $instance = new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory();

        $instance->_serviceId = 'psr7.http_foundation_factory';

        return $instance;
    }

    /**
     * Gets the 'psr7.http_message_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory A Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory instance.
     */
    protected function getPsr7_HttpMessageFactoryService()
    {
        $this->services['psr7.http_message_factory'] = $instance = new \Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory();

        $instance->_serviceId = 'psr7.http_message_factory';

        return $instance;
    }

    /**
     * Gets the 'psr_response_view_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\PsrResponseSubscriber A Drupal\Core\EventSubscriber\PsrResponseSubscriber instance.
     */
    protected function getPsrResponseViewSubscriberService()
    {
        $this->services['psr_response_view_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\PsrResponseSubscriber($this->get('psr7.http_foundation_factory'));

        $instance->_serviceId = 'psr_response_view_subscriber';

        return $instance;
    }

    /**
     * Gets the 'queue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Queue\QueueFactory A Drupal\Core\Queue\QueueFactory instance.
     */
    protected function getQueueService()
    {
        $this->services['queue'] = $instance = new \Drupal\Core\Queue\QueueFactory($this->get('settings'));

        $instance->setContainer($this);
        $instance->_serviceId = 'queue';

        return $instance;
    }

    /**
     * Gets the 'queue.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Queue\QueueDatabaseFactory A Drupal\Core\Queue\QueueDatabaseFactory instance.
     */
    protected function getQueue_DatabaseService()
    {
        $this->services['queue.database'] = $instance = new \Drupal\Core\Queue\QueueDatabaseFactory($this->get('database'));

        $instance->_serviceId = 'queue.database';

        return $instance;
    }

    /**
     * Gets the 'redirect.destination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\RedirectDestination A Drupal\Core\Routing\RedirectDestination instance.
     */
    protected function getRedirect_DestinationService()
    {
        $this->services['redirect.destination'] = $instance = new \Drupal\Core\Routing\RedirectDestination($this->get('request_stack'), $this->get('url_generator'));

        $instance->_serviceId = 'redirect.destination';

        return $instance;
    }

    /**
     * Gets the 'redirect_leading_slashes_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RedirectLeadingSlashesSubscriber A Drupal\Core\EventSubscriber\RedirectLeadingSlashesSubscriber instance.
     */
    protected function getRedirectLeadingSlashesSubscriberService()
    {
        $this->services['redirect_leading_slashes_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RedirectLeadingSlashesSubscriber();

        $instance->_serviceId = 'redirect_leading_slashes_subscriber';

        return $instance;
    }

    /**
     * Gets the 'redirect_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RedirectResponseSubscriber A Drupal\Core\EventSubscriber\RedirectResponseSubscriber instance.
     */
    protected function getRedirectResponseSubscriberService()
    {
        $this->services['redirect_response_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RedirectResponseSubscriber($this->get('url_generator'), $this->get('router.request_context'));

        $instance->_serviceId = 'redirect_response_subscriber';

        return $instance;
    }

    /**
     * Gets the 'render_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\RenderCache A Drupal\Core\Render\RenderCache instance.
     */
    protected function getRenderCacheService()
    {
        $this->services['render_cache'] = $instance = new \Drupal\Core\Render\RenderCache($this->get('request_stack'), $this->get('cache_factory'), $this->get('cache_contexts_manager'));

        $instance->_serviceId = 'render_cache';

        return $instance;
    }

    /**
     * Gets the 'renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\Renderer A Drupal\Core\Render\Renderer instance.
     */
    protected function getRendererService()
    {
        $this->services['renderer'] = $instance = new \Drupal\Core\Render\Renderer($this->get('controller_resolver'), $this->get('theme.manager'), $this->get('plugin.manager.element_info'), $this->get('render_cache'), $this->get('request_stack'), array('required_cache_contexts' => array(0 => 'languages:language_interface', 1 => 'theme', 2 => 'user.permissions')));

        $instance->_serviceId = 'renderer';

        return $instance;
    }

    /**
     * Gets the 'replica_database_ignore__subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber A Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber instance.
     */
    protected function getReplicaDatabaseIgnoreSubscriberService()
    {
        $this->services['replica_database_ignore__subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber();

        $instance->_serviceId = 'replica_database_ignore__subscriber';

        return $instance;
    }

    /**
     * Gets the 'request_close_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RequestCloseSubscriber A Drupal\Core\EventSubscriber\RequestCloseSubscriber instance.
     */
    protected function getRequestCloseSubscriberService()
    {
        $this->services['request_close_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RequestCloseSubscriber($this->get('module_handler'));

        $instance->_serviceId = 'request_close_subscriber';

        return $instance;
    }

    /**
     * Gets the 'request_format_route_filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\RequestFormatRouteFilter A Drupal\Core\Routing\RequestFormatRouteFilter instance.
     */
    protected function getRequestFormatRouteFilterService()
    {
        $this->services['request_format_route_filter'] = $instance = new \Drupal\Core\Routing\RequestFormatRouteFilter();

        $instance->_serviceId = 'request_format_route_filter';

        return $instance;
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        $this->services['request_stack'] = $instance = new \Symfony\Component\HttpFoundation\RequestStack();

        $instance->_serviceId = 'request_stack';

        return $instance;
    }

    /**
     * Gets the 'required_module_uninstall_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Extension\RequiredModuleUninstallValidator A Drupal\Core\ProxyClass\Extension\RequiredModuleUninstallValidator instance.
     */
    protected function getRequiredModuleUninstallValidatorService()
    {
        $this->services['required_module_uninstall_validator'] = $instance = new \Drupal\Core\ProxyClass\Extension\RequiredModuleUninstallValidator($this, 'drupal.proxy_original_service.required_module_uninstall_validator');

        $instance->_serviceId = 'required_module_uninstall_validator';

        return $instance;
    }

    /**
     * Gets the 'resolver_manager.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityResolverManager A Drupal\Core\Entity\EntityResolverManager instance.
     */
    protected function getResolverManager_EntityService()
    {
        $this->services['resolver_manager.entity'] = $instance = new \Drupal\Core\Entity\EntityResolverManager($this->get('entity.manager'), $this->get('class_resolver'));

        $instance->_serviceId = 'resolver_manager.entity';

        return $instance;
    }

    /**
     * Gets the 'response_filter.active_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ActiveLinkResponseFilter A Drupal\Core\EventSubscriber\ActiveLinkResponseFilter instance.
     */
    protected function getResponseFilter_ActiveLinkService()
    {
        $this->services['response_filter.active_link'] = $instance = new \Drupal\Core\EventSubscriber\ActiveLinkResponseFilter($this->get('current_user'), $this->get('path.current'), $this->get('path.matcher'), $this->get('language_manager'));

        $instance->_serviceId = 'response_filter.active_link';

        return $instance;
    }

    /**
     * Gets the 'response_generator_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ResponseGeneratorSubscriber A Drupal\Core\EventSubscriber\ResponseGeneratorSubscriber instance.
     */
    protected function getResponseGeneratorSubscriberService()
    {
        $this->services['response_generator_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ResponseGeneratorSubscriber();

        $instance->_serviceId = 'response_generator_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_access_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RouteAccessResponseSubscriber A Drupal\Core\EventSubscriber\RouteAccessResponseSubscriber instance.
     */
    protected function getRouteAccessResponseSubscriberService()
    {
        $this->services['route_access_response_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RouteAccessResponseSubscriber();

        $instance->_serviceId = 'route_access_response_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_content_controller_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ContentControllerSubscriber A Drupal\Core\EventSubscriber\ContentControllerSubscriber instance.
     */
    protected function getRouteContentControllerSubscriberService()
    {
        $this->services['route_content_controller_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ContentControllerSubscriber();

        $instance->_serviceId = 'route_content_controller_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_enhancer.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\Enhancer\EntityRouteEnhancer A Drupal\Core\Entity\Enhancer\EntityRouteEnhancer instance.
     */
    protected function getRouteEnhancer_EntityService()
    {
        $this->services['route_enhancer.entity'] = $instance = new \Drupal\Core\Entity\Enhancer\EntityRouteEnhancer();

        $instance->_serviceId = 'route_enhancer.entity';

        return $instance;
    }

    /**
     * Gets the 'route_enhancer.lazy_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\LazyRouteEnhancer A Drupal\Core\Routing\LazyRouteEnhancer instance.
     */
    protected function getRouteEnhancer_LazyCollectorService()
    {
        $this->services['route_enhancer.lazy_collector'] = $instance = new \Drupal\Core\Routing\LazyRouteEnhancer(array('route_enhancer.param_conversion' => 'route_enhancer.param_conversion', 'route_enhancer.entity' => 'route_enhancer.entity'));

        $instance->setContainer($this);
        $instance->_serviceId = 'route_enhancer.lazy_collector';

        return $instance;
    }

    /**
     * Gets the 'route_enhancer.param_conversion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\Enhancer\ParamConversionEnhancer A Drupal\Core\Routing\Enhancer\ParamConversionEnhancer instance.
     */
    protected function getRouteEnhancer_ParamConversionService()
    {
        $this->services['route_enhancer.param_conversion'] = $instance = new \Drupal\Core\Routing\Enhancer\ParamConversionEnhancer($this->get('paramconverter_manager'));

        $instance->_serviceId = 'route_enhancer.param_conversion';

        return $instance;
    }

    /**
     * Gets the 'route_enhancer_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RouteEnhancerSubscriber A Drupal\Core\EventSubscriber\RouteEnhancerSubscriber instance.
     */
    protected function getRouteEnhancerSubscriberService()
    {
        $this->services['route_enhancer_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RouteEnhancerSubscriber($this->get('route_enhancer.lazy_collector'));

        $instance->_serviceId = 'route_enhancer_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_filter.lazy_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\LazyRouteFilter A Drupal\Core\Routing\LazyRouteFilter instance.
     */
    protected function getRouteFilter_LazyCollectorService()
    {
        $this->services['route_filter.lazy_collector'] = $instance = new \Drupal\Core\Routing\LazyRouteFilter(array('request_format_route_filter' => 'request_format_route_filter', 'content_type_header_matcher' => 'content_type_header_matcher'));

        $instance->setContainer($this);
        $instance->_serviceId = 'route_filter.lazy_collector';

        return $instance;
    }

    /**
     * Gets the 'route_filter_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RouteFilterSubscriber A Drupal\Core\EventSubscriber\RouteFilterSubscriber instance.
     */
    protected function getRouteFilterSubscriberService()
    {
        $this->services['route_filter_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RouteFilterSubscriber($this->get('route_filter.lazy_collector'));

        $instance->_serviceId = 'route_filter_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_http_method_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RouteMethodSubscriber A Drupal\Core\EventSubscriber\RouteMethodSubscriber instance.
     */
    protected function getRouteHttpMethodSubscriberService()
    {
        $this->services['route_http_method_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RouteMethodSubscriber();

        $instance->_serviceId = 'route_http_method_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_processor_csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\RouteProcessorCsrf A Drupal\Core\Access\RouteProcessorCsrf instance.
     */
    protected function getRouteProcessorCsrfService()
    {
        $this->services['route_processor_csrf'] = $instance = new \Drupal\Core\Access\RouteProcessorCsrf($this->get('csrf_token'));

        $instance->_serviceId = 'route_processor_csrf';

        return $instance;
    }

    /**
     * Gets the 'route_processor_current' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\RouteProcessor\RouteProcessorCurrent A Drupal\Core\RouteProcessor\RouteProcessorCurrent instance.
     */
    protected function getRouteProcessorCurrentService()
    {
        $this->services['route_processor_current'] = $instance = new \Drupal\Core\RouteProcessor\RouteProcessorCurrent($this->get('current_route_match'));

        $instance->_serviceId = 'route_processor_current';

        return $instance;
    }

    /**
     * Gets the 'route_processor_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\RouteProcessor\RouteProcessorManager A Drupal\Core\RouteProcessor\RouteProcessorManager instance.
     */
    protected function getRouteProcessorManagerService()
    {
        $this->services['route_processor_manager'] = $instance = new \Drupal\Core\RouteProcessor\RouteProcessorManager();

        $instance->addOutbound($this->get('route_processor_current'), 200);
        $instance->addOutbound($this->get('route_processor_csrf'), 0);
        $instance->_serviceId = 'route_processor_manager';

        return $instance;
    }

    /**
     * Gets the 'route_special_attributes_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber A Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber instance.
     */
    protected function getRouteSpecialAttributesSubscriberService()
    {
        $this->services['route_special_attributes_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber();

        $instance->_serviceId = 'route_special_attributes_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_subscriber.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber A Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber instance.
     */
    protected function getRouteSubscriber_EntityService()
    {
        $this->services['route_subscriber.entity'] = $instance = new \Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber($this->get('resolver_manager.entity'));

        $instance->_serviceId = 'route_subscriber.entity';

        return $instance;
    }

    /**
     * Gets the 'route_subscriber.module' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ModuleRouteSubscriber A Drupal\Core\EventSubscriber\ModuleRouteSubscriber instance.
     */
    protected function getRouteSubscriber_ModuleService()
    {
        $this->services['route_subscriber.module'] = $instance = new \Drupal\Core\EventSubscriber\ModuleRouteSubscriber($this->get('module_handler'));

        $instance->_serviceId = 'route_subscriber.module';

        return $instance;
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\AccessAwareRouter A Drupal\Core\Routing\AccessAwareRouter instance.
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Drupal\Core\Routing\AccessAwareRouter($this->get('router.no_access_checks'), $this->get('access_manager'), $this->get('current_user'));

        $instance->_serviceId = 'router';

        return $instance;
    }

    /**
     * Gets the 'router.admin_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\AdminContext A Drupal\Core\Routing\AdminContext instance.
     */
    protected function getRouter_AdminContextService()
    {
        $this->services['router.admin_context'] = $instance = new \Drupal\Core\Routing\AdminContext($this->get('current_route_match'));

        $instance->_serviceId = 'router.admin_context';

        return $instance;
    }

    /**
     * Gets the 'router.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Routing\RouteBuilder A Drupal\Core\ProxyClass\Routing\RouteBuilder instance.
     */
    protected function getRouter_BuilderService()
    {
        $this->services['router.builder'] = $instance = new \Drupal\Core\ProxyClass\Routing\RouteBuilder($this, 'drupal.proxy_original_service.router.builder');

        $instance->_serviceId = 'router.builder';

        return $instance;
    }

    /**
     * Gets the 'router.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ProxyClass\Routing\MatcherDumper A Drupal\Core\ProxyClass\Routing\MatcherDumper instance.
     */
    protected function getRouter_DumperService()
    {
        $this->services['router.dumper'] = $instance = new \Drupal\Core\ProxyClass\Routing\MatcherDumper($this, 'drupal.proxy_original_service.router.dumper');

        $instance->_serviceId = 'router.dumper';

        return $instance;
    }

    /**
     * Gets the 'router.dynamic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\DynamicRouter A Symfony\Cmf\Component\Routing\DynamicRouter instance.
     */
    protected function getRouter_DynamicService()
    {
        $this->services['router.dynamic'] = $instance = new \Symfony\Cmf\Component\Routing\DynamicRouter($this->get('router.request_context'), $this->get('router.matcher'), $this->get('url_generator'));

        $instance->addRouteEnhancer($this->get('route_enhancer.lazy_collector'), 5000);
        $instance->_serviceId = 'router.dynamic';

        return $instance;
    }

    /**
     * Gets the 'router.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher A Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher instance.
     */
    protected function getRouter_MatcherService()
    {
        $this->services['router.matcher'] = $instance = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher($this->get('router.route_provider'));

        $instance->setFinalMatcher($this->get('router.matcher.final_matcher'));
        $instance->addRouteFilter($this->get('route_filter.lazy_collector'), 0);
        $instance->_serviceId = 'router.matcher';

        return $instance;
    }

    /**
     * Gets the 'router.matcher.final_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\UrlMatcher A Drupal\Core\Routing\UrlMatcher instance.
     */
    protected function getRouter_Matcher_FinalMatcherService()
    {
        $this->services['router.matcher.final_matcher'] = $instance = new \Drupal\Core\Routing\UrlMatcher($this->get('path.current'));

        $instance->_serviceId = 'router.matcher.final_matcher';

        return $instance;
    }

    /**
     * Gets the 'router.no_access_checks' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\ChainRouter A Symfony\Cmf\Component\Routing\ChainRouter instance.
     */
    protected function getRouter_NoAccessChecksService()
    {
        $this->services['router.no_access_checks'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter();

        $instance->setContext($this->get('router.request_context'));
        $instance->add($this->get('router.dynamic'));
        $instance->_serviceId = 'router.no_access_checks';

        return $instance;
    }

    /**
     * Gets the 'router.path_roots_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\PathRootsSubscriber A Drupal\Core\EventSubscriber\PathRootsSubscriber instance.
     */
    protected function getRouter_PathRootsSubscriberService()
    {
        $this->services['router.path_roots_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\PathRootsSubscriber($this->get('state'));

        $instance->_serviceId = 'router.path_roots_subscriber';

        return $instance;
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\RequestContext A Drupal\Core\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        $this->services['router.request_context'] = $instance = new \Drupal\Core\Routing\RequestContext();

        $instance->fromRequestStack($this->get('request_stack'));
        $instance->_serviceId = 'router.request_context';

        return $instance;
    }

    /**
     * Gets the 'router.route_preloader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\RoutePreloader A Drupal\Core\Routing\RoutePreloader instance.
     */
    protected function getRouter_RoutePreloaderService()
    {
        $this->services['router.route_preloader'] = $instance = new \Drupal\Core\Routing\RoutePreloader($this->get('router.route_provider'), $this->get('state'));

        $instance->_serviceId = 'router.route_preloader';

        return $instance;
    }

    /**
     * Gets the 'router.route_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\RouteProvider A Drupal\Core\Routing\RouteProvider instance.
     */
    protected function getRouter_RouteProviderService()
    {
        $this->services['router.route_provider'] = $instance = new \Drupal\Core\Routing\RouteProvider($this->get('database'), $this->get('state'), $this->get('path.current'), $this->get('cache.data'), $this->get('path_processor_manager'));

        $instance->_serviceId = 'router.route_provider';

        return $instance;
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        $this->services['router_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context'), NULL, $this->get('request_stack'));

        $instance->_serviceId = 'router_listener';

        return $instance;
    }

    /**
     * Gets the 'serialization.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Serialization\Json A Drupal\Component\Serialization\Json instance.
     */
    protected function getSerialization_JsonService()
    {
        $this->services['serialization.json'] = $instance = new \Drupal\Component\Serialization\Json();

        $instance->_serviceId = 'serialization.json';

        return $instance;
    }

    /**
     * Gets the 'serialization.phpserialize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Serialization\PhpSerialize A Drupal\Component\Serialization\PhpSerialize instance.
     */
    protected function getSerialization_PhpserializeService()
    {
        $this->services['serialization.phpserialize'] = $instance = new \Drupal\Component\Serialization\PhpSerialize();

        $instance->_serviceId = 'serialization.phpserialize';

        return $instance;
    }

    /**
     * Gets the 'serialization.yaml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Serialization\Yaml A Drupal\Component\Serialization\Yaml instance.
     */
    protected function getSerialization_YamlService()
    {
        $this->services['serialization.yaml'] = $instance = new \Drupal\Component\Serialization\Yaml();

        $instance->_serviceId = 'serialization.yaml';

        return $instance;
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session_manager'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());

        $instance->_serviceId = 'session';

        return $instance;
    }

    /**
     * Gets the 'session_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\SessionConfiguration A Drupal\Core\Session\SessionConfiguration instance.
     */
    protected function getSessionConfigurationService()
    {
        $this->services['session_configuration'] = $instance = new \Drupal\Core\Session\SessionConfiguration(array());

        $instance->_serviceId = 'session_configuration';

        return $instance;
    }

    /**
     * Gets the 'session_handler.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\SessionHandler A Drupal\Core\Session\SessionHandler instance.
     */
    protected function getSessionHandler_StorageService()
    {
        $this->services['session_handler.storage'] = $instance = new \Drupal\Core\Session\SessionHandler($this->get('request_stack'), $this->get('database'));

        $instance->_serviceId = 'session_handler.storage';

        return $instance;
    }

    /**
     * Gets the 'session_handler.write_check' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\WriteCheckSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\WriteCheckSessionHandler instance.
     */
    protected function getSessionHandler_WriteCheckService()
    {
        $this->services['session_handler.write_check'] = $instance = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\WriteCheckSessionHandler($this->get('session_handler.storage'));

        $instance->_serviceId = 'session_handler.write_check';

        return $instance;
    }

    /**
     * Gets the 'session_handler.write_safe' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\WriteSafeSessionHandler A Drupal\Core\Session\WriteSafeSessionHandler instance.
     */
    protected function getSessionHandler_WriteSafeService()
    {
        $this->services['session_handler.write_safe'] = $instance = new \Drupal\Core\Session\WriteSafeSessionHandler($this->get('session_handler.write_check'));

        $instance->_serviceId = 'session_handler.write_safe';

        return $instance;
    }

    /**
     * Gets the 'session_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\SessionManager A Drupal\Core\Session\SessionManager instance.
     */
    protected function getSessionManagerService()
    {
        $a = $this->get('session_handler.write_safe');

        $this->services['session_manager'] = $instance = new \Drupal\Core\Session\SessionManager($this->get('request_stack'), $this->get('database'), $this->get('session_manager.metadata_bag'), $this->get('session_configuration'), $a);

        $instance->setWriteSafeHandler($a);
        $instance->_serviceId = 'session_manager';

        return $instance;
    }

    /**
     * Gets the 'session_manager.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\MetadataBag A Drupal\Core\Session\MetadataBag instance.
     */
    protected function getSessionManager_MetadataBagService()
    {
        $this->services['session_manager.metadata_bag'] = $instance = new \Drupal\Core\Session\MetadataBag($this->get('settings'));

        $instance->_serviceId = 'session_manager.metadata_bag';

        return $instance;
    }

    /**
     * Gets the 'settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Site\Settings A Drupal\Core\Site\Settings instance.
     */
    protected function getSettingsService()
    {
        $this->services['settings'] = $instance = \Drupal\Core\Site\Settings::getInstance();

        $instance->_serviceId = 'settings';

        return $instance;
    }

    /**
     * Gets the 'site.path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SplString A SplString instance.
     */
    protected function getSite_PathService()
    {
        return $this->services['site.path'] = call_user_func(array(new \Drupal\Core\SitePathFactory($this->get('kernel')), 'get'));
    }

    /**
     * Gets the 'state' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\State\State A Drupal\Core\State\State instance.
     */
    protected function getStateService()
    {
        $this->services['state'] = $instance = new \Drupal\Core\State\State($this->get('keyvalue'));

        $instance->_serviceId = 'state';

        return $instance;
    }

    /**
     * Gets the 'stream_wrapper.public' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StreamWrapper\PublicStream A Drupal\Core\StreamWrapper\PublicStream instance.
     */
    protected function getStreamWrapper_PublicService()
    {
        $this->services['stream_wrapper.public'] = $instance = new \Drupal\Core\StreamWrapper\PublicStream();

        $instance->_serviceId = 'stream_wrapper.public';

        return $instance;
    }

    /**
     * Gets the 'stream_wrapper.temporary' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StreamWrapper\TemporaryStream A Drupal\Core\StreamWrapper\TemporaryStream instance.
     */
    protected function getStreamWrapper_TemporaryService()
    {
        $this->services['stream_wrapper.temporary'] = $instance = new \Drupal\Core\StreamWrapper\TemporaryStream();

        $instance->_serviceId = 'stream_wrapper.temporary';

        return $instance;
    }

    /**
     * Gets the 'stream_wrapper_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StreamWrapper\StreamWrapperManager A Drupal\Core\StreamWrapper\StreamWrapperManager instance.
     */
    protected function getStreamWrapperManagerService()
    {
        $this->services['stream_wrapper_manager'] = $instance = new \Drupal\Core\StreamWrapper\StreamWrapperManager();

        $instance->setContainer($this);
        $instance->addStreamWrapper('stream_wrapper.public', 'Drupal\\Core\\StreamWrapper\\PublicStream', 'public');
        $instance->addStreamWrapper('stream_wrapper.temporary', 'Drupal\\Core\\StreamWrapper\\TemporaryStream', 'temporary');
        $instance->_serviceId = 'stream_wrapper_manager';

        return $instance;
    }

    /**
     * Gets the 'string_translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StringTranslation\TranslationManager A Drupal\Core\StringTranslation\TranslationManager instance.
     */
    protected function getStringTranslationService()
    {
        $this->services['string_translation'] = $instance = new \Drupal\Core\StringTranslation\TranslationManager($this->get('language_manager'), $this->get('state'));

        $instance->initLanguageManager();
        $instance->addTranslator($this->get('string_translator.custom_strings'), 30);
        $instance->_serviceId = 'string_translation';

        return $instance;
    }

    /**
     * Gets the 'string_translator.custom_strings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StringTranslation\Translator\CustomStrings A Drupal\Core\StringTranslation\Translator\CustomStrings instance.
     */
    protected function getStringTranslator_CustomStringsService()
    {
        $this->services['string_translator.custom_strings'] = $instance = new \Drupal\Core\StringTranslation\Translator\CustomStrings($this->get('settings'));

        $instance->_serviceId = 'string_translator.custom_strings';

        return $instance;
    }

    /**
     * Gets the 'system.admin_path.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\EventSubscriber\AdminRouteSubscriber A Drupal\system\EventSubscriber\AdminRouteSubscriber instance.
     */
    protected function getSystem_AdminPath_RouteSubscriberService()
    {
        $this->services['system.admin_path.route_subscriber'] = $instance = new \Drupal\system\EventSubscriber\AdminRouteSubscriber();

        $instance->_serviceId = 'system.admin_path.route_subscriber';

        return $instance;
    }

    /**
     * Gets the 'system.automatic_cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\EventSubscriber\AutomaticCron A Drupal\system\EventSubscriber\AutomaticCron instance.
     */
    protected function getSystem_AutomaticCronService()
    {
        $this->services['system.automatic_cron'] = $instance = new \Drupal\system\EventSubscriber\AutomaticCron($this->get('cron'), $this->get('config.factory'), $this->get('state'));

        $instance->_serviceId = 'system.automatic_cron';

        return $instance;
    }

    /**
     * Gets the 'system.breadcrumb.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\PathBasedBreadcrumbBuilder A Drupal\system\PathBasedBreadcrumbBuilder instance.
     */
    protected function getSystem_Breadcrumb_DefaultService()
    {
        $this->services['system.breadcrumb.default'] = $instance = new \Drupal\system\PathBasedBreadcrumbBuilder($this->get('router.request_context'), $this->get('access_manager'), $this->get('router'), $this->get('path_processor_manager'), $this->get('config.factory'), $this->get('title_resolver'), $this->get('current_user'), $this->get('path.current'));

        $instance->_serviceId = 'system.breadcrumb.default';

        return $instance;
    }

    /**
     * Gets the 'system.config_cache_tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\EventSubscriber\ConfigCacheTag A Drupal\system\EventSubscriber\ConfigCacheTag instance.
     */
    protected function getSystem_ConfigCacheTagService()
    {
        $this->services['system.config_cache_tag'] = $instance = new \Drupal\system\EventSubscriber\ConfigCacheTag($this->get('theme_handler'), $this->get('cache_tags.invalidator'));

        $instance->_serviceId = 'system.config_cache_tag';

        return $instance;
    }

    /**
     * Gets the 'system.config_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\SystemConfigSubscriber A Drupal\system\SystemConfigSubscriber instance.
     */
    protected function getSystem_ConfigSubscriberService()
    {
        $this->services['system.config_subscriber'] = $instance = new \Drupal\system\SystemConfigSubscriber();

        $instance->_serviceId = 'system.config_subscriber';

        return $instance;
    }

    /**
     * Gets the 'system.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\SystemManager A Drupal\system\SystemManager instance.
     */
    protected function getSystem_ManagerService()
    {
        $this->services['system.manager'] = $instance = new \Drupal\system\SystemManager($this->get('module_handler'), $this->get('entity.manager'), $this->get('request_stack'), $this->get('menu.link_tree'), $this->get('menu.active_trail'));

        $instance->_serviceId = 'system.manager';

        return $instance;
    }

    /**
     * Gets the 'theme.initialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\ThemeInitialization A Drupal\Core\Theme\ThemeInitialization instance.
     */
    protected function getTheme_InitializationService()
    {
        $this->services['theme.initialization'] = $instance = new \Drupal\Core\Theme\ThemeInitialization($this->get('app.root'), $this->get('theme_handler'), $this->get('cache.bootstrap'), $this->get('module_handler'));

        $instance->_serviceId = 'theme.initialization';

        return $instance;
    }

    /**
     * Gets the 'theme.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\ThemeManager A Drupal\Core\Theme\ThemeManager instance.
     */
    protected function getTheme_ManagerService()
    {
        $this->services['theme.manager'] = $instance = new \Drupal\Core\Theme\ThemeManager($this->get('app.root'), $this->get('theme.negotiator'), $this->get('theme.initialization'), $this->get('request_stack'), $this->get('module_handler'));

        $instance->setThemeRegistry($this->get('theme.registry'));
        $instance->_serviceId = 'theme.manager';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\ThemeNegotiator A Drupal\Core\Theme\ThemeNegotiator instance.
     */
    protected function getTheme_NegotiatorService()
    {
        $this->services['theme.negotiator'] = $instance = new \Drupal\Core\Theme\ThemeNegotiator($this->get('access_check.theme'));

        $instance->addNegotiator($this->get('theme.negotiator.ajax_base_page'), 1000);
        $instance->addNegotiator($this->get('theme.negotiator.system.batch'), 1000);
        $instance->addNegotiator($this->get('theme.negotiator.system.db_update'), 100);
        $instance->addNegotiator($this->get('theme.negotiator.admin_theme'), -40);
        $instance->addNegotiator($this->get('theme.negotiator.default'), -100);
        $instance->_serviceId = 'theme.negotiator';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.admin_theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Theme\AdminNegotiator A Drupal\user\Theme\AdminNegotiator instance.
     */
    protected function getTheme_Negotiator_AdminThemeService()
    {
        $this->services['theme.negotiator.admin_theme'] = $instance = new \Drupal\user\Theme\AdminNegotiator($this->get('current_user'), $this->get('config.factory'), $this->get('entity.manager'), $this->get('router.admin_context'));

        $instance->_serviceId = 'theme.negotiator.admin_theme';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.ajax_base_page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\AjaxBasePageNegotiator A Drupal\Core\Theme\AjaxBasePageNegotiator instance.
     */
    protected function getTheme_Negotiator_AjaxBasePageService()
    {
        $this->services['theme.negotiator.ajax_base_page'] = $instance = new \Drupal\Core\Theme\AjaxBasePageNegotiator($this->get('csrf_token'), $this->get('config.factory'), $this->get('request_stack'));

        $instance->_serviceId = 'theme.negotiator.ajax_base_page';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\DefaultNegotiator A Drupal\Core\Theme\DefaultNegotiator instance.
     */
    protected function getTheme_Negotiator_DefaultService()
    {
        $this->services['theme.negotiator.default'] = $instance = new \Drupal\Core\Theme\DefaultNegotiator($this->get('config.factory'));

        $instance->_serviceId = 'theme.negotiator.default';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.system.batch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\Theme\BatchNegotiator A Drupal\system\Theme\BatchNegotiator instance.
     */
    protected function getTheme_Negotiator_System_BatchService()
    {
        $this->services['theme.negotiator.system.batch'] = $instance = new \Drupal\system\Theme\BatchNegotiator($this->get('batch.storage'), $this->get('request_stack'));

        $instance->_serviceId = 'theme.negotiator.system.batch';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.system.db_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\Theme\DbUpdateNegotiator A Drupal\system\Theme\DbUpdateNegotiator instance.
     */
    protected function getTheme_Negotiator_System_DbUpdateService()
    {
        $this->services['theme.negotiator.system.db_update'] = $instance = new \Drupal\system\Theme\DbUpdateNegotiator($this->get('config.factory'));

        $instance->_serviceId = 'theme.negotiator.system.db_update';

        return $instance;
    }

    /**
     * Gets the 'theme.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\Registry A Drupal\Core\Theme\Registry instance.
     */
    protected function getTheme_RegistryService()
    {
        $this->services['theme.registry'] = $instance = new \Drupal\Core\Theme\Registry($this->get('app.root'), $this->get('cache.default'), $this->get('lock'), $this->get('module_handler'), $this->get('theme_handler'), $this->get('theme.initialization'));

        $instance->setThemeManager($this->get('theme.manager'));
        $instance->_serviceId = 'theme.registry';

        return $instance;
    }

    /**
     * Gets the 'theme_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Extension\ThemeHandler A Drupal\Core\Extension\ThemeHandler instance.
     */
    protected function getThemeHandlerService()
    {
        $this->services['theme_handler'] = $instance = new \Drupal\Core\Extension\ThemeHandler($this->get('app.root'), $this->get('config.factory'), $this->get('module_handler'), $this->get('state'), $this->get('info_parser'));

        $instance->_serviceId = 'theme_handler';

        return $instance;
    }

    /**
     * Gets the 'theme_installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Extension\ThemeInstaller A Drupal\Core\Extension\ThemeInstaller instance.
     */
    protected function getThemeInstallerService()
    {
        $this->services['theme_installer'] = $instance = new \Drupal\Core\Extension\ThemeInstaller($this->get('theme_handler'), $this->get('config.factory'), $this->get('config.installer'), $this->get('module_handler'), $this->get('config.manager'), $this->get('asset.css.collection_optimizer'), $this->get('router.builder'), $this->get('logger.channel.default'), $this->get('state'));

        $instance->_serviceId = 'theme_installer';

        return $instance;
    }

    /**
     * Gets the 'title_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Controller\TitleResolver A Drupal\Core\Controller\TitleResolver instance.
     */
    protected function getTitleResolverService()
    {
        $this->services['title_resolver'] = $instance = new \Drupal\Core\Controller\TitleResolver($this->get('controller_resolver'), $this->get('string_translation'));

        $instance->_serviceId = 'title_resolver';

        return $instance;
    }

    /**
     * Gets the 'token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Utility\Token A Drupal\Core\Utility\Token instance.
     */
    protected function getTokenService()
    {
        $this->services['token'] = $instance = new \Drupal\Core\Utility\Token($this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('cache_tags.invalidator'), $this->get('renderer'));

        $instance->_serviceId = 'token';

        return $instance;
    }

    /**
     * Gets the 'transliteration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Transliteration\PhpTransliteration A Drupal\Core\Transliteration\PhpTransliteration instance.
     */
    protected function getTransliterationService()
    {
        $this->services['transliteration'] = $instance = new \Drupal\Core\Transliteration\PhpTransliteration(NULL, $this->get('module_handler'));

        $instance->_serviceId = 'transliteration';

        return $instance;
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Template\TwigEnvironment A Drupal\Core\Template\TwigEnvironment instance.
     */
    protected function getTwigService()
    {
        $a = new \Twig_Loader_Chain();
        $a->addLoader($this->get('twig.loader.filesystem'));
        $a->addLoader($this->get('twig.loader.theme_registry'));
        $a->addLoader($this->get('twig.loader.string'));

        $this->services['twig'] = $instance = new \Drupal\Core\Template\TwigEnvironment($this->get('app.root'), $this->get('cache.default'), $a, array());

        $instance->addExtension($this->get('twig.extension'));
        $instance->addExtension($this->get('twig.extension.debug'));
        $instance->_serviceId = 'twig';

        return $instance;
    }

    /**
     * Gets the 'twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Template\TwigExtension A Drupal\Core\Template\TwigExtension instance.
     */
    protected function getTwig_ExtensionService()
    {
        $this->services['twig.extension'] = $instance = new \Drupal\Core\Template\TwigExtension($this->get('renderer'));

        $instance->setUrlGenerator($this->get('url_generator'));
        $instance->setThemeManager($this->get('theme.manager'));
        $instance->_serviceId = 'twig.extension';

        return $instance;
    }

    /**
     * Gets the 'twig.extension.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extension_Debug A Twig_Extension_Debug instance.
     */
    protected function getTwig_Extension_DebugService()
    {
        $this->services['twig.extension.debug'] = $instance = new \Twig_Extension_Debug();

        $instance->_serviceId = 'twig.extension.debug';

        return $instance;
    }

    /**
     * Gets the 'twig.loader.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Template\Loader\FilesystemLoader A Drupal\Core\Template\Loader\FilesystemLoader instance.
     */
    protected function getTwig_Loader_FilesystemService()
    {
        $this->services['twig.loader.filesystem'] = $instance = new \Drupal\Core\Template\Loader\FilesystemLoader($this->get('app.root'), $this->get('module_handler'), $this->get('theme_handler'));

        $instance->_serviceId = 'twig.loader.filesystem';

        return $instance;
    }

    /**
     * Gets the 'twig.loader.string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Template\Loader\StringLoader A Drupal\Core\Template\Loader\StringLoader instance.
     */
    protected function getTwig_Loader_StringService()
    {
        $this->services['twig.loader.string'] = $instance = new \Drupal\Core\Template\Loader\StringLoader();

        $instance->_serviceId = 'twig.loader.string';

        return $instance;
    }

    /**
     * Gets the 'twig.loader.theme_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Template\Loader\ThemeRegistryLoader A Drupal\Core\Template\Loader\ThemeRegistryLoader instance.
     */
    protected function getTwig_Loader_ThemeRegistryService()
    {
        $this->services['twig.loader.theme_registry'] = $instance = new \Drupal\Core\Template\Loader\ThemeRegistryLoader($this->get('theme.registry'));

        $instance->_serviceId = 'twig.loader.theme_registry';

        return $instance;
    }

    /**
     * Gets the 'typed_data_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\TypedData\TypedDataManager A Drupal\Core\TypedData\TypedDataManager instance.
     */
    protected function getTypedDataManagerService()
    {
        $this->services['typed_data_manager'] = $instance = new \Drupal\Core\TypedData\TypedDataManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('class_resolver'));

        $instance->setValidationConstraintManager($this->get('validation.constraint'));
        $instance->_serviceId = 'typed_data_manager';

        return $instance;
    }

    /**
     * Gets the 'unrouted_url_assembler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Utility\UnroutedUrlAssembler A Drupal\Core\Utility\UnroutedUrlAssembler instance.
     */
    protected function getUnroutedUrlAssemblerService()
    {
        $this->services['unrouted_url_assembler'] = $instance = new \Drupal\Core\Utility\UnroutedUrlAssembler($this->get('request_stack'), $this->get('path_processor_manager'), array(0 => 'http', 1 => 'https', 2 => 'ftp', 3 => 'news', 4 => 'nntp', 5 => 'tel', 6 => 'telnet', 7 => 'mailto', 8 => 'irc', 9 => 'ssh', 10 => 'sftp', 11 => 'webcal', 12 => 'rtsp'));

        $instance->_serviceId = 'unrouted_url_assembler';

        return $instance;
    }

    /**
     * Gets the 'url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\MetadataBubblingUrlGenerator A Drupal\Core\Render\MetadataBubblingUrlGenerator instance.
     */
    protected function getUrlGeneratorService()
    {
        $a = $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $b = new \Drupal\Core\Routing\UrlGenerator($this->get('router.route_provider'), $this->get('path_processor_manager'), $this->get('route_processor_manager'), $this->get('request_stack'), array(0 => 'http', 1 => 'https', 2 => 'ftp', 3 => 'news', 4 => 'nntp', 5 => 'tel', 6 => 'telnet', 7 => 'mailto', 8 => 'irc', 9 => 'ssh', 10 => 'sftp', 11 => 'webcal', 12 => 'rtsp'));
        if ($this->has('router.request_context')) {
            $b->setContext($a);
        }

        $this->services['url_generator'] = $instance = new \Drupal\Core\Render\MetadataBubblingUrlGenerator($b, $this->get('renderer'));

        if ($this->has('router.request_context')) {
            $instance->setContext($a);
        }
        $instance->_serviceId = 'url_generator';

        return $instance;
    }

    /**
     * Gets the 'user.auth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\UserAuth A Drupal\user\UserAuth instance.
     */
    protected function getUser_AuthService()
    {
        $this->services['user.auth'] = $instance = new \Drupal\user\UserAuth($this->get('entity.manager'), $this->get('password'));

        $instance->_serviceId = 'user.auth';

        return $instance;
    }

    /**
     * Gets the 'user.authentication.cookie' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Authentication\Provider\Cookie A Drupal\user\Authentication\Provider\Cookie instance.
     */
    protected function getUser_Authentication_CookieService()
    {
        $this->services['user.authentication.cookie'] = $instance = new \Drupal\user\Authentication\Provider\Cookie($this->get('session_configuration'), $this->get('database'));

        $instance->_serviceId = 'user.authentication.cookie';

        return $instance;
    }

    /**
     * Gets the 'user.current_user_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\ContextProvider\CurrentUserContext A Drupal\user\ContextProvider\CurrentUserContext instance.
     */
    protected function getUser_CurrentUserContextService()
    {
        $this->services['user.current_user_context'] = $instance = new \Drupal\user\ContextProvider\CurrentUserContext($this->get('current_user'), $this->get('entity.manager'));

        $instance->_serviceId = 'user.current_user_context';

        return $instance;
    }

    /**
     * Gets the 'user.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\UserData A Drupal\user\UserData instance.
     */
    protected function getUser_DataService()
    {
        $this->services['user.data'] = $instance = new \Drupal\user\UserData($this->get('database'));

        $instance->_serviceId = 'user.data';

        return $instance;
    }

    /**
     * Gets the 'user.permissions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\PermissionHandler A Drupal\user\PermissionHandler instance.
     */
    protected function getUser_PermissionsService()
    {
        $this->services['user.permissions'] = $instance = new \Drupal\user\PermissionHandler($this->get('module_handler'), $this->get('string_translation'), $this->get('controller_resolver'));

        $instance->_serviceId = 'user.permissions';

        return $instance;
    }

    /**
     * Gets the 'user.private_tempstore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\PrivateTempStoreFactory A Drupal\user\PrivateTempStoreFactory instance.
     */
    protected function getUser_PrivateTempstoreService()
    {
        $this->services['user.private_tempstore'] = $instance = new \Drupal\user\PrivateTempStoreFactory($this->get('keyvalue.expirable'), $this->get('lock'), $this->get('current_user'), $this->get('request_stack'), 604800);

        $instance->_serviceId = 'user.private_tempstore';

        return $instance;
    }

    /**
     * Gets the 'user.shared_tempstore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\SharedTempStoreFactory A Drupal\user\SharedTempStoreFactory instance.
     */
    protected function getUser_SharedTempstoreService()
    {
        $this->services['user.shared_tempstore'] = $instance = new \Drupal\user\SharedTempStoreFactory($this->get('keyvalue.expirable'), $this->get('lock'), $this->get('request_stack'), 604800);

        $instance->_serviceId = 'user.shared_tempstore';

        return $instance;
    }

    /**
     * Gets the 'user_access_denied_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\EventSubscriber\AccessDeniedSubscriber A Drupal\user\EventSubscriber\AccessDeniedSubscriber instance.
     */
    protected function getUserAccessDeniedSubscriberService()
    {
        $this->services['user_access_denied_subscriber'] = $instance = new \Drupal\user\EventSubscriber\AccessDeniedSubscriber($this->get('current_user'), $this->get('url_generator'));

        $instance->_serviceId = 'user_access_denied_subscriber';

        return $instance;
    }

    /**
     * Gets the 'user_last_access_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\EventSubscriber\UserRequestSubscriber A Drupal\user\EventSubscriber\UserRequestSubscriber instance.
     */
    protected function getUserLastAccessSubscriberService()
    {
        $this->services['user_last_access_subscriber'] = $instance = new \Drupal\user\EventSubscriber\UserRequestSubscriber($this->get('current_user'), $this->get('entity.manager'));

        $instance->_serviceId = 'user_last_access_subscriber';

        return $instance;
    }

    /**
     * Gets the 'user_maintenance_mode_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\EventSubscriber\MaintenanceModeSubscriber A Drupal\user\EventSubscriber\MaintenanceModeSubscriber instance.
     */
    protected function getUserMaintenanceModeSubscriberService()
    {
        $this->services['user_maintenance_mode_subscriber'] = $instance = new \Drupal\user\EventSubscriber\MaintenanceModeSubscriber($this->get('maintenance_mode'), $this->get('current_user'));

        $instance->_serviceId = 'user_maintenance_mode_subscriber';

        return $instance;
    }

    /**
     * Gets the 'user_permissions_hash_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\PermissionsHashGenerator A Drupal\Core\Session\PermissionsHashGenerator instance.
     */
    protected function getUserPermissionsHashGeneratorService()
    {
        $this->services['user_permissions_hash_generator'] = $instance = new \Drupal\Core\Session\PermissionsHashGenerator($this->get('private_key'), $this->get('cache.default'));

        $instance->_serviceId = 'user_permissions_hash_generator';

        return $instance;
    }

    /**
     * Gets the 'uuid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Uuid\Php A Drupal\Component\Uuid\Php instance.
     */
    protected function getUuidService()
    {
        $this->services['uuid'] = $instance = new \Drupal\Component\Uuid\Php();

        $instance->_serviceId = 'uuid';

        return $instance;
    }

    /**
     * Gets the 'validation.constraint' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Validation\ConstraintManager A Drupal\Core\Validation\ConstraintManager instance.
     */
    protected function getValidation_ConstraintService()
    {
        $this->services['validation.constraint'] = $instance = new \Drupal\Core\Validation\ConstraintManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'validation.constraint';

        return $instance;
    }

    /**
     * Gets the 'access_manager.check_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Drupal\Core\Access\CheckProvider A Drupal\Core\Access\CheckProvider instance.
     */
    protected function getAccessManager_CheckProviderService()
    {
        $this->services['access_manager.check_provider'] = $instance = new \Drupal\Core\Access\CheckProvider();

        $instance->setContainer($this);
        $instance->addCheckService('access_check.default', 'access', array(0 => '_access'), false);
        $instance->addCheckService('access_check.entity', 'access', array(0 => '_entity_access'), false);
        $instance->addCheckService('access_check.entity_create', 'access', array(0 => '_entity_create_access'), false);
        $instance->addCheckService('access_check.theme', 'access', array(0 => '_access_theme'), false);
        $instance->addCheckService('access_check.custom', 'access', array(0 => '_custom_access'), false);
        $instance->addCheckService('access_check.csrf', 'access', array(0 => '_csrf_token'), true);
        $instance->addCheckService('access_check.cron', 'access', array(0 => '_access_system_cron'), false);
        $instance->addCheckService('access_check.db_update', 'access', array(0 => '_access_system_update'), false);
        $instance->addCheckService('access_check.permission', 'access', array(0 => '_permission'), false);
        $instance->addCheckService('access_check.user.register', 'access', array(0 => '_access_user_register'), false);
        $instance->addCheckService('access_check.user.role', 'access', array(0 => '_role'), false);
        $instance->addCheckService('access_check.user.login_status', 'access', array(0 => '_user_is_logged_in'), false);

        return $instance;
    }

    /**
     * Gets the 'menu.tree_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Drupal\Core\Menu\MenuTreeStorage A Drupal\Core\Menu\MenuTreeStorage instance.
     */
    protected function getMenu_TreeStorageService()
    {
        return $this->services['menu.tree_storage'] = new \Drupal\Core\Menu\MenuTreeStorage($this->get('database'), $this->get('cache.menu'), $this->get('cache_tags.invalidator'), 'menu_tree');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'install',
            'container.modules' => array(
                'system' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/system/system.info.yml',
                    'filename' => 'system.module',
                ),
                'user' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/user/user.info.yml',
                    'filename' => 'user.module',
                ),
            ),
            'container.namespaces' => array(
                'Drupal\\system' => 'core/modules/system/src',
                'Drupal\\user' => 'core/modules/user/src',
                'Drupal\\Core\\Block' => 'core/lib/Drupal/Core/Block',
                'Drupal\\Core\\Config' => 'core/lib/Drupal/Core/Config',
                'Drupal\\Core\\Datetime' => 'core/lib/Drupal/Core/Datetime',
                'Drupal\\Core\\Entity' => 'core/lib/Drupal/Core/Entity',
                'Drupal\\Core\\Field' => 'core/lib/Drupal/Core/Field',
                'Drupal\\Core\\Mail' => 'core/lib/Drupal/Core/Mail',
                'Drupal\\Core\\ProxyClass' => 'core/lib/Drupal/Core/ProxyClass',
                'Drupal\\Core\\Render' => 'core/lib/Drupal/Core/Render',
                'Drupal\\Core\\TypedData' => 'core/lib/Drupal/Core/TypedData',
                'Drupal\\Core\\Validation' => 'core/lib/Drupal/Core/Validation',
                'Drupal\\Component\\Annotation' => 'core/lib/Drupal/Component/Annotation',
            ),
            'language.default_values' => array(
                'id' => 'en',
                'name' => 'English',
                'direction' => 'ltr',
                'weight' => 0,
                'locked' => false,
            ),
            'session.storage.options' => array(

            ),
            'twig.config' => array(

            ),
            'renderer.config' => array(
                'required_cache_contexts' => array(
                    0 => 'languages:language_interface',
                    1 => 'theme',
                    2 => 'user.permissions',
                ),
            ),
            'factory.keyvalue' => array(
                'default' => 'keyvalue.database',
            ),
            'factory.keyvalue.expirable' => array(
                'default' => 'keyvalue.expirable.database',
            ),
            'filter_protocols' => array(
                0 => 'http',
                1 => 'https',
                2 => 'ftp',
                3 => 'news',
                4 => 'nntp',
                5 => 'tel',
                6 => 'telnet',
                7 => 'mailto',
                8 => 'irc',
                9 => 'ssh',
                10 => 'sftp',
                11 => 'webcal',
                12 => 'rtsp',
            ),
            'user.tempstore.expire' => 604800,
            'persist_ids' => array(
                0 => 'class_loader',
                1 => 'kernel',
                2 => 'service_container',
                3 => 'request_stack',
                4 => 'router.request_context',
            ),
            'main_content_renderers' => array(
                'html' => 'main_content_renderer.html',
                'drupal_ajax' => 'main_content_renderer.ajax',
                'iframeupload' => 'main_content_renderer.ajax',
                'drupal_dialog' => 'main_content_renderer.dialog',
                'drupal_modal' => 'main_content_renderer.modal',
            ),
            'cache_bins' => array(
                'cache.bootstrap' => 'bootstrap',
                'cache.config' => 'config',
                'cache.default' => 'default',
                'cache.entity' => 'entity',
                'cache.menu' => 'menu',
                'cache.render' => 'render',
                'cache.data' => 'data',
                'cache.discovery' => 'discovery',
            ),
            'cache_default_bin_backends' => array(
                'bootstrap' => 'cache.backend.chainedfast',
                'config' => 'cache.backend.chainedfast',
                'discovery' => 'cache.backend.chainedfast',
            ),
            'cache_contexts' => array(
                0 => 'cookies',
                1 => 'headers',
                2 => 'ip',
                3 => 'languages',
                4 => 'request_format',
                5 => 'route',
                6 => 'route.menu_active_trails',
                7 => 'route.name',
                8 => 'session',
                9 => 'theme',
                10 => 'timezone',
                11 => 'url',
                12 => 'url.query_args',
                13 => 'url.query_args.pagers',
                14 => 'url.site',
                15 => 'user',
                16 => 'user.is_super_user',
                17 => 'user.permissions',
                18 => 'user.roles',
            ),
        );
    }
}

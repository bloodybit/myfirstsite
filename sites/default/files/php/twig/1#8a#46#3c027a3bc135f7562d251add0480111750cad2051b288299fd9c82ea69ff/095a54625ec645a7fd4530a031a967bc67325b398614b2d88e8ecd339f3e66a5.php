<?php

/* core/themes/classy/templates/views/views-exposed-form.html.twig */
class __TwigTemplate_8a463c027a3bc135f7562d251add0480111750cad2051b288299fd9c82ea69ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        if ( !twig_test_empty((isset($context["q"]) ? $context["q"] : null))) {
            // line 13
            echo "  ";
            // line 17
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["q"]) ? $context["q"] : null), "html", null, true);
            echo "
";
        }
        // line 19
        echo "<div class=\"form--inline clearfix\">
  ";
        // line 20
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-exposed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 20,  28 => 19,  23 => 17,  21 => 13,  19 => 12,);
    }
}

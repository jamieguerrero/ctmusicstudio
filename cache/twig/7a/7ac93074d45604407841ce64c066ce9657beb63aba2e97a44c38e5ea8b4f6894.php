<?php

/* plugin.yaml.twig */
class __TwigTemplate_eef67521d32aa987a2bbf097c84f085250e12f042eba640a350a06d9814c1e06 extends Twig_Template
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
        // line 1
        echo "enabled: true
text_var: Custom Text added by the **";
        // line 2
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "name", array()));
        echo "** plugin (disable plugin to remove)
";
    }

    public function getTemplateName()
    {
        return "plugin.yaml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("enabled: true
text_var: Custom Text added by the **{{ component.name|titleize }}** plugin (disable plugin to remove)
", "plugin.yaml.twig", "/Applications/MAMP/htdocs/ctms-grav/user/plugins/devtools/components/plugin/blank/plugin.yaml.twig");
    }
}

<?php

/* instagram.html.twig */
class __TwigTemplate_6fd0b2021f69947e1e4251f72386cca2e857c23b9c83e50ba702acb5aec1a7e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "instagram.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
  ";
        // line 5
        echo call_user_func_array($this->env->getFunction('instagram_feed')->getCallable(), array());
        echo "

";
    }

    public function getTemplateName()
    {
        return "instagram.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
\t{{ page.content }}
  {{ instagram_feed() }}

{% endblock %}
", "instagram.html.twig", "/Applications/MAMP/htdocs/-grav/user/themes/antimatter/templates/instagram.html.twig");
    }
}

<?php

/* modular/text.html.twig */
class __TwigTemplate_0060830f6771812250f4df662c5ea09221af48475621e2104866bdaa41e50267 extends Twig_Template
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
        echo "<div class=\"modular-row callout\">
";
        // line 2
        echo ($context["content"] ?? null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
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
        return new Twig_Source("<div class=\"modular-row callout\">
{{ content }}
</div>
", "modular/text.html.twig", "/Applications/MAMP/htdocs/ctms-grav/user/themes/ctms-theme/templates/modular/text.html.twig");
    }
}

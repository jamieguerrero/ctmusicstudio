<?php

/* modular/text.html.twig */
class __TwigTemplate_44610467e08fef0b2d7cad44921ba93d67946d9557800e6aa42ae6ff90f3f13c extends Twig_Template
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
";
        // line 3
        $context["images"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array());
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 5
            echo "    ";
            echo $this->getAttribute($this->getAttribute($context["image"], "cropResize", array(0 => 400, 1 => 400), "method"), "html", array(0 => "", 1 => ("align-" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_align", array())), 2 => "about-school"), "method");
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
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
        return array (  41 => 7,  32 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
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
{% set images = page.media.images %}
{% for image in images %}
    {{ image.cropResize(400,400).html('','align-'~page.header.image_align, 'about-school') }}
{% endfor %}
</div>
", "modular/text.html.twig", "/Applications/MAMP/htdocs/ctms-grav/user/themes/ctms-theme/templates/modular/text.html.twig");
    }
}

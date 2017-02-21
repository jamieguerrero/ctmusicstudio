<?php

/* modular/text-dark.html.twig */
class __TwigTemplate_6961a5f95429f191493cf856cdb9d8c29a4cf1d9781b2f6262045fe0894d1b05 extends Twig_Template
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
        $context["headerimage"] = twig_last($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 2
        $context["images"] = twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["start"] ?? null), ($context["length"] ?? null));
        // line 3
        echo "
<section>
  <div class=\"section-wrapper section-dark\">
    <div class=\"section-top\">
      <div class=\"section-top-wrapper left\">
          ";
        // line 8
        echo $this->getAttribute(($context["headerimage"] ?? null), "html", array(0 => "", 1 => "", 2 => "section-img img-dark"), "method");
        echo "
      </div>
    </div>

    <div class=\"section-bottom\">
      <div class=\"section-bottom-wrapper right\">
        ";
        // line 14
        echo ($context["content"] ?? null);
        echo "
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/text-dark.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  30 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set headerimage = page.media.images | last %}
{% set images = page.media.images | slice(start,length) %}

<section>
  <div class=\"section-wrapper section-dark\">
    <div class=\"section-top\">
      <div class=\"section-top-wrapper left\">
          {{ headerimage.html('','', 'section-img img-dark') }}
      </div>
    </div>

    <div class=\"section-bottom\">
      <div class=\"section-bottom-wrapper right\">
        {{ content }}
      </div>
    </div>
  </div>
</section>
", "modular/text-dark.html.twig", "/Applications/MAMP/htdocs/ctms-grav/user/themes/ctms-theme/templates/modular/text-dark.html.twig");
    }
}

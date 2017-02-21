<?php

/* modular/text-chynnainfo.html.twig */
class __TwigTemplate_8b6e897e77b69dcc52349b6cd112a080e2cb40d9a219577b600dbd4a5145b5df extends Twig_Template
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
        $context["images"] = twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), 0, 1);
        // line 3
        echo "
<section>
  <div class=\"section-wrapper section-light\">
    <div class=\"section-top\">
      <div class=\"section-top-wrapper right\">
          ";
        // line 8
        echo $this->getAttribute(($context["headerimage"] ?? null), "html", array(0 => "", 1 => "", 2 => "section-img img-light"), "method");
        echo "
      </div>
    </div>

    <div class=\"section-bottom\">
      <div class=\"section-bottom-wrapper left\">
        ";
        // line 14
        echo ($context["content"] ?? null);
        echo "
        ";
        // line 15
        $context["images"] = twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["start"] ?? null), ($context["length"] ?? null));
        // line 16
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 17
            echo "            ";
            echo $this->getAttribute($context["image"], "html", array(0 => "", 1 => ("align-" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_align", array())), 2 => "about-school img-dark"), "method");
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/text-chynnainfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  50 => 17,  45 => 16,  43 => 15,  39 => 14,  30 => 8,  23 => 3,  21 => 2,  19 => 1,);
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
{% set images = page.media.images | slice(0,1) %}

<section>
  <div class=\"section-wrapper section-light\">
    <div class=\"section-top\">
      <div class=\"section-top-wrapper right\">
          {{ headerimage.html('','', 'section-img img-light') }}
      </div>
    </div>

    <div class=\"section-bottom\">
      <div class=\"section-bottom-wrapper left\">
        {{ content }}
        {% set images = page.media.images | slice(start, length) %}
        {% for image in images %}
            {{ image.html('','align-'~page.header.image_align, 'about-school img-dark') }}
        {% endfor %}
      </div>
    </div>
  </div>
</section>
", "modular/text-chynnainfo.html.twig", "/Applications/MAMP/htdocs/ctms-grav/user/themes/ctms-theme/templates/modular/text-chynnainfo.html.twig");
    }
}

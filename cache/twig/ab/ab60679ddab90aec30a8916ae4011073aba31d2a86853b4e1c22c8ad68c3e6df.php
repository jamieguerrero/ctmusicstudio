<?php

/* partials/instagram-feed.html.twig */
class __TwigTemplate_ba3433a07ffb66b58e329396269422e311180e27176d895af8d443265384b6da extends Twig_Template
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
        if (($context["feed"] ?? null)) {
            // line 2
            echo "<ul class=\"instagram-feed\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["feed"] ?? null), 0, ($context["count"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "        <li>
            <a href=\"";
                // line 5
                echo $this->getAttribute($context["item"], "link", array());
                echo "\" target=\"_blank\">
                <img src=\"";
                // line 6
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "images", array()), "thumbnail", array()), "url", array());
                echo "\" alt=\"\">
            </a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</ul>
";
        } else {
            // line 12
            echo "<p>
    Could not load the Instagram feed!
</p>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/instagram-feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  45 => 10,  35 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if feed %}
<ul class=\"instagram-feed\">
    {% for item in feed|slice(0, count) %}
        <li>
            <a href=\"{{ item.link }}\" target=\"_blank\">
                <img src=\"{{ item.images.thumbnail.url }}\" alt=\"\">
            </a>
        </li>
    {% endfor %}
</ul>
{% else %}
<p>
    Could not load the Instagram feed!
</p>
{% endif %}", "partials/instagram-feed.html.twig", "/Applications/MAMP/htdocs/grav/user/plugins/instagram-feed/templates/partials/instagram-feed.html.twig");
    }
}

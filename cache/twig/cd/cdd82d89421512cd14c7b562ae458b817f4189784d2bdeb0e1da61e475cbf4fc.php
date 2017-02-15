<?php

/* partials/instagram.html.twig */
class __TwigTemplate_86f1c1a474c2e1e89079ea8e417843f3f003c77ebb7fbacba5448b84b6e3dfb8 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["feed"] ?? null), 0, ($context["count"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["post"], "link", array());
            echo "\" target=\"_blank\"><img src=\"";
            echo $this->getAttribute($context["post"], "image", array());
            echo "\" alt=\"\"></a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/instagram.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for post in feed|slice(0, count)  %}
    <li><a href=\"{{ post.link }}\" target=\"_blank\"><img src=\"{{ post.image }}\" alt=\"\"></a></li>
{% endfor %}
", "partials/instagram.html.twig", "/Applications/MAMP/htdocs/jamieguerrero/user/plugins/instagram/templates/partials/instagram.html.twig");
    }
}

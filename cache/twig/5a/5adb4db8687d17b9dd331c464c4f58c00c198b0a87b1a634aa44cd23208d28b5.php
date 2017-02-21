<?php

/* partials/base.html.twig */
class __TwigTemplate_98ef35bdaae46ba34ec407ff7b4e746fa5321b72a1364eae12d760e26c10f95d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'mobile_navigation' => array($this, 'block_mobile_navigation'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'map' => array($this, 'block_map'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Handmade with ♥ and Sass by jamieguerrero.com -->
";
        // line 2
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "</head>
<body id=\"top\" class=\"";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('map', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        echo "</div>
<!--content-wrapper div end-->
";
        // line 99
        $this->displayBlock('bottom', $context, $blocks);
        // line 137
        echo "
</body>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "http://yui.yahooapis.com/pure/0.6.0/pure-min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", 1 => 99), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/main.css", 1 => 98), "method");
        // line 21
        echo "    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.js", 1 => 98), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "http://code.jquery.com/jquery-2.1.4.min.js", 1 => array("priority" => 97, "group" => "bottom")), "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/classie.js", 1 => array("priority" => 96, "group" => "bottom")), "method");
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/demo1.js", 1 => array("priority" => 95, "group" => "bottom")), "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "https://maps.googleapis.com/maps/api/js?key=AIzaSyCteI3pxDlyIjyTNGs4Vz-fL1Ed-Sg8JXw&callback=initMap", 1 => array("priority" => 92, "loading" => "async defer", "group" => "map")), "method");
        // line 30
        echo "    ";
    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        // line 38
        echo "<div id=\"content-wrapper\">
<div class=\"overlay overlay-hugeinc\">
  <button type=\"button\" class=\"overlay-close\">Close</button>
    <!-- Mobile Nav -->
    ";
        // line 42
        $this->displayBlock('mobile_navigation', $context, $blocks);
        // line 47
        echo "</div>
<!-- everything centered on mobile -->
<header class=\"header-wrapper section-light\">
  <!-- Full Nav -->
    ";
        // line 51
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 56
        echo "  <!-- Logo + Title -->
  <img class=\"logo-img\" src=\"";
        // line 57
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/ctms-logo.svg");
        echo "\">
  <!-- Mobile Nav Button -->
  <div class=\"mobile-nav\">
    <a id=\"trigger-overlay\" class=\"menu-button\" type=\"button\" href=\"#\"><img class=\"mobile-button\" src=\"";
        // line 60
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/mobile-button.svg");
        echo "\"></a>
  </div>

</header>
";
    }

    // line 42
    public function block_mobile_navigation($context, array $blocks = array())
    {
        // line 43
        echo "    <nav id=\"mobile-nav\">
        ";
        // line 44
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "    </nav>
    ";
    }

    // line 51
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 52
        echo "    <nav id=\"full-nav\">
        ";
        // line 53
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "    </nav>
    ";
    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        // line 67
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    // line 70
    public function block_map($context, array $blocks = array())
    {
        // line 71
        echo "<section>
  <div class=\"section-map\">
    <div id=\"map\"></div>
    <div class=\"map-overlay\"><h1>BASED IN BRAMPTON. <br>AVAILABLE IN THE GTA.</h1></div>
  </div>
</section>
";
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        echo "<footer>
  <div class=\"footer-wrapper section-mid\">
    <div class=\"contact-wrapper\">
      <!-- CONTACT phone # and email link -->
      <h1>CONTACT</h1>
      <!-- CONTACT form -->
      <a href=\"mailto:chynna@ctmusicstudio.com?Subject=Hi%20there\">chynna@ctmusicstudio.com</a>
    </div>
    <form method=\"POST\" name=\"contactform\" action=\"http://formspree.io/chynna@ctmusicstudio.com\">
      <input class=\"contact-form\" type=\"text\" name=\"name\" placeholder=\"name\">
      <input class=\"contact-form\" type=\"text\" name=\"email\" placeholder=\"email\">
      <textarea class=\"contact-form contact-content\" name=\"message\" placeholder=\"message\"></textarea>
      <input class=\"contact-form contact-button\" type=\"submit\" name=\"submit\"><br>
    </form>
  </div>
</footer>
";
    }

    // line 99
    public function block_bottom($context, array $blocks = array())
    {
        // line 100
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
    <script type=\"text/javascript\">
    \$(document).ready(function() {

      /* Every time the window is scrolled ... */
      \$(window).scroll( function(){

          /* Check the location of each desired element */
          \$('.hideme').each( function(i){

              var bottom_of_object = \$(this).offset().top + \$(this).outerHeight();
              var bottom_of_window = \$(window).scrollTop() + \$(window).height();

              /* If the object is completely visible in the window, fade it it */
              if( bottom_of_window > bottom_of_object ){

                  \$(this).animate({'opacity':'1'},500);

              }

          });
      });
    });
    </script>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 43.6627635, lng: -79.7951424},
          zoom: 14,
          scrollwheel: false,
          styles: [{\"featureType\":\"administrative\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"color\":\"#444444\"}]},{\"featureType\":\"administrative.country\",\"elementType\":\"labels.text\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"landscape\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#f2f2f2\"}]},{\"featureType\":\"poi\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"road\",\"elementType\":\"all\",\"stylers\":[{\"saturation\":-100},{\"lightness\":45}]},{\"featureType\":\"road.highway\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"road.arterial\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"transit\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"water\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#c1c1c1\"},{\"visibility\":\"on\"}]}]
        });
      }
    </script>
    ";
        // line 135
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "map"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 135,  283 => 100,  280 => 99,  260 => 80,  257 => 79,  247 => 71,  244 => 70,  235 => 67,  232 => 66,  227 => 54,  225 => 53,  222 => 52,  219 => 51,  214 => 45,  212 => 44,  209 => 43,  206 => 42,  197 => 60,  191 => 57,  188 => 56,  186 => 51,  180 => 47,  178 => 42,  172 => 38,  169 => 37,  165 => 30,  162 => 29,  159 => 28,  156 => 27,  153 => 26,  150 => 25,  147 => 24,  143 => 21,  140 => 20,  137 => 19,  134 => 18,  131 => 17,  123 => 31,  121 => 24,  115 => 22,  113 => 17,  108 => 15,  104 => 14,  101 => 13,  99 => 12,  88 => 8,  85 => 7,  82 => 6,  76 => 137,  74 => 99,  70 => 97,  68 => 79,  65 => 78,  63 => 70,  60 => 69,  58 => 66,  55 => 65,  53 => 37,  48 => 35,  45 => 34,  43 => 6,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Handmade with ♥ and Sass by jamieguerrero.com -->
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('http://yui.yahooapis.com/pure/0.6.0/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/main.css', 98) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('theme://js/modernizr.custom.js', 98) %}
        {% do assets.addJs('http://code.jquery.com/jquery-2.1.4.min.js', {'priority':97, 'group':'bottom'}) %}
        {% do assets.addJs('theme://js/classie.js', {'priority':96, 'group':'bottom'}) %}
        {% do assets.addJs('theme://js/demo1.js', {'priority':95, 'group':'bottom'}) %}
        {% do assets.addJs('https://maps.googleapis.com/maps/api/js?key=AIzaSyCteI3pxDlyIjyTNGs4Vz-fL1Ed-Sg8JXw&callback=initMap', {'priority':92, 'loading':'async defer', 'group':'map'}) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
<div id=\"content-wrapper\">
<div class=\"overlay overlay-hugeinc\">
  <button type=\"button\" class=\"overlay-close\">Close</button>
    <!-- Mobile Nav -->
    {% block mobile_navigation %}
    <nav id=\"mobile-nav\">
        {% include 'partials/navigation.html.twig' %}
    </nav>
    {% endblock %}
</div>
<!-- everything centered on mobile -->
<header class=\"header-wrapper section-light\">
  <!-- Full Nav -->
    {% block header_navigation %}
    <nav id=\"full-nav\">
        {% include 'partials/navigation.html.twig' %}
    </nav>
    {% endblock %}
  <!-- Logo + Title -->
  <img class=\"logo-img\" src=\"{{url('theme://images/ctms-logo.svg')}}\">
  <!-- Mobile Nav Button -->
  <div class=\"mobile-nav\">
    <a id=\"trigger-overlay\" class=\"menu-button\" type=\"button\" href=\"#\"><img class=\"mobile-button\" src=\"{{url('theme://images/mobile-button.svg')}}\"></a>
  </div>

</header>
{% endblock %}

{% block body %}
  {% block content %}{% endblock %}
{% endblock %}

{% block map %}
<section>
  <div class=\"section-map\">
    <div id=\"map\"></div>
    <div class=\"map-overlay\"><h1>BASED IN BRAMPTON. <br>AVAILABLE IN THE GTA.</h1></div>
  </div>
</section>
{% endblock  %}

{% block footer %}
<footer>
  <div class=\"footer-wrapper section-mid\">
    <div class=\"contact-wrapper\">
      <!-- CONTACT phone # and email link -->
      <h1>CONTACT</h1>
      <!-- CONTACT form -->
      <a href=\"mailto:chynna@ctmusicstudio.com?Subject=Hi%20there\">chynna@ctmusicstudio.com</a>
    </div>
    <form method=\"POST\" name=\"contactform\" action=\"http://formspree.io/chynna@ctmusicstudio.com\">
      <input class=\"contact-form\" type=\"text\" name=\"name\" placeholder=\"name\">
      <input class=\"contact-form\" type=\"text\" name=\"email\" placeholder=\"email\">
      <textarea class=\"contact-form contact-content\" name=\"message\" placeholder=\"message\"></textarea>
      <input class=\"contact-form contact-button\" type=\"submit\" name=\"submit\"><br>
    </form>
  </div>
</footer>
{% endblock %}
</div>
<!--content-wrapper div end-->
{% block bottom %}
    {{ assets.js('bottom') }}
    <script type=\"text/javascript\">
    \$(document).ready(function() {

      /* Every time the window is scrolled ... */
      \$(window).scroll( function(){

          /* Check the location of each desired element */
          \$('.hideme').each( function(i){

              var bottom_of_object = \$(this).offset().top + \$(this).outerHeight();
              var bottom_of_window = \$(window).scrollTop() + \$(window).height();

              /* If the object is completely visible in the window, fade it it */
              if( bottom_of_window > bottom_of_object ){

                  \$(this).animate({'opacity':'1'},500);

              }

          });
      });
    });
    </script>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 43.6627635, lng: -79.7951424},
          zoom: 14,
          scrollwheel: false,
          styles: [{\"featureType\":\"administrative\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"color\":\"#444444\"}]},{\"featureType\":\"administrative.country\",\"elementType\":\"labels.text\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"landscape\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#f2f2f2\"}]},{\"featureType\":\"poi\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"road\",\"elementType\":\"all\",\"stylers\":[{\"saturation\":-100},{\"lightness\":45}]},{\"featureType\":\"road.highway\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"simplified\"}]},{\"featureType\":\"road.arterial\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"transit\",\"elementType\":\"all\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"water\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#c1c1c1\"},{\"visibility\":\"on\"}]}]
        });
      }
    </script>
    {{ assets.js('map') }}
{% endblock %}

</body>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/ctms-grav/user/themes/ctms-theme/templates/partials/base.html.twig");
    }
}

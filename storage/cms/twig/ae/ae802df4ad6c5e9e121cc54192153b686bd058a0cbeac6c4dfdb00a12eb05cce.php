<?php

/* C:\xampp\htdocs\justusandotto/themes/juao/layouts/default.htm */
class __TwigTemplate_4453ac667ae5acb73fb8a7bf5df81779d3f79cd8a8c5a134fc5a4a6471bec909 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>

<html>
\t<head>
\t\t<title>Just Us & Otto - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\" />
\t\t<link href=\"https://vjs.zencdn.net/7.0.5/video-js.css\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
\t\t<noscript><link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/noscript.css");
        echo "\" /></noscript>
\t</head>
\t<body>
\t\t
\t\t";
        // line 15
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['socials'] = ($context["social"] ?? null)        ;
        $context['__cms_partial_params']['logo'] = ($context["logo"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "
\t\t";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 18
        echo "
\t\t";
        // line 19
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['logo'] = ($context["logo"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "

\t\t<!-- Scripts -->
\t\t\t<script src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.easeScroll.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.scrollex.min.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.scrolly.min.js");
        echo "\"></script>
\t\t\t<script src=\"https://vjs.zencdn.net/7.0.5/video.js\"></script>
\t\t\t<script src=\"http://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
\t\t\t<script src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/browser.min.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/breakpoints.min.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/util.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\justusandotto/themes/juao/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  99 => 32,  95 => 31,  91 => 30,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  67 => 20,  62 => 19,  59 => 18,  57 => 17,  54 => 16,  48 => 15,  41 => 11,  35 => 8,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>

<html>
\t<head>
\t\t<title>Just Us & Otto - {{ this.page.title }}</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\" />
\t\t<link href=\"https://vjs.zencdn.net/7.0.5/video-js.css\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
\t\t<noscript><link rel=\"stylesheet\" href=\"{{ 'assets/css/noscript.css'|theme }}\" /></noscript>
\t</head>
\t<body>
\t\t
\t\t{% partial 'site/header' socials=social logo=logo %}

\t\t{% page %}

\t\t{% partial 'site/footer' logo=logo %}


\t\t<!-- Scripts -->
\t\t\t<script src=\"{{ 'assets/js/jquery.min.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/jquery.easeScroll.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/jquery.scrollex.min.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/jquery.scrolly.min.js'|theme }}\"></script>
\t\t\t<script src=\"https://vjs.zencdn.net/7.0.5/video.js\"></script>
\t\t\t<script src=\"http://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
\t\t\t<script src=\"{{ 'assets/js/browser.min.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/breakpoints.min.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/util.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>

\t</body>
</html>", "C:\\xampp\\htdocs\\justusandotto/themes/juao/layouts/default.htm", "");
    }
}

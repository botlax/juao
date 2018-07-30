<?php

/* C:\xampp\htdocs\justusandotto/themes/juao/layouts/front.htm */
class __TwigTemplate_98d56a2274cf6ff759875789ac5b6d69c809671f082ae21517dee5c28a708008 extends Twig_Template
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
\t\t<title>Just Us & Otto</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/revslider.css");
        echo "\" />
\t\t<noscript><link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/noscript.css");
        echo "\" /></noscript>
\t\t
\t</head>
\t<body class=\"frontpage\">
\t\t\t
\t\t";
        // line 15
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['socials'] = ($context["social"] ?? null)        ;
        $context['__cms_partial_params']['logo'] = ($context["logo"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("front/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "
\t\t";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 18
        echo "\t\t\t
\t\t";
        // line 19
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['logo'] = ($context["logo"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("front/footer"        , $context['__cms_partial_params']        , true        );
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
\t\t\t<script src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/tools.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/rev.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/external.js");
        echo "\"></script>
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
        return "C:\\xampp\\htdocs\\justusandotto/themes/juao/layouts/front.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  67 => 20,  62 => 19,  59 => 18,  57 => 17,  54 => 16,  48 => 15,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>

<html>
\t<head>
\t\t<title>Just Us & Otto</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/revslider.css'|theme }}\" />
\t\t<noscript><link rel=\"stylesheet\" href=\"{{ 'assets/css/noscript.css'|theme }}\" /></noscript>
\t\t
\t</head>
\t<body class=\"frontpage\">
\t\t\t
\t\t{% partial 'front/header' socials=social logo=logo %}

\t\t{% page %}
\t\t\t
\t\t{% partial 'front/footer' logo=logo %}

\t\t<!-- Scripts -->

\t\t\t<script src=\"{{ 'assets/js/jquery.min.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/jquery.easeScroll.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/jquery.scrollex.min.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/jquery.scrolly.min.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/tools.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/rev.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/external.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/browser.min.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/breakpoints.min.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/util.js'|theme }}\"></script>
\t\t\t<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
\t</body>
</html>", "C:\\xampp\\htdocs\\justusandotto/themes/juao/layouts/front.htm", "");
    }
}

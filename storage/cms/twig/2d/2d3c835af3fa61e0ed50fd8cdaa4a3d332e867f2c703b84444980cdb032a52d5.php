<?php

/* C:\xampp\htdocs\justusandotto/themes/juao/partials/front/header.htm */
class __TwigTemplate_22f5cf005ebdd7cb1f2627cab38a533e8ffe665cd1f2b2ef81184363945f99bb extends Twig_Template
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
        echo "<div class=\"mobile-nav-container\">
\t<div class=\"mobile-nav-overlay\"></div>
\t<nav id=\"mobile-nav\">
\t\t<a class=\"close-mobile-nav\">
\t\t\t<span></span>
\t\t</a>
\t\t<ul>
\t\t\t<li><a href=\"";
        // line 8
        echo url("about");
        echo "\">About</a></li>
\t\t\t<li><a href=\"";
        // line 9
        echo url("work");
        echo "\">Work</a></li>
\t\t\t<li><a href=\"";
        // line 10
        echo url("clients");
        echo "\">Clients</a></li>
\t\t\t<li><a href=\"";
        // line 11
        echo url("careers");
        echo "\">Careers</a></li>
\t\t\t<li><a href=\"";
        // line 12
        echo url("contact");
        echo "\">Contact</a></li>
\t\t</ul>
\t</nav>
</div>
<!-- Wrapper -->
\t<div id=\"wrapper\">

\t\t<!-- Header -->
\t\t\t<header id=\"header\" class=\"clearfix\">
\t\t\t\t<a href=\"";
        // line 21
        echo url("/");
        echo "\" class=\"logo\" style=\"background-image:url('";
        echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["logo"] ?? null));
        echo "');\">Just Us &amp; Otto</a>
\t\t\t\t<nav id=\"social-nav\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 25
            echo "\t\t\t\t\t\t<li class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "platform", array()), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "platform", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t\t</ul>
\t\t\t\t</nav>

\t\t\t\t<nav id=\"main-nav\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 32
        echo url("about");
        echo "\">About</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo url("work");
        echo "\">Work</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 34
        echo url("clients");
        echo "\">Clients</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo url("careers");
        echo "\">Careers</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 36
        echo url("contact");
        echo "\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<a class=\"mobile-toggle\">
\t\t\t\t\t<span></span>
\t\t\t\t</a>
\t\t\t</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\justusandotto/themes/juao/partials/front/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  85 => 27,  72 => 25,  68 => 24,  60 => 21,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"mobile-nav-container\">
\t<div class=\"mobile-nav-overlay\"></div>
\t<nav id=\"mobile-nav\">
\t\t<a class=\"close-mobile-nav\">
\t\t\t<span></span>
\t\t</a>
\t\t<ul>
\t\t\t<li><a href=\"{{url('about')}}\">About</a></li>
\t\t\t<li><a href=\"{{url('work')}}\">Work</a></li>
\t\t\t<li><a href=\"{{url('clients')}}\">Clients</a></li>
\t\t\t<li><a href=\"{{url('careers')}}\">Careers</a></li>
\t\t\t<li><a href=\"{{url('contact')}}\">Contact</a></li>
\t\t</ul>
\t</nav>
</div>
<!-- Wrapper -->
\t<div id=\"wrapper\">

\t\t<!-- Header -->
\t\t\t<header id=\"header\" class=\"clearfix\">
\t\t\t\t<a href=\"{{url('/')}}\" class=\"logo\" style=\"background-image:url('{{ logo | media }}');\">Just Us &amp; Otto</a>
\t\t\t\t<nav id=\"social-nav\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for social in socials %}
\t\t\t\t\t\t<li class=\"{{ social.platform }}\"><a href=\"{{ social.link }}\">{{ social.platform }}</a></li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</nav>

\t\t\t\t<nav id=\"main-nav\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{{url('about')}}\">About</a></li>
\t\t\t\t\t\t<li><a href=\"{{url('work')}}\">Work</a></li>
\t\t\t\t\t\t<li><a href=\"{{url('clients')}}\">Clients</a></li>
\t\t\t\t\t\t<li><a href=\"{{url('careers')}}\">Careers</a></li>
\t\t\t\t\t\t<li><a href=\"{{url('contact')}}\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<a class=\"mobile-toggle\">
\t\t\t\t\t<span></span>
\t\t\t\t</a>
\t\t\t</header>", "C:\\xampp\\htdocs\\justusandotto/themes/juao/partials/front/header.htm", "");
    }
}

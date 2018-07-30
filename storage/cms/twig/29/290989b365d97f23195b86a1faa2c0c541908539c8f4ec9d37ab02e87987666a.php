<?php

/* C:\xampp\htdocs\justusandotto/themes/juao/pages/home.htm */
class __TwigTemplate_9bebf34211d9bb41d9bd0e8cefbb59808231e27fc11d57973443f0e6cf4525ad extends Twig_Template
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
        echo "<!-- Intro -->
\t<div id=\"banner\" style=\"background-image:url('";
        // line 2
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["front"] ?? null), "photo", array()));
        echo "');\">
\t\t<h1>We are ready to make noise now</h1>
\t\t<a href=\"#\" class=\"banner-logo\" style=\"background-image:url('";
        // line 4
        echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["logo"] ?? null));
        echo "');\">Just Us &amp; Otto</a>
\t</div>

<!-- Main -->
\t<div id=\"main\">
\t\t<div class=\"mouse-scroll-wrapper\">
\t\t\t<a href=\"#intro\" class=\"mouse-scroll scrolly\"></a>
\t\t</div>

\t\t<div id=\"nav-wrapper\">
\t\t\t<header id=\"header-main\" class=\"clearfix\">
\t\t\t\t<a href=\"#\" class=\"logo\" style=\"background-image:url('";
        // line 15
        echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["logo"] ?? null));
        echo "');\">Just Us &amp; Otto</a>
\t\t\t\t<nav id=\"social-nav2\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 19
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
        // line 21
        echo "\t\t\t\t\t</ul>
\t\t\t\t</nav>

\t\t\t\t<nav id=\"main-nav2\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 26
        echo url("about");
        echo "\">About</a></li>
            \t\t\t<li><a href=\"";
        // line 27
        echo url("work");
        echo "\">Work</a></li>
            \t\t\t<li><a href=\"";
        // line 28
        echo url("clients");
        echo "\">Clients</a></li>
            \t\t\t<li><a href=\"";
        // line 29
        echo url("careers");
        echo "\">Careers</a></li>
            \t\t\t<li><a href=\"";
        // line 30
        echo url("contact");
        echo "\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<a class=\"mobile-toggle\">
\t\t\t\t\t<span></span>
\t\t\t\t</a>
\t\t\t</header>
\t\t</div>

\t\t<section id=\"intro\" class=\"clearfix\">
\t\t\t<section class=\"main-intro\" style=\"background-image:url('";
        // line 40
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["principle"] ?? null), "photo", array()));
        echo "');\">
\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h2>OUR MISSION</h2>
\t\t\t\t\t\t<h3 class=\"slash\">CREATING FANS FOR BRANDS</h3>
\t\t\t\t\t</header>

\t\t\t\t\t<footer>
\t\t\t\t\t\t<a class=\"button\" href=\"";
        // line 48
        echo url("about");
        echo "\" role=\"button\"> More About us </a>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"side-intro\">
\t\t\t\t<div class=\"rev_wrapper\">
\t\t\t\t\t<div id=\"rev_slider_4_1\" class=\"rev_slider fullscreenbanner\" style=\"display:none;\">
\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["qWorks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 58
            echo "\t\t\t\t\t\t\t<li data-transition=\"3dcurtain-vertical\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_replace_filter($this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["work"], "poster", array())), array(" " => "%20")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "title", array()), "html", null, true);
            echo "\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" />
\t\t\t\t\t\t\t\t<div data-splitout=\"none\" data-voffset=\"-30\" data-speed=\"300\" class=\"tp-caption black sfr tp-resizeme\" style=\"z-index: 5;white-space: nowrap;\" data-start=\"500\" data-endspeed=\"300\" data-endelementdelay=\"0.1\" data-elementdelay=\"0.1\" data-y=\"bottom\" data-x=\"25\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\">
\t\t\t\t\t\t\t\t\t<h2 class=\"home-block-title\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "title", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t<h3 class=\"inverted slash\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "tagline", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t<a class=\"button\" href=\"";
            // line 63
            echo url("/work");
            echo "\" role=\"button\"> See All Projects </a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t";
        // line 72
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["uWorks"] ?? null), "toArray", array(), "method"))) {
            // line 73
            echo "\t\t\t<section class=\"side-intro\">
\t\t\t\t<div class=\"rev_wrapper\">
\t\t\t\t\t<div id=\"rev_slider_5_1\" class=\"rev_slider fullscreenbanner\" style=\"display:none;\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["uWorks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
                // line 78
                echo "\t\t\t\t\t\t\t<li data-transition=\"3dcurtain-vertical\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 79
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["work"], "poster", array()));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "title", array()), "html", null, true);
                echo "\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" />
\t\t\t\t\t\t\t\t<div data-splitout=\"none\" data-voffset=\"-30\" data-speed=\"300\" class=\"tp-caption black sfr tp-resizeme\" style=\"z-index: 5;white-space: nowrap;\" data-start=\"500\" data-endspeed=\"300\" data-endelementdelay=\"0.1\" data-elementdelay=\"0.1\" data-y=\"bottom\" data-x=\"25\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\">
\t\t\t\t\t\t\t\t\t<h2 class=\"home-block-title\">";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "title", array()), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t\t<h3 class=\"inverted slash\">";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "tagline", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t<a class=\"button\" href=\"";
                // line 83
                echo url("/work");
                echo "\" role=\"button\"> See All Projects </a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</section>
\t\t\t";
        } else {
            // line 94
            echo "\t\t\t<section class=\"side-intro static\" style=\"background-image:url('";
            echo $this->extensions['System\Twig\Extension']->mediaFilter("contact-1.jpg");
            echo "');\">
\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h2>CONNECT WITH US</h2>
\t\t\t\t\t\t<h3 class=\"slash\">WE'LL BE GLAD TO HELP YOU</h3>
\t\t\t\t\t</header>

\t\t\t\t\t<footer>
\t\t\t\t\t\t<a class=\"button\" href=\"";
            // line 102
            echo url("contact");
            echo "\" role=\"button\"> Contact Us </a>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t";
        }
        // line 107
        echo "\t</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 107,  227 => 102,  215 => 94,  206 => 87,  196 => 83,  192 => 82,  188 => 81,  181 => 79,  178 => 78,  174 => 77,  168 => 73,  166 => 72,  159 => 67,  149 => 63,  145 => 62,  141 => 61,  134 => 59,  131 => 58,  127 => 57,  115 => 48,  104 => 40,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  68 => 21,  55 => 19,  51 => 18,  45 => 15,  31 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Intro -->
\t<div id=\"banner\" style=\"background-image:url('{{ front.photo | media }}');\">
\t\t<h1>We are ready to make noise now</h1>
\t\t<a href=\"#\" class=\"banner-logo\" style=\"background-image:url('{{ logo | media }}');\">Just Us &amp; Otto</a>
\t</div>

<!-- Main -->
\t<div id=\"main\">
\t\t<div class=\"mouse-scroll-wrapper\">
\t\t\t<a href=\"#intro\" class=\"mouse-scroll scrolly\"></a>
\t\t</div>

\t\t<div id=\"nav-wrapper\">
\t\t\t<header id=\"header-main\" class=\"clearfix\">
\t\t\t\t<a href=\"#\" class=\"logo\" style=\"background-image:url('{{ logo | media }}');\">Just Us &amp; Otto</a>
\t\t\t\t<nav id=\"social-nav2\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for social in socials %}
\t\t\t\t\t\t<li class=\"{{ social.platform }}\"><a href=\"{{ social.link }}\">{{ social.platform }}</a></li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</nav>

\t\t\t\t<nav id=\"main-nav2\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{{url('about')}}\">About</a></li>
            \t\t\t<li><a href=\"{{url('work')}}\">Work</a></li>
            \t\t\t<li><a href=\"{{url('clients')}}\">Clients</a></li>
            \t\t\t<li><a href=\"{{url('careers')}}\">Careers</a></li>
            \t\t\t<li><a href=\"{{url('contact')}}\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<a class=\"mobile-toggle\">
\t\t\t\t\t<span></span>
\t\t\t\t</a>
\t\t\t</header>
\t\t</div>

\t\t<section id=\"intro\" class=\"clearfix\">
\t\t\t<section class=\"main-intro\" style=\"background-image:url('{{ principle.photo | media }}');\">
\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h2>OUR MISSION</h2>
\t\t\t\t\t\t<h3 class=\"slash\">CREATING FANS FOR BRANDS</h3>
\t\t\t\t\t</header>

\t\t\t\t\t<footer>
\t\t\t\t\t\t<a class=\"button\" href=\"{{ url('about') }}\" role=\"button\"> More About us </a>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"side-intro\">
\t\t\t\t<div class=\"rev_wrapper\">
\t\t\t\t\t<div id=\"rev_slider_4_1\" class=\"rev_slider fullscreenbanner\" style=\"display:none;\">
\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t{% for work in qWorks %}
\t\t\t\t\t\t\t<li data-transition=\"3dcurtain-vertical\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
\t\t\t\t\t\t\t\t<img src=\"{{ work.poster | media | replace({ (' '): '%20' }) }}\" alt=\"{{ work.title }}\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" />
\t\t\t\t\t\t\t\t<div data-splitout=\"none\" data-voffset=\"-30\" data-speed=\"300\" class=\"tp-caption black sfr tp-resizeme\" style=\"z-index: 5;white-space: nowrap;\" data-start=\"500\" data-endspeed=\"300\" data-endelementdelay=\"0.1\" data-elementdelay=\"0.1\" data-y=\"bottom\" data-x=\"25\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\">
\t\t\t\t\t\t\t\t\t<h2 class=\"home-block-title\">{{ work.title }}</h2>
\t\t\t\t\t\t\t\t\t<h3 class=\"inverted slash\">{{ work.tagline }}</h3>
\t\t\t\t\t\t\t\t\t<a class=\"button\" href=\"{{ url('/work') }}\" role=\"button\"> See All Projects </a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t{% if uWorks.toArray() is not empty %}
\t\t\t<section class=\"side-intro\">
\t\t\t\t<div class=\"rev_wrapper\">
\t\t\t\t\t<div id=\"rev_slider_5_1\" class=\"rev_slider fullscreenbanner\" style=\"display:none;\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for work in uWorks %}
\t\t\t\t\t\t\t<li data-transition=\"3dcurtain-vertical\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
\t\t\t\t\t\t\t\t<img src=\"{{ work.poster | media }}\" alt=\"{{ work.title }}\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" />
\t\t\t\t\t\t\t\t<div data-splitout=\"none\" data-voffset=\"-30\" data-speed=\"300\" class=\"tp-caption black sfr tp-resizeme\" style=\"z-index: 5;white-space: nowrap;\" data-start=\"500\" data-endspeed=\"300\" data-endelementdelay=\"0.1\" data-elementdelay=\"0.1\" data-y=\"bottom\" data-x=\"25\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\">
\t\t\t\t\t\t\t\t\t<h2 class=\"home-block-title\">{{ work.title }}</h2>
\t\t\t\t\t\t\t\t\t<h3 class=\"inverted slash\">{{ work.tagline }}</h3>
\t\t\t\t\t\t\t\t\t<a class=\"button\" href=\"{{ url('/work') }}\" role=\"button\"> See All Projects </a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</section>
\t\t\t{% else %}
\t\t\t<section class=\"side-intro static\" style=\"background-image:url('{{ 'contact-1.jpg' | media }}');\">
\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h2>CONNECT WITH US</h2>
\t\t\t\t\t\t<h3 class=\"slash\">WE'LL BE GLAD TO HELP YOU</h3>
\t\t\t\t\t</header>

\t\t\t\t\t<footer>
\t\t\t\t\t\t<a class=\"button\" href=\"{{ url('contact') }}\" role=\"button\"> Contact Us </a>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t{% endif %}
\t</div>", "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/home.htm", "");
    }
}

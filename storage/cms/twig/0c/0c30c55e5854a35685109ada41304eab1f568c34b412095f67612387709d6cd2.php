<?php

/* C:\xampp\htdocs\justusandotto/themes/juao/pages/careers.htm */
class __TwigTemplate_df7a420d834ab7d2c440a2a1434016832a19379ce80eb514307478b6261f7688 extends Twig_Template
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
        echo "<div class=\"small-title-banner careers-banner\" style=\"background-image: url('";
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["career"] ?? null), "photo", array()));
        echo "')\">
\t\t\t\t
\t<h1>Discover<br>Just us &amp; Otto</h1>

</div>

<div id=\"main\">
\t<div class=\"general-intro\">
\t\t<div class=\"row\">
\t\t\t<article class=\"col-8 col-12-small\">
\t\t\t\t<p>An environment where flat hierarchies promote “doing” and taking initiative. An inspirational mix of cultures, disciplines and nationalities. Lots of room for lateral thinking and co-creation. Hands-on international experience and transcontinental office-hopping. A driven attitude born of boundless enthusiasm. A place where the team is the most valued asset.</p>

\t\t\t\t<h3>So how about you?</h3>
\t\t\t\t<p>We’re looking for “real” people. Show us your true self. Don’t waste your time rehearsing standard answers. Dare to be authentic.</p>
\t\t\t</article>
\t\t\t<aside class=\"col-4\">
\t\t\t</aside>
\t\t</div>
\t</div>

\t<section id=\"vacancies\">
\t\t<header>
\t\t\t<h2>Vacancies</h2>
\t\t</header>
\t\t<div class=\"row\">
\t\t\t<section class=\"col-8 col-12-small\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Job Title</th>
\t\t\t\t\t\t\t<th>Career Level</th>
\t\t\t\t\t\t\t<th>Field of Responsibility</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacancies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vacant"]) {
            // line 37
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacant"], "title", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacant"], "level", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacant"], "field", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vacant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</section>
\t\t\t<aside class=\"col-4 col-12-small contact-details\">
\t\t\t\t<header>
\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t</header>
\t\t\t\t<h3>Just us &amp; Otto Marketing Services W.L.L.</h3>
\t\t\t\t<p class=\"address\">
\t\t\t\t\t";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "address", array());
        echo "
\t\t\t\t\t<span class=\"tel\">Tel: ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "tel", array()), "html", null, true);
        echo "</span>
\t\t\t\t</p>

\t\t\t\t<a class=\"button\" href=\"mailto:";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", array()), "html", null, true);
        echo "\" role=\"button\"> Send Mail </a>
\t\t\t</aside>
\t\t</div>
\t</section>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/careers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 56,  101 => 53,  97 => 52,  86 => 43,  77 => 40,  73 => 39,  69 => 38,  66 => 37,  62 => 36,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"small-title-banner careers-banner\" style=\"background-image: url('{{career.photo | media}}')\">
\t\t\t\t
\t<h1>Discover<br>Just us &amp; Otto</h1>

</div>

<div id=\"main\">
\t<div class=\"general-intro\">
\t\t<div class=\"row\">
\t\t\t<article class=\"col-8 col-12-small\">
\t\t\t\t<p>An environment where flat hierarchies promote “doing” and taking initiative. An inspirational mix of cultures, disciplines and nationalities. Lots of room for lateral thinking and co-creation. Hands-on international experience and transcontinental office-hopping. A driven attitude born of boundless enthusiasm. A place where the team is the most valued asset.</p>

\t\t\t\t<h3>So how about you?</h3>
\t\t\t\t<p>We’re looking for “real” people. Show us your true self. Don’t waste your time rehearsing standard answers. Dare to be authentic.</p>
\t\t\t</article>
\t\t\t<aside class=\"col-4\">
\t\t\t</aside>
\t\t</div>
\t</div>

\t<section id=\"vacancies\">
\t\t<header>
\t\t\t<h2>Vacancies</h2>
\t\t</header>
\t\t<div class=\"row\">
\t\t\t<section class=\"col-8 col-12-small\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Job Title</th>
\t\t\t\t\t\t\t<th>Career Level</th>
\t\t\t\t\t\t\t<th>Field of Responsibility</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for vacant in vacancies %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{vacant.title}}</td>
\t\t\t\t\t\t\t<td>{{vacant.level}}</td>
\t\t\t\t\t\t\t<td>{{ vacant.field }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</section>
\t\t\t<aside class=\"col-4 col-12-small contact-details\">
\t\t\t\t<header>
\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t</header>
\t\t\t\t<h3>Just us &amp; Otto Marketing Services W.L.L.</h3>
\t\t\t\t<p class=\"address\">
\t\t\t\t\t{{ contact.address | raw }}
\t\t\t\t\t<span class=\"tel\">Tel: {{ contact.tel }}</span>
\t\t\t\t</p>

\t\t\t\t<a class=\"button\" href=\"mailto:{{ contact.email }}\" role=\"button\"> Send Mail </a>
\t\t\t</aside>
\t\t</div>
\t</section>
</div>", "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/careers.htm", "");
    }
}

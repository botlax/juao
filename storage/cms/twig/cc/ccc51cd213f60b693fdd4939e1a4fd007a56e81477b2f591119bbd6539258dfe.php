<?php

/* C:\xampp\htdocs\justusandotto/themes/juao/pages/clients.htm */
class __TwigTemplate_21301fae9f0888ad1e579418f74e9b1b142e5c646fb7bb43ebbf27c8f3c2dc0c extends Twig_Template
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
        echo "<div id=\"main\">
\t<section id=\"clients\">
\t\t<article class=\"header-article\">
\t\t\t
\t\t\t<header>
\t\t\t\t<h2>Clients</h2>
\t\t\t</header>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-8 col-12-small\">
\t\t\t\t\t<p>Just us &amp; Otto prides itself on working with some of Qatar’s most innovative clientele. Our client base includes a wide range of local &amp; multi-national corporations, governement community organizations and various social enterprises.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</article>

\t\t<section class=\"row clients-wrapper\">
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 18
            echo "\t\t\t<article class=\"col-3 col-4-large col-6-medium col-12-small\">
\t\t\t\t<img src=\"";
            // line 19
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["client"], "logo", array()));
            echo "\" alt=\"\">
\t\t\t\t<section>
\t\t\t\t\t<div class=\"white-overlay\"></div>
\t\t\t\t\t<header>
\t\t\t\t\t\t<h2>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "company", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t</header>
\t\t\t\t\t<ul class=\"projects\">
\t\t\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "projects", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 27
                echo "\t\t\t\t\t\t<li class=\"slash\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "work", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t\t</ul>
\t\t\t\t</section>
\t\t\t</article>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
\t\t</section>
\t</section>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/clients.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  74 => 29,  65 => 27,  61 => 26,  55 => 23,  48 => 19,  45 => 18,  41 => 17,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"main\">
\t<section id=\"clients\">
\t\t<article class=\"header-article\">
\t\t\t
\t\t\t<header>
\t\t\t\t<h2>Clients</h2>
\t\t\t</header>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-8 col-12-small\">
\t\t\t\t\t<p>Just us &amp; Otto prides itself on working with some of Qatar’s most innovative clientele. Our client base includes a wide range of local &amp; multi-national corporations, governement community organizations and various social enterprises.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</article>

\t\t<section class=\"row clients-wrapper\">
\t\t\t{% for client in clients %}
\t\t\t<article class=\"col-3 col-4-large col-6-medium col-12-small\">
\t\t\t\t<img src=\"{{ client.logo | media }}\" alt=\"\">
\t\t\t\t<section>
\t\t\t\t\t<div class=\"white-overlay\"></div>
\t\t\t\t\t<header>
\t\t\t\t\t\t<h2>{{ client.company }}</h2>
\t\t\t\t\t</header>
\t\t\t\t\t<ul class=\"projects\">
\t\t\t\t\t\t{% for project in client.projects %}
\t\t\t\t\t\t<li class=\"slash\">{{ project.work }}</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</section>
\t\t\t</article>
\t\t\t{% endfor %}

\t\t</section>
\t</section>
</div>", "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/clients.htm", "");
    }
}

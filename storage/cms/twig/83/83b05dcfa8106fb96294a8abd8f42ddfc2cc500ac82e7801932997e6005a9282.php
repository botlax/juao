<?php

/* C:\xampp\htdocs\justusandotto/themes/juao/pages/about.htm */
class __TwigTemplate_fe49ea69d70c6998a2f0932f6253ab6ad3e654ce7db3415f680c8b788cd181d6 extends Twig_Template
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
\t<section id=\"principles\" class=\"list-article\" style=\"background-image: url('";
        // line 2
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["principle"] ?? null), "photo", array()));
        echo "')\">
\t\t<div class=\"content-wrapper\">
\t\t\t<header>
\t\t\t\t<h1>Our Principles</h1>
\t\t\t</header>
\t\t\t<ul>
\t\t\t\t<li>We Embrace Diversity</li>
\t\t\t\t<li>We Explore the Unknown</li>
\t\t\t\t<li>We Captivate Audiences</li>
\t\t\t</ul>
\t\t</div>

\t\t<a href=\"#who-we-are\" class=\"mouse-scroll scrolly\"></a>
\t</section>

\t<section id=\"who-we-are\" class=\"general-list-article\">
\t\t<header>
\t\t\t<h2>Who We Are</h2>
\t\t<div class=\"row\">
\t\t\t<section class=\"col-6 col-12-small\">
\t\t\t\t<header>
\t\t\t\t\t<h3 class=\"slash\">Your creative partner for emotional experiences</h3>
\t\t\t\t</header>
\t\t\t\t<p>Just us &amp; Otto unleashes creativity and connects people to brands at every step. Breaking away from our affiliated company to form our own identity meant making some tough decisions like, what do we stand for? In a digital age, the spread of information is vast, and overwhelming. We have an all-inclusive access, but how do we stand out?</p>
\t\t\t\t<p>Well, we’re for everyone; we don’t have time to pretend. For us, authenticity is key. Time-pressured consumers and businesses need clear, concise and relevant information. We dream big, and develop pioneering ideas. We are driven by goals, and want to see our clients grow. To be noticed, you have to be different. You’ll be working with a multi-disciplinary team, each one of us explorers. We will convert our ideas into ingenious expressions exclusively for your brand.</p>
\t\t\t</section>
\t\t\t<section class=\"col-6 col-12-small\">
\t\t\t\t<header>
\t\t\t\t\t<h3 class=\"slash\">Just us &amp; Otto, Qatar</h3>
\t\t\t\t</header>
\t\t\t\t<p>In Qatar, we’re part of the fastest growing economy in the Middle East. The country has a clear national vision and an impressive events calendar that includes the 2022 Football World Cup and around 40 international sports competitions. Honesty and credibility are our watchwords. Only relationships built on solid foundations can excel. We can understand your brand and win you fans with a clear and concise image.</p>
\t\t\t</section>
\t\t\t<section class=\"col-6 col-12-small\">
\t\t\t\t<header>
\t\t\t\t\t<h3 class=\"slash\">Transforming consumers into Fans</h3>
\t\t\t\t</header>
\t\t\t\t<p>We brew together every aspect of creative, physical and digital resources into engaging brand experiences. By developing interactive scenarios, our audiences are drawn into the brand’s magic, complete with its values and personality. Ultimately, clients feel as though they have engaged with a truly visionary and exciting company. We will provide solid, creative and innovative solutions to captivate and create positive changes, while realizing brand dreams.</p>
\t\t\t</section>
\t\t\t
\t\t</div>
\t</section>

\t<section id=\"facts\" class=\"list-article\" style=\"background-image: url('";
        // line 44
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["facts"] ?? null), "photo", array()));
        echo "')\">
\t\t<div class=\"content-wrapper\">
\t\t\t<header>
\t\t\t\t<h2>Quick Facts</h2>
\t\t\t</header>
\t\t\t<ul>
\t\t\t\t<li>Founded in 2011</li>
\t\t\t\t<li>Rebranded in 2017</li>
\t\t\t\t<li>15 Brand Experience Professionals</li>
\t\t\t\t<li>40 Local &amp; Multi-national Clients</li>
\t\t\t</ul>
\t\t</div>
\t</section>

\t<section id=\"team\" class=\"list-article parallax\" style=\"background-image: url('";
        // line 58
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "photo", array()));
        echo "')\">
\t\t<div class=\"content-wrapper\">
\t\t\t<header>
\t\t\t\t<h2>The Team</h2>
\t\t\t</header>
\t\t\t<section>
\t\t\t\t<header>
\t\t\t\t\t<h3 class=\"slash\">MANY TALENTS AS A UNIFIED TEAM</h3>
\t\t\t\t</header>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-6 col-8-medium col-12-small\">
\t\t\t\t\t\t<p>Just us &amp; Otto is an agency of multidisciplinary talents working as a unified team under the leadership of ideas. We translate brand values into brand experiences and build long-term brand-consumer relationships or in simple words: We create fans for brands.</p>
\t\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</section>

\t<section id=\"management\" class=\"general-article\">
\t\t<section>
\t\t\t<header>
\t\t\t\t<h2>Management</h2>
\t\t\t</header>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["management"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manager"]) {
            // line 82
            echo "\t\t\t\t<section class=\"col-4 col-6-large col-12-small\">
\t\t\t\t\t<img src=\"";
            // line 83
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["manager"], "photo", array()));
            echo "\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h3>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "name", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<h4 class=\"slash\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "position", array()), "html", null, true);
            echo "</h4>
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"white-overlay\"></div>
\t\t\t\t\t<article>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h3>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "name", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t\t\t<p>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "bio", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</section>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manager'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t\t</div>
\t\t</section>
\t</section>

\t<section id=\"awards\" class=\"general-article\">
\t\t<section>
\t\t\t<header>
\t\t\t\t<h2>Our Awards</h2>
\t\t\t</header>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["awards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["award"]) {
            // line 111
            echo "\t\t\t\t<section class=\"col-4 col-6-medium col-12-small\" style=\"background-image:url('";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["award"], "photo", array()));
            echo "')\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h3>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["award"], "award", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t</header>
\t\t\t\t</section>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['award'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t</div>
\t\t</section>
\t</section>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 117,  178 => 113,  172 => 111,  168 => 110,  156 => 100,  145 => 95,  139 => 92,  130 => 86,  126 => 85,  121 => 83,  118 => 82,  114 => 81,  88 => 58,  71 => 44,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"main\">
\t<section id=\"principles\" class=\"list-article\" style=\"background-image: url('{{ principle.photo | media }}')\">
\t\t<div class=\"content-wrapper\">
\t\t\t<header>
\t\t\t\t<h1>Our Principles</h1>
\t\t\t</header>
\t\t\t<ul>
\t\t\t\t<li>We Embrace Diversity</li>
\t\t\t\t<li>We Explore the Unknown</li>
\t\t\t\t<li>We Captivate Audiences</li>
\t\t\t</ul>
\t\t</div>

\t\t<a href=\"#who-we-are\" class=\"mouse-scroll scrolly\"></a>
\t</section>

\t<section id=\"who-we-are\" class=\"general-list-article\">
\t\t<header>
\t\t\t<h2>Who We Are</h2>
\t\t<div class=\"row\">
\t\t\t<section class=\"col-6 col-12-small\">
\t\t\t\t<header>
\t\t\t\t\t<h3 class=\"slash\">Your creative partner for emotional experiences</h3>
\t\t\t\t</header>
\t\t\t\t<p>Just us &amp; Otto unleashes creativity and connects people to brands at every step. Breaking away from our affiliated company to form our own identity meant making some tough decisions like, what do we stand for? In a digital age, the spread of information is vast, and overwhelming. We have an all-inclusive access, but how do we stand out?</p>
\t\t\t\t<p>Well, we’re for everyone; we don’t have time to pretend. For us, authenticity is key. Time-pressured consumers and businesses need clear, concise and relevant information. We dream big, and develop pioneering ideas. We are driven by goals, and want to see our clients grow. To be noticed, you have to be different. You’ll be working with a multi-disciplinary team, each one of us explorers. We will convert our ideas into ingenious expressions exclusively for your brand.</p>
\t\t\t</section>
\t\t\t<section class=\"col-6 col-12-small\">
\t\t\t\t<header>
\t\t\t\t\t<h3 class=\"slash\">Just us &amp; Otto, Qatar</h3>
\t\t\t\t</header>
\t\t\t\t<p>In Qatar, we’re part of the fastest growing economy in the Middle East. The country has a clear national vision and an impressive events calendar that includes the 2022 Football World Cup and around 40 international sports competitions. Honesty and credibility are our watchwords. Only relationships built on solid foundations can excel. We can understand your brand and win you fans with a clear and concise image.</p>
\t\t\t</section>
\t\t\t<section class=\"col-6 col-12-small\">
\t\t\t\t<header>
\t\t\t\t\t<h3 class=\"slash\">Transforming consumers into Fans</h3>
\t\t\t\t</header>
\t\t\t\t<p>We brew together every aspect of creative, physical and digital resources into engaging brand experiences. By developing interactive scenarios, our audiences are drawn into the brand’s magic, complete with its values and personality. Ultimately, clients feel as though they have engaged with a truly visionary and exciting company. We will provide solid, creative and innovative solutions to captivate and create positive changes, while realizing brand dreams.</p>
\t\t\t</section>
\t\t\t
\t\t</div>
\t</section>

\t<section id=\"facts\" class=\"list-article\" style=\"background-image: url('{{ facts.photo | media }}')\">
\t\t<div class=\"content-wrapper\">
\t\t\t<header>
\t\t\t\t<h2>Quick Facts</h2>
\t\t\t</header>
\t\t\t<ul>
\t\t\t\t<li>Founded in 2011</li>
\t\t\t\t<li>Rebranded in 2017</li>
\t\t\t\t<li>15 Brand Experience Professionals</li>
\t\t\t\t<li>40 Local &amp; Multi-national Clients</li>
\t\t\t</ul>
\t\t</div>
\t</section>

\t<section id=\"team\" class=\"list-article parallax\" style=\"background-image: url('{{ team.photo | media }}')\">
\t\t<div class=\"content-wrapper\">
\t\t\t<header>
\t\t\t\t<h2>The Team</h2>
\t\t\t</header>
\t\t\t<section>
\t\t\t\t<header>
\t\t\t\t\t<h3 class=\"slash\">MANY TALENTS AS A UNIFIED TEAM</h3>
\t\t\t\t</header>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-6 col-8-medium col-12-small\">
\t\t\t\t\t\t<p>Just us &amp; Otto is an agency of multidisciplinary talents working as a unified team under the leadership of ideas. We translate brand values into brand experiences and build long-term brand-consumer relationships or in simple words: We create fans for brands.</p>
\t\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</section>

\t<section id=\"management\" class=\"general-article\">
\t\t<section>
\t\t\t<header>
\t\t\t\t<h2>Management</h2>
\t\t\t</header>
\t\t\t<div class=\"row\">
\t\t\t\t{% for manager in management %}
\t\t\t\t<section class=\"col-4 col-6-large col-12-small\">
\t\t\t\t\t<img src=\"{{ manager.photo | media }}\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h3>{{ manager.name }}</h3>
\t\t\t\t\t\t<h4 class=\"slash\">{{ manager.position }}</h4>
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"white-overlay\"></div>
\t\t\t\t\t<article>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h3>{{ manager.name }}</h3>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t\t\t<p>{{ manager.bio }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</section>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</section>
\t</section>

\t<section id=\"awards\" class=\"general-article\">
\t\t<section>
\t\t\t<header>
\t\t\t\t<h2>Our Awards</h2>
\t\t\t</header>
\t\t\t<div class=\"row\">
\t\t\t\t{% for award in awards %}
\t\t\t\t<section class=\"col-4 col-6-medium col-12-small\" style=\"background-image:url('{{award.photo | media}}')\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h3>{{award.award}}</h3>
\t\t\t\t\t</header>
\t\t\t\t</section>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</section>
\t</section>
</div>", "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/about.htm", "");
    }
}

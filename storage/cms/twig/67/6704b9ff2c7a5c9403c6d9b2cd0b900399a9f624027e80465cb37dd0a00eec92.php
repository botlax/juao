<?php

/* C:\xampp\htdocs\justusandotto/themes/juao/pages/work.htm */
class __TwigTemplate_8e3b67a3b8ff1077c5f75789011d4bbd3f1df481c2104cea5648dba895cb04b6 extends Twig_Template
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
\t<section id=\"work\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["works"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 4
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["work"], "mode", array()) == "video")) {
                // line 5
                echo "\t\t<article>
\t\t\t<video id=\"project-video";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", array()), "html", null, true);
                echo "\" class=\"video-js\" controls preload=\"auto\" poster=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["work"], "poster", array()));
                echo "\" data-setup=\"{}\">
\t\t\t    <source src=\"";
                // line 7
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["work"], "video", array()));
                echo "\" type='video/mp4'>
\t\t\t    <p class=\"vjs-no-js\">
\t\t\t      To view this video please enable JavaScript, and consider upgrading to a web browser that
\t\t\t      <a href=\"http://videojs.com/html5-video-support/\" target=\"_blank\">supports HTML5 video</a>
\t\t\t    </p>
\t\t\t</video>
\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<header>
\t\t\t\t\t<h2>";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["work"], "title", array());
                echo "</h2>
\t\t\t\t\t<h3 class=\"slash\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["work"], "tagline", array());
                echo "</h3>
\t\t\t\t</header>
\t\t\t\t<p>";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["work"], "description", array());
                echo "</p>
\t\t\t\t<footer>
\t\t\t\t\t<p><span>Client: </span>";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["work"], "client", array());
                echo "</p>
\t\t\t\t</footer>
\t\t\t</div>
\t\t\t<button class=\"vjs-close\"><i class=\"fa fa-close\"></i></button>
\t\t</article>
\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 25
$context["work"], "mode", array()) == "slide")) {
                // line 26
                echo "\t\t<article>
\t\t\t<div class=\"project-slider\">
\t\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["work"], "photos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                    // line 29
                    echo "\t\t\t    <div><img src=\"";
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["photo"], "photo", array()));
                    echo "\"></div>
\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "\t\t\t</div>
\t\t\t<div class=\"project-poster\" style=\"background-image: url('";
                // line 32
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["work"], "poster", array()));
                echo "');\">
\t\t\t\t<button class=\"project-play\"><i class=\"fa fa-play\"></i></button>
\t\t\t</div>
\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<header>
\t\t\t\t\t<h2>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "title", array()), "html", null, true);
                echo "</h2>
\t\t\t\t\t<h3 class=\"slash\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "tagline", array()), "html", null, true);
                echo "</h3>
\t\t\t\t</header>
\t\t\t\t<p>";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["work"], "description", array());
                echo "</p>
\t\t\t\t<footer>
\t\t\t\t\t<p><span>Client: </span>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "client", array()), "html", null, true);
                echo "</p>
\t\t\t\t</footer>
\t\t\t</div>
\t\t\t<button class=\"project-close\"><i class=\"fa fa-close\"></i></button>
\t\t</article>
\t\t";
            } else {
                // line 48
                echo "\t\t<article>
\t\t\t<div class=\"project-image\" style=\"background-image: url('";
                // line 49
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["work"], "poster", array()));
                echo "');\"></div>
\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<header>
\t\t\t\t\t<h2>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "title", array()), "html", null, true);
                echo "</h2>
\t\t\t\t\t<h3 class=\"slash\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "tagline", array()), "html", null, true);
                echo "</h3>
\t\t\t\t</header>
\t\t\t\t<p>";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["work"], "description", array());
                echo "</p>
\t\t\t\t<footer>
\t\t\t\t\t<p><span>Client: </span>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "client", array()), "html", null, true);
                echo "</p>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</article>
\t\t";
            }
            // line 62
            echo "\t\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t</section>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/work.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 64,  160 => 62,  152 => 57,  147 => 55,  142 => 53,  138 => 52,  132 => 49,  129 => 48,  120 => 42,  115 => 40,  110 => 38,  106 => 37,  98 => 32,  95 => 31,  86 => 29,  82 => 28,  78 => 26,  76 => 25,  68 => 20,  63 => 18,  58 => 16,  54 => 15,  43 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"main\">
\t<section id=\"work\">
\t{% for work in works %}
\t\t{% if work.mode == 'video' %}
\t\t<article>
\t\t\t<video id=\"project-video{{work.id}}\" class=\"video-js\" controls preload=\"auto\" poster=\"{{work.poster | media}}\" data-setup=\"{}\">
\t\t\t    <source src=\"{{work.video | media}}\" type='video/mp4'>
\t\t\t    <p class=\"vjs-no-js\">
\t\t\t      To view this video please enable JavaScript, and consider upgrading to a web browser that
\t\t\t      <a href=\"http://videojs.com/html5-video-support/\" target=\"_blank\">supports HTML5 video</a>
\t\t\t    </p>
\t\t\t</video>
\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<header>
\t\t\t\t\t<h2>{{work.title | raw}}</h2>
\t\t\t\t\t<h3 class=\"slash\">{{work.tagline | raw}}</h3>
\t\t\t\t</header>
\t\t\t\t<p>{{work.description | raw}}</p>
\t\t\t\t<footer>
\t\t\t\t\t<p><span>Client: </span>{{work.client | raw}}</p>
\t\t\t\t</footer>
\t\t\t</div>
\t\t\t<button class=\"vjs-close\"><i class=\"fa fa-close\"></i></button>
\t\t</article>
\t\t{% elseif work.mode == 'slide' %}
\t\t<article>
\t\t\t<div class=\"project-slider\">
\t\t\t\t{% for photo in work.photos %}
\t\t\t    <div><img src=\"{{ photo.photo | media }}\"></div>
\t\t\t    {% endfor %}
\t\t\t</div>
\t\t\t<div class=\"project-poster\" style=\"background-image: url('{{ work.poster | media }}');\">
\t\t\t\t<button class=\"project-play\"><i class=\"fa fa-play\"></i></button>
\t\t\t</div>
\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<header>
\t\t\t\t\t<h2>{{ work.title }}</h2>
\t\t\t\t\t<h3 class=\"slash\">{{ work.tagline }}</h3>
\t\t\t\t</header>
\t\t\t\t<p>{{ work.description | raw }}</p>
\t\t\t\t<footer>
\t\t\t\t\t<p><span>Client: </span>{{ work.client }}</p>
\t\t\t\t</footer>
\t\t\t</div>
\t\t\t<button class=\"project-close\"><i class=\"fa fa-close\"></i></button>
\t\t</article>
\t\t{% else %}
\t\t<article>
\t\t\t<div class=\"project-image\" style=\"background-image: url('{{ work.poster | media }}');\"></div>
\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<header>
\t\t\t\t\t<h2>{{ work.title }}</h2>
\t\t\t\t\t<h3 class=\"slash\">{{ work.tagline }}</h3>
\t\t\t\t</header>
\t\t\t\t<p>{{ work.description | raw }}</p>
\t\t\t\t<footer>
\t\t\t\t\t<p><span>Client: </span>{{ work.client }}</p>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</article>
\t\t{% endif %}
\t\t
\t{% endfor %}
\t</section>
</div>", "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/work.htm", "");
    }
}

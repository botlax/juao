<?php

/* C:\xampp\htdocs\justusandotto/themes/juao/partials/site/footer.htm */
class __TwigTemplate_b74348b2165282510f1564a97420f86561e4cdfc515d45e55ed9b0b82c96f8c7 extends Twig_Template
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
        echo "<footer id=\"footer\">
\t\t<nav id=\"footer-nav\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 4
        echo url("imprint");
        echo "\">Imprint</a></li>
\t\t\t\t<li><a href=\"";
        // line 5
        echo url("privacy-policy");
        echo "\">Privacy Policy</a></li>
\t\t\t</ul>
\t\t</nav>
\t\t<a href=\"";
        // line 8
        echo url("/");
        echo "\" class=\"footer-logo\" style=\"background-image:url('";
        echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["logo"] ?? null));
        echo "');\">Just Us &apm; Otto</a>
\t</footer>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\justusandotto/themes/juao/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\">
\t\t<nav id=\"footer-nav\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"{{url('imprint')}}\">Imprint</a></li>
\t\t\t\t<li><a href=\"{{url('privacy-policy')}}\">Privacy Policy</a></li>
\t\t\t</ul>
\t\t</nav>
\t\t<a href=\"{{url('/')}}\" class=\"footer-logo\" style=\"background-image:url('{{ logo | media }}');\">Just Us &apm; Otto</a>
\t</footer>

</div>", "C:\\xampp\\htdocs\\justusandotto/themes/juao/partials/site/footer.htm", "");
    }
}

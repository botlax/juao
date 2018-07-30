<?php

/* C:\xampp\htdocs\justusandotto/themes/juao/layouts/fallback.htm */
class __TwigTemplate_910b76604ee257769536291bcee11be7ccedb525f8f6871339a2960734317ece extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\justusandotto/themes/juao/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\xampp\\htdocs\\justusandotto/themes/juao/layouts/fallback.htm", "");
    }
}

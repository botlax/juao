<?php

/* C:\xampp\htdocs\justusandotto/themes/juao/pages/contact.htm */
class __TwigTemplate_28d7e14e1e66d724861f7c8ba3cf7c3c81de45f64d65c4aefea8cec7cbc2473b extends Twig_Template
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
        echo "<div class=\"small-title-banner contact-banner\">
\t\t\t\t\t\t
\t<h1>Contact</h1>
\t
</div>

<!-- Main -->
<div id=\"main\">
\t<div id=\"contacts\">

\t\t<div class=\"row\">

\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["branches"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            // line 14
            echo "\t\t\t<section class=\"col-6 col-12-small contact-details\" style=\"background-color: ";
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["contactBg"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array())] ?? null) : null), "html", null, true);
            echo "\">
\t\t\t\t<header style=\"background-image: url('./images/contact.jpg');\">
\t\t\t\t\t<h2>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "location", array()), "html", null, true);
            echo "</h2>
\t\t\t\t</header>
\t\t\t\t<div class=\"contact-wrapper\">
\t\t\t\t\t<h3>Just us &amp; Otto Marketing Services W.L.L., ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "location", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t<p class=\"address\">
\t\t\t\t\t\t";
            // line 21
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["branch"], "contact", array()), "first", array()), "address", array());
            echo "
\t\t\t\t\t\t<span class=\"tel\">Tel: ";
            // line 22
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["branch"], "contact", array()), "first", array()), "tel", array());
            echo "</span>
\t\t\t\t\t\t<span class=\"fax\">Fax: ";
            // line 23
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["branch"], "contact", array()), "first", array()), "fax", array());
            echo "</span>
\t\t\t\t\t</p>

\t\t\t\t\t<a class=\"button\" href=\"mailto:";
            // line 26
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["branch"], "contact", array()), "first", array()), "email", array());
            echo "\" role=\"button\"> Send Mail </a>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<section class=\"col-12 map-wrapper\">
\t\t\t\t<div id=\"gmap\"></div>
\t\t\t</section>
\t\t</div>

\t</div>
</div>

<script>

  \tfunction initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('gmap'), {
          \tcenter: {lat: 25.384978, lng: 53.4249653},
          \tzoom: 8,
          \tzoomControl: false,
\t\t  \tmapTypeControl: false,
\t\t  \tscaleControl: false,
\t\t  \tstreetViewControl: false,
\t\t  \trotateControl: false,
\t\t  \tfullscreenControl: true,
          \tstyles:  [{ featureType: \"landscape\", elementType: \"labels\", stylers: [{ visibility: \"off\" }] }, { featureType: \"transit\", elementType: \"labels\", stylers: [{ visibility: \"off\" }] }, { featureType: \"poi\", elementType: \"labels\", stylers: [{ visibility: \"off\" }] }, { featureType: \"water\", elementType: \"labels\", stylers: [{ visibility: \"off\" }] }, { featureType: \"road\", elementType: \"labels.icon\", stylers: [{ visibility: \"off\" }] }, { stylers: [{ hue: \"#00aaff\" }, { saturation: -100 }, { gamma: 2.15 }, { lightness: 12 }] }, { featureType: \"road\", elementType: \"labels.text.fill\", stylers: [{ visibility: \"on\" }, { lightness: 24 }] }, { featureType: \"road\", elementType: \"geometry\", stylers: [{ lightness: 57 }] }]
        });

        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["branches"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            // line 59
            echo "        marker = new google.maps.Marker({
\t\t    map: map,
\t\t    icon: '";
            // line 61
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pin.png");
            echo "',
\t\t    draggable: false,
\t\t    animation: google.maps.Animation.DROP,
\t\t    position: {lat: ";
            // line 64
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["branch"], "contact", array()), "first", array()), "lat", array());
            echo ", lng: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["branch"], "contact", array()), "first", array()), "long", array());
            echo "}
\t\t});
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
\t\tmarker.addListener('click', toggleBounce);
\t}

  \tfunction toggleBounce() {
\t  \tif (marker.getAnimation() !== null) {
\t    \tmarker.setAnimation(null);
\t  \t} else {
\t    \tmarker.setAnimation(google.maps.Animation.BOUNCE);
\t  \t}
\t}

</script>

<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBvwrEicy98Ez77ZAu9bFL7bP8QvZ7bVgU&callback=initMap\"
    async defer></script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 67,  147 => 64,  141 => 61,  137 => 59,  133 => 58,  103 => 30,  85 => 26,  79 => 23,  75 => 22,  71 => 21,  66 => 19,  60 => 16,  54 => 14,  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"small-title-banner contact-banner\">
\t\t\t\t\t\t
\t<h1>Contact</h1>
\t
</div>

<!-- Main -->
<div id=\"main\">
\t<div id=\"contacts\">

\t\t<div class=\"row\">

\t\t\t{% for branch in branches %}
\t\t\t<section class=\"col-6 col-12-small contact-details\" style=\"background-color: {{ contactBg[loop.index0] }}\">
\t\t\t\t<header style=\"background-image: url('./images/contact.jpg');\">
\t\t\t\t\t<h2>{{ branch.location }}</h2>
\t\t\t\t</header>
\t\t\t\t<div class=\"contact-wrapper\">
\t\t\t\t\t<h3>Just us &amp; Otto Marketing Services W.L.L., {{ branch.location }}</h3>
\t\t\t\t\t<p class=\"address\">
\t\t\t\t\t\t{{ branch.contact.first.address | raw}}
\t\t\t\t\t\t<span class=\"tel\">Tel: {{ branch.contact.first.tel | raw}}</span>
\t\t\t\t\t\t<span class=\"fax\">Fax: {{ branch.contact.first.fax | raw}}</span>
\t\t\t\t\t</p>

\t\t\t\t\t<a class=\"button\" href=\"mailto:{{ branch.contact.first.email | raw}}\" role=\"button\"> Send Mail </a>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t{% endfor %}

\t\t</div>

\t\t<div class=\"row\">
\t\t\t<section class=\"col-12 map-wrapper\">
\t\t\t\t<div id=\"gmap\"></div>
\t\t\t</section>
\t\t</div>

\t</div>
</div>

<script>

  \tfunction initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('gmap'), {
          \tcenter: {lat: 25.384978, lng: 53.4249653},
          \tzoom: 8,
          \tzoomControl: false,
\t\t  \tmapTypeControl: false,
\t\t  \tscaleControl: false,
\t\t  \tstreetViewControl: false,
\t\t  \trotateControl: false,
\t\t  \tfullscreenControl: true,
          \tstyles:  [{ featureType: \"landscape\", elementType: \"labels\", stylers: [{ visibility: \"off\" }] }, { featureType: \"transit\", elementType: \"labels\", stylers: [{ visibility: \"off\" }] }, { featureType: \"poi\", elementType: \"labels\", stylers: [{ visibility: \"off\" }] }, { featureType: \"water\", elementType: \"labels\", stylers: [{ visibility: \"off\" }] }, { featureType: \"road\", elementType: \"labels.icon\", stylers: [{ visibility: \"off\" }] }, { stylers: [{ hue: \"#00aaff\" }, { saturation: -100 }, { gamma: 2.15 }, { lightness: 12 }] }, { featureType: \"road\", elementType: \"labels.text.fill\", stylers: [{ visibility: \"on\" }, { lightness: 24 }] }, { featureType: \"road\", elementType: \"geometry\", stylers: [{ lightness: 57 }] }]
        });

        {% for branch in branches %}
        marker = new google.maps.Marker({
\t\t    map: map,
\t\t    icon: '{{'assets/images/pin.png' | theme}}',
\t\t    draggable: false,
\t\t    animation: google.maps.Animation.DROP,
\t\t    position: {lat: {{ branch.contact.first.lat | raw}}, lng: {{ branch.contact.first.long | raw}}}
\t\t});
        {% endfor %}

\t\tmarker.addListener('click', toggleBounce);
\t}

  \tfunction toggleBounce() {
\t  \tif (marker.getAnimation() !== null) {
\t    \tmarker.setAnimation(null);
\t  \t} else {
\t    \tmarker.setAnimation(google.maps.Animation.BOUNCE);
\t  \t}
\t}

</script>

<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBvwrEicy98Ez77ZAu9bFL7bP8QvZ7bVgU&callback=initMap\"
    async defer></script>", "C:\\xampp\\htdocs\\justusandotto/themes/juao/pages/contact.htm", "");
    }
}

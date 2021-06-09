<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/index.html.twig */
class __TwigTemplate_6085e194fa90b79db3f0a8ba1636b7aecc66ade1c855c69505838c2d0dda11bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Travel Campers";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"/css/estiloMain.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div id=\"padre\">
    <img src=\"/img/foto8.jpg\" id=\"content_div_one_photo\" class=\"img-fluid card-img\" style=\"width: 1592px; height: 649px; object-fit: cover; object-position: 50% 50%;\" alt=\"Alquiler de Caravanas con Travel Campers\">
    <div class=\"card-title\">
        <div class=\"container position-relative py-4 d-flex flex-column flex-md-row align-items-start align-items-md-end justify-content-start\" style=\"top: 0px; left: 0px;\">
            <div class=\"hero-new__main-container col-12 col-md-8 col-lg-6 col-xl-5 col-xs-12 p-0 info\" style=\"position: unset;\">
                <div class=\"hero-new__form-container w-100 indie-br--8 bg-color--white position-relative\">
                    <h1 class=\"hero-new__headline--main titulo\">Travel Campers</h1><br>
                    <p class=\"hero-new__headline--submain\" style=\"letter-spacing: 0.1em; font-size: 17px;\">En Travel Campers queremos que vivas una aventura en primera persona con nuestras furgonetas únicas, pensadas y creadas para ti. ¿Lo típico no? Bueno, pues con Bahamas, Arizona y Ohana podrás disfrutar de tu viaje como quieras y a donde quieras, lo diferente es que esta vez las vistas no serán lo más bonito de tu viaje.                      ¿No nos crees? Compruébalo tu mism@.</p>
                    <div class=\"home-search__new\">
                        <form action autocomplete=\"off\" class=\"d-block mt-2 mt-md-3 align-items-center\"></form>
                        <button class=\"dropdown-item\" type=\"button\" onclick='location=\"/reserva/new\"'>Buscar fechas disponibles</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br><br>

<main class=\"main\">
    <div class=\"container \">
        <h2 class=\"main-title\">Nuestras últimas autocaravanas y furgonetas campers para alquilar en España</h2><br>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campers"]) || array_key_exists("campers", $context) ? $context["campers"] : (function () { throw new RuntimeError('Variable "campers" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["camper"]) {
            // line 35
            echo "        <section class=\"container-products col-xs-12\">
            <a href=\"/readCamper/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camper"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
                <div class=\"product\">
                    <img data-v-5098fbb7 src=\"img/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camper"], "image", [], "any", false, false, false, 38), "html", null, true);
            echo "\" alt=\"Foto caravana\" class=\"product__img\" title=\"Futgonetas Camper\">
                    <div class=\"product__description\">
                        <br><h3 class=\"product__title\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camper"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "</h3><br>
                        <span class=\"producto__price\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camper"], "precio", [], "any", false, false, false, 41), "html", null, true);
            echo "€/día</span>
                    </div><br>
                    <div class=\"features\">
                        <div class=\"feature\">
                            <img src=\"https://sx-content-labs-go.sixt.io/img/svg/ico_person.svg\">
                            <div class=\"text\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["camper"], "capacidad", [], "any", false, false, false, 46), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    <div class=\"features\">
                        <div class=\"feature2\">
                            <img src=\"img/manual.png\">
                            <div class=\"text\">Manual</div>
                        </div>
                    </div>
                </div>
            </a>
        </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['camper'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </div><br><br>
    <div class=\"w-100 d-inline-flex justify-content-center\">
        <a href=\"../../listCampers\" class=\"d-inline-flex justify-content-center align-items-center\">
            <div class=\"new-button--flat py-1 px-2 md-font\">Alquilar una autocaravana
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right\" viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z\" />
                </svg>
            </div>
        </a>
    </div>
</main>

<br><br>
<div class=\"new-row\">
    <div class=\"container d-flex flex-wrap align-items-start\">
        <div class=\"col-12 col-md-10 col-lg-4 pl-lg-0 mb-2 mb-md-4\">
            <h2 class=\"row-title text-center text-lg-left\">La oferta de alquiler de caravanas más competitiva de España</h2>
        </div>
        <div class=\"col-12 p-0 d-flex flex-wrap col-lg-8\">
            <div class=\"features-item col-12 col-md-6 d-flex flex-wrap align-items-start\">
                <picture data-v-5098fbb7 class=\"features-item_icon col-3 pl-0 pr-md-0\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/604c041f-2303-42b9-b0af-9ecb82946c51_indiecampers_dual_thumb+(1).svg\" media=\"(min-width: 768px)\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/604c041f-2303-42b9-b0af-9ecb82946c51_indiecampers_dual_thumb+(1).svg\" media=\"(min-width: 500px)\">
                    <img data-v-5098fbb7 title alt src=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/604c041f-2303-42b9-b0af-9ecb82946c51_indiecampers_dual_thumb+(1).svg\">

                </picture>
                <div class=\"col-9 pl-0 pl-md-3\">
                    <h3 class=\"features-item_title\">Cancelación gratis hasta 48h antes de tu viaje</h3>
                    <p class=\"features-item_text\">¡Cancela tu viaje con reembolso total hasta 15 días o con un vale total hasta 48h antes de la fecha de recogida!</p>
                </div>
            </div>
            <div class=\"features-item col-12 col-md-6 d-flex flex-wrap align-items-start\">
                <picture data-v-5098fbb7 class=\"features-item_icon col-3 pl-0 pr-md-0\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/4e90fcb4-f149-4fd6-9510-f32320cbf991_indiecampers_dual_calendar.svg\" media=\"(min-width: 768px)\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/4e90fcb4-f149-4fd6-9510-f32320cbf991_indiecampers_dual_calendar.svg\" media=\"(min-width: 500px)\">
                    <img data-v-5098fbb7 title alt src=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/4e90fcb4-f149-4fd6-9510-f32320cbf991_indiecampers_dual_calendar.svg\">

                </picture>
                <div class=\"col-9 pl-0 pl-md-3\">
                    <h3 class=\"features-item_title\">Cambia tu viaje gratis</h3>
                    <p class=\"features-item_text\">Si la caravana que has elegido tiene la política de cancelación super flexible, puedes modificar las fechas, los lugares y el modelo de vehículo hasta 48 horas antes del viaje</p>
                </div>
            </div>
            <div class=\"features-item col-12 col-md-6 d-flex flex-wrap align-items-start\">
                <picture data-v-5098fbb7 class=\"features-item_icon col-3 pl-0 pr-md-0\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/1c6784c4-4e4b-41f4-baf9-c283e17a9ba4_indiecampers_dual_long_rent.svg\" media=\"(min-width: 768px)\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/1c6784c4-4e4b-41f4-baf9-c283e17a9ba4_indiecampers_dual_long_rent.svg\" media=\"(min-width: 500px)\">
                    <img data-v-5098fbb7 title alt src=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/1c6784c4-4e4b-41f4-baf9-c283e17a9ba4_indiecampers_dual_long_rent.svg\">
                </picture>
                <div class=\"col-9 pl-0 pl-md-3\">
                    <h3 class=\"features-item_title\">¡Estancias más largas significan descuento!</h3>
                    <p class=\"features-item_text\">Disfruta de un 5% de descuento sobre el valor del alquiler de las reservas de 14 noches o más; 10% para 21 noches o más.</p>
                </div>
            </div>
            <div class=\"features-item col-12 col-md-6 d-flex flex-wrap align-items-start\">
                <picture data-v-5098fbb7 class=\"features-item_icon col-3 pl-0 pr-md-0\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/baa6a24d-d243-405b-ab41-068a674bf966_indiecampers_dual_coins.svg\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/baa6a24d-d243-405b-ab41-068a674bf966_indiecampers_dual_coins.svg\">
                    <img data-v-5098fbb7 title alt src=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/baa6a24d-d243-405b-ab41-068a674bf966_indiecampers_dual_coins.svg\">

                </picture>

                <div class=\"col-9 pl-0 pl-md-3\">
                    <h3 class=\"features-item_title\">Paga solo el 20% por adelantado</h3>
                    <p class=\"features-item_text\">En el caso de las uatocaravanas con la politica de cancelación superflexible, pagarás inmediatamente sólo el 20% del valor de tu reserva cuando la reserves con más de 15 días de antelación</p>
                </div>
            </div>
            <div class=\"w-100 d-inline-flex justify-content-center align-items-center mt-1\"></div>
        </div>
    </div>
</div>
<br><br>
<div class=\"container-all\">
    <div class=\"w-100 text-center\">
        <span class=\"row-label mb-1\">Experiencias de viaje inolvidables</span>
        <h2 class=\"row-title mb-5 col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2\">Inspírate en nuestras rutas</h2>
    </div>
    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 137
            echo "    <div class=\"contenedor\">
        <a href=\"/readRoute/";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["route"], "id", [], "any", false, false, false, 138), "html", null, true);
            echo "\">
            <figure>
                <img data-v-5098fbb7 src=\"img/";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["route"], "image", [], "any", false, false, false, 140), "html", null, true);
            echo "\" class=\"w-100 h-100 v-lazy-image v-lazy-image-loaded\" alt=\"Imagen de la ruta\" title=\"Ruta\">
                <div class=\"capa\">
                    <h3>Ruta por ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["route"], "name", [], "any", false, false, false, 142), "html", null, true);
            echo "</h3>
                    <p>";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["route"], "description", [], "any", false, false, false, 143), "html", null, true);
            echo "</p>
                </div>
            </figure>
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "</div><br>
    <a href=\"/listRoutes\" class=\"d-inline-flex justify-content-center align-items-center\"><br>
            <div class=\"new-button--flat py-1 px-2 md-font\">
                Todas las rutas
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right\" viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z\" />
                </svg>
            </div>
    </a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 149,  286 => 143,  282 => 142,  277 => 140,  272 => 138,  269 => 137,  265 => 136,  186 => 59,  167 => 46,  159 => 41,  155 => 40,  150 => 38,  145 => 36,  142 => 35,  138 => 34,  113 => 11,  103 => 10,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Travel Campers{% endblock %}
{% block stylesheets %}
{{ parent() }}
<link href=\"/css/estiloMain.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
{% endblock %}

{% block body %}
<div id=\"padre\">
    <img src=\"/img/foto8.jpg\" id=\"content_div_one_photo\" class=\"img-fluid card-img\" style=\"width: 1592px; height: 649px; object-fit: cover; object-position: 50% 50%;\" alt=\"Alquiler de Caravanas con Travel Campers\">
    <div class=\"card-title\">
        <div class=\"container position-relative py-4 d-flex flex-column flex-md-row align-items-start align-items-md-end justify-content-start\" style=\"top: 0px; left: 0px;\">
            <div class=\"hero-new__main-container col-12 col-md-8 col-lg-6 col-xl-5 col-xs-12 p-0 info\" style=\"position: unset;\">
                <div class=\"hero-new__form-container w-100 indie-br--8 bg-color--white position-relative\">
                    <h1 class=\"hero-new__headline--main titulo\">Travel Campers</h1><br>
                    <p class=\"hero-new__headline--submain\" style=\"letter-spacing: 0.1em; font-size: 17px;\">En Travel Campers queremos que vivas una aventura en primera persona con nuestras furgonetas únicas, pensadas y creadas para ti. ¿Lo típico no? Bueno, pues con Bahamas, Arizona y Ohana podrás disfrutar de tu viaje como quieras y a donde quieras, lo diferente es que esta vez las vistas no serán lo más bonito de tu viaje.                      ¿No nos crees? Compruébalo tu mism@.</p>
                    <div class=\"home-search__new\">
                        <form action autocomplete=\"off\" class=\"d-block mt-2 mt-md-3 align-items-center\"></form>
                        <button class=\"dropdown-item\" type=\"button\" onclick='location=\"/reserva/new\"'>Buscar fechas disponibles</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br><br>

<main class=\"main\">
    <div class=\"container \">
        <h2 class=\"main-title\">Nuestras últimas autocaravanas y furgonetas campers para alquilar en España</h2><br>
        {% for camper in campers %}
        <section class=\"container-products col-xs-12\">
            <a href=\"/readCamper/{{camper.id}}\">
                <div class=\"product\">
                    <img data-v-5098fbb7 src=\"img/{{camper.image}}\" alt=\"Foto caravana\" class=\"product__img\" title=\"Futgonetas Camper\">
                    <div class=\"product__description\">
                        <br><h3 class=\"product__title\">{{camper.title}}</h3><br>
                        <span class=\"producto__price\">{{camper.precio}}€/día</span>
                    </div><br>
                    <div class=\"features\">
                        <div class=\"feature\">
                            <img src=\"https://sx-content-labs-go.sixt.io/img/svg/ico_person.svg\">
                            <div class=\"text\">{{camper.capacidad}}</div>
                        </div>
                    </div>
                    <div class=\"features\">
                        <div class=\"feature2\">
                            <img src=\"img/manual.png\">
                            <div class=\"text\">Manual</div>
                        </div>
                    </div>
                </div>
            </a>
        </section>
        {% endfor %}
    </div><br><br>
    <div class=\"w-100 d-inline-flex justify-content-center\">
        <a href=\"../../listCampers\" class=\"d-inline-flex justify-content-center align-items-center\">
            <div class=\"new-button--flat py-1 px-2 md-font\">Alquilar una autocaravana
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right\" viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z\" />
                </svg>
            </div>
        </a>
    </div>
</main>

<br><br>
<div class=\"new-row\">
    <div class=\"container d-flex flex-wrap align-items-start\">
        <div class=\"col-12 col-md-10 col-lg-4 pl-lg-0 mb-2 mb-md-4\">
            <h2 class=\"row-title text-center text-lg-left\">La oferta de alquiler de caravanas más competitiva de España</h2>
        </div>
        <div class=\"col-12 p-0 d-flex flex-wrap col-lg-8\">
            <div class=\"features-item col-12 col-md-6 d-flex flex-wrap align-items-start\">
                <picture data-v-5098fbb7 class=\"features-item_icon col-3 pl-0 pr-md-0\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/604c041f-2303-42b9-b0af-9ecb82946c51_indiecampers_dual_thumb+(1).svg\" media=\"(min-width: 768px)\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/604c041f-2303-42b9-b0af-9ecb82946c51_indiecampers_dual_thumb+(1).svg\" media=\"(min-width: 500px)\">
                    <img data-v-5098fbb7 title alt src=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/604c041f-2303-42b9-b0af-9ecb82946c51_indiecampers_dual_thumb+(1).svg\">

                </picture>
                <div class=\"col-9 pl-0 pl-md-3\">
                    <h3 class=\"features-item_title\">Cancelación gratis hasta 48h antes de tu viaje</h3>
                    <p class=\"features-item_text\">¡Cancela tu viaje con reembolso total hasta 15 días o con un vale total hasta 48h antes de la fecha de recogida!</p>
                </div>
            </div>
            <div class=\"features-item col-12 col-md-6 d-flex flex-wrap align-items-start\">
                <picture data-v-5098fbb7 class=\"features-item_icon col-3 pl-0 pr-md-0\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/4e90fcb4-f149-4fd6-9510-f32320cbf991_indiecampers_dual_calendar.svg\" media=\"(min-width: 768px)\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/4e90fcb4-f149-4fd6-9510-f32320cbf991_indiecampers_dual_calendar.svg\" media=\"(min-width: 500px)\">
                    <img data-v-5098fbb7 title alt src=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/4e90fcb4-f149-4fd6-9510-f32320cbf991_indiecampers_dual_calendar.svg\">

                </picture>
                <div class=\"col-9 pl-0 pl-md-3\">
                    <h3 class=\"features-item_title\">Cambia tu viaje gratis</h3>
                    <p class=\"features-item_text\">Si la caravana que has elegido tiene la política de cancelación super flexible, puedes modificar las fechas, los lugares y el modelo de vehículo hasta 48 horas antes del viaje</p>
                </div>
            </div>
            <div class=\"features-item col-12 col-md-6 d-flex flex-wrap align-items-start\">
                <picture data-v-5098fbb7 class=\"features-item_icon col-3 pl-0 pr-md-0\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/1c6784c4-4e4b-41f4-baf9-c283e17a9ba4_indiecampers_dual_long_rent.svg\" media=\"(min-width: 768px)\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/1c6784c4-4e4b-41f4-baf9-c283e17a9ba4_indiecampers_dual_long_rent.svg\" media=\"(min-width: 500px)\">
                    <img data-v-5098fbb7 title alt src=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/1c6784c4-4e4b-41f4-baf9-c283e17a9ba4_indiecampers_dual_long_rent.svg\">
                </picture>
                <div class=\"col-9 pl-0 pl-md-3\">
                    <h3 class=\"features-item_title\">¡Estancias más largas significan descuento!</h3>
                    <p class=\"features-item_text\">Disfruta de un 5% de descuento sobre el valor del alquiler de las reservas de 14 noches o más; 10% para 21 noches o más.</p>
                </div>
            </div>
            <div class=\"features-item col-12 col-md-6 d-flex flex-wrap align-items-start\">
                <picture data-v-5098fbb7 class=\"features-item_icon col-3 pl-0 pr-md-0\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/baa6a24d-d243-405b-ab41-068a674bf966_indiecampers_dual_coins.svg\">
                    <source data-v-5098fbb7 srcset=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/baa6a24d-d243-405b-ab41-068a674bf966_indiecampers_dual_coins.svg\">
                    <img data-v-5098fbb7 title alt src=\"https://prismic-io.s3.amazonaws.com/indiecampers-demo/baa6a24d-d243-405b-ab41-068a674bf966_indiecampers_dual_coins.svg\">

                </picture>

                <div class=\"col-9 pl-0 pl-md-3\">
                    <h3 class=\"features-item_title\">Paga solo el 20% por adelantado</h3>
                    <p class=\"features-item_text\">En el caso de las uatocaravanas con la politica de cancelación superflexible, pagarás inmediatamente sólo el 20% del valor de tu reserva cuando la reserves con más de 15 días de antelación</p>
                </div>
            </div>
            <div class=\"w-100 d-inline-flex justify-content-center align-items-center mt-1\"></div>
        </div>
    </div>
</div>
<br><br>
<div class=\"container-all\">
    <div class=\"w-100 text-center\">
        <span class=\"row-label mb-1\">Experiencias de viaje inolvidables</span>
        <h2 class=\"row-title mb-5 col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2\">Inspírate en nuestras rutas</h2>
    </div>
    {% for route in routes %}
    <div class=\"contenedor\">
        <a href=\"/readRoute/{{route.id}}\">
            <figure>
                <img data-v-5098fbb7 src=\"img/{{route.image}}\" class=\"w-100 h-100 v-lazy-image v-lazy-image-loaded\" alt=\"Imagen de la ruta\" title=\"Ruta\">
                <div class=\"capa\">
                    <h3>Ruta por {{route.name}}</h3>
                    <p>{{route.description}}</p>
                </div>
            </figure>
        </a>
    </div>
    {% endfor %}
</div><br>
    <a href=\"/listRoutes\" class=\"d-inline-flex justify-content-center align-items-center\"><br>
            <div class=\"new-button--flat py-1 px-2 md-font\">
                Todas las rutas
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right\" viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z\" />
                </svg>
            </div>
    </a>

{% endblock %}
", "main/index.html.twig", "C:\\xampp\\htdocs\\cp1\\templates\\main\\index.html.twig");
    }
}

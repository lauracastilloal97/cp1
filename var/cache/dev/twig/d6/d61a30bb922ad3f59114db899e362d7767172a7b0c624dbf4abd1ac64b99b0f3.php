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

/* main/readRoute.html.twig */
class __TwigTemplate_5d7250a796d3f9c6a9218d2303985d9f17f1015f47d4b3075c7989d784ee8a4a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/readRoute.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/readRoute.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/readRoute.html.twig", 1);
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

        echo "Ruta";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"/css/estiloRutaUnica.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div class=\"container-fluid p-0\">
    <div class=\"container mb-5 pb-5 road-trip-planner\">
        <div class=\"row mt-4 pt-5\">
            <div class=\"d-flex align-items-center col-12 col-md-8 col-lg-8\">
                <h1 class=\"road-trip-detail__title\">Ruta por ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
            </div>
        </div>
        <div class=\"container road-trip-planner\" style=\"z-index: 9;\">
            <div class=\"row\">
                <div class=\"col-12 col-lg-7 mt-4\" style=\"padding-top: 1.5rem;\">
                    <div>
                        <div class=\"mb-3 pb-4\">
                            <div>
                                <p class=\"mb-4\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "
                                </p>
                                <p class=\"mb-4\">Lo de viajar en autocaravana es un sueño para la mayoría de viajeros, aquellos a los que les gusta la libertad y visitar paisajes y naturaleza; y lo cierto es que cada vez más jóvenes se suman a esta moda, la del caravaning , que en realidad es más antigua de lo que creemos.

                                    “ Más de un millón de autocaravanistas europeos recorren en la actualidad las carreteras de los cinco continentes disfrutando de una libertad que solo conocen verdaderamente quienes se han puesto al volante de una autocaravana. Pero esos deseos de viajar libremente teniendo cubiertas las necesidades de descanso y confort ya se buscaban hace ya más de un siglo, cuando nacían ideas totalmente revolucionarias que cambiaron el concepto del viaje”, señala el recién estrenado libro de Pedro Madera Viajar por libre. 50 rutas en furgo por España</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img class=\"foto mt-2 mb-4 v-lazy-image v-lazy-image-loaded\" src=\"/img/";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35), "html", null, true);
        echo "\" style=\"width: 450px; height:100%;\">
            </div>
            <div class=\"pt-3 containers\">
                <div class=\"row\">
                    <div class=\"d-flex align-items-center col-12 mb-4 col-md-6\">
                        <div class=\"road-trip-detail__more--subhead-right dia\">
                            <p class=\"road-trip-detail__more--main-content text-center\"><strong>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 41, $this->source); })()), "dias", [], "any", false, false, false, 41), "html", null, true);
        echo "</strong></p>
                            <p class=\"road-trip-detail__more--content\">Días aconsejados</p>
                        </div>
                    </div>
                    <div class=\"col-12 mb-4 col-md-6\">
                        <div class=\"road-trip-detail__more--route box\">
                            <div class=\"road-trip-detail__more--title-card text-center\">Ruta Principal</div>
                            <div class=\"d-flex\">
                                <div class=\"road-trip-detail__more--title-card col-6\">
                                    <p class=\"road-trip-detail__more--content text-center\"><strong>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 50, $this->source); })()), "km", [], "any", false, false, false, 50), "html", null, true);
        echo "</strong></p>
                                </div>
                                <div class=\"road-trip-detail__more--title-card col-6\">
                                    <p class=\"road-trip-detail__more--content text-center\"><strong>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 53, $this->source); })()), "tiempo", [], "any", false, false, false, 53), "html", null, true);
        echo "</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 col-md-6 mb-4 road-trip-detail__more--category-container\">
                            <div class=\"d-flex align-items-center ruta\">
                                <img data-v-5098fbb7 src=\"https://images.prismic.io/indiecampers-demo/0c67ab3a-c1d3-402d-b5b6-f491d9f1cf12_indiecampers_icon_destination.svg?auto=compress,format&rect=0,25,150,100&w=2000&h=1334\" class=\"road-trip-detail__more--title-category-icon v-lazy-image v-lazy-image-loaded\" height=\"60px\">
                                <p class=\"road-trip-detail__more--title-item mb-2\">Visitar</p>
                            </div>
                            <div class=\"road-trip-detail__more--detail-item ruta\">
                                <div class=\"row d-flex mb-2 col-12\">
                                    <p class=\"road-trip-detail__more--title\"><strong>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 66, $this->source); })()), "visitar", [], "any", false, false, false, 66), "html", null, true);
        echo "</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 mb-4 road-trip-detail__more--category-container\">
                            <div class=\"d-flex align-items-center obj\">
                                <img data-v-5098fbb7 src=\"https://images.prismic.io/indiecampers-demo/327af945-600c-47ab-b0ac-24c6defac9af_indiecampers_icon_food.svg?auto=compress,format&rect=0,25,150,100&w=2000&h=1334\" class=\"road-trip-detail__more--title-category-icon v-lazy-image v-lazy-image-loaded\" height=\"60px\">
                                <p class=\"road-trip-detail__more--title-item mb-2\">Come en</p>
                            </div>
                            <div class=\"road-trip-detail__more--detail-item obj\">
                                <div class=\"row d-flex mb-2 col-12\">
                                    <p class=\"road-trip-detail__more--title\"><strong>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 77, $this->source); })()), "restaurante", [], "any", false, false, false, 77), "html", null, true);
        echo "</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 mb-4 road-trip-detail__more--category-container\">
                            <div class=\"d-flex align-items-center ruta\">
                                <img data-v-5098fbb7 src=\"https://images.prismic.io/indiecampers-demo/df806738-470e-4239-bd46-efc51880c7d7_indiecampers_icon_campervan.svg?auto=compress,format&rect=0,25,150,100&w=2000&h=1334\" class=\"road-trip-detail__more--title-category-icon v-lazy-image v-lazy-image-loaded\" height=\"60px\">
                                <p class=\"road-trip-detail__more--title-item mb-2\">Parada obligatoria</p>
                            </div>
                            <div class=\"road-trip-detail__more--detail-item ruta\">
                                <div class=\"row d-flex mb-2 col-12\">
                                    <p class=\"road-trip-detail__more--title\"><strong>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 88, $this->source); })()), "parada", [], "any", false, false, false, 88), "html", null, true);
        echo "</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 mb-4 road-trip-detail__more--category-container\">
                            <div class=\"d-flex align-items-center obj\">
                                <img data-v-5098fbb7 src=\"https://images.prismic.io/indiecampers-demo/b5c16a80-2b5d-427f-9c89-2e4c38635a18_indiecampers_icon_tent.svg?auto=compress,format&rect=0,25,150,100&w=2000&h=1334\" class=\"road-trip-detail__more--title-category-icon v-lazy-image v-lazy-image-loaded\" height=\"60px\">
                                <p class=\"road-trip-detail__more--title-item mb-2\">Quédate en</p>
                            </div>
                            <div class=\"road-trip-detail__more--detail-item obj\">
                                <div class=\"row d-flex mb-2 col-12\">
                                    <p class=\"road-trip-detail__more--title\"><strong>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 99, $this->source); })()), "camping", [], "any", false, false, false, 99), "html", null, true);
        echo "</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/readRoute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 99,  234 => 88,  220 => 77,  206 => 66,  190 => 53,  184 => 50,  172 => 41,  163 => 35,  151 => 26,  139 => 17,  133 => 13,  123 => 12,  109 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ruta{% endblock %}
{% block head %}
{% block stylesheets %}
{{ parent() }}
<link href=\"/css/estiloRutaUnica.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
{% endblock %}
{% endblock %}

{% block body %}
<div class=\"container-fluid p-0\">
    <div class=\"container mb-5 pb-5 road-trip-planner\">
        <div class=\"row mt-4 pt-5\">
            <div class=\"d-flex align-items-center col-12 col-md-8 col-lg-8\">
                <h1 class=\"road-trip-detail__title\">Ruta por {{route.name}}</h1>
            </div>
        </div>
        <div class=\"container road-trip-planner\" style=\"z-index: 9;\">
            <div class=\"row\">
                <div class=\"col-12 col-lg-7 mt-4\" style=\"padding-top: 1.5rem;\">
                    <div>
                        <div class=\"mb-3 pb-4\">
                            <div>
                                <p class=\"mb-4\">{{ route.description }}
                                </p>
                                <p class=\"mb-4\">Lo de viajar en autocaravana es un sueño para la mayoría de viajeros, aquellos a los que les gusta la libertad y visitar paisajes y naturaleza; y lo cierto es que cada vez más jóvenes se suman a esta moda, la del caravaning , que en realidad es más antigua de lo que creemos.

                                    “ Más de un millón de autocaravanistas europeos recorren en la actualidad las carreteras de los cinco continentes disfrutando de una libertad que solo conocen verdaderamente quienes se han puesto al volante de una autocaravana. Pero esos deseos de viajar libremente teniendo cubiertas las necesidades de descanso y confort ya se buscaban hace ya más de un siglo, cuando nacían ideas totalmente revolucionarias que cambiaron el concepto del viaje”, señala el recién estrenado libro de Pedro Madera Viajar por libre. 50 rutas en furgo por España</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img class=\"foto mt-2 mb-4 v-lazy-image v-lazy-image-loaded\" src=\"/img/{{ route.image }}\" style=\"width: 450px; height:100%;\">
            </div>
            <div class=\"pt-3 containers\">
                <div class=\"row\">
                    <div class=\"d-flex align-items-center col-12 mb-4 col-md-6\">
                        <div class=\"road-trip-detail__more--subhead-right dia\">
                            <p class=\"road-trip-detail__more--main-content text-center\"><strong>{{route.dias}}</strong></p>
                            <p class=\"road-trip-detail__more--content\">Días aconsejados</p>
                        </div>
                    </div>
                    <div class=\"col-12 mb-4 col-md-6\">
                        <div class=\"road-trip-detail__more--route box\">
                            <div class=\"road-trip-detail__more--title-card text-center\">Ruta Principal</div>
                            <div class=\"d-flex\">
                                <div class=\"road-trip-detail__more--title-card col-6\">
                                    <p class=\"road-trip-detail__more--content text-center\"><strong>{{route.km}}</strong></p>
                                </div>
                                <div class=\"road-trip-detail__more--title-card col-6\">
                                    <p class=\"road-trip-detail__more--content text-center\"><strong>{{route.tiempo}}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 col-md-6 mb-4 road-trip-detail__more--category-container\">
                            <div class=\"d-flex align-items-center ruta\">
                                <img data-v-5098fbb7 src=\"https://images.prismic.io/indiecampers-demo/0c67ab3a-c1d3-402d-b5b6-f491d9f1cf12_indiecampers_icon_destination.svg?auto=compress,format&rect=0,25,150,100&w=2000&h=1334\" class=\"road-trip-detail__more--title-category-icon v-lazy-image v-lazy-image-loaded\" height=\"60px\">
                                <p class=\"road-trip-detail__more--title-item mb-2\">Visitar</p>
                            </div>
                            <div class=\"road-trip-detail__more--detail-item ruta\">
                                <div class=\"row d-flex mb-2 col-12\">
                                    <p class=\"road-trip-detail__more--title\"><strong>{{route.visitar}}</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 mb-4 road-trip-detail__more--category-container\">
                            <div class=\"d-flex align-items-center obj\">
                                <img data-v-5098fbb7 src=\"https://images.prismic.io/indiecampers-demo/327af945-600c-47ab-b0ac-24c6defac9af_indiecampers_icon_food.svg?auto=compress,format&rect=0,25,150,100&w=2000&h=1334\" class=\"road-trip-detail__more--title-category-icon v-lazy-image v-lazy-image-loaded\" height=\"60px\">
                                <p class=\"road-trip-detail__more--title-item mb-2\">Come en</p>
                            </div>
                            <div class=\"road-trip-detail__more--detail-item obj\">
                                <div class=\"row d-flex mb-2 col-12\">
                                    <p class=\"road-trip-detail__more--title\"><strong>{{route.restaurante}}</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 mb-4 road-trip-detail__more--category-container\">
                            <div class=\"d-flex align-items-center ruta\">
                                <img data-v-5098fbb7 src=\"https://images.prismic.io/indiecampers-demo/df806738-470e-4239-bd46-efc51880c7d7_indiecampers_icon_campervan.svg?auto=compress,format&rect=0,25,150,100&w=2000&h=1334\" class=\"road-trip-detail__more--title-category-icon v-lazy-image v-lazy-image-loaded\" height=\"60px\">
                                <p class=\"road-trip-detail__more--title-item mb-2\">Parada obligatoria</p>
                            </div>
                            <div class=\"road-trip-detail__more--detail-item ruta\">
                                <div class=\"row d-flex mb-2 col-12\">
                                    <p class=\"road-trip-detail__more--title\"><strong>{{route.parada}}</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 mb-4 road-trip-detail__more--category-container\">
                            <div class=\"d-flex align-items-center obj\">
                                <img data-v-5098fbb7 src=\"https://images.prismic.io/indiecampers-demo/b5c16a80-2b5d-427f-9c89-2e4c38635a18_indiecampers_icon_tent.svg?auto=compress,format&rect=0,25,150,100&w=2000&h=1334\" class=\"road-trip-detail__more--title-category-icon v-lazy-image v-lazy-image-loaded\" height=\"60px\">
                                <p class=\"road-trip-detail__more--title-item mb-2\">Quédate en</p>
                            </div>
                            <div class=\"road-trip-detail__more--detail-item obj\">
                                <div class=\"row d-flex mb-2 col-12\">
                                    <p class=\"road-trip-detail__more--title\"><strong>{{route.camping}}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{% endblock %}
", "main/readRoute.html.twig", "C:\\Users\\laura\\campers\\templates\\main\\readRoute.html.twig");
    }
}

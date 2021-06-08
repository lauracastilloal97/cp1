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

/* main/listCamper.html.twig */
class __TwigTemplate_d6989e7a0f668d4e01b43022f35696948e04978224da60d380ce068a49f43842 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/listCamper.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/listCamper.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/listCamper.html.twig", 1);
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

        echo "Campers";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
<link href=\"/css/listaCampers.css\" rel=\"stylesheet\" />
<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<div>
    <div>
        <div>
            <div>
                <div class=\"home-freeforu pt-5 top-vh\">
                    <div class=\"container d-block d-sm-block d-sm-block d-md-block d-lg-flex d-xl-flex pl-md-0 pr-md-0\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">
                            <div class=\"image-container\">
                                <img data-v-5098fbb7 src=\"/img/foto1.jpg\" alt=\"Caravana en atardecer\" title=\"Viaja como quieras con Travel Campers\" style=\"width: 530px; height: 350px; border-radius: 10px; border: 5px solid #E8DAEF; \">
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 position-relative\">
                            <div class=\"title_container\"><br>
                                <label class=\"travel-row_label\">Tu compañero de viaje por carretera</label>
                                <h4 class=\"\" travel-row_title mt-2>Viaja como quieras </h4><br>
                            </div>
                            <div class=\"d-flex\">
                                <ul class=\"pr-sm-4\">
                                    <li class=\"d-flex mb-4\">
                                        <i class=\"far fa-check-circle\"></i>
                                        <p class=\"mr-3\">Más de 2.000 autocaravanas en España</p>
                                    </li>
                                    <li class=\"d-flex mb-4\">
                                        <i class=\"far fa-check-circle\"></i>
                                        <p class=\"mr-3\">Experiencia completamente digital</p>
                                    </li>
                                    <li class=\"d-flex mb-4\">
                                        <i class=\"far fa-check-circle\"></i>
                                        <p class=\"mr-3\">Seguro y asistencia en carretera 100% gratuita</p>
                                    </li>
                                    <li class=\"d-flex mb-4\">
                                        <i class=\"far fa-check-circle\"></i>
                                        <p class=\"mr-3\">Ropa de cama, cocina y kit de limpieza</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><br>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["campers"]) {
            // line 57
            echo "                <div class=\"presentacion\">

                    <div class=\"img\">
                        <a class=\"btn-solid-reg page-scroll\" href=\"/readCamper/";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campers"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\">
                            <img src=\"img/";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campers"], "image", [], "any", false, false, false, 61), "html", null, true);
            echo "\" alt=\"\" class=\"camper show\">
                        </a>
                    </div>
                    <div class=\"producto-info\">

                        <div class=\"producto-texto\">
                            <h1>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campers"], "title", [], "any", false, false, false, 67), "html", null, true);
            echo "</h1>
                            <h3>Desde <span>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campers"], "precio", [], "any", false, false, false, 68), "html", null, true);
            echo "€/día</span></h3>
                            <p>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campers"], "descripcion", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
                            
                        </div><br>
                        <div class=\"precio-btn\">
                            <a href=\"/readCamper/";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campers"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\">Ver información</a><br>
                        </div><br>
                    </div> <br>
                </div><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </div>        </div>
        <br>
        <div class=\"navigation\">
            ";
        // line 81
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 81, $this->source); })()));
        echo "
        </div>


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/listCamper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 81,  226 => 78,  215 => 73,  208 => 69,  204 => 68,  200 => 67,  191 => 61,  187 => 60,  182 => 57,  178 => 56,  136 => 16,  126 => 15,  109 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Campers{% endblock %}
{% block head %}
{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
<link href=\"/css/listaCampers.css\" rel=\"stylesheet\" />
<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">

{% endblock %}
{% endblock %}

{% block body %}

<div>
    <div>
        <div>
            <div>
                <div class=\"home-freeforu pt-5 top-vh\">
                    <div class=\"container d-block d-sm-block d-sm-block d-md-block d-lg-flex d-xl-flex pl-md-0 pr-md-0\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">
                            <div class=\"image-container\">
                                <img data-v-5098fbb7 src=\"/img/foto1.jpg\" alt=\"Caravana en atardecer\" title=\"Viaja como quieras con Travel Campers\" style=\"width: 530px; height: 350px; border-radius: 10px; border: 5px solid #E8DAEF; \">
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 position-relative\">
                            <div class=\"title_container\"><br>
                                <label class=\"travel-row_label\">Tu compañero de viaje por carretera</label>
                                <h4 class=\"\" travel-row_title mt-2>Viaja como quieras </h4><br>
                            </div>
                            <div class=\"d-flex\">
                                <ul class=\"pr-sm-4\">
                                    <li class=\"d-flex mb-4\">
                                        <i class=\"far fa-check-circle\"></i>
                                        <p class=\"mr-3\">Más de 2.000 autocaravanas en España</p>
                                    </li>
                                    <li class=\"d-flex mb-4\">
                                        <i class=\"far fa-check-circle\"></i>
                                        <p class=\"mr-3\">Experiencia completamente digital</p>
                                    </li>
                                    <li class=\"d-flex mb-4\">
                                        <i class=\"far fa-check-circle\"></i>
                                        <p class=\"mr-3\">Seguro y asistencia en carretera 100% gratuita</p>
                                    </li>
                                    <li class=\"d-flex mb-4\">
                                        <i class=\"far fa-check-circle\"></i>
                                        <p class=\"mr-3\">Ropa de cama, cocina y kit de limpieza</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><br>
                {% for campers in pagination %}
                <div class=\"presentacion\">

                    <div class=\"img\">
                        <a class=\"btn-solid-reg page-scroll\" href=\"/readCamper/{{campers.id}}\">
                            <img src=\"img/{{campers.image}}\" alt=\"\" class=\"camper show\">
                        </a>
                    </div>
                    <div class=\"producto-info\">

                        <div class=\"producto-texto\">
                            <h1>{{campers.title}}</h1>
                            <h3>Desde <span>{{campers.precio}}€/día</span></h3>
                            <p>{{campers.descripcion}}</p>
                            
                        </div><br>
                        <div class=\"precio-btn\">
                            <a href=\"/readCamper/{{campers.id}}\">Ver información</a><br>
                        </div><br>
                    </div> <br>
                </div><br>
                {% endfor %}
            </div>        </div>
        <br>
        <div class=\"navigation\">
            {{ knp_pagination_render(pagination) }}
        </div>


        {% endblock %}
", "main/listCamper.html.twig", "C:\\Users\\laura\\campers\\templates\\main\\listCamper.html.twig");
    }
}

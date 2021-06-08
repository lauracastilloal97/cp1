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

/* main/readCamper.html.twig */
class __TwigTemplate_e5e1e22118e5eb54aeac9b8cfe3a8ab45d7f87eeb2c444ff68c2c2c2919d21dd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/readCamper.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/readCamper.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/readCamper.html.twig", 1);
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
<link href=\"/css/estiloCamperUnica.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<div class=\"container-fluid p-0 van-page\">
    <div class=\"top-head s-background s-separator\">
        <h2 class=\"s-title\" stranslate=\"header.TITLE\">
            <button class=\"dropdown-item\" type=\"button\" onclick='location=\"/reserva/new\"'>Ver disponibilidad</button>
        </h2>
        <hr/> 
    </div>
    <div class=\"row m-0 position-relative\">
        <div class=\"col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pl-0\">
            <h1 class=\"mb-3 text-center text-sm-center text-md-left text-lg-left text-xl-left\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</h1>
            <p class=\"mb-5\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 25, $this->source); })()), "descripcion", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
            <div class=\"mb-4\" style=\"margin-left: 50px\">
                <label>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 27, $this->source); })()), "marca", [], "any", false, false, false, 27), "html", null, true);
        echo "</label>
                <p class=\"mt-1 w-50\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 28, $this->source); })()), "modelo", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
            </div>
            <div class=\"mb-4\" style=\"margin-left: 50px\">
                <label>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 31, $this->source); })()), "capacidad", [], "any", false, false, false, 31), "html", null, true);
        echo "</label>
                <p class=\"mt-1 w-50\">Asientos y camas para ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 32, $this->source); })()), "capacidad", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
            </div>
            <div class=\"mb-4\" style=\"margin-left: 50px\">
                <label>Dimensiones</label>
                <p class=\"mt-1 w-50\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 36, $this->source); })()), "dimensiones", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
            </div>
            <div class=\"mb-4\" style=\"margin-left: 50px\">
                <label>WC</label>
                <p class=\"mt-1 w-50\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 40, $this->source); })()), "wc", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div id=\"carouselExampleControls\" class=\"carousel col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pl-0 pr-0\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"/img/slider1.jpg\" alt=\"Foto caravana\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"/img/slider2.jpg\" alt=\"Foto caravana\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"/img/slider3.jpg\" alt=\"Foto caravana\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"/img/slider4.jpg\" alt=\"Foto caravana\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"/img/slider5.jpg\" alt=\"Foto caravana\">
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
    <div class=\"mt-5\">
        <div class=\"row align-items-center\">
            <div id=\"carouselExampleControls\" class=\"carousel col-12 col-sm-12 col-lg-6 col-xl-6 mt-5\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <img class=\"d-block w-100\" src=\"/img/slider6.jpg\" alt=\"Foto caravana\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"/img/slider7.jpg\" alt=\"Foto caravana\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"/img/slider8.jpg\" alt=\"Foto caravana\">
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            <div class=\"col-12 col-sm-12 col-lg-6 col-xl-6 mt-5\">
                <h2 class=\"mb-1\">Características de la autocaravana - modelo ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 95, $this->source); })()), "title", [], "any", false, false, false, 95), "html", null, true);
        echo " ( ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 95, $this->source); })()), "capacidad", [], "any", false, false, false, 95), "html", null, true);
        echo " ) </h2>
                <p class=\"mb-4\">Qué está incluido en tu caravana: </p>
                <ul style=\"list-style:none\">
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Calefacción estacionaria (gas)</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Ducha Interior</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Cocina con fregadero</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Comedor interior</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Hornillo a gas integrado</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Kit de limpieza</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Nevera (145L)</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Transmisión manual</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Radio con AUX y USB</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Gato del coche, triángulo y chalecos de seguridad</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Kit de cocina</li>
                </ul>
            </div>
        </div>
    </div><br>
    ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113)) {
            // line 114
            echo "    <div>
        <a href=\"https://www.paypal.com/invoice/p/#5GRNM9FEUJE99PPX\">
            <button class=\"new-button--outline\" style=\"margin-left: 40%\">Alquilar Caravana</button>
        </a>
        
    </div><br>
    ";
        }
        // line 121
        echo "    <div style=\"margin-left: 30px\">
        <h2>Comentarios de nuestros Usuarios:</h2>
        ";
        // line 123
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123)) {
            // line 124
            echo "        <a href=\"/comentario/new/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124), "html", null, true);
            echo "\">
            <button class=\"new-button--outline\">Añadir comentario</button>
        </a>
        ";
        }
        // line 128
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["camper"]) || array_key_exists("camper", $context) ? $context["camper"] : (function () { throw new RuntimeError('Variable "camper" does not exist.', 128, $this->source); })()), "comentarios", [], "any", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 129
            echo "
        ";
            // line 130
            if (twig_get_attribute($this->env, $this->source, $context["comentario"], "estado", [], "any", false, false, false, 130)) {
                // line 131
                echo "
        <div class=\"my-3 pt-3 caja\">
            <ul>
                <img src=\"/img/user.png\" alt=\"Avatar usuario\" class=\"float-left rounded-circle mr-2\" style=\"width: 100px\">
                <li>";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentario"], "text", [], "any", false, false, false, 135), "html", null, true);
                echo "</li>
                 <li>";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comentario"], "autor", [], "any", false, false, false, 136), "email", [], "any", false, false, false, 136), "html", null, true);
                echo "</li>
                <li>";
                // line 137
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentario"], "fecha", [], "any", false, false, false, 137), "d/m/y"), "html", null, true);
                echo "</li>
            </ul>

            ";
                // line 140
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 141
                    echo "            <button class=\"ocultarComentario\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentario"], "id", [], "any", false, false, false, 141), "html", null, true);
                    echo "\">Ocultar Comentario</button><br>
            ";
                }
                // line 143
                echo "
            ";
            }
            // line 145
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/readCamper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 146,  331 => 145,  327 => 143,  321 => 141,  319 => 140,  313 => 137,  309 => 136,  305 => 135,  299 => 131,  297 => 130,  294 => 129,  289 => 128,  281 => 124,  279 => 123,  275 => 121,  266 => 114,  264 => 113,  241 => 95,  183 => 40,  176 => 36,  169 => 32,  165 => 31,  159 => 28,  155 => 27,  150 => 25,  146 => 24,  134 => 14,  124 => 13,  109 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Campers{% endblock %}
{% block head %}
{% block stylesheets %}
{{ parent() }}
<link href=\"/css/estiloCamperUnica.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
{% endblock %}
{% endblock %}

{% block body %}

<div class=\"container-fluid p-0 van-page\">
    <div class=\"top-head s-background s-separator\">
        <h2 class=\"s-title\" stranslate=\"header.TITLE\">
            <button class=\"dropdown-item\" type=\"button\" onclick='location=\"/reserva/new\"'>Ver disponibilidad</button>
        </h2>
        <hr/> 
    </div>
    <div class=\"row m-0 position-relative\">
        <div class=\"col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pl-0\">
            <h1 class=\"mb-3 text-center text-sm-center text-md-left text-lg-left text-xl-left\">{{camper.title}}</h1>
            <p class=\"mb-5\">{{ camper.descripcion }}</p>
            <div class=\"mb-4\" style=\"margin-left: 50px\">
                <label>{{ camper.marca }}</label>
                <p class=\"mt-1 w-50\">{{ camper.modelo }}</p>
            </div>
            <div class=\"mb-4\" style=\"margin-left: 50px\">
                <label>{{ camper.capacidad }}</label>
                <p class=\"mt-1 w-50\">Asientos y camas para {{ camper.capacidad }}</p>
            </div>
            <div class=\"mb-4\" style=\"margin-left: 50px\">
                <label>Dimensiones</label>
                <p class=\"mt-1 w-50\">{{ camper.dimensiones }}</p>
            </div>
            <div class=\"mb-4\" style=\"margin-left: 50px\">
                <label>WC</label>
                <p class=\"mt-1 w-50\">{{ camper.wc }}</p>
            </div>
        </div>
        <div id=\"carouselExampleControls\" class=\"carousel col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pl-0 pr-0\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"/img/slider1.jpg\" alt=\"Foto caravana\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"/img/slider2.jpg\" alt=\"Foto caravana\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"/img/slider3.jpg\" alt=\"Foto caravana\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"/img/slider4.jpg\" alt=\"Foto caravana\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"/img/slider5.jpg\" alt=\"Foto caravana\">
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
    <div class=\"mt-5\">
        <div class=\"row align-items-center\">
            <div id=\"carouselExampleControls\" class=\"carousel col-12 col-sm-12 col-lg-6 col-xl-6 mt-5\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <img class=\"d-block w-100\" src=\"/img/slider6.jpg\" alt=\"Foto caravana\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"/img/slider7.jpg\" alt=\"Foto caravana\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"/img/slider8.jpg\" alt=\"Foto caravana\">
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            <div class=\"col-12 col-sm-12 col-lg-6 col-xl-6 mt-5\">
                <h2 class=\"mb-1\">Características de la autocaravana - modelo {{camper.title}} ( {{camper.capacidad}} ) </h2>
                <p class=\"mb-4\">Qué está incluido en tu caravana: </p>
                <ul style=\"list-style:none\">
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Calefacción estacionaria (gas)</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Ducha Interior</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Cocina con fregadero</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Comedor interior</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Hornillo a gas integrado</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Kit de limpieza</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Nevera (145L)</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Transmisión manual</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Radio con AUX y USB</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Gato del coche, triángulo y chalecos de seguridad</li>
                    <li class=\"mb-2\"><i class=\"fas fa-check\"></i> Kit de cocina</li>
                </ul>
            </div>
        </div>
    </div><br>
    {% if app.user %}
    <div>
        <a href=\"https://www.paypal.com/invoice/p/#5GRNM9FEUJE99PPX\">
            <button class=\"new-button--outline\" style=\"margin-left: 40%\">Alquilar Caravana</button>
        </a>
        
    </div><br>
    {% endif %}
    <div style=\"margin-left: 30px\">
        <h2>Comentarios de nuestros Usuarios:</h2>
        {% if app.user %}
        <a href=\"/comentario/new/{{camper.id}}\">
            <button class=\"new-button--outline\">Añadir comentario</button>
        </a>
        {% endif %}
        {% for comentario in camper.comentarios %}

        {% if comentario.estado %}

        <div class=\"my-3 pt-3 caja\">
            <ul>
                <img src=\"/img/user.png\" alt=\"Avatar usuario\" class=\"float-left rounded-circle mr-2\" style=\"width: 100px\">
                <li>{{ comentario.text }}</li>
                 <li>{{ comentario.autor.email }}</li>
                <li>{{ comentario.fecha |date(\"d/m/y\")}}</li>
            </ul>

            {% if is_granted(\"ROLE_ADMIN\") %}
            <button class=\"ocultarComentario\" value=\"{{comentario.id}}\">Ocultar Comentario</button><br>
            {% endif %}

            {% endif %}
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}
", "main/readCamper.html.twig", "C:\\Users\\laura\\campers\\templates\\main\\readCamper.html.twig");
    }
}

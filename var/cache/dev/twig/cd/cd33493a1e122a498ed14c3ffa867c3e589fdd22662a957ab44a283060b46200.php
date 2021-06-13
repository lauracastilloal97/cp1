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

/* base.html.twig */
class __TwigTemplate_1e7e6ad7c4d6b3ea5bf127ae2d8504b89bccce43649457892112c95fa0332eee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "

</head>

<body>

    <nav class=\"navbar navbar-expand-lg fixed-top second-navbar  \">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"../../\">
                <img src=\"../../img/logotipo.png\" width=\"90\" height=\"60\" alt=\"\">
            </a>
        </div>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <i class=\"fas fa-align-justify\"></i>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <ul class=\"navbar-nav ms-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../\">Inicio</a>
                </li>
                ";
        // line 85
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 86
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\">
                        Admin
                    </a>
                    <ul class=\" dropdown-menu dropdown-menu dropdown-menu-start\">
                        <li><button class=\"dropdown-item\" type=\"button\" onclick='location=\"../../campers/new\"'>Crear camper</button></li>
                        <li><button class=\"dropdown-item\" type=\"button\" onclick='location=\"../../rute/new\"'>Crear ruta</button></li>
                        <li><button class=\"dropdown-item\" type=\"button\" onclick='location=\"../../user\"'>Generar informes</button></li>
                    </ul>
                </li>
                ";
        }
        // line 97
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../listCampers\">Campers</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\">
                        Perfil
                    </a>
                    <ul class=\" dropdown-menu dropdown-menu dropdown-menu-start\">";
        // line 104
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104)) {
            // line 105
            echo "                        <li><button class=\"dropdown-item\" type=\"button\" onclick=\"location='../../user/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105), "html", null, true);
            echo "'\">Ver Perfil</button></li>
                        <li><button class=\"dropdown-item\" type=\"button\" onclick=\"location='../../user/";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), "html", null, true);
            echo "/edit'\">Editar información</button></li>
                        ";
        }
        // line 108
        echo "                    </ul>

                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../listRoutes\">Rutas</a>
                </li>
                ";
        // line 115
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115)) {
            // line 116
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../login\">Login</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../register\">Registro</a>
                </li>
                ";
        } else {
            // line 124
            echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../logout\">Salir</a>
                </li>

                ";
        }
        // line 130
        echo "            </ul>
        </div>
    </nav>



    <!-- Modal -->
    <div class=\"modal fade\" id=\"Modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">¡Advertencia!</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p id=\"texto\"></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 154
        $this->displayBlock('body', $context, $blocks);
        // line 155
        echo "
    <nav class=\"navbar sticky-buttom\">

        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center d-flex align-items-center justify-content-center flex-column\">
            <div class=\"col-lg-12\">
                <p class=\"copyright\">Copyright &copy;Travel Campers</p>
            </div>
        </div>
        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center d-flex align-items-center justify-content-center flex-column\">
            <h5 class=\"mr-lg-2 d-flex align-items-center\">
                <i class=\"fas fa-lock\" width=\"24\" height=\"24\"></i>
                Pago seguro
            </h5>
            <div class=\"d-flex flex-row flex-wrap align-items-center justify-content-center\">
                <i class=\"fab fa-cc-visa\"></i>
                <i class=\"fab fa-cc-mastercard\"></i>
                <i class=\"fab fa-cc-paypal\"></i>
            </div>
        </div>
        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center d-flex align-items-center justify-content-center\">
            <a class=\"navbar-brand\" href=\"https://indiecampers.es/privacidad\" target=\"_blank\">
                <p>Privacidad</p>
            </a>
            <a class=\"navbar-brand\" href=\"https://indiecampers.es/terminos-y-condiciones\" target=\"_blank\">
                <p>Términos y Condiciones</p>
            </a>
            <a class=\"navbar-brand\" href=\"https://www.facebook.com/TheFeatherVanExperience/\" target=\"_blank\">
                <img src=\"../../img/facebook.png\" width=\"10\" alt=\"Logo de facebook\">
            </a>
            <a class=\"navbar-brand\" href=\"https://www.instagram.com/thefeathervan/?hl=es\" target=\"_blank\">
                <img src=\"../../img/instagram.png\" width=\"20\" alt=\"Logo de instagram\">
            </a>

        </div>
    </nav>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js\" integrity=\"sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js\" integrity=\"sha256-rPPF6R+AH/Gilj2aC00ZAuB2EKmnEjXlEWx5MkAp7bw=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <script src=\"../js/ajax.js\"></script>
    
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Acme&display=swap\" rel=\"stylesheet\">


    <link href=\"../css/navBar.css\" rel=\"stylesheet\" />
    <link rel=\"shortcut icon\" href=\"../img/logotipo.png\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js\" integrity=\"sha256-rPPF6R+AH/Gilj2aC00ZAuB2EKmnEjXlEWx5MkAp7bw=\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@700&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    ";
        // line 43
        echo "
    <script>
        \$(document).ready(function() {

            const valores = window.location.search;
            console.log(valores);
            const urlParams = new URLSearchParams(valores);
            var mensaje = urlParams.get(0);
            console.log(mensaje);

            if (mensaje) {
                \$(\"#texto\").text(mensaje);
                \$(\"#Modal\").modal(\"show\");
            }
        });

    </script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 154,  321 => 43,  319 => 42,  309 => 41,  271 => 11,  269 => 10,  259 => 9,  240 => 6,  184 => 155,  182 => 154,  156 => 130,  148 => 124,  138 => 116,  136 => 115,  127 => 108,  122 => 106,  117 => 105,  115 => 104,  106 => 97,  93 => 86,  91 => 85,  66 => 62,  64 => 41,  61 => 40,  58 => 9,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
    {% block stylesheets %}
    {#{{ encore_entry_link_tags('app') }}#}

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Acme&display=swap\" rel=\"stylesheet\">


    <link href=\"../css/navBar.css\" rel=\"stylesheet\" />
    <link rel=\"shortcut icon\" href=\"../img/logotipo.png\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js\" integrity=\"sha256-rPPF6R+AH/Gilj2aC00ZAuB2EKmnEjXlEWx5MkAp7bw=\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@700&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">

    {% endblock %}

    {% block javascripts %}
    {#{{ encore_entry_script_tags('app') }}#}

    <script>
        \$(document).ready(function() {

            const valores = window.location.search;
            console.log(valores);
            const urlParams = new URLSearchParams(valores);
            var mensaje = urlParams.get(0);
            console.log(mensaje);

            if (mensaje) {
                \$(\"#texto\").text(mensaje);
                \$(\"#Modal\").modal(\"show\");
            }
        });

    </script>

    {% endblock %}


</head>

<body>

    <nav class=\"navbar navbar-expand-lg fixed-top second-navbar  \">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"../../\">
                <img src=\"../../img/logotipo.png\" width=\"90\" height=\"60\" alt=\"\">
            </a>
        </div>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <i class=\"fas fa-align-justify\"></i>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <ul class=\"navbar-nav ms-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../\">Inicio</a>
                </li>
                {% if is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\">
                        Admin
                    </a>
                    <ul class=\" dropdown-menu dropdown-menu dropdown-menu-start\">
                        <li><button class=\"dropdown-item\" type=\"button\" onclick='location=\"../../campers/new\"'>Crear camper</button></li>
                        <li><button class=\"dropdown-item\" type=\"button\" onclick='location=\"../../rute/new\"'>Crear ruta</button></li>
                        <li><button class=\"dropdown-item\" type=\"button\" onclick='location=\"../../user\"'>Generar informes</button></li>
                    </ul>
                </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../listCampers\">Campers</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\">
                        Perfil
                    </a>
                    <ul class=\" dropdown-menu dropdown-menu dropdown-menu-start\">{% if app.user %}
                        <li><button class=\"dropdown-item\" type=\"button\" onclick=\"location='../../user/{{app.user.id}}'\">Ver Perfil</button></li>
                        <li><button class=\"dropdown-item\" type=\"button\" onclick=\"location='../../user/{{app.user.id}}/edit'\">Editar información</button></li>
                        {% endif %}
                    </ul>

                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../listRoutes\">Rutas</a>
                </li>
                {% if not app.user %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../login\">Login</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../register\">Registro</a>
                </li>
                {% else %}

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../logout\">Salir</a>
                </li>

                {% endif %}
            </ul>
        </div>
    </nav>



    <!-- Modal -->
    <div class=\"modal fade\" id=\"Modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">¡Advertencia!</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p id=\"texto\"></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    {% block body %}{% endblock %}

    <nav class=\"navbar sticky-buttom\">

        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center d-flex align-items-center justify-content-center flex-column\">
            <div class=\"col-lg-12\">
                <p class=\"copyright\">Copyright &copy;Travel Campers</p>
            </div>
        </div>
        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center d-flex align-items-center justify-content-center flex-column\">
            <h5 class=\"mr-lg-2 d-flex align-items-center\">
                <i class=\"fas fa-lock\" width=\"24\" height=\"24\"></i>
                Pago seguro
            </h5>
            <div class=\"d-flex flex-row flex-wrap align-items-center justify-content-center\">
                <i class=\"fab fa-cc-visa\"></i>
                <i class=\"fab fa-cc-mastercard\"></i>
                <i class=\"fab fa-cc-paypal\"></i>
            </div>
        </div>
        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center d-flex align-items-center justify-content-center\">
            <a class=\"navbar-brand\" href=\"https://indiecampers.es/privacidad\" target=\"_blank\">
                <p>Privacidad</p>
            </a>
            <a class=\"navbar-brand\" href=\"https://indiecampers.es/terminos-y-condiciones\" target=\"_blank\">
                <p>Términos y Condiciones</p>
            </a>
            <a class=\"navbar-brand\" href=\"https://www.facebook.com/TheFeatherVanExperience/\" target=\"_blank\">
                <img src=\"../../img/facebook.png\" width=\"10\" alt=\"Logo de facebook\">
            </a>
            <a class=\"navbar-brand\" href=\"https://www.instagram.com/thefeathervan/?hl=es\" target=\"_blank\">
                <img src=\"../../img/instagram.png\" width=\"20\" alt=\"Logo de instagram\">
            </a>

        </div>
    </nav>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js\" integrity=\"sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js\" integrity=\"sha256-rPPF6R+AH/Gilj2aC00ZAuB2EKmnEjXlEWx5MkAp7bw=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <script src=\"../js/ajax.js\"></script>
    
</body>

</html>
", "base.html.twig", "C:\\xampp\\htdocs\\cp1\\templates\\base.html.twig");
    }
}

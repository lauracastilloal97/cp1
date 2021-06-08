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

/* user_data/show.html.twig */
class __TwigTemplate_e59cf4f31eb647b2bc1f8ca97ab57c27ead4e66bd257f4cb814df1de07ce9079 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_data/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_data/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_data/show.html.twig", 1);
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

        echo "Perfil";
        
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
<link href=\"/css/estiloPerfil.css\" rel=\"stylesheet\" />
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->
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
<div class=\"container emp-profile\">
    <form method=\"post\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"profile-img\">
                    <img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"Avatar\" />
                    <div class=\"file btn btn-lg btn-primary\">
                        Cambiar foto
                        <input type=\"file\" name=\"file\" />
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"profile-head\">
                    <h5>
                        Usuario
                    </h5><br>
                    <h6>
                        ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "userData", [], "any", false, false, false, 33), "email", [], "any", false, false, false, 33), "html", null, true);
        echo "
                    </h6>
                    <p class=\"proile-rating\"></p><br>
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Perfil</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2\">
                <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_data_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\" class=\"profile-edit-a\" name=\"btnAddMore\">Editar</a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"tab-content profile-tab\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Id Usuario</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Nombre</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Apellidos</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 72, $this->source); })()), "fistname", [], "any", false, false, false, 72), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 72, $this->source); })()), "lastname", [], "any", false, false, false, 72), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Dni</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 80, $this->source); })()), "dni", [], "any", false, false, false, 80), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Cumpleaños</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 88
        ((twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 88, $this->source); })()), "birthdate", [], "any", false, false, false, 88)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 88, $this->source); })()), "birthdate", [], "any", false, false, false, 88), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Genero</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 96, $this->source); })()), "genre", [], "any", false, false, false, 96), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Ciudad</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 104, $this->source); })()), "city", [], "any", false, false, false, 104), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Código Postal</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 112, $this->source); })()), "cp", [], "any", false, false, false, 112), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                                                <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Teléfono</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 120, $this->source); })()), "phoneNumber", [], "any", false, false, false, 120), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user_data/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 120,  245 => 112,  234 => 104,  223 => 96,  212 => 88,  201 => 80,  188 => 72,  177 => 64,  166 => 56,  151 => 44,  137 => 33,  116 => 14,  106 => 13,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Perfil{% endblock %}
{% block stylesheets %}
{{ parent() }}
<link href=\"/css/estiloPerfil.css\" rel=\"stylesheet\" />
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->
{% endblock %}

{% block body %}

<div class=\"container emp-profile\">
    <form method=\"post\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"profile-img\">
                    <img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"Avatar\" />
                    <div class=\"file btn btn-lg btn-primary\">
                        Cambiar foto
                        <input type=\"file\" name=\"file\" />
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"profile-head\">
                    <h5>
                        Usuario
                    </h5><br>
                    <h6>
                        {{ user.userData.email }}
                    </h6>
                    <p class=\"proile-rating\"></p><br>
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Perfil</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2\">
                <a href=\"{{ path('user_data_edit', {'id': user_datum.id}) }}\" class=\"profile-edit-a\" name=\"btnAddMore\">Editar</a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"tab-content profile-tab\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Id Usuario</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ user_datum.id }}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Nombre</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ user_datum.name }}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Apellidos</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ user_datum.fistname }} {{ user_datum.lastname }}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Dni</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ user_datum.dni }}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Cumpleaños</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ user_datum.birthdate ? user_datum.birthdate|date('Y-m-d') : '' }}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Genero</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ user_datum.genre }}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Ciudad</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ user_datum.city }}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Código Postal</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ user_datum.cp }}</p>
                            </div>
                        </div>
                                                <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Teléfono</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ user_datum.phoneNumber }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
{% endblock %}
", "user_data/show.html.twig", "C:\\Users\\laura\\campers\\templates\\user_data\\show.html.twig");
    }
}

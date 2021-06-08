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

/* user_data/prueba.html.twig */
class __TwigTemplate_70051b1867337960f6de2cc7845422ecdd3a3be0b5eb04e75a5f83af8b796a24 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_data/prueba.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_data/prueba.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_data/prueba.html.twig", 1);
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

        echo "UserData";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container emp-profile\">
            <form method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"profile-img\">
                            <img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"Avatar\"/>
                            <div class=\"file btn btn-lg btn-primary\">
                                Cambiar foto
                                <input type=\"file\" name=\"file\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"profile-head\">
                                    <h5>
                                        Kshiti Ghelani
                                    </h5><br>
                                    <h6>
                                        Web Developer and Designer
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
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
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
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Email</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Roles</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 64
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "roles", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "roles", [], "any", false, false, false, 64)), "html", null, true))) : (print ("")));
        echo "</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    <h1>UserData</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 83, $this->source); })()), "name", [], "any", false, false, false, 83), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 87, $this->source); })()), "fistname", [], "any", false, false, false, 87), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 91, $this->source); })()), "lastname", [], "any", false, false, false, 91), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dni</th>
                <td>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 95, $this->source); })()), "dni", [], "any", false, false, false, 95), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cumpleaños</th>
                <td>";
        // line 99
        ((twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 99, $this->source); })()), "birthdate", [], "any", false, false, false, 99)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 99, $this->source); })()), "birthdate", [], "any", false, false, false, 99), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Genero</th>
                <td>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 103, $this->source); })()), "genre", [], "any", false, false, false, 103), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ciudad</th>
                <td>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 107, $this->source); })()), "city", [], "any", false, false, false, 107), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cp</th>
                <td>";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 111, $this->source); })()), "cp", [], "any", false, false, false, 111), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 115, $this->source); })()), "phoneNumber", [], "any", false, false, false, 115), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


    <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_data_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 123
        echo twig_include($this->env, $context, "user_data/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user_data/prueba.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 123,  247 => 121,  238 => 115,  231 => 111,  224 => 107,  217 => 103,  210 => 99,  203 => 95,  196 => 91,  189 => 87,  182 => 83,  175 => 79,  157 => 64,  146 => 56,  135 => 48,  120 => 36,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}UserData{% endblock %}

{% block body %}

<div class=\"container emp-profile\">
            <form method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"profile-img\">
                            <img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"Avatar\"/>
                            <div class=\"file btn btn-lg btn-primary\">
                                Cambiar foto
                                <input type=\"file\" name=\"file\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"profile-head\">
                                    <h5>
                                        Kshiti Ghelani
                                    </h5><br>
                                    <h6>
                                        Web Developer and Designer
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
                        <a href=\"{{ path('user_edit', {'id': user.id}) }}\" class=\"profile-edit-a\" name=\"btnAddMore\">Editar</a>
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
                                                <p>{{ user.id }}</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Email</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>{{ user.email }}</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Roles</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>{{ user.roles ? user.roles|json_encode : '' }}</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    <h1>UserData</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user_datum.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ user_datum.name }}</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>{{ user_datum.fistname }}</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>{{ user_datum.lastname }}</td>
            </tr>
            <tr>
                <th>Dni</th>
                <td>{{ user_datum.dni }}</td>
            </tr>
            <tr>
                <th>Cumpleaños</th>
                <td>{{ user_datum.birthdate ? user_datum.birthdate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Genero</th>
                <td>{{ user_datum.genre }}</td>
            </tr>
            <tr>
                <th>Ciudad</th>
                <td>{{ user_datum.city }}</td>
            </tr>
            <tr>
                <th>Cp</th>
                <td>{{ user_datum.cp }}</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>{{ user_datum.phoneNumber }}</td>
            </tr>
        </tbody>
    </table>


    <a href=\"{{ path('user_data_edit', {'id': user_datum.id}) }}\">edit</a>

    {{ include('user_data/_delete_form.html.twig') }}
{% endblock %}
", "user_data/prueba.html.twig", "C:\\Users\\laura\\campers\\templates\\user_data\\prueba.html.twig");
    }
}

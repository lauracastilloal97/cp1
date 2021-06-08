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
class __TwigTemplate_df55da744b5893a30ed38e3d554d97251786257b4435587ad38ef9654bf4e30b extends Template
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
        echo "    <h1>UserData</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Avatar</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 12, $this->source); })()), "avatar", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fistname</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 24, $this->source); })()), "fistname", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 28, $this->source); })()), "lastname", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dni</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 32, $this->source); })()), "dni", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 36, $this->source); })()), "birthdate", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 36, $this->source); })()), "birthdate", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 40, $this->source); })()), "genre", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 44, $this->source); })()), "city", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cp</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 48, $this->source); })()), "cp", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PhoneNumber</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_datum"]) || array_key_exists("user_datum", $context) ? $context["user_datum"] : (function () { throw new RuntimeError('Variable "user_datum" does not exist.', 52, $this->source); })()), "phoneNumber", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


    ";
        // line 58
        echo twig_include($this->env, $context, "user_data/_delete_form.html.twig");
        echo "
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
        return array (  175 => 58,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}UserData{% endblock %}

{% block body %}
    <h1>UserData</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Avatar</th>
                <td>{{ user_datum.avatar }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ user_datum.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ user_datum.name }}</td>
            </tr>
            <tr>
                <th>Fistname</th>
                <td>{{ user_datum.fistname }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ user_datum.lastname }}</td>
            </tr>
            <tr>
                <th>Dni</th>
                <td>{{ user_datum.dni }}</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>{{ user_datum.birthdate ? user_datum.birthdate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>{{ user_datum.genre }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ user_datum.city }}</td>
            </tr>
            <tr>
                <th>Cp</th>
                <td>{{ user_datum.cp }}</td>
            </tr>
            <tr>
                <th>PhoneNumber</th>
                <td>{{ user_datum.phoneNumber }}</td>
            </tr>
        </tbody>
    </table>


    {{ include('user_data/_delete_form.html.twig') }}
{% endblock %}
", "user_data/show.html.twig", "C:\\Users\\laura\\campers\\templates\\user_data\\show.html.twig");
    }
}

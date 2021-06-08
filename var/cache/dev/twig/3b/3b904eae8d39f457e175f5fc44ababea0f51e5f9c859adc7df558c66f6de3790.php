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

/* user_data/index.html.twig */
class __TwigTemplate_036974c2ebeb4780f7a3cac120d01ed8d09390e5decba45f462c27ba3ce00942 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_data/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_data/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_data/index.html.twig", 1);
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

        echo "Generar Informes";
        
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
        echo "    <div style=\"text-align: center\">
         <h1>Lista de Usuarios</h1><br>

        <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_data_index");
        echo "\" method=\"get\">
        <input type=\"text\" name=\"busqueda\">
        <input type=\"submit\" value=\"Buscar\">
        <button style=\"margin-left: 2px\" onclick=\"location='";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_data_index");
        echo "'\" name=\"mostrartodo\">Mostrar todos</button>
        </form><br>
        <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_data_index");
        echo "\" method=\"get\">
        <input type=\"submit\" value=\"Generar informe\" name=\"informe\"><br><br>
        <input type=\"hidden\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["busqueda"]) || array_key_exists("busqueda", $context) ? $context["busqueda"] : (function () { throw new RuntimeError('Variable "busqueda" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" name=\"busqueda\">
        </form>

    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Dni</th>
                <th>Cumpleaños</th>
                <th>Genero</th>
                <th>Ciudad</th>
                <th>Código Postal</th>
                <th>Teléfono</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user_datas"]) || array_key_exists("user_datas", $context) ? $context["user_datas"] : (function () { throw new RuntimeError('Variable "user_datas" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user_datum"]) {
            // line 38
            echo "            <tr>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_datum"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_datum"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_datum"], "fistname", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_datum"], "lastname", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_datum"], "dni", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["user_datum"], "birthdate", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_datum"], "birthdate", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_datum"], "genre", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_datum"], "city", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_datum"], "cp", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_datum"], "phoneNumber", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>

            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "            <tr>
                <td colspan=\"11\">No se han encontrado resultados</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_datum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user_data/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 56,  186 => 52,  177 => 48,  173 => 47,  169 => 46,  165 => 45,  161 => 44,  157 => 43,  153 => 42,  149 => 41,  145 => 40,  141 => 39,  138 => 38,  133 => 37,  109 => 16,  104 => 14,  99 => 12,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Generar Informes{% endblock %}

{% block body %}
    <div style=\"text-align: center\">
         <h1>Lista de Usuarios</h1><br>

        <form action=\"{{ path('user_data_index')}}\" method=\"get\">
        <input type=\"text\" name=\"busqueda\">
        <input type=\"submit\" value=\"Buscar\">
        <button style=\"margin-left: 2px\" onclick=\"location='{{path('user_data_index')}}'\" name=\"mostrartodo\">Mostrar todos</button>
        </form><br>
        <form action=\"{{ path('user_data_index')}}\" method=\"get\">
        <input type=\"submit\" value=\"Generar informe\" name=\"informe\"><br><br>
        <input type=\"hidden\" value=\"{{busqueda}}\" name=\"busqueda\">
        </form>

    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Dni</th>
                <th>Cumpleaños</th>
                <th>Genero</th>
                <th>Ciudad</th>
                <th>Código Postal</th>
                <th>Teléfono</th>

            </tr>
        </thead>
        <tbody>
        {% for user_datum in user_datas %}
            <tr>
                <td>{{ user_datum.id }}</td>
                <td>{{ user_datum.name }}</td>
                <td>{{ user_datum.fistname }}</td>
                <td>{{ user_datum.lastname }}</td>
                <td>{{ user_datum.dni }}</td>
                <td>{{ user_datum.birthdate ? user_datum.birthdate|date('Y-m-d') : '' }}</td>
                <td>{{ user_datum.genre }}</td>
                <td>{{ user_datum.city }}</td>
                <td>{{ user_datum.cp }}</td>
                <td>{{ user_datum.phoneNumber }}</td>

            </tr>
        {% else %}
            <tr>
                <td colspan=\"11\">No se han encontrado resultados</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "user_data/index.html.twig", "C:\\Users\\laura\\campers\\templates\\user_data\\index.html.twig");
    }
}

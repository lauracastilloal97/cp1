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

/* user_data/_form.html.twig */
class __TwigTemplate_b374e181cbe9ece8646c9a653fc5aae6b2865cbb798455260597f807f0a515b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_data/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_data/_form.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "<div class=\"container\">
   <div class=\"formulario col-md-12\">
       ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
        ";
        // line 9
        echo "        <div>
            <img src=\"../../img/person-fill.svg\"><label><b>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), 'row', ["label" => "Nombre"]);
        echo "</b></label>
        </div>
        <div>
            <img src=\"../../img/person-fill.svg\"><label><b>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13), 'row', ["label" => "Primer Apellido"]);
        echo "</b></label>
        </div>
        <div>
            <img src=\"../../img/person-fill.svg\"><label><b> ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "lastname", [], "any", false, false, false, 16), 'row', ["label" => "Segundo Apellido"]);
        echo "</b></label>
        </div>
        <div>
            <img src=\"../../img/person-fill.svg\"><label><b>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "dni", [], "any", false, false, false, 19), 'row', ["label" => "DNI"]);
        echo "</b></label>
        </div>

        <div>
           <img src=\"../../img/calendar.svg\"><label><b>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "birthdate", [], "any", false, false, false, 23), 'row', ["label" => "Fecha de Nacimiento"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/person-fill.svg\"><label><b>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "genre", [], "any", false, false, false, 26), 'row', ["label" => "Género"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "street", [], "any", false, false, false, 29), 'row', ["label" => "Calle"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "number", [], "any", false, false, false, 32), 'row', ["label" => "Número"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "floor", [], "any", false, false, false, 35), 'row', ["label" => "Piso"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "city", [], "any", false, false, false, 38), 'row', ["label" => "Ciudad"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "province", [], "any", false, false, false, 41), 'row', ["label" => "Provincia"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "cp", [], "any", false, false, false, 44), 'row', ["label" => "Código postal"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/telephone-fill.svg\"><label><b>";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "phoneNumber", [], "any", false, false, false, 47), 'row', ["label" => "Telefono móvil"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/telephone-fill.svg\"><label><b>";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "landLine", [], "any", false, false, false, 50), 'row', ["label" => "Telefono fijo"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/at.svg\"><label><b>";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "web", [], "any", false, false, false, 53), 'row', ["label" => "Web"]);
        echo "</b></label>
        </div>
         <div>
             <img src=\"../../img/at.svg\"><label><b>Email</b><input type=\"text\" name=\"email\" class=\"form-control\"placeholder=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), "html", null, true);
        echo "\"></label>
        </div>
        <div>
         <img src=\"../../img/calendar.svg\" class=\"calendario\"><label> <img src=\"../../img/controller.svg\"><b>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "platformGame", [], "any", false, false, false, 59), 'row', ["label" => "Plataformas de Videojuegos"]);
        echo "</b></label>
        </div>
        <div>
         <img src=\"../../img/calendar.svg\" class=\"calendario\"><label> <img src=\"../../img/controller.svg\"><b>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "gameType", [], "any", false, false, false, 62), 'row', ["label" => "Tipo de juego"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/twitter.svg\"><label><b>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "twitter", [], "any", false, false, false, 65), 'row', ["label" => "Twitter"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/facebook.svg\"><label><b>";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "facebook", [], "any", false, false, false, 68), 'row', ["label" => "Facebook"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/instagram.svg\"><label><b>";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "instagram", [], "any", false, false, false, 71), 'row', ["label" => "Instagram"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/youtube.svg\"><label><b>";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "youtube", [], "any", false, false, false, 74), 'row', ["label" => "Youtube"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/twitch.svg\"><label><b>";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "twitch", [], "any", false, false, false, 77), 'row', ["label" => "Twitch"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "psn", [], "any", false, false, false, 80), 'row', ["label" => "Psn"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "steam", [], "any", false, false, false, 83), 'row', ["label" => "Steam"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "nintendoNetwork", [], "any", false, false, false, 86), 'row', ["label" => "Nintendo Network"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "xboxLive", [], "any", false, false, false, 89), 'row', ["label" => "Xbox Live"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "epicGames", [], "any", false, false, false, 92), 'row', ["label" => "Epic Games"]);
        echo "</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "nickname", [], "any", false, false, false, 95), 'row', ["label" => "Nick"]);
        echo "</b></label>
        </div>
        <div>
        <button class=\"btn\">";
        // line 98
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 98, $this->source); })()), "Actualizar")) : ("Actualizar")), "html", null, true);
        echo "</button>
    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        echo "
        <button class=\"btn\" onclick=\"location='../../'\">Volver a la página principal</button>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "        
        <link href=\"../../css/userData.css\"rel=\"stylesheet\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user_data/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 2,  252 => 1,  236 => 99,  232 => 98,  226 => 95,  220 => 92,  214 => 89,  208 => 86,  202 => 83,  196 => 80,  190 => 77,  184 => 74,  178 => 71,  172 => 68,  166 => 65,  160 => 62,  154 => 59,  148 => 56,  142 => 53,  136 => 50,  130 => 47,  124 => 44,  118 => 41,  112 => 38,  106 => 35,  100 => 32,  94 => 29,  88 => 26,  82 => 23,  75 => 19,  69 => 16,  63 => 13,  57 => 10,  54 => 9,  50 => 7,  46 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
        
        <link href=\"../../css/userData.css\"rel=\"stylesheet\"/>
{% endblock %}
<div class=\"container\">
   <div class=\"formulario col-md-12\">
       {{ form_start(form) }}
        {# {{ form_widget(form) }} #}
        <div>
            <img src=\"../../img/person-fill.svg\"><label><b>{{ form_row(form.name, {\"label\": \"Nombre\"})}}</b></label>
        </div>
        <div>
            <img src=\"../../img/person-fill.svg\"><label><b>{{ form_row(form.firstname, {\"label\": \"Primer Apellido\"})}}</b></label>
        </div>
        <div>
            <img src=\"../../img/person-fill.svg\"><label><b> {{ form_row(form.lastname, {\"label\": \"Segundo Apellido\"})}}</b></label>
        </div>
        <div>
            <img src=\"../../img/person-fill.svg\"><label><b>{{ form_row(form.dni, {\"label\": \"DNI\"})}}</b></label>
        </div>

        <div>
           <img src=\"../../img/calendar.svg\"><label><b>{{ form_row(form.birthdate, {\"label\": \"Fecha de Nacimiento\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/person-fill.svg\"><label><b>{{ form_row(form.genre, {\"label\": \"Género\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>{{ form_row(form.street, {\"label\": \"Calle\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>{{ form_row(form.number, {\"label\": \"Número\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>{{ form_row(form.floor, {\"label\": \"Piso\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>{{ form_row(form.city, {\"label\": \"Ciudad\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>{{ form_row(form.province, {\"label\": \"Provincia\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/house-fill.svg\"><label><b>{{ form_row(form.cp, {\"label\": \"Código postal\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/telephone-fill.svg\"><label><b>{{ form_row(form.phoneNumber, {\"label\": \"Telefono móvil\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/telephone-fill.svg\"><label><b>{{ form_row(form.landLine, {\"label\": \"Telefono fijo\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/at.svg\"><label><b>{{ form_row(form.web, {\"label\": \"Web\"})}}</b></label>
        </div>
         <div>
             <img src=\"../../img/at.svg\"><label><b>Email</b><input type=\"text\" name=\"email\" class=\"form-control\"placeholder=\"{{user.email}}\"></label>
        </div>
        <div>
         <img src=\"../../img/calendar.svg\" class=\"calendario\"><label> <img src=\"../../img/controller.svg\"><b>{{ form_row(form.platformGame, {\"label\": \"Plataformas de Videojuegos\"})}}</b></label>
        </div>
        <div>
         <img src=\"../../img/calendar.svg\" class=\"calendario\"><label> <img src=\"../../img/controller.svg\"><b>{{ form_row(form.gameType, {\"label\": \"Tipo de juego\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/twitter.svg\"><label><b>{{ form_row(form.twitter, {\"label\": \"Twitter\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/facebook.svg\"><label><b>{{ form_row(form.facebook, {\"label\": \"Facebook\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/instagram.svg\"><label><b>{{ form_row(form.instagram, {\"label\": \"Instagram\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/youtube.svg\"><label><b>{{ form_row(form.youtube, {\"label\": \"Youtube\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/twitch.svg\"><label><b>{{ form_row(form.twitch, {\"label\": \"Twitch\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>{{ form_row(form.psn, {\"label\": \"Psn\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>{{ form_row(form.steam, {\"label\": \"Steam\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>{{ form_row(form.nintendoNetwork, {\"label\": \"Nintendo Network\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>{{ form_row(form.xboxLive, {\"label\": \"Xbox Live\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>{{ form_row(form.epicGames, {\"label\": \"Epic Games\"})}}</b></label>
        </div>
        <div>
           <img src=\"../../img/controller.svg\"><label><b>{{ form_row(form.nickname, {\"label\": \"Nick\"})}}</b></label>
        </div>
        <div>
        <button class=\"btn\">{{ button_label|default('Actualizar') }}</button>
    {{ form_end(form) }}
        <button class=\"btn\" onclick=\"location='../../'\">Volver a la página principal</button>
        </div>
    </div>
</div>
", "user_data/_form.html.twig", "C:\\Users\\laura\\campers\\templates\\user_data\\_form.html.twig");
    }
}

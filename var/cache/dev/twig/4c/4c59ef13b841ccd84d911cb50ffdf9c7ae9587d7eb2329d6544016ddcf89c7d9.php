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

/* reserva/_form.html.twig */
class __TwigTemplate_15e685b9ed9e12d4b0e0d2d29c3902ab7a7de2b972ce5ca6dbff7169b74ba648 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/_form.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link href=\"../css/nuevaReserva.css\" rel=\"stylesheet\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <script>





        window.onload = () =>{

            var calendarioElt = document.getElementById(\"calendario\");

            var calendario = new FullCalendar.Calendar(calendarioElt,{


                initialView: \"dayGridMonth\",
                locale: \"es\",
                timeZone: \"Europe/Madrid\",
                headerToolbar:{

                    start: \"prev, next today\",
                    end: \"title\"
                },

                events:[

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reserva"]) || array_key_exists("reserva", $context) ? $context["reserva"] : (function () { throw new RuntimeError('Variable "reserva" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["events"]) {
            // line 34
            echo "                  {
                    id: '";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["events"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "',
                    start: '";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["events"], "fecha", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true);
            echo "',
                    display: 'list-item',
                    },

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['events'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
            ],

                eventColor: 'white',
                eventTextColor:\"black\",
                eventBorderColor:\"black\",
                eventClick: function(info) {

                    location.href=\"../events/\"+info.event.id;
                },

                eventDidMount: function(info){


                    if(info.event.extendedProps.highlight == 1){

                        info.el.style.backgroundColor = '#00D2B3';
                        info.el.style.textColor = \"white\";

                    }

                },


            })

            calendario.render();


        }
    </script>
";
        // line 72
        if (((array_key_exists("info", $context)) ? (_twig_default_filter((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 72, $this->source); })()))) : (""))) {
            // line 73
            echo "    <p style=\"box-shadow: 0px 14px 32px 0px rgba(179,111,162,0.5); width: 50%;margin: 0 auto; text-align: center; background-color: #b36fa2; color: white;\">";
            echo twig_escape_filter($this->env, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 73, $this->source); })()), "html", null, true);
            echo "</p><br>
";
        }
        // line 75
        echo "<div class=\"container\">
    <div class=\"formulario col-md-12\">

        ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_start');
        echo "
        <br>
        <div>
            <img src=\"../img/calendar.png\"><label><b>";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "fecha", [], "any", false, false, false, 81), 'row', ["label" => "Entrada"]);
        echo "</b></label>
        </div>
        <div>
            <label><b>";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "campers", [], "any", false, false, false, 84), 'row', ["label" => "Campers"]);
        echo "</b></label>
        </div><br>
    </div>
</div>
<div class=\"botones\">
    <button class=\"btn\">";
        // line 89
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 89, $this->source); })()), "Buscar")) : ("Buscar")), "html", null, true);
        echo "</button>
</div>
";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reserva/_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  232 => 91,  227 => 89,  219 => 84,  213 => 81,  207 => 78,  202 => 75,  196 => 73,  194 => 72,  161 => 41,  150 => 36,  146 => 35,  143 => 34,  139 => 33,  112 => 8,  102 => 7,  91 => 3,  81 => 2,  70 => 5,  68 => 2,  58 => 1,  48 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
{% block stylesheets %}
<link href=\"../css/nuevaReserva.css\" rel=\"stylesheet\" />
{% endblock %}

{% endblock %}
{% block body %}

    <script>





        window.onload = () =>{

            var calendarioElt = document.getElementById(\"calendario\");

            var calendario = new FullCalendar.Calendar(calendarioElt,{


                initialView: \"dayGridMonth\",
                locale: \"es\",
                timeZone: \"Europe/Madrid\",
                headerToolbar:{

                    start: \"prev, next today\",
                    end: \"title\"
                },

                events:[

            {% for events in reserva %}
                  {
                    id: '{{events.id}}',
                    start: '{{events.fecha|date(\"Y-m-d\")}}',
                    display: 'list-item',
                    },

            {% endfor %}

            ],

                eventColor: 'white',
                eventTextColor:\"black\",
                eventBorderColor:\"black\",
                eventClick: function(info) {

                    location.href=\"../events/\"+info.event.id;
                },

                eventDidMount: function(info){


                    if(info.event.extendedProps.highlight == 1){

                        info.el.style.backgroundColor = '#00D2B3';
                        info.el.style.textColor = \"white\";

                    }

                },


            })

            calendario.render();


        }
    </script>
{% if info|default %}
    <p style=\"box-shadow: 0px 14px 32px 0px rgba(179,111,162,0.5); width: 50%;margin: 0 auto; text-align: center; background-color: #b36fa2; color: white;\">{{info}}</p><br>
{% endif %}
<div class=\"container\">
    <div class=\"formulario col-md-12\">

        {{ form_start(form) }}
        <br>
        <div>
            <img src=\"../img/calendar.png\"><label><b>{{ form_row(form.fecha, {\"label\": \"Entrada\"})}}</b></label>
        </div>
        <div>
            <label><b>{{ form_row(form.campers, {\"label\": \"Campers\"})}}</b></label>
        </div><br>
    </div>
</div>
<div class=\"botones\">
    <button class=\"btn\">{{ button_label|default('Buscar') }}</button>
</div>
{{ form_end(form) }}
{% endblock %}
", "reserva/_form.html.twig", "C:\\Users\\laura\\campers\\templates\\reserva\\_form.html.twig");
    }
}

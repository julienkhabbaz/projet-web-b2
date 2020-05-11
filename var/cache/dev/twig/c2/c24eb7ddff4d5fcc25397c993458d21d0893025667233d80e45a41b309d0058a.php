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

/* front/restaurants.html.twig */
class __TwigTemplate_0a7131d0d4b299de0adf2e540147c537cc65d3fc10378336eed069a2ff5fa8e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/restaurants.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/restaurants.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/restaurants.html.twig", 1);
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
        echo "    <nav class=\"navbar navbar-expand-sm navbar-light bg-light\">
        <a href=\"#\" class=\"navbar-brand \" id=\"logo\">La Pizza</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"></span> </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\" >
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FrontController::FrontMenu"));
        // line 12
        echo "
        </div>
    </nav>
    <br><br>
    <br><br>
    <section style=\"width: 90%!important; margin: 0 auto;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"text-align: center; font-size: 35px; font-weight: bold; padding-bottom: 35px;\">
                    Nos restaurants
                </div>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Restaurants"]) || array_key_exists("Restaurants", $context) ? $context["Restaurants"] : (function () { throw new RuntimeError('Variable "Restaurants" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "                    <div class=\"col-md-3\" style=\"margin: 0 0 30px 0;\">
                        <div style=\"width: 100%; margin: 0 auto; background: white; border-radius: 5px; padding: 5px; border: 1px solid #333;\">
                            <div style=\"width: 96%; margin: 0 auto; padding: 5px 0 10px 0; font-size: 15px;\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
                            <div style=\"width: 96%; margin: 0 auto;\"><img style=\"padding: 5px; border-radius:5px; border: 1px solid #eaeaea; margin-bottom: 10px; width: 100%; height: 200px;\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["item"], "logo", [], "any", false, false, false, 27)), "html", null, true);
            echo "\" alt=\"Logo\"></div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>
        </div>
    </section>
    <br><br>
    <br><br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/restaurants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 31,  120 => 27,  116 => 26,  112 => 24,  108 => 23,  95 => 12,  93 => 10,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-expand-sm navbar-light bg-light\">
        <a href=\"#\" class=\"navbar-brand \" id=\"logo\">La Pizza</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"></span> </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\" >
            {{ render(controller(
                'App\\\\Controller\\\\FrontController::FrontMenu'
            )) }}
        </div>
    </nav>
    <br><br>
    <br><br>
    <section style=\"width: 90%!important; margin: 0 auto;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"text-align: center; font-size: 35px; font-weight: bold; padding-bottom: 35px;\">
                    Nos restaurants
                </div>
                {% for item in Restaurants %}
                    <div class=\"col-md-3\" style=\"margin: 0 0 30px 0;\">
                        <div style=\"width: 100%; margin: 0 auto; background: white; border-radius: 5px; padding: 5px; border: 1px solid #333;\">
                            <div style=\"width: 96%; margin: 0 auto; padding: 5px 0 10px 0; font-size: 15px;\">{{ item.name }}</div>
                            <div style=\"width: 96%; margin: 0 auto;\"><img style=\"padding: 5px; border-radius:5px; border: 1px solid #eaeaea; margin-bottom: 10px; width: 100%; height: 200px;\" src=\"{{ asset(item.logo) }}\" alt=\"Logo\"></div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
    <br><br>
    <br><br>

{% endblock %}", "front/restaurants.html.twig", "C:\\wamp64\\www\\la-pizza-v\\templates\\front\\restaurants.html.twig");
    }
}

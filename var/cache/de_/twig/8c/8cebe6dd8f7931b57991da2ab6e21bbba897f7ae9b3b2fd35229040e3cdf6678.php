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
class __TwigTemplate_a9f3a5bb5e1da83d3d13618d57ea59e5429b9b42691378a21fdd646859ada787 extends Template
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
        echo " 
    ";
        // line 47
        echo "

\t
\t<div class=\"container mt-4\">
\t<h1  style=\"text-align: center; font-size: 35px; font-weight: bold; padding-bottom: 35px\">Nos restaurants</h1>
\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 53
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 54
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t<div class=\"row\">
\t  

\t\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 61
            echo "\t\t<div class=\"col-md-4\">

\t\t\t<div class=\"card mb-4\">
\t\t";
            // line 64
            if (twig_get_attribute($this->env, $this->source, $context["restaurant"], "filename", [], "any", false, false, false, 64)) {
                // line 65
                echo "\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["restaurant"], "imageFile"), "thumb"), "html", null, true);
                echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
        ";
            } else {
                // line 67
                echo "\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/restaurants/empty.png", "thumb"), "html", null, true);
                echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
        ";
            }
            // line 69
            echo "\t<div class=\"card-body\">
\t\t<h5 class=\"card-title\">
\t\t\t<a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_restaurant", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "name", [], "any", false, false, false, 71), "html", null, true);
            echo "</a>
\t\t\t</a>
\t\t</h5>
\t\t<p class=\"card-text\">";
            // line 74
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "description", [], "any", false, false, false, 74), "html", null, true));
            echo "</p>
\t\t<p class=\"card-text\"></p>
\t\t<div class=\"text-primary\" style=\"font-size:2rem;font-weight:bold;\">
\t\t\t";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "adresse", [], "any", false, false, false, 77), "html", null, true);
            echo "

\t\t</div>


\t</div>
</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t</div>
\t<div class=\"pagination\">
\t</div>
</div>

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
        return array (  174 => 86,  159 => 77,  153 => 74,  145 => 71,  141 => 69,  135 => 67,  129 => 65,  127 => 64,  122 => 61,  118 => 60,  113 => 57,  104 => 54,  101 => 53,  97 => 52,  90 => 47,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
 
    {#<br><br>
    <br><br>
    <section style=\"width: 90%!important; margin: 0 auto;\">
        <div class=\"container\">
            <div class=\"row\">
\t\t\t      {% for message in app.flashes('success')  %}
                        <div class=\"alert alert-success\">
                            {{ message }}
                        </div>
                {% endfor %}
\t\t\t</div>\t\t\t\t
                <div class=\"col-md-12\" style=\"text-align: center; font-size: 35px; font-weight: bold; padding-bottom: 35px;\">
                    Nos restaurants
                </div>
    <div class=\"row flex\">
\t\t\t{% for restaurant in restaurants %}
\t\t<div class=\"col-3\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t{% if restaurant.filename %}
\t\t\t\t\t<img src=\"{{ vich_uploader_asset(restaurant,'imageFile') | imagine_filter('thumb') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
           \t\t\t {% else %}
\t\t\t\t\t<img src=\"{{ '/images/restaurants/empty.png' | imagine_filter('thumb') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
           \t\t\t {% endif %}\t
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t<a href=\"{{ path('detail_restaurant', {id: restaurant.id}) }}\">{{ restaurant.name }}</a>
\t\t\t\t\t</h5>
\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t</div>
\t
{% endfor %}
\t</div>
            </div>
        </div>
    </section>
    <br><br>
    <br><br>#}


\t
\t<div class=\"container mt-4\">
\t<h1  style=\"text-align: center; font-size: 35px; font-weight: bold; padding-bottom: 35px\">Nos restaurants</h1>
\t{% for message in app.flashes('success')  %}
                        <div class=\"alert alert-success\">
                            {{ message }}
                        </div>
                {% endfor %}
\t<div class=\"row\">
\t  

\t\t{% for restaurant in restaurants %}
\t\t<div class=\"col-md-4\">

\t\t\t<div class=\"card mb-4\">
\t\t{% if restaurant.filename %}
\t\t\t<img src=\"{{ vich_uploader_asset(restaurant,'imageFile') | imagine_filter('thumb') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
        {% else %}
\t\t\t<img src=\"{{ '/images/restaurants/empty.png' | imagine_filter('thumb') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
        {% endif %}
\t<div class=\"card-body\">
\t\t<h5 class=\"card-title\">
\t\t\t<a href=\"{{ path('detail_restaurant', {id: restaurant.id}) }}\">{{ restaurant.name }}</a>
\t\t\t</a>
\t\t</h5>
\t\t<p class=\"card-text\">{{ restaurant.description |nl2br }}</p>
\t\t<p class=\"card-text\"></p>
\t\t<div class=\"text-primary\" style=\"font-size:2rem;font-weight:bold;\">
\t\t\t{{ restaurant.adresse }}

\t\t</div>


\t</div>
</div>
\t\t</div>
\t\t{% endfor %}
\t</div>
\t<div class=\"pagination\">
\t</div>
</div>

{% endblock %}", "front/restaurants.html.twig", "C:\\Users\\Utilisateur\\OneDrive - Ynov\\Bureau\\livraison_repas_julien\\templates\\front\\restaurants.html.twig");
    }
}

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

/* front/show.html.twig */
class __TwigTemplate_b598d4a8fbb46a45113012ac464a2392e31a607281032ac49b9470f98f9161fa extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/show.html.twig", 2);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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

        echo "\t
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-lg-6\">

            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 10, $this->source); })()), "filename", [], "any", false, false, false, 10)) {
            // line 11
            echo "\t\t\t\t<img class=\"img-fluid\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 11, $this->source); })()), "imageFile"), "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\">
            ";
        } else {
            // line 13
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/restaurants/empty.png", "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
                ";
        }
        // line 15
        echo "            </div>
            <div class=\"col-sm-6\"><h1>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
                <p class=\"margin-top:0px\">Description: ";
        // line 17
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true));
        echo "</p>
                <p  style=\"margin-top:0px;\">Adresse: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 18, $this->source); })()), "adresse", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
            </div>
        
        </div>
\t\t<div class=\"row\">
        <table class=\"table tab-stripedble\">
        <h1>Plats </h1>
            <thead>
                <tr>
                <th></th>
                <th>Libele</th>
                <th>Description</th>
                <th>Prix</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 35, $this->source); })()), "plats", [], "any", false, false, false, 35));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 36
            echo "            <tr>
             ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["plat"], "filename", [], "any", false, false, false, 37)) {
                // line 38
                echo "\t\t\t\t<td style=\"vertical-align: left;\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["plat"], "imageFile"), "thumb"), "html", null, true);
                echo "\" alt=\"card-img-top\" style=\"width: 50; height:auto;\"></td>
                ";
            } else {
                // line 40
                echo "\t\t\t\t<td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/restaurants/empty.png", "thumb"), "html", null, true);
                echo "\" alt=\"Logo\" style=\"width: 50px; height:60px;\"></td>
                ";
            }
            // line 42
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libele", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 43), "html", null, true));
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "formattedPrice", [], "any", false, false, false, 44), "html", null, true);
            echo " €</td>
                <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commander", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-primary \"> Commander</a></td>
               
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "            <tr>
                <td colspan=\"5\">aucun plat trouve</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
\t\t\t
\t\t</div>
    </div>

  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 53,  183 => 49,  174 => 45,  170 => 44,  166 => 43,  161 => 42,  155 => 40,  149 => 38,  147 => 37,  144 => 36,  139 => 35,  119 => 18,  115 => 17,  111 => 16,  108 => 15,  102 => 13,  96 => 11,  94 => 10,  78 => 5,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
{% block title restaurant.name %}

{% block body %}\t
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-lg-6\">

            {% if restaurant.filename %}
\t\t\t\t<img class=\"img-fluid\" src=\"{{ vich_uploader_asset(restaurant,'imageFile') | imagine_filter('medium') }}\" alt=\"card-img-top\">
            {% else %}
\t\t\t\t<img src=\"{{ '/images/restaurants/empty.png' | imagine_filter('medium') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
                {% endif %}
            </div>
            <div class=\"col-sm-6\"><h1>{{restaurant.name}}</h1>
                <p class=\"margin-top:0px\">Description: {{restaurant.description | nl2br}}</p>
                <p  style=\"margin-top:0px;\">Adresse: {{restaurant.adresse}}</p>
            </div>
        
        </div>
\t\t<div class=\"row\">
        <table class=\"table tab-stripedble\">
        <h1>Plats </h1>
            <thead>
                <tr>
                <th></th>
                <th>Libele</th>
                <th>Description</th>
                <th>Prix</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for plat in restaurant.plats %}
            <tr>
             {% if plat.filename %}
\t\t\t\t<td style=\"vertical-align: left;\"><img src=\"{{ vich_uploader_asset(plat,'imageFile')  | imagine_filter('thumb')}}\" alt=\"card-img-top\" style=\"width: 50; height:auto;\"></td>
                {% else %}
\t\t\t\t<td><img src=\"{{ '/images/restaurants/empty.png' | imagine_filter('thumb') }}\" alt=\"Logo\" style=\"width: 50px; height:60px;\"></td>
                {% endif %}
                <td>{{ plat.libele }}</td>
                <td>{{ plat.description  | nl2br}}</td>
                <td>{{plat.formattedPrice}} €</td>
                <td><a href=\"{{ path('commander', {'id': plat.id}) }}\" class=\"btn btn-primary \"> Commander</a></td>
               
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">aucun plat trouve</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
\t\t\t
\t\t</div>
    </div>

  
{% endblock %}
", "front/show.html.twig", "C:\\Users\\Utilisateur\\OneDrive - Ynov\\Bureau\\livraison_repas_julien\\templates\\front\\show.html.twig");
    }
}

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

/* admin/index.html.twig */
class __TwigTemplate_67ae5d7b9cfd02f21feeb9888af26767d0dd464b7aec74cff6f30ddb18a1bef9 extends Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/index.html.twig", 1);
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

   <section id=\"main\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                     <div class=\"list-group\">
                        <h6 href=\"#\" class=\"list-group-item list-group-item-action active main-color-bg\"
                            style=\"text-align: center;background-color:#562d7b\">
                            Tableau de Bord
                        </h6>
                        <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_index");
        echo "\" class=\"list-group-item list-group-item-action\"><i
                                    class=\"entypo-layout\"></i> Restaurants <span
                                    class=\"badge\"> ";
        // line 18
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalRestaurant"]) || array_key_exists("totalRestaurant", $context) ? $context["totalRestaurant"] : (function () { throw new RuntimeError('Variable "totalRestaurant" does not exist.', 18, $this->source); })())), "html", null, true);
        echo "</span> </a>
                        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_index");
        echo "\" class=\"list-group-item list-group-item-action\"><i
                                    class=\"entypo-layout\"></i> Commandes en cours <span
                                    class=\"badge\"> ";
        // line 21
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["commandeEnCours"]) || array_key_exists("commandeEnCours", $context) ? $context["commandeEnCours"] : (function () { throw new RuntimeError('Variable "commandeEnCours" does not exist.', 21, $this->source); })())), "html", null, true);
        echo " </span></a>
                        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_index");
        echo "\" class=\"list-group-item list-group-item-action\"><i
                                    class=\"entypo-layout\"></i> Commandes Passe <span
                                    class=\"badge\">";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["commandePasse"]) || array_key_exists("commandePasse", $context) ? $context["commandePasse"] : (function () { throw new RuntimeError('Variable "commandePasse" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "</span></a>
                    </div>           
                </div>
        </div>
    </section>

    <div class=\"main-heading\" style=\"margin-top: 150px; text-align: center; height: 280px;\">
        <h1 style=\"font-family: 'Raleway SemiBold'\">Bienvenue dans la zone d'administration</h1>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 24,  117 => 22,  113 => 21,  108 => 19,  104 => 18,  99 => 16,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}{% endblock %}

{% block body %}


   <section id=\"main\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                     <div class=\"list-group\">
                        <h6 href=\"#\" class=\"list-group-item list-group-item-action active main-color-bg\"
                            style=\"text-align: center;background-color:#562d7b\">
                            Tableau de Bord
                        </h6>
                        <a href=\"{{ path('restaurant_index') }}\" class=\"list-group-item list-group-item-action\"><i
                                    class=\"entypo-layout\"></i> Restaurants <span
                                    class=\"badge\"> {{ totalRestaurant|number_format }}</span> </a>
                        <a href=\"{{ path('commande_index') }}\" class=\"list-group-item list-group-item-action\"><i
                                    class=\"entypo-layout\"></i> Commandes en cours <span
                                    class=\"badge\"> {{ commandeEnCours|number_format }} </span></a>
                        <a href=\"{{ path('commande_index') }}\" class=\"list-group-item list-group-item-action\"><i
                                    class=\"entypo-layout\"></i> Commandes Passe <span
                                    class=\"badge\">{{ commandePasse|number_format }}</span></a>
                    </div>           
                </div>
        </div>
    </section>

    <div class=\"main-heading\" style=\"margin-top: 150px; text-align: center; height: 280px;\">
        <h1 style=\"font-family: 'Raleway SemiBold'\">Bienvenue dans la zone d'administration</h1>
    </div>

{% endblock %}
", "admin/index.html.twig", "C:\\Users\\Utilisateur\\OneDrive - Ynov\\Bureau\\livraison_repas\\templates\\admin\\index.html.twig");
    }
}

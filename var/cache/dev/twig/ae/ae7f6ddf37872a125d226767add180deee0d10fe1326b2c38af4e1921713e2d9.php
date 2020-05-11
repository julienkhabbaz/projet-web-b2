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

/* restaurant/update.html.twig */
class __TwigTemplate_47927c3c45b1acad4fbcd0b934b7fc8417684c48033c601f1099c9a5478347e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/update.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "restaurant/update.html.twig", 1);
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

        echo " !";
        
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
        echo "    <center><h3>";
        echo twig_escape_filter($this->env, (isset($context["Error"]) || array_key_exists("Error", $context) ? $context["Error"] : (function () { throw new RuntimeError('Variable "Error" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h3></center>
    <center><h3>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["Success"]) || array_key_exists("Success", $context) ? $context["Success"] : (function () { throw new RuntimeError('Variable "Success" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h3></center>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_restaurant");
        echo "\" class=\"btn btn-primary\">Liste des restaurants</a> <br/>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-primary\" data-collapsed=\"0\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        Mettre à jour le restaurant
                    </div>
                    <div class=\"panel-options\"> <a href=\"#\" data-rel=\"collapse\"><i
                                    class=\"entypo-down-open\"></i></a> <a href=\"#\" data-rel=\"reload\"><i
                                    class=\"entypo-arrows-ccw\"></i></a> <a href=\"#\" data-rel=\"close\"><i
                                    class=\"entypo-cancel\"></i></a></div>
                </div>
                <div class=\"panel-body\">
                    <form action=\"\" method=\"post\" role=\"form\" enctype=\"multipart/form-data\" class=\"form-horizontal form-groups-bordered\">
                        <div class=\"form-group\">
                            <label for=\"field-1\" class=\"col-sm-3 control-label\">Nom</label>
                            <div class=\"col-sm-5\">
                                <input type=\"text\" required disabled name=\"name\"
                                       class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Restaurant"]) || array_key_exists("Restaurant", $context) ? $context["Restaurant"] : (function () { throw new RuntimeError('Variable "Restaurant" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "\" id=\"field-1\"
                                       placeholder=\"Placeholder(";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Restaurant"]) || array_key_exists("Restaurant", $context) ? $context["Restaurant"] : (function () { throw new RuntimeError('Variable "Restaurant" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
        echo ")\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"field-2\" class=\"col-sm-3 control-label\">Logo</label>
                            <div class=\"col-sm-5\">
                                <input type=\"file\" name=\"logo\"
                                       class=\"form-control\" id=\"field-2\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"field-3\" class=\"col-sm-3 control-label\">Email</label>
                            <div class=\"col-sm-5\">
                                <input type=\"text\" required value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Restaurant"]) || array_key_exists("Restaurant", $context) ? $context["Restaurant"] : (function () { throw new RuntimeError('Variable "Restaurant" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), "html", null, true);
        echo "\" name=\"email\"
                                       class=\"form-control\" id=\"field-3\"
                                       placeholder=\"Placeholder(Email)\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"field-4\" class=\"col-sm-3 control-label\">Adresse</label>
                            <div class=\"col-sm-5\">
                                <textarea name=\"address\" id=\"field-4\" placeholder=\"Placeholder(Adresse)\" required class=\"form-control\" cols=\"30\" rows=\"10\">";
        // line 49
        echo twig_get_attribute($this->env, $this->source, (isset($context["Restaurant"]) || array_key_exists("Restaurant", $context) ? $context["Restaurant"] : (function () { throw new RuntimeError('Variable "Restaurant" does not exist.', 49, $this->source); })()), "address", [], "any", false, false, false, 49);
        echo "</textarea>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-5\">
                                <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <br><br><br><br><br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  139 => 41,  123 => 28,  119 => 27,  97 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %} !{% endblock %}

{% block body %}
    <center><h3>{{ Error }}</h3></center>
    <center><h3>{{ Success }}</h3></center>
    <a href=\"{{ path('admin_restaurant') }}\" class=\"btn btn-primary\">Liste des restaurants</a> <br/>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-primary\" data-collapsed=\"0\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        Mettre à jour le restaurant
                    </div>
                    <div class=\"panel-options\"> <a href=\"#\" data-rel=\"collapse\"><i
                                    class=\"entypo-down-open\"></i></a> <a href=\"#\" data-rel=\"reload\"><i
                                    class=\"entypo-arrows-ccw\"></i></a> <a href=\"#\" data-rel=\"close\"><i
                                    class=\"entypo-cancel\"></i></a></div>
                </div>
                <div class=\"panel-body\">
                    <form action=\"\" method=\"post\" role=\"form\" enctype=\"multipart/form-data\" class=\"form-horizontal form-groups-bordered\">
                        <div class=\"form-group\">
                            <label for=\"field-1\" class=\"col-sm-3 control-label\">Nom</label>
                            <div class=\"col-sm-5\">
                                <input type=\"text\" required disabled name=\"name\"
                                       class=\"form-control\" value=\"{{ Restaurant.name }}\" id=\"field-1\"
                                       placeholder=\"Placeholder({{ Restaurant.name }})\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"field-2\" class=\"col-sm-3 control-label\">Logo</label>
                            <div class=\"col-sm-5\">
                                <input type=\"file\" name=\"logo\"
                                       class=\"form-control\" id=\"field-2\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"field-3\" class=\"col-sm-3 control-label\">Email</label>
                            <div class=\"col-sm-5\">
                                <input type=\"text\" required value=\"{{ Restaurant.email }}\" name=\"email\"
                                       class=\"form-control\" id=\"field-3\"
                                       placeholder=\"Placeholder(Email)\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"field-4\" class=\"col-sm-3 control-label\">Adresse</label>
                            <div class=\"col-sm-5\">
                                <textarea name=\"address\" id=\"field-4\" placeholder=\"Placeholder(Adresse)\" required class=\"form-control\" cols=\"30\" rows=\"10\">{{ Restaurant.address|raw }}</textarea>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-5\">
                                <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <br><br><br><br><br>

{% endblock %}
", "restaurant/update.html.twig", "C:\\wamp64\\www\\la-pizza-v\\templates\\restaurant\\update.html.twig");
    }
}

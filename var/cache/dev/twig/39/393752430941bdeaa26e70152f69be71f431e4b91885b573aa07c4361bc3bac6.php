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

/* front/register.html.twig */
class __TwigTemplate_5b384ab4b72bf2c580f225290c3e7b8b36a00e349354e24248fb81404a5deed4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/register.html.twig", 1);
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
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FrontController::FrontMenu"));
        // line 13
        echo "
        </div>
    </nav>
    ";
        // line 18
        echo "    <br><br><br>
    <section class=\"formContent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 offset-2\">
                    <h2>Adhérer maintenant</h2>
                    <div style=\"color: #333; font-size: 15px; text-align: center;\">
                        ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["Error"]) || array_key_exists("Error", $context) ? $context["Error"] : (function () { throw new RuntimeError('Variable "Error" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "
                        ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["Success"]) || array_key_exists("Success", $context) ? $context["Success"] : (function () { throw new RuntimeError('Variable "Success" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "
                    </div>
                    <form method=\"post\" action=\"\" enctype=\"multipart/form-data\">
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <label for=\"pic\">Sélectionnez le logo:</label>
                            <input type=\"file\" required name=\"pic\" class=\"form-control\" id=\"pic\">
                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <label for=\"name\">Nom:</label>
                            <input type=\"text\" required name=\"name\" class=\"form-control\" placeholder=\"Nom\" id=\"name\">
                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <label for=\"email\">Email:</label>
                            <input type=\"email\" required name=\"email\" class=\"form-control\" placeholder=\"Email\" id=\"email\">
                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <label for=\"pwd\">Mot de passe:</label>
                            <input type=\"password\" required name=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" id=\"pwd\">
                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <label for=\"address\">Adresse:</label>
                            <input type=\"text\" required name=\"address\" class=\"form-control\" placeholder=\"Adresse\" id=\"address\">
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-8 col-lg-8 offset-1\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class=\"col-md-5\"></div>
                <div class=\"col-ms-6 col-md-10 col-lg-12 offset-3\">
                    <p> Vous avez déjà un compte ? <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_login_action");
        echo "\">S'identifier</a></p>

                </div>

            </div>
        </div>
    </section>


    

    <div class=\"section rainbow\">
        <svg version=\"1.1\" viewBox=\"0 0 1440 335\">
            <g>
                <polygon fill=\"#FA0029\" points=\"0.2,218.7 503.7,174.6 0.2,0\"></polygon>
                <polygon fill=\"#FF5959\" points=\"0.2,207.7 0.2,275.2 503.7,174.6\"></polygon>
                <polygon fill=\"#FF9E16\" points=\"503.7,174.6 1440,259.9 1440,88\"></polygon>
                <polygon fill=\"#FFD700\" points=\"503.7,174.6 1440,88 1440,22.3\"></polygon>
                <polygon fill=\"#95D600\" points=\"0.2,320.1 0.2,333.5 218,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#00AC41\" points=\"0.2,271.2 0.2,320.1 503.7,174.6\"></polygon>
                <polygon fill=\"#7DCAEC\" points=\"968.4,333.5 1377,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#2F7DE1\" points=\"439.5,333.5 762.9,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#E2E71F\" points=\"184.8,333.5 148.8,333.5 439.5,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#2BACE4\" points=\"762.9,333.5 968.4,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#FF5000\" points=\"1377,333.5 1440,333.5 1440,252.9 503.7,174.6\"></polygon>
            </g>
        </svg>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  114 => 26,  110 => 25,  101 => 18,  96 => 13,  94 => 11,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
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
    {#<div class=\"spacing\">
    </div>#}
    <br><br><br>
    <section class=\"formContent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 offset-2\">
                    <h2>Adhérer maintenant</h2>
                    <div style=\"color: #333; font-size: 15px; text-align: center;\">
                        {{ Error }}
                        {{ Success }}
                    </div>
                    <form method=\"post\" action=\"\" enctype=\"multipart/form-data\">
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <label for=\"pic\">Sélectionnez le logo:</label>
                            <input type=\"file\" required name=\"pic\" class=\"form-control\" id=\"pic\">
                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <label for=\"name\">Nom:</label>
                            <input type=\"text\" required name=\"name\" class=\"form-control\" placeholder=\"Nom\" id=\"name\">
                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <label for=\"email\">Email:</label>
                            <input type=\"email\" required name=\"email\" class=\"form-control\" placeholder=\"Email\" id=\"email\">
                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <label for=\"pwd\">Mot de passe:</label>
                            <input type=\"password\" required name=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" id=\"pwd\">
                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <label for=\"address\">Adresse:</label>
                            <input type=\"text\" required name=\"address\" class=\"form-control\" placeholder=\"Adresse\" id=\"address\">
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-8 col-lg-8 offset-1\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class=\"col-md-5\"></div>
                <div class=\"col-ms-6 col-md-10 col-lg-12 offset-3\">
                    <p> Vous avez déjà un compte ? <a href=\"{{ path('user_login_action') }}\">S'identifier</a></p>

                </div>

            </div>
        </div>
    </section>


    

    <div class=\"section rainbow\">
        <svg version=\"1.1\" viewBox=\"0 0 1440 335\">
            <g>
                <polygon fill=\"#FA0029\" points=\"0.2,218.7 503.7,174.6 0.2,0\"></polygon>
                <polygon fill=\"#FF5959\" points=\"0.2,207.7 0.2,275.2 503.7,174.6\"></polygon>
                <polygon fill=\"#FF9E16\" points=\"503.7,174.6 1440,259.9 1440,88\"></polygon>
                <polygon fill=\"#FFD700\" points=\"503.7,174.6 1440,88 1440,22.3\"></polygon>
                <polygon fill=\"#95D600\" points=\"0.2,320.1 0.2,333.5 218,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#00AC41\" points=\"0.2,271.2 0.2,320.1 503.7,174.6\"></polygon>
                <polygon fill=\"#7DCAEC\" points=\"968.4,333.5 1377,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#2F7DE1\" points=\"439.5,333.5 762.9,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#E2E71F\" points=\"184.8,333.5 148.8,333.5 439.5,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#2BACE4\" points=\"762.9,333.5 968.4,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#FF5000\" points=\"1377,333.5 1440,333.5 1440,252.9 503.7,174.6\"></polygon>
            </g>
        </svg>
    </div>

{% endblock %}", "front/register.html.twig", "C:\\wamp64\\www\\la-pizza-v\\templates\\front\\register.html.twig");
    }
}

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

/* registration/register.html.twig */
class __TwigTemplate_b32d3aa557c887b1431b8ed89fe1fdbe437332a050826f2c3611750eed23eab8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
   
 <section class=\"formContent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 offset-2\">
                    <h2>Adhérer maintenant</h2>
                    <div style=\"color: #333; font-size: 15px; text-align: center;\">
                       ";
        // line 16
        echo "                    </div>
                    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
                       ";
        // line 22
        echo "                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                                 ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'row');
        echo "

                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'row');
        echo "

                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'row');
        echo "

                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "adresse_postal", [], "any", false, false, false, 35), 'row');
        echo "

                        </div>
                        
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), 'row');
        echo "

                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                                 ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "agreeTerms", [], "any", false, false, false, 44), 'row');
        echo "

                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-8 col-lg-8 offset-1\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>
                            </div>
                        </div>
                        ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), 'form_end');
        echo "


                </div>
                <div class=\"col-md-5\"></div>
                <div class=\"col-ms-6 col-md-10 col-lg-12 offset-3\">
                    <p> Vous avez déjà un compte ? <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
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
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 59,  155 => 53,  143 => 44,  136 => 40,  128 => 35,  121 => 31,  114 => 27,  107 => 23,  104 => 22,  100 => 17,  97 => 16,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
   
   
 <section class=\"formContent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 offset-2\">
                    <h2>Adhérer maintenant</h2>
                    <div style=\"color: #333; font-size: 15px; text-align: center;\">
                       {# {{ Error }}
                        {{ Success }}#}
                    </div>
                    {{ form_start(registrationForm) }}
                       {# <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <label for=\"pic\">Sélectionnez le logo:</label>
                            <input type=\"file\" required name=\"pic\" class=\"form-control\" id=\"pic\">
                        </div>#}
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                                 {{ form_row(registrationForm.nom) }}

                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                                {{ form_row(registrationForm.prenom) }}

                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                                {{ form_row(registrationForm.email) }}

                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            {{ form_row(registrationForm.adresse_postal) }}

                        </div>
                        
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                                {{ form_row(registrationForm.plainPassword) }}

                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                                 {{ form_row(registrationForm.agreeTerms) }}

                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-8 col-lg-8 offset-1\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>
                            </div>
                        </div>
                        {{ form_end(registrationForm) }}


                </div>
                <div class=\"col-md-5\"></div>
                <div class=\"col-ms-6 col-md-10 col-lg-12 offset-3\">
                    <p> Vous avez déjà un compte ? <a href=\"{{ path('app_login') }}\">S'identifier</a></p>

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

{% endblock %}", "registration/register.html.twig", "C:\\Users\\Utilisateur\\OneDrive - Ynov\\Bureau\\livraison_repas\\templates\\registration\\register.html.twig");
    }
}

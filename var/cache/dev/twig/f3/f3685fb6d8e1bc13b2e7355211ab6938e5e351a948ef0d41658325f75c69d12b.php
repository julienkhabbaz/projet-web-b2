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

/* espace_client/profileEdit.html.twig */
class __TwigTemplate_74a493f403f879d4e0eeea876d50f5dd9693499b7f036acd6d3fff228866a6a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_client/profileEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_client/profileEdit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espace_client/profileEdit.html.twig", 1);
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

        echo "Mofier Profil";
        
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
<style>
body{
    background: -webkit-linear-gradient(left, white, white);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 35%;
    height: 40%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<div class=\"container emp-profile\">
            <form method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                    ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_start');
        echo "

                        <div class=\"profile-img\">
                            <img src=";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/images/avatar.png"), "html", null, true);
        echo " alt=\"\"/>
                            <div class=\"file btn btn-lg btn-primary\">
                                Change Photo
                                <input type=\"file\" name=\"file\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"profile-head\">
                                    <h5>
                                    </h5>
                                    <h6>
                                       ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "adresse_postal", [], "any", false, false, false, 123), 'row');
        echo "
                                    </h6>
                            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Mes Infos</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Mes Commandes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                             <button class=\"btn profile-edit-btn\">";
        // line 136
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 136, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                   

                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"profile-work\">
                            <p>Liens</p></br>
                            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "siteWeb", [], "any", false, false, false, 145), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"tab-content profile-tab\" id=\"myTabContent\">
                            <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                    
                                        <div class=\"row\">
                        
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "nom", [], "any", false, false, false, 155), 'row');
        echo "</p>
                                            </div>
                                        </div>
                                         <div class=\"row\">
                                           
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "prenom", [], "any", false, false, false, 161), 'row');
        echo "</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                         
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "email", [], "any", false, false, false, 167), 'row');
        echo "</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "phone", [], "any", false, false, false, 172), 'row');
        echo "</p>
                                            </div>
                                        </div>
                                         ";
        // line 175
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), 'form_end');
        echo "
                                        </div>                                 
                                        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

                                          <table class=\"table tab-stripedble\">
                                             <thead>
                                                <tr>
                                                    <th>Ref</th>
                                                    <th>Plat</th>
                                                    <th>Quantite</th>
                                                    <th>Total</th>
                                                   
                                                </tr>
                                            </thead>
                                             <tbody>
                                                ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "commandes", [], "any", false, false, false, 190));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 191
            echo "                                                <tr>
           
                                                    <td>";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "refCommande", [], "any", false, false, false, 193), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "plat", [], "any", false, false, false, 194), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "quantite", [], "any", false, false, false, 195), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "formattedPrice", [], "any", false, false, false, 196), "html", null, true);
            echo " €</td>
                                               
               
                                                </tr>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 201
            echo "                                                <tr>
                                                    <td colspan=\"5\">aucune  commande trouvée</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "  
                                        </table>  
                                        
                               
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace_client/profileEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 204,  335 => 201,  325 => 196,  321 => 195,  317 => 194,  313 => 193,  309 => 191,  304 => 190,  286 => 175,  280 => 172,  272 => 167,  263 => 161,  254 => 155,  241 => 145,  229 => 136,  213 => 123,  198 => 111,  192 => 108,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mofier Profil{% endblock %}

{% block body %}

<style>
body{
    background: -webkit-linear-gradient(left, white, white);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 35%;
    height: 40%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<div class=\"container emp-profile\">
            <form method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                    {{ form_start(form) }}

                        <div class=\"profile-img\">
                            <img src={{ asset('content/images/avatar.png') }} alt=\"\"/>
                            <div class=\"file btn btn-lg btn-primary\">
                                Change Photo
                                <input type=\"file\" name=\"file\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"profile-head\">
                                    <h5>
                                    </h5>
                                    <h6>
                                       {{ form_row(form.adresse_postal) }}
                                    </h6>
                            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Mes Infos</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Mes Commandes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                             <button class=\"btn profile-edit-btn\">{{ button_label|default('Modifier') }}</button>
                   

                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"profile-work\">
                            <p>Liens</p></br>
                            {{ form_row(form.siteWeb) }}
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"tab-content profile-tab\" id=\"myTabContent\">
                            <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                    
                                        <div class=\"row\">
                        
                                            <div class=\"col-md-6\">
                                                <p>{{ form_row(form.nom) }}</p>
                                            </div>
                                        </div>
                                         <div class=\"row\">
                                           
                                            <div class=\"col-md-6\">
                                                <p>{{ form_row(form.prenom) }}</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                         
                                            <div class=\"col-md-6\">
                                                <p>{{ form_row(form.email) }}</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <p>{{ form_row(form.phone) }}</p>
                                            </div>
                                        </div>
                                         {{ form_end(form) }}
                                        </div>                                 
                                        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

                                          <table class=\"table tab-stripedble\">
                                             <thead>
                                                <tr>
                                                    <th>Ref</th>
                                                    <th>Plat</th>
                                                    <th>Quantite</th>
                                                    <th>Total</th>
                                                   
                                                </tr>
                                            </thead>
                                             <tbody>
                                                {% for commande in user.commandes %}
                                                <tr>
           
                                                    <td>{{ commande.refCommande }}</td>
                                                    <td>{{ commande.plat }}</td>
                                                    <td>{{ commande.quantite }}</td>
                                                    <td>{{commande.formattedPrice}} €</td>
                                               
               
                                                </tr>
                                                {% else %}
                                                <tr>
                                                    <td colspan=\"5\">aucune  commande trouvée</td>
                                                </tr>
                                                {% endfor %}  
                                        </table>  
                                        
                               
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
{% endblock %}
", "espace_client/profileEdit.html.twig", "/home/hicham/Documents/Fiverr work/livraison_repas/templates/espace_client/profileEdit.html.twig");
    }
}

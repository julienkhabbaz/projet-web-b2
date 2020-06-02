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

/* espace_client/index.html.twig */
class __TwigTemplate_a594c3164de594e45808e67a0ef5126ea877ac0b38462dcc07620bbb967b7707 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_client/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_client/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espace_client/index.html.twig", 1);
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

        echo "Profil";
        
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
<div class=\"container emp-profile \">
            <form method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"profile-img\">
                            <img src=";
        // line 109
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
                                        ";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "nom", [], "any", false, false, false, 119), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "prenom", [], "any", false, false, false, 119), "html", null, true);
        echo " 
                                    </h5>
                                    <h6>
                                       Ville: ";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 122, $this->source); })()), "adressePostal", [], "any", false, false, false, 122), "html", null, true);
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
                        <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
        echo "\"  class=\"btn profile-edit-btn\" name=\"btnAddMore\">Modifier</a>
                       
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"profile-work\">
                            <p>Liens</p>
                            <a href=\"#\">Site web</a><br/>
                                ";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 144, $this->source); })()), "siteWeb", [], "any", false, false, false, 144), "html", null, true);
        echo "
                            
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"tab-content profile-tab\" id=\"myTabContent\">
                            <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                        <div class=\"row\">
                                            
                                            
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Nom Complet</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 160, $this->source); })()), "nom", [], "any", false, false, false, 160), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 160, $this->source); })()), "prenom", [], "any", false, false, false, 160), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Email</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 168, $this->source); })()), "email", [], "any", false, false, false, 168), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Phone</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 176, $this->source); })()), "phone", [], "any", false, false, false, 176), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                        
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
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 194, $this->source); })()), "commandes", [], "any", false, false, false, 194));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 195
            echo "                                                <tr>
           
                                                    <td>";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "refCommande", [], "any", false, false, false, 197), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "plat", [], "any", false, false, false, 198), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "quantite", [], "any", false, false, false, 199), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "formattedPrice", [], "any", false, false, false, 200), "html", null, true);
            echo " €</td>
                                               
               
                                                </tr>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 205
            echo "                                                <tr>
                                                    <td colspan=\"5\">aucune  commande trouvée</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
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
        return "espace_client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 208,  337 => 205,  327 => 200,  323 => 199,  319 => 198,  315 => 197,  311 => 195,  306 => 194,  285 => 176,  274 => 168,  261 => 160,  242 => 144,  230 => 135,  214 => 122,  206 => 119,  193 => 109,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

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
<div class=\"container emp-profile \">
            <form method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
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
                                        {{user.nom}} {{user.prenom}} 
                                    </h5>
                                    <h6>
                                       Ville: {{user.adressePostal}}
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
                        <a href=\"{{ path('profile_edit', {'id': user.id}) }}\"  class=\"btn profile-edit-btn\" name=\"btnAddMore\">Modifier</a>
                       
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"profile-work\">
                            <p>Liens</p>
                            <a href=\"#\">Site web</a><br/>
                                {{user.siteWeb}}
                            
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"tab-content profile-tab\" id=\"myTabContent\">
                            <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                        <div class=\"row\">
                                            
                                            
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Nom Complet</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>{{user.nom}} {{user.prenom}}</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Email</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>{{user.email}}</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Phone</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>{{user.phone}}</p>
                                            </div>
                                        </div>
                                        
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
", "espace_client/index.html.twig", "/home/hicham/Documents/Fiverr work/livraison_repas/templates/espace_client/index.html.twig");
    }
}

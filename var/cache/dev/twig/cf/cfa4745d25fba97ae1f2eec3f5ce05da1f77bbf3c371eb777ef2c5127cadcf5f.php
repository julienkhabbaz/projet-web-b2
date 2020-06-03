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

/* front/commande.html.twig */
class __TwigTemplate_ef11cfe86d00a61fa3a6be3e16068a3afd49f03c314a303fb937078768570d3a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/commande.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/commande.html.twig", 1);
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

        echo "Commander";
        
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

        // line 12
        echo "

<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
\t\twidth:20%;
\t\tdisplay: inline !important;
\t}
\t.actions .btn{
\t\twidth:36%;
\t\tmargin:1.5em 0;
\t}
\t
\t.actions .btn-info{
\t\tfloat:left;
\t}
\t.actions .btn-danger{
\t\tfloat:right;
\t}
\t
\ttable#cart thead { display: none; }
\ttable#cart tbody td { display: block; padding: .6rem; min-width:320px;}
\ttable#cart tbody tr td:first-child { background: #333; color: #fff; }
\ttable#cart tbody td:before {
\t\tcontent: attr(data-th); font-weight: bold;
\t\tdisplay: inline-block; width: 8rem;
\t}
\t
\t
\t
\ttable#cart tfoot td{display:block; }
\ttable#cart tfoot td .btn{display:block;}
\t
}
</style>
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:50%\">Plat</th>
\t\t\t\t\t\t\t<th style=\"width:10%\">Prix</th>
\t\t\t\t\t\t\t<th style=\"width:8%\">Quantité</th>
\t\t\t\t\t\t\t<th style=\"width:22%\" class=\"text-center\">Frais Livraison</th>
\t\t\t\t\t\t\t<th style=\"width:10%\"></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 hidden-xs\">
\t\t\t\t\t\t\t\t\t   ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 68, $this->source); })()), "filename", [], "any", false, false, false, 68)) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 69, $this->source); })()), "imageFile"), "thumb"), "html", null, true);
            echo "\"  class=\"img-responsive\" alt=\"card-img-top\" style=\"width: 50; height:auto;\">
               \t\t\t\t\t\t\t ";
        } else {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/restaurants/empty.png", "thumb"), "html", null, true);
            echo "\"  class=\"img-responsive\" alt=\"Logo\" style=\"width: 50px; height:60px;\">
               \t\t\t\t\t\t\t ";
        }
        // line 73
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8 mt-2\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 76, $this->source); })()), "libele", [], "any", false, false, false, 76), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 81, $this->source); })()), "formattedPrice", [], "any", false, false, false, 81), "html", null, true);
        echo " €</td>


\t\t\t\t\t\t\t
                                 ";
        // line 85
        echo twig_include($this->env, $context, "front/_form_commande.html.twig");
        echo "

\t\t\t\t\t
\t\t\t
\t\t\t\t</table>

</div

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 85,  176 => 81,  169 => 77,  165 => 76,  160 => 73,  154 => 71,  148 => 69,  146 => 68,  88 => 12,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commander{% endblock %}

{% block body %}
{#<div 
    <h1>Nouvelle Commande</h1>
    Libele {{ plat.libele }}</br>
    Prix {{ plat.prix }}

    {{ include('front/_form_commande.html.twig') }}#}


<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
\t\twidth:20%;
\t\tdisplay: inline !important;
\t}
\t.actions .btn{
\t\twidth:36%;
\t\tmargin:1.5em 0;
\t}
\t
\t.actions .btn-info{
\t\tfloat:left;
\t}
\t.actions .btn-danger{
\t\tfloat:right;
\t}
\t
\ttable#cart thead { display: none; }
\ttable#cart tbody td { display: block; padding: .6rem; min-width:320px;}
\ttable#cart tbody tr td:first-child { background: #333; color: #fff; }
\ttable#cart tbody td:before {
\t\tcontent: attr(data-th); font-weight: bold;
\t\tdisplay: inline-block; width: 8rem;
\t}
\t
\t
\t
\ttable#cart tfoot td{display:block; }
\ttable#cart tfoot td .btn{display:block;}
\t
}
</style>
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed\">
    \t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:50%\">Plat</th>
\t\t\t\t\t\t\t<th style=\"width:10%\">Prix</th>
\t\t\t\t\t\t\t<th style=\"width:8%\">Quantité</th>
\t\t\t\t\t\t\t<th style=\"width:22%\" class=\"text-center\">Frais Livraison</th>
\t\t\t\t\t\t\t<th style=\"width:10%\"></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 hidden-xs\">
\t\t\t\t\t\t\t\t\t   {% if plat.filename %}
\t\t\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(plat,'imageFile')  | imagine_filter('thumb')}}\"  class=\"img-responsive\" alt=\"card-img-top\" style=\"width: 50; height:auto;\">
               \t\t\t\t\t\t\t {% else %}
\t\t\t\t\t\t\t\t\t<img src=\"{{ '/images/restaurants/empty.png' | imagine_filter('thumb') }}\"  class=\"img-responsive\" alt=\"Logo\" style=\"width: 50px; height:60px;\">
               \t\t\t\t\t\t\t {% endif %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8 mt-2\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">{{plat.libele}}</h4>
\t\t\t\t\t\t\t\t\t\t<p>{{plat.description}}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">{{plat.formattedPrice}} €</td>


\t\t\t\t\t\t\t
                                 {{ include('front/_form_commande.html.twig') }}

\t\t\t\t\t
\t\t\t
\t\t\t\t</table>

</div

{% endblock %}
", "front/commande.html.twig", "C:\\Users\\Utilisateur\\OneDrive - Ynov\\Bureau\\livraison_repas_julien\\templates\\front\\commande.html.twig");
    }
}

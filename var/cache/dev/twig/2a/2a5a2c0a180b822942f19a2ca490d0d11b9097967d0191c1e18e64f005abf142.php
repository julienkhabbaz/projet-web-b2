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

/* admin/commande/index.html.twig */
class __TwigTemplate_6d96c2338ca786eac67f74c71350a1afaad8c98c56880fe7ab7429d4f20d8ca2 extends Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/commande/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/commande/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/commande/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Liste Commandes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function (\$) {
            var \$table1 = jQuery('#table-1');
// Initialize DataTable
            \$table1.DataTable({
                \"aLengthMenu\": [[10, 25, 50, -1], [10, 25, 50, \"All\"]],
                \"bStateSave\": true,
                dom: 'lBfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
// Initalize Select Dropdown after DataTables is created
            \$table1.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        });
    </script>
        <div class=\"row\">
\t\t\t      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 32
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</div>
    <h4 style=\"padding: 10px 0;\">Liste des commandes</h4>
    ";
        // line 38
        echo "    <table class=\"table table-bordered datatable\" id=\"table-1\">
        <thead>
            <tr>
                <th class=\"sorting_disabled\">Id</th>
                <th class=\"sorting_asc\">Reference</th>
                <th class=\"sorting_disabled\">Plat</th>
                <th class=\"sorting_disabled\">Quantité</th>
                <th class=\"sorting_disabled\">Total</th>
                <th class=\"sorting_disabled\">Status</th>
                <th class=\"col-md-3\">Actions</th>
            </tr>
        </thead>
        <tbody>
          ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 52
            echo "            <tr class=\"odd gradeX\">
        
                <td style=\"vertical-align: middle;\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "refCommande", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "plat", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "quantite", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "formattedPrice", [], "any", false, false, false, 58), "html", null, true);
            echo " €</td>
                <td style=\"vertical-align: middle;\">";
            // line 59
            echo ((twig_get_attribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 59)) ? ("Passées") : ("En cours"));
            echo "</td>
                <td class=\"col-md-3\" style=\"vertical-align: middle; text-align: center;\">
                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Éditer</a>
                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-trash\"></i>Supprimer</a>
        
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "            <tr>
                <td colspan=\"5\">pas de commande</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
        <tfoot>
        <tr>
                <th >Id</th>
                <th>Reference</th>
                <th >Plat</th>
                <th >Quantité</th>
                <th >Total</th>
                <th >Status</th>
        </tr>
        </tfoot>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/commande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 71,  196 => 67,  186 => 62,  182 => 61,  177 => 59,  173 => 58,  169 => 57,  165 => 56,  161 => 55,  157 => 54,  153 => 52,  148 => 51,  133 => 38,  129 => 35,  120 => 32,  117 => 31,  113 => 30,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'admin.html.twig' %}

{% block title %} Liste Commandes{% endblock %}

{% block body %}

    <script type=\"text/javascript\">
        jQuery(document).ready(function (\$) {
            var \$table1 = jQuery('#table-1');
// Initialize DataTable
            \$table1.DataTable({
                \"aLengthMenu\": [[10, 25, 50, -1], [10, 25, 50, \"All\"]],
                \"bStateSave\": true,
                dom: 'lBfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
// Initalize Select Dropdown after DataTables is created
            \$table1.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        });
    </script>
        <div class=\"row\">
\t\t\t      {% for message in app.flashes('success')  %}
                        <div class=\"alert alert-success\">
                            {{ message }}
                        </div>
                {% endfor %}
\t\t\t</div>
    <h4 style=\"padding: 10px 0;\">Liste des commandes</h4>
    {#span><a href=\"#\" class=\"btn btn-primary\">Ajouter une commande</a></span>#}
    <table class=\"table table-bordered datatable\" id=\"table-1\">
        <thead>
            <tr>
                <th class=\"sorting_disabled\">Id</th>
                <th class=\"sorting_asc\">Reference</th>
                <th class=\"sorting_disabled\">Plat</th>
                <th class=\"sorting_disabled\">Quantité</th>
                <th class=\"sorting_disabled\">Total</th>
                <th class=\"sorting_disabled\">Status</th>
                <th class=\"col-md-3\">Actions</th>
            </tr>
        </thead>
        <tbody>
          {% for commande in commandes %}
            <tr class=\"odd gradeX\">
        
                <td style=\"vertical-align: middle;\">{{ commande.id }}</td>
                <td style=\"vertical-align: middle;\">{{ commande.refCommande }}</td>
                <td style=\"vertical-align: middle;\">{{ commande.plat }}</td>
                <td style=\"vertical-align: middle;\">{{ commande.quantite }}</td>
                <td style=\"vertical-align: middle;\">{{ commande.formattedPrice  }} €</td>
                <td style=\"vertical-align: middle;\">{{ commande.status ? 'Passées' : 'En cours' }}</td>
                <td class=\"col-md-3\" style=\"vertical-align: middle; text-align: center;\">
                    <a href=\"{{ path('commande_edit', {'id': commande.id}) }}\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Éditer</a>
                    <a href=\"{{ path('commande_delete', {'id': commande.id}) }}\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-trash\"></i>Supprimer</a>
        
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"5\">pas de commande</td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
        <tr>
                <th >Id</th>
                <th>Reference</th>
                <th >Plat</th>
                <th >Quantité</th>
                <th >Total</th>
                <th >Status</th>
        </tr>
        </tfoot>
    </table>


{% endblock %}
", "admin/commande/index.html.twig", "C:\\Users\\Utilisateur\\OneDrive - Ynov\\Bureau\\livraison_repas\\templates\\admin\\commande\\index.html.twig");
    }
}

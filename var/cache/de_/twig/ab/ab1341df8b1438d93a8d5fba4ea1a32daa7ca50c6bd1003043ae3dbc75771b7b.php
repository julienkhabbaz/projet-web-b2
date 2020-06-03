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

/* admin/user/index.html.twig */
class __TwigTemplate_772e38c7994c1a5b19fd48146e28b88e570fc80fbaa19a80f4558dfb3c39a0ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/user/index.html.twig", 1);
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

        echo " Liste des membres";
        
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 31
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t</div>
    <h4 style=\"padding: 10px 0;\">Liste des membres</h4>
    <span><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\" class=\"btn btn-primary\">Ajouter un membre</a></span>
    <table class=\"table table-bordered datatable\" id=\"table-1\">
        <thead>
            <tr>
                <th class=\"sorting_disabled\">ID</th>
                <th class=\"sorting_asc\">Email</th>
                <th class=\"sorting_asc\">Nom</th>
                <th class=\"sorting_disabled\">Prenom</th>
                <th class=\"sorting_disabled\">Adresse Postal</th>
                <th class=\"sorting_disabled\">Solde</th>
                <th class=\"col-md-3\">Actions</th>
            </tr>
        </thead>
        <tbody>
         ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 51
            echo "            <tr class=\"odd gradeX\">
                <td style=\"vertical-align: middle;\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adressePostal", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "solde", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td class=\"col-md-3\" style=\"vertical-align: middle; text-align: center;\">
                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Éditer</a>
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-trash\"></i>Supprimer</a>
        
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "            <tr>
                <td colspan=\"5\">Pas d'utilisateur</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </tbody>
        <tfoot>
        <tr>
           <th>ID</th>
            <th>Email</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse Postal</th>
            <th>Solde</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 69,  197 => 65,  187 => 60,  183 => 59,  178 => 57,  174 => 56,  170 => 55,  166 => 54,  162 => 53,  158 => 52,  155 => 51,  150 => 50,  133 => 36,  129 => 34,  120 => 31,  117 => 30,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %} Liste des membres{% endblock %}

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
    <h4 style=\"padding: 10px 0;\">Liste des membres</h4>
    <span><a href=\"{{ path('user_new') }}\" class=\"btn btn-primary\">Ajouter un membre</a></span>
    <table class=\"table table-bordered datatable\" id=\"table-1\">
        <thead>
            <tr>
                <th class=\"sorting_disabled\">ID</th>
                <th class=\"sorting_asc\">Email</th>
                <th class=\"sorting_asc\">Nom</th>
                <th class=\"sorting_disabled\">Prenom</th>
                <th class=\"sorting_disabled\">Adresse Postal</th>
                <th class=\"sorting_disabled\">Solde</th>
                <th class=\"col-md-3\">Actions</th>
            </tr>
        </thead>
        <tbody>
         {% for user in users %}
            <tr class=\"odd gradeX\">
                <td style=\"vertical-align: middle;\">{{ user.id }}</td>
                <td style=\"vertical-align: middle;\">{{ user.email }}</td>
                <td style=\"vertical-align: middle;\">{{ user.nom }}</td>
                <td style=\"vertical-align: middle;\">{{ user.prenom }}</td>
                <td style=\"vertical-align: middle;\">{{ user.adressePostal }}</td>
                <td style=\"vertical-align: middle;\">{{ user.solde }}</td>
                <td class=\"col-md-3\" style=\"vertical-align: middle; text-align: center;\">
                    <a href=\"{{ path('user_edit', {'id': user.id}) }}\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Éditer</a>
                    <a href=\"{{ path('user_delete', {'id': user.id}) }}\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-trash\"></i>Supprimer</a>
        
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"5\">Pas d'utilisateur</td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
        <tr>
           <th>ID</th>
            <th>Email</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse Postal</th>
            <th>Solde</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>


{% endblock %}
", "admin/user/index.html.twig", "C:\\Users\\Utilisateur\\OneDrive - Ynov\\Bureau\\livraison_repas_julien\\templates\\admin\\user\\index.html.twig");
    }
}

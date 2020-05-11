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

/* restaurant/index.html.twig */
class __TwigTemplate_3595a2d8f00e3cbc1a9e03a10fbb21a846ce956d76e1578f8ca6003fc82aa5a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "restaurant/index.html.twig", 1);
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
    <h4 style=\"padding: 10px 0;\">Liste des restaurants</h4>
    <span><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_restaurant_insert");
        echo "\" class=\"btn btn-primary\">Ajouter un restaurant</a></span>
    <table class=\"table table-bordered datatable\" id=\"table-1\">
        <thead>
            <tr>
                <th class=\"sorting_asc\">Id</th>
                <th class=\"sorting_disabled\">Nom</th>
                <th class=\"sorting_disabled\">Logo</th>
                <th class=\"sorting_disabled\">Email</th>
                <th class=\"sorting_disabled\">Adrsse</th>
                <th class=\"col-md-3\">Action</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["Restaurants"]) || array_key_exists("Restaurants", $context) ? $context["Restaurants"] : (function () { throw new RuntimeError('Variable "Restaurants" does not exist.', 42, $this->source); })())));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "            <tr class=\"odd gradeX\">
                <td style=\"vertical-align: middle;\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\"><img style=\"width: 50px;\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["item"], "logo", [], "any", false, false, false, 46)), "html", null, true);
            echo "\" alt=\"Logo\"></td>
                <td style=\"vertical-align: middle;\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "address", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td class=\"col-md-3\" style=\"vertical-align: middle; text-align: center;\">
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_restaurant_update", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Éditer</a>
                    <a href=\"\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Vaisselle</a>
                </td>
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Logo</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 55,  170 => 50,  165 => 48,  161 => 47,  157 => 46,  153 => 45,  149 => 44,  146 => 43,  129 => 42,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %} !{% endblock %}

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
    <h4 style=\"padding: 10px 0;\">Liste des restaurants</h4>
    <span><a href=\"{{ path('admin_restaurant_insert') }}\" class=\"btn btn-primary\">Ajouter un restaurant</a></span>
    <table class=\"table table-bordered datatable\" id=\"table-1\">
        <thead>
            <tr>
                <th class=\"sorting_asc\">Id</th>
                <th class=\"sorting_disabled\">Nom</th>
                <th class=\"sorting_disabled\">Logo</th>
                <th class=\"sorting_disabled\">Email</th>
                <th class=\"sorting_disabled\">Adrsse</th>
                <th class=\"col-md-3\">Action</th>
            </tr>
        </thead>
        <tbody>
        {% for item in Restaurants|reverse %}
            <tr class=\"odd gradeX\">
                <td style=\"vertical-align: middle;\">{{ loop.index }}</td>
                <td style=\"vertical-align: middle;\">{{ item.name }}</td>
                <td style=\"vertical-align: middle;\"><img style=\"width: 50px;\" src=\"{{ asset( item.logo ) }}\" alt=\"Logo\"></td>
                <td style=\"vertical-align: middle;\">{{ item.email }}</td>
                <td style=\"vertical-align: middle;\">{{ item.address }}</td>
                <td class=\"col-md-3\" style=\"vertical-align: middle; text-align: center;\">
                    <a href=\"{{ path('admin_restaurant_update',{id:item.id}) }}\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Éditer</a>
                    <a href=\"\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Vaisselle</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Logo</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>


{% endblock %}
", "restaurant/index.html.twig", "C:\\wamp64\\www\\la-pizza-v\\templates\\restaurant\\index.html.twig");
    }
}

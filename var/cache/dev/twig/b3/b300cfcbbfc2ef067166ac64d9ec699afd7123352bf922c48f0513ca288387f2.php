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

/* front/_form_commande.html.twig */
class __TwigTemplate_023bd6742b9fa1da838098d9cdef652f08d16c9b45030d04ea3bfc1a90dd548e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/_form_commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/_form_commande.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
   ";
        // line 3
        echo "    ";
        // line 4
        echo "
<td data-th=\"Quantity\">
";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "quantite", [], "any", false, false, false, 6), 'row');
        echo "
</td>
<td data-th=\"Subtotal\" class=\"text-center\">2.5 €</td>
\t\t";
        // line 13
        echo "\t</tr>
\t</tbody>
\t<tfoot>
\t";
        // line 19
        echo "\t<tr>
\t\t<td><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_restaurant", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 20, $this->source); })()), "restaurant", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-angle-left\"></i> Retour au restaurant</a></td>
\t\t<td colspan=\"2\" class=\"hidden-xs\"></td>
\t\t";
        // line 23
        echo "        <td><button class=\"btn btn-success btn-block\" >";
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 23, $this->source); })()), "Commander")) : ("Commander")), "html", null, true);
        echo "<i class=\"fa fa-angle-right\"></i></button></td>
\t</tr>
</tfoot>
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/_form_commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  72 => 23,  67 => 20,  64 => 19,  59 => 13,  53 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
   {# {{ form_widget(form) }}#}
    {#<button class=\"btn\">{{ button_label|default('Commander') }}</button>#}

<td data-th=\"Quantity\">
{{ form_row(form.quantite) }}
</td>
<td data-th=\"Subtotal\" class=\"text-center\">2.5 €</td>
\t\t{#<td class=\"actions\" data-th=\"\">
\t\t\t<button class=\"btn btn-info btn-sm\"><i class=\"fa fa-refresh\"></i></button>
\t\t\t<button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i></button>\t\t\t\t\t\t\t\t
\t\t</td>#}
\t</tr>
\t</tbody>
\t<tfoot>
\t{#<tr class=\"visible-xs\">
\t\t<td class=\"text-center\"><strong>Total 1.99 €</strong></td>
\t</tr>#}
\t<tr>
\t\t<td><a href=\"{{ path('detail_restaurant', {id: plat.restaurant.id}) }}\" class=\"btn btn-warning\"><i class=\"fa fa-angle-left\"></i> Retour au restaurant</a></td>
\t\t<td colspan=\"2\" class=\"hidden-xs\"></td>
\t\t{#<td class=\"hidden-xs text-center\"><strong>Total \$1.99 €</strong></td>#}
        <td><button class=\"btn btn-success btn-block\" >{{ button_label|default('Commander') }}<i class=\"fa fa-angle-right\"></i></button></td>
\t</tr>
</tfoot>
{{ form_end(form) }}
", "front/_form_commande.html.twig", "/home/hicham/Documents/Fiverr work/livraison_repas/templates/front/_form_commande.html.twig");
    }
}

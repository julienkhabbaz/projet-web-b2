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

/* espace_restaurant/restaurant/_delete_form.html.twig */
class __TwigTemplate_5770b7bc61cb5098077891b53ea47ef9192c51b8dac22770bee6a8c39c0bdeef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_restaurant/restaurant/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_restaurant/restaurant/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurants_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Etes vous sur ?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3))), "html", null, true);
        echo "\">
    <button style=\"margin-top:5px\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-trash\"></i>Supprimer</button>

</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "espace_restaurant/restaurant/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ path('restaurants_delete', {'id': restaurant.id}) }}\" onsubmit=\"return confirm('Etes vous sur ?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ restaurant.id) }}\">
    <button style=\"margin-top:5px\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-trash\"></i>Supprimer</button>

</form>
", "espace_restaurant/restaurant/_delete_form.html.twig", "C:\\Users\\Utilisateur\\OneDrive - Ynov\\Bureau\\livraison_repas_julien\\templates\\espace_restaurant\\restaurant\\_delete_form.html.twig");
    }
}

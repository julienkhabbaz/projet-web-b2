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

/* front/menu.html.twig */
class __TwigTemplate_31e6e4c7ecf99b1c2091711e0135d8b29f3cee27117d6608116eadd6bc3b06c0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/menu.html.twig"));

        // line 1
        echo "<ul class=\"navbar-nav ml-auto\" >
    ";
        // line 2
        if (((isset($context["Check"]) || array_key_exists("Check", $context) ? $context["Check"] : (function () { throw new RuntimeError('Variable "Check" does not exist.', 2, $this->source); })()) == 1)) {
            // line 3
            echo "        <li class=\"nav-item \"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_restaurants_list");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Restaurants</a> </li>
        <li class=\"nav-item \"> <a href=\"";
            // line 4
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_logout");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>
    ";
        } else {
            // line 7
            echo "        <li class=\"nav-item \"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_login_action");
            echo "\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'identifier </a> / <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_register");
            echo "\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'inscrire</a> </li>
";
            // line 9
            echo "    ";
        }
        // line 10
        echo "</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  65 => 9,  58 => 7,  53 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"navbar-nav ml-auto\" >
    {% if Check == 1 %}
        <li class=\"nav-item \"> <a href=\"{{ path('front_restaurants_list') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Restaurants</a> </li>
        <li class=\"nav-item \"> <a href=\"{{ path('users_logout') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>
    {% else %}
{#        <li class=\"nav-item \"> <a href=\"{{ path('users_register') }}\" class=\"nav-link nav-a \" style=\"color: red;\">Restaurant?</a> </li>#}
        <li class=\"nav-item \"> <a href=\"{{ path('user_login_action') }}\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'identifier </a> / <a href=\"{{ path('users_register') }}\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'inscrire</a> </li>
{#        <li class=\"nav-item \"> <a href=\"{{ path('front_restaurants_list') }}\" class=\"nav-link nav-a \" style=\"color: red;\"> Restaurants</a> </li>#}
    {% endif %}
</ul>", "front/menu.html.twig", "C:\\wamp64\\www\\la-pizza-v\\templates\\front\\menu.html.twig");
    }
}

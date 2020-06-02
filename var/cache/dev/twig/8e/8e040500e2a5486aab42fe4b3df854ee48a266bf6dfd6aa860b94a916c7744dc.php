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

/* base.html.twig */
class __TwigTemplate_c9b980722dbb005f602e49f194face5190904b5a784ce528ed1548018c1cb6fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/css/custom.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

</head>
<body>
  <header id=\"header mb-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-md navbar-light nav\" > <a class=\"navbar-brand\" id=\"logo\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">La pizza</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"></span> </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\" >

                              <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item \"> <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_restaurants");
        echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Restaurants</a> </li>

                              </ul>
                           <ul class=\"navbar-nav ml-auto\" >

                             ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 31
            echo "                                <li class=\"nav-item \"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dash");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Espace Admin</a> </li>
                               <li class=\"nav-item \"> <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>
                             
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RESTAURANT"))) {
            // line 35
            echo "                             <li class=\"nav-item \"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_restaurant");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Espace Restaurant</a> </li>
                            <li class=\"nav-item \"> <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\">Mon Profil</a> </li>
                            <li class=\"nav-item \"> <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 39
            echo "                             <li class=\"nav-item \"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\">Mon Profil</a> </li>
                            <li class=\"nav-item \"> <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>  
                             ";
        } else {
            // line 41
            echo "  
                                <li class=\"nav-item \"> <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'identifier </a> / <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_register");
            echo "\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'inscrire</a> </li>
                            ";
        }
        // line 44
        echo "                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>



        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "


<footer class=\"page-footer font-small mdb-color lighten-3 pt-4 footerContent mt-5\">
    <div class=\"container text-center text-md-left\">
        <div class=\"row\">
            <div class=\"col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Spécialités</h5>
                <ul  class=\"list-unstyled\">
                    <li><p><a href=\"#\">Pizza</a></p></li>
                    <li><p><a href=\"#\">Japonais</a></p></li>
                    <li><p><a href=\"#\">Indien-Pakistanais</a></p></li>
                    <li><p><a href=\"#\">Chinois</a></p></li>
                    <li><p><a href=\"#\">KFC</a></p></li>
                    <li><p><a href=\"#\">Nos chanies</a></p></li>
                    <li><p><a href=\"#\">Plus de spécialités</a></p></li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Villes</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <p>
                            <a href=\"#!\">Paris</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Marseille</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Lyon</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Toulouse</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Bordeaux</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Starsbourg</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Montpellier</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Toutes les villes</a>
                        </p>
                    </li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">À propos de nous</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <p>
                            <a href=\"#!\">Qui sommes-nous ?</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">CGV</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Mentions légales</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Politique de confidentialité</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Cookies</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Suggérez-nous un resto</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Aide - FAQ</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Meilleur Prix Livré</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Rejoignez-nous </a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Le Blog </a>
                        </p>
                    </li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-6 col-lg-6 text-center mx-auto my-4\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Téléchargez L'APP pour se faire livrer</h5>
                <ul class=\"list-unstyled\">
                    <li><p><img class=\"img-fluid\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/images/apple-logo.PNG"), "html", null, true);
        echo "\"></p></li>
                    <li><p><img class=\"img-fluid\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/images/samsung-logo.PNG"), "html", null, true);
        echo "\"></p></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright text-center py-3\">© 2020 droits d'auteur:
        <a href=\"#\">La Pizza</a>
    </div>
</footer>
";
        // line 189
        $this->displayBlock('javascripts', $context, $blocks);
        // line 194
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 190
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/jquery.slim.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 191,  334 => 190,  324 => 189,  306 => 54,  295 => 194,  293 => 189,  281 => 180,  277 => 179,  151 => 55,  149 => 54,  137 => 44,  130 => 42,  127 => 41,  122 => 40,  117 => 39,  115 => 38,  111 => 37,  107 => 36,  102 => 35,  100 => 34,  95 => 32,  90 => 31,  88 => 30,  80 => 25,  72 => 20,  60 => 11,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"{{ asset('content/css/custom.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('content/css/bootstrap.min.css') }}\">
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

</head>
<body>
  <header id=\"header mb-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-md navbar-light nav\" > <a class=\"navbar-brand\" id=\"logo\" href=\"{{ path('home') }}\">La pizza</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"></span> </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\" >

                              <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item \"> <a href=\"{{ path('liste_restaurants') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Restaurants</a> </li>

                              </ul>
                           <ul class=\"navbar-nav ml-auto\" >

                             {% if app.user  and is_granted('ROLE_ADMIN')%}
                                <li class=\"nav-item \"> <a href=\"{{ path('admin_dash') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Espace Admin</a> </li>
                               <li class=\"nav-item \"> <a href=\"{{ path('logout') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>
                             
                            {%  elseif  app.user  and is_granted('ROLE_RESTAURANT') %}
                             <li class=\"nav-item \"> <a href=\"{{ path('espace_restaurant') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Espace Restaurant</a> </li>
                            <li class=\"nav-item \"> <a href=\"{{ path('profile') }}\" class=\"nav-link nav-a\" style=\"color: red;\">Mon Profil</a> </li>
                            <li class=\"nav-item \"> <a href=\"{{ path('logout') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>
                            {%  elseif  app.user  and is_granted('ROLE_USER') %}
                             <li class=\"nav-item \"> <a href=\"{{ path('profile') }}\" class=\"nav-link nav-a\" style=\"color: red;\">Mon Profil</a> </li>
                            <li class=\"nav-item \"> <a href=\"{{ path('logout') }}\" class=\"nav-link nav-a\" style=\"color: red;\"> Se déconnecter</a> </li>  
                             {% else %}  
                                <li class=\"nav-item \"> <a href=\"{{ path('app_login') }}\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'identifier </a> / <a href=\"{{ path('type_register') }}\" class=\"nav-link nav-a \" style=\"color: red; display: inline;\">S'inscrire</a> </li>
                            {% endif %}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>



        {% block body %}{% endblock %}



<footer class=\"page-footer font-small mdb-color lighten-3 pt-4 footerContent mt-5\">
    <div class=\"container text-center text-md-left\">
        <div class=\"row\">
            <div class=\"col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Spécialités</h5>
                <ul  class=\"list-unstyled\">
                    <li><p><a href=\"#\">Pizza</a></p></li>
                    <li><p><a href=\"#\">Japonais</a></p></li>
                    <li><p><a href=\"#\">Indien-Pakistanais</a></p></li>
                    <li><p><a href=\"#\">Chinois</a></p></li>
                    <li><p><a href=\"#\">KFC</a></p></li>
                    <li><p><a href=\"#\">Nos chanies</a></p></li>
                    <li><p><a href=\"#\">Plus de spécialités</a></p></li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Villes</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <p>
                            <a href=\"#!\">Paris</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Marseille</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Lyon</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Toulouse</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Bordeaux</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Starsbourg</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Montpellier</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Toutes les villes</a>
                        </p>
                    </li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">À propos de nous</h5>
                <ul class=\"list-unstyled\">
                    <li>
                        <p>
                            <a href=\"#!\">Qui sommes-nous ?</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">CGV</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Mentions légales</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Politique de confidentialité</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Cookies</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Suggérez-nous un resto</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Aide - FAQ</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Meilleur Prix Livré</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Rejoignez-nous </a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href=\"#!\">Le Blog </a>
                        </p>
                    </li>
                </ul>
            </div>
            <hr class=\"clearfix w-100 d-md-none\">
            <div class=\"col-md-6 col-lg-6 text-center mx-auto my-4\">
                <h5 class=\"font-weight-bold text-uppercase mb-4\">Téléchargez L'APP pour se faire livrer</h5>
                <ul class=\"list-unstyled\">
                    <li><p><img class=\"img-fluid\" src=\"{{ asset('content/images/apple-logo.PNG') }}\"></p></li>
                    <li><p><img class=\"img-fluid\" src=\"{{ asset('content/images/samsung-logo.PNG') }}\"></p></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright text-center py-3\">© 2020 droits d'auteur:
        <a href=\"#\">La Pizza</a>
    </div>
</footer>
{% block javascripts %}
<script src=\"{{ asset('content/js/jquery.slim.min.js') }}\" ></script>
<script src=\"{{ asset('content/js/bootstrap.js') }}\"></script>

{% endblock %}
</body>
</html>", "base.html.twig", "/home/hicham/Documents/Fiverr work/livraison_repas/templates/base.html.twig");
    }
}

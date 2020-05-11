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
class __TwigTemplate_e436c7752387bdc4e47cb0998144fcec23c8ed30eda8190a89fa8914adf3ef80 extends \Twig\Template
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
</head>
<body>
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "<footer class=\"page-footer font-small mdb-color lighten-3 pt-4 footerContent\">
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
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/images/apple-logo.PNG"), "html", null, true);
        echo "\"></p></li>
                    <li><p><img class=\"img-fluid\" src=\"";
        // line 137
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

<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/jquery.slim.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/bootstrap.js"), "html", null, true);
        echo "\"></script>


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
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
        return array (  226 => 14,  211 => 148,  207 => 147,  194 => 137,  190 => 136,  67 => 15,  65 => 14,  59 => 11,  55 => 10,  44 => 1,);
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
</head>
<body>
{% block body %}{% endblock %}
<footer class=\"page-footer font-small mdb-color lighten-3 pt-4 footerContent\">
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

<script src=\"{{ asset('content/js/jquery.slim.min.js') }}\" ></script>
<script src=\"{{ asset('content/js/bootstrap.js') }}\"></script>


</body>
</html>", "base.html.twig", "C:\\wamp64\\www\\la-pizza-v\\templates\\base.html.twig");
    }
}

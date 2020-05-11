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

/* admin/login.html.twig */
class __TwigTemplate_5bfabe1391c6c6f02dc75c566760345fa64c8cd3446e4a17168642c330b5f3bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/>
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <meta name=\"description\" content=\"Assignment\"/>
        <meta name=\"author\" content=\"Laborator.co\"/>
        <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/images/favicon.ico\">
        <title>Login</title>
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css\"
              id=\"style-resource-1\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/font-icons/entypo/css/entypo.css\" id=\"style-resource-2\">
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic\"
              id=\"style-resource-3\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/bootstrap.css\" id=\"style-resource-4\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/neon-core.css\" id=\"style-resource-5\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/neon-theme.css\" id=\"style-resource-6\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/neon-forms.css\" id=\"style-resource-7\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/css/custom.css\" id=\"style-resource-8\">
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/jquery-1.11.3.min.js\"></script>
        <!--[if lt IE 9]>
        <script src=\"https://demo.neontheme.com/assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script> <![endif]-->
        <!-- TS1538378540: Neon - Responsive Admin Template created by Laborator --> </head>
    <body class=\"page-body login-page login-form-fall\" data-url=\"https://demo.neontheme.com\">
    <!-- TS153837854011138: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
    <script type=\"text/javascript\">
        var baseurl = '../../index.html';
    </script>
    <div class=\"login-container\">
        <div class=\"login-header login-caret\" style=\"padding: 30px 0px!important;\">
            <div class=\"login-content\"><a href=\"#\" class=\"logo\" style=\"font-size: 35px;\"> Connectez-vous ici </a>
                <p class=\"description\">Cher administrateur, connectez-vous pour démarrer votre session!</p> <!-- progress bar indicator -->
                <p class=\"description\">
                    ";
        // line 40
        if ((isset($context["NotMatch"]) || array_key_exists("NotMatch", $context))) {
            // line 41
            echo "                        ";
            echo twig_escape_filter($this->env, (isset($context["NotMatch"]) || array_key_exists("NotMatch", $context) ? $context["NotMatch"] : (function () { throw new RuntimeError('Variable "NotMatch" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "
                    ";
        }
        // line 43
        echo "                </p> <!-- progress bar indicator -->
            </div>
        </div>
        <div class=\"login-progressbar\">
            <div></div>
        </div>
        <div class=\"login-form\">
            <div class=\"login-content\">
                <div class=\"form-login-error\"><h3>Invalid login</h3>
                    <p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p></div>
                <h4 style=\"color: #fff; padding-bottom: 3px;\">";
        // line 53
        echo "</h4>


                <form action=\"\" method=\"post\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\"><i class=\"entypo-user\"></i></div>
                            <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\" placeholder=\"Nom d'utilisateur\"
                                   autocomplete=\"off\"/></div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\"><i class=\"entypo-key\"></i></div>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"Mot de passe\"
                                   autocomplete=\"off\"/></div>
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-login\"><i class=\"entypo-login\"></i>
                            S'identifier
                        </button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/gsap/TweenMax.min.js\" id=\"script-resource-1\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js\" id=\"script-resource-2\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/bootstrap.js\" id=\"script-resource-3\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/joinable.js\" id=\"script-resource-4\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/resizeable.js\" id=\"script-resource-5\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/neon-api.js\" id=\"script-resource-6\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/cookies.min.js\" id=\"script-resource-7\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/jquery.validate.min.js\" id=\"script-resource-8\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/neon-login.js\" id=\"script-resource-9\"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/neon-custom.js\" id=\"script-resource-10\"></script> <!-- Demo Settings -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/neon-demo.js\" id=\"script-resource-11\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/"), "html", null, true);
        echo "assets/js/neon-skins.js\" id=\"script-resource-12\"></script>
    <script type=\"text/javascript\">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-28991003-7']);
        _gaq.push(['_setDomainName', 'demo.neontheme.com']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    </body>
    </html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  224 => 92,  220 => 91,  216 => 90,  211 => 88,  207 => 87,  203 => 86,  199 => 85,  195 => 84,  191 => 83,  187 => 82,  183 => 81,  179 => 80,  150 => 53,  138 => 43,  132 => 41,  130 => 40,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  84 => 15,  79 => 13,  74 => 11,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <!DOCTYPE html>
    <html lang=\"en\">
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/>
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <meta name=\"description\" content=\"Assignment\"/>
        <meta name=\"author\" content=\"Laborator.co\"/>
        <link rel=\"icon\" href=\"{{ asset('content/') }}assets/images/favicon.ico\">
        <title>Login</title>
        <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css\"
              id=\"style-resource-1\">
        <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/font-icons/entypo/css/entypo.css\" id=\"style-resource-2\">
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic\"
              id=\"style-resource-3\">
        <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/bootstrap.css\" id=\"style-resource-4\">
        <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/neon-core.css\" id=\"style-resource-5\">
        <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/neon-theme.css\" id=\"style-resource-6\">
        <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/neon-forms.css\" id=\"style-resource-7\">
        <link rel=\"stylesheet\" href=\"{{ asset('content/') }}assets/css/custom.css\" id=\"style-resource-8\">
        <script src=\"{{ asset('content/') }}assets/js/jquery-1.11.3.min.js\"></script>
        <!--[if lt IE 9]>
        <script src=\"https://demo.neontheme.com/assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script> <![endif]-->
        <!-- TS1538378540: Neon - Responsive Admin Template created by Laborator --> </head>
    <body class=\"page-body login-page login-form-fall\" data-url=\"https://demo.neontheme.com\">
    <!-- TS153837854011138: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
    <script type=\"text/javascript\">
        var baseurl = '../../index.html';
    </script>
    <div class=\"login-container\">
        <div class=\"login-header login-caret\" style=\"padding: 30px 0px!important;\">
            <div class=\"login-content\"><a href=\"#\" class=\"logo\" style=\"font-size: 35px;\"> Connectez-vous ici </a>
                <p class=\"description\">Cher administrateur, connectez-vous pour démarrer votre session!</p> <!-- progress bar indicator -->
                <p class=\"description\">
                    {% if NotMatch is defined %}
                        {{ NotMatch }}
                    {% endif %}
                </p> <!-- progress bar indicator -->
            </div>
        </div>
        <div class=\"login-progressbar\">
            <div></div>
        </div>
        <div class=\"login-form\">
            <div class=\"login-content\">
                <div class=\"form-login-error\"><h3>Invalid login</h3>
                    <p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p></div>
                <h4 style=\"color: #fff; padding-bottom: 3px;\">{#{{ NotMatch }}#}</h4>


                <form action=\"\" method=\"post\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\"><i class=\"entypo-user\"></i></div>
                            <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\" placeholder=\"Nom d'utilisateur\"
                                   autocomplete=\"off\"/></div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\"><i class=\"entypo-key\"></i></div>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"Mot de passe\"
                                   autocomplete=\"off\"/></div>
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-login\"><i class=\"entypo-login\"></i>
                            S'identifier
                        </button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <script src=\"{{ asset('content/') }}assets/js/gsap/TweenMax.min.js\" id=\"script-resource-1\"></script>
    <script src=\"{{ asset('content/') }}assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js\" id=\"script-resource-2\"></script>
    <script src=\"{{ asset('content/') }}assets/js/bootstrap.js\" id=\"script-resource-3\"></script>
    <script src=\"{{ asset('content/') }}assets/js/joinable.js\" id=\"script-resource-4\"></script>
    <script src=\"{{ asset('content/') }}assets/js/resizeable.js\" id=\"script-resource-5\"></script>
    <script src=\"{{ asset('content/') }}assets/js/neon-api.js\" id=\"script-resource-6\"></script>
    <script src=\"{{ asset('content/') }}assets/js/cookies.min.js\" id=\"script-resource-7\"></script>
    <script src=\"{{ asset('content/') }}assets/js/jquery.validate.min.js\" id=\"script-resource-8\"></script>
    <script src=\"{{ asset('content/') }}assets/js/neon-login.js\" id=\"script-resource-9\"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src=\"{{ asset('content/') }}assets/js/neon-custom.js\" id=\"script-resource-10\"></script> <!-- Demo Settings -->
    <script src=\"{{ asset('content/') }}assets/js/neon-demo.js\" id=\"script-resource-11\"></script>
    <script src=\"{{ asset('content/') }}assets/js/neon-skins.js\" id=\"script-resource-12\"></script>
    <script type=\"text/javascript\">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-28991003-7']);
        _gaq.push(['_setDomainName', 'demo.neontheme.com']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    </body>
    </html>

{% endblock %}", "admin/login.html.twig", "C:\\wamp64\\www\\la-pizza-v\\templates\\admin\\login.html.twig");
    }
}

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
class __TwigTemplate_b95c59a6839c3bbf5135fa07e3b6b3405adbeef9d1e3c76520b38bca3b2ddbb0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'menu' => [$this, 'block_menu'],
            'contenu' => [$this, 'block_contenu'],
            'footer' => [$this, 'block_footer'],
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
        echo "<html lang=\"fr\">
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 209
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>Restaurant Bigchos</title>
        <meta name=\"description\" content=\"Resto\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        ";
        // line 13
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        <!-- Fonts -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icon-font.min.css"), "html", null, true);
        echo "\">
        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.min.css"), "html", null, true);
        echo "\">
    </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    <body data-spy=\"scroll\" data-target=\"#navbar\" class=\"static-layout\">
    <div id=\"canvas-overlay\"></div>
    <div class=\"boxed-page\">
        ";
        // line 24
        $this->displayBlock('menu', $context, $blocks);
        // line 90
        echo "        ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 92
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 171
        echo "    </div>
    <script>
        \$(function () {
            \$('[data-toggle=tooltip]').tooltip({
                animated: 'fade',
                html: true
            });
        });

        function commander() {
            var request = \$.ajax({
                url: \"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("command");
        echo "\",
                method: \"POST\",
                data: {id: 44},
                dataType: \"html\"
            });

            request.done(function (msg) {
                switch (msg) {
                    case 'noconnect' :
                        \$(location).attr('href', \"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\");
                        break;
                }
            });

            request.fail(function (jqXHR, textStatus) {
                alert(\"Request failed: \" + textStatus);

            })
        }

    </script>
    </div>
    <script>
        ";
        // line 205
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    </script>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 25
        echo "            <nav id=\"navbar-header\" class=\"navbar navbar-expand-lg sticky-top bg-white\">
                <div class=\"container\">
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#navbarSupportedContent\"
                            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"lnr lnr-menu\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav d-flex justify-content-between\">
                            <li class=\"nav-item only-desktop\">
                                <a class=\"nav-link\" id=\"side-nav-open\" href=\"#\">
                                    <span class=\"lnr lnr-menu\"></span>
                                </a>
                            </li>
                            <div class=\"d-flex flex-lg-row flex-column\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"about.html\">About</a>
                                </li>

                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Special Dishes
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item\" href=\"special-dishes.html\">Beef Steak Sauce</a>
                                        <a class=\"dropdown-item\" href=\"special-dishes.html\">Salmon Zucchini</a>
                                    </div>
                                </li>
                            </div>
                        </ul>

                        <a class=\"navbar-brand navbar-brand-center d-flex align-items-center only-desktop\" href=\"#\">
                            <img src=\"img/logo2.png\" alt=\"\">
                        </a>
                        <ul class=\"navbar-nav d-flex justify-content-between\">
                            <div class=\"d-flex flex-lg-row flex-column\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"menu.html\">Menu</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"card-link\" data-toggle=\"collapse\" href=\"#collapseOne\">Team</a>
                                </li>

                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link\" href=\"#connexion\"> Se connecter</a>
                                </li>
                            </div>
                            <li class=\"nav-item\">
                                <a id=\"side-search-open\" class=\"nav-link\" href=\"#\">
                                    <span class=\" lnr lnr-user\"></span>
                                </a>
                            </li>
                            <li class=\"text-center lnr lnr-user text-red text-10\"
                                style=\"line-height: 35px; position: relative; top: -3px;\">5
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 91
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 93
        echo "            <footer class=\"mastfoot pb-5 bg-white section-padding pb-0\">
                <div class=\"inner container\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"footer-widget pr-lg-5 pr-0\">
                                <img src=\"img/logo.png\" class=\"img-fluid footer-logo mb-3\" alt=\"\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id
                                    sit
                                    omnis
                                    explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi?
                                    Magni,
                                    et voluptatum dolorem.</p>
                                <nav class=\"nav nav-mastfoot justify-content-start\">
                                    <a class=\"nav-link\" href=\"#\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                    <a class=\"nav-link\" href=\"#\">
                                        <i class=\"fab fa-twitter\"></i>
                                    </a>
                                    <a class=\"nav-link\" href=\"#\">
                                        <i class=\"fab fa-instagram\"></i>
                                    </a>
                                </nav>
                            </div>

                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"footer-widget px-lg-5 px-0\">
                                <h4>Open Hours</h4>
                                <ul class=\"list-unstyled open-hours\">
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Monday</span><span>9:00 - 24:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Tuesday</span><span>9:00 - 24:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Wednesday</span><span>9:00 - 24:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Thursday</span><span>9:00 - 24:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Friday</span><span>9:00 - 02:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Saturday</span><span>9:00 - 02:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\"><span>Sunday</span><span> Closed</span>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class=\"col-lg-4\">
                            <div class=\"footer-widget pl-lg-5 pl-0\">
                                <h4>Newsletter</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <form id=\"newsletter\">
                                    <div class=\"form-group\">
                                        <input type=\"email\" class=\"form-control\" id=\"emailNewsletter\"
                                               aria-describedby=\"emailNewsletter\" placeholder=\"Enter email\">
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-primary w-100\">Submit</button>
                                </form>
                            </div>

                        </div>
                        <div class=\"col-md-12 d-flex align-items-center\">
                            <p class=\"mx-auto text-center mb-0\">Copyright 2019. All Right Reserved. Design by <a
                                        href=\"https://gettemplates.co\" target=\"_blank\">GetTemplates</a></p>
                        </div>

                    </div>
                </div>
            </footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  304 => 93,  294 => 92,  284 => 91,  274 => 90,  200 => 25,  190 => 24,  176 => 205,  159 => 191,  147 => 182,  134 => 171,  131 => 92,  128 => 90,  126 => 24,  121 => 21,  111 => 20,  98 => 17,  93 => 15,  88 => 13,  76 => 3,  66 => 2,  55 => 209,  53 => 20,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
{% block head %}
    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>Restaurant Bigchos</title>
        <meta name=\"description\" content=\"Resto\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        {{ encore_entry_link_tags('app') }}
        <!-- Fonts -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/icon-font.min.css') }}\">
        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.min.css') }}\">
    </head>
{% endblock %}
{% block body %}
    <body data-spy=\"scroll\" data-target=\"#navbar\" class=\"static-layout\">
    <div id=\"canvas-overlay\"></div>
    <div class=\"boxed-page\">
        {% block menu %}
            <nav id=\"navbar-header\" class=\"navbar navbar-expand-lg sticky-top bg-white\">
                <div class=\"container\">
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#navbarSupportedContent\"
                            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"lnr lnr-menu\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav d-flex justify-content-between\">
                            <li class=\"nav-item only-desktop\">
                                <a class=\"nav-link\" id=\"side-nav-open\" href=\"#\">
                                    <span class=\"lnr lnr-menu\"></span>
                                </a>
                            </li>
                            <div class=\"d-flex flex-lg-row flex-column\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"about.html\">About</a>
                                </li>

                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Special Dishes
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item\" href=\"special-dishes.html\">Beef Steak Sauce</a>
                                        <a class=\"dropdown-item\" href=\"special-dishes.html\">Salmon Zucchini</a>
                                    </div>
                                </li>
                            </div>
                        </ul>

                        <a class=\"navbar-brand navbar-brand-center d-flex align-items-center only-desktop\" href=\"#\">
                            <img src=\"img/logo2.png\" alt=\"\">
                        </a>
                        <ul class=\"navbar-nav d-flex justify-content-between\">
                            <div class=\"d-flex flex-lg-row flex-column\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"menu.html\">Menu</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"card-link\" data-toggle=\"collapse\" href=\"#collapseOne\">Team</a>
                                </li>

                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link\" href=\"#connexion\"> Se connecter</a>
                                </li>
                            </div>
                            <li class=\"nav-item\">
                                <a id=\"side-search-open\" class=\"nav-link\" href=\"#\">
                                    <span class=\" lnr lnr-user\"></span>
                                </a>
                            </li>
                            <li class=\"text-center lnr lnr-user text-red text-10\"
                                style=\"line-height: 35px; position: relative; top: -3px;\">5
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        {% endblock %}
        {% block contenu %}
        {% endblock contenu %}
        {% block footer %}
            <footer class=\"mastfoot pb-5 bg-white section-padding pb-0\">
                <div class=\"inner container\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"footer-widget pr-lg-5 pr-0\">
                                <img src=\"img/logo.png\" class=\"img-fluid footer-logo mb-3\" alt=\"\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id
                                    sit
                                    omnis
                                    explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi?
                                    Magni,
                                    et voluptatum dolorem.</p>
                                <nav class=\"nav nav-mastfoot justify-content-start\">
                                    <a class=\"nav-link\" href=\"#\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                    <a class=\"nav-link\" href=\"#\">
                                        <i class=\"fab fa-twitter\"></i>
                                    </a>
                                    <a class=\"nav-link\" href=\"#\">
                                        <i class=\"fab fa-instagram\"></i>
                                    </a>
                                </nav>
                            </div>

                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"footer-widget px-lg-5 px-0\">
                                <h4>Open Hours</h4>
                                <ul class=\"list-unstyled open-hours\">
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Monday</span><span>9:00 - 24:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Tuesday</span><span>9:00 - 24:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Wednesday</span><span>9:00 - 24:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Thursday</span><span>9:00 - 24:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Friday</span><span>9:00 - 02:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <span>Saturday</span><span>9:00 - 02:00</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\"><span>Sunday</span><span> Closed</span>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class=\"col-lg-4\">
                            <div class=\"footer-widget pl-lg-5 pl-0\">
                                <h4>Newsletter</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <form id=\"newsletter\">
                                    <div class=\"form-group\">
                                        <input type=\"email\" class=\"form-control\" id=\"emailNewsletter\"
                                               aria-describedby=\"emailNewsletter\" placeholder=\"Enter email\">
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-primary w-100\">Submit</button>
                                </form>
                            </div>

                        </div>
                        <div class=\"col-md-12 d-flex align-items-center\">
                            <p class=\"mx-auto text-center mb-0\">Copyright 2019. All Right Reserved. Design by <a
                                        href=\"https://gettemplates.co\" target=\"_blank\">GetTemplates</a></p>
                        </div>

                    </div>
                </div>
            </footer>
        {% endblock %}
    </div>
    <script>
        \$(function () {
            \$('[data-toggle=tooltip]').tooltip({
                animated: 'fade',
                html: true
            });
        });

        function commander() {
            var request = \$.ajax({
                url: \"{{ path('command') }}\",
                method: \"POST\",
                data: {id: 44},
                dataType: \"html\"
            });

            request.done(function (msg) {
                switch (msg) {
                    case 'noconnect' :
                        \$(location).attr('href', \"{{ path('connexion') }}\");
                        break;
                }
            });

            request.fail(function (jqXHR, textStatus) {
                alert(\"Request failed: \" + textStatus);

            })
        }

    </script>
    </div>
    <script>
        {{ encore_entry_script_tags('app') }}
    </script>
    </body>
{% endblock %}
</html>
", "base.html.twig", "C:\\Users\\elhayani\\Desktop\\bureau\\projets\\bigchos\\templates\\base.html.twig");
    }
}

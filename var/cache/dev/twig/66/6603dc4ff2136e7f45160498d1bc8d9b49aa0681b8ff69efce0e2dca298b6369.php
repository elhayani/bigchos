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
class __TwigTemplate_4c8dce999820db07e45cbbbba88c3617bff3d44f6ea4cb01260011ae8f2d22b4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'menu' => [$this, 'block_menu'],
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
<html>
<head>
    <title>RESTO</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
";
        // line 12
        $this->displayBlock('menu', $context, $blocks);
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "
    <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark justify-content-center\">
        <!-- Links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Link 1</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Link 2</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.png"), "html", null, true);
        echo "\" alt=\"logo\" style=\"width:40px;\">
            </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Link 2</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Link 3</a>
            </li>
        </ul>
    </nav>

    <div class=\"container-fluid\">
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">
        <ul class=\"carousel-indicators\">
            <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#demo\" data-slide-to=\"1\"></li>
            <li data-target=\"#demo\" data-slide-to=\"2\"></li>
        </ul>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/la.jpg"), "html", null, true);
        echo "\"\" alt=\"Los Angeles\" width=\"1100\" height=\"500\">
                <div class=\"carousel-caption\">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/chicago.jpg"), "html", null, true);
        echo "\" alt=\"Chicago\" width=\"1100\" height=\"500\">
                <div class=\"carousel-caption\">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ny.jpg"), "html", null, true);
        echo "\" alt=\"New York\" width=\"1100\" height=\"500\">
                <div class=\"carousel-caption\">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\"></span>
        </a>
        <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\"></span>
        </a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
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
        return array (  225 => 79,  215 => 78,  190 => 63,  180 => 56,  170 => 49,  160 => 41,  150 => 40,  125 => 25,  111 => 13,  101 => 12,  88 => 8,  78 => 7,  67 => 81,  65 => 78,  63 => 40,  61 => 12,  57 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>RESTO</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
</head>
<body>
{% block menu %}

    <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark justify-content-center\">
        <!-- Links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Link 1</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Link 2</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"{{ asset('img/logo2.png')}}\" alt=\"logo\" style=\"width:40px;\">
            </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Link 2</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Link 3</a>
            </li>
        </ul>
    </nav>

    <div class=\"container-fluid\">
    </div>
{% endblock %}
{% block body %}
    <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">
        <ul class=\"carousel-indicators\">
            <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#demo\" data-slide-to=\"1\"></li>
            <li data-target=\"#demo\" data-slide-to=\"2\"></li>
        </ul>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"{{ asset('img/la.jpg')}}\"\" alt=\"Los Angeles\" width=\"1100\" height=\"500\">
                <div class=\"carousel-caption\">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('img/chicago.jpg')}}\" alt=\"Chicago\" width=\"1100\" height=\"500\">
                <div class=\"carousel-caption\">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('img/ny.jpg')}}\" alt=\"New York\" width=\"1100\" height=\"500\">
                <div class=\"carousel-caption\">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\"></span>
        </a>
        <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\"></span>
        </a>
    </div>
{% endblock %}
{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
{% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\33627\\Desktop\\Nouveau dossier\\bigchos\\templates\\base.html.twig");
    }
}

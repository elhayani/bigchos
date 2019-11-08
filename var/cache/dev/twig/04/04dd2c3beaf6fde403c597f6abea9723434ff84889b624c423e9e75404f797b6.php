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

/* connexion/index.html.twig */
class __TwigTemplate_c1853b36a86461fe25bec285824ca134e60a0900fcc06d6a8289a93f37aca86a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenu' => [$this, 'block_contenu'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "connexion/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "    <div class=\"container align-items-center \">
        <div class=\"row\">

            <div class=\"main\">

                <h3>Please Log In, or <a href=\"#\">Sign Up</a></h3>
                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
                        <a href=\"#\" class=\"btn btn-lg btn-primary btn-block\">Facebook</a>
                    </div>
                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
                        <a href=\"#\" class=\"btn btn-lg btn-info btn-block\">Google</a>
                    </div>
                </div>
                <div class=\"login-or\">
                    <hr class=\"hr-or\">
                    <span class=\"span-or\">or</span>
                </div>

                <form role=\"form\">
                    <div class=\"form-group\">
                        <label for=\"inputUsernameEmail\">Username or email</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputUsernameEmail\">
                    </div>
                    <div class=\"form-group\">
                        <a class=\"pull-right\" href=\"#\">Forgot password?</a>
                        <label for=\"inputPassword\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"inputPassword\">
                    </div>
                    <div class=\"checkbox pull-right\">
                        <label>
                            <input type=\"checkbox\">
                            Remember me </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn btn-primary\">
                        Log In
                    </button>
                </form>

            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "connexion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 48,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block contenu %}
    <div class=\"container align-items-center \">
        <div class=\"row\">

            <div class=\"main\">

                <h3>Please Log In, or <a href=\"#\">Sign Up</a></h3>
                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
                        <a href=\"#\" class=\"btn btn-lg btn-primary btn-block\">Facebook</a>
                    </div>
                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
                        <a href=\"#\" class=\"btn btn-lg btn-info btn-block\">Google</a>
                    </div>
                </div>
                <div class=\"login-or\">
                    <hr class=\"hr-or\">
                    <span class=\"span-or\">or</span>
                </div>

                <form role=\"form\">
                    <div class=\"form-group\">
                        <label for=\"inputUsernameEmail\">Username or email</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputUsernameEmail\">
                    </div>
                    <div class=\"form-group\">
                        <a class=\"pull-right\" href=\"#\">Forgot password?</a>
                        <label for=\"inputPassword\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"inputPassword\">
                    </div>
                    <div class=\"checkbox pull-right\">
                        <label>
                            <input type=\"checkbox\">
                            Remember me </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn btn-primary\">
                        Log In
                    </button>
                </form>

            </div>

        </div>
    </div>
{% endblock %}
 {% block footer %}{% endblock %}", "connexion/index.html.twig", "C:\\Users\\elhayani\\Desktop\\bureau\\projets\\bigchos\\templates\\connexion\\index.html.twig");
    }
}

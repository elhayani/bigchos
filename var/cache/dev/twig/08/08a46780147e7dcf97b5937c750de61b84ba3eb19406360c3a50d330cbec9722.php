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

/* command/index.html.twig */
class __TwigTemplate_a7fc7cc43ad966ade976ca8b268347e1b82a885b42122a06de3fa0f3fc5aff58 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenu' => [$this, 'block_contenu'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "command/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "command/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "command/index.html.twig", 1);
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
        echo "    <div id=\"custom-templates\">
        <input class=\"typeahead\" type=\"text\" placeholder=\"Adresse de livraison\" id=\"adresse\">
    </div>
    <div id=\"adresses\"></div>


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.12.0/lodash.min.js\"></script>
    <script>

        \$(\"#adresse\").keypress(function () {
            var adresse = \$('#adresse').val();
            \$.ajax({
                url: 'https://api-adresse.data.gouv.fr/search/',
                type: 'GET',
                data: 'q=' + adresse,
                dataType: 'html', // On désire recevoir du HTML
                success: function (obj, statut) { // code_html contient le HTML renvoyé
                    var obj = jQuery.parseJSON(obj);
                    features = obj.features;
                    var html = '';
                    for (var i = 0; i < features.length; i++) {
                        html = html + '<div class=\"form-check\"><label class=\"form-radio-label\"><input type=\"radio\" class=\"form-check-input\" name=\"optradio\">' + features[i].properties.label + '</label></div>';
                    }
                    \$(\"#adresses\").html(html);
                }
            });

        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "command/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block contenu %}
    <div id=\"custom-templates\">
        <input class=\"typeahead\" type=\"text\" placeholder=\"Adresse de livraison\" id=\"adresse\">
    </div>
    <div id=\"adresses\"></div>


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.12.0/lodash.min.js\"></script>
    <script>

        \$(\"#adresse\").keypress(function () {
            var adresse = \$('#adresse').val();
            \$.ajax({
                url: 'https://api-adresse.data.gouv.fr/search/',
                type: 'GET',
                data: 'q=' + adresse,
                dataType: 'html', // On désire recevoir du HTML
                success: function (obj, statut) { // code_html contient le HTML renvoyé
                    var obj = jQuery.parseJSON(obj);
                    features = obj.features;
                    var html = '';
                    for (var i = 0; i < features.length; i++) {
                        html = html + '<div class=\"form-check\"><label class=\"form-radio-label\"><input type=\"radio\" class=\"form-check-input\" name=\"optradio\">' + features[i].properties.label + '</label></div>';
                    }
                    \$(\"#adresses\").html(html);
                }
            });

        });

    </script>
{% endblock %}








", "command/index.html.twig", "C:\\Users\\33627\\Desktop\\Nouveau dossier\\bigchos\\templates\\command\\index.html.twig");
    }
}

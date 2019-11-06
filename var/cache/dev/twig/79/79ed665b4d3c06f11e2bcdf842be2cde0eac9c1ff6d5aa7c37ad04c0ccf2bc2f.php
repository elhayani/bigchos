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

/* index/index.html.twig */
class __TwigTemplate_0c14eb667c7793090b5f6ee34918134c444323a645e13fbff30feecd883563fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        // line 1
        echo "<html lang=\"fr\">

<head>

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
<body data-spy=\"scroll\" data-target=\"#navbar\" class=\"static-layout\">
<div id=\"canvas-overlay\"></div>
<div class=\"boxed-page\">
    <nav id=\"navbar-header\" class=\"navbar navbar-expand-lg sticky-top bg-white\">
        <div class=\"container\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
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
                            <a class=\"nav-link\" href=\"team.html\">Team</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" href=\"reservation.html\">Reservation</a>
                        </li>
                    </div>
                    <li class=\"nav-item\">
                        <a id=\"side-search-open\" class=\"nav-link\" href=\"#\">
                            <span class=\"lnr lnr-magnifier\"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class=\"hero\">
        <div class=\"container\">
            <div class=\"row align-items-start\">
                <div class=\"col-6\">
                    <img src=\"img/logo75.png\" class=\"img-fluid \" alt=\"\">
                    <div class=\"mb-8 align-items-center\">
                        <a class=\"btn btn-primary btn-shadow btn-lg align-items-center\" href=\"#\" role=\"button\">Explore
                            Menu</a>
                    </div>

                    <ul class=\"hero-info list-unstyled d-flex text-center mb-0\">
                        <li class=\"border-right\">
                            <span class=\"lnr lnr-rocket\"></span>
                            <h5>
                                Fast Delivery
                            </h5>
                        </li>
                        <li class=\"border-right\">
                            <span class=\"lnr lnr-leaf\"></span>
                            <h5>
                                Fresh Food
                            </h5>
                        </li>
                        <li class=\"\">
                            <span class=\"lnr lnr-bubble\"></span>
                            <h5>
                                24/7 Support
                            </h5>
                        </li>
                    </ul>

                </div>
                <div class=\"col-lg-6 menu-wrap\">
                    <div class=\"menus d-flex align-items-center\">
                        <div class=\"col-12\">

                                <ul class=\"carousel-indicators\">
                                    <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
                                    <li data-target=\"#demo\" data-slide-to=\"1\"></li>
                                    <li data-target=\"#demo\" data-slide-to=\"2\"></li>
                                </ul>
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                        <img src=\"img/hero-1.jpg\" alt=\"Los Angeles\" class=\"img-fluid\">
                                        <div class=\"carousel-caption\">
                                            <h3>Los Angeles</h3>
                                            <p>We had such a great time in LA!</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"img/hero-2.jpg\" alt=\"Chicago\" class=\"img-fluid\">
                                        <div class=\"carousel-caption\">
                                            <h3>Chicago</h3>
                                            <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"img/hero-3.jpg\" alt=\"New York\" class=\"img-fluid\">
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
                        </div>
                    </div>
            </div>
        </div>
    </div>        <!-- Welcome Section -->
    <section id=\"gtco-welcome\" class=\"bg-white section-padding\">
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"row\">
                    <div class=\"col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2\"
                         style=\"background-image: url(img/hero-2.jpg);\">

                    </div>
                    <div class=\"col-sm-7 py-5 pl-md-0 pl-4\">
                        <div class=\"heading-section pl-lg-5 ml-md-5\">
                        <span class=\"subheading\">
                            About
                        </span>
                            <h2>
                                Welcome to Resto
                            </h2>
                        </div>
                        <div class=\"pl-lg-5 ml-md-5\">
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from
                                it would have been rewritten a thousand times and everything that was left from its
                                origin would be the word \"and\" and the Little Blind Text should turn around and return
                                to its own, safe country. A small river named Duden flows by their place and supplies it
                                with the necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.</p>
                            <h3 class=\"mt-5\">Special Recipe</h3>
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"thumb-menu\">
                                        <img class=\"img-fluid img-cover\" src=\"img/hero-1.jpg\"/>
                                        <h6>Australian Organic Beef</h6>
                                    </a>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"thumb-menu\">
                                        <img class=\"img-fluid img-cover\" src=\"img/hero-1.jpg\"/>
                                        <h6>Australian Organic Beef</h6>
                                    </a>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"thumb-menu\">
                                        <img class=\"img-fluid img-cover\" src=\"img/hero-1.jpg\"/>
                                        <h6>Australian Organic Beef</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Welcome Section -->        <!-- Special Dishes Section -->
    <section id=\"gtco-special-dishes\" class=\"bg-grey section-padding\">
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"heading-section text-center\">
                <span class=\"subheading\">
                    Specialties
                </span>
                    <h2>
                        Special Dishes
                    </h2>
                </div>
                <div class=\"row mt-5\">
                    <div class=\"col-lg-5 col-md-6 align-self-center py-5\">
                        <h2 class=\"special-number\">01.</h2>
                        <div class=\"dishes-text\">
                            <h3><span>Beef</span><br> Steak Sauce</h3>
                            <p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea
                                vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt
                                provident libero qui eum, corporis esse quos excepturi soluta?</p>
                            <h3 class=\"special-dishes-price\">\$15.00</h3>
                            <a href=\"#\" class=\"btn-primary mt-3\">book a table</a>
                        </div>
                    </div>
                    <div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0\">
                        <img src=\"img/steak.jpg\" alt=\"\" class=\"img-fluid shadow w-100\">
                    </div>
                </div>
                <div class=\"row mt-5\">
                    <div class=\"col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0\">
                        <img src=\"img/salmon-zucchini.jpg\" alt=\"\" class=\"img-fluid shadow w-100\">
                    </div>
                    <div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5\">
                        <h2 class=\"special-number\">02.</h2>
                        <div class=\"dishes-text\">
                            <h3><span>Salmon</span><br> Zucchini</h3>
                            <p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis,
                                accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus
                                eius. In a quis quibusdam omnis atque vero dolores!</p>
                            <h3 class=\"special-dishes-price\">\$12.00</h3>
                            <a href=\"#\" class=\"btn-primary mt-3\">book a table <span><i
                                            class=\"fa fa-long-arrow-right\"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Special Dishes Section -->        <!-- Menu Section -->
    <section id=\"gtco-menu\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-12\">
                        <div class=\"heading-section text-center\">
                        <span class=\"subheading\">
                            Specialties
                        </span>
                            <h2>
                                Our Menu
                            </h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 menu-wrap\">
                        <div class=\"heading-menu\">
                            <h3 class=\"text-center mb-5\">Breakfast</h3>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 menu-wrap\">
                        <div class=\"heading-menu\">
                            <h3 class=\"text-center mb-5\">Breakfast</h3>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 menu-wrap\">
                        <div class=\"heading-menu\">
                            <h3 class=\"text-center mb-5\">Breakfast</h3>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of menu Section -->        <!-- Testimonial Section-->
    <section id=\"gtco-testimonial\" class=\"overlay bg-fixed section-padding\"
             style=\"background-image: url(img/testi-bg.jpg);\">
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"heading-section text-center\">
                <span class=\"subheading\">
                    Testimony
                </span>
                    <h2>
                        Happy Customer
                    </h2>
                </div>
                <div class=\"row\">
                    <!-- Testimonial -->

                    <!-- End of Testimonial -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testimonial Section-->        <!-- Team Section -->
    <section id=\"gtco-team\" class=\"bg-white section-padding\">
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"heading-section text-center\">
                <span class=\"subheading\">
                    Specialties
                </span>
                    <h2>
                        Our Team
                    </h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"team-card mb-5\">
                            <img class=\"img-fluid\" src=\"img/chef-1.jpg\" alt=\"\">
                            <div class=\"team-desc\">
                                <h4 class=\"mb-0\">Aaron Patel</h4>
                                <p class=\"mb-1\">CEO</p>
                                <ul class=\"list-inline mb-0 team-social-links\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-instagram\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-google-plus-g\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"team-card mb-5\">
                            <img class=\"img-fluid\" src=\"img/chef-2.jpg\" alt=\"\">
                            <div class=\"team-desc\">
                                <h4 class=\"mb-0\">Daniel Tebas</h4>
                                <p class=\"mb-1\">Chef</p>
                                <ul class=\"list-inline mb-0 team-social-links\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-instagram\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-google-plus-g\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"team-card mb-5\">
                            <img class=\"img-fluid\" src=\"img/chef-3.jpg\" alt=\"\">
                            <div class=\"team-desc\">
                                <h4 class=\"mb-0\">Jon Snow</h4>
                                <p class=\"mb-1\">Chef</p>
                                <ul class=\"list-inline mb-0 team-social-links\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-instagram\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-google-plus-g\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Team Section -->        <!-- Reservation Section -->
    <section id=\"gtco-reservation\" class=\"bg-fixed bg-white section-padding overlay\"
             style=\"background-image: url(img/reservation-bg.jpg);\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"section-content bg-white p-5 shadow\">
                        <div class=\"heading-section text-center\">
                        <span class=\"subheading\">
                            Reservation
                        </span>
                            <h2>
                                Book Now
                            </h2>
                        </div>
                        <form method=\"post\" name=\"contact-us\" action=\"\">
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Name\">
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\">
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <input type=\"number\" class=\"form-control\" id=\"phoneNumber\" name=\"phoneNumber\"
                                           placeholder=\"Phone\">
                                </div>
                                <div class=\"col-md-6 form-group\">
                                    <div class=\"input-group date\" id=\"datetimepicker4\" data-target-input=\"nearest\">
                                        <input type=\"text\" class=\"form-control datetimepicker-input\"
                                               data-target=\"#datetimepicker4\" placeholder=\"Date\"/>
                                        <div class=\"input-group-append\" data-target=\"#datetimepicker4\"
                                             data-toggle=\"datetimepicker\">
                                            <div class=\"input-group-text\">
                                                <span class=\"lnr lnr-calendar-full\"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-6 form-group\">
                                    <div class=\"input-group date\" id=\"datetimepicker3\" data-target-input=\"nearest\">
                                        <input type=\"text\" class=\"form-control datetimepicker-input\"
                                               data-target=\"#datetimepicker3\" placeholder=\"Time\"/>
                                        <div class=\"input-group-append\" data-target=\"#datetimepicker3\"
                                             data-toggle=\"datetimepicker\">
                                            <div class=\"input-group-text\">
                                                <span class=\"lnr lnr-clock\"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-12 form-group\">
                                    <select class=\"form-control\" id=\"selectPerson\">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class=\"col-md-12 form-group\">
                                    <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"6\"
                                              placeholder=\"Your Message ...\"></textarea>
                                </div>
                                <div class=\"col-md-12 text-center\">
                                    <button class=\"btn btn-primary btn-shadow btn-lg\" type=\"submit\" name=\"submit\">Send
                                        Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End of Reservation Section -->
    <footer class=\"mastfoot pb-5 bg-white section-padding pb-0\">
        <div class=\"inner container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"footer-widget pr-lg-5 pr-0\">
                        <img src=\"img/logo.png\" class=\"img-fluid footer-logo mb-3\" alt=\"\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis
                            explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni,
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
                            <li class=\"d-flex justify-content-between\"><span>Monday</span><span>9:00 - 24:00</span></li>
                            <li class=\"d-flex justify-content-between\"><span>Tuesday</span><span>9:00 - 24:00</span>
                            </li>
                            <li class=\"d-flex justify-content-between\"><span>Wednesday</span><span>9:00 - 24:00</span>
                            </li>
                            <li class=\"d-flex justify-content-between\"><span>Thursday</span><span>9:00 - 24:00</span>
                            </li>
                            <li class=\"d-flex justify-content-between\"><span>Friday</span><span>9:00 - 02:00</span></li>
                            <li class=\"d-flex justify-content-between\"><span>Saturday</span><span>9:00 - 02:00</span>
                            </li>
                            <li class=\"d-flex justify-content-between\"><span>Sunday</span><span> Closed</span></li>
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
</div>
</div>
<script>
    ";
        // line 721
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
</script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  774 => 721,  67 => 17,  62 => 15,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">

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
<body data-spy=\"scroll\" data-target=\"#navbar\" class=\"static-layout\">
<div id=\"canvas-overlay\"></div>
<div class=\"boxed-page\">
    <nav id=\"navbar-header\" class=\"navbar navbar-expand-lg sticky-top bg-white\">
        <div class=\"container\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
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
                            <a class=\"nav-link\" href=\"team.html\">Team</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" href=\"reservation.html\">Reservation</a>
                        </li>
                    </div>
                    <li class=\"nav-item\">
                        <a id=\"side-search-open\" class=\"nav-link\" href=\"#\">
                            <span class=\"lnr lnr-magnifier\"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class=\"hero\">
        <div class=\"container\">
            <div class=\"row align-items-start\">
                <div class=\"col-6\">
                    <img src=\"img/logo75.png\" class=\"img-fluid \" alt=\"\">
                    <div class=\"mb-8 align-items-center\">
                        <a class=\"btn btn-primary btn-shadow btn-lg align-items-center\" href=\"#\" role=\"button\">Explore
                            Menu</a>
                    </div>

                    <ul class=\"hero-info list-unstyled d-flex text-center mb-0\">
                        <li class=\"border-right\">
                            <span class=\"lnr lnr-rocket\"></span>
                            <h5>
                                Fast Delivery
                            </h5>
                        </li>
                        <li class=\"border-right\">
                            <span class=\"lnr lnr-leaf\"></span>
                            <h5>
                                Fresh Food
                            </h5>
                        </li>
                        <li class=\"\">
                            <span class=\"lnr lnr-bubble\"></span>
                            <h5>
                                24/7 Support
                            </h5>
                        </li>
                    </ul>

                </div>
                <div class=\"col-lg-6 menu-wrap\">
                    <div class=\"menus d-flex align-items-center\">
                        <div class=\"col-12\">

                                <ul class=\"carousel-indicators\">
                                    <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
                                    <li data-target=\"#demo\" data-slide-to=\"1\"></li>
                                    <li data-target=\"#demo\" data-slide-to=\"2\"></li>
                                </ul>
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                        <img src=\"img/hero-1.jpg\" alt=\"Los Angeles\" class=\"img-fluid\">
                                        <div class=\"carousel-caption\">
                                            <h3>Los Angeles</h3>
                                            <p>We had such a great time in LA!</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"img/hero-2.jpg\" alt=\"Chicago\" class=\"img-fluid\">
                                        <div class=\"carousel-caption\">
                                            <h3>Chicago</h3>
                                            <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"img/hero-3.jpg\" alt=\"New York\" class=\"img-fluid\">
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
                        </div>
                    </div>
            </div>
        </div>
    </div>        <!-- Welcome Section -->
    <section id=\"gtco-welcome\" class=\"bg-white section-padding\">
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"row\">
                    <div class=\"col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2\"
                         style=\"background-image: url(img/hero-2.jpg);\">

                    </div>
                    <div class=\"col-sm-7 py-5 pl-md-0 pl-4\">
                        <div class=\"heading-section pl-lg-5 ml-md-5\">
                        <span class=\"subheading\">
                            About
                        </span>
                            <h2>
                                Welcome to Resto
                            </h2>
                        </div>
                        <div class=\"pl-lg-5 ml-md-5\">
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from
                                it would have been rewritten a thousand times and everything that was left from its
                                origin would be the word \"and\" and the Little Blind Text should turn around and return
                                to its own, safe country. A small river named Duden flows by their place and supplies it
                                with the necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.</p>
                            <h3 class=\"mt-5\">Special Recipe</h3>
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"thumb-menu\">
                                        <img class=\"img-fluid img-cover\" src=\"img/hero-1.jpg\"/>
                                        <h6>Australian Organic Beef</h6>
                                    </a>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"thumb-menu\">
                                        <img class=\"img-fluid img-cover\" src=\"img/hero-1.jpg\"/>
                                        <h6>Australian Organic Beef</h6>
                                    </a>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"thumb-menu\">
                                        <img class=\"img-fluid img-cover\" src=\"img/hero-1.jpg\"/>
                                        <h6>Australian Organic Beef</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Welcome Section -->        <!-- Special Dishes Section -->
    <section id=\"gtco-special-dishes\" class=\"bg-grey section-padding\">
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"heading-section text-center\">
                <span class=\"subheading\">
                    Specialties
                </span>
                    <h2>
                        Special Dishes
                    </h2>
                </div>
                <div class=\"row mt-5\">
                    <div class=\"col-lg-5 col-md-6 align-self-center py-5\">
                        <h2 class=\"special-number\">01.</h2>
                        <div class=\"dishes-text\">
                            <h3><span>Beef</span><br> Steak Sauce</h3>
                            <p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea
                                vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt
                                provident libero qui eum, corporis esse quos excepturi soluta?</p>
                            <h3 class=\"special-dishes-price\">\$15.00</h3>
                            <a href=\"#\" class=\"btn-primary mt-3\">book a table</a>
                        </div>
                    </div>
                    <div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0\">
                        <img src=\"img/steak.jpg\" alt=\"\" class=\"img-fluid shadow w-100\">
                    </div>
                </div>
                <div class=\"row mt-5\">
                    <div class=\"col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0\">
                        <img src=\"img/salmon-zucchini.jpg\" alt=\"\" class=\"img-fluid shadow w-100\">
                    </div>
                    <div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5\">
                        <h2 class=\"special-number\">02.</h2>
                        <div class=\"dishes-text\">
                            <h3><span>Salmon</span><br> Zucchini</h3>
                            <p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis,
                                accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus
                                eius. In a quis quibusdam omnis atque vero dolores!</p>
                            <h3 class=\"special-dishes-price\">\$12.00</h3>
                            <a href=\"#\" class=\"btn-primary mt-3\">book a table <span><i
                                            class=\"fa fa-long-arrow-right\"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Special Dishes Section -->        <!-- Menu Section -->
    <section id=\"gtco-menu\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-12\">
                        <div class=\"heading-section text-center\">
                        <span class=\"subheading\">
                            Specialties
                        </span>
                            <h2>
                                Our Menu
                            </h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 menu-wrap\">
                        <div class=\"heading-menu\">
                            <h3 class=\"text-center mb-5\">Breakfast</h3>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 menu-wrap\">
                        <div class=\"heading-menu\">
                            <h3 class=\"text-center mb-5\">Breakfast</h3>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 menu-wrap\">
                        <div class=\"heading-menu\">
                            <h3 class=\"text-center mb-5\">Breakfast</h3>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                        <div class=\"menus d-flex align-items-center\">
                            <div class=\"menu-img rounded-circle\">
                                <img class=\"img-fluid\" src=\"img/breakfast-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"text-wrap\">
                                <div class=\"row align-items-start\">
                                    <div class=\"col-8\">
                                        <h4>Egg Sandwich</h4>
                                    </div>
                                    <div class=\"col-4\">
                                        <h4 class=\"text-muted menu-price\">\$30</h4>
                                    </div>
                                </div>
                                <p>Meat Ball, Mie</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of menu Section -->        <!-- Testimonial Section-->
    <section id=\"gtco-testimonial\" class=\"overlay bg-fixed section-padding\"
             style=\"background-image: url(img/testi-bg.jpg);\">
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"heading-section text-center\">
                <span class=\"subheading\">
                    Testimony
                </span>
                    <h2>
                        Happy Customer
                    </h2>
                </div>
                <div class=\"row\">
                    <!-- Testimonial -->

                    <!-- End of Testimonial -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testimonial Section-->        <!-- Team Section -->
    <section id=\"gtco-team\" class=\"bg-white section-padding\">
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"heading-section text-center\">
                <span class=\"subheading\">
                    Specialties
                </span>
                    <h2>
                        Our Team
                    </h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"team-card mb-5\">
                            <img class=\"img-fluid\" src=\"img/chef-1.jpg\" alt=\"\">
                            <div class=\"team-desc\">
                                <h4 class=\"mb-0\">Aaron Patel</h4>
                                <p class=\"mb-1\">CEO</p>
                                <ul class=\"list-inline mb-0 team-social-links\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-instagram\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-google-plus-g\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"team-card mb-5\">
                            <img class=\"img-fluid\" src=\"img/chef-2.jpg\" alt=\"\">
                            <div class=\"team-desc\">
                                <h4 class=\"mb-0\">Daniel Tebas</h4>
                                <p class=\"mb-1\">Chef</p>
                                <ul class=\"list-inline mb-0 team-social-links\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-instagram\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-google-plus-g\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"team-card mb-5\">
                            <img class=\"img-fluid\" src=\"img/chef-3.jpg\" alt=\"\">
                            <div class=\"team-desc\">
                                <h4 class=\"mb-0\">Jon Snow</h4>
                                <p class=\"mb-1\">Chef</p>
                                <ul class=\"list-inline mb-0 team-social-links\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-instagram\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-google-plus-g\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Team Section -->        <!-- Reservation Section -->
    <section id=\"gtco-reservation\" class=\"bg-fixed bg-white section-padding overlay\"
             style=\"background-image: url(img/reservation-bg.jpg);\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"section-content bg-white p-5 shadow\">
                        <div class=\"heading-section text-center\">
                        <span class=\"subheading\">
                            Reservation
                        </span>
                            <h2>
                                Book Now
                            </h2>
                        </div>
                        <form method=\"post\" name=\"contact-us\" action=\"\">
                            <div class=\"row\">
                                <div class=\"col-md-12 form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Name\">
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\">
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <input type=\"number\" class=\"form-control\" id=\"phoneNumber\" name=\"phoneNumber\"
                                           placeholder=\"Phone\">
                                </div>
                                <div class=\"col-md-6 form-group\">
                                    <div class=\"input-group date\" id=\"datetimepicker4\" data-target-input=\"nearest\">
                                        <input type=\"text\" class=\"form-control datetimepicker-input\"
                                               data-target=\"#datetimepicker4\" placeholder=\"Date\"/>
                                        <div class=\"input-group-append\" data-target=\"#datetimepicker4\"
                                             data-toggle=\"datetimepicker\">
                                            <div class=\"input-group-text\">
                                                <span class=\"lnr lnr-calendar-full\"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-6 form-group\">
                                    <div class=\"input-group date\" id=\"datetimepicker3\" data-target-input=\"nearest\">
                                        <input type=\"text\" class=\"form-control datetimepicker-input\"
                                               data-target=\"#datetimepicker3\" placeholder=\"Time\"/>
                                        <div class=\"input-group-append\" data-target=\"#datetimepicker3\"
                                             data-toggle=\"datetimepicker\">
                                            <div class=\"input-group-text\">
                                                <span class=\"lnr lnr-clock\"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-12 form-group\">
                                    <select class=\"form-control\" id=\"selectPerson\">
                                        <option></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class=\"col-md-12 form-group\">
                                    <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"6\"
                                              placeholder=\"Your Message ...\"></textarea>
                                </div>
                                <div class=\"col-md-12 text-center\">
                                    <button class=\"btn btn-primary btn-shadow btn-lg\" type=\"submit\" name=\"submit\">Send
                                        Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End of Reservation Section -->
    <footer class=\"mastfoot pb-5 bg-white section-padding pb-0\">
        <div class=\"inner container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"footer-widget pr-lg-5 pr-0\">
                        <img src=\"img/logo.png\" class=\"img-fluid footer-logo mb-3\" alt=\"\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis
                            explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni,
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
                            <li class=\"d-flex justify-content-between\"><span>Monday</span><span>9:00 - 24:00</span></li>
                            <li class=\"d-flex justify-content-between\"><span>Tuesday</span><span>9:00 - 24:00</span>
                            </li>
                            <li class=\"d-flex justify-content-between\"><span>Wednesday</span><span>9:00 - 24:00</span>
                            </li>
                            <li class=\"d-flex justify-content-between\"><span>Thursday</span><span>9:00 - 24:00</span>
                            </li>
                            <li class=\"d-flex justify-content-between\"><span>Friday</span><span>9:00 - 02:00</span></li>
                            <li class=\"d-flex justify-content-between\"><span>Saturday</span><span>9:00 - 02:00</span>
                            </li>
                            <li class=\"d-flex justify-content-between\"><span>Sunday</span><span> Closed</span></li>
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
</div>
</div>
<script>
    {{ encore_entry_script_tags('app') }}
</script>

</body>
</html>
", "index/index.html.twig", "C:\\Users\\elhayani\\Desktop\\bureau\\projets\\bigchos\\templates\\index\\index.html.twig");
    }
}
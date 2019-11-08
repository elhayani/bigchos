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

/* home/index.html.twig */
class __TwigTemplate_73bc667494c2996b43bc374495df81dfc8f841d30fc885c82a27cdbbf37cba81 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "    <div id=\"accordion\" class=\"navbar navbar-expand-lg sticky-top bg-white\">
        <div class=\"card\">
            <div id=\"collapseOne\" class=\"collapse show\" data-parent=\"#accordion\">
                <div class=\"card-body\">
                    <b>TESTTTTTT</b><input>
                </div>
            </div>
        </div>
    </div>
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
                            <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">
                                <ul class=\"carousel-indicators\">
                                    <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
                                    <li data-target=\"#demo\" data-slide-to=\"1\"></li>
                                    <li data-target=\"#demo\" data-slide-to=\"2\"></li>
                                </ul>
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                        <img src=\"img/rfissa.jpg\" alt=\"Los Angeles\" class=\"img-fluid\">
                                        <div class=\"carousel-caption\">
                                            <h3>Los Angeles</h3>
                                            <p>We had such a great time in LA!</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"img/tajine.jpg\" alt=\"Chicago\" class=\"img-fluid\">
                                        <div class=\"carousel-caption\">
                                            <h3>Chicago</h3>
                                            <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"img/couscous.jpg\" alt=\"New York\" class=\"img-fluid\">
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
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it
                                came
                                from
                                it would have been rewritten a thousand times and everything that was left from
                                its
                                origin would be the word \"and\" and the Little Blind Text should turn around and
                                return
                                to its own, safe country. A small river named Duden flows by their place and
                                supplies it
                                with the necessary regelialia. It is a paradisematic country, in which roasted
                                parts
                                of
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
                            <p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Cupiditate, ea
                                vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea
                                nesciunt
                                provident libero qui eum, corporis esse quos excepturi soluta?</p>
                            <h3 class=\"special-dishes-price\">\$15.00</h3>
                            <a onclick=\"commander()\" class=\"btn-primary mt-3\">Commander</a>
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
                            <p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Blanditiis,
                                accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque
                                possimus
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
                                    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\"
                                           placeholder=\"Name\">
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\"
                                           placeholder=\"Email\">
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <input type=\"number\" class=\"form-control\" id=\"phoneNumber\"
                                           name=\"phoneNumber\"
                                           placeholder=\"Phone\">
                                </div>
                                <div class=\"col-md-6 form-group\">
                                    <div class=\"input-group date\" id=\"datetimepicker4\"
                                         data-target-input=\"nearest\">
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
                                    <div class=\"input-group date\" id=\"datetimepicker3\"
                                         data-target-input=\"nearest\">
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
                                    <button class=\"btn btn-primary btn-shadow btn-lg\" type=\"submit\"
                                            name=\"submit\">
                                        Send
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
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
    <div id=\"accordion\" class=\"navbar navbar-expand-lg sticky-top bg-white\">
        <div class=\"card\">
            <div id=\"collapseOne\" class=\"collapse show\" data-parent=\"#accordion\">
                <div class=\"card-body\">
                    <b>TESTTTTTT</b><input>
                </div>
            </div>
        </div>
    </div>
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
                            <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">
                                <ul class=\"carousel-indicators\">
                                    <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
                                    <li data-target=\"#demo\" data-slide-to=\"1\"></li>
                                    <li data-target=\"#demo\" data-slide-to=\"2\"></li>
                                </ul>
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                        <img src=\"img/rfissa.jpg\" alt=\"Los Angeles\" class=\"img-fluid\">
                                        <div class=\"carousel-caption\">
                                            <h3>Los Angeles</h3>
                                            <p>We had such a great time in LA!</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"img/tajine.jpg\" alt=\"Chicago\" class=\"img-fluid\">
                                        <div class=\"carousel-caption\">
                                            <h3>Chicago</h3>
                                            <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img src=\"img/couscous.jpg\" alt=\"New York\" class=\"img-fluid\">
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
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it
                                came
                                from
                                it would have been rewritten a thousand times and everything that was left from
                                its
                                origin would be the word \"and\" and the Little Blind Text should turn around and
                                return
                                to its own, safe country. A small river named Duden flows by their place and
                                supplies it
                                with the necessary regelialia. It is a paradisematic country, in which roasted
                                parts
                                of
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
                            <p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Cupiditate, ea
                                vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea
                                nesciunt
                                provident libero qui eum, corporis esse quos excepturi soluta?</p>
                            <h3 class=\"special-dishes-price\">\$15.00</h3>
                            <a onclick=\"commander()\" class=\"btn-primary mt-3\">Commander</a>
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
                            <p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Blanditiis,
                                accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque
                                possimus
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
                                    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\"
                                           placeholder=\"Name\">
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\"
                                           placeholder=\"Email\">
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <input type=\"number\" class=\"form-control\" id=\"phoneNumber\"
                                           name=\"phoneNumber\"
                                           placeholder=\"Phone\">
                                </div>
                                <div class=\"col-md-6 form-group\">
                                    <div class=\"input-group date\" id=\"datetimepicker4\"
                                         data-target-input=\"nearest\">
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
                                    <div class=\"input-group date\" id=\"datetimepicker3\"
                                         data-target-input=\"nearest\">
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
                                    <button class=\"btn btn-primary btn-shadow btn-lg\" type=\"submit\"
                                            name=\"submit\">
                                        Send
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
{% endblock contenu %}", "home/index.html.twig", "C:\\Users\\33627\\Desktop\\Nouveau dossier\\bigchos\\templates\\home\\index.html.twig");
    }
}

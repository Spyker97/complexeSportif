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

/* base.front.html.twig */
class __TwigTemplate_0ded6d1fdc4c1ad2e92da0ff679b2b8edd1a00861e68cd93468c087d4a414de1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ahmed' => [$this, 'block_ahmed'],
            'modifier' => [$this, 'block_modifier'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">

    <title>Training Studio - Free CSS Template</title>
    <!--

    TemplateMo 548 Training Studio

    https://templatemo.com/tm-548-training-studio

    -->
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/font-awesome.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/templatemo-training-studio.css"), "html", null, true);
        echo "\">



</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
        <span class=\"dot\"></span>
        <div class=\"dots\">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">Extra<em> Sport</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li class=\"scroll-to-section\"><a href=\"#top\" class=\"active\">Home</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#features\">About</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#our-classes\">Classes</a></li>
                        <li class=\"scroll-to-section\"><a href=\"/cours/showw\">Salle de Sport</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#contact-us\">Contact</a></li>
                        ";
        // line 63
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "                        <li class=\"main-button\"><a href=\"/inscription\">Sign Up</a></li>
                        <li class=\"main-button\"><a href=\"/connexion\">Sign In</a></li>
                        ";
        } else {
            // line 67
            echo "                        <li class=\"main-button\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\"><h8> Déconnexion </h8></a></li>
                        <li> <h6>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "username", [], "any", false, false, false, 68), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "prenom", [], "any", false, false, false, 68), "html", null, true);
            echo " </h6></li>
                        ";
        }
        // line 70
        echo "                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class=\"main-banner\" id=\"top\">
    ";
        // line 84
        $this->displayBlock('ahmed', $context, $blocks);
        // line 89
        echo "    <div class=\"video-overlay header-text\">
        <div class=\"caption\">
            <h6>work harder, get stronger</h6>
            <h2>easy with our <em>gym</em></h2>
            <div class=\"main-button scroll-to-section\">
                <a href=\"/inscription\">Become a member</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Features Item Start ***** -->
<section class=\"section\" id=\"features\">
    <div class=\"container\">
        ";
        // line 104
        $this->displayBlock('modifier', $context, $blocks);
        // line 187
        echo "    </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class=\"section\" id=\"call-to-action\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 offset-lg-1\">
                <div class=\"cta-content\">
                    <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                    <div class=\"main-button scroll-to-section\">
                        <a href=\"#our-classes\">Become a member</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Our Classes Start ***** -->
<section class=\"section\" id=\"our-classes\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading\">
                    <h2>Our <em>Classes</em></h2>
                    <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class=\"row\" id=\"tabs\">
            <div class=\"col-lg-4\">
                <ul>
                    <li><a href='#tabs-1'><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">First Training Class</a></li>
                    <li><a href='#tabs-2'><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Second Training Class</a></li>
                    <li><a href='#tabs-3'><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Third Training Class</a></li>
                    <li><a href='#tabs-4'><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/tabs-first-icon.png"), "html", null, true);
        echo "\" alt=\"\">Fourth Training Class</a></li>
                    <div class=\"main-rounded-button\"><a href=\"#\">View All Schedules</a></div>
                </ul>
            </div>
            <div class=\"col-lg-8\">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/training-image-01.jpg"), "html", null, true);
        echo "\" alt=\"First Class\">
                        <h4>First Training Class</h4>
                        <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-2'>
                        <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/training-image-02.jpg"), "html", null, true);
        echo "\" alt=\"Second Training\">
                        <h4>Second Training Class</h4>
                        <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-3'>
                        <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/training-image-03.jpg"), "html", null, true);
        echo "\" alt=\"Third Class\">
                        <h4>Third Training Class</h4>
                        <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-4'>
                        <img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/training-image-04.jpg"), "html", null, true);
        echo "\" alt=\"Fourth Training\">
                        <h4>Fourth Training Class</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Classes End ***** -->

<section class=\"section\" id=\"schedule\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading dark-bg\">
                    <h2>Classes <em>Schedule</em></h2>
                    <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"filters\">
                    <ul class=\"schedule-filter\">
                        <li class=\"active\" data-tsfilter=\"monday\">Monday</li>
                        <li data-tsfilter=\"tuesday\">Tuesday</li>
                        <li data-tsfilter=\"wednesday\">Wednesday</li>
                        <li data-tsfilter=\"thursday\">Thursday</li>
                        <li data-tsfilter=\"friday\">Friday</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-10 offset-lg-1\">
                <div class=\"schedule-table filtering\">
                    <table>
                        <tbody>
                        <tr>
                            <td class=\"day-time\">Fitness Class</td>
                            <td class=\"monday ts-item show\" data-tsmeta=\"monday\">10:00AM - 11:30AM</td>
                            <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">2:00PM - 3:30PM</td>
                            <td>William G. Stewart</td>
                        </tr>
                        <tr>
                            <td class=\"day-time\">Muscle Training</td>
                            <td class=\"friday ts-item\" data-tsmeta=\"friday\">10:00AM - 11:30AM</td>
                            <td class=\"thursday friday ts-item\" data-tsmeta=\"thursday\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                            <td>Paul D. Newman</td>
                        </tr>
                        <tr>
                            <td class=\"day-time\">Body Building</td>
                            <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">10:00AM - 11:30AM</td>
                            <td class=\"monday ts-item show\" data-tsmeta=\"monday\">2:00PM - 3:30PM</td>
                            <td>Boyd C. Harris</td>
                        </tr>
                        <tr>
                            <td class=\"day-time\">Yoga Training Class</td>
                            <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">10:00AM - 11:30AM</td>
                            <td class=\"friday ts-item\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                            <td>Hector T. Daigle</td>
                        </tr>
                        <tr>
                            <td class=\"day-time\">Advanced Training</td>
                            <td class=\"thursday ts-item\" data-tsmeta=\"thursday\">10:00AM - 11:30AM</td>
                            <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">2:00PM - 3:30PM</td>
                            <td>Bret D. Bowers</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Testimonials Starts ***** -->
<section class=\"section\" id=\"trainers\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading\">
                    <h2>Expert <em>Trainers</em></h2>
                    <img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"\">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/first-trainer.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Strength Trainer</span>
                        <h4>Bret D. Bowers</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/second-trainer.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Muscle Trainer</span>
                        <h4>Hector T. Daigl</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/third-trainer.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Power Trainer</span>
                        <h4>Paul D. Newman</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Testimonials Ends ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class=\"section\" id=\"contact-us\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div id=\"map\">
                    <iframe src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed\" width=\"100%\" height=\"600px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div class=\"contact-form\">
                    <form id=\"contact\" action=\"\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <fieldset>
                                    <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Your Name*\" required=\"\">
                                </fieldset>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <fieldset>
                                    <input name=\"email\" type=\"text\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"Your Email*\" required=\"\">
                                </fieldset>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <fieldset>
                                    <input name=\"subject\" type=\"text\" id=\"subject\" placeholder=\"Subject\">
                                </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                                <fieldset>
                                    <textarea name=\"message\" rows=\"6\" id=\"message\" placeholder=\"Message\" required=\"\"></textarea>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                                <fieldset>
                                    <button type=\"submit\" id=\"form-submit\" class=\"main-button\">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; 2020 Training Studio

                    - Designed by <a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\" target=\"_parent\">TemplateMo</a></p>

                <!-- You shall support us a little via PayPal to info@templatemo.com -->

            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap -->
<script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugins -->
<script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/scrollreveal.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/imgfix.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/mixitup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/accordions.js"), "html", null, true);
        echo "\"></script>

<!-- Global Init -->
<script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 84
    public function block_ahmed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ahmed"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ahmed"));

        // line 85
        echo "    <video autoplay muted loop id=\"bg-video\">
        <source src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/gym-video.mp4"), "html", null, true);
        echo " \" type=\"video/mp4\" />
    </video>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_modifier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modifier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modifier"));

        // line 105
        echo "        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading\">
                    <h2>Choose <em>Program</em></h2>
                    <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/line-dec.png"), "html", null, true);
        echo "\" alt=\"waves\">
                    <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
                </div>
            </div>

            <div class=\"col-lg-6\">

                <ul class=\"features-items\">

                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"First One\">
                        </div>
                        <div class=\"right-content\">
                            <h4>Basic Fitness</h4>
                            <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                            <a href=\"\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"second one\">
                        </div>
                        <div class=\"right-content\">
                            <h4>New Gym Training</h4>
                            <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                            <a href=\"#\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"third gym training\">
                        </div>
                        <div class=\"right-content\">
                            <h4>Basic Muscle Course</h4>
                            <p>Credit goes to <a rel=\"nofollow\" href=\"https://www.pexels.com\" target=\"_blank\">Pexels website</a> for images and video background used in this HTML template.</p>
                            <a href=\"#\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class=\"col-lg-6\">
                <ul class=\"features-items\">
                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"fourth muscle\">
                        </div>
                        <div class=\"right-content\">
                            <h4>Advanced Muscle Course</h4>
                            <p>You may want to browse through <a rel=\"nofollow\" href=\"https://templatemo.com/tag/digital-marketing\" target=\"_parent\">Digital Marketing</a> or <a href=\"https://templatemo.com/tag/corporate\">Corporate</a> HTML CSS templates on our website.</p>
                            <a href=\"#\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"training fifth\">
                        </div>
                        <div class=\"right-content\">
                            <h4>Yoga Training</h4>
                            <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                            <a href=\"#\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/features-first-icon.png"), "html", null, true);
        echo "\" alt=\"gym training\">
                        </div>
                        <div class=\"right-content\">
                            <h4>Body Building Course</h4>
                            <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                            <a href=\"#\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  685 => 174,  672 => 164,  659 => 154,  642 => 140,  629 => 130,  616 => 120,  602 => 109,  596 => 105,  586 => 104,  573 => 86,  570 => 85,  560 => 84,  546 => 488,  540 => 485,  536 => 484,  532 => 483,  528 => 482,  524 => 481,  520 => 480,  514 => 477,  510 => 476,  504 => 473,  417 => 389,  396 => 371,  375 => 353,  363 => 344,  294 => 278,  271 => 258,  260 => 250,  249 => 242,  238 => 234,  228 => 227,  224 => 226,  220 => 225,  216 => 224,  205 => 216,  174 => 187,  172 => 104,  155 => 89,  153 => 84,  137 => 70,  130 => 68,  125 => 67,  120 => 64,  118 => 63,  77 => 25,  72 => 23,  67 => 21,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">

    <title>Training Studio - Free CSS Template</title>
    <!--

    TemplateMo 548 Training Studio

    https://templatemo.com/tm-548-training-studio

    -->
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/assets/css/bootstrap.min.css') }}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('front/assets/css/font-awesome.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/templatemo-training-studio.css') }}\">



</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
        <span class=\"dot\"></span>
        <div class=\"dots\">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">Extra<em> Sport</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li class=\"scroll-to-section\"><a href=\"#top\" class=\"active\">Home</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#features\">About</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#our-classes\">Classes</a></li>
                        <li class=\"scroll-to-section\"><a href=\"/cours/showw\">Salle de Sport</a></li>
                        <li class=\"scroll-to-section\"><a href=\"#contact-us\">Contact</a></li>
                        {% if not app.user %}
                        <li class=\"main-button\"><a href=\"/inscription\">Sign Up</a></li>
                        <li class=\"main-button\"><a href=\"/connexion\">Sign In</a></li>
                        {% else %}
                        <li class=\"main-button\"><a href=\"{{ path('security_logout') }}\"><h8> Déconnexion </h8></a></li>
                        <li> <h6>{{ app.user.username }} {{ app.user.prenom }} </h6></li>
                        {% endif %}
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class=\"main-banner\" id=\"top\">
    {% block ahmed %}
    <video autoplay muted loop id=\"bg-video\">
        <source src=\"{{ asset('front/assets/images/gym-video.mp4')}} \" type=\"video/mp4\" />
    </video>
    {% endblock %}
    <div class=\"video-overlay header-text\">
        <div class=\"caption\">
            <h6>work harder, get stronger</h6>
            <h2>easy with our <em>gym</em></h2>
            <div class=\"main-button scroll-to-section\">
                <a href=\"/inscription\">Become a member</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Features Item Start ***** -->
<section class=\"section\" id=\"features\">
    <div class=\"container\">
        {% block modifier %}
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading\">
                    <h2>Choose <em>Program</em></h2>
                    <img src=\"{{ asset('front/assets/images/line-dec.png')}}\" alt=\"waves\">
                    <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
                </div>
            </div>

            <div class=\"col-lg-6\">

                <ul class=\"features-items\">

                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"{{ asset('front/assets/images/features-first-icon.png')}}\" alt=\"First One\">
                        </div>
                        <div class=\"right-content\">
                            <h4>Basic Fitness</h4>
                            <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                            <a href=\"\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"{{ asset('front/assets/images/features-first-icon.png')}}\" alt=\"second one\">
                        </div>
                        <div class=\"right-content\">
                            <h4>New Gym Training</h4>
                            <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                            <a href=\"#\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"{{ asset('front/assets/images/features-first-icon.png')}}\" alt=\"third gym training\">
                        </div>
                        <div class=\"right-content\">
                            <h4>Basic Muscle Course</h4>
                            <p>Credit goes to <a rel=\"nofollow\" href=\"https://www.pexels.com\" target=\"_blank\">Pexels website</a> for images and video background used in this HTML template.</p>
                            <a href=\"#\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class=\"col-lg-6\">
                <ul class=\"features-items\">
                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"{{ asset('front/assets/images/features-first-icon.png')}}\" alt=\"fourth muscle\">
                        </div>
                        <div class=\"right-content\">
                            <h4>Advanced Muscle Course</h4>
                            <p>You may want to browse through <a rel=\"nofollow\" href=\"https://templatemo.com/tag/digital-marketing\" target=\"_parent\">Digital Marketing</a> or <a href=\"https://templatemo.com/tag/corporate\">Corporate</a> HTML CSS templates on our website.</p>
                            <a href=\"#\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"{{ asset('front/assets/images/features-first-icon.png')}}\" alt=\"training fifth\">
                        </div>
                        <div class=\"right-content\">
                            <h4>Yoga Training</h4>
                            <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                            <a href=\"#\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                    <li class=\"feature-item\">
                        <div class=\"left-icon\">
                            <img src=\"{{ asset('front/assets/images/features-first-icon.png')}}\" alt=\"gym training\">
                        </div>
                        <div class=\"right-content\">
                            <h4>Body Building Course</h4>
                            <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                            <a href=\"#\" class=\"text-button\">Discover More</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
       {% endblock %}
    </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class=\"section\" id=\"call-to-action\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 offset-lg-1\">
                <div class=\"cta-content\">
                    <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                    <div class=\"main-button scroll-to-section\">
                        <a href=\"#our-classes\">Become a member</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Our Classes Start ***** -->
<section class=\"section\" id=\"our-classes\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading\">
                    <h2>Our <em>Classes</em></h2>
                    <img src=\"{{ asset('front/assets/images/line-dec.png')}}\" alt=\"\">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class=\"row\" id=\"tabs\">
            <div class=\"col-lg-4\">
                <ul>
                    <li><a href='#tabs-1'><img src=\"{{ asset('front/assets/images/tabs-first-icon.png')}}\" alt=\"\">First Training Class</a></li>
                    <li><a href='#tabs-2'><img src=\"{{ asset('front/assets/images/tabs-first-icon.png')}}\" alt=\"\">Second Training Class</a></li>
                    <li><a href='#tabs-3'><img src=\"{{ asset('front/assets/images/tabs-first-icon.png')}}\" alt=\"\">Third Training Class</a></li>
                    <li><a href='#tabs-4'><img src=\"{{ asset('front/assets/images/tabs-first-icon.png')}}\" alt=\"\">Fourth Training Class</a></li>
                    <div class=\"main-rounded-button\"><a href=\"#\">View All Schedules</a></div>
                </ul>
            </div>
            <div class=\"col-lg-8\">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src=\"{{ asset('front/assets/images/training-image-01.jpg')}}\" alt=\"First Class\">
                        <h4>First Training Class</h4>
                        <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-2'>
                        <img src=\"{{ asset('front/assets/images/training-image-02.jpg')}}\" alt=\"Second Training\">
                        <h4>Second Training Class</h4>
                        <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-3'>
                        <img src=\"{{ asset('front/assets/images/training-image-03.jpg')}}\" alt=\"Third Class\">
                        <h4>Third Training Class</h4>
                        <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-4'>
                        <img src=\"{{ asset('front/assets/images/training-image-04.jpg')}}\" alt=\"Fourth Training\">
                        <h4>Fourth Training Class</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                        <div class=\"main-button\">
                            <a href=\"#\">View Schedule</a>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Classes End ***** -->

<section class=\"section\" id=\"schedule\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading dark-bg\">
                    <h2>Classes <em>Schedule</em></h2>
                    <img src=\"{{ asset('front/assets/images/line-dec.png')}}\" alt=\"\">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"filters\">
                    <ul class=\"schedule-filter\">
                        <li class=\"active\" data-tsfilter=\"monday\">Monday</li>
                        <li data-tsfilter=\"tuesday\">Tuesday</li>
                        <li data-tsfilter=\"wednesday\">Wednesday</li>
                        <li data-tsfilter=\"thursday\">Thursday</li>
                        <li data-tsfilter=\"friday\">Friday</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-10 offset-lg-1\">
                <div class=\"schedule-table filtering\">
                    <table>
                        <tbody>
                        <tr>
                            <td class=\"day-time\">Fitness Class</td>
                            <td class=\"monday ts-item show\" data-tsmeta=\"monday\">10:00AM - 11:30AM</td>
                            <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">2:00PM - 3:30PM</td>
                            <td>William G. Stewart</td>
                        </tr>
                        <tr>
                            <td class=\"day-time\">Muscle Training</td>
                            <td class=\"friday ts-item\" data-tsmeta=\"friday\">10:00AM - 11:30AM</td>
                            <td class=\"thursday friday ts-item\" data-tsmeta=\"thursday\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                            <td>Paul D. Newman</td>
                        </tr>
                        <tr>
                            <td class=\"day-time\">Body Building</td>
                            <td class=\"tuesday ts-item\" data-tsmeta=\"tuesday\">10:00AM - 11:30AM</td>
                            <td class=\"monday ts-item show\" data-tsmeta=\"monday\">2:00PM - 3:30PM</td>
                            <td>Boyd C. Harris</td>
                        </tr>
                        <tr>
                            <td class=\"day-time\">Yoga Training Class</td>
                            <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">10:00AM - 11:30AM</td>
                            <td class=\"friday ts-item\" data-tsmeta=\"friday\">2:00PM - 3:30PM</td>
                            <td>Hector T. Daigle</td>
                        </tr>
                        <tr>
                            <td class=\"day-time\">Advanced Training</td>
                            <td class=\"thursday ts-item\" data-tsmeta=\"thursday\">10:00AM - 11:30AM</td>
                            <td class=\"wednesday ts-item\" data-tsmeta=\"wednesday\">2:00PM - 3:30PM</td>
                            <td>Bret D. Bowers</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Testimonials Starts ***** -->
<section class=\"section\" id=\"trainers\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"section-heading\">
                    <h2>Expert <em>Trainers</em></h2>
                    <img src=\"{{ asset('front/assets/images/line-dec.png')}}\" alt=\"\">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"{{ asset('front/assets/images/first-trainer.jpg')}}\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Strength Trainer</span>
                        <h4>Bret D. Bowers</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"{{ asset('front/assets/images/second-trainer.jpg')}}\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Muscle Trainer</span>
                        <h4>Hector T. Daigl</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"trainer-item\">
                    <div class=\"image-thumb\">
                        <img src=\"{{ asset('front/assets/images/third-trainer.jpg')}}\" alt=\"\">
                    </div>
                    <div class=\"down-content\">
                        <span>Power Trainer</span>
                        <h4>Paul D. Newman</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Testimonials Ends ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class=\"section\" id=\"contact-us\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div id=\"map\">
                    <iframe src=\"https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed\" width=\"100%\" height=\"600px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xs-12\">
                <div class=\"contact-form\">
                    <form id=\"contact\" action=\"\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12\">
                                <fieldset>
                                    <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Your Name*\" required=\"\">
                                </fieldset>
                            </div>
                            <div class=\"col-md-6 col-sm-12\">
                                <fieldset>
                                    <input name=\"email\" type=\"text\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"Your Email*\" required=\"\">
                                </fieldset>
                            </div>
                            <div class=\"col-md-12 col-sm-12\">
                                <fieldset>
                                    <input name=\"subject\" type=\"text\" id=\"subject\" placeholder=\"Subject\">
                                </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                                <fieldset>
                                    <textarea name=\"message\" rows=\"6\" id=\"message\" placeholder=\"Message\" required=\"\"></textarea>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-12\">
                                <fieldset>
                                    <button type=\"submit\" id=\"form-submit\" class=\"main-button\">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; 2020 Training Studio

                    - Designed by <a rel=\"nofollow\" href=\"https://templatemo.com\" class=\"tm-text-link\" target=\"_parent\">TemplateMo</a></p>

                <!-- You shall support us a little via PayPal to info@templatemo.com -->

            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src=\"{{ asset('front/assets/js/jquery-2.1.0.min.js')}}\"></script>

<!-- Bootstrap -->
<script src=\"{{ asset('front/assets/js/popper.js')}}\"></script>
<script src=\"{{ asset('front/assets/js/bootstrap.min.js')}}\"></script>

<!-- Plugins -->
<script src=\"{{ asset('front/assets/js/scrollreveal.min.js')}}\"></script>
<script src=\"{{ asset('front/assets/js/waypoints.min.js')}}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.counterup.min.js')}}\"></script>
<script src=\"{{ asset('front/assets/js/imgfix.min.js')}}\"></script>
<script src=\"{{ asset('front/assets/js/mixitup.js')}}\"></script>
<script src=\"{{ asset('front/assets/js/accordions.js')}}\"></script>

<!-- Global Init -->
<script src=\"{{ asset('front/assets/js/custom.js')}}\"></script>

</body>
</html>", "base.front.html.twig", "C:\\xampp\\htdocs\\complexeSportif\\templates\\base.front.html.twig");
    }
}

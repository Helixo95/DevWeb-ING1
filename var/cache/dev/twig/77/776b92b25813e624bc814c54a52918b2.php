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
class __TwigTemplate_ec24391078b223b6b388bdbf1174daa8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/logoicon.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet \" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css\">
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>
<body>
";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('content', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('footer', $context, $blocks);
        // line 239
        echo "

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/countdown.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 248
        $this->displayBlock('javascripts', $context, $blocks);
        // line 249
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " PERFUME CHEZ EXOTIK ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "    <header>
        <div class=\"main_header header_transparent header-mobile-m\">
            <div class=\"header_container sticky-header\">
                <div class=\"container-fluid\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-2\">
                            <div class=\"logo\">
                                <a href=\"base.html.twig\"><img src=\"\" alt=\"\"></a>
                            </div>
                        </div>

                        <div class=\"col-lg-6\">
                            <!-- main-menu starts -->
                            <div class=\"main_menu menu_two menu_position\">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"active\">Home </a>

                                        </li>

                                        <li>
                                            <a href=\"#\">Brands <i class=\"fa fa-angle-down\"></i></a>
                                                <ul class=\"sub_menu pages\">
                                                    <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Men</a></li>
                                                    <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signin");
        echo "\">Women</a></li>
                                                    <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signin");
        echo "\">Unisex</a></li>

                                                    ";
        // line 60
        echo "                                                </ul>
                                        </li>

                                        <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact Us</a></li>
                                        <li>
                                            <a href=\"#\">User <i class=\"fa fa-angle-down\"></i></a>
                                            <ul class=\"sub_menu pages\">
                                                <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Login In</a></li>
                                                <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signin");
        echo "\">Sign Up</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- main menu ends -->
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"header_top_right\">
                                <div class=\"header_right_info\">
                                    <ul>
                                        <li class=\"search_box\">
                                            <a href=\"javascript:void(0)\">
                                                <i class=\"fa fa-search\"></i>
                                            </a>
                                            <div class=\"search_widget\">
                                                <form action=\"#\">
                                                    <label>
                                                        <input type=\"text\" placeholder=\"Search your perfume\">
                                                    </label>
                                                    <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                                                </form>
                                            </div>
                                        </li>
                                        <li class=\"mini_cart_wrapper\">
                                            <a href=\"javascript:void(0)\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                                <span class=\"item_count\">2</span>
                                            </a>

                                            <!-- mini cart  -->
                                            <div class=\"mini_cart mini_cart2\">
                                                <div class=\"cart_gallery\">
                                                    <div class=\"cart_item\">
                                                        <div class=\"cart_img\">
                                                            <a href=\"#\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/small-product/mini1.png"), "html", null, true);
        echo "\" alt=\"Perfume\"></a>
                                                        </div>
                                                        <div class=\"cart_info\">
                                                            <a href=\"#\">Hugo Boss</a>
                                                            <p><span>100 €</span> X 1</p>
                                                        </div>
                                                        <div class=\"cart_remove\">
                                                            <a href=\"#\"><i class=\"fa fa-times\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"cart_item\">
                                                        <div class=\"cart_img\">
                                                            <a href=\"#\"><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/small-product/mini2.png"), "html", null, true);
        echo "\" alt=\"Perfume\"></a>
                                                        </div>
                                                        <div class=\"cart_info\">
                                                            <a href=\"#\">Bvlgari</a>
                                                            <p><span>100 €</span> X 1</p>
                                                        </div>
                                                        <div class=\"cart_remove\">
                                                            <a href=\"#\"><i class=\"fa fa-times\"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mini_cart_table\">
                                                    <div class=\"cart_table_border\">
                                                        <div class=\"cart_total\">
                                                            <span>Sub Total :</span>
                                                            <span class=\"price\">200€</span>
                                                        </div>

                                                        <div class=\"cart_total mt-10\">
                                                            <span>Total :</span>
                                                            <span class=\"price\">200 €</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class=\"mini_cart_footer\">
                                                    <div class=\"cart_button\">
                                                        <a href=\"#\">View Cart</a>
                                                    </div>
                                                    <div class=\"cart_button\">
                                                        <a href=\"#\">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- mini cart ends -->
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"header_account\">
                                    <ul>
                                        <li class=\"top_links\">
                                            <a href=\"#\">
                                                <i class=\"fa fa-cog\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 173
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 174
        echo "    <!-- Contenu spécifique à chaque page -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 177
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 178
        echo "    <footer class=\"footer_widgets color_two\">
        <div class=\"footer_top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 col-sm-7\">
                        <div class=\"widgets_container contact_us\">
                            <div class=\"footer_logo\">
                                <a href=\"#\"><img src=\"logo.png\" alt=\"Logo\"></a>
                            </div>
                            <div class=\"footer_desc\">
                                <p>At our store, you'll find an array of perfumes to match every mood and occasion. Can't find the fragrance you're dreaming of in our selection? Simply email us. We are dedicated to tracking down exclusive and elusive scents to elevate your perfume experience. Discover your new favorite fragrance with us today!</p>
                            </div>
                            <p>
                                <span>Address :</span> CY TECH, avenue du Parc 44 95000
                            </p>
                            <p><span>Email :</span> <a href=\"#\">cytech@gmail.com</a></p>
                            <p><span>Phone :</span> <a href=\"tel: 0198946526\">0198946526</a> </p>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-6 col-sm-5\">
                        <div class=\"widgets_container widget_menu\">
                            <h3>Information</h3>
                            <div class=\"footer_menu\">
                                <ul>
                                    <li><a href=\"#\">New Products</a></li>
                                    <li><a href=\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guidlines");
        echo "\">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer section starts  -->

        <div class=\"footer_bottom\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"copyright_area\">
                            <p>Copyright &copy; 2024 <a href=\"#\">EXOTIK </a>All right Reserved.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"footer_payment text-right\">
                            <ul>
                                <li><a href=\"#\"><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 248
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  469 => 248,  450 => 230,  446 => 229,  442 => 228,  438 => 227,  434 => 226,  430 => 225,  405 => 203,  378 => 178,  368 => 177,  357 => 174,  347 => 173,  282 => 117,  267 => 105,  227 => 68,  223 => 67,  216 => 63,  211 => 60,  206 => 44,  202 => 43,  198 => 42,  188 => 35,  169 => 18,  159 => 17,  141 => 14,  122 => 6,  110 => 249,  108 => 248,  104 => 247,  100 => 246,  91 => 239,  89 => 177,  86 => 176,  84 => 173,  81 => 172,  79 => 17,  75 => 15,  73 => 14,  64 => 8,  60 => 7,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %} PERFUME CHEZ EXOTIK {% endblock %}</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('base/logoicon.png') }}\">
    <link rel=\"stylesheet \" href=\"{{ asset('base/style.css') }}\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css\">
    {% block stylesheets %}{% endblock %}
</head>
<body>
{% block header %}
    <header>
        <div class=\"main_header header_transparent header-mobile-m\">
            <div class=\"header_container sticky-header\">
                <div class=\"container-fluid\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-2\">
                            <div class=\"logo\">
                                <a href=\"base.html.twig\"><img src=\"\" alt=\"\"></a>
                            </div>
                        </div>

                        <div class=\"col-lg-6\">
                            <!-- main-menu starts -->
                            <div class=\"main_menu menu_two menu_position\">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href=\"{{ path('app_home') }}\" class=\"active\">Home </a>

                                        </li>

                                        <li>
                                            <a href=\"#\">Brands <i class=\"fa fa-angle-down\"></i></a>
                                                <ul class=\"sub_menu pages\">
                                                    <li><a href=\"{{ path('app_login') }}\">Men</a></li>
                                                    <li><a href=\"{{ path('app_signin') }}\">Women</a></li>
                                                    <li><a href=\"{{ path('app_signin') }}\">Unisex</a></li>

                                                    {#
                                                    {% for cat, brands in brandLists %}
                                                        <li>
                                                            <a href=\"/product/{{ cat|lower }}\">{{ cat|capitalize }}</a>
                                                            {% if brands %}
                                                                <ul>
                                                                    {% for brand in brands %}
                                                                        <li><a href=\"/product/{{ cat|lower }}/{{ brand|replace({' ': '-'})|lower }}\">{{ brand }}</a></li>
                                                                    {% endfor %}
                                                                </ul>
                                                            {% endif %}
                                                        </li>
                                                    {% endfor %}
                                                    #}
                                                </ul>
                                        </li>

                                        <li><a href=\"{{ path('app_contact') }}\">Contact Us</a></li>
                                        <li>
                                            <a href=\"#\">User <i class=\"fa fa-angle-down\"></i></a>
                                            <ul class=\"sub_menu pages\">
                                                <li><a href=\"{{ path('app_login') }}\">Login In</a></li>
                                                <li><a href=\"{{ path('app_signin') }}\">Sign Up</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- main menu ends -->
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"header_top_right\">
                                <div class=\"header_right_info\">
                                    <ul>
                                        <li class=\"search_box\">
                                            <a href=\"javascript:void(0)\">
                                                <i class=\"fa fa-search\"></i>
                                            </a>
                                            <div class=\"search_widget\">
                                                <form action=\"#\">
                                                    <label>
                                                        <input type=\"text\" placeholder=\"Search your perfume\">
                                                    </label>
                                                    <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                                                </form>
                                            </div>
                                        </li>
                                        <li class=\"mini_cart_wrapper\">
                                            <a href=\"javascript:void(0)\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                                <span class=\"item_count\">2</span>
                                            </a>

                                            <!-- mini cart  -->
                                            <div class=\"mini_cart mini_cart2\">
                                                <div class=\"cart_gallery\">
                                                    <div class=\"cart_item\">
                                                        <div class=\"cart_img\">
                                                            <a href=\"#\"><img src=\"{{ asset('base/small-product/mini1.png') }}\" alt=\"Perfume\"></a>
                                                        </div>
                                                        <div class=\"cart_info\">
                                                            <a href=\"#\">Hugo Boss</a>
                                                            <p><span>100 €</span> X 1</p>
                                                        </div>
                                                        <div class=\"cart_remove\">
                                                            <a href=\"#\"><i class=\"fa fa-times\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"cart_item\">
                                                        <div class=\"cart_img\">
                                                            <a href=\"#\"><img src=\"{{ asset('base/small-product/mini2.png') }}\" alt=\"Perfume\"></a>
                                                        </div>
                                                        <div class=\"cart_info\">
                                                            <a href=\"#\">Bvlgari</a>
                                                            <p><span>100 €</span> X 1</p>
                                                        </div>
                                                        <div class=\"cart_remove\">
                                                            <a href=\"#\"><i class=\"fa fa-times\"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mini_cart_table\">
                                                    <div class=\"cart_table_border\">
                                                        <div class=\"cart_total\">
                                                            <span>Sub Total :</span>
                                                            <span class=\"price\">200€</span>
                                                        </div>

                                                        <div class=\"cart_total mt-10\">
                                                            <span>Total :</span>
                                                            <span class=\"price\">200 €</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class=\"mini_cart_footer\">
                                                    <div class=\"cart_button\">
                                                        <a href=\"#\">View Cart</a>
                                                    </div>
                                                    <div class=\"cart_button\">
                                                        <a href=\"#\">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- mini cart ends -->
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"header_account\">
                                    <ul>
                                        <li class=\"top_links\">
                                            <a href=\"#\">
                                                <i class=\"fa fa-cog\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
{% endblock %}

{% block content %}
    <!-- Contenu spécifique à chaque page -->
{% endblock %}

{% block footer %}
    <footer class=\"footer_widgets color_two\">
        <div class=\"footer_top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 col-sm-7\">
                        <div class=\"widgets_container contact_us\">
                            <div class=\"footer_logo\">
                                <a href=\"#\"><img src=\"logo.png\" alt=\"Logo\"></a>
                            </div>
                            <div class=\"footer_desc\">
                                <p>At our store, you'll find an array of perfumes to match every mood and occasion. Can't find the fragrance you're dreaming of in our selection? Simply email us. We are dedicated to tracking down exclusive and elusive scents to elevate your perfume experience. Discover your new favorite fragrance with us today!</p>
                            </div>
                            <p>
                                <span>Address :</span> CY TECH, avenue du Parc 44 95000
                            </p>
                            <p><span>Email :</span> <a href=\"#\">cytech@gmail.com</a></p>
                            <p><span>Phone :</span> <a href=\"tel: 0198946526\">0198946526</a> </p>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-6 col-sm-5\">
                        <div class=\"widgets_container widget_menu\">
                            <h3>Information</h3>
                            <div class=\"footer_menu\">
                                <ul>
                                    <li><a href=\"#\">New Products</a></li>
                                    <li><a href=\"{{ path('app_guidlines') }}\">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer section starts  -->

        <div class=\"footer_bottom\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"copyright_area\">
                            <p>Copyright &copy; 2024 <a href=\"#\">EXOTIK </a>All right Reserved.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"footer_payment text-right\">
                            <ul>
                                <li><a href=\"#\"><img src=\"{{ asset('base/icon/paypal.jpg') }}\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"{{ asset('base/icon/paypal1.jpg') }}\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"{{ asset('base/icon/paypal2.jpg') }}\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"{{ asset('base/icon/paypal3.jpg') }}\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"{{ asset('base/icon/paypal4.jpg') }}\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"{{ asset('base/icon/paypal5.jpg') }}\" alt=\"\"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
{% endblock %}


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js\"></script>
<script src=\"{{ asset('base/countdown.js') }}\"></script>
<script src=\"{{ asset('base/main.js') }}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/Users/aurelienruppe/PhpstormProjects/DevWeb-ING1/templates/base.html.twig");
    }
}

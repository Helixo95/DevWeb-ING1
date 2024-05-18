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
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\"></script>
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>
<body>
";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('content', $context, $blocks);
        // line 209
        echo "
";
        // line 210
        $this->displayBlock('footer', $context, $blocks);
        // line 272
        echo "

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js\"></script>
<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/countdown.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 281
        $this->displayBlock('javascripts', $context, $blocks);
        // line 282
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

    // line 16
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

    // line 19
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 20
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
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"active\">Home </a>
                                        </li>

                                        <li> ";
        // line 93
        echo "
                                        <li><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact Us</a></li>
                                        <li>
                                            <a href=\"#\">User <i class=\"fa fa-angle-down\"></i></a>
                                            <ul class=\"sub_menu pages\">
                                                <li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Login In</a></li>
                                                <li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
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
                                            <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                                <!-- mini cart <span class=\"item_count\">2</span> -->
                                            </a>

                                            <!-- mini cart  -->
                                            ";
        // line 184
        echo "                                            <!-- mini cart ends -->
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

    // line 206
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 207
        echo "    <!-- Contenu spécifique à chaque page -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 210
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 211
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
        // line 236
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
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 263
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

    // line 281
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
        return array (  401 => 281,  382 => 263,  378 => 262,  374 => 261,  370 => 260,  366 => 259,  362 => 258,  337 => 236,  310 => 211,  300 => 210,  289 => 207,  279 => 206,  249 => 184,  240 => 126,  210 => 99,  206 => 98,  199 => 94,  196 => 93,  190 => 37,  171 => 20,  161 => 19,  143 => 16,  124 => 6,  112 => 282,  110 => 281,  106 => 280,  102 => 279,  93 => 272,  91 => 210,  88 => 209,  86 => 206,  83 => 205,  81 => 19,  77 => 17,  75 => 16,  64 => 8,  60 => 7,  56 => 6,  49 => 1,);
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
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\"></script>
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

                                        <li> {#
                                            <a href=\"{{ path('app_product_men') }}\">Men <i class=\"fa fa-angle-down\"></i></a>
                                                <ul class=\"sub_menu pages\">
                                                    <ul >
                                                        <li><a href=\"{{ path('app_product_men_versace') }}\">Versace</a></li>
                                                        <li><a href=\"{{ path('app_product_men_hugo boss') }}\">Hugo Boss</a></li>
                                                        <li><a href=\"{{ path('app_product_men_jaguar') }}\">Jaguar</a></li>
                                                        <li><a href=\"{{ path('app_product_men_armani') }}\">Armani</a></li>
                                                        <li><a href=\"{{ path('app_product_men_paco rabbane') }}\">Paco Rabbane</a></li>
                                                        <li><a href=\"{{ path('app_product_men_ralph lauren') }}\">Ralph Lauren</a></li>
                                                    </ul>

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

                                                </ul>
                                        </li>

                                        <li>
                                            <a href=\"{{ path('app_product_women') }}\">Women<i class=\"fa fa-angle-down\"></i></a>
                                            <ul class=\"sub_menu pages\">
                                                <ul>
                                                    <li><a href=\"{{ path('app_product_women_bvlgari') }}\">Bvlgari</a></li>
                                                    <li><a href=\"{{ path('app_product_women_coach') }}\">Coach</a></li>
                                                    <li><a href=\"{{ path('app_product_women_kenzo') }}\">Kenzo</a></li>
                                                    <li><a href=\"{{ path('app_product_women_d&g') }}\">D&G</a></li>
                                                    <li><a href=\"{{ path('app_product_women_jean paul gaultier') }}\">Jean Paul Gaultier</a></li>
                                                </ul>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href=\"{{ path('app_product_unisex') }}\">Unisex<i class=\"fa fa-angle-down\"></i></a>
                                            <ul class=\"sub_menu pages\">
                                                <ul >
                                                    <li><a href=\"{{ path('app_product_unisex_ajmal') }}\">Ajmal</a></li>
                                                    <li><a href=\"{{ path('app_product_unisex_calvin klein') }}\">Calvin Klein</a></li>
                                                    <li><a href=\"{{ path('app_product_unisex_the body shop') }}\">The Body Shop</a></li>
                                                    <li><a href=\"{{ path('app_product_unisex_lattafa') }}\">Lattafa</a></li>
                                                </ul>
                                            </ul>
                                        </li> #}

                                        <li><a href=\"{{ path('app_contact') }}\">Contact Us</a></li>
                                        <li>
                                            <a href=\"#\">User <i class=\"fa fa-angle-down\"></i></a>
                                            <ul class=\"sub_menu pages\">
                                                <li><a href=\"{{ path('app_login') }}\">Login In</a></li>
                                                <li><a href=\"{{ path('app_register') }}\">Sign Up</a></li>
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
                                            <a href=\"{{ path(\"app_cart\") }}\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                                <!-- mini cart <span class=\"item_count\">2</span> -->
                                            </a>

                                            <!-- mini cart  -->
                                            {#
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
                                            #}
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

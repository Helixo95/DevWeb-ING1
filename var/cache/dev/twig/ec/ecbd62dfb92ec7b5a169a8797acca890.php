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
class __TwigTemplate_8133e80150015eda2667d5dec5d0f1e9 extends Template
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
        // line 328
        echo "
";
        // line 329
        $this->displayBlock('content', $context, $blocks);
        // line 332
        echo "
";
        // line 333
        $this->displayBlock('footer', $context, $blocks);
        // line 395
        echo "

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js\"></script>
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/countdown.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 404
        $this->displayBlock('javascripts', $context, $blocks);
        // line 405
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
        echo "    <div class=\"offcanvas_menu offcanvas_two\">
        <div class=\"canvas_open\">
            <a href=\"javascript:void(0)\"><i class=\"fa fa-bars\"></i></a>
        </div>
        <div class=\"offcanvas_menu_wrapper\">
            <div class=\"canvas_close\">
                <a href=\"javascript:void(0)\"><i class=\"fa fa-times\"></i></a>
            </div>
            <div class=\"header_account\">
                <ul>
                    <li class=\"top_links\">
                        <a href=\"#\" style=\"text-decoration: none;\">My Account <i class=\"fa fa-angle-down\"></i></a>
                    </li>
                </ul>
            </div>

            <div class=\"header_right_info\">
                <ul>
                    <li class=\"search_box\">
                        <a href=\"javascript:void(0)\"><i class=\"fa fa-search\"></i></a>
                        <div class=\"search_widget\">
                            <form action=\"#\">
                                <input type=\"text\" placeholder=\"Search Your Perfume\">
                                <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>
                    </li>
                    <li class=\"mini_cart_wrapper\">
                        <a href=\"javascript:void(0)\">
                            <i class=\"fa fa-shopping-cart\"></i>
                            <span class=\"item_count\">2</span>
                        </a>
                        <div class=\"mini_cart mini_cart2\">
                            <div class=\"cart_gallery\">
                                <div class=\"cart_item\">
                                    <div class=\"cart_img\">
                                        <a href=\"#\" style=\"text-decoration: none;\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/small-product/mini1.png"), "html", null, true);
        echo "\" alt=\"Perfume\"></a>
                                    </div>
                                    <div class=\"cart_info\">
                                        <a href=\"#\" style=\"text-decoration: none;\">Hugo Boss</a>
                                        <p><span>100 €</span> X 1</p>
                                    </div>
                                    <div class=\"cart_remove\">
                                        <a href=\"#\"><i class=\"fa fa-times\"></i></a>
                                    </div>
                                </div>
                                <div class=\"cart_item\">
                                    <div class=\"cart_img\">
                                        <a href=\"#\"><img src=\"";
        // line 66
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
                                        <span class=\"price\">200€</span>
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
                        <!-- mini cart ends here -->
                    </li>
                </ul>
            </div>

            <div id=\"menu\" class=\"text-left\">
                <ul class=\"offcanvas_main_menu\">
                    <li class=\"menu-item-has-children active\">
                        <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_category_brand");
        echo "\" style=\"text-decoration: none;\">Home</a>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\" style=\"text-decoration: none;\">Brands</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\" style=\"text-decoration: none;\">Men</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Versace</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Hugo Boss</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Jaguar</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Armani</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Paco Rabbane</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Ralph Lauren</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Women</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Bvlgari</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Coach</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Kenzo</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">D&G</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Jean Paul Gaultier</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\" style=\"text-decoration: none;\">Unisex</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Ajmal</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Calvin Klein</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">The Body Shop</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Lattafa</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class=\"menu-item-has-children\">
                        <a href=\"#\" style=\"text-decoration: none;\">My Account</a>
                    </li>

                    <li class=\"menu-item-has-children\">
                        <a href=\"#\" style=\"text-decoration: none;\">User</a>
                        <ul class=\"sub-menu\">
                            ";
        // line 153
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153)) {
            // line 154
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\" style=\"text-decoration: none;\">Profil</a></li>
                            <li><a href=\"";
            // line 155
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"text-decoration: none;\">Log out</a></li>
                            ";
        } else {
            // line 157
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"text-decoration: none;\">Log In</a></li>
                            <li><a href=\"";
            // line 158
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" style=\"text-decoration: none;\">Sign up</a></li>
                            ";
        }
        // line 160
        echo "
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <header>
        <div class=\"main_header header_transparent header-mobile-m\">
            <div class=\"header_container sticky-header\">
                <div class=\"container-fluid\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-2\">
                            <div class=\"logo\">
                                <a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_category_brand");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/logo.png"), "html", null, true);
        echo "\" style=\"max-height: 50px;\"  alt=\"\"></a>
                            </div>
                        </div>

                        <div class=\"col-lg-6\">
                            <!-- main-menu starts -->
                            <div class=\"main_menu menu_two menu_position\">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_category_brand");
        echo "\" class=\"active\" style=\"text-decoration: none;\">Home </a>

                                        </li>

                                        <li class=\"mega_items\">
                                            <a href=\"#\" style=\"text-decoration: none;\">Brands <i class=\"fa fa-angle-down\"></i></a>
                                            <div class=\"mega_menu\">
                                                <ul class=\"mega_menu_inner\">
                                                    ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brandLists"]) || array_key_exists("brandLists", $context) ? $context["brandLists"] : (function () { throw new RuntimeError('Variable "brandLists" does not exist.', 194, $this->source); })()));
        foreach ($context['_seq'] as $context["cat"] => $context["brands"]) {
            // line 195
            echo "                                                        <li>
                                                            <a href=\"/product/";
            // line 196
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["cat"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["cat"]), "html", null, true);
            echo "</a>
                                                            ";
            // line 197
            if ($context["brands"]) {
                // line 198
                echo "                                                                <ul>
                                                                    ";
                // line 199
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["brands"]);
                foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                    // line 200
                    echo "                                                                        <li><a href=\"/product/";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["cat"]), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($context["brand"], [" " => "-"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["brand"], "html", null, true);
                    echo "</a></li>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "                                                                </ul>
                                                            ";
            }
            // line 204
            echo "                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat'], $context['brands'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                                                </ul>
                                            </div>

                                        </li>

                                        <li><a href=\"";
        // line 211
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" style=\"text-decoration: none;\">Contact Us</a></li>
                                        <li>
                                            <a href=\"#\" style=\"text-decoration: none;\">User <i class=\"fa fa-angle-down\"></i></a>
                                            <ul class=\"sub_menu pages\">
                                                ";
        // line 215
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "user", [], "any", false, false, false, 215)) {
            // line 216
            echo "                                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">Profil</a></li>
                                                <li><a href=\"";
            // line 217
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Log out</a></li>
                                                ";
        } else {
            // line 219
            echo "                                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Log In</a></li>
                                                <li><a href=\"";
            // line 220
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Sign up</a></li>
                                                ";
        }
        // line 222
        echo "                                            </ul>
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
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/small-product/mini1.png"), "html", null, true);
        echo "\" alt=\"Perfume\"></a>
                                                        </div>
                                                        <div class=\"cart_info\">
                                                            <a href=\"#\" style=\"text-decoration: none;\">Hugo Boss</a>
                                                            <p><span>100 €</span> X 1</p>
                                                        </div>
                                                        <div class=\"cart_remove\">
                                                            <a href=\"#\"><i class=\"fa fa-times\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"cart_item\">
                                                        <div class=\"cart_img\">
                                                            <a href=\"#\"><img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/small-product/mini2.png"), "html", null, true);
        echo "\" alt=\"Perfume\"></a>
                                                        </div>
                                                        <div class=\"cart_info\">
                                                            <a href=\"#\" style=\"text-decoration: none;\">Bvlgari</a>
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
                                                        <a href=\"#\" style=\"text-decoration: none;\">View Cart</a>
                                                    </div>
                                                    <div class=\"cart_button\">
                                                        <a href=\"#\" style=\"text-decoration: none;\">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- mini cart ends -->
                                        </li>
                                    </ul>
                                </div>
                                ";
        // line 308
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 308, $this->source); })()), "user", [], "any", false, false, false, 308)) {
            // line 309
            echo "                                <div class=\"header_account\">
                                    <ul>
                                        <li class=\"top_links\">
                                            <a href=\"";
            // line 312
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit");
            echo "\">
                                                <i class=\"fa fa-cog\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                ";
        }
        // line 319
        echo "                                
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

    // line 329
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 330
        echo "    <!-- Contenu spécifique à chaque page -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 333
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 334
        echo "    <footer class=\"footer_widgets color_two\">
        <div class=\"footer_top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 col-sm-7\">
                        <div class=\"widgets_container contact_us\">
                            <div class=\"footer_logo\">
                                <a href=\"";
        // line 341
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_category_brand");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/logo.png"), "html", null, true);
        echo "\" style=\"max-height: 50px;\"  alt=\"\"></a>
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
        // line 359
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
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/icon/paypal4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                <li><a href=\"#\"><img src=\"";
        // line 386
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

    // line 404
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
        return array (  719 => 404,  700 => 386,  696 => 385,  692 => 384,  688 => 383,  684 => 382,  680 => 381,  655 => 359,  632 => 341,  623 => 334,  613 => 333,  602 => 330,  592 => 329,  574 => 319,  564 => 312,  559 => 309,  557 => 308,  516 => 270,  501 => 258,  463 => 222,  458 => 220,  453 => 219,  448 => 217,  443 => 216,  441 => 215,  434 => 211,  427 => 206,  420 => 204,  416 => 202,  403 => 200,  399 => 199,  396 => 198,  394 => 197,  388 => 196,  385 => 195,  381 => 194,  370 => 186,  355 => 176,  337 => 160,  332 => 158,  327 => 157,  322 => 155,  317 => 154,  315 => 153,  267 => 108,  222 => 66,  207 => 54,  169 => 18,  159 => 17,  141 => 14,  122 => 6,  110 => 405,  108 => 404,  104 => 403,  100 => 402,  91 => 395,  89 => 333,  86 => 332,  84 => 329,  81 => 328,  79 => 17,  75 => 15,  73 => 14,  64 => 8,  60 => 7,  56 => 6,  49 => 1,);
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
    <div class=\"offcanvas_menu offcanvas_two\">
        <div class=\"canvas_open\">
            <a href=\"javascript:void(0)\"><i class=\"fa fa-bars\"></i></a>
        </div>
        <div class=\"offcanvas_menu_wrapper\">
            <div class=\"canvas_close\">
                <a href=\"javascript:void(0)\"><i class=\"fa fa-times\"></i></a>
            </div>
            <div class=\"header_account\">
                <ul>
                    <li class=\"top_links\">
                        <a href=\"#\" style=\"text-decoration: none;\">My Account <i class=\"fa fa-angle-down\"></i></a>
                    </li>
                </ul>
            </div>

            <div class=\"header_right_info\">
                <ul>
                    <li class=\"search_box\">
                        <a href=\"javascript:void(0)\"><i class=\"fa fa-search\"></i></a>
                        <div class=\"search_widget\">
                            <form action=\"#\">
                                <input type=\"text\" placeholder=\"Search Your Perfume\">
                                <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>
                    </li>
                    <li class=\"mini_cart_wrapper\">
                        <a href=\"javascript:void(0)\">
                            <i class=\"fa fa-shopping-cart\"></i>
                            <span class=\"item_count\">2</span>
                        </a>
                        <div class=\"mini_cart mini_cart2\">
                            <div class=\"cart_gallery\">
                                <div class=\"cart_item\">
                                    <div class=\"cart_img\">
                                        <a href=\"#\" style=\"text-decoration: none;\"><img src=\"{{ asset('base/small-product/mini1.png') }}\" alt=\"Perfume\"></a>
                                    </div>
                                    <div class=\"cart_info\">
                                        <a href=\"#\" style=\"text-decoration: none;\">Hugo Boss</a>
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
                                        <span class=\"price\">200€</span>
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
                        <!-- mini cart ends here -->
                    </li>
                </ul>
            </div>

            <div id=\"menu\" class=\"text-left\">
                <ul class=\"offcanvas_main_menu\">
                    <li class=\"menu-item-has-children active\">
                        <a href=\"{{ path('app_product_category_brand') }}\" style=\"text-decoration: none;\">Home</a>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\" style=\"text-decoration: none;\">Brands</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\" style=\"text-decoration: none;\">Men</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Versace</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Hugo Boss</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Jaguar</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Armani</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Paco Rabbane</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Ralph Lauren</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Women</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Bvlgari</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Coach</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Kenzo</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">D&G</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Jean Paul Gaultier</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\" style=\"text-decoration: none;\">Unisex</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Ajmal</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Calvin Klein</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">The Body Shop</a></li>
                                    <li><a href=\"#\" style=\"text-decoration: none;\">Lattafa</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class=\"menu-item-has-children\">
                        <a href=\"#\" style=\"text-decoration: none;\">My Account</a>
                    </li>

                    <li class=\"menu-item-has-children\">
                        <a href=\"#\" style=\"text-decoration: none;\">User</a>
                        <ul class=\"sub-menu\">
                            {% if app.user %}
                            <li><a href=\"{{ path('app_profile') }}\" style=\"text-decoration: none;\">Profil</a></li>
                            <li><a href=\"{{ path('app_logout') }}\" style=\"text-decoration: none;\">Log out</a></li>
                            {% else %}
                            <li><a href=\"{{ path('app_login') }}\" style=\"text-decoration: none;\">Log In</a></li>
                            <li><a href=\"{{ path('app_register') }}\" style=\"text-decoration: none;\">Sign up</a></li>
                            {% endif %}

                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <header>
        <div class=\"main_header header_transparent header-mobile-m\">
            <div class=\"header_container sticky-header\">
                <div class=\"container-fluid\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-2\">
                            <div class=\"logo\">
                                <a href=\"{{ path('app_product_category_brand') }}\"><img src=\"{{ asset('base/logo.png') }}\" style=\"max-height: 50px;\"  alt=\"\"></a>
                            </div>
                        </div>

                        <div class=\"col-lg-6\">
                            <!-- main-menu starts -->
                            <div class=\"main_menu menu_two menu_position\">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href=\"{{ path('app_product_category_brand') }}\" class=\"active\" style=\"text-decoration: none;\">Home </a>

                                        </li>

                                        <li class=\"mega_items\">
                                            <a href=\"#\" style=\"text-decoration: none;\">Brands <i class=\"fa fa-angle-down\"></i></a>
                                            <div class=\"mega_menu\">
                                                <ul class=\"mega_menu_inner\">
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
                                            </div>

                                        </li>

                                        <li><a href=\"{{ path('app_contact') }}\" style=\"text-decoration: none;\">Contact Us</a></li>
                                        <li>
                                            <a href=\"#\" style=\"text-decoration: none;\">User <i class=\"fa fa-angle-down\"></i></a>
                                            <ul class=\"sub_menu pages\">
                                                {% if app.user %}
                                                <li><a href=\"{{ path('app_profile') }}\">Profil</a></li>
                                                <li><a href=\"{{ path('app_logout') }}\">Log out</a></li>
                                                {% else %}
                                                <li><a href=\"{{ path('app_login') }}\">Log In</a></li>
                                                <li><a href=\"{{ path('app_register') }}\">Sign up</a></li>
                                                {% endif %}
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
                                                            <a href=\"#\" style=\"text-decoration: none;\">Hugo Boss</a>
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
                                                            <a href=\"#\" style=\"text-decoration: none;\">Bvlgari</a>
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
                                                        <a href=\"#\" style=\"text-decoration: none;\">View Cart</a>
                                                    </div>
                                                    <div class=\"cart_button\">
                                                        <a href=\"#\" style=\"text-decoration: none;\">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- mini cart ends -->
                                        </li>
                                    </ul>
                                </div>
                                {% if app.user %}
                                <div class=\"header_account\">
                                    <ul>
                                        <li class=\"top_links\">
                                            <a href=\"{{ path('profile_edit') }}\">
                                                <i class=\"fa fa-cog\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                {% endif %}
                                
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
                                <a href=\"{{ path('app_product_category_brand') }}\"><img src=\"{{ asset('base/logo.png') }}\" style=\"max-height: 50px;\"  alt=\"\"></a>
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
", "base.html.twig", "C:\\laragon\\www\\DevWeb-ING1\\templates\\base.html.twig");
    }
}

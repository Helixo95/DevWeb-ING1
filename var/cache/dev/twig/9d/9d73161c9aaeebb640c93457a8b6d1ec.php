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
class __TwigTemplate_0679a7e320a55c4cabca169aca36bb87 extends Template
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
            'body' => [$this, 'block_body'],
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
<div class=\"off_canvas_overlay\"></div>

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
                    <a href=\"#\">My Account <i class=\"fa fa-angle-down\"></i></a>
                    <ul class=\"dropdown_links\">
                        <li><a href=\"#\">Checkout</a></li>
                        <li><a href=\"#\">My Account</a></li>
                        <li><a href=\"#\">Shopping Cart</a></li>
                        <li><a href=\"#\">Wishlist</a></li>
                    </ul>
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
                <li class=\"header_wishlist\">
                    <a href=\"#\"><i class=\"fa fa-heart-o\"></i>
                        <span class=\"item_count\">4</span>
                    </a>
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
                                    <a href=\"#\"><img src=\"";
        // line 67
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
        // line 79
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
                    <a href=\"#\">Home</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"#\">Men</a></li>
                        <li><a href=\"#\">Women</a></li>
                        <li><a href=\"#\">Unisex</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Brands</a>
                    <ul class=\"sub-menu\">
                        <li class=\"menu-item-has-children\">
                            <a href=\"#\">Men</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"#\">Versace</a></li>
                                <li><a href=\"#\">Hugo Boss</a></li>
                                <li><a href=\"#\">Jaguar</a></li>
                                <li><a href=\"#\">Armani</a></li>
                                <li><a href=\"#\">Paco Rabbane</a></li>
                                <li><a href=\"#\">Ralph Lauren</a></li>
                            </ul>
                        </li>
                        <li class=\"menu-item-has-children\">
                            <a href=\"#\">Women</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"#\">Bvlgari</a></li>
                                <li><a href=\"#\">Coach</a></li>
                                <li><a href=\"#\">Kenzo</a></li>
                                <li><a href=\"#\">D&G</a></li>
                                <li><a href=\"#\">Jean Paul Gaultier</a></li>
                            </ul>
                        </li>
                        <li class=\"menu-item-has-children\">
                            <a href=\"#\">Unisex</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"#\">Ajmal</a></li>
                                <li><a href=\"#\">Calvin Klein</a></li>
                                <li><a href=\"#\">The Body Shop</a></li>
                                <li><a href=\"#\">Lattafa</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Blog</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"#\">Newsletter</a></li>
                        <li><a href=\"#\">Social Media</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">My Account</a>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">About Us</a>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">User</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"#\">Login In</a></li>
                        <li><a href=\"#\">Sign up</a></li>
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
                            <a href=\"base.html.twig\"><img src=\"\" alt=\"\"></a>
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <!-- main-menu starts -->
                        <div class=\"main_menu menu_two menu_position\">
                            <nav>
                                <ul>
                                    <li>
                                        <a href=\"base.html.twig\" class=\"active\">Home <i class=\"fa fa-angle-down\"></i></a>
                                        <ul class=\"sub_menu\">
                                            <li><a href=\"#\">Men</a></li>
                                            <li><a href=\"#\">Women</a></li>
                                            <li><a href=\"#\">Unisex</a></li>
                                            <li><a href=\"#\">Kids</a></li>
                                        </ul>

                                    </li>

                                    <li class=\"mega_items\">
                                        <a href=\"#\">Brands <i class=\"fa fa-angle-down\"></i></a>
                                        <div class=\"mega_menu\">
                                            <ul class=\"mega_menu_inner\">
                                                <li>
                                                    <a href=\"#\">Men</a>
                                                    <ul>
                                                        <li><a href=\"#\">Versace</a></li>
                                                        <li><a href=\"#\">Hugo Boss</a></li>
                                                        <li><a href=\"#\">Jaguar</a></li>
                                                        <li><a href=\"#\">Armani</a></li>
                                                        <li><a href=\"#\">Paco Rabbane</a></li>
                                                        <li><a href=\"#\">Ralph Lauren</a></li>
                                                    </ul>

                                                </li>
                                                <li>
                                                    <a href=\"#\">Women</a>
                                                    <ul>
                                                        <li><a href=\"#\">Bvlgari</a></li>
                                                        <li><a href=\"#\">Coach</a></li>
                                                        <li><a href=\"#\">Kenzo</a></li>
                                                        <li><a href=\"#\">D&G</a></li>
                                                        <li><a href=\"#\">Jean Paul Gaultier</a></li>
                                                    </ul>

                                                </li>
                                                <li>
                                                    <a href=\"#\">Unisex</a>
                                                    <ul>
                                                        <li><a href=\"#\">Ajmal</a></li>
                                                        <li><a href=\"#\">Calvin Klein</a></li>
                                                        <li><a href=\"#\">The Body Shop</a></li>
                                                        <li><a href=\"#\">Lattafa</a></li>
                                                    </ul>

                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"#\">Blog <i class=\"fa fa-angle-down\"></i></a>
                                        <ul class=\"sub_menu pages\">
                                            <li><a href=\"#\">Newsletter</a></li>
                                            <li><a href=\"#\">Social Media</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">About Us</a></li>
                                    <li><a href=\"#\">Contact Us</a></li>
                                    <li>
                                        <a href=\"#\">User <i class=\"fa fa-angle-down\"></i></a>
                                        <ul class=\"sub_menu pages\">
                                            <li><a href=\"#\">Login In</a></li>
                                            <li><a href=\"#\">Sign Up</a></li>
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
                                    <li class=\"header_wishlist\">
                                        <a href=\"#\">
                                            <i class=\"fa fa-heart-o\"></i>
                                            <span class=\"item_count\">4</span>
                                        </a>
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
        // line 313
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
        // line 325
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
                                        <ul class=\"dropdown_links\">
                                            <li><a href=\"#\">Checkout</a></li>
                                            <li><a href=\"#\">My Account</a></li>
                                            <li><a href=\"#\">Shopping cart</a></li>
                                            <li><a href=\"#\">Wishlist</a></li>
                                        </ul>
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
        // line 386
        $this->displayBlock('body', $context, $blocks);
        // line 389
        echo "


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js\"></script>
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/countdown.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 399
        $this->displayBlock('javascripts', $context, $blocks);
        // line 400
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

        echo "CHEZ EXOTIC";
        
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

    // line 386
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 387
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 399
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
        return array (  550 => 399,  539 => 387,  529 => 386,  511 => 14,  492 => 6,  480 => 400,  478 => 399,  474 => 398,  470 => 397,  460 => 389,  458 => 386,  394 => 325,  379 => 313,  142 => 79,  127 => 67,  73 => 15,  71 => 14,  62 => 8,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}CHEZ EXOTIC{% endblock %}</title>
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
<div class=\"off_canvas_overlay\"></div>

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
                    <a href=\"#\">My Account <i class=\"fa fa-angle-down\"></i></a>
                    <ul class=\"dropdown_links\">
                        <li><a href=\"#\">Checkout</a></li>
                        <li><a href=\"#\">My Account</a></li>
                        <li><a href=\"#\">Shopping Cart</a></li>
                        <li><a href=\"#\">Wishlist</a></li>
                    </ul>
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
                <li class=\"header_wishlist\">
                    <a href=\"#\"><i class=\"fa fa-heart-o\"></i>
                        <span class=\"item_count\">4</span>
                    </a>
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
                    <a href=\"#\">Home</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"#\">Men</a></li>
                        <li><a href=\"#\">Women</a></li>
                        <li><a href=\"#\">Unisex</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Brands</a>
                    <ul class=\"sub-menu\">
                        <li class=\"menu-item-has-children\">
                            <a href=\"#\">Men</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"#\">Versace</a></li>
                                <li><a href=\"#\">Hugo Boss</a></li>
                                <li><a href=\"#\">Jaguar</a></li>
                                <li><a href=\"#\">Armani</a></li>
                                <li><a href=\"#\">Paco Rabbane</a></li>
                                <li><a href=\"#\">Ralph Lauren</a></li>
                            </ul>
                        </li>
                        <li class=\"menu-item-has-children\">
                            <a href=\"#\">Women</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"#\">Bvlgari</a></li>
                                <li><a href=\"#\">Coach</a></li>
                                <li><a href=\"#\">Kenzo</a></li>
                                <li><a href=\"#\">D&G</a></li>
                                <li><a href=\"#\">Jean Paul Gaultier</a></li>
                            </ul>
                        </li>
                        <li class=\"menu-item-has-children\">
                            <a href=\"#\">Unisex</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"#\">Ajmal</a></li>
                                <li><a href=\"#\">Calvin Klein</a></li>
                                <li><a href=\"#\">The Body Shop</a></li>
                                <li><a href=\"#\">Lattafa</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Blog</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"#\">Newsletter</a></li>
                        <li><a href=\"#\">Social Media</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">My Account</a>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">About Us</a>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">User</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"#\">Login In</a></li>
                        <li><a href=\"#\">Sign up</a></li>
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
                            <a href=\"base.html.twig\"><img src=\"\" alt=\"\"></a>
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <!-- main-menu starts -->
                        <div class=\"main_menu menu_two menu_position\">
                            <nav>
                                <ul>
                                    <li>
                                        <a href=\"base.html.twig\" class=\"active\">Home <i class=\"fa fa-angle-down\"></i></a>
                                        <ul class=\"sub_menu\">
                                            <li><a href=\"#\">Men</a></li>
                                            <li><a href=\"#\">Women</a></li>
                                            <li><a href=\"#\">Unisex</a></li>
                                            <li><a href=\"#\">Kids</a></li>
                                        </ul>

                                    </li>

                                    <li class=\"mega_items\">
                                        <a href=\"#\">Brands <i class=\"fa fa-angle-down\"></i></a>
                                        <div class=\"mega_menu\">
                                            <ul class=\"mega_menu_inner\">
                                                <li>
                                                    <a href=\"#\">Men</a>
                                                    <ul>
                                                        <li><a href=\"#\">Versace</a></li>
                                                        <li><a href=\"#\">Hugo Boss</a></li>
                                                        <li><a href=\"#\">Jaguar</a></li>
                                                        <li><a href=\"#\">Armani</a></li>
                                                        <li><a href=\"#\">Paco Rabbane</a></li>
                                                        <li><a href=\"#\">Ralph Lauren</a></li>
                                                    </ul>

                                                </li>
                                                <li>
                                                    <a href=\"#\">Women</a>
                                                    <ul>
                                                        <li><a href=\"#\">Bvlgari</a></li>
                                                        <li><a href=\"#\">Coach</a></li>
                                                        <li><a href=\"#\">Kenzo</a></li>
                                                        <li><a href=\"#\">D&G</a></li>
                                                        <li><a href=\"#\">Jean Paul Gaultier</a></li>
                                                    </ul>

                                                </li>
                                                <li>
                                                    <a href=\"#\">Unisex</a>
                                                    <ul>
                                                        <li><a href=\"#\">Ajmal</a></li>
                                                        <li><a href=\"#\">Calvin Klein</a></li>
                                                        <li><a href=\"#\">The Body Shop</a></li>
                                                        <li><a href=\"#\">Lattafa</a></li>
                                                    </ul>

                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"#\">Blog <i class=\"fa fa-angle-down\"></i></a>
                                        <ul class=\"sub_menu pages\">
                                            <li><a href=\"#\">Newsletter</a></li>
                                            <li><a href=\"#\">Social Media</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">About Us</a></li>
                                    <li><a href=\"#\">Contact Us</a></li>
                                    <li>
                                        <a href=\"#\">User <i class=\"fa fa-angle-down\"></i></a>
                                        <ul class=\"sub_menu pages\">
                                            <li><a href=\"#\">Login In</a></li>
                                            <li><a href=\"#\">Sign Up</a></li>
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
                                    <li class=\"header_wishlist\">
                                        <a href=\"#\">
                                            <i class=\"fa fa-heart-o\"></i>
                                            <span class=\"item_count\">4</span>
                                        </a>
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
                                        <ul class=\"dropdown_links\">
                                            <li><a href=\"#\">Checkout</a></li>
                                            <li><a href=\"#\">My Account</a></li>
                                            <li><a href=\"#\">Shopping cart</a></li>
                                            <li><a href=\"#\">Wishlist</a></li>
                                        </ul>
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

{% block body %}

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
", "base.html.twig", "H:\\Desktop\\DevWeb-ING1\\templates\\base.html.twig");
    }
}

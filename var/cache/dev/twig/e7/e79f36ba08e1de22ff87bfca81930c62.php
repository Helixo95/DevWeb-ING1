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

/* home.html.twig */
class __TwigTemplate_bbf69781042119a53776e2179ae42758 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Page d'accueil ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home/style.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product/product.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "
    <!-- slider section starts  -->
    <section class=\"slider_section slider_section2 mb-66\">
        <div class=\"slider_area owl-carousel\">
            <div class=\"single_slider d-flex align-items-center\" data-bgimg=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/slider/slider1.jpg"), "html", null, true);
        echo "\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6 col-md-6 offset-md-6\">
                            <div class=\"slider_content slider_content2 content_right\">
                                <h1>Men's Collection</h1>
                                <h2>Wild Stone</h2>
                                <p>The rich aromatic notes of rosemary and nerolu combined with the sophistication of
                                    tonka beans and white beans and white woods to create the perfect accompaniment for
                                    the suited look.</p>
                                <a href=\"#\" class=\"button\">Shop Now <i class=\"fa fa-arrow-right\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"single_slider d-flex align-items-center\" data-bgimg=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/slider/slider2.jpg"), "html", null, true);
        echo "\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-7\">
                            <div class=\"slider_content slider_content2 content_left\">
                                <h1>Watch</h1>
                                <h2>Maison Micallef</h2>
                                <p>This perfume is a wonderful elixir that heightens both the scents of gourmet Bourbon
                                    vanilla and those refined of tuberose and jasmine. The delightful alliance reminds
                                    of tropical paradise.</p>
                                <a href=\"#\" class=\"button\">Shop Now <i class=\"fa fa-arrow-right\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- slider section ends  -->

    <!-- banner area starts -->
    <div class=\"banner_area mb-66\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4\">
                    <figure class=\"single_banner\">
                        <div class=\"banner_thumb\">
                            <a href=\"#\">
                                <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/banner/banner1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <div class=\"banner_content\">
                                <h3>Sale up to</h3>
                                <h2>50%</h2>
                                <p>Perfume <span> & </span> Body Spray</p>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class=\"col-lg-4 col-md-4\">
                    <figure class=\"single_banner\">
                        <div class=\"banner_thumb\">
                            <a href=\"#\">
                                <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/banner/banner2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <div class=\"banner_content\">
                                <h3>Sale up to</h3>
                                <h2>70%</h2>
                                <p>Deodrants</p>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class=\"col-lg-4 col-md-4\">
                    <figure class=\"single_banner\">
                        <div class=\"banner_thumb\">
                            <a href=\"#\">
                                <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/banner/banner3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <div class=\"banner_content\">
                                <h3>Sale up to</h3>
                                <h2>30%</h2>
                                <p>Cologne</p>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area ends -->

    <!-- home section area starts  -->
    <div class=\"home_section_two color_two mb-70\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-12\">
                    <div class=\"home_section_left\">
                        <!-- deals product area starts -->

                        <div class=\"deals_product_area mb-68\">
                            <div class=\"section_title section_title_style2\">
                                <h2>Hot Deals</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"deals_carousel product_column1 owl-carousel\">
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"/";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/Deals/D1-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/Deals/D1-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>
                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <!-- for deals timing -->
                                                    <div class=\"product_timing\">
                                                        <div data-countdown=\"2021/1/15\"></div>
                                                    </div>
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Boss Men Bottled Infinte EAU</a>
                                                    </h4>

                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 9100</span>
                                                        <span class=\"current_price\">Rs. 8650</span>
                                                    </div>

                                                </figcaption>
                                            </figure>

                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- deals product area ends -->

                        <!-- Newsletter section starts -->

                        <div class=\"newsletter_style2\">
                            <div class=\"newsletter_container\">
                                <div class=\"section_title section_title_style2\">
                                    <h2>Newsletter</h2>
                                </div>
                                <div class=\"subscribe_form\">
                                    <form>
                                        <input type=\"email\" autocomplete=\"off\" placeholder=\"example@gmail.com\">
                                        <button>
                                            <i class=\"fa fa-envelope-o\"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class=\"newsletter_content\">
                                    <p>Sign up to get news and get 25% off instantly.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Newsletter section ends -->
                    </div>
                </div>
                <div class=\"col-lg-9 col-md-12\">
                    <div class=\"home_section_right\">
                        <!-- product area starts  -->

                        <div class=\"product_area mb-65\">
                            <div class=\"section_title section_title_style2\">
                                <h2>New Product</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"product_carousel product_column3 owl-carousel\">
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N1-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N2-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Bvlgari Women Splendid </a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 7499</span>
                                                        <span class=\"current_price\">Rs. 7200</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N2-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N2-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Coach Women Floral Blush</a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 6999</span>
                                                        <span class=\"current_price\">Rs. 6350</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N3.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N3.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Versace Women Eros</a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 6500</span>
                                                        <span class=\"current_price\">Rs. 6200</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N4-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N4-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>

                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Salvatore Ferragamo Women Signorina</a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 7500</span>
                                                        <span class=\"current_price\">Rs. 6150</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N5-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N5-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Kenzo Women World</a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 5999</span>
                                                        <span class=\"current_price\">Rs. 5900</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N6-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N6-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Kenzo Women World</a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 5999</span>
                                                        <span class=\"current_price\">Rs. 5900</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- product area ends -->

                        <!-- Long banner area starts  -->
                        <div class=\"banner_area banner_style_two mb-58\">
                            <div class=\"single_banner\">
                                <div class=\"banner_thumb\">
                                    <a href=\"#\">
                                        <img src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/banner/banner4.png"), "html", null, true);
        echo "\" alt=\"\">

                                    </a>
                                    <div class=\"banner_content\">
                                        <h3 style=\"color: tomato;\">Sale up to </h3>
                                        <h2>45%</h2>
                                        <p>Versace</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Long Banner area ends -->

                        <!-- product section starts  -->
                        <div class=\"product_area\">
                            <div class=\"section_title section_title_style2\">
                                <h2>On Sale</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"product_carousel product_column3 owl-carousel\">
                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D1-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D1-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>
                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Paco Rabbane Pure XS for Her</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 6550</span>
                                                            <span class=\"current_price\">Rs. 5240</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D2-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D2-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Paco Rabanne Women Olympea</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 5999</span>
                                                            <span class=\"current_price\">Rs. 5100</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 790
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D3-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 793
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D3-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Issey Miyake Women L'Eau
                                                                <div class=\"product_rating\">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"price_box\">
                                                                    <span class=\"old_price\">Rs. 5999</span>
                                                                    <span class=\"current_price\">Rs. 5100</span>
                                                                </div>
                                                            </a>
                                                        </h4>
                                                    </figcaption>

                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 865
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D4-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 868
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D4-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Paco Rabanne Million</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 5999</span>
                                                            <span class=\"current_price\">Rs. 5100</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 938
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D5-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 941
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D5-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Lacoste Women
                                                                <div class=\"product_rating\">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"price_box\">
                                                                    <span class=\"old_price\">Rs. 6000</span>
                                                                    <span class=\"current_price\">Rs. 5000</span>
                                                                </div>
                                                            </a>
                                                        </h4>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 1012
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D6-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 1015
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D6-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Narciso Rodiguez For Him</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 5500</span>
                                                            <span class=\"current_price\">Rs. 5000</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 1084
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D7-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 1087
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D7-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Nina Ricci Women
                                                                <div class=\"product_rating\">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"price_box\">
                                                                    <span class=\"old_price\">Rs. 5500</span>
                                                                    <span class=\"current_price\">Rs. 5000</span>
                                                                </div>
                                                            </a>
                                                        </h4>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 1158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D8-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 1161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D8-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Mercedes Benz Women</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 5900</span>
                                                            <span class=\"current_price\">Rs. 4838</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 1230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D9-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 1233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D9-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Chopard Women Wish
                                                                <div class=\"product_rating\">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"price_box\">
                                                                    <span class=\"old_price\">Rs. 5500</span>
                                                                    <span class=\"current_price\">Rs. 4950</span>
                                                                </div>
                                                            </a>
                                                        </h4>

                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 1305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D10-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 1308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D10-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Mont Blanc Lady Emblem</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 4999</span>
                                                            <span class=\"current_price\">Rs. 4500</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 1378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D11-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 1381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D11-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Jimmy Choo Illicit Flower
                                                                <div class=\"product_rating\">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"price_box\">
                                                                    <span class=\"old_price\">Rs. 4999</span>
                                                                    <span class=\"current_price\">Rs. 4200</span>
                                                                </div>
                                                            </a>
                                                        </h4>

                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
        // line 1453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D12-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
        // line 1456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/onsale/D12-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Bvlgari Women Goldea</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 3999</span>
                                                            <span class=\"current_price\">Rs. 3700</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- home section area ends -->
    <div class=\"modal fade\" id=\"modal_box\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <button type=\"button\" data-dismiss=\"modal\" aria-label=\"close\" class=\"close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div class=\"modal_body\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-5 col-md-5 col-sm-12\">
                                <div class=\"modal_tab\">
                                    <div class=\"tab-content product-details-large\">
                                        <div class=\"tab-pane fade show active\" id=\"tab1\" role=\"tabpanel\">
                                            <div class=\"modal_tab_img\">
                                                <a href=\"#\"><img src=\"";
        // line 1545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N1-1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"tab2\" role=\"tabpanel\">
                                            <div class=\"modal_tab_img\">
                                                <a href=\"#\"><img src=\"";
        // line 1550
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N2-1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"tab3\" role=\"tabpanel\">
                                            <div class=\"modal_tab_img\">
                                                <a href=\"#\"><img src=\"";
        // line 1555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"tab4\" role=\"tabpanel\">
                                            <div class=\"modal_tab_img\">
                                                <a href=\"#\"><img src=\"";
        // line 1560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N4-1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal_tab_button\">
                                        <ul class=\"nav product_navactive owl-carousel\" role=\"tablist\">
                                            <li>
                                                <a href=\"#tab1\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\"
                                                   aria-controls=\"tab1\" aria-selected=\"false\">
                                                    <img src=\"";
        // line 1569
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N1-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#tab2\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                   aria-controls=\"tab2\" aria-selected=\"false\">
                                                    <img src=\"";
        // line 1575
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N2-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#tab3\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                   aria-controls=\"tab3\" aria-selected=\"false\">
                                                    <img src=\"";
        // line 1581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N3.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#tab4\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                   aria-controls=\"tab4\" aria-selected=\"false\">
                                                    <img src=\"";
        // line 1587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N4-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-7 col-md-7 col-sm-12\">
                                <div class=\"modal_right\">
                                    <div class=\"modal_title mb-10\">
                                        <h2>Paco Rabbane Men Invictus</h2>
                                    </div>
                                    <div class=\"modal_price mb-10\">
                                        <span class=\"new_price\">76€</span>
                                        <span class=\"old_price\">81€</span>
                                    </div>
                                    <div class=\"modal_description mb-15\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis earum
                                            nesciunt consequatur deleniti nam dicta eligendi iusto quaerat dolores
                                            debitis, est natus omnis consequuntur sequi. Ipsam sint rerum minus eos?</p>
                                    </div>
                                    <div class=\"variants_selects\">
                                        <div class=\"variants_size\">
                                            <h2>Size</h2>
                                            <select class=\"select_option\">
                                                <option value=\"1\" selected>10ml</option>
                                                <option value=\"1\">25ml</option>
                                                <option value=\"1\">50ml</option>
                                                <option value=\"1\">100ml</option>
                                                <option value=\"1\">250ml</option>
                                            </select>
                                        </div>
                                        <div class=\"modal_add_to_cart\">
                                            <form action=\"#\">
                                                <div class=\"quantity-selector \">
                                                    <button type=\"button\" class=\"quantity-btn\" onclick=\"changeQuantity(-1)\">−</button>
                                                    <input type=\"number\" id=\"quantity\" class=\"quantity-input\" value=\"0\" min=\"0\" max=\"100\">
                                                    <button type=\"button\" class=\"quantity-btn\" onclick=\"changeQuantity(1)\">+</button>
                                                </div>
                                                <button type=\"button\" class=\"stock-btn\">Stock : 20</button>
                                                <button type=\"submit\">Add to cart</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1645
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1646
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home.html.twig";
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
        return array (  1946 => 1646,  1936 => 1645,  1869 => 1587,  1860 => 1581,  1851 => 1575,  1842 => 1569,  1830 => 1560,  1822 => 1555,  1814 => 1550,  1806 => 1545,  1714 => 1456,  1708 => 1453,  1633 => 1381,  1627 => 1378,  1554 => 1308,  1548 => 1305,  1473 => 1233,  1467 => 1230,  1395 => 1161,  1389 => 1158,  1315 => 1087,  1309 => 1084,  1237 => 1015,  1231 => 1012,  1157 => 941,  1151 => 938,  1078 => 868,  1072 => 865,  997 => 793,  991 => 790,  918 => 720,  912 => 717,  846 => 654,  840 => 651,  811 => 625,  737 => 554,  731 => 551,  663 => 486,  657 => 483,  588 => 417,  582 => 414,  514 => 349,  508 => 346,  440 => 281,  434 => 278,  366 => 213,  360 => 210,  276 => 129,  270 => 126,  233 => 92,  216 => 78,  199 => 64,  167 => 35,  147 => 18,  141 => 14,  131 => 13,  118 => 10,  108 => 9,  96 => 6,  91 => 5,  81 => 4,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Page d'accueil {% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('home/style.css') }}\">
    <script src=\"{{ asset('product/product.js') }}\"></script>
{% endblock %}

{% block header %}
    {{ parent() }}
{% endblock %}

{% block content %}

    <!-- slider section starts  -->
    <section class=\"slider_section slider_section2 mb-66\">
        <div class=\"slider_area owl-carousel\">
            <div class=\"single_slider d-flex align-items-center\" data-bgimg=\"{{ asset('base/slider/slider1.jpg') }}\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6 col-md-6 offset-md-6\">
                            <div class=\"slider_content slider_content2 content_right\">
                                <h1>Men's Collection</h1>
                                <h2>Wild Stone</h2>
                                <p>The rich aromatic notes of rosemary and nerolu combined with the sophistication of
                                    tonka beans and white beans and white woods to create the perfect accompaniment for
                                    the suited look.</p>
                                <a href=\"#\" class=\"button\">Shop Now <i class=\"fa fa-arrow-right\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"single_slider d-flex align-items-center\" data-bgimg=\"{{asset('base/slider/slider2.jpg') }}\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-7\">
                            <div class=\"slider_content slider_content2 content_left\">
                                <h1>Watch</h1>
                                <h2>Maison Micallef</h2>
                                <p>This perfume is a wonderful elixir that heightens both the scents of gourmet Bourbon
                                    vanilla and those refined of tuberose and jasmine. The delightful alliance reminds
                                    of tropical paradise.</p>
                                <a href=\"#\" class=\"button\">Shop Now <i class=\"fa fa-arrow-right\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- slider section ends  -->

    <!-- banner area starts -->
    <div class=\"banner_area mb-66\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4\">
                    <figure class=\"single_banner\">
                        <div class=\"banner_thumb\">
                            <a href=\"#\">
                                <img src=\"{{ asset('base/banner/banner1.jpg') }}\" alt=\"\">
                            </a>
                            <div class=\"banner_content\">
                                <h3>Sale up to</h3>
                                <h2>50%</h2>
                                <p>Perfume <span> & </span> Body Spray</p>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class=\"col-lg-4 col-md-4\">
                    <figure class=\"single_banner\">
                        <div class=\"banner_thumb\">
                            <a href=\"#\">
                                <img src=\"{{ asset('base/banner/banner2.jpg') }}\" alt=\"\">
                            </a>
                            <div class=\"banner_content\">
                                <h3>Sale up to</h3>
                                <h2>70%</h2>
                                <p>Deodrants</p>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class=\"col-lg-4 col-md-4\">
                    <figure class=\"single_banner\">
                        <div class=\"banner_thumb\">
                            <a href=\"#\">
                                <img src=\"{{ asset('base/banner/banner3.jpg') }}\" alt=\"\">
                            </a>
                            <div class=\"banner_content\">
                                <h3>Sale up to</h3>
                                <h2>30%</h2>
                                <p>Cologne</p>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area ends -->

    <!-- home section area starts  -->
    <div class=\"home_section_two color_two mb-70\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-12\">
                    <div class=\"home_section_left\">
                        <!-- deals product area starts -->

                        <div class=\"deals_product_area mb-68\">
                            <div class=\"section_title section_title_style2\">
                                <h2>Hot Deals</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"deals_carousel product_column1 owl-carousel\">
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"/{{ asset('base/Deals/D1-1.png') }}\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"{{ asset('base/Deals/D1-2.png') }}\" alt=\"\">
                                                    </a>
                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <!-- for deals timing -->
                                                    <div class=\"product_timing\">
                                                        <div data-countdown=\"2021/1/15\"></div>
                                                    </div>
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Boss Men Bottled Infinte EAU</a>
                                                    </h4>

                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 9100</span>
                                                        <span class=\"current_price\">Rs. 8650</span>
                                                    </div>

                                                </figcaption>
                                            </figure>

                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- deals product area ends -->

                        <!-- Newsletter section starts -->

                        <div class=\"newsletter_style2\">
                            <div class=\"newsletter_container\">
                                <div class=\"section_title section_title_style2\">
                                    <h2>Newsletter</h2>
                                </div>
                                <div class=\"subscribe_form\">
                                    <form>
                                        <input type=\"email\" autocomplete=\"off\" placeholder=\"example@gmail.com\">
                                        <button>
                                            <i class=\"fa fa-envelope-o\"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class=\"newsletter_content\">
                                    <p>Sign up to get news and get 25% off instantly.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Newsletter section ends -->
                    </div>
                </div>
                <div class=\"col-lg-9 col-md-12\">
                    <div class=\"home_section_right\">
                        <!-- product area starts  -->

                        <div class=\"product_area mb-65\">
                            <div class=\"section_title section_title_style2\">
                                <h2>New Product</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"product_carousel product_column3 owl-carousel\">
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"{{ asset('base/new-product/N1-1.png') }}\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"{{ asset('base/new-product/N2-1.png') }}\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Bvlgari Women Splendid </a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 7499</span>
                                                        <span class=\"current_price\">Rs. 7200</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"{{ asset('base/new-product/N2-1.png') }}\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"{{ asset('base/new-product/N2-2.png') }}\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Coach Women Floral Blush</a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 6999</span>
                                                        <span class=\"current_price\">Rs. 6350</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"{{ asset('base/new-product/N3.png') }}\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"{{ asset('base/new-product/N3.png') }}\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Versace Women Eros</a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 6500</span>
                                                        <span class=\"current_price\">Rs. 6200</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"{{ asset('base/new-product/N4-1.png') }}\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"{{ asset('base/new-product/N4-2.png') }}\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>

                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Salvatore Ferragamo Women Signorina</a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 7500</span>
                                                        <span class=\"current_price\">Rs. 6150</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"{{ asset('base/new-product/N5-1.png') }}\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"{{ asset('base/new-product/N5-2.png') }}\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Kenzo Women World</a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 5999</span>
                                                        <span class=\"current_price\">Rs. 5900</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"{{ asset('base/new-product/N6-1.png') }}\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"{{ asset('base/new-product/N6-2.png') }}\" alt=\"\">
                                                    </a>

                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"#\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                                   title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a href=\"#\">Kenzo Women World</a>
                                                    </h4>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">Rs. 5999</span>
                                                        <span class=\"current_price\">Rs. 5900</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- product area ends -->

                        <!-- Long banner area starts  -->
                        <div class=\"banner_area banner_style_two mb-58\">
                            <div class=\"single_banner\">
                                <div class=\"banner_thumb\">
                                    <a href=\"#\">
                                        <img src=\"{{ asset('base/banner/banner4.png') }}\" alt=\"\">

                                    </a>
                                    <div class=\"banner_content\">
                                        <h3 style=\"color: tomato;\">Sale up to </h3>
                                        <h2>45%</h2>
                                        <p>Versace</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Long Banner area ends -->

                        <!-- product section starts  -->
                        <div class=\"product_area\">
                            <div class=\"section_title section_title_style2\">
                                <h2>On Sale</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"product_carousel product_column3 owl-carousel\">
                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D1-1.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D1-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>
                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Paco Rabbane Pure XS for Her</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 6550</span>
                                                            <span class=\"current_price\">Rs. 5240</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D2-1.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D2-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Paco Rabanne Women Olympea</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 5999</span>
                                                            <span class=\"current_price\">Rs. 5100</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D3-1.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D3-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Issey Miyake Women L'Eau
                                                                <div class=\"product_rating\">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"price_box\">
                                                                    <span class=\"old_price\">Rs. 5999</span>
                                                                    <span class=\"current_price\">Rs. 5100</span>
                                                                </div>
                                                            </a>
                                                        </h4>
                                                    </figcaption>

                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D4-2.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D4-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Paco Rabanne Million</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 5999</span>
                                                            <span class=\"current_price\">Rs. 5100</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D5-1.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D5-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Lacoste Women
                                                                <div class=\"product_rating\">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"price_box\">
                                                                    <span class=\"old_price\">Rs. 6000</span>
                                                                    <span class=\"current_price\">Rs. 5000</span>
                                                                </div>
                                                            </a>
                                                        </h4>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D6-1.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D6-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Narciso Rodiguez For Him</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 5500</span>
                                                            <span class=\"current_price\">Rs. 5000</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D7-1.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D7-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Nina Ricci Women
                                                                <div class=\"product_rating\">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"price_box\">
                                                                    <span class=\"old_price\">Rs. 5500</span>
                                                                    <span class=\"current_price\">Rs. 5000</span>
                                                                </div>
                                                            </a>
                                                        </h4>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D8-1.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D8-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Mercedes Benz Women</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 5900</span>
                                                            <span class=\"current_price\">Rs. 4838</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D9-1.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D9-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Chopard Women Wish
                                                                <div class=\"product_rating\">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"price_box\">
                                                                    <span class=\"old_price\">Rs. 5500</span>
                                                                    <span class=\"current_price\">Rs. 4950</span>
                                                                </div>
                                                            </a>
                                                        </h4>

                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D10-1.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D10-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Mont Blanc Lady Emblem</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 4999</span>
                                                            <span class=\"current_price\">Rs. 4500</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D11-2.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D11-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Jimmy Choo Illicit Flower
                                                                <div class=\"product_rating\">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <i class=\"fa fa-star\"
                                                                                   aria-hidden=\"true\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class=\"price_box\">
                                                                    <span class=\"old_price\">Rs. 4999</span>
                                                                    <span class=\"current_price\">Rs. 4200</span>
                                                                </div>
                                                            </a>
                                                        </h4>

                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset('base/onsale/D12-1.png') }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset('base/onsale/D12-2.png') }}\" alt=\"\">
                                                        </a>

                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>


                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\"
                                                                       data-target=\"#modal_box\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">Bvlgari Women Goldea</a>
                                                        </h4>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">Rs. 3999</span>
                                                            <span class=\"current_price\">Rs. 3700</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- home section area ends -->
    <div class=\"modal fade\" id=\"modal_box\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <button type=\"button\" data-dismiss=\"modal\" aria-label=\"close\" class=\"close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div class=\"modal_body\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-5 col-md-5 col-sm-12\">
                                <div class=\"modal_tab\">
                                    <div class=\"tab-content product-details-large\">
                                        <div class=\"tab-pane fade show active\" id=\"tab1\" role=\"tabpanel\">
                                            <div class=\"modal_tab_img\">
                                                <a href=\"#\"><img src=\"{{ asset('base/new-product/N1-1.png') }}\" alt=\"\"></a>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"tab2\" role=\"tabpanel\">
                                            <div class=\"modal_tab_img\">
                                                <a href=\"#\"><img src=\"{{ asset('base/new-product/N2-1.png') }}\" alt=\"\"></a>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"tab3\" role=\"tabpanel\">
                                            <div class=\"modal_tab_img\">
                                                <a href=\"#\"><img src=\"{{ asset('base/new-product/N3.png') }}\" alt=\"\"></a>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"tab4\" role=\"tabpanel\">
                                            <div class=\"modal_tab_img\">
                                                <a href=\"#\"><img src=\"{{ asset('base/new-product/N4-1.png') }}\" alt=\"\"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal_tab_button\">
                                        <ul class=\"nav product_navactive owl-carousel\" role=\"tablist\">
                                            <li>
                                                <a href=\"#tab1\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\"
                                                   aria-controls=\"tab1\" aria-selected=\"false\">
                                                    <img src=\"{{ asset('base/new-product/N1-1.png') }}\" alt=\"\">
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#tab2\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                   aria-controls=\"tab2\" aria-selected=\"false\">
                                                    <img src=\"{{ asset('base/new-product/N2-1.png') }}\" alt=\"\">
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#tab3\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                   aria-controls=\"tab3\" aria-selected=\"false\">
                                                    <img src=\"{{ asset('base/new-product/N3.png') }}\" alt=\"\">
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#tab4\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                   aria-controls=\"tab4\" aria-selected=\"false\">
                                                    <img src=\"{{ asset('base/new-product/N4-1.png') }}\" alt=\"\">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-7 col-md-7 col-sm-12\">
                                <div class=\"modal_right\">
                                    <div class=\"modal_title mb-10\">
                                        <h2>Paco Rabbane Men Invictus</h2>
                                    </div>
                                    <div class=\"modal_price mb-10\">
                                        <span class=\"new_price\">76€</span>
                                        <span class=\"old_price\">81€</span>
                                    </div>
                                    <div class=\"modal_description mb-15\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis earum
                                            nesciunt consequatur deleniti nam dicta eligendi iusto quaerat dolores
                                            debitis, est natus omnis consequuntur sequi. Ipsam sint rerum minus eos?</p>
                                    </div>
                                    <div class=\"variants_selects\">
                                        <div class=\"variants_size\">
                                            <h2>Size</h2>
                                            <select class=\"select_option\">
                                                <option value=\"1\" selected>10ml</option>
                                                <option value=\"1\">25ml</option>
                                                <option value=\"1\">50ml</option>
                                                <option value=\"1\">100ml</option>
                                                <option value=\"1\">250ml</option>
                                            </select>
                                        </div>
                                        <div class=\"modal_add_to_cart\">
                                            <form action=\"#\">
                                                <div class=\"quantity-selector \">
                                                    <button type=\"button\" class=\"quantity-btn\" onclick=\"changeQuantity(-1)\">−</button>
                                                    <input type=\"number\" id=\"quantity\" class=\"quantity-input\" value=\"0\" min=\"0\" max=\"100\">
                                                    <button type=\"button\" class=\"quantity-btn\" onclick=\"changeQuantity(1)\">+</button>
                                                </div>
                                                <button type=\"button\" class=\"stock-btn\">Stock : 20</button>
                                                <button type=\"submit\">Add to cart</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}", "home.html.twig", "/home/cytech/PhpstormProjects/DevWeb-ING1/templates/home.html.twig");
    }
}

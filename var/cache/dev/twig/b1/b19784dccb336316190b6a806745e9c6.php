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
class __TwigTemplate_09bc7733730121d1aac91bb4dfbc9a14 extends Template
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

        echo " Exotik - Accueil ";
        
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
        echo "    <!-- slider section starts  -->
    <section class=\"slider_section slider_section2 mb-66\">
        <div class=\"slider_area owl-carousel\">
            <div class=\"single_slider d-flex align-items-center\" data-bgimg=\"";
        // line 17
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
        // line 34
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
        // line 63
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
        // line 77
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
        // line 91
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
                        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/logo.png"), "html", null, true);
        echo "\">
                        <h2 class=\"text-center\">Exotik</h2>
                    </div>
                </div>
                <div class=\"col-lg-9 col-md-12\">
                    <div class=\"home_section_right\">
                        <!-- product area starts  -->
                        <!--
                        <div class=\"product_area mb-65\">
                            <div class=\"section_title section_title_style2\">
                                <h2>New Product</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"product_carousel product_column3 owl-carousel\">
                                    ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 127
            echo "                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 132)), "html", null, true);
            echo "\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 135)), "html", null, true);
            echo "\" alt=\"\">
                                                    </a>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 140), "html", null, true);
            echo "</a>
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
                                                        <span class=\"old_price\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 172), "html", null, true);
            echo "€</span>
                                                        <span class=\"current_price\">";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 173), "html", null, true);
            echo "€</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                                </div>
                            </div>
                        </div>
-->
                        <div class=\"product_area mb-65\">
                            <div class=\"section_title section_title_style2\">
                                <h2>New Product</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"product_carousel product_column3 owl-carousel\">
                                    ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 190, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 191
            echo "                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 196)), "html", null, true);
            echo "\" >
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 199)), "html", null, true);
            echo "\" >
                                                    </a>
                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_Add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 204)]), "html", null, true);
            echo "\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box_";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 209), "html", null, true);
            echo "\" title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\"><a href=\"#\">";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 217), "html", null, true);
            echo "</a></h4>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 219), "html", null, true);
            echo "€</span>
                                                        <span class=\"current_price\">";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 220), "html", null, true);
            echo "€</span>
                                                    </div>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 224)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 225
                echo "                                                                <li><a href=\"#\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a></li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                                                        </ul>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "                                </div>
                            </div>
                        </div>
                        ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 237, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 238
            echo "                            <div class=\"modal fade\" id=\"modal_box_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 238), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
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
                                                                <div class=\"tab-pane fade show active\" id=\"tab1_";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 250), "html", null, true);
            echo "\" role=\"tabpanel\">
                                                                    <div class=\"modal_tab_img\">
                                                                        <a href=\"#\"><img src=\"";
            // line 252
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 252)), "html", null, true);
            echo "\" alt=\"\"></a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"tab-pane fade\" id=\"tab2_";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 255), "html", null, true);
            echo "\" role=\"tabpanel\">
                                                                    <div class=\"modal_tab_img\">
                                                                        <a href=\"#\"><img src=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 257)), "html", null, true);
            echo "\" alt=\"\"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal_tab_button\">
                                                                <ul class=\"nav product_navactive owl-carousel\" role=\"tablist\">
                                                                    <li>
                                                                        <a href=\"#tab1_";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 264), "html", null, true);
            echo "\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\"
                                                                           aria-controls=\"tab1_";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 265), "html", null, true);
            echo "\" aria-selected=\"false\">
                                                                            <img src=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 266)), "html", null, true);
            echo "\" alt=\"\">
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=\"#tab2_";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 270), "html", null, true);
            echo "\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                                           aria-controls=\"tab2_";
            // line 271
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 271), "html", null, true);
            echo "\" aria-selected=\"false\">
                                                                            <img src=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 272)), "html", null, true);
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
                                                                <h2>";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getname", [], "any", false, false, false, 282), "html", null, true);
            echo "</h2>
                                                            </div>
                                                            <div class=\"modal_price mb-10\">
                                                                <span class=\"new_price\">";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 285), "html", null, true);
            echo "</span>
                                                                <span class=\"old_price\">";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 286), "html", null, true);
            echo "</span>
                                                            </div>
                                                            <div class=\"modal_description mb-15\">
                                                                <p>";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 289), "html", null, true);
            echo "</p>
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
                                                                    <form action=\"";
            // line 303
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cart2", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 303)]), "html", null, true);
            echo "\" method=\"POST\">
                                                                        <div class=\"quantity-selector\">
                                                                            <button type=\"button\" class=\"quantity-btn decrease\">−</button>
                                                                            <input type=\"number\" name=\"qty\" id=\"quantity_";
            // line 306
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 306), "html", null, true);
            echo "\" class=\"quantity-input\" value=\"0\" min=\"0\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 306), "html", null, true);
            echo "\">
                                                                            <button type=\"button\" class=\"quantity-btn increase\">+</button>
                                                                        </div>
                                                                        <button type=\"button\" class=\"stock-btn\">Stock : ";
            // line 309
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 309), "html", null, true);
            echo "</button>
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "                        <!-- product area ends -->

                        <!-- Long banner area starts  -->
                        <div class=\"banner_area banner_style_two mb-58\">
                            <div class=\"single_banner\">
                                <div class=\"banner_thumb\">
                                    <a href=\"#\">
                                        <img src=\"";
        // line 332
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
                                    ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 352, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 353
            echo "                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
            // line 359
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 359)), "html", null, true);
            echo "\" >
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
            // line 362
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 362)), "html", null, true);
            echo "\" >
                                                        </a>
                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"";
            // line 367
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_Add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 367)]), "html", null, true);
            echo "\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>
                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box_";
            // line 372
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 372), "html", null, true);
            echo "\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\"><a href=\"#\">";
            // line 380
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 380), "html", null, true);
            echo "</a></h4>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">";
            // line 382
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 382), "html", null, true);
            echo "€</span>
                                                            <span class=\"current_price\">";
            // line 383
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 383), "html", null, true);
            echo "€</span>
                                                        </div>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                ";
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 387)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 388
                echo "                                                                    <li><a href=\"#\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a></li>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 390
            echo "                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 398
        echo "                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- home section area ends -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 411
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 412
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
        return array (  749 => 412,  739 => 411,  718 => 398,  705 => 390,  698 => 388,  694 => 387,  687 => 383,  683 => 382,  678 => 380,  667 => 372,  659 => 367,  651 => 362,  645 => 359,  637 => 353,  633 => 352,  610 => 332,  601 => 325,  579 => 309,  571 => 306,  565 => 303,  548 => 289,  542 => 286,  538 => 285,  532 => 282,  519 => 272,  515 => 271,  511 => 270,  504 => 266,  500 => 265,  496 => 264,  486 => 257,  481 => 255,  475 => 252,  470 => 250,  454 => 238,  450 => 237,  445 => 234,  433 => 227,  426 => 225,  422 => 224,  415 => 220,  411 => 219,  406 => 217,  395 => 209,  387 => 204,  379 => 199,  373 => 196,  366 => 191,  362 => 190,  350 => 180,  337 => 173,  333 => 172,  298 => 140,  290 => 135,  284 => 132,  277 => 127,  273 => 126,  256 => 112,  232 => 91,  215 => 77,  198 => 63,  166 => 34,  146 => 17,  141 => 14,  131 => 13,  118 => 10,  108 => 9,  96 => 6,  91 => 5,  81 => 4,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Exotik - Accueil {% endblock %}

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
                        <img src=\"{{ asset('base/logo.png') }}\">
                        <h2 class=\"text-center\">Exotik</h2>
                    </div>
                </div>
                <div class=\"col-lg-9 col-md-12\">
                    <div class=\"home_section_right\">
                        <!-- product area starts  -->
                        <!--
                        <div class=\"product_area mb-65\">
                            <div class=\"section_title section_title_style2\">
                                <h2>New Product</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"product_carousel product_column3 owl-carousel\">
                                    {% for product in products %}
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"{{ asset(product.primaryImageUrl) }}\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"{{ asset(product.secondaryImageUrl) }}\" alt=\"\">
                                                    </a>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a>{{ product.name }}</a>
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
                                                        <span class=\"old_price\">{{ product.getOldPrice }}€</span>
                                                        <span class=\"current_price\">{{ product.getCurrentPrice }}€</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
-->
                        <div class=\"product_area mb-65\">
                            <div class=\"section_title section_title_style2\">
                                <h2>New Product</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"product_carousel product_column3 owl-carousel\">
                                    {% for product in products %}
                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"{{ asset(product.primaryImageUrl) }}\" >
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"{{ asset(product.secondaryImageUrl) }}\" >
                                                    </a>
                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"{{ path('cart_Add', {'id': product.id_prod}) }}\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box_{{ product.id_prod }}\" title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\"><a href=\"#\">{{ product.name }}</a></h4>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">{{ product.getOldPrice }}€</span>
                                                        <span class=\"current_price\">{{ product.getCurrentPrice }}€</span>
                                                    </div>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            {% for i in 1..product.rating %}
                                                                <li><a href=\"#\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a></li>
                                                            {% endfor %}
                                                        </ul>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                        {% for product in products %}
                            <div class=\"modal fade\" id=\"modal_box_{{ product.id_prod }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
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
                                                                <div class=\"tab-pane fade show active\" id=\"tab1_{{ product.id_prod }}\" role=\"tabpanel\">
                                                                    <div class=\"modal_tab_img\">
                                                                        <a href=\"#\"><img src=\"{{ asset(product.primaryImageUrl) }}\" alt=\"\"></a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"tab-pane fade\" id=\"tab2_{{ product.id_prod }}\" role=\"tabpanel\">
                                                                    <div class=\"modal_tab_img\">
                                                                        <a href=\"#\"><img src=\"{{ asset(product.secondaryImageUrl) }}\" alt=\"\"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal_tab_button\">
                                                                <ul class=\"nav product_navactive owl-carousel\" role=\"tablist\">
                                                                    <li>
                                                                        <a href=\"#tab1_{{ product.id_prod }}\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\"
                                                                           aria-controls=\"tab1_{{ product.id_prod }}\" aria-selected=\"false\">
                                                                            <img src=\"{{ asset(product.primaryImageUrl) }}\" alt=\"\">
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=\"#tab2_{{ product.id_prod }}\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                                           aria-controls=\"tab2_{{ product.id_prod }}\" aria-selected=\"false\">
                                                                            <img src=\"{{ asset(product.secondaryImageUrl) }}\" alt=\"\">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-7 col-md-7 col-sm-12\">
                                                        <div class=\"modal_right\">
                                                            <div class=\"modal_title mb-10\">
                                                                <h2>{{ product.getname }}</h2>
                                                            </div>
                                                            <div class=\"modal_price mb-10\">
                                                                <span class=\"new_price\">{{ product.getCurrentPrice }}</span>
                                                                <span class=\"old_price\">{{ product.getOldPrice }}</span>
                                                            </div>
                                                            <div class=\"modal_description mb-15\">
                                                                <p>{{ product.description }}</p>
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
                                                                    <form action=\"{{ path('add_cart2', {'id': product.id_prod})}}\" method=\"POST\">
                                                                        <div class=\"quantity-selector\">
                                                                            <button type=\"button\" class=\"quantity-btn decrease\">−</button>
                                                                            <input type=\"number\" name=\"qty\" id=\"quantity_{{ product.id_prod }}\" class=\"quantity-input\" value=\"0\" min=\"0\" max=\"{{ product.getQuantity }}\">
                                                                            <button type=\"button\" class=\"quantity-btn increase\">+</button>
                                                                        </div>
                                                                        <button type=\"button\" class=\"stock-btn\">Stock : {{ product.getQuantity }}</button>
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
                        {% endfor %}
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
                                    {% for product in products %}
                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"{{ asset(product.primaryImageUrl) }}\" >
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset(product.secondaryImageUrl) }}\" >
                                                        </a>
                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"{{ path('cart_Add', {'id': product.id_prod}) }}\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>
                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box_{{ product.id_prod }}\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\"><a href=\"#\">{{ product.name }}</a></h4>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">{{ product.getOldPrice }}€</span>
                                                            <span class=\"current_price\">{{ product.getCurrentPrice }}€</span>
                                                        </div>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                {% for i in 1..product.rating %}
                                                                    <li><a href=\"#\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a></li>
                                                                {% endfor %}
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- home section area ends -->
{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}", "home.html.twig", "H:\\Desktop\\Website\\DevWeb-ING1\\templates\\home.html.twig");
    }
}

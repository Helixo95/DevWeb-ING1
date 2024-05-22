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
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 121
            echo "                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 126)), "html", null, true);
            echo "\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 129)), "html", null, true);
            echo "\" alt=\"\">
                                                    </a>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134), "html", null, true);
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
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 166), "html", null, true);
            echo "€</span>
                                                        <span class=\"current_price\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 167), "html", null, true);
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
        // line 174
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
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 185
            echo "                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 190)), "html", null, true);
            echo "\" >
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 193)), "html", null, true);
            echo "\" >
                                                    </a>
                                                    <div class=\"action_links\">
                                                        <ul>
                                                            <li class=\"add_to_cart\">
                                                                <a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_Add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 198)]), "html", null, true);
            echo "\" title=\"Add to Cart\">
                                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                                </a>
                                                            </li>
                                                            <li class=\"quick_button\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box_";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 203), "html", null, true);
            echo "\" title=\"Quick View\">
                                                                    <i class=\"fa fa-eye\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\"><a href=\"#\">";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 211), "html", null, true);
            echo "</a></h4>
                                                    <div class=\"price_box\">
                                                        <span class=\"old_price\">";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 213), "html", null, true);
            echo "€</span>
                                                        <span class=\"current_price\">";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 214), "html", null, true);
            echo "€</span>
                                                    </div>
                                                    <div class=\"product_rating\">
                                                        <ul>
                                                            ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 218)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 219
                echo "                                                                <li><a href=\"#\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a></li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
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
        // line 228
        echo "                                </div>
                            </div>
                        </div>
                        ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 231, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 232
            echo "                            <div class=\"modal fade\" id=\"modal_box_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 232), "html", null, true);
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
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 244), "html", null, true);
            echo "\" role=\"tabpanel\">
                                                                    <div class=\"modal_tab_img\">
                                                                        <a href=\"#\"><img src=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 246)), "html", null, true);
            echo "\" alt=\"\"></a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"tab-pane fade\" id=\"tab2_";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 249), "html", null, true);
            echo "\" role=\"tabpanel\">
                                                                    <div class=\"modal_tab_img\">
                                                                        <a href=\"#\"><img src=\"";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 251)), "html", null, true);
            echo "\" alt=\"\"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal_tab_button\">
                                                                <ul class=\"nav product_navactive owl-carousel\" role=\"tablist\">
                                                                    <li>
                                                                        <a href=\"#tab1_";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 258), "html", null, true);
            echo "\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\"
                                                                           aria-controls=\"tab1_";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 259), "html", null, true);
            echo "\" aria-selected=\"false\">
                                                                            <img src=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 260)), "html", null, true);
            echo "\" alt=\"\">
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href=\"#tab2_";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 264), "html", null, true);
            echo "\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                                           aria-controls=\"tab2_";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 265), "html", null, true);
            echo "\" aria-selected=\"false\">
                                                                            <img src=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 266)), "html", null, true);
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
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getname", [], "any", false, false, false, 276), "html", null, true);
            echo "</h2>
                                                            </div>
                                                            <div class=\"modal_price mb-10\">
                                                                <span class=\"new_price\">";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 279), "html", null, true);
            echo "</span>
                                                                <span class=\"old_price\">";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 280), "html", null, true);
            echo "</span>
                                                            </div>
                                                            <div class=\"modal_description mb-15\">
                                                                <p>";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 283), "html", null, true);
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
            // line 297
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cart2", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 297)]), "html", null, true);
            echo "\" method=\"POST\">
                                                                        <div class=\"quantity-selector\">
                                                                            <button type=\"button\" class=\"quantity-btn decrease\">−</button>
                                                                            <input type=\"number\" name=\"qty\" id=\"quantity_";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 300), "html", null, true);
            echo "\" class=\"quantity-input\" value=\"0\" min=\"0\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 300), "html", null, true);
            echo "\">
                                                                            <button type=\"button\" class=\"quantity-btn increase\">+</button>
                                                                        </div>
                                                                        <button type=\"button\" class=\"stock-btn\">Stock : ";
            // line 303
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 303), "html", null, true);
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
        // line 319
        echo "                        <!-- product area ends -->

                        <!-- Long banner area starts  -->
                        <div class=\"banner_area banner_style_two mb-58\">
                            <div class=\"single_banner\">
                                <div class=\"banner_thumb\">
                                    <a href=\"#\">
                                        <img src=\"";
        // line 326
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
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 346, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 347
            echo "                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
            // line 353
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 353)), "html", null, true);
            echo "\" >
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
            // line 356
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 356)), "html", null, true);
            echo "\" >
                                                        </a>
                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"";
            // line 361
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_Add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 361)]), "html", null, true);
            echo "\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>
                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box_";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 366), "html", null, true);
            echo "\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\"><a href=\"#\">";
            // line 374
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 374), "html", null, true);
            echo "</a></h4>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">";
            // line 376
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 376), "html", null, true);
            echo "€</span>
                                                            <span class=\"current_price\">";
            // line 377
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 377), "html", null, true);
            echo "€</span>
                                                        </div>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                ";
            // line 381
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 381)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 382
                echo "                                                                    <li><a href=\"#\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a></li>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 384
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
        // line 392
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

    // line 405
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 406
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
        return array (  740 => 406,  730 => 405,  709 => 392,  696 => 384,  689 => 382,  685 => 381,  678 => 377,  674 => 376,  669 => 374,  658 => 366,  650 => 361,  642 => 356,  636 => 353,  628 => 347,  624 => 346,  601 => 326,  592 => 319,  570 => 303,  562 => 300,  556 => 297,  539 => 283,  533 => 280,  529 => 279,  523 => 276,  510 => 266,  506 => 265,  502 => 264,  495 => 260,  491 => 259,  487 => 258,  477 => 251,  472 => 249,  466 => 246,  461 => 244,  445 => 232,  441 => 231,  436 => 228,  424 => 221,  417 => 219,  413 => 218,  406 => 214,  402 => 213,  397 => 211,  386 => 203,  378 => 198,  370 => 193,  364 => 190,  357 => 185,  353 => 184,  341 => 174,  328 => 167,  324 => 166,  289 => 134,  281 => 129,  275 => 126,  268 => 121,  264 => 120,  232 => 91,  215 => 77,  198 => 63,  166 => 34,  146 => 17,  141 => 14,  131 => 13,  118 => 10,  108 => 9,  96 => 6,  91 => 5,  81 => 4,  62 => 2,  39 => 1,);
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
{% endblock %}
", "home.html.twig", "H:\\Desktop\\Website\\DevWeb-ING1\\templates\\home.html.twig");
    }
}

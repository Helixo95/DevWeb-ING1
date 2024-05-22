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
                        <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/logo.png"), "html", null, true);
        echo "\">
                        <h2 class=\"text-center\">Exotik</h2>
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
                                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 128
            echo "                                    <div class=\"col-lg-3\">
                                        <article class=\"single_product\">
                                            <figure>
                                                <div class=\"product_thumb\">
                                                    <a href=\"#\" class=\"primary_img\">
                                                        <img src=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 133)), "html", null, true);
            echo "\" alt=\"\">
                                                    </a>
                                                    <a href=\"#\" class=\"secondary_img\">
                                                        <img src=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 136)), "html", null, true);
            echo "\" alt=\"\">
                                                    </a>
                                                </div>
                                                <figcaption class=\"product_content\">
                                                    <h4 class=\"product_name\">
                                                        <a>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 141), "html", null, true);
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
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 173), "html", null, true);
            echo "€</span>
                                                        <span class=\"current_price\">";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 174), "html", null, true);
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
        // line 181
        echo "                                </div>
                            </div>
                        </div>

                        <!-- product area ends -->

                        <!-- Long banner area starts  -->
                        <div class=\"banner_area banner_style_two mb-58\">
                            <div class=\"single_banner\">
                                <div class=\"banner_thumb\">
                                    <a href=\"#\">
                                        <img src=\"";
        // line 192
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
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 212, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 213
            echo "                                    <div class=\"col-lg-3\">
                                        <div class=\"product_items\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 219)), "html", null, true);
            echo "\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 222)), "html", null, true);
            echo "\" alt=\"\">
                                                        </a>

                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 228), "html", null, true);
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
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 260), "html", null, true);
            echo "€</span>
                                                            <span class=\"current_price\">";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 261), "html", null, true);
            echo "€</span>
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
        // line 269
        echo "                                </div>
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
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N1-1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"tab2\" role=\"tabpanel\">
                                            <div class=\"modal_tab_img\">
                                                <a href=\"#\"><img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N2-1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"tab3\" role=\"tabpanel\">
                                            <div class=\"modal_tab_img\">
                                                <a href=\"#\"><img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"tab4\" role=\"tabpanel\">
                                            <div class=\"modal_tab_img\">
                                                <a href=\"#\"><img src=\"";
        // line 309
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
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N1-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#tab2\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                   aria-controls=\"tab2\" aria-selected=\"false\">
                                                    <img src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N2-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#tab3\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                   aria-controls=\"tab3\" aria-selected=\"false\">
                                                    <img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N3.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#tab4\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                   aria-controls=\"tab4\" aria-selected=\"false\">
                                                    <img src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/new-product/N4-1.png"), "html", null, true);
        echo "\" alt=\"\">
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
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 353
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 354
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
        return array (  593 => 354,  583 => 353,  557 => 336,  548 => 330,  539 => 324,  530 => 318,  518 => 309,  510 => 304,  502 => 299,  494 => 294,  467 => 269,  453 => 261,  449 => 260,  414 => 228,  405 => 222,  399 => 219,  391 => 213,  387 => 212,  364 => 192,  351 => 181,  338 => 174,  334 => 173,  299 => 141,  291 => 136,  285 => 133,  278 => 128,  274 => 127,  257 => 113,  233 => 92,  216 => 78,  199 => 64,  167 => 35,  147 => 18,  141 => 14,  131 => 13,  118 => 10,  108 => 9,  96 => 6,  91 => 5,  81 => 4,  62 => 2,  39 => 1,);
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
                                                            <img src=\"{{ asset(product.primaryImageUrl) }}\" alt=\"\">
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"{{ asset(product.secondaryImageUrl) }}\" alt=\"\">
                                                        </a>

                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\">
                                                            <a href=\"#\">{{ product.name }}</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}", "home.html.twig", "C:\\laragon\\www\\DevWeb-ING1\\templates\\home.html.twig");
    }
}

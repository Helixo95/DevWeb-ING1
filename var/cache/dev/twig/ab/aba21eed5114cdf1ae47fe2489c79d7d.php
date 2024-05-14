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

/* product.html.twig */
class __TwigTemplate_bd4c3aead436bd379eb7a513ba68a9c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product.html.twig", 1);
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

        echo "Page de Produits";
        
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product/style.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product/product.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <div class=\"product_section\">
    <div class=\"product_area product_area_two mb-65\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section_title\">
                        <h2>OUR Products</h2>
                        <div class=\"product_tab_btn\">
                            <ul class=\"nav\" role=\"tablist\">
                                <li class=\"nav-item\"><a href=\"/product/men\" class=\"nav-link ";
        // line 26
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()) == "men")) {
            echo "active";
        }
        echo "\">Men</a></li>
                                <li class=\"nav-item\"><a href=\"/product/women\" class=\"nav-link ";
        // line 27
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 27, $this->source); })()) == "women")) {
            echo "active";
        }
        echo "\">Women</a></li>
                                <li class=\"nav-item\"><a href=\"/product/unisex\" class=\"nav-link ";
        // line 28
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 28, $this->source); })()) == "unisex")) {
            echo "active";
        }
        echo "\">Unisex</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
            <div class=\"tab-content\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 38
            echo "                    <div class=\"tab-pane fade show active\" id=\"";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"product_grid\">
                                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 42
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 42) == $context["category"])) {
                    // line 43
                    echo "                                        <div class=\"col-md-3 col-sm-6\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 48)), "html", null, true);
                    echo "\" >
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 51)), "html", null, true);
                    echo "\" >
                                                        </a>
                                                        <div class=\"action_links\">
                                                            <ul>
                                                                <li class=\"add_to_cart\">
                                                                    <a href=\"#\" title=\"Add to Cart\">
                                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                                    </a>
                                                                </li>
                                                                <li class=\"quick_button\">
                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box_";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 61), "html", null, true);
                    echo "\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\"><a href=\"#\">";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69), "html", null, true);
                    echo "</a></h4>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 71), "html", null, true);
                    echo "€</span>
                                                            <span class=\"current_price\">";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 72), "html", null, true);
                    echo "€</span>
                                                        </div>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                ";
                    // line 76
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 76)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 77
                        echo "                                                                    <li><a href=\"#\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a></li>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    ";
                }
                // line 86
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "            </div>

        </div>
    </div>
    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 96
            echo "        <div class=\"modal fade\" id=\"modal_box_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 96), "html", null, true);
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
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 108), "html", null, true);
            echo "\" role=\"tabpanel\">
                                                <div class=\"modal_tab_img\">
                                                    <a href=\"#\"><img src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 110)), "html", null, true);
            echo "\" alt=\"\"></a>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"tab2_";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 113), "html", null, true);
            echo "\" role=\"tabpanel\">
                                                <div class=\"modal_tab_img\">
                                                    <a href=\"#\"><img src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 115)), "html", null, true);
            echo "\" alt=\"\"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"modal_tab_button\">
                                            <ul class=\"nav product_navactive owl-carousel\" role=\"tablist\">
                                                <li>
                                                    <a href=\"#tab1_";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 122), "html", null, true);
            echo "\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\"
                                                       aria-controls=\"tab1_";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 123), "html", null, true);
            echo "\" aria-selected=\"false\">
                                                        <img src=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 124)), "html", null, true);
            echo "\" alt=\"\">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#tab2_";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 128), "html", null, true);
            echo "\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                       aria-controls=\"tab2_";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 129), "html", null, true);
            echo "\" aria-selected=\"false\">
                                                        <img src=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 130)), "html", null, true);
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
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getname", [], "any", false, false, false, 140), "html", null, true);
            echo "</h2>
                                        </div>
                                        <div class=\"modal_price mb-10\">
                                            <span class=\"new_price\">";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 143), "html", null, true);
            echo "</span>
                                            <span class=\"old_price\">";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 144), "html", null, true);
            echo "</span>
                                        </div>
                                        <div class=\"modal_description mb-15\">
                                            <p>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 147), "html", null, true);
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
                                                <form action=\"#\">
                                                    <div class=\"quantity-selector\">
                                                        <button type=\"button\" class=\"quantity-btn decrease\">−</button>
                                                        <input type=\"number\" id=\"quantity_";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 164), "html", null, true);
            echo "\" class=\"quantity-input\" value=\"0\" min=\"0\" max=\"100\">
                                                        <button type=\"button\" class=\"quantity-btn increase\">+</button>
                                                    </div>
                                                    <button type=\"button\" class=\"stock-btn\">Stock : ";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 167), "html", null, true);
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
        // line 183
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 187
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 188
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
        return "product.html.twig";
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
        return array (  461 => 188,  451 => 187,  439 => 183,  417 => 167,  411 => 164,  391 => 147,  385 => 144,  381 => 143,  375 => 140,  362 => 130,  358 => 129,  354 => 128,  347 => 124,  343 => 123,  339 => 122,  329 => 115,  324 => 113,  318 => 110,  313 => 108,  297 => 96,  293 => 95,  287 => 91,  278 => 87,  272 => 86,  263 => 79,  256 => 77,  252 => 76,  245 => 72,  241 => 71,  236 => 69,  225 => 61,  212 => 51,  206 => 48,  199 => 43,  196 => 42,  192 => 41,  185 => 38,  181 => 37,  167 => 28,  161 => 27,  155 => 26,  144 => 17,  134 => 16,  121 => 13,  111 => 12,  96 => 6,  91 => 5,  81 => 4,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Page de Produits{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('product/style.css') }}\">
    <script src=\"{{ asset('product/product.js') }}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

{% endblock %}

{% block header %}
    {{ parent() }}
{% endblock %}

{% block content %}
    <div class=\"product_section\">
    <div class=\"product_area product_area_two mb-65\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section_title\">
                        <h2>OUR Products</h2>
                        <div class=\"product_tab_btn\">
                            <ul class=\"nav\" role=\"tablist\">
                                <li class=\"nav-item\"><a href=\"/product/men\" class=\"nav-link {% if category == 'men' %}active{% endif %}\">Men</a></li>
                                <li class=\"nav-item\"><a href=\"/product/women\" class=\"nav-link {% if category == 'women' %}active{% endif %}\">Women</a></li>
                                <li class=\"nav-item\"><a href=\"/product/unisex\" class=\"nav-link {% if category == 'unisex' %}active{% endif %}\">Unisex</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
            <div class=\"tab-content\">
                {% for category in categories %}
                    <div class=\"tab-pane fade show active\" id=\"{{ category }}\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"product_grid\">
                                {% for product in products %}
                                    {% if product.category == category %}
                                        <div class=\"col-md-3 col-sm-6\">
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
                                                                    <a href=\"#\" title=\"Add to Cart\">
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
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
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
                                                <form action=\"#\">
                                                    <div class=\"quantity-selector\">
                                                        <button type=\"button\" class=\"quantity-btn decrease\">−</button>
                                                        <input type=\"number\" id=\"quantity_{{ product.id_prod }}\" class=\"quantity-input\" value=\"0\" min=\"0\" max=\"100\">
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


{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock footer %}", "product.html.twig", "C:\\Web\\tamere\\DevWeb-ING1\\templates\\product.html.twig");
    }
}

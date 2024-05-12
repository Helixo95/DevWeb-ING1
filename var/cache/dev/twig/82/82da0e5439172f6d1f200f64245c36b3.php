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
class __TwigTemplate_e9146e1b6908a73c02d0d509448e781a extends Template
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

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 15
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
        // line 24
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 24, $this->source); })()) == "men")) {
            echo "active";
        }
        echo "\">Men</a></li>
                                <li class=\"nav-item\"><a href=\"/product/women\" class=\"nav-link ";
        // line 25
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 25, $this->source); })()) == "women")) {
            echo "active";
        }
        echo "\">Women</a></li>
                                <li class=\"nav-item\"><a href=\"/product/unisex\" class=\"nav-link ";
        // line 26
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()) == "unisex")) {
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            echo "                    <div class=\"tab-pane fade show active\" id=\"";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"product_grid\">
                                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 40
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 40) == $context["category"])) {
                    // line 41
                    echo "                                        <div class=\"col-md-3 col-sm-6\">
                                            <article class=\"single_product\">
                                                <figure>
                                                    <div class=\"product_thumb\">
                                                        <a href=\"#\" class=\"primary_img\">
                                                            <img src=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 46)), "html", null, true);
                    echo "\" >
                                                        </a>
                                                        <a href=\"#\" class=\"secondary_img\">
                                                            <img src=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 49)), "html", null, true);
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
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 59), "html", null, true);
                    echo "\" title=\"Quick View\">
                                                                        <i class=\"fa fa-eye\"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class=\"product_content\">
                                                        <h4 class=\"product_name\"><a href=\"#\">";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67), "html", null, true);
                    echo "</a></h4>
                                                        <div class=\"price_box\">
                                                            <span class=\"old_price\">";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 69), "html", null, true);
                    echo "€</span>
                                                            <span class=\"current_price\">";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 70), "html", null, true);
                    echo "€</span>
                                                        </div>
                                                        <div class=\"product_rating\">
                                                            <ul>
                                                                ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 74)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 75
                        echo "                                                                    <li><a href=\"#\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a></li>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    ";
                }
                // line 84
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </div>

        </div>
    </div>
    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 94
            echo "        <div class=\"modal fade\" id=\"modal_box_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 94), "html", null, true);
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
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 106), "html", null, true);
            echo "\" role=\"tabpanel\">
                                                <div class=\"modal_tab_img\">
                                                    <a href=\"#\"><img src=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 108)), "html", null, true);
            echo "\" alt=\"\"></a>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"tab2_";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 111), "html", null, true);
            echo "\" role=\"tabpanel\">
                                                <div class=\"modal_tab_img\">
                                                    <a href=\"#\"><img src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 113)), "html", null, true);
            echo "\" alt=\"\"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"modal_tab_button\">
                                            <ul class=\"nav product_navactive owl-carousel\" role=\"tablist\">
                                                <li>
                                                    <a href=\"#tab1_";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 120), "html", null, true);
            echo "\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\"
                                                       aria-controls=\"tab1_";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 121), "html", null, true);
            echo "\" aria-selected=\"false\">
                                                        <img src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 122)), "html", null, true);
            echo "\" alt=\"\">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#tab2_";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 126), "html", null, true);
            echo "\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                       aria-controls=\"tab2_";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 127), "html", null, true);
            echo "\" aria-selected=\"false\">
                                                        <img src=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 128)), "html", null, true);
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
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getname", [], "any", false, false, false, 138), "html", null, true);
            echo "</h2>
                                        </div>
                                        <div class=\"modal_price mb-10\">
                                            <span class=\"new_price\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 141), "html", null, true);
            echo "</span>
                                            <span class=\"old_price\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 142), "html", null, true);
            echo "</span>
                                        </div>
                                        <div class=\"modal_description mb-15\">
                                            <p>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 145), "html", null, true);
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
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 162), "html", null, true);
            echo "\" class=\"quantity-input\" value=\"0\" min=\"0\" max=\"100\">
                                                        <button type=\"button\" class=\"quantity-btn increase\">+</button>
                                                    </div>
                                                    <button type=\"button\" class=\"stock-btn\">Stock : ";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 165), "html", null, true);
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
        // line 181
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 185
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 186
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
        return array (  437 => 186,  427 => 185,  415 => 181,  393 => 165,  387 => 162,  367 => 145,  361 => 142,  357 => 141,  351 => 138,  338 => 128,  334 => 127,  330 => 126,  323 => 122,  319 => 121,  315 => 120,  305 => 113,  300 => 111,  294 => 108,  289 => 106,  273 => 94,  269 => 93,  263 => 89,  254 => 85,  248 => 84,  239 => 77,  232 => 75,  228 => 74,  221 => 70,  217 => 69,  212 => 67,  201 => 59,  188 => 49,  182 => 46,  175 => 41,  172 => 40,  168 => 39,  161 => 36,  157 => 35,  143 => 26,  137 => 25,  131 => 24,  120 => 15,  110 => 14,  95 => 6,  90 => 5,  80 => 4,  61 => 2,  38 => 1,);
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
{% endblock footer %}", "product.html.twig", "H:\\Desktop\\Website\\DevWeb-ING1\\templates\\product.html.twig");
    }
}

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
                                <li>
                                    <a href=\"#Men\" class=\"active\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"Men\"
                                       aria-selected=\"true\">
                                        Men
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#Women\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"Women\"
                                       aria-selected=\"false\">
                                        Women
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#Unisex\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"Unisex\"
                                       aria-selected=\"false\">
                                        Unisex
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"Men\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"product_grid\">
                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 54
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 54) == "Men")) {
                // line 55
                echo "                                <div class=\"col-md-3 col-sm-6\">
                                    <article class=\"single_product\">
                                        <figure>
                                            <div class=\"product_thumb\">
                                                <a href=\"#\" class=\"primary_img\">
                                                    <img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 60)), "html", null, true);
                echo "\" alt=\"product.image_alt\">
                                                </a>
                                                <a href=\"#\" class=\"secondary_img\">
                                                    <img src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 63)), "html", null, true);
                echo "\" alt=\"product.image_alt\">
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
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 73), "html", null, true);
                echo "\" title=\"Quick View\">
                                                                <i class=\"fa fa-eye\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class=\"product_content\">
                                                <h4 class=\"product_name\">
                                                    <a href=\"#\">";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82), "html", null, true);
                echo "</a>
                                                </h4>
                                                <div class=\"price_box\">
                                                    <span class=\"old_price\">";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 85), "html", null, true);
                echo "€</span>
                                                    <span class=\"current_price\">";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 86), "html", null, true);
                echo "€</span>
                                                </div>
                                                <div class=\"product_rating\">
                                                    <ul>
                                                        ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 90)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 91
                    echo "                                                            <li><a href=\"#\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a></li>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                ";
            }
            // line 100
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                        </div>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"Women\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"product_grid\">
                            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 108
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 108) == "Women")) {
                // line 109
                echo "                                <div class=\"col-md-3 col-sm-6\">
                                    <article class=\"single_product\">
                                        <figure>
                                            <div class=\"product_thumb\">
                                                <a href=\"#\" class=\"primary_img\">
                                                    <img src=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 114)), "html", null, true);
                echo "\" alt=\"product.image_alt\">
                                                </a>
                                                <a href=\"#\" class=\"secondary_img\">
                                                    <img src=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 117)), "html", null, true);
                echo "\" alt=\"product.image_alt\">
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
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 127), "html", null, true);
                echo "\" title=\"Quick View\">
                                                                <i class=\"fa fa-eye\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class=\"product_content\">
                                                <h4 class=\"product_name\">
                                                    <a href=\"#\">";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "method", false, false, false, 136), "html", null, true);
                echo "</a>
                                                </h4>
                                                <div class=\"price_box\">
                                                    <span class=\"old_price\">";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 139), "html", null, true);
                echo "€</span>
                                                    <span class=\"current_price\">";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 140), "html", null, true);
                echo "€</span>
                                                </div>
                                                <div class=\"product_rating\">
                                                    <ul>
                                                        ";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 144)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 145
                    echo "                                                            <li><a href=\"#\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a></li>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                ";
            }
            // line 154
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                        </div>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"Unisex\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"product_grid\">
                            ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 161, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 162
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 162) == "Unisex")) {
                // line 163
                echo "                                <div class=\"col-md-3 col-sm-6\">
                                    <article class=\"single_product\">
                                        <figure>
                                            <div class=\"product_thumb\">
                                                <a href=\"#\" class=\"primary_img\">
                                                    <img src=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "primaryImageUrl", [], "any", false, false, false, 168)), "html", null, true);
                echo "\" alt=\"product.image_alt\">
                                                </a>
                                                <a href=\"#\" class=\"secondary_img\">
                                                    <img src=\"";
                // line 171
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "secondaryImageUrl", [], "any", false, false, false, 171)), "html", null, true);
                echo "\" alt=\"product.image_alt\">
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
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 181), "html", null, true);
                echo "\" title=\"Quick View\">
                                                                <i class=\"fa fa-eye\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class=\"product_content\">
                                                <h4 class=\"product_name\">
                                                    <a href=\"#\">";
                // line 190
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "method", false, false, false, 190), "html", null, true);
                echo "</a>
                                                </h4>
                                                <div class=\"price_box\">
                                                    <span class=\"old_price\">";
                // line 193
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 193), "html", null, true);
                echo "€</span>
                                                    <span class=\"current_price\">";
                // line 194
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 194), "html", null, true);
                echo "€</span>
                                                </div>
                                                <div class=\"product_rating\">
                                                    <ul>
                                                        ";
                // line 198
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 198)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 199
                    echo "                                                            <li><a href=\"#\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a></li>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                echo "                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                ";
            }
            // line 208
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 216, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 217
            echo "        <div class=\"modal fade\" id=\"modal_box_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 217), "html", null, true);
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
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 229), "html", null, true);
            echo "\" role=\"tabpanel\">
                                                <div class=\"modal_tab_img\">
                                                    <a href=\"#\"><img src=\"";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getprimaryImageUrl", [], "any", false, false, false, 231), "html", null, true);
            echo "\" alt=\"\"></a>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"tab2_";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 234), "html", null, true);
            echo "\" role=\"tabpanel\">
                                                <div class=\"modal_tab_img\">
                                                    <a href=\"#\"><img src=\"";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getsecondaryImageUrl", [], "any", false, false, false, 236), "html", null, true);
            echo "\" alt=\"\"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"modal_tab_button\">
                                            <ul class=\"nav product_navactive owl-carousel\" role=\"tablist\">
                                                <li>
                                                    <a href=\"#tab1_";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 243), "html", null, true);
            echo "\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\"
                                                       aria-controls=\"tab1_";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 244), "html", null, true);
            echo "\" aria-selected=\"false\">
                                                        <img src=\"";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getprimaryImageUrl", [], "any", false, false, false, 245), "html", null, true);
            echo "\" alt=\"\">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#tab2_";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 249), "html", null, true);
            echo "\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                       aria-controls=\"tab2_";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 250), "html", null, true);
            echo "\" aria-selected=\"false\">
                                                        <img src=\"";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getsecondaryImageUrl", [], "any", false, false, false, 251), "html", null, true);
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
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getname", [], "any", false, false, false, 261), "html", null, true);
            echo "</h2>
                                        </div>
                                        <div class=\"modal_price mb-10\">
                                            <span class=\"new_price\">";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "any", false, false, false, 264), "html", null, true);
            echo "</span>
                                            <span class=\"old_price\">";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getOldPrice", [], "any", false, false, false, 265), "html", null, true);
            echo "</span>
                                        </div>
                                        <div class=\"modal_description mb-15\">
                                            <p>";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 268), "html", null, true);
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
                                                    <div class=\"quantity-selector \">
                                                        <button type=\"button\" class=\"quantity-btn\" onclick=\"changeQuantity(-1, '";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 284), "html", null, true);
            echo "')\">−</button>
                                                        <input type=\"number\" id=\"quantity_";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 285), "html", null, true);
            echo "\" class=\"quantity-input\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 285), "html", null, true);
            echo "\"
                                                               min=\"0\" max=\"100\">
                                                        <button type=\"button\" class=\"quantity-btn\" onclick=\"changeQuantity(1, '";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId_prod", [], "any", false, false, false, 287), "html", null, true);
            echo "')\">+</button>
                                                    </div>
                                                    <button type=\"button\" class=\"stock-btn\">Stock : ";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 289), "html", null, true);
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
        // line 303
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 307
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 308
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
        return array (  646 => 308,  636 => 307,  624 => 303,  604 => 289,  599 => 287,  592 => 285,  588 => 284,  569 => 268,  563 => 265,  559 => 264,  553 => 261,  540 => 251,  536 => 250,  532 => 249,  525 => 245,  521 => 244,  517 => 243,  507 => 236,  502 => 234,  496 => 231,  491 => 229,  475 => 217,  471 => 216,  462 => 209,  456 => 208,  447 => 201,  440 => 199,  436 => 198,  429 => 194,  425 => 193,  419 => 190,  407 => 181,  394 => 171,  388 => 168,  381 => 163,  378 => 162,  374 => 161,  366 => 155,  360 => 154,  351 => 147,  344 => 145,  340 => 144,  333 => 140,  329 => 139,  323 => 136,  311 => 127,  298 => 117,  292 => 114,  285 => 109,  282 => 108,  278 => 107,  270 => 101,  264 => 100,  255 => 93,  248 => 91,  244 => 90,  237 => 86,  233 => 85,  227 => 82,  215 => 73,  202 => 63,  196 => 60,  189 => 55,  186 => 54,  182 => 53,  144 => 17,  134 => 16,  121 => 13,  111 => 12,  96 => 6,  91 => 5,  81 => 4,  62 => 2,  39 => 1,);
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
                                <li>
                                    <a href=\"#Men\" class=\"active\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"Men\"
                                       aria-selected=\"true\">
                                        Men
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#Women\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"Women\"
                                       aria-selected=\"false\">
                                        Women
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#Unisex\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"Unisex\"
                                       aria-selected=\"false\">
                                        Unisex
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"Men\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"product_grid\">
                            {% for product in products %}
                                {% if product.category == 'Men' %}
                                <div class=\"col-md-3 col-sm-6\">
                                    <article class=\"single_product\">
                                        <figure>
                                            <div class=\"product_thumb\">
                                                <a href=\"#\" class=\"primary_img\">
                                                    <img src=\"{{ asset(product.primaryImageUrl) }}\" alt=\"product.image_alt\">
                                                </a>
                                                <a href=\"#\" class=\"secondary_img\">
                                                    <img src=\"{{ asset(product.secondaryImageUrl) }}\" alt=\"product.image_alt\">
                                                </a>
                                                <div class=\"action_links\">
                                                    <ul>
                                                        <li class=\"add_to_cart\">
                                                            <a href=\"#\" title=\"Add to Cart\">
                                                                <i class=\"fa fa-shopping-cart\"></i>
                                                            </a>
                                                        </li>
                                                        <li class=\"quick_button\">
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box_{{ product.getId_prod }}\" title=\"Quick View\">
                                                                <i class=\"fa fa-eye\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class=\"product_content\">
                                                <h4 class=\"product_name\">
                                                    <a href=\"#\">{{ product.name }}</a>
                                                </h4>
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
                <div class=\"tab-pane fade\" id=\"Women\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"product_grid\">
                            {% for product in products %}
                                {% if product.category == 'Women' %}
                                <div class=\"col-md-3 col-sm-6\">
                                    <article class=\"single_product\">
                                        <figure>
                                            <div class=\"product_thumb\">
                                                <a href=\"#\" class=\"primary_img\">
                                                    <img src=\"{{ asset(product.primaryImageUrl) }}\" alt=\"product.image_alt\">
                                                </a>
                                                <a href=\"#\" class=\"secondary_img\">
                                                    <img src=\"{{ asset(product.secondaryImageUrl) }}\" alt=\"product.image_alt\">
                                                </a>
                                                <div class=\"action_links\">
                                                    <ul>
                                                        <li class=\"add_to_cart\">
                                                            <a href=\"#\" title=\"Add to Cart\">
                                                                <i class=\"fa fa-shopping-cart\"></i>
                                                            </a>
                                                        </li>
                                                        <li class=\"quick_button\">
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box_{{ product.getId_prod }}\" title=\"Quick View\">
                                                                <i class=\"fa fa-eye\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class=\"product_content\">
                                                <h4 class=\"product_name\">
                                                    <a href=\"#\">{{ product.getName() }}</a>
                                                </h4>
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
                <div class=\"tab-pane fade\" id=\"Unisex\" role=\"tabpanel\">
                    <div class=\"row\">
                        <div class=\"product_grid\">
                            {% for product in products %}
                                {% if product.category == 'Unisex' %}
                                <div class=\"col-md-3 col-sm-6\">
                                    <article class=\"single_product\">
                                        <figure>
                                            <div class=\"product_thumb\">
                                                <a href=\"#\" class=\"primary_img\">
                                                    <img src=\"{{ asset(product.primaryImageUrl) }}\" alt=\"product.image_alt\">
                                                </a>
                                                <a href=\"#\" class=\"secondary_img\">
                                                    <img src=\"{{ asset(product.secondaryImageUrl) }}\" alt=\"product.image_alt\">
                                                </a>
                                                <div class=\"action_links\">
                                                    <ul>
                                                        <li class=\"add_to_cart\">
                                                            <a href=\"#\" title=\"Add to Cart\">
                                                                <i class=\"fa fa-shopping-cart\"></i>
                                                            </a>
                                                        </li>
                                                        <li class=\"quick_button\">
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box_{{ product.getId_prod }}\" title=\"Quick View\">
                                                                <i class=\"fa fa-eye\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class=\"product_content\">
                                                <h4 class=\"product_name\">
                                                    <a href=\"#\">{{ product.getName() }}</a>
                                                </h4>
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
                </div>
            </div>
        </div>
    </div>
    {% for product in products %}
        <div class=\"modal fade\" id=\"modal_box_{{ product.getId_prod }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
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
                                            <div class=\"tab-pane fade show active\" id=\"tab1_{{ product.getId_prod }}\" role=\"tabpanel\">
                                                <div class=\"modal_tab_img\">
                                                    <a href=\"#\"><img src=\"{{ product.getprimaryImageUrl }}\" alt=\"\"></a>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"tab2_{{ product.getId_prod }}\" role=\"tabpanel\">
                                                <div class=\"modal_tab_img\">
                                                    <a href=\"#\"><img src=\"{{ product.getsecondaryImageUrl }}\" alt=\"\"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"modal_tab_button\">
                                            <ul class=\"nav product_navactive owl-carousel\" role=\"tablist\">
                                                <li>
                                                    <a href=\"#tab1_{{ product.getId_prod }}\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\"
                                                       aria-controls=\"tab1_{{ product.getId_prod }}\" aria-selected=\"false\">
                                                        <img src=\"{{ product.getprimaryImageUrl }}\" alt=\"\">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#tab2_{{ product.getId_prod }}\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\"
                                                       aria-controls=\"tab2_{{ product.id_prod }}\" aria-selected=\"false\">
                                                        <img src=\"{{ product.getsecondaryImageUrl }}\" alt=\"\">
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
                                                    <div class=\"quantity-selector \">
                                                        <button type=\"button\" class=\"quantity-btn\" onclick=\"changeQuantity(-1, '{{ product.getId_prod }}')\">−</button>
                                                        <input type=\"number\" id=\"quantity_{{ product.getId_prod }}\" class=\"quantity-input\" value=\"{{ product.getQuantity }}\"
                                                               min=\"0\" max=\"100\">
                                                        <button type=\"button\" class=\"quantity-btn\" onclick=\"changeQuantity(1, '{{ product.getId_prod }}')\">+</button>
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

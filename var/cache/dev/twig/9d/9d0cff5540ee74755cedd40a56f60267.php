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

/* cart.html.twig */
class __TwigTemplate_5480ce3fda36b7d2fb3f892d9ec74bb7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("panier/panier.css"), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
    <!-- Font Awesome icons (free version)-->
    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
    <!-- Google fonts-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    my cart
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "

    <section class=\"h-100 h-custom\" >
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12\">
                    <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
                        <div class=\"card-body p-0\">
                            <div class=\"row g-0\">
                                <div class=\"col-lg-8\">
                                    <div class=\"p-5\" id=\"shopping cart\">
                                        <div class=\"d-flex justify-content-between align-items-center mb-5\">
                                            <h1 class=\"fw-bold mb-0 text-black\">Shopping Cart</h1>
                                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            echo "                                                <div class=\" font-weight-bold text-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                        </div>
                                        ";
        // line 40
        if (twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 40, $this->source); })()))) {
            // line 41
            echo "                                            <div class=\" text-muted\"> Aucun article :( </div>
                                        ";
        }
        // line 43
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "                                            <hr class=\"my-4\">

                                            <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                                                <div class=\"col-md-2 col-lg-2 col-xl-2\">
                                                    <img
                                                            src=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 49), "primaryImageUrl", [], "any", false, false, false, 49), "html", null, true);
            echo "\"
                                                            class=\"img-fluid rounded-3\" alt=\"Cotton T-shirt\">
                                                </div>
                                                <div class=\"col-md-3 col-lg-3 col-xl-3\">
                                                    <h6 class=\"text-muted\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 53), "category", [], "any", false, false, false, 53), "html", null, true);
            echo "</h6>
                                                    <h6 class=\"text-black mb-0\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</h6>
                                                </div>
                                                <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                                                    <a class=\"btn btn-link px-2\"
                                                       href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_Min", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 58), "id_prod", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">
                                                        <i class=\"fas fa-minus\"></i>
                                                    </a>

                                                    <div class = \"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 62), "html", null, true);
            echo "</div>

                                                    <a class=\"btn btn-link px-2\"
                                                       href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_Add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 65), "id_prod", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">
                                                        <i class=\"fas fa-plus\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                                                    <h6 class=\"mb-0\">€ ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 70), "getCurrentPrice", [], "any", false, false, false, 70), "html", null, true);
            echo "</h6>
                                                </div>
                                                <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                                                    <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 73), "id_prod", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" class=\"text-muted\"><i class=\"fas fa-times\"></i></a>
                                                </div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                    </div>
                                </div>
                                <div class=\"col-lg-4 bg-grey\">
                                    <div class=\"p-5\">
                                        <h3 class=\"fw-bold mb-5 mt-2 pt-1\">Summary</h3>
                                        <hr class=\"my-4\">

                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <h5 class=\"text-uppercase\">items ";
        // line 85
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 85, $this->source); })())), "html", null, true);
        echo "</h5>
                                        </div>



                                        <div class=\"mb-4 pb-2\">

                                        </div>

                                        <h5 class=\"text-uppercase mb-3\">Give code</h5>

                                        <div class=\"mb-5\">
                                            <div class=\"form-outline\">
                                                <input type=\"text\" id=\"form3Examplea2\" class=\"form-control form-control-lg\" />
                                                <label class=\"form-label\" for=\"form3Examplea2\">Enter your code</label>
                                            </div>
                                        </div>

                                        <hr class=\"my-4\">

                                        <div class=\"d-flex justify-content-between mb-5\">
                                            <h5 class=\"text-uppercase\">Total price</h5>
                                            <h5>";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "</h5>
                                        </div>

                                        <a type=\"button\" class=\"btn btn-dark btn-block btn-lg\"
                                           data-mdb-ripple-color=\"dark\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_register");
        echo "\">Register</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 125
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 126
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
        return "cart.html.twig";
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
        return array (  324 => 126,  314 => 125,  291 => 111,  284 => 107,  259 => 85,  249 => 77,  239 => 73,  233 => 70,  225 => 65,  219 => 62,  212 => 58,  205 => 54,  201 => 53,  194 => 49,  187 => 44,  182 => 43,  178 => 41,  176 => 40,  173 => 39,  164 => 37,  160 => 36,  145 => 23,  135 => 22,  122 => 19,  112 => 18,  101 => 15,  91 => 14,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('panier/panier.css') }}\">
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
    <!-- Font Awesome icons (free version)-->
    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
    <!-- Google fonts-->
{% endblock %}


{% block title %}
    my cart
{% endblock %}

{% block header %}
    {{ parent() }}
{% endblock %}

{% block content %}


    <section class=\"h-100 h-custom\" >
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12\">
                    <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
                        <div class=\"card-body p-0\">
                            <div class=\"row g-0\">
                                <div class=\"col-lg-8\">
                                    <div class=\"p-5\" id=\"shopping cart\">
                                        <div class=\"d-flex justify-content-between align-items-center mb-5\">
                                            <h1 class=\"fw-bold mb-0 text-black\">Shopping Cart</h1>
                                            {% for message in messages %}
                                                <div class=\" font-weight-bold text-success\">{{ message }}</div>
                                            {% endfor %}
                                        </div>
                                        {% if items is empty %}
                                            <div class=\" text-muted\"> Aucun article :( </div>
                                        {%endif%}
                                        {% for item in items %}
                                            <hr class=\"my-4\">

                                            <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                                                <div class=\"col-md-2 col-lg-2 col-xl-2\">
                                                    <img
                                                            src=\"{{ item.product.primaryImageUrl }}\"
                                                            class=\"img-fluid rounded-3\" alt=\"Cotton T-shirt\">
                                                </div>
                                                <div class=\"col-md-3 col-lg-3 col-xl-3\">
                                                    <h6 class=\"text-muted\">{{ item.product.category }}</h6>
                                                    <h6 class=\"text-black mb-0\">{{ item.product.name }}</h6>
                                                </div>
                                                <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                                                    <a class=\"btn btn-link px-2\"
                                                       href=\"{{ path('cart_Min', {\"id\": item.product.id_prod}) }}\">
                                                        <i class=\"fas fa-minus\"></i>
                                                    </a>

                                                    <div class = \"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">{{ item.quantity }}</div>

                                                    <a class=\"btn btn-link px-2\"
                                                       href=\"{{ path('cart_Add', {\"id\": item.product.id_prod}) }}\">
                                                        <i class=\"fas fa-plus\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                                                    <h6 class=\"mb-0\">€ {{ item.product.getCurrentPrice }}</h6>
                                                </div>
                                                <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                                                    <a href=\"{{ path('cart_remove', {'id': item.product.id_prod}) }}\" class=\"text-muted\"><i class=\"fas fa-times\"></i></a>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                                <div class=\"col-lg-4 bg-grey\">
                                    <div class=\"p-5\">
                                        <h3 class=\"fw-bold mb-5 mt-2 pt-1\">Summary</h3>
                                        <hr class=\"my-4\">

                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <h5 class=\"text-uppercase\">items {{ items|length }}</h5>
                                        </div>



                                        <div class=\"mb-4 pb-2\">

                                        </div>

                                        <h5 class=\"text-uppercase mb-3\">Give code</h5>

                                        <div class=\"mb-5\">
                                            <div class=\"form-outline\">
                                                <input type=\"text\" id=\"form3Examplea2\" class=\"form-control form-control-lg\" />
                                                <label class=\"form-label\" for=\"form3Examplea2\">Enter your code</label>
                                            </div>
                                        </div>

                                        <hr class=\"my-4\">

                                        <div class=\"d-flex justify-content-between mb-5\">
                                            <h5 class=\"text-uppercase\">Total price</h5>
                                            <h5>{{ total }}</h5>
                                        </div>

                                        <a type=\"button\" class=\"btn btn-dark btn-block btn-lg\"
                                           data-mdb-ripple-color=\"dark\" href=\"{{ path('cart_register') }}\">Register</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}

{% block footer %}

{% endblock %}", "cart.html.twig", "/Users/aurelienruppe/PhpstormProjects/DevWeb-ING1/templates/cart.html.twig");
    }
}

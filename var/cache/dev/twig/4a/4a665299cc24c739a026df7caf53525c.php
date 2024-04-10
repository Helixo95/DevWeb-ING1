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

/* product/product.html.twig */
class __TwigTemplate_cd70b3edbb74e83549d8e16d270c108e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/product.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "All Perfumes - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"products\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">All Perfumes</li>
            </ol>
        </nav>
        <div class=\"row\">
            <div class=\"col-12 col-md-8\">
                <h1 class=\"page-title\">All Perfumes</h1>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"productsSearch input-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon1\">
                            <svg width=\"16\" height=\"16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path
                                        d=\"M10.86 12.479c-1.125.8-2.501 1.27-3.985 1.27A6.875 6.875 0 1 1 6.875 0a6.875 6.875 0 0 1 5.605 10.858l2.71 2.711.81.81L14.38 16l-.81-.81-2.71-2.711Zm-3.985-.777a4.827 4.827 0 1 0 0-9.654 4.827 4.827 0 0 0 0 9.654Z\"
                                        fill=\"#101010\"></path>
                            </svg>
                        </span>
                    </div>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search products...\" aria-label=\"Search\"
                           aria-describedby=\"basic-addon1\">
                </div>
            </div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!-- Filters à gauche -->
                    <div class=\"col text-left\">
                        <button class=\"btn btn-secondary filter-buttons\">Filters</button>
                    </div>

                    <!-- Catégories au centre avec espacement -->
                    <div class=\"col text-center filter-buttons\">
                        <button type=\"button\" class=\"btn btn-light active\">All</button>
                        <button type=\"button\" class=\"btn btn-light\">Men</button>
                        <button type=\"button\" class=\"btn btn-light\">Woman</button>
                        <button type=\"button\" class=\"btn btn-light\">Unisex</button>
                    </div>

                    <!-- Sort by à droite -->
                    <div class=\"col text-right\">
                        <button class=\"btn btn-secondary filter-buttons\">Sort by</button>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"container py-4 \">
            <div class=\"row\">
                <!-- Boucle sur vos produits -->
                <div class=\"col-md-4 col-lg-4 mb-4 ml-0\">
                    <a href=\"/product/nom-du-produit\" class=\"text-decoration-none\">
                        <div class=\"card h-100\">
                            <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product/img/sauvage.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Nom du produit\">
                            <div class=\"card-body d-flex flex-column\">
                                <!-- Envelopper le titre et les étoiles dans un conteneur de flex -->
                                <div class=\"d-flex align-items-center mb-2\">
                                    <h5 class=\"card-title text-dark flex-grow-1 mb-0\">Sauvage</h5>
                                    <!-- flex-grow-1 sur le titre pour pousser les étoiles vers la droite -->
                                    <div class=\"star-ratings d-flex align-items-center\">
                                        <!-- Répéter le SVG pour le nombre d'étoiles que vous voulez afficher -->
                                        <svg viewBox=\"0 0 51 48\" class=\"widget-svg\"
                                             style=\"width:20px;height:20px;transition:transform .2s ease-in-out\">
                                            <path class=\"star\" style=\"fill:#FFBE30;transition:fill .2s ease-in-out\"
                                                  d=\"m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z\"></path>
                                        </svg>
                                        <svg viewBox=\"0 0 51 48\" class=\"widget-svg\"
                                             style=\"width:20px;height:20px;transition:transform .2s ease-in-out\">
                                            <path class=\"star\" style=\"fill:#FFBE30;transition:fill .2s ease-in-out\"
                                                  d=\"m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z\"></path>
                                        </svg>
                                        <svg viewBox=\"0 0 51 48\" class=\"widget-svg\"
                                             style=\"width:20px;height:20px;transition:transform .2s ease-in-out\">
                                            <path class=\"star\" style=\"fill:#FFBE30;transition:fill .2s ease-in-out\"
                                                  d=\"m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z\"></path>
                                        </svg>
                                        <svg viewBox=\"0 0 51 48\" class=\"widget-svg\"
                                             style=\"width:20px;height:20px;transition:transform .2s ease-in-out\">
                                            <path class=\"star\" style=\"fill:#FFBE30;transition:fill .2s ease-in-out\"
                                                  d=\"m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z\"></path>
                                        </svg>
                                        <!-- Ajouter plus de SVG ici si nécessaire pour plus d'étoiles -->
                                    </div>
                                </div>

                                <div class=\"card-tags mb-2\">
                                    <span class=\"tag floral \">floral</span>
                                    <span class=\"tag woody \">woody</span>
                                </div>

                                <p class=\"card-text mt-auto\">
                                    <small class=\"text-muted\">Inspiré par Christian Dior</small>
                                </p>
                                <!-- mt-auto pousse le contenu vers le bas de la carte -->
                            </div>
                        </div>
                    </a>
                </div>



                <!-- Plus de produits ici -->

            </div>
        </div>


    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product/product.html.twig";
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
        return array (  146 => 61,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}All Perfumes - {{ parent() }}{% endblock %}

{% block body %}
    <div class=\"products\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">All Perfumes</li>
            </ol>
        </nav>
        <div class=\"row\">
            <div class=\"col-12 col-md-8\">
                <h1 class=\"page-title\">All Perfumes</h1>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"productsSearch input-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon1\">
                            <svg width=\"16\" height=\"16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path
                                        d=\"M10.86 12.479c-1.125.8-2.501 1.27-3.985 1.27A6.875 6.875 0 1 1 6.875 0a6.875 6.875 0 0 1 5.605 10.858l2.71 2.711.81.81L14.38 16l-.81-.81-2.71-2.711Zm-3.985-.777a4.827 4.827 0 1 0 0-9.654 4.827 4.827 0 0 0 0 9.654Z\"
                                        fill=\"#101010\"></path>
                            </svg>
                        </span>
                    </div>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search products...\" aria-label=\"Search\"
                           aria-describedby=\"basic-addon1\">
                </div>
            </div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!-- Filters à gauche -->
                    <div class=\"col text-left\">
                        <button class=\"btn btn-secondary filter-buttons\">Filters</button>
                    </div>

                    <!-- Catégories au centre avec espacement -->
                    <div class=\"col text-center filter-buttons\">
                        <button type=\"button\" class=\"btn btn-light active\">All</button>
                        <button type=\"button\" class=\"btn btn-light\">Men</button>
                        <button type=\"button\" class=\"btn btn-light\">Woman</button>
                        <button type=\"button\" class=\"btn btn-light\">Unisex</button>
                    </div>

                    <!-- Sort by à droite -->
                    <div class=\"col text-right\">
                        <button class=\"btn btn-secondary filter-buttons\">Sort by</button>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"container py-4 \">
            <div class=\"row\">
                <!-- Boucle sur vos produits -->
                <div class=\"col-md-4 col-lg-4 mb-4 ml-0\">
                    <a href=\"/product/nom-du-produit\" class=\"text-decoration-none\">
                        <div class=\"card h-100\">
                            <img src=\"{{ asset('product/img/sauvage.jpg') }}\" class=\"card-img-top\" alt=\"Nom du produit\">
                            <div class=\"card-body d-flex flex-column\">
                                <!-- Envelopper le titre et les étoiles dans un conteneur de flex -->
                                <div class=\"d-flex align-items-center mb-2\">
                                    <h5 class=\"card-title text-dark flex-grow-1 mb-0\">Sauvage</h5>
                                    <!-- flex-grow-1 sur le titre pour pousser les étoiles vers la droite -->
                                    <div class=\"star-ratings d-flex align-items-center\">
                                        <!-- Répéter le SVG pour le nombre d'étoiles que vous voulez afficher -->
                                        <svg viewBox=\"0 0 51 48\" class=\"widget-svg\"
                                             style=\"width:20px;height:20px;transition:transform .2s ease-in-out\">
                                            <path class=\"star\" style=\"fill:#FFBE30;transition:fill .2s ease-in-out\"
                                                  d=\"m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z\"></path>
                                        </svg>
                                        <svg viewBox=\"0 0 51 48\" class=\"widget-svg\"
                                             style=\"width:20px;height:20px;transition:transform .2s ease-in-out\">
                                            <path class=\"star\" style=\"fill:#FFBE30;transition:fill .2s ease-in-out\"
                                                  d=\"m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z\"></path>
                                        </svg>
                                        <svg viewBox=\"0 0 51 48\" class=\"widget-svg\"
                                             style=\"width:20px;height:20px;transition:transform .2s ease-in-out\">
                                            <path class=\"star\" style=\"fill:#FFBE30;transition:fill .2s ease-in-out\"
                                                  d=\"m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z\"></path>
                                        </svg>
                                        <svg viewBox=\"0 0 51 48\" class=\"widget-svg\"
                                             style=\"width:20px;height:20px;transition:transform .2s ease-in-out\">
                                            <path class=\"star\" style=\"fill:#FFBE30;transition:fill .2s ease-in-out\"
                                                  d=\"m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z\"></path>
                                        </svg>
                                        <!-- Ajouter plus de SVG ici si nécessaire pour plus d'étoiles -->
                                    </div>
                                </div>

                                <div class=\"card-tags mb-2\">
                                    <span class=\"tag floral \">floral</span>
                                    <span class=\"tag woody \">woody</span>
                                </div>

                                <p class=\"card-text mt-auto\">
                                    <small class=\"text-muted\">Inspiré par Christian Dior</small>
                                </p>
                                <!-- mt-auto pousse le contenu vers le bas de la carte -->
                            </div>
                        </div>
                    </a>
                </div>



                <!-- Plus de produits ici -->

            </div>
        </div>


    </div>
{% endblock %}", "product/product.html.twig", "H:\\Desktop\\DevWeb-ING1\\templates\\product\\product.html.twig");
    }
}

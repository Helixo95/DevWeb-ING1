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

/* profile.html.twig */
class __TwigTemplate_51fd780e0c72cfee7eff3da3953731ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Exotik - Profile</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #1a2a50;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgb(7, 7, 56), rgb(57, 68, 87));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgb(3, 17, 29), rgb(57, 68, 87));
        }

        /* Set image height to 100% */
        .product-img {
            height: 100%;
            object-fit: cover; /* Scale the image, while preserving its intrinsic aspect ratio (if any) */
        }

        /* Style for product name */
        .product-name {
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 0.5rem;
        }

        /* Style for product category */
        .product-category {
            font-size: 0.9rem;
            color: #6c757d; /* Gray color */
            text-align: center;
        }
        
        /* Style for smaller product card */
        .small-product-card {
            height: 100%;
        }
    </style>
</head>
<body>
    <section class=\"h-100 gradient-custom-2\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-lg-12 col-xl-10\">
                    <div class=\"card\">
                        <div class=\"rounded-top text-white d-flex flex-row\" style=\"background-color: #0c0d25; height:200px;\" >
                            <div class=\"ms-4 mt-5 d-flex flex-column\" style=\"width: 150px;\">
                                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/profil.png"), "html", null, true);
        echo "\"
                                    alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail mt-4 mb-2\"
                                    style=\"width: 150px; z-index: 1\">
                                    <a class=\"btn btn-outline-dark\" data-mdb-ripple-color=\"dark\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modif_profile");
        echo "\"
                                    style=\"z-index: 1;\">
                                     Modifier le profil
                                 </a>                                 
                            </div>
                            <div class=\"ms-3\" style=\"margin-top: 130px;\">
                                <h5>MAAOUIA Ahmed</h5>
                                <p>Cergy</p>
                            </div>
                        </div>
                        <div class=\"p-4 text-black\" style=\"background-color: #e9edf0d1;\">
                            <div class=\"d-flex justify-content-end text-center py-1\">
                                <div>
                                    <p class=\"mb-1 h5\">10</p>
                                    <p class=\"small text-muted mb-0\">Produits achetés</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body p-4 text-black\">
                            <div class=\"mb-5\">
                                <p class=\"lead fw-normal mb-1\">Mes coordonnées</p>
                                <div class=\"p-4\" style=\"background-color: #e9edf0d1;\">
                                    <p class=\"font-italic mb-1\">Numéro de telephone : 123-456-7890</p>
                                    <p class=\"font-italic mb-1\">Adresse : 1234 Street Name, City, Country</p>
                                </div>
                            </div>
                            <div class=\"mb-5\">
                                <p class=\"lead fw-normal mb-1\">À propos</p>
                                <div class=\"p-4\" style=\"background-color: #e9edf0d1;\">
                                    <p class=\"font-italic mb-1\">Développeur Web</p>
                                    <p class=\"font-italic mb-1\">Vit à New York</p>
                                    <p class=\"font-italic mb-0\">Photographe</p>
                                </div>
                            </div>
                            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                <p class=\"lead fw-normal mb-0\">Produits récents</p>
                                <p class=\"mb-0\"><a href=\"#!\" class=\"text-muted\">Voir tout</a></p>
                            </div>
                            <div class=\"row g-2\">
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"card small-product-card\">
                                        <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/product1.jpg"), "html", null, true);
        echo "\"
                                            alt=\"Product 1\" class=\"card-img-top product-img rounded-3\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title text-center product-name\">Nom du Produit 1</h5>
                                            <p class=\"card-text text-center product-category\">Catégorie: Catégorie 1</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"card small-product-card\">
                                        <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/product2.jpg"), "html", null, true);
        echo "\"
                                            alt=\"Product 2\" class=\"card-img-top product-img rounded-3\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title text-center product-name\">Nom du Produit 2</h5>
                                            <p class=\"card-text text-center product-category\">Catégorie: Catégorie 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row g-2\">
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"card small-product-card\">
                                        <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/product3.jpg"), "html", null, true);
        echo "\"
                                            alt=\"Product 3\" class=\"card-img-top product-img rounded-3\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title text-center product-name\">Nom du Produit 3</h5>
                                            <p class=\"card-text text-center product-category\">Catégorie: Catégorie 3</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"card small-product-card\">
                                        <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/product4.jpg"), "html", null, true);
        echo "\"
                                            alt=\"Product 4\" class=\"card-img-top product-img rounded-3\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title text-center product-name\">Nom du Produit 4</h5>
                                            <p class=\"card-text text-center product-category\">Catégorie: Catégorie 4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile.html.twig";
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
        return array (  240 => 152,  220 => 135,  207 => 125,  192 => 113,  179 => 103,  135 => 62,  129 => 59,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Exotik - Profile</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css')}}\" />
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #1a2a50;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgb(7, 7, 56), rgb(57, 68, 87));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgb(3, 17, 29), rgb(57, 68, 87));
        }

        /* Set image height to 100% */
        .product-img {
            height: 100%;
            object-fit: cover; /* Scale the image, while preserving its intrinsic aspect ratio (if any) */
        }

        /* Style for product name */
        .product-name {
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 0.5rem;
        }

        /* Style for product category */
        .product-category {
            font-size: 0.9rem;
            color: #6c757d; /* Gray color */
            text-align: center;
        }
        
        /* Style for smaller product card */
        .small-product-card {
            height: 100%;
        }
    </style>
</head>
<body>
    <section class=\"h-100 gradient-custom-2\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-lg-12 col-xl-10\">
                    <div class=\"card\">
                        <div class=\"rounded-top text-white d-flex flex-row\" style=\"background-color: #0c0d25; height:200px;\" >
                            <div class=\"ms-4 mt-5 d-flex flex-column\" style=\"width: 150px;\">
                                <img src=\"{{asset('login/img/profil.png')}}\"
                                    alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail mt-4 mb-2\"
                                    style=\"width: 150px; z-index: 1\">
                                    <a class=\"btn btn-outline-dark\" data-mdb-ripple-color=\"dark\" href=\"{{ path('app_modif_profile') }}\"
                                    style=\"z-index: 1;\">
                                     Modifier le profil
                                 </a>                                 
                            </div>
                            <div class=\"ms-3\" style=\"margin-top: 130px;\">
                                <h5>MAAOUIA Ahmed</h5>
                                <p>Cergy</p>
                            </div>
                        </div>
                        <div class=\"p-4 text-black\" style=\"background-color: #e9edf0d1;\">
                            <div class=\"d-flex justify-content-end text-center py-1\">
                                <div>
                                    <p class=\"mb-1 h5\">10</p>
                                    <p class=\"small text-muted mb-0\">Produits achetés</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body p-4 text-black\">
                            <div class=\"mb-5\">
                                <p class=\"lead fw-normal mb-1\">Mes coordonnées</p>
                                <div class=\"p-4\" style=\"background-color: #e9edf0d1;\">
                                    <p class=\"font-italic mb-1\">Numéro de telephone : 123-456-7890</p>
                                    <p class=\"font-italic mb-1\">Adresse : 1234 Street Name, City, Country</p>
                                </div>
                            </div>
                            <div class=\"mb-5\">
                                <p class=\"lead fw-normal mb-1\">À propos</p>
                                <div class=\"p-4\" style=\"background-color: #e9edf0d1;\">
                                    <p class=\"font-italic mb-1\">Développeur Web</p>
                                    <p class=\"font-italic mb-1\">Vit à New York</p>
                                    <p class=\"font-italic mb-0\">Photographe</p>
                                </div>
                            </div>
                            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                <p class=\"lead fw-normal mb-0\">Produits récents</p>
                                <p class=\"mb-0\"><a href=\"#!\" class=\"text-muted\">Voir tout</a></p>
                            </div>
                            <div class=\"row g-2\">
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"card small-product-card\">
                                        <img src=\"{{asset('login/img/product1.jpg')}}\"
                                            alt=\"Product 1\" class=\"card-img-top product-img rounded-3\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title text-center product-name\">Nom du Produit 1</h5>
                                            <p class=\"card-text text-center product-category\">Catégorie: Catégorie 1</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"card small-product-card\">
                                        <img src=\"{{asset('login/img/product2.jpg')}}\"
                                            alt=\"Product 2\" class=\"card-img-top product-img rounded-3\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title text-center product-name\">Nom du Produit 2</h5>
                                            <p class=\"card-text text-center product-category\">Catégorie: Catégorie 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row g-2\">
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"card small-product-card\">
                                        <img src=\"{{asset('login/img/product3.jpg')}}\"
                                            alt=\"Product 3\" class=\"card-img-top product-img rounded-3\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title text-center product-name\">Nom du Produit 3</h5>
                                            <p class=\"card-text text-center product-category\">Catégorie: Catégorie 3</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"card small-product-card\">
                                        <img src=\"{{asset('login/img/product4.jpg')}}\"
                                            alt=\"Product 4\" class=\"card-img-top product-img rounded-3\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title text-center product-name\">Nom du Produit 4</h5>
                                            <p class=\"card-text text-center product-category\">Catégorie: Catégorie 4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script type=\"text/javascript\" src=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}\"></script>
</body>
</html>
{% endblock %}", "profile.html.twig", "C:\\Web\\tamere\\DevWeb-ING1\\templates\\profile.html.twig");
    }
}

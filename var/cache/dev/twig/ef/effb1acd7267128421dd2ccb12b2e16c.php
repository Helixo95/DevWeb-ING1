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
class __TwigTemplate_47863890c670730289bef74494ceffce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Exotik - Profile</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
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
<br>
<br>
<br>
    <section class=\"h-100 gradient-custom-2\">
        <div class=\"container py-2 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-lg-12 col-xl-10\">
                    <div class=\"card\">
                        <div class=\"rounded-top text-white d-flex flex-row\" style=\"background-color: #0c0d25; height:200px;\" >
                            <div class=\"ms-4 mt-5 d-flex flex-column\" style=\"width: 150px;\">
                                ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "picture", [], "any", false, false, false, 59)) {
            // line 60
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img_profil/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "picture", [], "any", false, false, false, 60))), "html", null, true);
            echo "\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                ";
        } else {
            // line 63
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/profil.png"), "html", null, true);
            echo "\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                ";
        }
        // line 66
        echo "                                <br>
                                <a class=\"btn btn-outline-dark btn-sm\" data-mdb-ripple-color=\"dark\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit");
        echo "\" style=\"z-index: 1; margin-top=20px\">
                                    <i class=\"fas fa-user-edit me-1\"></i> Modifier le profil
                                </a>
                                                             
                            </div>
                            <div class=\"ms-3\" style=\"margin-top: 130px;\">
                                <h5>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "nom", [], "any", false, false, false, 73), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "prenom", [], "any", false, false, false, 73), "html", null, true);
        echo "</h5>
                                <p>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "address", [], "any", false, false, false, 74), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"p-4 text-black\" style=\"background-color: #e9edf0d1; height: 100px;\">
                            <div class=\"d-flex justify-content-end text-center py-1\">
                                <div>
                                    <p class=\"mb-1 h5\">10</p>
                                    <p class=\"small text-muted mb-0\">Produits achetés</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body p-4 text-black\">
                            <div class=\"mb-2\">
                                <p class=\"lead fw-normal mb-1\">Mes coordonnées</p>
                                <div class=\"p-4\" style=\"background-color: #e9edf0d1;\">
                                    <p class=\"font-italic mb-1\">Numéro de telephone : ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "phoneNumber", [], "any", false, false, false, 89), "html", null, true);
        echo "</p>
                                    <p class=\"font-italic mb-1\">Adresse : ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "address", [], "any", false, false, false, 90), "html", null, true);
        echo "</p>
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
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

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
        return array (  200 => 103,  184 => 90,  180 => 89,  162 => 74,  156 => 73,  147 => 67,  144 => 66,  137 => 63,  130 => 60,  128 => 59,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
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
<br>
<br>
<br>
    <section class=\"h-100 gradient-custom-2\">
        <div class=\"container py-2 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-lg-12 col-xl-10\">
                    <div class=\"card\">
                        <div class=\"rounded-top text-white d-flex flex-row\" style=\"background-color: #0c0d25; height:200px;\" >
                            <div class=\"ms-4 mt-5 d-flex flex-column\" style=\"width: 150px;\">
                                {% if app.user.picture %}
                                    <img src=\"{{ asset('img_profil/'~app.user.picture) }}\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                {% else %}
                                    <img src=\"{{ asset('login/img/profil.png') }}\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                {% endif %}
                                <br>
                                <a class=\"btn btn-outline-dark btn-sm\" data-mdb-ripple-color=\"dark\" href=\"{{ path('profile_edit') }}\" style=\"z-index: 1; margin-top=20px\">
                                    <i class=\"fas fa-user-edit me-1\"></i> Modifier le profil
                                </a>
                                                             
                            </div>
                            <div class=\"ms-3\" style=\"margin-top: 130px;\">
                                <h5>{{app.user.nom}} {{app.user.prenom}}</h5>
                                <p>{{app.user.address}}</p>
                            </div>
                        </div>
                        <div class=\"p-4 text-black\" style=\"background-color: #e9edf0d1; height: 100px;\">
                            <div class=\"d-flex justify-content-end text-center py-1\">
                                <div>
                                    <p class=\"mb-1 h5\">10</p>
                                    <p class=\"small text-muted mb-0\">Produits achetés</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body p-4 text-black\">
                            <div class=\"mb-2\">
                                <p class=\"lead fw-normal mb-1\">Mes coordonnées</p>
                                <div class=\"p-4\" style=\"background-color: #e9edf0d1;\">
                                    <p class=\"font-italic mb-1\">Numéro de telephone : {{app.user.phoneNumber}}</p>
                                    <p class=\"font-italic mb-1\">Adresse : {{app.user.address}}</p>
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
<<<<<<< HEAD

{% endblock %}
", "profile.html.twig", "C:\\laragon\\www\\DevWeb-ING1\\templates\\profile.html.twig");
=======
</body>
</html>
{% endblock %}", "profile.html.twig", "H:\\Desktop\\Website\\DevWeb-ING1\\templates\\profile.html.twig");
>>>>>>> cc8f0c6d68d4b871fc6d9a4b6768ecbe7ed3a645
    }
}

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

/* admin/create_product.hmtl.twig */
class __TwigTemplate_18a39a04a02c8e2306e67e8de13982ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/create_product.hmtl.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/create_product.hmtl.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <title>Administrateur - Tableau de bord</title>
    <link rel=\"icon\" href=\"#\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link rel=\"stylesheet\" href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/dashboard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/card.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/table.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/product-form.css"), "html", null, true);
        echo "\">
</head>

<body>
<!-- sidebar -->
<div id=\"l-sidebar\" class=\"sidebar-active no-transition\">
    <!-- header -->
    <div id=\"sidebar-header\" class=\"d-flex align-items-center\">
        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_category_brand");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/logo.png"), "html", null, true);
        echo "\" style=\"max-height: 50px;\"  alt=\"\"></a>
    </div>

    <!-- navigation links -->
    <ul class=\"list-unstyled d-flex flex-column justify-content-between\">
        <!-- top -->
        <div class=\"top\">
            <li class=\"nav-link link-active\">
                <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-gauge text-center\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-users text-center\"></i>
                    <span>Comptes</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-boxes text-center\"></i>
                    <span>Produits</span>
                </a>
            </li>
        </div>

        <!-- bottom -->
        <div class=\"bottom\">
            <li class=\"nav-link\">
                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-right-from-bracket text-center\"></i>
                    <span>Déconnexion</span>
                </a>
            </li>
        </div>
    </ul>
</div>

<!-- top navbar -->
<nav id=\"top-navbar\" class=\"body-padding no-transition\">
    <div id=\"top-navbar-content\" class=\"d-flex flex-row align-items-center justify-content-between\">
        <i id=\"toggler\" class=\"fa-solid fa-bars fa-xl clickable\"></i>
        <div class=\"account d-flex flex-row align-items-center\">
            <span>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "nom", [], "any", false, false, false, 69), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "prenom", [], "any", false, false, false, 69), "html", null, true);
        echo "</span>
            <i class=\"fa-solid fa-user fa-xl clickable\"></i>
        </div>
    </div>
</nav>

<!-- content -->
<div id=\"wrapper\" class=\"body-padding no-transition\">
    <div id=\"content\">
        <h1>";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "</h1>

        <!-- form -->
        <form action=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "\" id=\"product-form\" class=\"mt-3\" novalidate>

            <!-- section 1 -->
            <h2>Descriptif du produit</h2>

            <div class=\"form-section\">

                <!-- product_name -->
                <div class=\"form-group\">
                    <label for=\"product_name\" class=\"control-label\">Nom</label>
                    <input type=\"text\" name=\"name\" class=\"form-control\" id=\"product_name\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer le nom du produit.</div>
                </div>

                <!-- product_description -->
                <div class=\"form-group mt-4\">
                    <label for=\"product_description\" class=\"control-label\">Description</label>
                    <textarea id=\"product_description\" name=\"description\" class=\"form-control\" rows=\"5\" required></textarea>
                    <div class=\"invalid-feedback\">Veuillez entrer la description du produit.</div>
                </div>

                <!-- primary_image_url -->
                <div class=\"form-group mt-4\">
                    <label for=\"primary_image_url\" class=\"control-label\">URL de l'image principale</label>
                    <input type=\"text\" name=\"primaryImageUrl\" class=\"form-control\" id=\"primary_image_url\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer l'URL de l'image principale du produit.</div>
                </div>

                <!-- secondary_image_url -->
                <div class=\"form-group mt-4\">
                    <label for=\"secondary_image_url\" class=\"control-label\">URL de l'image secondaire</label>
                    <input type=\"text\" name=\"secondaryImageUrl\" class=\"form-control\" id=\"secondary_image_url\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer l'URL de l'image secondaire du produit.</div>
                </div>

                <!-- product_category -->
                <div class=\"form-group form-small mt-4\">
                    <label for=\"product_category\" class=\"control-label\">Catégorie</label>
                    <input type=\"text\" name=\"category\" class=\"form-control\" id=\"product_category\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer la catégorie du produit.</div>
                </div>

                <!-- product_brand -->
                <div class=\"form-group form-small mt-4\">
                    <label for=\"product_brand\" class=\"control-label\">Marque</label>
                    <input type=\"text\" name=\"brand\" class=\"form-control\" id=\"product_brand\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer la marque du produit.</div>
                </div>

                <!-- product_quantity -->
                <div class=\"form-group form-small mt-4\">
                    <label for=\"product_quantity\" class=\"control-label\">Quantité</label>
                    <input type=\"number\" name=\"quantity\" min=\"0\" class=\"form-control\" id=\"product_quantity\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer une quantité valide.</div>
                </div>

                <!-- product_price -->
                <div class=\"form-small mt-4\">
                    <label for=\"product_price\" class=\"control-label\">Prix</label>
                    <div id=\"product_price\" class=\"d-flex flex-row align-items-center\">
                        <input type=\"number\" name=\"oldPrice\" min=\"0\" step=\"0.01\" class=\"form-control\" required>
                        <span class=\"ms-2 me-2\"> à </span>
                        <input type=\"number\" name=\"currentPrice\" min=\"0\" step=\"0.01\" class=\"form-control\" required>
                    </div>
                </div>

                <!-- product_rating -->
                <div class=\"form-group form-small mt-4\">
                    <label for=\"product_rating\" class=\"control-label\">Évaluation</label>
                    <input type=\"number\" name=\"rating\" min=\"0\" max=\"5\" step=\"1\" class=\"form-control\" id=\"product_rating\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer une évaluation valide (0-5).</div>
                </div>
            </div>

            <!-- section 2 -->
            <h2>Paramétrage du produit</h2>

            <div class=\"form-section\">

                <!-- product_status -->
                <div class=\"form-group form-small\">
                    <label for=\"product-status\" class=\"control-label me-2\">Statut du produit</label>
                    <select name=\"status\" id=\"product-status\">
                        <option value=\"available\">Disponible</option>
                        <option value=\"out_of_stock\">Rupture de stock</option>
                        <option value=\"discontinued\">Arrêté</option>
                    </select>
                </div>
            </div>

            <h2>Validation</h2>

            <div class=\"form-section\">
                <div class=\"form-group d-flex flex-row align-items-center\">
                    <input type=\"submit\" name=\"submit\" value=\"Sauvegarder\" id=\"form-submit\">
                    <span class=\"error submit-error d-none\">Une erreur est survenue.</span>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- toasts -->
<div id=\"toast-container\" class=\"toast-container position-fixed\"></div>

<!-- JavaScript -->
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/Javascript/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/Javascript/form-sender.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/create_product.hmtl.twig";
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
        return array (  281 => 189,  277 => 188,  165 => 81,  159 => 78,  145 => 69,  128 => 55,  115 => 45,  106 => 39,  97 => 33,  84 => 25,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <title>Administrateur - Tableau de bord</title>
    <link rel=\"icon\" href=\"#\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link rel=\"stylesheet\" href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/dashboard.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/card.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/table.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/product-form.css') }}\">
</head>

<body>
<!-- sidebar -->
<div id=\"l-sidebar\" class=\"sidebar-active no-transition\">
    <!-- header -->
    <div id=\"sidebar-header\" class=\"d-flex align-items-center\">
        <a href=\"{{ path('app_product_category_brand') }}\"><img src=\"{{ asset('base/logo.png') }}\" style=\"max-height: 50px;\"  alt=\"\"></a>
    </div>

    <!-- navigation links -->
    <ul class=\"list-unstyled d-flex flex-column justify-content-between\">
        <!-- top -->
        <div class=\"top\">
            <li class=\"nav-link link-active\">
                <a href=\"{{ path('admin_dashboard') }}\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-gauge text-center\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"{{ path('app_admin_users') }}\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-users text-center\"></i>
                    <span>Comptes</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"{{ path('admin_dashboard') }}\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-boxes text-center\"></i>
                    <span>Produits</span>
                </a>
            </li>
        </div>

        <!-- bottom -->
        <div class=\"bottom\">
            <li class=\"nav-link\">
                <a href=\"{{ path('app_logout') }}\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-right-from-bracket text-center\"></i>
                    <span>Déconnexion</span>
                </a>
            </li>
        </div>
    </ul>
</div>

<!-- top navbar -->
<nav id=\"top-navbar\" class=\"body-padding no-transition\">
    <div id=\"top-navbar-content\" class=\"d-flex flex-row align-items-center justify-content-between\">
        <i id=\"toggler\" class=\"fa-solid fa-bars fa-xl clickable\"></i>
        <div class=\"account d-flex flex-row align-items-center\">
            <span>{{ app.user.nom }} {{ app.user.prenom }}</span>
            <i class=\"fa-solid fa-user fa-xl clickable\"></i>
        </div>
    </div>
</nav>

<!-- content -->
<div id=\"wrapper\" class=\"body-padding no-transition\">
    <div id=\"content\">
        <h1>{{ title }}</h1>

        <!-- form -->
        <form action=\"{{ action }}\" method=\"{{ method }}\" id=\"product-form\" class=\"mt-3\" novalidate>

            <!-- section 1 -->
            <h2>Descriptif du produit</h2>

            <div class=\"form-section\">

                <!-- product_name -->
                <div class=\"form-group\">
                    <label for=\"product_name\" class=\"control-label\">Nom</label>
                    <input type=\"text\" name=\"name\" class=\"form-control\" id=\"product_name\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer le nom du produit.</div>
                </div>

                <!-- product_description -->
                <div class=\"form-group mt-4\">
                    <label for=\"product_description\" class=\"control-label\">Description</label>
                    <textarea id=\"product_description\" name=\"description\" class=\"form-control\" rows=\"5\" required></textarea>
                    <div class=\"invalid-feedback\">Veuillez entrer la description du produit.</div>
                </div>

                <!-- primary_image_url -->
                <div class=\"form-group mt-4\">
                    <label for=\"primary_image_url\" class=\"control-label\">URL de l'image principale</label>
                    <input type=\"text\" name=\"primaryImageUrl\" class=\"form-control\" id=\"primary_image_url\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer l'URL de l'image principale du produit.</div>
                </div>

                <!-- secondary_image_url -->
                <div class=\"form-group mt-4\">
                    <label for=\"secondary_image_url\" class=\"control-label\">URL de l'image secondaire</label>
                    <input type=\"text\" name=\"secondaryImageUrl\" class=\"form-control\" id=\"secondary_image_url\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer l'URL de l'image secondaire du produit.</div>
                </div>

                <!-- product_category -->
                <div class=\"form-group form-small mt-4\">
                    <label for=\"product_category\" class=\"control-label\">Catégorie</label>
                    <input type=\"text\" name=\"category\" class=\"form-control\" id=\"product_category\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer la catégorie du produit.</div>
                </div>

                <!-- product_brand -->
                <div class=\"form-group form-small mt-4\">
                    <label for=\"product_brand\" class=\"control-label\">Marque</label>
                    <input type=\"text\" name=\"brand\" class=\"form-control\" id=\"product_brand\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer la marque du produit.</div>
                </div>

                <!-- product_quantity -->
                <div class=\"form-group form-small mt-4\">
                    <label for=\"product_quantity\" class=\"control-label\">Quantité</label>
                    <input type=\"number\" name=\"quantity\" min=\"0\" class=\"form-control\" id=\"product_quantity\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer une quantité valide.</div>
                </div>

                <!-- product_price -->
                <div class=\"form-small mt-4\">
                    <label for=\"product_price\" class=\"control-label\">Prix</label>
                    <div id=\"product_price\" class=\"d-flex flex-row align-items-center\">
                        <input type=\"number\" name=\"oldPrice\" min=\"0\" step=\"0.01\" class=\"form-control\" required>
                        <span class=\"ms-2 me-2\"> à </span>
                        <input type=\"number\" name=\"currentPrice\" min=\"0\" step=\"0.01\" class=\"form-control\" required>
                    </div>
                </div>

                <!-- product_rating -->
                <div class=\"form-group form-small mt-4\">
                    <label for=\"product_rating\" class=\"control-label\">Évaluation</label>
                    <input type=\"number\" name=\"rating\" min=\"0\" max=\"5\" step=\"1\" class=\"form-control\" id=\"product_rating\" required>
                    <div class=\"invalid-feedback\">Veuillez entrer une évaluation valide (0-5).</div>
                </div>
            </div>

            <!-- section 2 -->
            <h2>Paramétrage du produit</h2>

            <div class=\"form-section\">

                <!-- product_status -->
                <div class=\"form-group form-small\">
                    <label for=\"product-status\" class=\"control-label me-2\">Statut du produit</label>
                    <select name=\"status\" id=\"product-status\">
                        <option value=\"available\">Disponible</option>
                        <option value=\"out_of_stock\">Rupture de stock</option>
                        <option value=\"discontinued\">Arrêté</option>
                    </select>
                </div>
            </div>

            <h2>Validation</h2>

            <div class=\"form-section\">
                <div class=\"form-group d-flex flex-row align-items-center\">
                    <input type=\"submit\" name=\"submit\" value=\"Sauvegarder\" id=\"form-submit\">
                    <span class=\"error submit-error d-none\">Une erreur est survenue.</span>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- toasts -->
<div id=\"toast-container\" class=\"toast-container position-fixed\"></div>

<!-- JavaScript -->
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js\"></script>
<script src=\"{{ asset('admin/Javascript/dashboard.js') }}\"></script>
<script src=\"{{ asset('admin/Javascript/form-sender.js') }}\"></script>
</body>
</html>
", "admin/create_product.hmtl.twig", "C:\\laragon\\www\\DevWeb-ING1\\templates\\admin\\create_product.hmtl.twig");
    }
}

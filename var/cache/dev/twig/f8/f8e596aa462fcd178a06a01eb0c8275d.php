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

/* admin/products.html.twig */
class __TwigTemplate_b3c0c30dbd8b123206926f54424cf4fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/products.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/products.css"), "html", null, true);
        echo "\">

</head>

<body>
<!-- sidebar -->
<div id=\"l-sidebar\" class=\"sidebar-active no-transition\">
    <!-- header -->
    <div id=\"sidebar-header\" class=\"d-flex align-items-center\">
        <a href=\"";
        // line 26
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
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-gauge text-center\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-users text-center\"></i>
                    <span>Comptes</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_products");
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
        // line 56
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
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "prenom", [], "any", false, false, false, 70), "html", null, true);
        echo "</span>
            <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\"><i class=\"fa-solid fa-user fa-xl clickable\" style=\"color: #333;\"></i></a>
        </div>
    </div>
</nav>
";
        // line 76
        echo "<div id=\"wrapper\" class=\"body-padding no-transition\">
    <div id=\"content\">
        <h1>Tableau de bord</h1>

        ";
        // line 81
        echo "
        ";
        // line 83
        echo "        <div id=\"products-table\" class=\"table-overview\">

            ";
        // line 86
        echo "            <div class=\"table-header d-flex flew-row justify-content-between align-items-center\">
                <h2 class=\"table-title\">Produits</h2>
                <div>
                    <button><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_create");
        echo "\" class=\"text-decoration-none\">Créer</a></button>
                </div>
            </div>

            <div class=\"overview-table\">
                ";
        // line 95
        echo "                <table class=\"table\">
                    <thead>
                    <tr>
                        <td>Numéro</td>
                        <td>Nom</td>
                        <td>Date de création</td>
                        <td >Statut</td>
                        <td >Détails</td>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 106, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 107
            echo "                        <tr scope=\"row\">
                            <td>
                                <span class=\"fw-bold\">Produit n°";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 109), "html", null, true);
            echo "</span>
                            </td>
                            <td>
                                <span class=\"fw-bold\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112), "html", null, true);
            echo "</span>
                            </td>
                            <td>
                                <span>";
            // line 115
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "creationDate", [], "any", false, false, false, 115), "d/m/Y"), "html", null, true);
            echo "</span>
                            </td>
                            <td class=\"cell-status\">
                                <span class=\"status\" data-status=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 118), "html", null, true);
            echo "\">
                                    ";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 119), "html", null, true);
            echo "
                                </span>
                            </td>
                            <td class=\"cell-edit\">
                                <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 123)]), "html", null, true);
            echo "\">
                                    <i class=\"fa-solid fa-pen-to-square\"></i>
                                </a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 129
            echo "                        ";
            // line 130
            echo "                        <tr><td colspan=\"10\" class=\"text-center\">Aucun produit trouvé.</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>


<!-- JavaScript -->
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/Javascript/dashboard.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/products.html.twig";
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
        return array (  270 => 144,  256 => 132,  249 => 130,  247 => 129,  236 => 123,  229 => 119,  225 => 118,  219 => 115,  213 => 112,  207 => 109,  203 => 107,  198 => 106,  185 => 95,  177 => 89,  172 => 86,  168 => 83,  165 => 81,  159 => 76,  152 => 71,  146 => 70,  129 => 56,  116 => 46,  107 => 40,  98 => 34,  85 => 26,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  43 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/products.css') }}\">

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
                <a href=\"{{ path('app_admin_products') }}\" class=\"text-decoration-none d-block\">
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
            <a href=\"{{ path('app_profile') }}\"><i class=\"fa-solid fa-user fa-xl clickable\" style=\"color: #333;\"></i></a>
        </div>
    </div>
</nav>
{# content #}
<div id=\"wrapper\" class=\"body-padding no-transition\">
    <div id=\"content\">
        <h1>Tableau de bord</h1>

        {# tables #}

        {# products table #}
        <div id=\"products-table\" class=\"table-overview\">

            {# table header #}
            <div class=\"table-header d-flex flew-row justify-content-between align-items-center\">
                <h2 class=\"table-title\">Produits</h2>
                <div>
                    <button><a href=\"{{ path('app_admin_product_create') }}\" class=\"text-decoration-none\">Créer</a></button>
                </div>
            </div>

            <div class=\"overview-table\">
                {# table #}
                <table class=\"table\">
                    <thead>
                    <tr>
                        <td>Numéro</td>
                        <td>Nom</td>
                        <td>Date de création</td>
                        <td >Statut</td>
                        <td >Détails</td>
                    </tr>
                    </thead>
                    <tbody>
                    {% for product in products %}
                        <tr scope=\"row\">
                            <td>
                                <span class=\"fw-bold\">Produit n°{{ product.id_prod }}</span>
                            </td>
                            <td>
                                <span class=\"fw-bold\">{{ product.name }}</span>
                            </td>
                            <td>
                                <span>{{ product.creationDate|date('d/m/Y') }}</span>
                            </td>
                            <td class=\"cell-status\">
                                <span class=\"status\" data-status=\"{{ product.status }}\">
                                    {{ product.status }}
                                </span>
                            </td>
                            <td class=\"cell-edit\">
                                <a href=\"{{ path('app_admin_product', { id: product.id_prod }) }}\">
                                    <i class=\"fa-solid fa-pen-to-square\"></i>
                                </a>
                            </td>
                        </tr>
                    {% else %}
                        {# case in which no data is found #}
                        <tr><td colspan=\"10\" class=\"text-center\">Aucun produit trouvé.</td></tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>


<!-- JavaScript -->
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js\"></script>
<script src=\"{{asset('/admin/Javascript/dashboard.js') }}\"></script>
</body>

</html>", "admin/products.html.twig", "H:\\Desktop\\Website\\DevWeb-ING1\\templates\\admin\\products.html.twig");
    }
}

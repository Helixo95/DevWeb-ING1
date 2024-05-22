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

/* admin/dashboard.html.twig */
class __TwigTemplate_88f8f0f3a8313c503d75b5033c0fade4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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


</head>

<body>

";
        // line 23
        if (twig_in_filter("admin", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "roles", [], "any", false, false, false, 23))) {
            // line 24
            echo "<!-- sidebar -->
<div id=\"l-sidebar\" class=\"sidebar-active no-transition\">
    <!-- header -->
    <div id=\"sidebar-header\" class=\"d-flex align-items-center\">
        <a href=\"";
            // line 28
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
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-gauge text-center\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-users text-center\"></i>
                    <span>Comptes</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
            // line 49
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
            // line 59
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
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "nom", [], "any", false, false, false, 73), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "prenom", [], "any", false, false, false, 73), "html", null, true);
            echo "</span>
            <i class=\"fa-solid fa-user fa-xl clickable\"></i>
        </div>
    </div>
</nav>

<!-- content -->
<div id=\"wrapper\" class=\"body-padding no-transition\">
    <div id=\"content\">
        <h1>Tableau de bord</h1>

        <!-- cards -->
        <div id=\"info-cards\" class=\"d-flex flex-row flex-wrap\">
            <!-- card -->
            <div class=\"card d-flex flex-row align-items-center\">
                <div class=\"card-icon\">
                    <i class=\"fa-solid fa-users\"></i>
                </div>
                <div class=\"card-value d-flex flex-column\">
                    <span class=\"card-value-nbr\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 92, $this->source); })()), "users", [], "any", false, false, false, 92), "html", null, true);
            echo "</span>
                    <span class=\"card-value-text\">Utilisateurs inscrits</span>
                </div>
            </div>

            <!-- card -->
            <div class=\"card d-flex flex-row align-items-center\">
                <div class=\"card-icon\">
                    <i class=\"fa-solid fa-boxes\"></i>
                </div>
                <div class=\"card-value d-flex flex-column\">
                    <span class=\"card-value-nbr\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 103, $this->source); })()), "products", [], "any", false, false, false, 103), "html", null, true);
            echo "</span>
                    <span class=\"card-value-text\">Produits</span>
                </div>
            </div>
        </div>

        <!-- tables -->
        <!-- users table -->
        <div id=\"users-table\" class=\"table-overview\">
            <!-- table header -->
            <div class=\"table-header d-flex flew-row justify-content-between align-items-center\">
                <h2 class=\"table-title\">Derniers utilisateurs</h2>
                <button><a href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            echo "\" class=\"text-decoration-none\">Voir plus</a></button>
            </div>

            <div class=\"overview-table\">
                <!-- table -->
                <table class=\"table\">
                    <thead>
                    <tr>
                        <td>Nom</td>
                        <td>Contact</td>
                        <td>Statut</td>
                        <td>Role</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 131, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 132
                echo "                        <tr scope=\"row\">
                            <td class=\"cell-name d-flex flex-row align-items-center\">
                                <div><i class=\"fa-solid fa-user\"></i></div>
                                <div class=\"info d-flex flex-column\">
                                    <span>";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 136), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 136), "html", null, true);
                echo "</span>

                                </div>
                            </td>
                            <td class=\"cell-phone\">
                                <div class=\"d-flex flex-column\">
                                    <span>";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phoneNumber", [], "any", false, false, false, 142), "html", null, true);
                echo "</span>
                                    <span>";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 143), "html", null, true);
                echo "</span>
                                </div>
                            </td>
                            <td class=\"cell-status\">
                                        <span class=\"status\" data-status=\"";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 147), "html", null, true);
                echo "\">
                                            ";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 148), "html", null, true);
                echo "
                                        </span>
                            </td>
                            <td class=\"cell-role\">
                                <span>";
                // line 152
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 152), ", "), "html", null, true);
                echo "</span>
                            </td>
                            <td class=\"cell-edit\">
                                <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 155)]), "html", null, true);
                echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                            </td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 159
                echo "                        <tr><td colspan=\"10\" class=\"text-center\">Aucun utilisateur trouvé.</td></tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                    </tbody>
                </table>
            </div>
        </div>

        <!-- products table -->
        <div id=\"products-table\" class=\"table-overview\">
            <!-- table header -->
            <div class=\"table-header d-flex flew-row justify-content-between align-items-center\">
                <h2 class=\"table-title\">Derniers produits</h2>
                <button><a href=\"";
            // line 170
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_products");
            echo "\" class=\"text-decoration-none\">Voir plus</a></button>
            </div>

            <div class=\"overview-table\">
                <!-- table -->
                <table class=\"table\">
                    <thead>
                    <tr>
                        <td>Nom</td>
                        <td>Prix Actuel</td>
                        <td>Quantité</td>
                        <td>Catégorie</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 187, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 188
                echo "                        <tr scope=\"row\">
                            <td class=\"cell-name d-flex flex-row align-items-center\">
                                <div><i class=\"fa-solid fa-box\"></i></div>
                                <div class=\"info d-flex flex-column\">
                                    <span>";
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 192), "html", null, true);
                echo "</span>
                                </div>
                            </td>
                            <td class=\"cell-price\">
                                <span>";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "method", false, false, false, 196), "html", null, true);
                echo " €</span>
                            </td>

                            <td class=\"cell-quantity\">
                                <span>";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 200), "html", null, true);
                echo "</span>
                            </td>
                            <td class=\"cell-category\">
                                <span>";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 203), "html", null, true);
                echo "</span>
                            </td>
                            <td class=\"cell-edit\">
                                <a href=\"";

                // line 205
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 205)]), "html", null, true);
                echo "\">
                                    <i class=\"fa-solid fa-pen-to-square\"></i>
                                </a>

                            </td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {

                // line 211

                echo "                        <tr><td colspan=\"10\" class=\"text-center\">Aucun produit trouvé.</td></tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            // line 213

            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        } else {

            // line 220

            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        Vous n'avez pas l'autorisation d'accéder à cette page.
    </div>
";
        }

        // line 224

        echo "<!-- toasts -->
<div id=\"toast-container\" class=\"toast-container position-fixed\"></div>

<!-- JavaScript -->
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js\"></script>
<script src=\"";

        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/javascript/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 232

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/javascript/toast.js"), "html", null, true);
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
        return "admin/dashboard.html.twig";
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

        return array (  395 => 232,  391 => 231,  382 => 224,  376 => 220,  367 => 213,  360 => 211,  349 => 205,  343 => 202,  337 => 199,  330 => 195,  323 => 191,  317 => 187,  312 => 186,  293 => 170,  281 => 160,  274 => 158,  265 => 154,  259 => 151,  252 => 147,  248 => 146,  241 => 142,  237 => 141,  226 => 135,  220 => 131,  215 => 130,  196 => 114,  181 => 102,  167 => 91,  143 => 72,  126 => 58,  113 => 48,  104 => 42,  95 => 36,  81 => 24,  79 => 23,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  43 => 1,);

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


</head>

<body>

{% if 'admin' in user.roles %}
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
            <i class=\"fa-solid fa-user fa-xl clickable\"></i>
        </div>
    </div>
</nav>

<!-- content -->
<div id=\"wrapper\" class=\"body-padding no-transition\">
    <div id=\"content\">
        <h1>Tableau de bord</h1>

        <!-- cards -->
        <div id=\"info-cards\" class=\"d-flex flex-row flex-wrap\">
            <!-- card -->
            <div class=\"card d-flex flex-row align-items-center\">
                <div class=\"card-icon\">
                    <i class=\"fa-solid fa-users\"></i>
                </div>
                <div class=\"card-value d-flex flex-column\">
                    <span class=\"card-value-nbr\">{{ counts.users }}</span>
                    <span class=\"card-value-text\">Utilisateurs inscrits</span>
                </div>
            </div>

            <!-- card -->
            <div class=\"card d-flex flex-row align-items-center\">
                <div class=\"card-icon\">
                    <i class=\"fa-solid fa-boxes\"></i>
                </div>
                <div class=\"card-value d-flex flex-column\">
                    <span class=\"card-value-nbr\">{{ counts.products }}</span>
                    <span class=\"card-value-text\">Produits</span>
                </div>
            </div>
        </div>

        <!-- tables -->
        <!-- users table -->
        <div id=\"users-table\" class=\"table-overview\">
            <!-- table header -->
            <div class=\"table-header d-flex flew-row justify-content-between align-items-center\">
                <h2 class=\"table-title\">Derniers utilisateurs</h2>
                <button><a href=\"{{ path('app_admin_users') }}\" class=\"text-decoration-none\">Voir plus</a></button>
            </div>

            <div class=\"overview-table\">
                <!-- table -->
                <table class=\"table\">
                    <thead>
                    <tr>
                        <td>Nom</td>
                        <td>Contact</td>
                        <td>Statut</td>
                        <td>Role</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                        <tr scope=\"row\">
                            <td class=\"cell-name d-flex flex-row align-items-center\">
                                <div><i class=\"fa-solid fa-user\"></i></div>
                                <div class=\"info d-flex flex-column\">
                                    <span>{{ user.nom }} {{ user.prenom }}</span>

                                </div>
                            </td>
                            <td class=\"cell-phone\">
                                <div class=\"d-flex flex-column\">
                                    <span>{{ user.phoneNumber }}</span>
                                    <span>{{ user.email }}</span>
                                </div>
                            </td>
                            <td class=\"cell-status\">
                                        <span class=\"status\" data-status=\"{{ user.status }}\">
                                            {{ user.status }}
                                        </span>
                            </td>
                            <td class=\"cell-role\">
                                <span>{{ user.roles|join(', ') }}</span>
                            </td>
                            <td class=\"cell-edit\">
                                <a href=\"{{ path('app_admin_user', {'id': user.id}) }}\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                            </td>
                        </tr>
                    {% else %}
                        <tr><td colspan=\"10\" class=\"text-center\">Aucun utilisateur trouvé.</td></tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <!-- products table -->
        <div id=\"products-table\" class=\"table-overview\">
            <!-- table header -->
            <div class=\"table-header d-flex flew-row justify-content-between align-items-center\">
                <h2 class=\"table-title\">Derniers produits</h2>
                <button><a href=\"{{ path('app_admin_products') }}\" class=\"text-decoration-none\">Voir plus</a></button>
            </div>

            <div class=\"overview-table\">
                <!-- table -->
                <table class=\"table\">
                    <thead>
                    <tr>
                        <td>Nom</td>
                        <td>Prix Actuel</td>
                        <td>Quantité</td>
                        <td>Catégorie</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    {% for product in products %}
                        <tr scope=\"row\">
                            <td class=\"cell-name d-flex flex-row align-items-center\">
                                <div><i class=\"fa-solid fa-box\"></i></div>
                                <div class=\"info d-flex flex-column\">
                                    <span>{{ product.name }}</span>
                                </div>
                            </td>
                            <td class=\"cell-price\">
                                <span>{{ product.getCurrentPrice() }} €</span>
                            </td>

                            <td class=\"cell-quantity\">
                                <span>{{ product.quantity }}</span>
                            </td>
                            <td class=\"cell-category\">
                                <span>{{ product.category }}</span>
                            </td>
                            <td class=\"cell-edit\">
                                <a href=\"{{ path('app_admin_product', { id: product.id_prod }) }}\">
                                    <i class=\"fa-solid fa-pen-to-square\"></i>
                                </a>
                            </td>
                        </tr>
                    {% else %}
                        <tr><td colspan=\"10\" class=\"text-center\">Aucun produit trouvé.</td></tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% else %}
    <div class=\"alert alert-danger\" role=\"alert\">
        Vous n'avez pas l'autorisation d'accéder à cette page.
    </div>
{% endif %}
<!-- toasts -->
<div id=\"toast-container\" class=\"toast-container position-fixed\"></div>

<!-- JavaScript -->
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js\"></script>
<script src=\"{{ asset('admin/javascript/dashboard.js') }}\"></script>
<script src=\"{{ asset('admin/javascript/toast.js') }}\"></script>
</body>

</html>
", "admin/dashboard.html.twig", "H:\\Desktop\\Website\\DevWeb-ING1\\templates\\admin\\dashboard.html.twig");
    }
}

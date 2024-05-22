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
    <link rel=\"icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/logo_left.png"), "html", null, true);
        echo "\">
</head>

<body>

";
        // line 22
        if (twig_in_filter("admin", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "roles", [], "any", false, false, false, 22))) {
            // line 23
            echo "<!-- sidebar -->
<div id=\"l-sidebar\" class=\"sidebar-active no-transition\">
    <!-- header -->
    <div id=\"sidebar-header\" class=\"d-flex align-items-center\">
        <a href=\"";
            // line 27
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
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-gauge text-center\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-users text-center\"></i>
                    <span>Comptes</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_products");
            echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-boxes text-center\"></i>
                    <span>Produits</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contacts");
            echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-users text-center\"></i>
                    <span>Contacts</span>
                </a>
            </li>
        </div>

        <!-- bottom -->
        <div class=\"bottom\">
            <li class=\"nav-link\">
                <a href=\"";
            // line 64
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
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "nom", [], "any", false, false, false, 78), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "prenom", [], "any", false, false, false, 78), "html", null, true);
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
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 97, $this->source); })()), "users", [], "any", false, false, false, 97), "html", null, true);
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
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 108, $this->source); })()), "products", [], "any", false, false, false, 108), "html", null, true);
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
            // line 120
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
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 136, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 137
                echo "                        <tr scope=\"row\">
                            <td class=\"cell-name d-flex flex-row align-items-center\">
                                <div><i class=\"fa-solid fa-user\"></i></div>
                                <div class=\"info d-flex flex-column\">
                                    <span>";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 141), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 141), "html", null, true);
                echo "</span>

                                </div>
                            </td>
                            <td class=\"cell-phone\">
                                <div class=\"d-flex flex-column\">
                                    <span>";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phoneNumber", [], "any", false, false, false, 147), "html", null, true);
                echo "</span>
                                    <span>";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 148), "html", null, true);
                echo "</span>
                                </div>
                            </td>
                            <td class=\"cell-status\">
                                        <span class=\"status\" data-status=\"";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 152), "html", null, true);
                echo "\">
                                            ";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 153), "html", null, true);
                echo "
                                        </span>
                            </td>
                            <td class=\"cell-role\">
                                <span>";
                // line 157
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 157), ", "), "html", null, true);
                echo "</span>
                            </td>
                            <td class=\"cell-edit\">
                                <a href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 160)]), "html", null, true);
                echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                            </td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 164
                echo "                        <tr><td colspan=\"10\" class=\"text-center\">Aucun utilisateur trouvé.</td></tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
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
            // line 176
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
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 192, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 193
                echo "                        <tr scope=\"row\">
                            <td class=\"cell-name d-flex flex-row align-items-center\">
                                <div><i class=\"fa-solid fa-box\"></i></div>
                                <div class=\"info d-flex flex-column\">
                                    <span>";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 197), "html", null, true);
                echo "</span>
                                </div>
                            </td>
                            <td class=\"cell-price\">
                                <span>";
                // line 201
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCurrentPrice", [], "method", false, false, false, 201), "html", null, true);
                echo " €</span>
                            </td>

                            <td class=\"cell-quantity\">
                                <span>";
                // line 205
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 205), "html", null, true);
                echo "</span>
                            </td>
                            <td class=\"cell-category\">
                                <span>";
                // line 208
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 208), "html", null, true);
                echo "</span>
                            </td>
                            <td class=\"cell-edit\">
                                <a href=\"";
                // line 211
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id_prod", [], "any", false, false, false, 211)]), "html", null, true);
                echo "\">
                                    <i class=\"fa-solid fa-pen-to-square\"></i>
                                </a>
                            </td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 217
                echo "                        <tr><td colspan=\"10\" class=\"text-center\">Aucun produit trouvé.</td></tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        } else {
            // line 226
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        Vous n'avez pas l'autorisation d'accéder à cette page.
    </div>
";
        }
        // line 230
        echo "<!-- toasts -->
<div id=\"toast-container\" class=\"toast-container position-fixed\"></div>

<!-- JavaScript -->
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/javascript/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 238
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
        return array (  412 => 238,  408 => 237,  399 => 230,  393 => 226,  384 => 219,  377 => 217,  366 => 211,  360 => 208,  354 => 205,  347 => 201,  340 => 197,  334 => 193,  329 => 192,  310 => 176,  298 => 166,  291 => 164,  282 => 160,  276 => 157,  269 => 153,  265 => 152,  258 => 148,  254 => 147,  243 => 141,  237 => 137,  232 => 136,  213 => 120,  198 => 108,  184 => 97,  160 => 78,  143 => 64,  130 => 54,  121 => 48,  112 => 42,  103 => 36,  89 => 27,  83 => 23,  81 => 22,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  43 => 1,);
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
    <link rel=\"icon\" href=\"{{ asset('admin/images/logo_left.png') }}\">
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
            <li class=\"nav-link\">
                <a href=\"{{ path('app_admin_contacts') }}\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-users text-center\"></i>
                    <span>Contacts</span>
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
", "admin/dashboard.html.twig", "C:\\laragon\\www\\DevWeb-ING1\\templates\\admin\\dashboard.html.twig");
    }
}

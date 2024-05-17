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

/* admin/user_account.html.twig */
class __TwigTemplate_94eb502bfeba409a9e56b93f9e024d92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_account.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_account.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <title>Administrateur - Tableau de bord</title>
    <link rel=\"icon\" href=\"#\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"csrf-token\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("your_intention"), "html", null, true);
        echo "\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link rel=\"stylesheet\" href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/dashboard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/profile.css"), "html", null, true);
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
<div id=\"wrapper\" class=\"body-padding no-transition\">
    <!-- Content -->
    <div id=\"content\" class=\"d-flex flex-column align-items-center\">
        <h1>Compte utilisateur</h1>
        <div class=\"profile d-flex flex-row flex-grow flex-wrap justify-content-center\">


            <div class=\"profile-header d-flex flex-row align-items-center justify-content-between\">
                <h2>
                    ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "nom", [], "any", false, false, false, 83), "html", null, true);
        echo "
                    ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "prenom", [], "any", false, false, false, 84), "html", null, true);
        echo "
                </h2>
                <span class=\"status\" data-status=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "status", [], "any", false, false, false, 86), "html", null, true);
        echo "\">
                    ";
        // line 87
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "status", [], "any", false, false, false, 87)), "html", null, true);
        echo "
                </span>
            </div>

            <div class=\"profile-actions\">
                <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/user-icon.png"), "html", null, true);
        echo "\" alt=\"user icon\" class=\"img-fluid profile-img\">

                <div class=\"actions d-flex\">
                    <div>
                        <div class=\"d-flex flex-column align-items-center justify-content-center role\">
                            <h3>Role</h3>
                            <div id=\"role-dropdown\" class=\"dropdown d-flex align-items-center justify-content-center\">
                                ";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "email", [], "any", false, false, false, 99) != twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "email", [], "any", false, false, false, 99))) {
            // line 100
            echo "                                    <button class=\"action btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        ";
            // line 101
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "roles", [], "any", false, false, false, 101), ", "), "html", null, true);
            echo "
                                    </button>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        ";
            // line 104
            if (!twig_in_filter("admin", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "roles", [], "any", false, false, false, 104))) {
                // line 105
                echo "                                            <li class=\"change-role dropdown-item\" data-type=\"admin\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105), "html", null, true);
                echo "\">Passer Admin</li>
                                        ";
            }
            // line 107
            echo "                                        ";
            if (!twig_in_filter("user", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "roles", [], "any", false, false, false, 107))) {
                // line 108
                echo "                                            <li class=\"change-role dropdown-item\" data-type=\"user\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108), "html", null, true);
                echo "\">Passer User</li>
                                        ";
            }
            // line 110
            echo "                                    </ul>
                                ";
        } else {
            // line 112
            echo "                                    <span class=\"action\" type=\"button\">
                             ";
            // line 113
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "roles", [], "any", false, false, false, 113), ", "), "html", null, true);
            echo "
                        </span>
                                ";
        }
        // line 116
        echo "                            </div>
                        </div>
                    </div>

                    ";
        // line 120
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "email", [], "any", false, false, false, 120) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "email", [], "any", false, false, false, 120))) {
            // line 121
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "status", [], "any", false, false, false, 121) == "inactive")) {
                // line 122
                echo "                            <button id=\"status-change\" class=\"action enable mt-3\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122), "html", null, true);
                echo "\">Activer</button>
                        ";
            } else {
                // line 124
                echo "                            <button id=\"status-change\" class=\"action disable mt-3\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124), "html", null, true);
                echo "\">Désactiver</button>
                        ";
            }
            // line 126
            echo "                    ";
        }
        // line 127
        echo "                </div>
            </div>


            <div class=\"profile-data d-flex flex-column align-items-center\">
                <h3 class=\"text-center fs-4 fw-bold\">Profil</h3>
                <form novalidate>
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label for=\"last-name\" class=\"control-label\">Nom</label>
                                <input type=\"text\" name=\"lastName\" class=\"form-control\" id=\"last-name\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 138, $this->source); })()), "prenom", [], "any", false, false, false, 138), "html", null, true);
        echo "\" required disabled>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label for=\"first-name\" class=\"control-label\">Prénom</label>
                                <input type=\"text\" name=\"firstName\" class=\"form-control\" id=\"first-name\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 144, $this->source); })()), "nom", [], "any", false, false, false, 144), "html", null, true);
        echo "\" required disabled>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\" class=\"control-label\">Adresse email</label>
                        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 150, $this->source); })()), "email", [], "any", false, false, false, 150), "html", null, true);
        echo "\" required disabled>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"phone\" class=\"control-label\">Téléphone</label>
                        <input type=\"tel\" name=\"phone\" class=\"form-control\" id=\"phone\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 154, $this->source); })()), "phoneNumber", [], "any", false, false, false, 154), "html", null, true);
        echo "\" required disabled>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"sign-up-date\" class=\"control-label\">Inscription</label>
                        <input type=\"text\" name=\"sign-up-date\" class=\"form-control\" id=\"sign-up-date\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "createdAt", [], "any", false, false, false, 158), "d/m/Y"), "html", null, true);
        echo "\" required disabled>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- toasts -->
<div id=\"toast-container\" class=\"toast-container position-fixed\"></div>

<!-- JavaScript -->
<!-- toasts -->
<div id=\"toast-container\" class=\"toast-container position-fixed\"></div>

<!-- JavaScript -->
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/javascript/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/Javascript/toast.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/Javascript/status-change.js"), "html", null, true);
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
        return "admin/user_account.html.twig";
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
        return array (  335 => 180,  331 => 179,  327 => 178,  304 => 158,  297 => 154,  290 => 150,  281 => 144,  272 => 138,  259 => 127,  256 => 126,  250 => 124,  244 => 122,  241 => 121,  239 => 120,  233 => 116,  227 => 113,  224 => 112,  220 => 110,  214 => 108,  211 => 107,  205 => 105,  203 => 104,  197 => 101,  194 => 100,  192 => 99,  182 => 92,  174 => 87,  170 => 86,  165 => 84,  161 => 83,  142 => 69,  125 => 55,  112 => 45,  103 => 39,  94 => 33,  81 => 25,  70 => 17,  66 => 16,  62 => 15,  53 => 9,  43 => 1,);
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
    <meta name=\"csrf-token\" content=\"{{ csrf_token('your_intention') }}\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link rel=\"stylesheet\" href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/dashboard.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/profile.css') }}\">
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
            <i class=\"fa-solid fa-user fa-xl clickable\"></i>
        </div>
    </div>
</nav>
<div id=\"wrapper\" class=\"body-padding no-transition\">
    <!-- Content -->
    <div id=\"content\" class=\"d-flex flex-column align-items-center\">
        <h1>Compte utilisateur</h1>
        <div class=\"profile d-flex flex-row flex-grow flex-wrap justify-content-center\">


            <div class=\"profile-header d-flex flex-row align-items-center justify-content-between\">
                <h2>
                    {{ user.nom }}
                    {{ user.prenom }}
                </h2>
                <span class=\"status\" data-status=\"{{ user.status }}\">
                    {{ user.status|capitalize }}
                </span>
            </div>

            <div class=\"profile-actions\">
                <img src=\"{{ asset('admin/images/user-icon.png') }}\" alt=\"user icon\" class=\"img-fluid profile-img\">

                <div class=\"actions d-flex\">
                    <div>
                        <div class=\"d-flex flex-column align-items-center justify-content-center role\">
                            <h3>Role</h3>
                            <div id=\"role-dropdown\" class=\"dropdown d-flex align-items-center justify-content-center\">
                                {% if app.user.email != user.email %}
                                    <button class=\"action btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        {{ user.roles|join(', ') }}
                                    </button>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        {% if 'admin' not in user.roles %}
                                            <li class=\"change-role dropdown-item\" data-type=\"admin\" data-user-id=\"{{ user.id }}\">Passer Admin</li>
                                        {% endif %}
                                        {% if 'user' not in user.roles %}
                                            <li class=\"change-role dropdown-item\" data-type=\"user\" data-user-id=\"{{ user.id }}\">Passer User</li>
                                        {% endif %}
                                    </ul>
                                {% else %}
                                    <span class=\"action\" type=\"button\">
                             {{ user.roles|join(', ') }}
                        </span>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    {% if user.email != app.user.email %}
                        {% if user.status == 'inactive' %}
                            <button id=\"status-change\" class=\"action enable mt-3\" data-user-id=\"{{ user.id }}\">Activer</button>
                        {% else %}
                            <button id=\"status-change\" class=\"action disable mt-3\" data-user-id=\"{{ user.id }}\">Désactiver</button>
                        {% endif %}
                    {% endif %}
                </div>
            </div>


            <div class=\"profile-data d-flex flex-column align-items-center\">
                <h3 class=\"text-center fs-4 fw-bold\">Profil</h3>
                <form novalidate>
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label for=\"last-name\" class=\"control-label\">Nom</label>
                                <input type=\"text\" name=\"lastName\" class=\"form-control\" id=\"last-name\" value=\"{{ user.prenom }}\" required disabled>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label for=\"first-name\" class=\"control-label\">Prénom</label>
                                <input type=\"text\" name=\"firstName\" class=\"form-control\" id=\"first-name\" value=\"{{ user.nom }}\" required disabled>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\" class=\"control-label\">Adresse email</label>
                        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"{{ user.email }}\" required disabled>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"phone\" class=\"control-label\">Téléphone</label>
                        <input type=\"tel\" name=\"phone\" class=\"form-control\" id=\"phone\" value=\"{{ user.phoneNumber }}\" required disabled>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"sign-up-date\" class=\"control-label\">Inscription</label>
                        <input type=\"text\" name=\"sign-up-date\" class=\"form-control\" id=\"sign-up-date\" value=\"{{ user.createdAt|date('d/m/Y') }}\" required disabled>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- toasts -->
<div id=\"toast-container\" class=\"toast-container position-fixed\"></div>

<!-- JavaScript -->
<!-- toasts -->
<div id=\"toast-container\" class=\"toast-container position-fixed\"></div>

<!-- JavaScript -->
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js\"></script>
<script src=\"{{ asset('admin/javascript/dashboard.js') }}\"></script>
<script src=\"{{ asset('admin/Javascript/toast.js') }}\"></script>
<script src=\"{{ asset('admin/Javascript/status-change.js') }}\"></script>
</body>

</html>
", "admin/user_account.html.twig", "C:\\laragon\\www\\DevWeb-ING1\\templates\\admin\\user_account.html.twig");
    }
}

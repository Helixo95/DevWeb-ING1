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
    <link rel=\"icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/logo_left.png"), "html", null, true);
        echo "\">
    <title>Utilisateur</title>
</head>

<body>
<!-- sidebar -->
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
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-gauge text-center\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-users text-center\"></i>
                    <span>Comptes</span>
                </a>
            </li>
            <li class=\"nav-link link-active\">
                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_products");
        echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-boxes text-center\"></i>
                    <span>Produits</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
        // line 53
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
        // line 63
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
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "prenom", [], "any", false, false, false, 77), "html", null, true);
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
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "nom", [], "any", false, false, false, 91), "html", null, true);
        echo "
                    ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "prenom", [], "any", false, false, false, 92), "html", null, true);
        echo "
                </h2>
                <span class=\"status\" data-status=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "status", [], "any", false, false, false, 94), "html", null, true);
        echo "\">
                    ";
        // line 95
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "status", [], "any", false, false, false, 95)), "html", null, true);
        echo "
                </span>
            </div>

            <div class=\"profile-actions\">
                <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/user-icon.png"), "html", null, true);
        echo "\" alt=\"user icon\" class=\"img-fluid profile-img\">

                <div class=\"actions d-flex\">
                    <div>
                        <div class=\"d-flex flex-column align-items-center justify-content-center role\">
                            <h3>Role</h3>
                            <div id=\"role-dropdown\" class=\"dropdown d-flex align-items-center justify-content-center\">
                                ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "email", [], "any", false, false, false, 107) != twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "email", [], "any", false, false, false, 107))) {
            // line 108
            echo "                                    <button class=\"action btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        ";
            // line 109
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 109, $this->source); })()), "roles", [], "any", false, false, false, 109), ", "), "html", null, true);
            echo "
                                    </button>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        ";
            // line 112
            if (!twig_in_filter("admin", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "roles", [], "any", false, false, false, 112))) {
                // line 113
                echo "                                            <li class=\"change-role dropdown-item\" data-type=\"admin\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113), "html", null, true);
                echo "\">Passer Admin</li>
                                        ";
            }
            // line 115
            echo "                                        ";
            if (!twig_in_filter("user", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 115, $this->source); })()), "roles", [], "any", false, false, false, 115))) {
                // line 116
                echo "                                            <li class=\"change-role dropdown-item\" data-type=\"user\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116), "html", null, true);
                echo "\">Passer User</li>
                                        ";
            }
            // line 118
            echo "                                    </ul>
                                ";
        } else {
            // line 120
            echo "                                    <span class=\"action\" type=\"button\">
                             ";
            // line 121
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "roles", [], "any", false, false, false, 121), ", "), "html", null, true);
            echo "
                        </span>
                                ";
        }
        // line 124
        echo "                            </div>
                        </div>
                    </div>

                    ";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "email", [], "any", false, false, false, 128) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "email", [], "any", false, false, false, 128))) {
            // line 129
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "status", [], "any", false, false, false, 129) == "inactive")) {
                // line 130
                echo "                            <button id=\"status-change\" class=\"action enable mt-3\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130), "html", null, true);
                echo "\">Activer</button>
                        ";
            } else {
                // line 132
                echo "                            <button id=\"status-change\" class=\"action disable mt-3\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "id", [], "any", false, false, false, 132), "html", null, true);
                echo "\">Désactiver</button>
                        ";
            }
            // line 134
            echo "                    ";
        }
        // line 135
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
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 146, $this->source); })()), "prenom", [], "any", false, false, false, 146), "html", null, true);
        echo "\" required disabled>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label for=\"first-name\" class=\"control-label\">Prénom</label>
                                <input type=\"text\" name=\"firstName\" class=\"form-control\" id=\"first-name\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 152, $this->source); })()), "nom", [], "any", false, false, false, 152), "html", null, true);
        echo "\" required disabled>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\" class=\"control-label\">Adresse email</label>
                        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "email", [], "any", false, false, false, 158), "html", null, true);
        echo "\" required disabled>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"phone\" class=\"control-label\">Téléphone</label>
                        <input type=\"tel\" name=\"phone\" class=\"form-control\" id=\"phone\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "phoneNumber", [], "any", false, false, false, 162), "html", null, true);
        echo "\" required disabled>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"sign-up-date\" class=\"control-label\">Inscription</label>
                        <input type=\"text\" name=\"sign-up-date\" class=\"form-control\" id=\"sign-up-date\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 166, $this->source); })()), "createdAt", [], "any", false, false, false, 166), "d/m/Y"), "html", null, true);
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
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/javascript/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/Javascript/toast.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 188
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
        return array (  349 => 188,  345 => 187,  341 => 186,  318 => 166,  311 => 162,  304 => 158,  295 => 152,  286 => 146,  273 => 135,  270 => 134,  264 => 132,  258 => 130,  255 => 129,  253 => 128,  247 => 124,  241 => 121,  238 => 120,  234 => 118,  228 => 116,  225 => 115,  219 => 113,  217 => 112,  211 => 109,  208 => 108,  206 => 107,  196 => 100,  188 => 95,  184 => 94,  179 => 92,  175 => 91,  156 => 77,  139 => 63,  126 => 53,  117 => 47,  108 => 41,  99 => 35,  86 => 27,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  53 => 9,  43 => 1,);
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
    <link rel=\"icon\" href=\"{{ asset('admin/images/logo_left.png') }}\">
    <title>Utilisateur</title>
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
            <li class=\"nav-link link-active\">
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
", "admin/user_account.html.twig", "H:\\Desktop\\Website\\DevWeb-ING1\\templates\\admin\\user_account.html.twig");
    }
}

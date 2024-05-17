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

/* admin/users.html.twig */
class __TwigTemplate_29b29c01b0450a508bf72db767c8cdee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        // line 1
        echo "<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" >
    <link rel=\"stylesheet\" href='https://fonts.googleapis.com/css?family=Poppins' >
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/dashboard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/stylesheets/table.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/logo_left.png"), "html", null, true);
        echo "\">
    <title>Comptes utilisateur</title>
</head>

<body>

<!-- sidebar -->
<div id=\"l-sidebar\" class=\"sidebar-active no-transition\">
    <!-- header -->
    <div id=\"sidebar-header\" class=\"d-flex align-items-center\">
        <a href=\"/\"><img class=\"navbar-brand\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
    </div>

    <!-- navigation links -->
    <ul class=\"list-unstyled d-flex flex-column justify-content-between\">
        <!-- top -->
        <div class=\"top\">
            <li class=\"nav-link\">
                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-gauge text-center\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class=\"nav-link link-active\">
                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-users text-center\"></i>
                    <span>Comptes</span>
                </a>
            </li>
            <li class=\"nav-link\">
                <a href=\"";
        // line 44
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
        // line 54
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
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "nom", [], "any", false, false, false, 68), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "prenom", [], "any", false, false, false, 68), "html", null, true);
        echo "</span>
            <i class=\"fa-solid fa-user fa-xl clickable\"></i>
        </div>
    </div>
</nav>

<!-- content -->
<div id=\"wrapper\" class=\"body-padding no-transition\">
    <div id=\"content\">
        <h1>Liste des comptes</h1>

        <!-- user table -->
        <div class=\"table-overview\">
            <!-- table header -->
            <div class=\"table-header d-flex flew-row justify-content-between align-items-center\">
                <h2 class=\"table-title\">Comptes</h2>

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
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 100, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 101
            echo "                    <tr scope=\"row\">
                        <td class=\"cell-name d-flex flex-row align-items-center\">
                            <div><i class=\"fa-solid fa-user\"></i></div>
                            <div class=\"info d-flex flex-column\">
                                <span>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 105), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 105), "html", null, true);
            echo "</span>
                                <span>";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 106), "d/m/Y"), "html", null, true);
            echo "</span>
                            </div>
                        </td>
                        <td class=\"cell-phone\">
                            <div class=\"d-flex flex-column\">
                                <span>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phoneNumber", [], "any", false, false, false, 111), "html", null, true);
            echo "</span>
                                <span>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 112), "html", null, true);
            echo "</span>
                            </div>
                        </td>
                        <td class=\"cell-status\">
                                    <span class=\"status\" data-status=\"";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 116), "html", null, true);
            echo "\">
                                        ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 117), "html", null, true);
            echo "
                                    </span>
                        </td>
                        <td class=\"cell-role\">
                                    <span>
                                        ";
            // line 122
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 122), ", "), "html", null, true);
            echo "
                                    </span>
                        </td>
                        <td class=\"cell-edit\">
                            <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 126)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 130
            echo "                        <tr><td colspan=\"10\" class=\"text-center\">Aucun utilisateur trouvé.</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                    </tbody>
                </table>
            </div>
        </div>

        <!-- pagination -->
        ";
        // line 138
        if (array_key_exists("pagination", $context)) {
            // line 139
            echo "            <div class=\"pagination-container d-flex align-items-center justify-content-center\">
                <nav aria-label=\"pagination\">
                    <ul class=\"pagination\">
                        <!-- previous -->
                        <li class=\"page-item ";
            // line 143
            echo (( !twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "previous", [], "any", true, true, false, 143)) ? ("disabled") : (""));
            echo "\">
                            <a class=\"page-link previous\" href=\"";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 144, $this->source); })()), "previousURL", [], "any", false, false, false, 144), "html", null, true);
            echo "\">
                                <i class=\"fa-solid fa-angle-left\"></i>
                            </a>
                        </li>

                        <!-- page numbers -->
                        ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 150, $this->source); })()), "pagesURL", [], "any", false, false, false, 150));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 151
                echo "                            <li class=\"page-item\">
                                <a class=\"page-link ";
                // line 152
                echo (((twig_get_attribute($this->env, $this->source, $context["page"], "number", [], "any", false, false, false, 152) == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 152, $this->source); })()), "current", [], "any", false, false, false, 152))) ? ("page-current") : (""));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 152), "html", null, true);
                echo "\">
                                    ";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "number", [], "any", false, false, false, 153), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "
                        <!-- next -->
                        <li class=\"page-item ";
            // line 159
            echo (( !twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "next", [], "any", true, true, false, 159)) ? ("disabled") : (""));
            echo "\">
                            <a class=\"page-link next\" href=\"";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 160, $this->source); })()), "nextURL", [], "any", false, false, false, 160), "html", null, true);
            echo "\">
                                <i class=\"fa-solid fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        ";
        }
        // line 168
        echo "    </div>
</div>


<!-- JavaScript -->
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/Javascript/dashboard.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/users.html.twig";
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
        return array (  327 => 175,  318 => 168,  307 => 160,  303 => 159,  299 => 157,  289 => 153,  283 => 152,  280 => 151,  276 => 150,  267 => 144,  263 => 143,  257 => 139,  255 => 138,  247 => 132,  240 => 130,  231 => 126,  224 => 122,  216 => 117,  212 => 116,  205 => 112,  201 => 111,  193 => 106,  187 => 105,  181 => 101,  176 => 100,  139 => 68,  122 => 54,  109 => 44,  100 => 38,  91 => 32,  80 => 24,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" >
    <link rel=\"stylesheet\" href='https://fonts.googleapis.com/css?family=Poppins' >
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/dashboard.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/stylesheets/table.css') }}\">
    <link rel=\"icon\" href=\"{{ asset('admin/images/logo_left.png') }}\">
    <title>Comptes utilisateur</title>
</head>

<body>

<!-- sidebar -->
<div id=\"l-sidebar\" class=\"sidebar-active no-transition\">
    <!-- header -->
    <div id=\"sidebar-header\" class=\"d-flex align-items-center\">
        <a href=\"/\"><img class=\"navbar-brand\" src=\"{{ asset('admin/images/logo.png') }}\" alt=\"logo\"></a>
    </div>

    <!-- navigation links -->
    <ul class=\"list-unstyled d-flex flex-column justify-content-between\">
        <!-- top -->
        <div class=\"top\">
            <li class=\"nav-link\">
                <a href=\"{{ path('admin_dashboard') }}\" class=\"text-decoration-none d-block\">
                    <i class=\"fa-solid fa-gauge text-center\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class=\"nav-link link-active\">
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
        <h1>Liste des comptes</h1>

        <!-- user table -->
        <div class=\"table-overview\">
            <!-- table header -->
            <div class=\"table-header d-flex flew-row justify-content-between align-items-center\">
                <h2 class=\"table-title\">Comptes</h2>

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
                                <span>{{ user.createdAt|date('d/m/Y') }}</span>
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
                                    <span>
                                        {{ user.roles|join(', ') }}
                                    </span>
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

        <!-- pagination -->
        {% if pagination is defined %}
            <div class=\"pagination-container d-flex align-items-center justify-content-center\">
                <nav aria-label=\"pagination\">
                    <ul class=\"pagination\">
                        <!-- previous -->
                        <li class=\"page-item {{ pagination.previous is not defined ? 'disabled' : '' }}\">
                            <a class=\"page-link previous\" href=\"{{ pagination.previousURL }}\">
                                <i class=\"fa-solid fa-angle-left\"></i>
                            </a>
                        </li>

                        <!-- page numbers -->
                        {% for page in pagination.pagesURL %}
                            <li class=\"page-item\">
                                <a class=\"page-link {{ page.number == pagination.current ? 'page-current' : '' }}\" href=\"{{ page.url }}\">
                                    {{ page.number }}
                                </a>
                            </li>
                        {% endfor %}

                        <!-- next -->
                        <li class=\"page-item {{ pagination.next is not defined ? 'disabled' : '' }}\">
                            <a class=\"page-link next\" href=\"{{ pagination.nextURL }}\">
                                <i class=\"fa-solid fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        {% endif %}
    </div>
</div>


<!-- JavaScript -->
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js\"></script>
<script src=\"{{asset('/admin/Javascript/dashboard.js') }}\"></script>

", "admin/users.html.twig", "H:\\Desktop\\Website\\DevWeb-ING1\\templates\\admin\\users.html.twig");
    }
}

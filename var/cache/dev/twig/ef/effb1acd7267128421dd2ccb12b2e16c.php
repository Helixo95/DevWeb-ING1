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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/profile.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("profil/script.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "
<section class=\"h-100 gradient-custom-2\">
    <div class=\"container py-5 h-100\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col col-lg-12 col-xl-10\">
                <div class=\"card\">
                    <div class=\"rounded-top text-white d-flex flex-row align-items-center justify-content-between\" style=\"background-color: #0c0d25; height:200px;\">
                        <div class=\"d-flex flex-row align-items-center\" style=\"margin-left: 20px;\">
                            <div class=\"d-flex flex-column align-items-center\" style=\"width: 150px;\">
                                ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "picture", [], "any", false, false, false, 25)) {
            // line 26
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img_profil/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "picture", [], "any", false, false, false, 26))), "html", null, true);
            echo "\"
                                         alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mb-2\">
                                ";
        } else {
            // line 29
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/profil.png"), "html", null, true);
            echo "\"
                                         alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mb-2\">
                                ";
        }
        // line 32
        echo "                            </div>
                            <div class=\"ms-3 user-info\">
                                <h5>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "prenom", [], "any", false, false, false, 34), "html", null, true);
        echo "</h5>
                                <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "address", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"p-4 text-black\" style=\"background-color: #e9edf0;\">
                        <div class=\"d-flex justify-content-between text-center py-1\">
                            <a class=\"btn btn-outline-dark btn-sm me-3\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit");
        echo "\">
                                <i class=\"fas fa-user-edit me-1\"></i> Modifier le profil
                            </a>
                            <div>
                                <p class=\"text-muted fas fa-user-edit me-1 mb-0\" style=\"margin-top: 12px;\">Statut : ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "status", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body p-4 text-black\">
                        <div class=\"mb-2\">
                            <p class=\"lead fw-normal mb-1\">Mes coordonnées</p>
                            <div class=\"p-4 bg-light rounded-3\">
                                <p class=\"fas fa-user-edit mb-1\">Numéro de téléphone : ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "phoneNumber", [], "any", false, false, false, 54), "html", null, true);
        echo "</p>
                                <p class=\"fas fa-user-edit mb-1\">Adresse : ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "address", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
        return array (  213 => 55,  209 => 54,  197 => 45,  190 => 41,  181 => 35,  175 => 34,  171 => 32,  164 => 29,  157 => 26,  155 => 25,  144 => 16,  134 => 15,  122 => 12,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('login/profile.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') }}\" />
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('profil/script.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}\"></script>
{% endblock %}

{% block content %}

<section class=\"h-100 gradient-custom-2\">
    <div class=\"container py-5 h-100\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col col-lg-12 col-xl-10\">
                <div class=\"card\">
                    <div class=\"rounded-top text-white d-flex flex-row align-items-center justify-content-between\" style=\"background-color: #0c0d25; height:200px;\">
                        <div class=\"d-flex flex-row align-items-center\" style=\"margin-left: 20px;\">
                            <div class=\"d-flex flex-column align-items-center\" style=\"width: 150px;\">
                                {% if app.user.picture %}
                                    <img src=\"{{ asset('img_profil/'~app.user.picture) }}\"
                                         alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mb-2\">
                                {% else %}
                                    <img src=\"{{ asset('login/img/profil.png') }}\"
                                         alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mb-2\">
                                {% endif %}
                            </div>
                            <div class=\"ms-3 user-info\">
                                <h5>{{ app.user.nom }} {{ app.user.prenom }}</h5>
                                <p>{{ app.user.address }}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"p-4 text-black\" style=\"background-color: #e9edf0;\">
                        <div class=\"d-flex justify-content-between text-center py-1\">
                            <a class=\"btn btn-outline-dark btn-sm me-3\" href=\"{{ path('profile_edit') }}\">
                                <i class=\"fas fa-user-edit me-1\"></i> Modifier le profil
                            </a>
                            <div>
                                <p class=\"text-muted fas fa-user-edit me-1 mb-0\" style=\"margin-top: 12px;\">Statut : {{ app.user.status }}</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body p-4 text-black\">
                        <div class=\"mb-2\">
                            <p class=\"lead fw-normal mb-1\">Mes coordonnées</p>
                            <div class=\"p-4 bg-light rounded-3\">
                                <p class=\"fas fa-user-edit mb-1\">Numéro de téléphone : {{ app.user.phoneNumber }}</p>
                                <p class=\"fas fa-user-edit mb-1\">Adresse : {{ app.user.address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "profile.html.twig", "C:\\laragon\\www\\DevWeb-ING1\\templates\\profile.html.twig");
    }
}

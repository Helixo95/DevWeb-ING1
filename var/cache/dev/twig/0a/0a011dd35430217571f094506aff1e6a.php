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

/* modif_profile.html.twig */
class __TwigTemplate_0c19d5680301c81f1df1b1b16dfc6115 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modif_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modif_profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "modif_profile.html.twig", 1);
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

        echo "Modifier le Profil";
        
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

<body>
    <section class=\"h-100 gradient-custom-2\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-lg-12 col-xl-10\">
                    <div class=\"card\">
                        <div class=\"rounded-top text-white d-flex flex-row\" style=\"background-color: #14153c; height:200px;\">
                            <div class=\"ms-4 mt-5 d-flex flex-column position-relative\">
                                ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "picture", [], "any", false, false, false, 26)) {
            // line 27
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img_profil/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "picture", [], "any", false, false, false, 27))), "html", null, true);
            echo "\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                ";
        } else {
            // line 30
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/profil.png"), "html", null, true);
            echo "\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                ";
        }
        // line 33
        echo "                                <label for=\"profileImage\" class=\"btn btn-outline-dark btn-edit-profile\">Modifier</label>
                                <input type=\"file\" class=\"form-control-file mt-2\" id=\"profileImage\" style=\"display: none;\">
                            </div>
                            <div class=\"ms-3\" style=\"margin-top: 130px;\">
                                <h5>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "prenom", [], "any", false, false, false, 37), "html", null, true);
        echo "</h5>
                                <p>Cergy</p>
                            </div>
                        </div>
                        <div class=\"card-body p-4 text-black\">
                                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                                <div class=\"form-group row\">
                                    <div class=\"col\">
                                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Nom"]);
        echo "
                                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46)]]);
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 49, $this->source); })()), "prenom", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Prénom"]);
        echo "
                                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 50, $this->source); })()), "prenom", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50)]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 54, $this->source); })()), "phoneNumber", [], "any", false, false, false, 54), 'label', ["label" => "Numéro de téléphone"]);
        echo "
                                    <div id=\"phone-number-field\">
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 56, $this->source); })()), "phoneNumber", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "phoneNumber", [], "any", false, false, false, 56)]]);
        echo "
                                        <div class=\"error-message\" id=\"phone-error-message\">
                                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 58, $this->source); })()), "phoneNumber", [], "any", false, false, false, 58), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                                          
                                <div class=\"form-group\">
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 64, $this->source); })()), "address", [], "any", false, false, false, 64), 'label', ["label" => "Adresse"]);
        echo "
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 65, $this->source); })()), "address", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "address", [], "any", false, false, false, 65)]]);
        echo "
                                </div>
                                
                                <div class=\"form-group\">
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 69, $this->source); })()), "picture", [], "any", false, false, false, 69), 'label', ["label" => "Image de profil"]);
        echo "
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 70, $this->source); })()), "picture", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control-file"]]);
        echo "
                                </div>
                                
                                <div class=\"form-buttons\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                    <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\" class=\"btn btn-secondary\">Annuler</a>
                                </div>
                            ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 77, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("profil/script.js"), "html", null, true);
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
        return "modif_profile.html.twig";
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
        return array (  272 => 84,  262 => 77,  257 => 75,  249 => 70,  245 => 69,  238 => 65,  234 => 64,  225 => 58,  220 => 56,  215 => 54,  208 => 50,  204 => 49,  198 => 46,  194 => 45,  188 => 42,  178 => 37,  172 => 33,  165 => 30,  158 => 27,  156 => 26,  144 => 16,  134 => 15,  122 => 12,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Profil{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('login/profile.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') }}\" />
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('profil/script.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}\"></script>
{% endblock %}

{% block content %}


<body>
    <section class=\"h-100 gradient-custom-2\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-lg-12 col-xl-10\">
                    <div class=\"card\">
                        <div class=\"rounded-top text-white d-flex flex-row\" style=\"background-color: #14153c; height:200px;\">
                            <div class=\"ms-4 mt-5 d-flex flex-column position-relative\">
                                {% if app.user.picture %}
                                    <img src=\"{{ asset('img_profil/'~app.user.picture) }}\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                {% else %}
                                    <img src=\"{{ asset('login/img/profil.png') }}\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                {% endif %}
                                <label for=\"profileImage\" class=\"btn btn-outline-dark btn-edit-profile\">Modifier</label>
                                <input type=\"file\" class=\"form-control-file mt-2\" id=\"profileImage\" style=\"display: none;\">
                            </div>
                            <div class=\"ms-3\" style=\"margin-top: 130px;\">
                                <h5>{{app.user.nom}} {{app.user.prenom}}</h5>
                                <p>Cergy</p>
                            </div>
                        </div>
                        <div class=\"card-body p-4 text-black\">
                                {{ form_start(profileModif, {'attr': {'enctype': 'multipart/form-data'}}) }}
                                <div class=\"form-group row\">
                                    <div class=\"col\">
                                        {{ form_label(profileModif.nom, 'Nom', {'label_attr': {'class': 'col-form-label'}}) }}
                                        {{ form_widget(profileModif.nom, {'attr': {'class': 'form-control', 'value' : app.user.nom}}) }}
                                    </div>
                                    <div class=\"col\">
                                        {{ form_label(profileModif.prenom, 'Prénom', {'label_attr': {'class': 'col-form-label'}}) }}
                                        {{ form_widget(profileModif.prenom, {'attr': {'class': 'form-control',  'value' : app.user.prenom}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(profileModif.phoneNumber, 'Numéro de téléphone') }}
                                    <div id=\"phone-number-field\">
                                        {{ form_widget(profileModif.phoneNumber, {'attr': {'class': 'form-control', 'value' : app.user.phoneNumber}}) }}
                                        <div class=\"error-message\" id=\"phone-error-message\">
                                            {{ form_errors(profileModif.phoneNumber) }}
                                        </div>
                                    </div>
                                </div>
                                                          
                                <div class=\"form-group\">
                                    {{ form_label(profileModif.address, 'Adresse') }}
                                    {{ form_widget(profileModif.address, {'attr': {'class': 'form-control', 'value' : app.user.address}}) }}
                                </div>
                                
                                <div class=\"form-group\">
                                    {{ form_label(profileModif.picture, 'Image de profil') }}
                                    {{ form_widget(profileModif.picture, {'attr': {'class': 'form-control-file'}}) }}
                                </div>
                                
                                <div class=\"form-buttons\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                    <a href=\"{{ path('app_profile') }}\" class=\"btn btn-secondary\">Annuler</a>
                                </div>
                            {{ form_end(profileModif) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src=\"{{ asset('profil/script.js') }}\"></script>
</body>
</html>

{% endblock %}", "modif_profile.html.twig", "H:\\Desktop\\Website\\DevWeb-ING1\\templates\\modif_profile.html.twig");
    }
}

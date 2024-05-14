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
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Exotik - Modifier le Profil</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #23376b;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgb(7, 7, 56), rgb(57, 68, 87));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgb(3, 17, 29), rgb(57, 68, 87));
        }

        /* Set image height to 100% */
        .user-profile-picture {
            width: 150px;
            z-index: 1;
        }

        /* Style for the form */
        .profile-form {
            background-color: #e9edf0d1;
            padding: 1.5rem;
            border-radius: 0.5rem;
        }

        /* Style for the form fields */
        .form-group label {
            font-weight: bold;
        }

        /* Style for the form buttons */
        .form-buttons {
            margin-top: 1.5rem;
        }

        /* Style for the edit button on profile picture */
        .btn-edit-profile {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: none;
        }

        .user-profile-picture:hover + #profileImage,
        #profileImage:hover,
        .user-profile-picture:hover + .btn-edit-profile {
            display: block;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>

</head>

<body>
    <section class=\"h-100 gradient-custom-2\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-lg-12 col-xl-10\">
                    <div class=\"card\">
                        <div class=\"rounded-top text-white d-flex flex-row\" style=\"background-color: #14153c; height:200px;\">
                            <div class=\"ms-4 mt-5 d-flex flex-column position-relative\">
                                ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "picture", [], "any", false, false, false, 79)) {
            // line 80
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img_profil/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "picture", [], "any", false, false, false, 80))), "html", null, true);
            echo "\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                ";
        } else {
            // line 83
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/profil.png"), "html", null, true);
            echo "\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                ";
        }
        // line 86
        echo "                                <label for=\"profileImage\" class=\"btn btn-outline-dark btn-edit-profile\">Modifier</label>
                                <input type=\"file\" class=\"form-control-file mt-2\" id=\"profileImage\" style=\"display: none;\">
                            </div>
                            <div class=\"ms-3\" style=\"margin-top: 130px;\">
                                <h5>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "nom", [], "any", false, false, false, 90), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "prenom", [], "any", false, false, false, 90), "html", null, true);
        echo "</h5>
                                <p>Cergy</p>
                            </div>
                        </div>
                        <div class=\"card-body p-4 text-black\">
                                ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 95, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                                <div class=\"form-group row\">
                                    <div class=\"col\">
                                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 98, $this->source); })()), "nom", [], "any", false, false, false, 98), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Nom"]);
        echo "
                                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 99, $this->source); })()), "nom", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "nom", [], "any", false, false, false, 99)]]);
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 102, $this->source); })()), "prenom", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Prénom"]);
        echo "
                                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 103, $this->source); })()), "prenom", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "prenom", [], "any", false, false, false, 103)]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 107, $this->source); })()), "phoneNumber", [], "any", false, false, false, 107), 'label', ["label" => "Numéro de téléphone"]);
        echo "
                                    <div id=\"phone-number-field\">
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 109, $this->source); })()), "phoneNumber", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "phoneNumber", [], "any", false, false, false, 109)]]);
        echo "
                                        <div class=\"error-message\" id=\"phone-error-message\">
                                            ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 111, $this->source); })()), "phoneNumber", [], "any", false, false, false, 111), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                                          
                                <div class=\"form-group\">
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 117, $this->source); })()), "address", [], "any", false, false, false, 117), 'label', ["label" => "Adresse"]);
        echo "
                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 118, $this->source); })()), "address", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "address", [], "any", false, false, false, 118)]]);
        echo "
                                </div>
                                
                                <div class=\"form-group\">
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 122, $this->source); })()), "picture", [], "any", false, false, false, 122), 'label', ["label" => "Image de profil"]);
        echo "
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 123, $this->source); })()), "picture", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control-file"]]);
        echo "
                                </div>
                                
                                <div class=\"form-buttons\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                    <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\" class=\"btn btn-secondary\">Annuler</a>
                                </div>
                            ";
        // line 130
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 130, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src=\"";
        // line 137
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
        return array (  282 => 137,  272 => 130,  267 => 128,  259 => 123,  255 => 122,  248 => 118,  244 => 117,  235 => 111,  230 => 109,  225 => 107,  218 => 103,  214 => 102,  208 => 99,  204 => 98,  198 => 95,  188 => 90,  182 => 86,  175 => 83,  168 => 80,  166 => 79,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Profil{% endblock %}

{% block content %}
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Exotik - Modifier le Profil</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css')}}\" />
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #23376b;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgb(7, 7, 56), rgb(57, 68, 87));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgb(3, 17, 29), rgb(57, 68, 87));
        }

        /* Set image height to 100% */
        .user-profile-picture {
            width: 150px;
            z-index: 1;
        }

        /* Style for the form */
        .profile-form {
            background-color: #e9edf0d1;
            padding: 1.5rem;
            border-radius: 0.5rem;
        }

        /* Style for the form fields */
        .form-group label {
            font-weight: bold;
        }

        /* Style for the form buttons */
        .form-buttons {
            margin-top: 1.5rem;
        }

        /* Style for the edit button on profile picture */
        .btn-edit-profile {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: none;
        }

        .user-profile-picture:hover + #profileImage,
        #profileImage:hover,
        .user-profile-picture:hover + .btn-edit-profile {
            display: block;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>

</head>

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

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
            color: white;
            font-size: 14px;
            margin-top: 5px;
            padding: 5px;
            border: 1px solid red;
            border-radius: 4px;
            background-color: rgba(255, 0, 0, 0.2); /* Rouge avec une opacité de 20% */
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
        // line 84
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "picture", [], "any", false, false, false, 84)) {
            // line 85
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img_profil/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "picture", [], "any", false, false, false, 85))), "html", null, true);
            echo "\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                ";
        } else {
            // line 88
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/profil.png"), "html", null, true);
            echo "\"
                                        alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                ";
        }
        // line 91
        echo "                                <label for=\"profileImage\" class=\"btn btn-outline-dark btn-edit-profile\">Modifier</label>
                                <input type=\"file\" class=\"form-control-file mt-2\" id=\"profileImage\" style=\"display: none;\">
                            </div>
                            <div class=\"ms-3\" style=\"margin-top: 130px;\">
                                <h5>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "nom", [], "any", false, false, false, 95), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "prenom", [], "any", false, false, false, 95), "html", null, true);
        echo "</h5>
                                <p>Cergy</p>
                            </div>
                        </div>
                        <div class=\"card-body p-4 text-black\">
                                ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 100, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                                <div class=\"form-group row\">
                                    <div class=\"col\">
                                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 103, $this->source); })()), "nom", [], "any", false, false, false, 103), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Nom"]);
        echo "
                                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 104, $this->source); })()), "nom", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "nom", [], "any", false, false, false, 104)]]);
        echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 107, $this->source); })()), "prenom", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "col-form-label"], "label" => "Prénom"]);
        echo "
                                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 108, $this->source); })()), "prenom", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "prenom", [], "any", false, false, false, 108)]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 112, $this->source); })()), "phoneNumber", [], "any", false, false, false, 112), 'label', ["label" => "Numéro de téléphone"]);
        echo "
                                    <div id=\"phone-number-field\">
                                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 114, $this->source); })()), "phoneNumber", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "phoneNumber", [], "any", false, false, false, 114)]]);
        echo "
                                        <div class=\"error-message\" id=\"phone-error-message\">
                                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 116, $this->source); })()), "phoneNumber", [], "any", false, false, false, 116), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                                          
                                <div class=\"form-group\">
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 122, $this->source); })()), "address", [], "any", false, false, false, 122), 'label', ["label" => "Adresse"]);
        echo "
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 123, $this->source); })()), "address", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control", "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "address", [], "any", false, false, false, 123)]]);
        echo "
                                </div>
                                
                                <div class=\"form-group\">
                                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 127, $this->source); })()), "picture", [], "any", false, false, false, 127), 'label', ["label" => "Image de profil"]);
        echo "
                                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 128, $this->source); })()), "picture", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control-file"]]);
        echo "
                                </div>
                                
                                <div class=\"form-buttons\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                    <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\" class=\"btn btn-secondary\">Annuler</a>
                                </div>
                            ";
        // line 135
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileModif"]) || array_key_exists("profileModif", $context) ? $context["profileModif"] : (function () { throw new RuntimeError('Variable "profileModif" does not exist.', 135, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src=\"";
        // line 142
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
        return array (  287 => 142,  277 => 135,  272 => 133,  264 => 128,  260 => 127,  253 => 123,  249 => 122,  240 => 116,  235 => 114,  230 => 112,  223 => 108,  219 => 107,  213 => 104,  209 => 103,  203 => 100,  193 => 95,  187 => 91,  180 => 88,  173 => 85,  171 => 84,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            color: white;
            font-size: 14px;
            margin-top: 5px;
            padding: 5px;
            border: 1px solid red;
            border-radius: 4px;
            background-color: rgba(255, 0, 0, 0.2); /* Rouge avec une opacité de 20% */
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

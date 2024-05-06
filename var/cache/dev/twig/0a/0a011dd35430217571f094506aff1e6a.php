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
            'body' => [$this, 'block_body'],
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
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
                                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/profil.png"), "html", null, true);
        echo "\"
                                    alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                <label for=\"profileImage\" class=\"btn btn-outline-dark btn-edit-profile\">Modifier</label>
                                <input type=\"file\" class=\"form-control-file mt-2\" id=\"profileImage\" style=\"display: none;\">
                            </div>
                            <div class=\"ms-3\" style=\"margin-top: 130px;\">
                                <h5>MAAOUIA Ahmed</h5>
                                <p>Cergy</p>
                            </div>
                        </div>
                        <div class=\"card-body p-4 text-black\">
                            <form class=\"profile-form\">
                                <div class=\"mb-3\">
                                    <label for=\"fullName\" class=\"form-label\">Nom complet</label>
                                    <input type=\"text\" class=\"form-control\" id=\"fullName\" value=\"MAAOUIA Ahmed\">
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"phoneNumber\" class=\"form-label\">Numéro de téléphone</label>
                                    <input type=\"tel\" class=\"form-control\" id=\"phoneNumber\" value=\"123-456-7890\">
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"address\" class=\"form-label\">Adresse</label>
                                    <input type=\"text\" class=\"form-control\" id=\"address\" value=\"1234 Street Name, City, Country\">
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"profilePicture\" class=\"form-label\">Image de profil</label>
                                    <br>
                                    <input type=\"file\" class=\"form-control-file\" id=\"profilePicture\">
                                </div>
                                <div class=\"form-buttons\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                    <button type=\"button\" class=\"btn btn-secondary\">Annuler</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"), "html", null, true);
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
        return array (  185 => 113,  140 => 71,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
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
                                <img src=\"{{asset('login/img/profil.png')}}\"
                                    alt=\"User Profile Picture\" class=\"img-fluid img-thumbnail user-profile-picture mt-4 mb-2\">
                                <label for=\"profileImage\" class=\"btn btn-outline-dark btn-edit-profile\">Modifier</label>
                                <input type=\"file\" class=\"form-control-file mt-2\" id=\"profileImage\" style=\"display: none;\">
                            </div>
                            <div class=\"ms-3\" style=\"margin-top: 130px;\">
                                <h5>MAAOUIA Ahmed</h5>
                                <p>Cergy</p>
                            </div>
                        </div>
                        <div class=\"card-body p-4 text-black\">
                            <form class=\"profile-form\">
                                <div class=\"mb-3\">
                                    <label for=\"fullName\" class=\"form-label\">Nom complet</label>
                                    <input type=\"text\" class=\"form-control\" id=\"fullName\" value=\"MAAOUIA Ahmed\">
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"phoneNumber\" class=\"form-label\">Numéro de téléphone</label>
                                    <input type=\"tel\" class=\"form-control\" id=\"phoneNumber\" value=\"123-456-7890\">
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"address\" class=\"form-label\">Adresse</label>
                                    <input type=\"text\" class=\"form-control\" id=\"address\" value=\"1234 Street Name, City, Country\">
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"profilePicture\" class=\"form-label\">Image de profil</label>
                                    <br>
                                    <input type=\"file\" class=\"form-control-file\" id=\"profilePicture\">
                                </div>
                                <div class=\"form-buttons\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                    <button type=\"button\" class=\"btn btn-secondary\">Annuler</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script type=\"text/javascript\" src=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}\"></script>
</body>
</html>

{% endblock %}", "modif_profile.html.twig", "H:\\Desktop\\Website\\DevWeb-ING1\\templates\\modif_profile.html.twig");
    }
}

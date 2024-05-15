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

/* security/login.html.twig */
class __TwigTemplate_e3832fb36c806b880a4a8490f9c9e25d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion";
        
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
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v6.0.0/css/all.css\" />
    <!-- Google Fonts Roboto -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap\" />
    <!-- MDB -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/mdb.min.css"), "html", null, true);
        echo "\" />
</head>

<style>
    #intro {
      background-image: url(";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/008.jpg"), "html", null, true);
        echo ");
      height: 100vh;
    }

    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #intro {
        margin-top: -58.59px;
      }
    }

    .navbar .nav-link {
      color: #fff !important;
    }
</style>

<br>


<div id=\"intro\" class=\"bg-image shadow-2-strong\">
    <div class=\"mask d-flex align-items-center h-100\" style=\"background-color: rgba(0, 0, 0, 0.8);\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-xl-5 col-md-8\">
            <h2 class=\"text-center mb-4\" style=\"color: antiquewhite;\">Connexion</h2>
    <form method=\"post\" class=\"bg-white rounded shadow-5-strong p-3\">
        ";
        // line 47
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 48, $this->source); })()), "messageKey", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 48, $this->source); })()), "messageData", [], "any", false, false, false, 48), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 50
        echo "
        ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)) {
            // line 52
            echo "            <div class=\"mb-3\">
                You are logged in as ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "userIdentifier", [], "any", false, false, false, 53), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
        ";
        }
        // line 56
        echo "
       <div class=\"form-group\">
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-sm\" autocomplete=\"email\" required autofocus>
        </div>
        <div class=\"form-group\">
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-sm\" autocomplete=\"current-password\" required>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <button class=\"btn btn-primary btn-block\" type=\"submit\">Valider</button>
        <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"lien-connexion\">Pas encore inscrit? Cliquez ici.</a>
    </form>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  180 => 67,  175 => 65,  166 => 59,  161 => 56,  153 => 53,  150 => 52,  148 => 51,  145 => 50,  139 => 48,  137 => 47,  108 => 21,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block content %}
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v6.0.0/css/all.css\" />
    <!-- Google Fonts Roboto -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap\" />
    <!-- MDB -->
    <link rel=\"stylesheet\" href=\"{{asset('login/mdb.min.css')}}\" />
</head>

<style>
    #intro {
      background-image: url({{asset('login/img/008.jpg')}});
      height: 100vh;
    }

    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #intro {
        margin-top: -58.59px;
      }
    }

    .navbar .nav-link {
      color: #fff !important;
    }
</style>

<br>


<div id=\"intro\" class=\"bg-image shadow-2-strong\">
    <div class=\"mask d-flex align-items-center h-100\" style=\"background-color: rgba(0, 0, 0, 0.8);\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-xl-5 col-md-8\">
            <h2 class=\"text-center mb-4\" style=\"color: antiquewhite;\">Connexion</h2>
    <form method=\"post\" class=\"bg-white rounded shadow-5-strong p-3\">
        {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        {% if app.user %}
            <div class=\"mb-3\">
                You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
        {% endif %}

       <div class=\"form-group\">
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-sm\" autocomplete=\"email\" required autofocus>
        </div>
        <div class=\"form-group\">
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-sm\" autocomplete=\"current-password\" required>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        <button class=\"btn btn-primary btn-block\" type=\"submit\">Valider</button>
        <a href=\"{{ path('app_register') }}\" class=\"lien-connexion\">Pas encore inscrit? Cliquez ici.</a>
    </form>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
</div>
</div>
{% endblock %}
", "security/login.html.twig", "/Users/aurelienruppe/PhpstormProjects/DevWeb-ING1/templates/security/login.html.twig");
    }
}

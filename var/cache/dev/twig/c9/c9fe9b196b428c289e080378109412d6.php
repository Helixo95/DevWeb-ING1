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

/* registration/register.html.twig */
class __TwigTemplate_49f689a858ec9b4989d6179cf4fae9ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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

    .error-message {
        color: red;
        font-weight: bold;
    }
    
</style>
<!--
y'a un problème avec ces BR quand on réduit la fenêtre
si on les retire on ne voit plus le \"inscription\" quand on est en plein écran
voir si on peut pas jouer avec des padding/margin
-->
<br>
<br>
<br>
<br>
<br>
<br>


  
<div id=\"intro\" class=\"bg-image shadow-2-strong\">
    <div class=\"mask d-flex align-items-center h-100\" style=\"background-color: rgba(0, 0, 0, 0.8);\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-xl-5 col-md-8\">
            <h2 class=\"text-center mb-4\" style=\"color: antiquewhite;\">Inscription</h2>

            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), 'errors', ["attr" => ["class" => "error-message"]]);
        echo "
            
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), 'form_start', ["attr" => ["class" => "form bg-white rounded shadow-5-strong p-5"]]);
        echo "
            
                <div class=\"form-group\">
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'label', ["label" => "Email"]);
        echo "
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "plainPassword", [], "any", false, false, false, 73), 'label', ["label" => "Password"]);
        echo "
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "plainPassword", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>


                <!-- Ajout des champs supplémentaires -->
                <div class=\"form-group\">
                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "genre", [], "any", false, false, false, 80), 'label', ["label" => "Genre"]);
        echo "
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "genre", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), "address", [], "any", false, false, false, 85), 'label', ["label" => "Adresse"]);
        echo "
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "address", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "phoneNumber", [], "any", false, false, false, 90), 'label', ["label" => "Numéro de téléphone"]);
        echo "
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), "phoneNumber", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group form-check\">
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), "agreeTerms", [], "any", false, false, false, 95), 'widget', ["label_attr" => ["class" => "form-check-label"], "attr" => ["class" => "form-check-input"]]);
        echo "
                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), "agreeTerms", [], "any", false, false, false, 96), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "Agree to terms"]);
        echo "
                </div>
                <!-- Fin de l'ajout des champs supplémentaires -->

                

                <button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>
            ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), 'form_end');
        echo "
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
        return "registration/register.html.twig";
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
        return array (  235 => 103,  225 => 96,  221 => 95,  214 => 91,  210 => 90,  203 => 86,  199 => 85,  192 => 81,  188 => 80,  179 => 74,  175 => 73,  168 => 69,  164 => 68,  158 => 65,  153 => 63,  108 => 21,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

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

    .error-message {
        color: red;
        font-weight: bold;
    }
    
</style>
<!--
y'a un problème avec ces BR quand on réduit la fenêtre
si on les retire on ne voit plus le \"inscription\" quand on est en plein écran
voir si on peut pas jouer avec des padding/margin
-->
<br>
<br>
<br>
<br>
<br>
<br>


  
<div id=\"intro\" class=\"bg-image shadow-2-strong\">
    <div class=\"mask d-flex align-items-center h-100\" style=\"background-color: rgba(0, 0, 0, 0.8);\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-xl-5 col-md-8\">
            <h2 class=\"text-center mb-4\" style=\"color: antiquewhite;\">Inscription</h2>

            {{ form_errors(registrationForm, {'attr': {'class': 'error-message'}}) }}
            
            {{ form_start(registrationForm, {'attr': {'class': 'form bg-white rounded shadow-5-strong p-5'}}) }}
            
                <div class=\"form-group\">
                    {{ form_label(registrationForm.email, 'Email') }}
                    {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(registrationForm.plainPassword, 'Password') }}
                    {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control'}}) }}
                </div>


                <!-- Ajout des champs supplémentaires -->
                <div class=\"form-group\">
                    {{ form_label(registrationForm.genre, 'Genre') }}
                    {{ form_widget(registrationForm.genre, {'attr': {'class': 'form-control'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(registrationForm.address, 'Adresse') }}
                    {{ form_widget(registrationForm.address, {'attr': {'class': 'form-control'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(registrationForm.phoneNumber, 'Numéro de téléphone') }}
                    {{ form_widget(registrationForm.phoneNumber, {'attr': {'class': 'form-control'}}) }}
                </div>

                <div class=\"form-group form-check\">
                    {{ form_widget(registrationForm.agreeTerms, {'label_attr': {'class': 'form-check-label'}, 'attr': {'class': 'form-check-input'}}) }}
                    {{ form_label(registrationForm.agreeTerms, 'Agree to terms', {'label_attr': {'class': 'form-check-label'}}) }}
                </div>
                <!-- Fin de l'ajout des champs supplémentaires -->

                

                <button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>
            {{ form_end(registrationForm) }}
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
", "registration/register.html.twig", "/home/cytech/PhpstormProjects/DevWeb-ING1/templates/registration/register.html.twig");
    }
}

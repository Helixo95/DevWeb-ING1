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

/* contact.html.twig */
class __TwigTemplate_bf5ef16d239f82f40b948c8ffb9a550e extends Template
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
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 1);
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

        echo "Page de Contact";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/animate.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
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
        echo "    <style>
        .form-group input[type=\"radio\"] {
            margin-left: 10px;
            margin-right: 10px;
        }
        ::placeholder{
            color: white;
        }
    </style>
    <section class=\"ftco-section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 text-center mb-5\">
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div id=\"form-message-warning\" class=\"mb-4\" style=\"color: red;\">
                    There is a problem with your message, please try again later.
                </div>
                <div id=\"form-message-success\" class=\"mb-4\" style=\"color: green\">
                    Your message was sent, thank you!
                </div>
                <div class=\"col-lg-10\">
                    <div class=\"wrapper\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 d-flex align-items-stretch\">
                                <div class=\"contact-wrap w-100 p-md-5 p-4 py-5\">
                                    <h3 class=\"mb-4\">Write us</h3>
                                    <form method=\"POST\" id=\"contactForm\" name=\"contactForm\" class=\"contactForm\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 48, $this->source); })()), "fullName", [], "any", false, false, false, 48), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 58, $this->source); })()), "genre", [], "any", false, false, false, 58), 'label');
        echo "
                                                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 59, $this->source); })()), "genre", [], "any", false, false, false, 59), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 64, $this->source); })()), "job", [], "any", false, false, false, 64), 'label');
        echo "
                                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 65, $this->source); })()), "job", [], "any", false, false, false, 65), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 70, $this->source); })()), "BirthDate", [], "any", false, false, false, 70), 'label');
        echo "
                                                    <div id=\"birthDate-field\">
                                                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 72, $this->source); })()), "BirthDate", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                        <div class=\"error-message\" id=\"birthDate-error-message\">
                                                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 74, $this->source); })()), "BirthDate", [], "any", false, false, false, 74), 'errors');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 81, $this->source); })()), "subject", [], "any", false, false, false, 81), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 86, $this->source); })()), "message", [], "any", false, false, false, 86), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 91, $this->source); })()), "submit", [], "any", false, false, false, 91), 'widget');
        echo "
                                                    ";
        // line 93
        echo "                                                    <div class=\"submitting\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class=\"col-md-6 d-flex align-items-stretch\">
                                <div class=\"info-wrap w-100 p-md-5 p-4 py-5 img\">
                                    <h3>Contact information</h3>
                                    <p class=\"mb-4\">We're open for any suggestion or just to have a chat</p>
                                    <div class=\"dbox w-100 d-flex align-items-start\">
                                        <div class=\"icon d-flex align-items-center justify-content-center\">
                                            <span class=\"fa fa-map-marker\"></span>
                                        </div>
                                        <div class=\"text pl-3\">
                                            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                        </div>
                                    </div>
                                    <div class=\"dbox w-100 d-flex align-items-center\">
                                        <div class=\"icon d-flex align-items-center justify-content-center\">
                                            <span class=\"fa fa-phone\"></span>
                                        </div>
                                        <div class=\"text pl-3\">
                                            <p><span>Phone:</span> <a href=\"tel://1234567920\">+ 1235 2355 98</a></p>
                                        </div>
                                    </div>
                                    <div class=\"dbox w-100 d-flex align-items-center\">
                                        <div class=\"icon d-flex align-items-center justify-content-center\">
                                            <span class=\"fa fa-paper-plane\"></span>
                                        </div>
                                        <div class=\"text pl-3\">
                                            <p><span>Email:</span> <a href=\"mailto:info@yoursite.com\">contact.exotik95@gmail.com</a></p>
                                        </div>
                                    </div>
                                    <div class=\"dbox w-100 d-flex align-items-center\">
                                        <div class=\"icon d-flex align-items-center justify-content-center\">
                                            <span class=\"fa fa-globe\"></span>
                                        </div>
                                        <div class=\"text pl-3\">
                                            <p><span>Website</span> <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">exotik.com</a></p>
                                        </div>
                                    </div>
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

    // line 146
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 147
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contact.html.twig";
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
        return array (  329 => 147,  319 => 146,  297 => 133,  255 => 93,  251 => 91,  243 => 86,  235 => 81,  225 => 74,  220 => 72,  215 => 70,  207 => 65,  203 => 64,  195 => 59,  191 => 58,  183 => 53,  175 => 48,  141 => 16,  131 => 15,  118 => 12,  108 => 11,  96 => 7,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page de Contact{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('contact/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('contact/css/animate.css') }}\">
{% endblock %}


{% block header %}
    {{ parent() }}
{% endblock %}

{% block content %}
    <style>
        .form-group input[type=\"radio\"] {
            margin-left: 10px;
            margin-right: 10px;
        }
        ::placeholder{
            color: white;
        }
    </style>
    <section class=\"ftco-section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 text-center mb-5\">
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div id=\"form-message-warning\" class=\"mb-4\" style=\"color: red;\">
                    There is a problem with your message, please try again later.
                </div>
                <div id=\"form-message-success\" class=\"mb-4\" style=\"color: green\">
                    Your message was sent, thank you!
                </div>
                <div class=\"col-lg-10\">
                    <div class=\"wrapper\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 d-flex align-items-stretch\">
                                <div class=\"contact-wrap w-100 p-md-5 p-4 py-5\">
                                    <h3 class=\"mb-4\">Write us</h3>
                                    <form method=\"POST\" id=\"contactForm\" name=\"contactForm\" class=\"contactForm\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    {{ form_widget(contactForm.fullName) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    {{ form_widget(contactForm.email) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    {{ form_label(contactForm.genre) }}
                                                    {{ form_widget(contactForm.genre) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    {{ form_label(contactForm.job) }}
                                                    {{ form_widget(contactForm.job) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    {{ form_label(contactForm.BirthDate) }}
                                                    <div id=\"birthDate-field\">
                                                        {{ form_widget(contactForm.BirthDate, {'attr': {'class': 'form-control'}}) }}
                                                        <div class=\"error-message\" id=\"birthDate-error-message\">
                                                            {{ form_errors(contactForm.BirthDate) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    {{ form_widget(contactForm.subject) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    {{ form_widget(contactForm.message) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    {{ form_widget(contactForm.submit) }}
                                                    {# <input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary\"> #}
                                                    <div class=\"submitting\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class=\"col-md-6 d-flex align-items-stretch\">
                                <div class=\"info-wrap w-100 p-md-5 p-4 py-5 img\">
                                    <h3>Contact information</h3>
                                    <p class=\"mb-4\">We're open for any suggestion or just to have a chat</p>
                                    <div class=\"dbox w-100 d-flex align-items-start\">
                                        <div class=\"icon d-flex align-items-center justify-content-center\">
                                            <span class=\"fa fa-map-marker\"></span>
                                        </div>
                                        <div class=\"text pl-3\">
                                            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                        </div>
                                    </div>
                                    <div class=\"dbox w-100 d-flex align-items-center\">
                                        <div class=\"icon d-flex align-items-center justify-content-center\">
                                            <span class=\"fa fa-phone\"></span>
                                        </div>
                                        <div class=\"text pl-3\">
                                            <p><span>Phone:</span> <a href=\"tel://1234567920\">+ 1235 2355 98</a></p>
                                        </div>
                                    </div>
                                    <div class=\"dbox w-100 d-flex align-items-center\">
                                        <div class=\"icon d-flex align-items-center justify-content-center\">
                                            <span class=\"fa fa-paper-plane\"></span>
                                        </div>
                                        <div class=\"text pl-3\">
                                            <p><span>Email:</span> <a href=\"mailto:info@yoursite.com\">contact.exotik95@gmail.com</a></p>
                                        </div>
                                    </div>
                                    <div class=\"dbox w-100 d-flex align-items-center\">
                                        <div class=\"icon d-flex align-items-center justify-content-center\">
                                            <span class=\"fa fa-globe\"></span>
                                        </div>
                                        <div class=\"text pl-3\">
                                            <p><span>Website</span> <a href=\"{{ path('app_home') }}\">exotik.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}
", "contact.html.twig", "/Users/aurelienruppe/PhpstormProjects/DevWeb-ING1/templates/contact.html.twig");
    }
}

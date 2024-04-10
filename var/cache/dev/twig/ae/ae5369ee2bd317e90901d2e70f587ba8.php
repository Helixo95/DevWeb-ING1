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

/* contact/contact.html.twig */
class __TwigTemplate_b32294ab8c0a8c6fde4b37e0f22941be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ContactController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/style.css"), "html", null, true);
        echo "\">
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        $this->loadTemplate("navbar.html.twig", "contact/contact.html.twig", 11)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <section class=\"ftco-section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 text-center mb-5\">
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10\">
                    <div class=\"wrapper\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 d-flex align-items-stretch\">
                                <div class=\"contact-wrap w-100 p-md-5 p-4 py-5\">
                                    <h3 class=\"mb-4\">Write us</h3>
                                    <div id=\"form-message-warning\" class=\"mb-4\"></div>
                                    <div id=\"form-message-success\" class=\"mb-4\">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method=\"POST\" id=\"contactForm\" name=\"contactForm\" class=\"contactForm\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Name\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Email\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <textarea name=\"message\" class=\"form-control\" id=\"message\" cols=\"30\" rows=\"6\" placeholder=\"Message\"></textarea>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary\">
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
                                            <p><span>Email:</span> <a href=\"mailto:info@yoursite.com\">info@yoursite.com</a></p>
                                        </div>
                                    </div>
                                    <div class=\"dbox w-100 d-flex align-items-center\">
                                        <div class=\"icon d-flex align-items-center justify-content-center\">
                                            <span class=\"fa fa-globe\"></span>
                                        </div>
                                        <div class=\"text pl-3\">
                                            <p><span>Website</span> <a href=\"#\">yoursite.com</a></p>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  147 => 14,  137 => 13,  127 => 11,  117 => 10,  104 => 6,  101 => 5,  91 => 4,  72 => 2,  62 => 13,  60 => 10,  57 => 9,  55 => 4,  52 => 3,  50 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block title %}Hello ContactController!{% endblock %}

{% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('contact/css/style.css') }}\">
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
{% endblock %}

{% block navbar %}
{% include 'navbar.html.twig' %}
{% endblock %}
{% block body %}
    <section class=\"ftco-section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 text-center mb-5\">
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10\">
                    <div class=\"wrapper\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 d-flex align-items-stretch\">
                                <div class=\"contact-wrap w-100 p-md-5 p-4 py-5\">
                                    <h3 class=\"mb-4\">Write us</h3>
                                    <div id=\"form-message-warning\" class=\"mb-4\"></div>
                                    <div id=\"form-message-success\" class=\"mb-4\">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method=\"POST\" id=\"contactForm\" name=\"contactForm\" class=\"contactForm\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Name\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Email\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <textarea name=\"message\" class=\"form-control\" id=\"message\" cols=\"30\" rows=\"6\" placeholder=\"Message\"></textarea>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary\">
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
                                            <p><span>Email:</span> <a href=\"mailto:info@yoursite.com\">info@yoursite.com</a></p>
                                        </div>
                                    </div>
                                    <div class=\"dbox w-100 d-flex align-items-center\">
                                        <div class=\"icon d-flex align-items-center justify-content-center\">
                                            <span class=\"fa fa-globe\"></span>
                                        </div>
                                        <div class=\"text pl-3\">
                                            <p><span>Website</span> <a href=\"#\">yoursite.com</a></p>
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
", "contact/contact.html.twig", "H:\\Desktop\\DevWeb-ING1\\templates\\contact\\contact.html.twig");
    }
}

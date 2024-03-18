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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
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

        echo "Hello ContactController!";
        
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
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"public/contact/style.css\">
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/popper.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.validate.min.js\"></script>
    <script src=\"js/main.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
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
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  138 => 20,  128 => 19,  113 => 12,  103 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ContactController!{% endblock %}

{% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"public/contact/style.css\">
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
{% endblock %}

{% block javascripts %}
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/popper.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.validate.min.js\"></script>
    <script src=\"js/main.js\"></script>
{%  endblock %}

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
", "contact/contact.html.twig", "H:\\Desktop\\DevWeb-ING1-Ahmed\\templates\\contact\\contact.html.twig");
    }
}

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

/* login.html.twig */
class __TwigTemplate_4d828d634ea58c7235ae9300c45729f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

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
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/mdb.min.css"), "html", null, true);
        echo "\" />
</head>
<body>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/img/008.jpg"), "html", null, true);
        echo "\");
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

    <!-- Navbar -->
    <nav class=\"navbar navbar-expand-lg navbar-dark d-none d-lg-block\" style=\"z-index: 2000;\">
      <div class=\"container-fluid\">
        <!-- Navbar brand -->
        <a class=\"navbar-brand nav-link\" target=\"_blank\" href=\"https://mdbootstrap.com/docs/standard/\">
          <strong>EXOTIK</strong>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-mdb-collapse-init data-mdb-target=\"#navbarExample01\"
          aria-controls=\"navbarExample01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarExample01\">
          <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" aria-current=\"page\" href=\"#intro\">Home</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id=\"intro\" class=\"bg-image shadow-2-strong\">
      <div class=\"mask d-flex align-items-center h-100\" style=\"background-color: rgba(0, 0, 0, 0.8);\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-xl-5 col-md-8\">
              <h2 class=\"text-center mb-4\" style=\"color: antiquewhite;\">Connexion</h2>
              <form class=\"bg-white rounded shadow-5-strong p-5\">
                <!-- Email input -->
                <div class=\"form-outline mb-4\" data-mdb-input-init>
                  <input type=\"email\" id=\"form1Example1\" class=\"form-control\" />
                  <label class=\"form-label\" for=\"form1Example1\">Email address</label>
                </div>

                <!-- Password input -->
                <div class=\"form-outline mb-4\" data-mdb-input-init>
                  <input type=\"password\" id=\"form1Example2\" class=\"form-control\" />
                  <label class=\"form-label\" for=\"form1Example2\">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class=\"row mb-4\">
                  <div class=\"col d-flex justify-content-center\">
                    <!-- Checkbox -->
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"form1Example3\" checked />
                      <label class=\"form-check-label\" for=\"form1Example3\">
                        Remember me
                      </label>
                    </div>
                  </div>

                  <div class=\"col text-center\">
                    <!-- Simple link -->
                    <a href=\"#!\">Forgot password?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type=\"submit\" class=\"btn btn-primary btn-block\" data-mdb-ripple-init>Log in</button>
                <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signin");
        echo "\" class=\"lien-connexion\">Pas encore inscrit? Cliquez ici.</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Footer-->
  <footer class=\"bg-light text-lg-start\">
    <div class=\"py-4 text-center\">


    </div>

    <hr class=\"m-0\" />

  </footer>
  <!--Footer-->
    <!-- MDB -->
    <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/mdb.umd.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login.html.twig";
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
        return array (  177 => 124,  151 => 101,  69 => 22,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

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
<body>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(\"{{asset('login/img/008.jpg')}}\");
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

    <!-- Navbar -->
    <nav class=\"navbar navbar-expand-lg navbar-dark d-none d-lg-block\" style=\"z-index: 2000;\">
      <div class=\"container-fluid\">
        <!-- Navbar brand -->
        <a class=\"navbar-brand nav-link\" target=\"_blank\" href=\"https://mdbootstrap.com/docs/standard/\">
          <strong>EXOTIK</strong>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-mdb-collapse-init data-mdb-target=\"#navbarExample01\"
          aria-controls=\"navbarExample01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarExample01\">
          <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" aria-current=\"page\" href=\"#intro\">Home</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id=\"intro\" class=\"bg-image shadow-2-strong\">
      <div class=\"mask d-flex align-items-center h-100\" style=\"background-color: rgba(0, 0, 0, 0.8);\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-xl-5 col-md-8\">
              <h2 class=\"text-center mb-4\" style=\"color: antiquewhite;\">Connexion</h2>
              <form class=\"bg-white rounded shadow-5-strong p-5\">
                <!-- Email input -->
                <div class=\"form-outline mb-4\" data-mdb-input-init>
                  <input type=\"email\" id=\"form1Example1\" class=\"form-control\" />
                  <label class=\"form-label\" for=\"form1Example1\">Email address</label>
                </div>

                <!-- Password input -->
                <div class=\"form-outline mb-4\" data-mdb-input-init>
                  <input type=\"password\" id=\"form1Example2\" class=\"form-control\" />
                  <label class=\"form-label\" for=\"form1Example2\">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class=\"row mb-4\">
                  <div class=\"col d-flex justify-content-center\">
                    <!-- Checkbox -->
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"form1Example3\" checked />
                      <label class=\"form-check-label\" for=\"form1Example3\">
                        Remember me
                      </label>
                    </div>
                  </div>

                  <div class=\"col text-center\">
                    <!-- Simple link -->
                    <a href=\"#!\">Forgot password?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type=\"submit\" class=\"btn btn-primary btn-block\" data-mdb-ripple-init>Log in</button>
                <a href=\"{{ path('app_signin') }}\" class=\"lien-connexion\">Pas encore inscrit? Cliquez ici.</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Footer-->
  <footer class=\"bg-light text-lg-start\">
    <div class=\"py-4 text-center\">


    </div>

    <hr class=\"m-0\" />

  </footer>
  <!--Footer-->
    <!-- MDB -->
    <script type=\"text/javascript\" src=\"{{ asset('login/mdb.umd.min.js') }}\"></script>
</body>
</html>", "login.html.twig", "H:\\Desktop\\Website\\DevWeb-ING1\\templates\\login.html.twig");
    }
}

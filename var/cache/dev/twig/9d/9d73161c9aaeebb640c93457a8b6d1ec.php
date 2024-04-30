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

/* base.html.twig */
class __TwigTemplate_0679a7e320a55c4cabca169aca36bb87 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/logoicon.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product/style.css"), "html", null, true);
        echo "\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital@0;1&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\" >EXOTIC</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
                aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Home</a>

                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Perfumes
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Men</a>
                        <a class=\"dropdown-item\" href=\"#\">Women</a>
                        <a class=\"dropdown-item\" href=\"#\">All</a>
                    </div>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Boxes</a>

                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Samples</a>

                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Contact</a>

                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">About us</a>

                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Blog</a>

                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Login</a>
                </li>
                <!-- Votre bouton de panier ici -->
            </ul>
        </div>
    </div>
</nav>

";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "
<footer class=\"hqtqfR\">
    <div class=\"container footerContent\">
        <div class=\"row1\">
            <div class=\"left\">
                <a class=\"logo\" href=\"\"></a>
                <div class=\"companyInfo\"></div>
                <p>Chez Exotic Group LLC</p>
                <p>Chem. des Paradis, 95000 Cergy</p>
                <p>France</p>

                <div class=\"headerIcons\">
                    <a class=\"circle\" href=\"\" rel=\"nofollow\" target=\"_blank\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"#fff\"
                             style=\"transform:scale(1)\">
                            <path
                                    d=\"M17.525 9H14V7c0-1.032.084-1.682 1.563-1.682h1.868v-3.18A26.065 26.065 0 0 0 14.693 2C11.98 2 10 3.657 10 6.699V9H7v4l3-.001V22h4v-9.003l3.066-.001L17.525 9z\">
                            </path>
                        </svg>
                    </a>
                    <a class=\"circle\" href=\"\" rel=\"nofollow\" target=\"_blank\">
                        <svg width=\"24\" height=\"24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                             style=\"transform:scale(1)\">
                            <path
                                    d=\"M11.999 7.377a4.624 4.624 0 1 0 0 9.248 4.624 4.624 0 0 0 0-9.248Zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008ZM16.806 8.285a1.078 1.078 0 1 0 0-2.156 1.078 1.078 0 0 0 0 2.156Z\"
                                    fill=\"#fff\"></path>
                            <path
                                    d=\"M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.607 6.607 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.583 6.583 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.616 6.616 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.583 6.583 0 0 0-.421-2.217Zm-1.218 9.532a5.046 5.046 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711c-.535.198-1.1.304-1.67.311-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.961 4.961 0 0 1-1.67-.311 2.985 2.985 0 0 1-1.718-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.95-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.99 2.99 0 0 1 1.712 1.712c.197.535.302 1.1.311 1.669.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011v-.001Z\"
                                    fill=\"#fff\"></path>
                        </svg></a>
                    <a class=\"circle\" href=\"\" rel=\"nofollow\" target=\"_blank\">
                        <svg width=\"21\" height=\"17\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                             style=\"transform:scale(1)\">
                            <path
                                    d=\"M8 9.5V15l3.249-3.277M20 1 1 8.5l7 1L20 1Zm0 0-2.5 15L8 9.5 20 1Zm0 0L8 9.5 20 1Z\"
                                    stroke=\"#fff\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            </path>
                        </svg>
                    </a>
                    <a class=\"circle\" href=\"\" rel=\"nofollow\" target=\"_blank\">
                        <svg width=\"24\" height=\"24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                             style=\"transform:scale(1)\">
                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                  d=\"M18.403 5.633A8.918 8.918 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.98 8.98 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35Zm-6.35 13.812h-.003a7.445 7.445 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462Zm4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112-.15.224-.58.729-.711.879-.131.15-.262.168-.486.056-.224-.112-.947-.349-1.804-1.113-.667-.595-1.117-1.329-1.248-1.554-.131-.225-.014-.346.099-.458.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374.075-.15.038-.281-.019-.393-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.649 9.649 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263\"
                                  fill=\"#fff\"></path>
                        </svg>
                    </a>
                    <a class=\"circle\" href=\"\" rel=\"nofollow\" target=\"_blank\">
                        <svg width=\"24\" height=\"24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                             style=\"transform:scale(1)\">
                            <path
                                    d=\"M21 4.5H3A1.5 1.5 0 0 0 1.5 6v12A1.5 1.5 0 0 0 3 19.5h18a1.5 1.5 0 0 0 1.5-1.5V6A1.5 1.5 0 0 0 21 4.5ZM19.35 6 12 11.085 4.65 6h14.7ZM3 18V6.683l8.572 5.932a.75.75 0 0 0 .856 0L21 6.682V18H3Z\"
                                    fill=\"#fff\"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class=\"lists\">
                <div class=\"footerList\">
                    <p class=\"footerHeading\">Shop</p>
                    <ul>
                        <li>
                            <a href=\"#\">Men</a>
                        </li>
                        <li>
                            <a href=\"#\">Women</a>
                        </li>
                    </ul>
                </div>
                <div class=\"footerList\">
                    <p class=\"footerHeading\">Company</p>
                    <ul>
                        <li>
                            <a href=\"#\">About us</a>
                        </li>
                        <li>
                            <a href=\"#\">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class=\"footerList\">

                </div>

            </div>
        </div>
        <div class=\"row2\">
            <svg width=\"51\" height=\"32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                 >
                <path
                        d=\"M2.04 0A2.04 2.04 0 0 0 0 2.038v27.924A2.04 2.04 0 0 0 2.04 32h46.92A2.04 2.04 0 0 0 51 29.962V2.038A2.04 2.04 0 0 0 48.96 0H2.04Zm28.42 9.537a7.79 7.79 0 0 1 2.87.528l-.433 2.725-.287-.145c-.591-.255-1.35-.5-2.397-.483-1.254 0-1.833.559-1.833 1.082-.007.589.677.977 1.796 1.559 1.847.897 2.7 1.985 2.689 3.415-.025 2.61-2.21 4.296-5.575 4.296-1.436-.015-2.82-.32-3.567-.67l.45-2.815.412.2c1.052.47 1.732.66 3.014.66.92 0 1.908-.385 1.916-1.228.006-.55-.413-.943-1.66-1.56-1.214-.6-2.824-1.608-2.806-3.415.019-2.444 2.247-4.15 5.41-4.15Zm-25.95.4H9.68c.696.026 1.258.25 1.452 1.004l1.114 5.745v.003l.335 1.722 3.137-8.475h3.395l-5.046 12.405-3.391.003-2.7-10.01c1.607.85 2.974 1.835 3.766 3.188a8.979 8.979 0 0 0-.817-1.388c-.401-.555-1.267-1.272-1.63-1.577-1.26-1.062-2.973-1.92-4.824-2.374l.04-.247Zm15.952.014h3.32l-2.077 12.385h-3.32l2.077-12.385Zm18.75 0h2.516l2.633 12.385h-3.02s-.299-1.423-.396-1.857l-4.166-.005a463.31 463.31 0 0 0-.685 1.862h-3.416l4.83-11.357c.343-.807.926-1.028 1.705-1.028Zm.248 3.33c-.164.461-.448 1.205-.43 1.173 0 0-1.021 2.723-1.288 3.43l2.685-.002-.749-3.543-.218-1.057Z\"
                        fill=\"#fff\"></path>
            </svg>
            <svg width=\"51\" height=\"32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                 >
                <path
                        d=\"M2.373 0A2.372 2.372 0 0 0 0 2.371V29.63A2.372 2.372 0 0 0 2.373 32h46.254A2.372 2.372 0 0 0 51 29.629V2.371A2.372 2.372 0 0 0 48.627 0H2.373Zm14.35 3.852c2.911 0 5.585 1.012 7.684 2.702a12.543 12.543 0 0 0-3.733 6.003h1.018c.6-1.939 1.69-3.665 3.126-5.035a11.767 11.767 0 0 1 3.125 5.035h1.035a12.542 12.542 0 0 0-3.743-5.968 12.171 12.171 0 0 1 7.711-2.737c6.747 0 12.216 5.465 12.216 12.207 0 6.742-5.47 12.207-12.216 12.207-2.972 0-5.698-1.06-7.816-2.823a12.536 12.536 0 0 0 3.93-6.367h-.996a11.755 11.755 0 0 1-3.246 5.45 11.754 11.754 0 0 1-3.245-5.45h-.948a12.536 12.536 0 0 0 3.887 6.284 12.21 12.21 0 0 1-7.789 2.788C9.976 28.148 4.507 22.71 4.507 16c0-6.71 5.47-12.148 12.216-12.148Zm15.306 8.581c-1.467 0-2.895 1.282-2.895 3.69 0 1.596.771 2.65 2.288 2.65.43 0 1.113-.176 1.113-.176l.226-1.395s-.624.315-1.052.315c-.902 0-1.264-.692-1.264-1.437 0-1.511.776-2.343 1.64-2.343.648 0 1.169.367 1.169.367l.207-1.357s-.77-.314-1.431-.314Zm12.341.118-1.277.003-.274 1.678s-.48-.65-1.23-.65c-1.167 0-2.139 1.384-2.139 2.977 0 1.028.517 2.037 1.578 2.037.763 0 1.186-.524 1.186-.524l-.056.447h1.24l.972-5.968Zm-36.564.018L6.79 18.55h1.226l.775-4.511.114 4.511h.877l1.635-4.511-.725 4.511h1.302l1.004-5.982h-2.014l-1.255 3.67-.065-3.67H7.806Zm12.804.388c-.027.028-.74 4.138-.74 4.639 0 .74.415 1.072 1 1.066.42-.003.744-.108.894-.152l.046-.013.158-1.07c-.086 0-.212.036-.323.036-.437 0-.485-.232-.458-.404l.352-2.183h.665l.161-1.183h-.626l.127-.736H20.61Zm14.814.602c-.855 0-1.51.282-1.51.282l-.182 1.099s.541-.225 1.36-.225c.464 0 .804.053.804.44 0 .234-.041.321-.041.321s-.368-.032-.537-.032c-1.08 0-2.213.473-2.213 1.894 0 1.12.744 1.375 1.205 1.375.88 0 1.26-.584 1.28-.586l-.042.488h1.099l.49-3.516c0-1.492-1.271-1.54-1.713-1.54Zm-20.599.006c-.858 0-1.517.282-1.517.282l-.182 1.099s.543-.225 1.364-.225c.467 0 .808.054.808.44 0 .234-.041.322-.041.322s-.368-.032-.539-.032c-1.083 0-2.22.471-2.22 1.891 0 1.12.746 1.376 1.208 1.376.884 0 1.264-.584 1.285-.586l-.042.487h1.103l.493-3.514c0-1.49-1.277-1.54-1.72-1.54Zm3.895 0c-.922 0-1.858.372-1.858 1.642 0 1.439 1.56 1.294 1.56 1.9 0 .404-.435.438-.771.438-.582 0-1.104-.201-1.106-.191l-.168 1.098c.03.01.354.155 1.4.155.28 0 1.885.07 1.885-1.599 0-1.561-1.485-1.252-1.485-1.879 0-.312.24-.41.683-.41.176 0 .853.055.853.055l.156-1.11s-.436-.099-1.149-.099Zm5.763 0c-1.281 0-2.23 1.377-2.23 2.932 0 1.794 1.189 2.221 2.201 2.221.935 0 1.347-.208 1.347-.208l.223-1.225s-.71.312-1.353.312c-1.368 0-1.128-1.017-1.128-1.017h2.59s.167-.823.167-1.158c0-.837-.418-1.857-1.817-1.857Zm4.64.053c-.578 0-1.006.775-1.006.775l.115-.711h-1.199l-.805 4.914h1.325c.375-2.099.443-3.803 1.338-3.49.157-.813.31-1.127.48-1.47 0 0-.08-.018-.248-.018Zm10.73 0c-.577 0-1.005.775-1.005.775l.114-.711h-1.198l-.805 4.914h1.323c.375-2.099.445-3.803 1.34-3.49.157-.813.309-1.127.48-1.47 0 0-.08-.018-.249-.018Zm-15.376 1.056c.727 0 .594.82.594.886h-1.433c0-.084.136-.886.839-.886Zm17.313.095c.463 0 .701.313.701 1.048 0 .667-.337 1.559-1.034 1.559-.463 0-.681-.382-.681-.981 0-.98.448-1.626 1.014-1.626Zm-6.364 1.672c.189 0 .228.019.26.027-.005 0-.006 0 .012.003.024.22-.132 1.246-.887 1.246-.39 0-.49-.31-.49-.492 0-.357.186-.784 1.105-.784Zm-20.6.005c.215 0 .239.024.275.03.024.219-.133 1.244-.891 1.244-.391 0-.493-.308-.493-.49 0-.357.187-.784 1.11-.784Z\"
                        fill=\"#fff\"></path>
            </svg>
            <svg width=\"41\" height=\"32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                 >
                <path
                        d=\"M13.26 16.157c0 .872-.69 1.536-1.565 1.536-.655 0-1.139-.372-1.139-1.072 0-.871.676-1.571 1.545-1.571.662 0 1.16.407 1.16 1.107Zm-7.53-3.464h-.335c-.106 0-.213.071-.227.193l-.306 1.907.583-.022c.783 0 1.388-.107 1.53-1.014.164-.957-.44-1.064-1.245-1.064Zm20.215 0h-.32c-.128 0-.213.071-.228.193l-.299 1.907.57-.022c.925 0 1.566-.214 1.566-1.285-.007-.757-.684-.793-1.289-.793ZM41 3.429V28.57A3.424 3.424 0 0 1 37.583 32H3.417A3.424 3.424 0 0 1 0 28.571V3.43A3.424 3.424 0 0 1 3.417 0h34.166A3.424 3.424 0 0 1 41 3.429ZM9.132 13.1c0-1.5-1.153-2-2.47-2H3.815a.377.377 0 0 0-.37.336l-1.167 7.293c-.022.142.085.285.228.285h1.352c.192 0 .37-.207.391-.407l.32-1.9c.072-.514.94-.336 1.282-.336 2.036 0 3.281-1.214 3.281-3.271Zm5.994.629h-1.353c-.27 0-.284.392-.298.585-.413-.607-1.011-.714-1.688-.714-1.743 0-3.075 1.536-3.075 3.229 0 1.392.869 2.3 2.257 2.3.64 0 1.438-.35 1.886-.85a1.914 1.914 0 0 0-.071.442c0 .165.071.286.228.286h1.224c.192 0 .356-.207.392-.407l.726-4.593c.021-.136-.086-.278-.228-.278Zm2.883 6.992 4.534-6.614c.035-.036.035-.071.035-.121 0-.122-.106-.25-.227-.25h-1.367a.402.402 0 0 0-.32.178L18.777 16.7l-.783-2.679a.432.432 0 0 0-.391-.285h-1.331c-.121 0-.228.128-.228.25 0 .085 1.388 4.057 1.51 4.435-.193.272-1.46 2.043-1.46 2.258a.23.23 0 0 0 .228.228h1.366a.418.418 0 0 0 .32-.186ZM29.348 13.1c0-1.5-1.153-2-2.47-2h-2.826a.393.393 0 0 0-.392.336l-1.153 7.285c-.014.143.093.286.228.286h1.46c.142 0 .248-.107.284-.228l.32-2.072c.072-.514.94-.336 1.282-.336 2.021 0 3.267-1.214 3.267-3.271Zm5.993.629H33.99c-.27 0-.285.392-.306.585-.392-.607-.997-.714-1.687-.714-1.744 0-3.075 1.536-3.075 3.229 0 1.392.868 2.3 2.256 2.3.662 0 1.46-.35 1.886-.85-.021.107-.07.335-.07.442 0 .165.07.286.227.286h1.231c.193 0 .356-.207.392-.407l.726-4.593c.021-.136-.086-.278-.228-.278Zm3.381-2.379c0-.143-.107-.25-.228-.25h-1.316c-.107 0-.214.086-.228.193l-1.153 7.428-.022.036c0 .129.107.25.25.25h1.174c.178 0 .356-.207.37-.407l1.153-7.229v-.021Zm-6.406 3.7c-.868 0-1.545.693-1.545 1.571 0 .693.499 1.072 1.153 1.072a1.52 1.52 0 0 0 1.545-1.536c.007-.7-.491-1.107-1.153-1.107Z\"
                        fill=\"#fff\"></path>
            </svg>
            <svg width=\"32\" height=\"32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                 >
                <path
                        d=\"M15.181 20.367c1.482-.006 4.72-.018 4.683-2.078-.036-2.106-3.147-1.98-4.663-1.917-.169.007-.32.014-.442.015l.07 3.982c.1-.002.22-.002.352-.002Zm-.157-5.804c1.236-.002 3.933-.004 3.901-1.878-.034-1.915-2.625-1.802-3.89-1.746-.143.006-.267.012-.37.013l.062 3.612.297-.001Z\"
                        fill=\"#fff\"></path>
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                      d=\"M12.129 31.522c8.573 2.137 17.256-3.08 19.393-11.651C33.66 11.299 28.441 2.616 19.868.481 11.3-1.66 2.616 3.56.48 12.133c-2.137 8.57 3.08 17.253 11.65 19.389l-.002-.001Zm5.71-22.694c2.338.166 4.2.851 4.443 2.99.181 1.565-.459 2.518-1.497 3.07 1.733.384 2.833 1.391 2.66 3.695-.215 2.86-2.33 3.664-5.368 3.89l.05 3-1.807.034-.053-2.96c-.467.008-.947.013-1.445.01l.054 2.974-1.808.032-.054-3.005-.51.004c-.26.001-.52.002-.782.008l-2.354.04.32-2.166s1.34-.002 1.316-.022c.511-.011.64-.38.669-.612l-.082-4.743.13-.003h.061a1.466 1.466 0 0 0-.192-.009l-.059-3.387c-.075-.365-.32-.786-1.053-.773.02-.027-1.314.023-1.314.023l-.035-1.931 2.496-.043v.01c.374-.007.76-.02 1.15-.035l-.05-2.972 1.808-.03.05 2.911c.483-.017.969-.036 1.444-.044l-.05-2.893 1.81-.032.051 2.972v-.003Z\"
                      fill=\"#fff\"></path>
            </svg>
        </div>
        <div class=\"row3\">
            <p>Copyright © 2024. All rights reserved by Exotic.</p>
        </div>
    </div>
</footer>

<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
";
        // line 198
        $this->displayBlock('javascripts', $context, $blocks);
        // line 199
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CHEZ EXOTIC";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 73
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 198
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  334 => 198,  323 => 73,  313 => 72,  295 => 14,  276 => 6,  264 => 199,  262 => 198,  137 => 75,  135 => 72,  76 => 15,  74 => 14,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}CHEZ EXOTIC{% endblock %}</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('base/logoicon.png') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('base/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('product/style.css') }}\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital@0;1&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    {% block stylesheets %}{% endblock %}
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\" >EXOTIC</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
                aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Home</a>

                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Perfumes
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Men</a>
                        <a class=\"dropdown-item\" href=\"#\">Women</a>
                        <a class=\"dropdown-item\" href=\"#\">All</a>
                    </div>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Boxes</a>

                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Samples</a>

                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Contact</a>

                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">About us</a>

                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Blog</a>

                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Login</a>
                </li>
                <!-- Votre bouton de panier ici -->
            </ul>
        </div>
    </div>
</nav>

{% block body %}

{% endblock %}

<footer class=\"hqtqfR\">
    <div class=\"container footerContent\">
        <div class=\"row1\">
            <div class=\"left\">
                <a class=\"logo\" href=\"\"></a>
                <div class=\"companyInfo\"></div>
                <p>Chez Exotic Group LLC</p>
                <p>Chem. des Paradis, 95000 Cergy</p>
                <p>France</p>

                <div class=\"headerIcons\">
                    <a class=\"circle\" href=\"\" rel=\"nofollow\" target=\"_blank\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"#fff\"
                             style=\"transform:scale(1)\">
                            <path
                                    d=\"M17.525 9H14V7c0-1.032.084-1.682 1.563-1.682h1.868v-3.18A26.065 26.065 0 0 0 14.693 2C11.98 2 10 3.657 10 6.699V9H7v4l3-.001V22h4v-9.003l3.066-.001L17.525 9z\">
                            </path>
                        </svg>
                    </a>
                    <a class=\"circle\" href=\"\" rel=\"nofollow\" target=\"_blank\">
                        <svg width=\"24\" height=\"24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                             style=\"transform:scale(1)\">
                            <path
                                    d=\"M11.999 7.377a4.624 4.624 0 1 0 0 9.248 4.624 4.624 0 0 0 0-9.248Zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008ZM16.806 8.285a1.078 1.078 0 1 0 0-2.156 1.078 1.078 0 0 0 0 2.156Z\"
                                    fill=\"#fff\"></path>
                            <path
                                    d=\"M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.607 6.607 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.583 6.583 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.616 6.616 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.583 6.583 0 0 0-.421-2.217Zm-1.218 9.532a5.046 5.046 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711c-.535.198-1.1.304-1.67.311-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.961 4.961 0 0 1-1.67-.311 2.985 2.985 0 0 1-1.718-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.95-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.99 2.99 0 0 1 1.712 1.712c.197.535.302 1.1.311 1.669.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011v-.001Z\"
                                    fill=\"#fff\"></path>
                        </svg></a>
                    <a class=\"circle\" href=\"\" rel=\"nofollow\" target=\"_blank\">
                        <svg width=\"21\" height=\"17\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                             style=\"transform:scale(1)\">
                            <path
                                    d=\"M8 9.5V15l3.249-3.277M20 1 1 8.5l7 1L20 1Zm0 0-2.5 15L8 9.5 20 1Zm0 0L8 9.5 20 1Z\"
                                    stroke=\"#fff\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            </path>
                        </svg>
                    </a>
                    <a class=\"circle\" href=\"\" rel=\"nofollow\" target=\"_blank\">
                        <svg width=\"24\" height=\"24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                             style=\"transform:scale(1)\">
                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                  d=\"M18.403 5.633A8.918 8.918 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.98 8.98 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35Zm-6.35 13.812h-.003a7.445 7.445 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462Zm4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112-.15.224-.58.729-.711.879-.131.15-.262.168-.486.056-.224-.112-.947-.349-1.804-1.113-.667-.595-1.117-1.329-1.248-1.554-.131-.225-.014-.346.099-.458.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374.075-.15.038-.281-.019-.393-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.649 9.649 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263\"
                                  fill=\"#fff\"></path>
                        </svg>
                    </a>
                    <a class=\"circle\" href=\"\" rel=\"nofollow\" target=\"_blank\">
                        <svg width=\"24\" height=\"24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                             style=\"transform:scale(1)\">
                            <path
                                    d=\"M21 4.5H3A1.5 1.5 0 0 0 1.5 6v12A1.5 1.5 0 0 0 3 19.5h18a1.5 1.5 0 0 0 1.5-1.5V6A1.5 1.5 0 0 0 21 4.5ZM19.35 6 12 11.085 4.65 6h14.7ZM3 18V6.683l8.572 5.932a.75.75 0 0 0 .856 0L21 6.682V18H3Z\"
                                    fill=\"#fff\"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class=\"lists\">
                <div class=\"footerList\">
                    <p class=\"footerHeading\">Shop</p>
                    <ul>
                        <li>
                            <a href=\"#\">Men</a>
                        </li>
                        <li>
                            <a href=\"#\">Women</a>
                        </li>
                    </ul>
                </div>
                <div class=\"footerList\">
                    <p class=\"footerHeading\">Company</p>
                    <ul>
                        <li>
                            <a href=\"#\">About us</a>
                        </li>
                        <li>
                            <a href=\"#\">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class=\"footerList\">

                </div>

            </div>
        </div>
        <div class=\"row2\">
            <svg width=\"51\" height=\"32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                 >
                <path
                        d=\"M2.04 0A2.04 2.04 0 0 0 0 2.038v27.924A2.04 2.04 0 0 0 2.04 32h46.92A2.04 2.04 0 0 0 51 29.962V2.038A2.04 2.04 0 0 0 48.96 0H2.04Zm28.42 9.537a7.79 7.79 0 0 1 2.87.528l-.433 2.725-.287-.145c-.591-.255-1.35-.5-2.397-.483-1.254 0-1.833.559-1.833 1.082-.007.589.677.977 1.796 1.559 1.847.897 2.7 1.985 2.689 3.415-.025 2.61-2.21 4.296-5.575 4.296-1.436-.015-2.82-.32-3.567-.67l.45-2.815.412.2c1.052.47 1.732.66 3.014.66.92 0 1.908-.385 1.916-1.228.006-.55-.413-.943-1.66-1.56-1.214-.6-2.824-1.608-2.806-3.415.019-2.444 2.247-4.15 5.41-4.15Zm-25.95.4H9.68c.696.026 1.258.25 1.452 1.004l1.114 5.745v.003l.335 1.722 3.137-8.475h3.395l-5.046 12.405-3.391.003-2.7-10.01c1.607.85 2.974 1.835 3.766 3.188a8.979 8.979 0 0 0-.817-1.388c-.401-.555-1.267-1.272-1.63-1.577-1.26-1.062-2.973-1.92-4.824-2.374l.04-.247Zm15.952.014h3.32l-2.077 12.385h-3.32l2.077-12.385Zm18.75 0h2.516l2.633 12.385h-3.02s-.299-1.423-.396-1.857l-4.166-.005a463.31 463.31 0 0 0-.685 1.862h-3.416l4.83-11.357c.343-.807.926-1.028 1.705-1.028Zm.248 3.33c-.164.461-.448 1.205-.43 1.173 0 0-1.021 2.723-1.288 3.43l2.685-.002-.749-3.543-.218-1.057Z\"
                        fill=\"#fff\"></path>
            </svg>
            <svg width=\"51\" height=\"32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                 >
                <path
                        d=\"M2.373 0A2.372 2.372 0 0 0 0 2.371V29.63A2.372 2.372 0 0 0 2.373 32h46.254A2.372 2.372 0 0 0 51 29.629V2.371A2.372 2.372 0 0 0 48.627 0H2.373Zm14.35 3.852c2.911 0 5.585 1.012 7.684 2.702a12.543 12.543 0 0 0-3.733 6.003h1.018c.6-1.939 1.69-3.665 3.126-5.035a11.767 11.767 0 0 1 3.125 5.035h1.035a12.542 12.542 0 0 0-3.743-5.968 12.171 12.171 0 0 1 7.711-2.737c6.747 0 12.216 5.465 12.216 12.207 0 6.742-5.47 12.207-12.216 12.207-2.972 0-5.698-1.06-7.816-2.823a12.536 12.536 0 0 0 3.93-6.367h-.996a11.755 11.755 0 0 1-3.246 5.45 11.754 11.754 0 0 1-3.245-5.45h-.948a12.536 12.536 0 0 0 3.887 6.284 12.21 12.21 0 0 1-7.789 2.788C9.976 28.148 4.507 22.71 4.507 16c0-6.71 5.47-12.148 12.216-12.148Zm15.306 8.581c-1.467 0-2.895 1.282-2.895 3.69 0 1.596.771 2.65 2.288 2.65.43 0 1.113-.176 1.113-.176l.226-1.395s-.624.315-1.052.315c-.902 0-1.264-.692-1.264-1.437 0-1.511.776-2.343 1.64-2.343.648 0 1.169.367 1.169.367l.207-1.357s-.77-.314-1.431-.314Zm12.341.118-1.277.003-.274 1.678s-.48-.65-1.23-.65c-1.167 0-2.139 1.384-2.139 2.977 0 1.028.517 2.037 1.578 2.037.763 0 1.186-.524 1.186-.524l-.056.447h1.24l.972-5.968Zm-36.564.018L6.79 18.55h1.226l.775-4.511.114 4.511h.877l1.635-4.511-.725 4.511h1.302l1.004-5.982h-2.014l-1.255 3.67-.065-3.67H7.806Zm12.804.388c-.027.028-.74 4.138-.74 4.639 0 .74.415 1.072 1 1.066.42-.003.744-.108.894-.152l.046-.013.158-1.07c-.086 0-.212.036-.323.036-.437 0-.485-.232-.458-.404l.352-2.183h.665l.161-1.183h-.626l.127-.736H20.61Zm14.814.602c-.855 0-1.51.282-1.51.282l-.182 1.099s.541-.225 1.36-.225c.464 0 .804.053.804.44 0 .234-.041.321-.041.321s-.368-.032-.537-.032c-1.08 0-2.213.473-2.213 1.894 0 1.12.744 1.375 1.205 1.375.88 0 1.26-.584 1.28-.586l-.042.488h1.099l.49-3.516c0-1.492-1.271-1.54-1.713-1.54Zm-20.599.006c-.858 0-1.517.282-1.517.282l-.182 1.099s.543-.225 1.364-.225c.467 0 .808.054.808.44 0 .234-.041.322-.041.322s-.368-.032-.539-.032c-1.083 0-2.22.471-2.22 1.891 0 1.12.746 1.376 1.208 1.376.884 0 1.264-.584 1.285-.586l-.042.487h1.103l.493-3.514c0-1.49-1.277-1.54-1.72-1.54Zm3.895 0c-.922 0-1.858.372-1.858 1.642 0 1.439 1.56 1.294 1.56 1.9 0 .404-.435.438-.771.438-.582 0-1.104-.201-1.106-.191l-.168 1.098c.03.01.354.155 1.4.155.28 0 1.885.07 1.885-1.599 0-1.561-1.485-1.252-1.485-1.879 0-.312.24-.41.683-.41.176 0 .853.055.853.055l.156-1.11s-.436-.099-1.149-.099Zm5.763 0c-1.281 0-2.23 1.377-2.23 2.932 0 1.794 1.189 2.221 2.201 2.221.935 0 1.347-.208 1.347-.208l.223-1.225s-.71.312-1.353.312c-1.368 0-1.128-1.017-1.128-1.017h2.59s.167-.823.167-1.158c0-.837-.418-1.857-1.817-1.857Zm4.64.053c-.578 0-1.006.775-1.006.775l.115-.711h-1.199l-.805 4.914h1.325c.375-2.099.443-3.803 1.338-3.49.157-.813.31-1.127.48-1.47 0 0-.08-.018-.248-.018Zm10.73 0c-.577 0-1.005.775-1.005.775l.114-.711h-1.198l-.805 4.914h1.323c.375-2.099.445-3.803 1.34-3.49.157-.813.309-1.127.48-1.47 0 0-.08-.018-.249-.018Zm-15.376 1.056c.727 0 .594.82.594.886h-1.433c0-.084.136-.886.839-.886Zm17.313.095c.463 0 .701.313.701 1.048 0 .667-.337 1.559-1.034 1.559-.463 0-.681-.382-.681-.981 0-.98.448-1.626 1.014-1.626Zm-6.364 1.672c.189 0 .228.019.26.027-.005 0-.006 0 .012.003.024.22-.132 1.246-.887 1.246-.39 0-.49-.31-.49-.492 0-.357.186-.784 1.105-.784Zm-20.6.005c.215 0 .239.024.275.03.024.219-.133 1.244-.891 1.244-.391 0-.493-.308-.493-.49 0-.357.187-.784 1.11-.784Z\"
                        fill=\"#fff\"></path>
            </svg>
            <svg width=\"41\" height=\"32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                 >
                <path
                        d=\"M13.26 16.157c0 .872-.69 1.536-1.565 1.536-.655 0-1.139-.372-1.139-1.072 0-.871.676-1.571 1.545-1.571.662 0 1.16.407 1.16 1.107Zm-7.53-3.464h-.335c-.106 0-.213.071-.227.193l-.306 1.907.583-.022c.783 0 1.388-.107 1.53-1.014.164-.957-.44-1.064-1.245-1.064Zm20.215 0h-.32c-.128 0-.213.071-.228.193l-.299 1.907.57-.022c.925 0 1.566-.214 1.566-1.285-.007-.757-.684-.793-1.289-.793ZM41 3.429V28.57A3.424 3.424 0 0 1 37.583 32H3.417A3.424 3.424 0 0 1 0 28.571V3.43A3.424 3.424 0 0 1 3.417 0h34.166A3.424 3.424 0 0 1 41 3.429ZM9.132 13.1c0-1.5-1.153-2-2.47-2H3.815a.377.377 0 0 0-.37.336l-1.167 7.293c-.022.142.085.285.228.285h1.352c.192 0 .37-.207.391-.407l.32-1.9c.072-.514.94-.336 1.282-.336 2.036 0 3.281-1.214 3.281-3.271Zm5.994.629h-1.353c-.27 0-.284.392-.298.585-.413-.607-1.011-.714-1.688-.714-1.743 0-3.075 1.536-3.075 3.229 0 1.392.869 2.3 2.257 2.3.64 0 1.438-.35 1.886-.85a1.914 1.914 0 0 0-.071.442c0 .165.071.286.228.286h1.224c.192 0 .356-.207.392-.407l.726-4.593c.021-.136-.086-.278-.228-.278Zm2.883 6.992 4.534-6.614c.035-.036.035-.071.035-.121 0-.122-.106-.25-.227-.25h-1.367a.402.402 0 0 0-.32.178L18.777 16.7l-.783-2.679a.432.432 0 0 0-.391-.285h-1.331c-.121 0-.228.128-.228.25 0 .085 1.388 4.057 1.51 4.435-.193.272-1.46 2.043-1.46 2.258a.23.23 0 0 0 .228.228h1.366a.418.418 0 0 0 .32-.186ZM29.348 13.1c0-1.5-1.153-2-2.47-2h-2.826a.393.393 0 0 0-.392.336l-1.153 7.285c-.014.143.093.286.228.286h1.46c.142 0 .248-.107.284-.228l.32-2.072c.072-.514.94-.336 1.282-.336 2.021 0 3.267-1.214 3.267-3.271Zm5.993.629H33.99c-.27 0-.285.392-.306.585-.392-.607-.997-.714-1.687-.714-1.744 0-3.075 1.536-3.075 3.229 0 1.392.868 2.3 2.256 2.3.662 0 1.46-.35 1.886-.85-.021.107-.07.335-.07.442 0 .165.07.286.227.286h1.231c.193 0 .356-.207.392-.407l.726-4.593c.021-.136-.086-.278-.228-.278Zm3.381-2.379c0-.143-.107-.25-.228-.25h-1.316c-.107 0-.214.086-.228.193l-1.153 7.428-.022.036c0 .129.107.25.25.25h1.174c.178 0 .356-.207.37-.407l1.153-7.229v-.021Zm-6.406 3.7c-.868 0-1.545.693-1.545 1.571 0 .693.499 1.072 1.153 1.072a1.52 1.52 0 0 0 1.545-1.536c.007-.7-.491-1.107-1.153-1.107Z\"
                        fill=\"#fff\"></path>
            </svg>
            <svg width=\"32\" height=\"32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"
                 >
                <path
                        d=\"M15.181 20.367c1.482-.006 4.72-.018 4.683-2.078-.036-2.106-3.147-1.98-4.663-1.917-.169.007-.32.014-.442.015l.07 3.982c.1-.002.22-.002.352-.002Zm-.157-5.804c1.236-.002 3.933-.004 3.901-1.878-.034-1.915-2.625-1.802-3.89-1.746-.143.006-.267.012-.37.013l.062 3.612.297-.001Z\"
                        fill=\"#fff\"></path>
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                      d=\"M12.129 31.522c8.573 2.137 17.256-3.08 19.393-11.651C33.66 11.299 28.441 2.616 19.868.481 11.3-1.66 2.616 3.56.48 12.133c-2.137 8.57 3.08 17.253 11.65 19.389l-.002-.001Zm5.71-22.694c2.338.166 4.2.851 4.443 2.99.181 1.565-.459 2.518-1.497 3.07 1.733.384 2.833 1.391 2.66 3.695-.215 2.86-2.33 3.664-5.368 3.89l.05 3-1.807.034-.053-2.96c-.467.008-.947.013-1.445.01l.054 2.974-1.808.032-.054-3.005-.51.004c-.26.001-.52.002-.782.008l-2.354.04.32-2.166s1.34-.002 1.316-.022c.511-.011.64-.38.669-.612l-.082-4.743.13-.003h.061a1.466 1.466 0 0 0-.192-.009l-.059-3.387c-.075-.365-.32-.786-1.053-.773.02-.027-1.314.023-1.314.023l-.035-1.931 2.496-.043v.01c.374-.007.76-.02 1.15-.035l-.05-2.972 1.808-.03.05 2.911c.483-.017.969-.036 1.444-.044l-.05-2.893 1.81-.032.051 2.972v-.003Z\"
                      fill=\"#fff\"></path>
            </svg>
        </div>
        <div class=\"row3\">
            <p>Copyright © 2024. All rights reserved by Exotic.</p>
        </div>
    </div>
</footer>

<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "H:\\Desktop\\DevWeb-ING1\\templates\\base.html.twig");
    }
}

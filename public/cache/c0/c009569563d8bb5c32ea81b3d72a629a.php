<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* index.html */
class __TwigTemplate_ec1d66153439d6ae7942877a5203699f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "
<!doctype html>
<html lang=\"en\" data-bs-theme=\"auto\">
  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.122.0\">
    <title>Portfolio</title>

<!--    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@docsearch/css@3\"> -->

    <link href=\"assets/twbs/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      
    </style>

    
    <!-- Custom styles for this template -->
    <link href=\"product.css\" rel=\"stylesheet\">
  </head>
  <body>
    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"d-none\">
      <symbol id=\"check2\" viewBox=\"0 0 16 16\">
        <path d=\"M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z\"/>
      </symbol>
      <symbol id=\"circle-half\" viewBox=\"0 0 16 16\">
        <path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
      </symbol>
      <symbol id=\"moon-stars-fill\" viewBox=\"0 0 16 16\">
        <path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z\"/>
        <path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
      </symbol>
      <symbol id=\"sun-fill\" viewBox=\"0 0 16 16\">
        <path d=\"M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
      </symbol>
    </svg>

    <div class=\"dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle\">
      <button class=\"btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center\"
              id=\"bd-theme\"
              type=\"button\"
              aria-expanded=\"false\"
              data-bs-toggle=\"dropdown\"
              aria-label=\"Toggle theme (auto)\">
        <svg class=\"bi my-1 theme-icon-active\" width=\"1em\" height=\"1em\"><use href=\"#circle-half\"></use></svg>
        <span class=\"visually-hidden\" id=\"bd-theme-text\">Toggle theme</span>
      </button>
      <ul class=\"dropdown-menu dropdown-menu-end shadow\" aria-labelledby=\"bd-theme-text\">
        <li>
          <button type=\"button\" class=\"dropdown-item d-flex align-items-center\" data-bs-theme-value=\"light\" aria-pressed=\"false\">
            <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\"><use href=\"#sun-fill\"></use></svg>
            Light
            <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\"><use href=\"#check2\"></use></svg>
          </button>
        </li>
        <li>
          <button type=\"button\" class=\"dropdown-item d-flex align-items-center\" data-bs-theme-value=\"dark\" aria-pressed=\"false\">
            <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\"><use href=\"#moon-stars-fill\"></use></svg>
            Dark
            <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\"><use href=\"#check2\"></use></svg>
          </button>
        </li>
        <li>
          <button type=\"button\" class=\"dropdown-item d-flex align-items-center active\" data-bs-theme-value=\"auto\" aria-pressed=\"true\">
            <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\"><use href=\"#circle-half\"></use></svg>
            Auto
            <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\"><use href=\"#check2\"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"d-none\">
  <symbol id=\"aperture\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
    <path d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\"/>
  </symbol>
  <symbol id=\"cart\" viewBox=\"0 0 16 16\">
    <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
  </symbol>
  <symbol id=\"chevron-right\" viewBox=\"0 0 16 16\">
    <path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/>
  </symbol>
</svg>

<nav class=\"navbar navbar-expand-md bg-dark sticky-top border-bottom\" data-bs-theme=\"dark\">
  <div class=\"container\">
    <a class=\"navbar-brand d-md-none\" href=\"#\">
      <svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#aperture\"/></svg>
      Aperture
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvas\" aria-controls=\"offcanvas\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvas\" aria-labelledby=\"offcanvasLabel\">
      <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasLabel\">Aperture</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
      </div>
      <div class=\"offcanvas-body\">
        <ul class=\"navbar-nav flex-grow-1 justify-content-between\">
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">
            <svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#aperture\"/></svg>
          </a></li>
          <!--li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">Sobre mí</a></li-->
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#experiencia\">Experiencia</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#education\">Estudios</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tecnologias\">Tecnologias</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#proyectos\">Proyectos</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<main>
  <div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary\">
    <div class=\"col-md-6 p-lg-5 mx-auto my-4\">
      <img src=\"../images/imagen.jpeg\" alt=\"Iván Bermejo Hidalgo\" class=\"rounded-circle mb-3 logo-card\" style=\"width: 200px; height: 200px; object-fit: cover;\">      
      <h1 class=\"display-4 fw-bold\">Iván Bermejo Hidalgo</h1>
      <h3 class=\"fw-normal text-muted mb-3\">Técinico informático & Desarrollador Junior</h3>
      <div class=\"d-flex gap-3 justify-content-center lead fw-normal\">
        <!--a class=\"icon-link\" href=\"#\">
          Learn more
          <svg class=\"bi\"><use xlink:href=\"#chevron-right\"/></svg>
        </a-->
        <a class=\"icon-link\" href=\"#\">
          Contacto
          <svg class=\"bi\"><use xlink:href=\"#chevron-right\"/></svg>
        </a>
      </div>
    </div>
    <div class=\"product-device shadow-sm d-none d-md-block\"></div>
    <div class=\"product-device product-device-2 shadow-sm d-none d-md-block\"></div>
</div>


<div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary\" id=\"experiencia\">
  <br>
  <h2 class=\"display-5 fw-bold text-center\">Experiencia</h2>
  <br>
  <div class=\"d-md-flex flex-md-equal w-100 my-md-3 ps-md-3\">
      ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["experiencias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["experiencia"]) {
            // line 225
            yield "      <div class=\"text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden experience-card\"> <!-- Añadimos la clase experience-card -->
          <div class=\"my-3 py-3\">
              <h2 class=\"display-5\"><b>";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["experiencia"], "puesto", [], "any", false, false, false, 227), "html", null, true);
            yield "</b></h2>
              <h3 class=\"lead\">";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["experiencia"], "fecha_inicio", [], "any", false, false, false, 228), "html", null, true);
            yield " <strong>-></strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["experiencia"], "fecha_fin", [], "any", false, false, false, 228), "html", null, true);
            yield "</h3>
          </div>
          <div class=\"bg-body-tertiary shadow-sm mx-auto\" style=\"width: 80%; height: 200px; border-radius: 21px 21px 0 0; overflow: hidden;\">
              <img src=\"../images/";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["experiencia"], "empresa", [], "any", false, false, false, 231)), "html", null, true);
            yield ".png\" alt=\"Experiencia ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["experiencia"], "empresa", [], "any", false, false, false, 231), "html", null, true);
            yield "\" style=\"width: 100%; height: 100%; object-fit: contain;\">        
          </div>    
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['experiencia'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        yield "  </div>
</div>


<div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary\" id=\"education\">
  <h2 class=\"display-5 fw-bold text-center\" style=\"margin-top: 20px;\">Estudios</h2>
  <div class=\"container my-5 \">
    <div class=\"row justify-content-center\">
      ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["estudios"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["estudio"]) {
            // line 244
            yield "      <div class=\"col-md-4 col-lg-4 d-flex align-items-stretch \">
        <div class=\"card mb-4 shadow-sm education-card\" style=\"width: 100%;\">
          <div class=\"card-body\">
            <h5 class=\"card-title fs-3\">";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["estudio"], "titulo", [], "any", false, false, false, 247), "html", null, true);
            yield "</h5>
            <p class=\"card-text fs-5\">
              <strong>Instituto:</strong> ";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["estudio"], "institucion", [], "any", false, false, false, 249), "html", null, true);
            yield " <br>
              <strong>Año de inicio:</strong> ";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["estudio"], "fecha_inicio", [], "any", false, false, false, 250), "html", null, true);
            yield " <br>
              <strong>Año de finalización:</strong> ";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["estudio"], "fecha_fin", [], "any", false, false, false, 251), "html", null, true);
            yield "
            </p>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['estudio'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        yield "    </div>
    <div class=\"text-center my-3\">
      <img src=\"../images/elpuig2.jpg\" alt=\"Descripción de la imagen\" style=\"width: 100%; height: auto; border-radius: 15px;\">
    </div>
  </div>
</div>



<div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary\" id=\"tecnologias\">
  <h2 class=\"display-5 fw-bold text-center\" style=\"margin-top: 20px;\">Tecnologías Conocidas</h2>
  <div class=\"container my-5\">
      <div class=\"row justify-content-center\">
          ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tecnologias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tecnologia"]) {
            // line 271
            yield "          <div class=\"col-md-4 col-lg-3 d-flex align-items-stretch \">
              <div class=\"card mb-4 shadow-sm tecno-card\" style=\"width: 100%;\">
                  <div class=\"card-body text-center\">
                    <img src=\"../images/";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tecnologia"], "nombre", [], "any", false, false, false, 274)), "html", null, true);
            yield ".png\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnologia"], "nombre", [], "any", false, false, false, 274), "html", null, true);
            yield "\" style=\"width: 100%; height: 100%; object-fit: contain;\">        
                    <!--h5 class=\"card-title\">";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnologia"], "nombre", [], "any", false, false, false, 275), "html", null, true);
            yield "</h5-->
                  </div>
              </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tecnologia'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        yield "      </div>
  </div>
</div>




<div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary\" id=\"proyectos\">
  <h2 class=\"display-5 fw-bold text-center\" style=\"margin-top: 20px;\">Proyecto Destacado</h2>
  <div class=\"container my-5\">
    <div class=\"row align-items-center\">
      <div class=\"col-md-6\">
        <img src=\"../images/";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["proyectos"] ?? null), "nombre", [], "any", false, false, false, 292)), "html", null, true);
        yield ".jpeg\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["proyectos"] ?? null), "nombre", [], "any", false, false, false, 292), "html", null, true);
        yield "\" class=\"img-fluid rounded\" style=\"max-width: 100%; height: auto;\">
      </div>
      <div class=\"col-md-6\">
        <div class=\"card mb-4 shadow-sm\" style=\"border-radius: 15px;\">
          <div class=\"card-body\">
            <h5 class=\"card-title\"><strong>";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["proyectos"] ?? null), "nombre", [], "any", false, false, false, 297), "html", null, true);
        yield "</strong></h5>
            <p class=\"card-text\" style=\"text-align: justify;\">";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["proyectos"] ?? null), "descripcion", [], "any", false, false, false, 298), "html", null, true);
        yield "</p>
            <a href=\"";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["proyectos"] ?? null), "enlace", [], "any", false, false, false, 299), "html", null, true);
        yield "\" class=\"btn btn-primary\">Enlace a GitHub</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  
</main>

<!--footer class=\"container py-5\">
  <div class=\"row\">
    <div class=\"col-12 col-md\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"d-block mb-2\" role=\"img\" viewBox=\"0 0 24 24\"><title>Product</title><circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\"/></svg>
      <small class=\"d-block mb-3 text-body-secondary\">&copy; 2017–2024</small>
    </div>
    <div class=\"col-6 col-md\">
      <h5>Features</h5>
      <ul class=\"list-unstyled text-small\">
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Cool stuff</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Random feature</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Team feature</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Stuff for developers</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Another one</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Last time</a></li>
      </ul>
    </div>
    <div class=\"col-6 col-md\">
      <h5>Resources</h5>
      <ul class=\"list-unstyled text-small\">
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Resource name</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Resource</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Another resource</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Final resource</a></li>
      </ul>
    </div>
    <div class=\"col-6 col-md\">
      <h5>Resources</h5>
      <ul class=\"list-unstyled text-small\">
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Business</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Education</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Government</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Gaming</a></li>
      </ul>
    </div>
    <div class=\"col-6 col-md\">
      <h5>About</h5>
      <ul class=\"list-unstyled text-small\">
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Team</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Locations</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Privacy</a></li>
        <li><a class=\"link-secondary text-decoration-none\" href=\"#\">Terms</a></li>
      </ul>
    </div>
  </div>
</footer-->
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js\"></script>
<script src=\"assets/twbs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>

  </body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  416 => 299,  412 => 298,  408 => 297,  398 => 292,  384 => 280,  373 => 275,  367 => 274,  362 => 271,  358 => 270,  343 => 257,  331 => 251,  327 => 250,  323 => 249,  318 => 247,  313 => 244,  309 => 243,  299 => 235,  287 => 231,  279 => 228,  275 => 227,  271 => 225,  267 => 224,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.html", "/var/www/portfolio.local/public/templates/index.html");
    }
}

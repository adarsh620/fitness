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

/* themes/custom/my_theme/templates/system/page.html.twig */
class __TwigTemplate_cbad3a008e4a562ddd58c3933ca4a934ac8ba4e4722d1ec3a4d9d62f36446bb0 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "\t<div id=\"fh5co-wrapper\">
\t\t<div id=\"fh5co-page\">
\t\t<div id=\"fh5co-header\">
\t\t\t<header id=\"fh5co-header-section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"nav-header\">
\t\t\t\t\t\t<a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle\"><i></i></a>
\t\t\t\t\t\t<h1 id=\"fh5co-logo\"><a href=\"index.html\">Fit<span>ness</span></a></h1>
\t\t\t\t\t\t<!-- START #fh5co-menu-wrap -->
\t\t\t\t\t\t<nav id=\"fh5co-menu-wrap\" role=\"navigation\">
\t\t\t\t\t\t\t<ul class=\"sf-menu\" id=\"fh5co-primary-menu\">
\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"classes.html\" class=\"fh5co-sub-ddown\">Classes</a>
\t\t\t\t\t\t\t\t\t <ul class=\"fh5co-sub-menu\">
\t\t\t\t\t\t\t\t\t \t<li><a href=\"left-sidebar.html\">Web Development</a></li>
\t\t\t\t\t\t\t\t\t \t<li><a href=\"right-sidebar.html\">Branding &amp; Identity</a></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fh5co-sub-ddown\">Free HTML5</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template\" target=\"_blank\">Build</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap\" target=\"_blank\">Work</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap\" target=\"_blank\">Light</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap\" target=\"_blank\">Relic</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap\" target=\"_blank\">Display</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap\" target=\"_blank\">Sprint</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">UI Animation</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Copywriting</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Photography</a></li> 
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"schedule.html\">Schedule</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"trainer.html\">Trainers</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</header>\t\t
\t\t</div>
\t\t<!-- end:fh5co-header -->
\t\t<div class=\"fh5co-hero\">
\t\t\t<div class=\"fh5co-overlay\"></div>
\t\t\t<div class=\"fh5co-cover\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 51, $this->source), "html", null, true);
        echo "/./images/home-image.jpg);\">
\t\t\t\t<div class=\"desc animate-box\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t<h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
\t\t\t\t\t\t\t\t<p><span>Created with <i class=\"icon-heart3\"></i> by the fine folks at <a href=\"http://freehtml5.co\" class=\"fh5co-site-name\">FreeHTML5.co</a></span></p>
\t\t\t\t\t\t\t\t<span><a class=\"btn btn-primary\" href=\"#\">Start Your Journey</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end:fh5co-hero -->
\t\t<div id=\"fh5co-schedule-section\" class=\"fh5co-lightgray-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"heading-section text-center animate-box\">
\t\t\t\t\t\t\t<h2>Class Schedule</h2>
\t\t\t\t\t\t\t<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row animate-box\">
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 text-center\">
\t\t\t\t\t\t<ul class=\"schedule\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"active\" data-sched=\"sunday\">Sunday</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" data-sched=\"monday\">Monday</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" data-sched=\"tuesday\">Tuesday</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" data-sched=\"wednesday\">Wednesday</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" data-sched=\"thursday\">Thursday</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" data-sched=\"monday\">Monday</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" data-sched=\"saturday\">Saturday</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row text-center\">

\t\t\t\t\t\t<div class=\"col-md-12 schedule-container\">

\t\t\t\t\t\t\t<div class=\"schedule-content active\" data-day=\"sunday\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 95, $this->source), "html", null, true);
        echo "/./images/fit-dumbell.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Body Building</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 103, $this->source), "html", null, true);
        echo "/./images/fit-yoga.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Yoga Programs</h3>
\t\t\t\t\t\t\t\t\t\t<span>James Smith</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 111, $this->source), "html", null, true);
        echo "/./images/fit-cycling.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Cycling Program</h3>
\t\t\t\t\t\t\t\t\t\t<span>Rita Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 119, $this->source), "html", null, true);
        echo "/./images/fit-boxing.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Boxing Fitness</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Dose</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END sched-content -->

\t\t\t\t\t\t\t<div class=\"schedule-content\" data-day=\"monday\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 131, $this->source), "html", null, true);
        echo "/./images/fit-yoga.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Yoga Programs</h3>
\t\t\t\t\t\t\t\t\t\t<span>James Smith</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 139, $this->source), "html", null, true);
        echo "/./images/fit-dumbell.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Body Building</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 147
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 147, $this->source), "html", null, true);
        echo "/./images/fit-boxing.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Boxing Fitness</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Dose</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 155
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 155, $this->source), "html", null, true);
        echo "/./images/fit-cycling.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Cycling Program</h3>
\t\t\t\t\t\t\t\t\t\t<span>Rita Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END sched-content -->

\t\t\t\t\t\t\t<div class=\"schedule-content\" data-day=\"tuesday\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 168
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 168, $this->source), "html", null, true);
        echo "/./images/fit-dumbell.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Body Building</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 176
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 176, $this->source), "html", null, true);
        echo "/./images/fit-yoga.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Yoga Programs</h3>
\t\t\t\t\t\t\t\t\t\t<span>James Smith</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 184
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 184, $this->source), "html", null, true);
        echo "/./images/fit-cycling.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Cycling Program</h3>
\t\t\t\t\t\t\t\t\t\t<span>Rita Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 192
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 192, $this->source), "html", null, true);
        echo "/./images/fit-boxing.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Boxing Fitness</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Dose</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END sched-content -->

\t\t\t\t\t\t\t<div class=\"schedule-content\" data-day=\"wednesday\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 204
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 204, $this->source), "html", null, true);
        echo "/./images/fit-yoga.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Yoga Programs</h3>
\t\t\t\t\t\t\t\t\t\t<span>James Smith</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 212
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 212, $this->source), "html", null, true);
        echo "/./images/fit-dumbell.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Body Building</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 220
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 220, $this->source), "html", null, true);
        echo "/./images/fit-boxing.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Boxing Fitness</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Dose</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 228
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 228, $this->source), "html", null, true);
        echo "/./images/fit-cycling.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Cycling Program</h3>
\t\t\t\t\t\t\t\t\t\t<span>Rita Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END sched-content -->

\t\t\t\t\t\t\t<div class=\"schedule-content\" data-day=\"thursday\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 240
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 240, $this->source), "html", null, true);
        echo "/./images/fit-dumbell.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Body Building</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 248
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 248, $this->source), "html", null, true);
        echo "/./images/fit-yoga.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Yoga Programs</h3>
\t\t\t\t\t\t\t\t\t\t<span>James Smith</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 256
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 256, $this->source), "html", null, true);
        echo "/./images/fit-cycling.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Cycling Program</h3>
\t\t\t\t\t\t\t\t\t\t<span>Rita Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 264
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 264, $this->source), "html", null, true);
        echo "/./images/fit-boxing.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Boxing Fitness</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Dose</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END sched-content -->

\t\t\t\t\t\t\t<div class=\"schedule-content\" data-day=\"friday\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 276
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 276, $this->source), "html", null, true);
        echo "/./images/fit-yoga.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Yoga Programs</h3>
\t\t\t\t\t\t\t\t\t\t<span>James Smith</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 284
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 284, $this->source), "html", null, true);
        echo "/./images/fit-dumbell.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Body Building</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 292
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 292, $this->source), "html", null, true);
        echo "/./images/fit-boxing.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Boxing Fitness</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Dose</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 300
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 300, $this->source), "html", null, true);
        echo "/./images/fit-cycling.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Cycling Program</h3>
\t\t\t\t\t\t\t\t\t\t<span>Rita Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END sched-content -->

\t\t\t\t\t\t\t<div class=\"schedule-content\" data-day=\"saturday\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 312
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 312, $this->source), "html", null, true);
        echo "/./images/fit-dumbell.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Body Building</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 320
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 320, $this->source), "html", null, true);
        echo "/./images/fit-yoga.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Yoga Programs</h3>
\t\t\t\t\t\t\t\t\t\t<span>James Smith</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 328
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 328, $this->source), "html", null, true);
        echo "/./images/fit-cycling.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Cycling Program</h3>
\t\t\t\t\t\t\t\t\t\t<span>Rita Doe</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"program program-schedule\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 336
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 336, $this->source), "html", null, true);
        echo "/./images/fit-boxing.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t\t\t\t<small>06AM-7AM</small>
\t\t\t\t\t\t\t\t\t\t<h3>Boxing Fitness</h3>
\t\t\t\t\t\t\t\t\t\t<span>John Dose</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END sched-content -->
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"fh5co-parallax\" style=\"background-image: url(";
        // line 351
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 351, $this->source), "html", null, true);
        echo "/./images/home-image-3.jpg);\" data-stellar-background-ratio=\"0.5\">
\t\t\t<div class=\"overlay\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table\">
\t\t\t\t\t\t<div class=\"fh5co-intro fh5co-table-cell animate-box\">
\t\t\t\t\t\t\t<h1 class=\"text-center\">Commit To Be Fit</h1>
\t\t\t\t\t\t\t<p>Made with love by the fine folks at <a href=\"http://freehtml5.co\">FreeHTML5.co</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- end: fh5co-parallax -->
\t\t<div id=\"fh5co-programs-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"heading-section text-center animate-box\">
\t\t\t\t\t\t\t<h2>Our Programs</h2>
\t\t\t\t\t\t\t<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"program animate-box\">
\t\t\t\t\t\t\t<img src=\"";
        // line 377
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 377, $this->source), "html", null, true);
        echo "/./images/fit-dumbell.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t<h3>Body Combat</h3>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t<span><a href=\"#\" class=\"btn btn-default\">Join Now</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"program animate-box\">
\t\t\t\t\t\t\t<img src=\"";
        // line 385
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 385, $this->source), "html", null, true);
        echo "/./images/fit-yoga.svg\" alt=\"\">
\t\t\t\t\t\t\t<h3>Yoga Programs</h3>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t<span><a href=\"#\" class=\"btn btn-default\">Join Now</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"program animate-box\">
\t\t\t\t\t\t\t<img src=\"";
        // line 393
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 393, $this->source), "html", null, true);
        echo "/./images/fit-cycling.svg\" alt=\"\">
\t\t\t\t\t\t\t<h3>Cycling Program</h3>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t<span><a href=\"#\" class=\"btn btn-default\">Join Now</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"program animate-box\">
\t\t\t\t\t\t\t<img src=\"";
        // line 401
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 401, $this->source), "html", null, true);
        echo "/./images/fit-boxing.svg\" alt=\"Cycling\">
\t\t\t\t\t\t\t<h3>Boxing Fitness</h3>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t<span><a href=\"#\" class=\"btn btn-default\">Join Now</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"program animate-box\">
\t\t\t\t\t\t\t<img src=\"";
        // line 409
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 409, $this->source), "html", null, true);
        echo "/./images/fit-swimming.svg\" alt=\"\">
\t\t\t\t\t\t\t<h3>Swimming Program</h3>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t<span><a href=\"#\" class=\"btn btn-default\">Join Now</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"program animate-box\">
\t\t\t\t\t\t\t<img src=\"";
        // line 417
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 417, $this->source), "html", null, true);
        echo "/./images/fit-massage.svg\" alt=\"\">
\t\t\t\t\t\t\t<h3>Massage</h3>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t<span><a href=\"#\" class=\"btn btn-default\">Join Now</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"fh5co-team-section\" class=\"fh5co-lightgray-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"heading-section text-center animate-box\">
\t\t\t\t\t\t\t<h2>Meet Our Trainers</h2>
\t\t\t\t\t\t\t<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"team-section-grid animate-box\" style=\"background-image: url(";
        // line 438
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 438, $this->source), "html", null, true);
        echo "/./images/trainer-1.jpg);\">
\t\t\t\t\t\t\t<div class=\"overlay-section\">
\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t<span>Body Trainer</span>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
\t\t\t\t\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"team-section-grid animate-box\" style=\"background-image: url(";
        // line 454
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 454, $this->source), "html", null, true);
        echo "/./images/trainer-2.jpg);\">
\t\t\t\t\t\t\t<div class=\"overlay-section\">
\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t<h3>James Smith</h3>
\t\t\t\t\t\t\t\t\t<span>Swimming Trainer</span>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
\t\t\t\t\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"team-section-grid animate-box\" style=\"background-image: url(";
        // line 470
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 470, $this->source), "html", null, true);
        echo "/./images/trainer-3.jpg);\">
\t\t\t\t\t\t\t<div class=\"overlay-section\">
\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t<span>Chief Executive Officer</span>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"team-section-grid animate-box\" style=\"background-image: url(";
        // line 486
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 486, $this->source), "html", null, true);
        echo "/./images/trainer-4.jpg);\">
\t\t\t\t\t\t\t<div class=\"overlay-section\">
\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t<span>Chief Executive Officer</span>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"team-section-grid animate-box\" style=\"background-image: url(";
        // line 502
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 502, $this->source), "html", null, true);
        echo "/./images/trainer-5.jpg);\">
\t\t\t\t\t\t\t<div class=\"overlay-section\">
\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t<span>Chief Executive Officer</span>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"team-section-grid animate-box\" style=\"background-image: url(";
        // line 518
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 518, $this->source), "html", null, true);
        echo "/./images/trainer-6.jpg);\">
\t\t\t\t\t\t\t<div class=\"overlay-section\">
\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t<h3>John Doe</h3>
\t\t\t\t\t\t\t\t\t<span>Chief Executive Officer</span>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"fh5co-parallax\" style=\"background-image: url(";
        // line 536
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 536, $this->source), "html", null, true);
        echo "/./images/home-image-2.jpg);\" data-stellar-background-ratio=\"0.5\">
\t\t\t<div class=\"overlay\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 fh5co-table\">
\t\t\t\t\t\t<div class=\"fh5co-intro fh5co-table-cell box-area\">
\t\t\t\t\t\t\t<div class=\"animate-box\">
\t\t\t\t\t\t\t\t<h1>Fitness Classes this summer</h1>
\t\t\t\t\t\t\t\t<p>Pay now and get 25% Discount</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Become A Member</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- end: fh5co-parallax -->
\t\t<div id=\"fh5co-pricing-section\" class=\"fh5co-pricing fh5co-lightgray-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"heading-section text-center animate-box\">
\t\t\t\t\t\t\t<h2>Pricing Plan</h2>
\t\t\t\t\t\t\t<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"pricing\">
\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box animate-box\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan\">Starter</h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>9<small>/month</small></div>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 Cardio Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Swimming Lesson</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Aerobics</li>
\t\t\t\t\t\t\t\t<li>10 Zumba Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 Massage</li>
\t\t\t\t\t\t\t\t<li>10 Body Building</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box animate-box\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan\">Basic</h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>27<small>/month</small></div>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 Cardio Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Swimming Lesson</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Aerobics</li>
\t\t\t\t\t\t\t\t<li>10 Zumba Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 Massage</li>
\t\t\t\t\t\t\t\t<li>10 Body Building</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box animate-box popular\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan pricing-plan-offer\">Pro <span>Best Offer</span></h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>74<small>/month</small></div>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 Cardio Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Swimming Lesson</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Aerobics</li>
\t\t\t\t\t\t\t\t<li>10 Zumba Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 Massage</li>
\t\t\t\t\t\t\t\t<li>10 Body Building</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-select-plan btn-sm\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box animate-box\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan\">Unlimited</h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>140<small>/month</small></div>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 Cardio Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Swimming Lesson</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Aerobics</li>
\t\t\t\t\t\t\t\t<li>10 Zumba Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 Massage</li>
\t\t\t\t\t\t\t\t<li>10 Body Building</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div id=\"fh5co-blog-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"heading-section animate-box\">
\t\t\t\t\t\t\t\t<h2>Recent from Blog</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0\">
\t\t\t\t\t\t\t<div class=\"fh5co-blog animate-box\">
\t\t\t\t\t\t\t\t<div class=\"inner-post\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 652
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 652, $this->source), "html", null, true);
        echo "/./images/blog-1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"\"#>Starting new session of body building this summer</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\">Posted by: Admin</span>
\t\t\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble22\"></i></a></span>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Read More</a>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0\">
\t\t\t\t\t\t\t<div class=\"fh5co-blog animate-box\">
\t\t\t\t\t\t\t\t<div class=\"inner-post\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 666
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 666, $this->source), "html", null, true);
        echo "/./images/blog-1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"\"#>Starting new session of body building this summer</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\">Posted by: Admin</span>
\t\t\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble22\"></i></a></span>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Read More</a>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"heading-section animate-box\">
\t\t\t\t\t\t\t\t<h2>Upcoming Events</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0\">
\t\t\t\t\t\t\t<div class=\"fh5co-blog animate-box\">
\t\t\t\t\t\t\t\t<div class=\"meta-date text-center\">
\t\t\t\t\t\t\t\t\t<p><span class=\"date\">14</span><span>June</span><span>2016</span></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"desc desc2\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"\"#>Starting new session of body building this summer</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\">Posted by: Admin</span>
\t\t\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble22\"></i></a></span>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Read More</a>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0\">
\t\t\t\t\t\t\t<div class=\"fh5co-blog animate-box\">
\t\t\t\t\t\t\t\t<div class=\"meta-date text-center\">
\t\t\t\t\t\t\t\t\t<p><span class=\"date\">13</span><span>June</span><span>2016</span></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"desc desc2\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"\"#>Starting new session of body building this summer</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\">Posted by: Admin</span>
\t\t\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble22\"></i></a></span>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Read More</a>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- fh5co-blog-section -->
\t\t<footer>
\t\t\t<div id=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t
\t\t\t\t\t\t\t<h3 class=\"section-title\">About Us</h3>
\t\t\t\t\t\t\t";
        // line 724
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 724), 724, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t";
        // line 726
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t\t";
        // line 736
        echo "\t\t\t\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 736), 736, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t\t<h3 class=\"section-title\">Drop us a line</h3>
\t\t\t\t\t\t\t<form class=\"contact-form\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"name\" class=\"sr-only\">Name</label>
\t\t\t\t\t\t\t\t\t<input type=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"email\" class=\"sr-only\">Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"message\" class=\"sr-only\">Message</label>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"message\" rows=\"7\" placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" id=\"btn-submit\" class=\"btn btn-send-message btn-md\" value=\"Send Message\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row copy-right\">
\t\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center\">
\t\t\t\t\t\t\t";
        // line 768
        echo "\t\t\t\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 768), 768, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t<p>Copyright 2016 Free Html5 <a href=\"#\">Fitness</a>. All Rights Reserved. <br>Made with <i class=\"icon-heart3\"></i> by <a href=\"http://freehtml5.co/\" target=\"_blank\">Freehtml5.co</a> / Demo Images: <a href=\"https://unsplash.com/\" target=\"_blank\">Unsplash</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t

\t</div>
\t<!-- END fh5co-page -->

\t</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/my_theme/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  937 => 768,  908 => 736,  903 => 726,  899 => 724,  838 => 666,  821 => 652,  702 => 536,  681 => 518,  662 => 502,  643 => 486,  624 => 470,  605 => 454,  586 => 438,  562 => 417,  551 => 409,  540 => 401,  529 => 393,  518 => 385,  507 => 377,  478 => 351,  460 => 336,  449 => 328,  438 => 320,  427 => 312,  412 => 300,  401 => 292,  390 => 284,  379 => 276,  364 => 264,  353 => 256,  342 => 248,  331 => 240,  316 => 228,  305 => 220,  294 => 212,  283 => 204,  268 => 192,  257 => 184,  246 => 176,  235 => 168,  219 => 155,  208 => 147,  197 => 139,  186 => 131,  171 => 119,  160 => 111,  149 => 103,  138 => 95,  91 => 51,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/my_theme/templates/system/page.html.twig", "C:\\xampp\\htdocs\\fitness\\web\\themes\\custom\\my_theme\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

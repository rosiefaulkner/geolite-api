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

/* ipform.twig */
class __TwigTemplate_222ef066230ff17113f5b6efa8b44aa5c2fadc3370ebe200f99b15a8530c4606 extends Template
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
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>

\t\t<title>GeoLite 2</title>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.png\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css\"/>
\t\t<link rel=\"stylesheet\" href=\"/css/style.css\"/>
\t</head>

\t<body class=\"hm-gradient\">
\t\t<main>
\t\t\t<!-- Logo and text -->
\t\t\t<nav class=\"navbar bg-light\">
\t\t\t\t<a class=\"navbar-brand\" href=\"https://github.com/rosiefaulkner\" target=\"_blank\">
\t\t\t\t\t<img src=\"https://i.ibb.co/dJcSR39/trademark.png\" class=\"d-inline-block align-top rf-logo\" alt=\"rf-logo\"/>
\t\t\t\t\tRosie Faulkner
\t\t\t\t</a>
\t\t\t</nav>
\t\t\t<div
\t\t\t\tclass=\"container mt-4\">
\t\t\t\t<!-- Grid row -->
\t\t\t\t<div
\t\t\t\t\tclass=\"row\">
\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t<!-- Form Input -->
\t\t\t\t\t\t\t\t<form action=\"/\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t<h2 class=\"text-center py-4 font-bold font-up primary-text\">
\t\t\t\t\t\t\t\t\t\tFind the Location for an IP
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<div class=\"md-form\">
\t\t\t\t\t\t\t\t\t\t<em class=\"fa fa-pencil prefix grey-text\"></em>
\t\t\t\t\t\t\t\t\t\t<textarea type=\"text\" name=\"ip\" id=\"ip\" class=\"md-textarea icon\">";
        // line 42
        echo twig_escape_filter($this->env, ($context["ip"] ?? null), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t<label for=\"ip\">Input your IP Address. Feel free to input as many as you'd like.</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"submit\" class=\"btn btn-primary waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\tLocate
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<!-- Form Input -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div
\t\t\t\tclass=\"container mt-4\">
\t\t\t\t<!-- Grid row -->
\t\t\t\t<div
\t\t\t\t\tclass=\"row\">
\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card mardown-card\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t<!-- Form Output -->
\t\t\t\t\t\t\t\t<div class=\"md-form\">
\t\t\t\t\t\t\t\t\t<div class=\"output py-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary waves-effect waves-light\" onclick=\"getClientIP()\">
\t\t\t\t\t\t\t\t\t\t\t\tSearch For My IP
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://github.com/rosiefaulkner/geolite-api\" target=\"_blank\" rel=\"noopener noreferrer\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\tGithub
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"markdown-output\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 83
        if (((array_key_exists("ip", $context)) ? (_twig_default_filter(($context["ip"] ?? null))) : (""))) {
            // line 84
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"output-label copy-html\">Country Code:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 86
            echo twig_escape_filter($this->env, ($context["isoCode"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"output-label copy-html\">Postal Code:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 89
            echo twig_escape_filter($this->env, ($context["postalCode"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"output-label copy-html\">City Name:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 92
            echo twig_escape_filter($this->env, ($context["cityName"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"output-label copy-html\">Time Zone:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 95
            echo twig_escape_filter($this->env, ($context["timeZone"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"output-label copy-html\">Accuracy Radius:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 98
            echo twig_escape_filter($this->env, ($context["accuracyRadius"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 102
        if (((array_key_exists("error", $context)) ? (_twig_default_filter(($context["error"] ?? null))) : (""))) {
            // line 103
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Form Output -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</main>
\t\t<!-- jQuery library -->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\" defer></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\" defer></script>
\t\t<!-- Popper library -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" defer></script>
\t\t<!-- Bootstrap JS -->
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" defer></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js\" defer></script>
\t\t<!-- Scripts -->
\t\t<script async src=\"/js/script.js\"></script>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ipform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 105,  165 => 103,  163 => 102,  159 => 100,  154 => 98,  148 => 95,  142 => 92,  136 => 89,  130 => 86,  126 => 84,  124 => 83,  80 => 42,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ipform.twig", "/Applications/MAMP/htdocs/API/templates/ipform.twig");
    }
}

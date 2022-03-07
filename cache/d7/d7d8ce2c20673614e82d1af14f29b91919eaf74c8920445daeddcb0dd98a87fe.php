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
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    <title>GeoLite 2</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.png\">
    <link
      rel=\"stylesheet\"
      href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\"
    />
    <link
      rel=\"stylesheet\"
      href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css\"
    />
    <link
      rel=\"stylesheet\"
      href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css\"
    />
    <link rel=\"stylesheet\" href=\"/css/style.css\" />
  </head>

  <body class=\"hm-gradient\">
    <main>
      <!-- Logo and text -->
      <nav class=\"navbar bg-light\">
        <a
          class=\"navbar-brand\"
          href=\"https://github.com/rosiefaulkner\"
          target=\"_blank\"
        >
          <img
            src=\"https://i.ibb.co/dJcSR39/trademark.png\"
            class=\"d-inline-block align-top rf-logo\"
            alt=\"rf-logo\"
          />
          Rosie Faulkner
        </a>
      </nav>
      <div class=\"container mt-4\">
        <!-- Grid row -->
        <div class=\"row\">
          <!-- Grid column -->
          <div class=\"col\">
            <div class=\"card\">
              <div class=\"card-body\">
                <!-- Form Input -->
                <form
                  action=\"/\"
                  method=\"POST\"
                  enctype=\"multipart/form-data\"
                >
                  <h2 class=\"text-center py-4 font-bold font-up primary-text\">
                    Find the Location for an IP
                  </h2>
                  <div class=\"md-form\">
                    <em class=\"fa fa-pencil prefix grey-text\"></em>
                    <textarea
                      type=\"text\"
                      name=\"ip\"
                      id=\"ip\"
                      class=\"md-textarea icon\"
                    >
";
        // line 66
        echo twig_escape_filter($this->env, ($context["ip"] ?? null), "html", null, true);
        echo "</textarea
                    >
                    <label for=\"ip\">Input your IP Address. Feel free to input as many as you'd like.</label>
                  </div>
                  <div class=\"text-center\">
                    <button
                      type=\"submit\"
                      name=\"submit\"
                      class=\"btn btn-primary waves-effect waves-light\"
                    >
                      Locate
                    </button>
                  </div>
                </form>
                <!-- Form Input -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"container mt-4\">
        <!-- Grid row -->
        <div class=\"row\">
          <!-- Grid column -->
          <div class=\"col\">
            <div class=\"card mardown-card\">
              <div class=\"card-body\">
                <!-- Form Output -->
                <div class=\"md-form\">
                  <div class=\"output py-4\">
                    <div class=\"text-center\">
                      <button
                        type=\"button\"
                        class=\"btn btn-primary waves-effect waves-light\"
                        onclick=\"copyToClipboard('#copy-html')\"
                      >
                        Copy
                      </button>
                      <a
                        href=\"https://github.com/rosiefaulkner/geolite-api\"
                        target=\"_blank\"
                        rel=\"noopener noreferrer\"
                      >
                        <button
                          type=\"button\"
                          class=\"btn btn-primary waves-effect waves-light\"
                        >
                          Github
                        </button></a
                      >
                    </div>
                    <div id=\"markdown-output\">
                      <div id=\"copy-html\">";
        // line 119
        echo twig_escape_filter($this->env, ($context["html"] ?? null), "html", null, true);
        echo "</div>
                    </div>
                  </div>
                </div>
                <!-- Form Output -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- jQuery library -->
    <script
      src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"
      defer
    ></script>
    <script
      src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"
      defer
    ></script>
    <!-- Popper library -->
    <script
      src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\"
      defer
    ></script>
    <!-- Bootstrap JS -->
    <script
      src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\"
      defer
    ></script>
    <script
      src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js\"
      defer
    ></script>
    <!-- Scripts -->
    <script async src=\"/js/script.js\"></script>
  </body>
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
        return array (  160 => 119,  104 => 66,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ipform.twig", "/Applications/MAMP/htdocs/API/templates/ipform.twig");
    }
}

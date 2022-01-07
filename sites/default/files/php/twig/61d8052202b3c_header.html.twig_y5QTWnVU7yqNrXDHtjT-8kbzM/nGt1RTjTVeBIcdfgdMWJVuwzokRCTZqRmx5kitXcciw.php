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

/* @bootstrap_sub/includes/header.html.twig */
class __TwigTemplate_561913a3bbdfe7f004f19fcee83cba44114cadcb363520ab7c53ba53271d1368 extends \Twig\Template
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
        echo "<header id=\"header\" class=\"header site-header mb-5\">
    ";
        // line 2
        if (($context["is_front"] ?? null)) {
            // line 3
            echo "        <h1 class=\"sr-only d-none hidden visually-hidden\" hidden>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 3, $this->source), "html", null, true);
            echo "</h1>
    ";
        }
        // line 5
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 5)) {
            // line 6
            echo "    <div class=\"region-top-strip bg-secondary\">
        <div class=\"container d-flex flex-row-reverse align-items-center pt-3 pb-3\">
        ";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "
        </div> 
    </div>
    ";
        }
        // line 11
        echo " 
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\">
            <img src=\"/";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 15, $this->source), "html", null, true);
        echo "/logo.png\" width=\"50\" alt=\"Logo\">
        </a>
        <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button> 

        <div class=\"navbar-collapse collapse\">
            <div class=\"d-sm-inline-flex flex-row-reverse w-100\">
            ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "@bootstrap_sub/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  73 => 15,  69 => 14,  64 => 11,  57 => 8,  53 => 6,  50 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header site-header mb-5\">
    {% if is_front %}
        <h1 class=\"sr-only d-none hidden visually-hidden\" hidden>{{ site_name }}</h1>
    {% endif %}
    {% if page.top_header %}
    <div class=\"region-top-strip bg-secondary\">
        <div class=\"container d-flex flex-row-reverse align-items-center pt-3 pb-3\">
        {{ page.top_header }}
        </div> 
    </div>
    {% endif %} 
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('<front>') }}\">
            <img src=\"/{{ directory }}/logo.png\" width=\"50\" alt=\"Logo\">
        </a>
        <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button> 

        <div class=\"navbar-collapse collapse\">
            <div class=\"d-sm-inline-flex flex-row-reverse w-100\">
            {{ page.primary_menu }}
            </div>
        </div>
        </div>
    </nav>
</header>", "@bootstrap_sub/includes/header.html.twig", "/var/www/d9/themes/custom/bootstrap_sub/templates/includes/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3);
        static $functions = array("path" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['path']
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

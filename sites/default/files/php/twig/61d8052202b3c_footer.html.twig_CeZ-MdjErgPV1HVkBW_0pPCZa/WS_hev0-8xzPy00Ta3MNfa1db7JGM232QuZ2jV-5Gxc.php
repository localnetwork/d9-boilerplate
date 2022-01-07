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

/* @bootstrap_sub/includes/footer.html.twig */
class __TwigTemplate_3db82a26e4856d9ff485aa0572a0f0cb05dd97fc58422ab5d820c57ca7d66ba9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<footer class=\"site-footer\">
    ";
        // line 2
        $this->displayBlock('footer', $context, $blocks);
        // line 11
        echo "    
    <div class=\"footer-bottom bg-secondary text-white pt-3 pb-3\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col copyright\">
                    <p>&copy; ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["now"] ?? null), 16, $this->source), "Y"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 16, $this->source), "html", null, true);
        echo "</p> 
                </div>
                <div class=\"col developed text-end\">
                    <p>
                        <a class=\"text-primary\" href=\"https://halcyonwebdesign.com.ph/\" target=\"_blank\">Web Design by: Halcyon Web Design</a>
                    </p>
                </div> 
            </div> 
        </div>
    </div> 
</footer>  ";
    }

    // line 2
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 3)) {
            // line 4
            echo "        <div class=\"footer-top bg-light py-4\">
            <div class=\"container\">
            ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo " 
            </div> 
        </div>   
        ";
        }
        // line 9
        echo " 
    ";
    }

    public function getTemplateName()
    {
        return "@bootstrap_sub/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 9,  80 => 6,  76 => 4,  73 => 3,  69 => 2,  52 => 16,  45 => 11,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"site-footer\">
    {% block footer %}
        {% if page.footer %}
        <div class=\"footer-top bg-light py-4\">
            <div class=\"container\">
            {{ page.footer }} 
            </div> 
        </div>   
        {% endif %} 
    {% endblock %}
    
    <div class=\"footer-bottom bg-secondary text-white pt-3 pb-3\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col copyright\">
                    <p>&copy; {{ now|date('Y') }} {{ site_name }}</p> 
                </div>
                <div class=\"col developed text-end\">
                    <p>
                        <a class=\"text-primary\" href=\"https://halcyonwebdesign.com.ph/\" target=\"_blank\">Web Design by: Halcyon Web Design</a>
                    </p>
                </div> 
            </div> 
        </div>
    </div> 
</footer>  ", "@bootstrap_sub/includes/footer.html.twig", "/var/www/d9/themes/custom/bootstrap_sub/templates/includes/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 2, "if" => 3);
        static $filters = array("escape" => 16, "date" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape', 'date'],
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

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

/* themes/custom/bootstrap_sub/templates/layout/page.html.twig */
class __TwigTemplate_73febc635102b7bb95af93287d88f29028c7d003f3aad8180014be16b609e621 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<div id=\"page-wrapper\" class=\"page-wrapper d-flex flex-column min-vh-100\">
  ";
        // line 71
        $this->loadTemplate("@bootstrap_sub/includes/header.html.twig", "themes/custom/bootstrap_sub/templates/layout/page.html.twig", 71)->display($context);
        // line 72
        echo "  <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix flex-grow-1\">
    ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 101
        echo " 
  </div>

  ";
        // line 105
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_full_row", [], "any", false, false, true, 105)) {
            // line 106
            echo "    <section class=\"bottom-full-row container-fluid\">
      ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_full_row", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "
    </section>
  ";
        }
        // line 110
        echo "  ";
        // line 111
        echo "  ";
        $this->loadTemplate("@bootstrap_sub/includes/footer.html.twig", "themes/custom/bootstrap_sub/templates/layout/page.html.twig", 111)->display($context);
        // line 112
        echo "</div>";
    }

    // line 73
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "      <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 74, $this->source), "html", null, true);
        echo "\">
        ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 75)) {
            echo " 
          ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 78
        echo "        <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
            <main";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 79, $this->source), "html", null, true);
        echo ">
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
              </section>
            </main>
          ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 85)) {
            // line 86
            echo "            <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 86, $this->source), "html", null, true);
            echo ">
              <aside class=\"section\" role=\"complementary\">
                ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
              </aside>
            </div>
          ";
        }
        // line 92
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 92)) {
            // line 93
            echo "            <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 93, $this->source), "html", null, true);
            echo ">
              <aside class=\"section\" role=\"complementary\">
                ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
              </aside>
            </div>
          ";
        }
        // line 99
        echo "        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/bootstrap_sub/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 99,  133 => 95,  127 => 93,  124 => 92,  117 => 88,  111 => 86,  109 => 85,  103 => 82,  97 => 79,  94 => 78,  89 => 76,  85 => 75,  80 => 74,  76 => 73,  72 => 112,  69 => 111,  67 => 110,  61 => 107,  58 => 106,  55 => 105,  50 => 101,  48 => 73,  45 => 72,  43 => 71,  40 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Barrio's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.top_header: Items for the top header region.
 * - page.top_header_form: Items for the top header form region.
 * - page.header: Items for the header region.
 * - page.header_form: Items for the header form region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Theme variables:
 * - navbar_top_attributes: Items for the header region.
 * - navbar_attributes: Items for the header region.
 * - content_attributes: Items for the header region.
 * - sidebar_first_attributes: Items for the highlighted region.
 * - sidebar_second_attributes: Items for the primary menu region.
 * - sidebar_collapse: If the sidebar_first will collapse.
 *
 * @see template_preprocess_page()
 * @see bootstrap_barrio_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page-wrapper\" class=\"page-wrapper d-flex flex-column min-vh-100\">
  {% include \"@bootstrap_sub/includes/header.html.twig\" %}
  <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix flex-grow-1\">
    {% block content %}
      <div id=\"main\" class=\"{{ container }}\">
        {% if page.breadcrumb %} 
          {{ page.breadcrumb }}
        {% endif %}
        <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
            <main{{ content_attributes }}>
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                {{ page.content }}
              </section>
            </main>
          {% if page.sidebar_first %}
            <div{{ sidebar_first_attributes }}>
              <aside class=\"section\" role=\"complementary\">
                {{ page.sidebar_first }}
              </aside>
            </div>
          {% endif %}
          {% if page.sidebar_second %}
            <div{{ sidebar_second_attributes }}>
              <aside class=\"section\" role=\"complementary\">
                {{ page.sidebar_second }}
              </aside>
            </div>
          {% endif %}
        </div>
      </div>
    {% endblock %} 
  </div>

  {# Bottom Full Row #}
  {% if page.bottom_full_row %}
    <section class=\"bottom-full-row container-fluid\">
      {{ page.bottom_full_row }}
    </section>
  {% endif %}
  {# FOOTER #}
  {% include \"@bootstrap_sub/includes/footer.html.twig\" %}
</div>", "themes/custom/bootstrap_sub/templates/layout/page.html.twig", "/var/www/d9/themes/custom/bootstrap_sub/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 71, "block" => 73, "if" => 105);
        static $filters = array("escape" => 107);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'block', 'if'],
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

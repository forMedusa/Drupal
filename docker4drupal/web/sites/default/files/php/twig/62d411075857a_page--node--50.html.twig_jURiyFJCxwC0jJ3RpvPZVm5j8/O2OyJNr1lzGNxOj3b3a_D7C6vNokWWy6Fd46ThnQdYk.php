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

/* themes/custom/butterscotch/templates/page--node--50.html.twig */
class __TwigTemplate_4a378a923ce5fefa7871574bcec73bae extends \Twig\Template
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
        // line 46
        echo "<nav class=\"navbar\">
     <!-- LOGO -->
     <div class=\"logo\"><a href=\"/\">Dead Phone</a></div>
     <!-- NAVIGATION MENU -->
     <ul class=\"nav-links\">
       <!-- USING CHECKBOX HACK -->
       <input type=\"checkbox\" id=\"checkbox_toggle\" />
       <label for=\"checkbox_toggle\" class=\"hamburger\">&#9776;</label>
       <!-- NAVIGATION MENUS -->
       <div class=\"menu\">
         <li><a href=\"/\">Home</a></li>
         <li><a href=\"/node/34\">About Us</a></li>
         <li><a href=\"/node/41\">Testimonial Page</a></li>
       </div>
     </ul>
   </nav>
<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
  </header>

  ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "
  ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "

  ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "

  ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "

  ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 79
        echo "
    <div class=\"layout-content\">
      ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
      <div class=\"buttonDiv\">
      <button id=\"buyNow\" type=\"button\" onclick=\"location.href='https://www.amazon.in/Google-Pixel-Kinda-Coral-Storage/dp/B09LZ5G39D/ref=sr_1_2?keywords=google+pixel+6+5g&qid=1658004333&s=electronics&sr=1-2'\">Buy Now</button>
      </div>
    </div>";
        // line 86
        echo "
    ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 87)) {
            // line 88
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 92
        echo "
    ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 93)) {
            // line 94
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 98
        echo "
  </main>

  ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 101)) {
            // line 102
            echo "    <footer role=\"contentinfo\">
      ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 106
        echo "
</div>";
        // line 108
        echo "<footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
  <div class=\"social-wrapper\">
    <ul>
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png\" alt=\"Twitter Logo\" class=\"twitter-icon\"></a>
      </li>
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"https://www.mchenryvillage.com/images/instagram-icon.png\" alt=\"Instagram Logo\" class=\"instagram-icon\"></a>
      </li>
     
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"http://www.iconarchive.com/download/i54037/danleech/simple/facebook.ico\" alt=\"Facebook Logo\" class=\"facebook-icon\"></a>
      </li>
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"http://icons.iconarchive.com/icons/marcus-roberto/google-play/256/Google-plus-icon.png\" alt=\"Googleplus Logo\" class=\"googleplus-icon\"></a>
      </li>
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"https://lh3.googleusercontent.com/j_RwVcM9d47aBDW5DS1VkdxUYCkDUCB6wZglv4x-9SmsxO0VaFs7Csh-FmKRCWz9r_Ef=w170\" alt=\"Youtube Logo\" class=\"youtube-icon\"></a>
      </li>
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"http://www.iconarchive.com/download/i94258/designbolts/vector-foursquare/Foursquare-2.ico\" alt=\"Foursquare Logo\" class=\"foursquare-icon\"></a>
      </li>
    </ul>
  </div>

  <nav class=\"footer-nav\" role=\"navigation\">
    <p>Copyright &copy; 2022-
      <?php echo date(\"Y\"); ?> Amaan Raja. All rights reserved.</p>
  </nav>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/butterscotch/templates/page--node--50.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 108,  146 => 106,  140 => 103,  137 => 102,  135 => 101,  130 => 98,  124 => 95,  121 => 94,  119 => 93,  116 => 92,  110 => 89,  107 => 88,  105 => 87,  102 => 86,  95 => 81,  91 => 79,  85 => 75,  80 => 73,  75 => 71,  70 => 69,  66 => 68,  60 => 65,  39 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
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
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<nav class=\"navbar\">
     <!-- LOGO -->
     <div class=\"logo\"><a href=\"/\">Dead Phone</a></div>
     <!-- NAVIGATION MENU -->
     <ul class=\"nav-links\">
       <!-- USING CHECKBOX HACK -->
       <input type=\"checkbox\" id=\"checkbox_toggle\" />
       <label for=\"checkbox_toggle\" class=\"hamburger\">&#9776;</label>
       <!-- NAVIGATION MENUS -->
       <div class=\"menu\">
         <li><a href=\"/\">Home</a></li>
         <li><a href=\"/node/34\">About Us</a></li>
         <li><a href=\"/node/41\">Testimonial Page</a></li>
       </div>
     </ul>
   </nav>
<div class=\"layout-container\">

  <header role=\"banner\">
    {{ page.header }}
  </header>

  {{ page.primary_menu }}
  {{ page.secondary_menu }}

  {{ page.breadcrumb }}

  {{ page.highlighted }}

  {{ page.help }}

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    <div class=\"layout-content\">
      {{ page.content }}
      <div class=\"buttonDiv\">
      <button id=\"buyNow\" type=\"button\" onclick=\"location.href='https://www.amazon.in/Google-Pixel-Kinda-Coral-Storage/dp/B09LZ5G39D/ref=sr_1_2?keywords=google+pixel+6+5g&qid=1658004333&s=electronics&sr=1-2'\">Buy Now</button>
      </div>
    </div>{# /.layout-content #}

    {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div>{# /.layout-container #}
<footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
  <div class=\"social-wrapper\">
    <ul>
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png\" alt=\"Twitter Logo\" class=\"twitter-icon\"></a>
      </li>
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"https://www.mchenryvillage.com/images/instagram-icon.png\" alt=\"Instagram Logo\" class=\"instagram-icon\"></a>
      </li>
     
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"http://www.iconarchive.com/download/i54037/danleech/simple/facebook.ico\" alt=\"Facebook Logo\" class=\"facebook-icon\"></a>
      </li>
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"http://icons.iconarchive.com/icons/marcus-roberto/google-play/256/Google-plus-icon.png\" alt=\"Googleplus Logo\" class=\"googleplus-icon\"></a>
      </li>
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"https://lh3.googleusercontent.com/j_RwVcM9d47aBDW5DS1VkdxUYCkDUCB6wZglv4x-9SmsxO0VaFs7Csh-FmKRCWz9r_Ef=w170\" alt=\"Youtube Logo\" class=\"youtube-icon\"></a>
      </li>
      <li>
        <a href=\"#\" target=\"_blank\">
          <img src=\"http://www.iconarchive.com/download/i94258/designbolts/vector-foursquare/Foursquare-2.ico\" alt=\"Foursquare Logo\" class=\"foursquare-icon\"></a>
      </li>
    </ul>
  </div>

  <nav class=\"footer-nav\" role=\"navigation\">
    <p>Copyright &copy; 2022-
      <?php echo date(\"Y\"); ?> Amaan Raja. All rights reserved.</p>
  </nav>
</footer>
", "themes/custom/butterscotch/templates/page--node--50.html.twig", "/var/www/html/web/themes/custom/butterscotch/templates/page--node--50.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 87);
        static $filters = array("escape" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/yg_booster/templates/page--front.html.twig */
class __TwigTemplate_90ff2f07300843bd91f768a4e411ce752d7a8c77778cdcfce33a2aa943ef44a1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6, "block" => 7, "for" => 42, "set" => 79];
        $filters = ["raw" => 43, "escape" => 145, "render" => 150, "t" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for', 'set'],
                ['raw', 'escape', 'render', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
<header id=\"fh5co-header\" role=\"banner\">
  <nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\" ole=\"navigation\">
    <div class=\"container-fluid\">
     <div class=\"navbar-header\">
      ";
        // line 6
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 7
            echo "        ";
            $this->displayBlock('navbar', $context, $blocks);
            // line 30
            echo "  ";
        }
        // line 31
        echo "    </div>
  </nav>
</header>

  <!-- END .header -->



  ";
        // line 39
        if (($context["is_front"] ?? null)) {
            // line 40
            echo "     <div class=\"fh5co-slider\">
      <div class=\"owl-carousel owl-carousel-fullwidth\">
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 43
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      </div>
    </div>
  ";
        }
        // line 48
        echo "


  <div id=\"fh5co-main\">

";
        // line 54
        $this->displayBlock('main', $context, $blocks);
        // line 134
        echo "


  </div>

  <footer id=\"fh5co-footer\">

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 col-sm-6\">
          <div class=\"fh5co-footer-widget\">
            <h2 class=\"fh5co-footer-logo\">";
        // line 145
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h2>
            <p>";
        // line 146
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["desc"] ?? null)), "html", null, true);
        echo "</p>
          </div>
          <div class=\"fh5co-footer-widget\">
            <ul class=\"fh5co-social\">
               ";
        // line 150
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook"] ?? null)))) {
            // line 151
            echo "                 <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-facebook\"></i></a></li>
               ";
        }
        // line 153
        echo "               ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter"] ?? null)))) {
            // line 154
            echo "                 <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-twitter\"></i></a></li>
               ";
        }
        // line 156
        echo "               ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram"] ?? null)))) {
            // line 157
            echo "                 <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-instagram\"></i></a></li>
               ";
        }
        // line 159
        echo "               ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["linkedin"] ?? null)))) {
            // line 160
            echo "                 <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-linkedin\"></i></a></li>
               ";
        }
        // line 162
        echo "               ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["youtube"] ?? null)))) {
            // line 163
            echo "                 <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-youtube\"></i></a></li>
               ";
        }
        // line 165
        echo "            </ul>
          </div>
        </div>

        <div class=\"col-md-2 col-sm-6\">
          <div class=\"fh5co-footer-widget top-level\">
             ";
        // line 171
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_left", [])), "html", null, true);
        echo "
          </div>
        </div>

        <div class=\"visible-sm-block clearfix\"></div>

        <div class=\"col-md-2 col-sm-6\">
          <div class=\"fh5co-footer-widget top-level\">
             ";
        // line 179
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_middle", [])), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"col-md-2 col-sm-6\">
          <div class=\"fh5co-footer-widget top-level\">
             ";
        // line 184
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_right", [])), "html", null, true);
        echo "
          </div>
        </div>
      </div>

      <div class=\"row fh5co-row-padded fh5co-copyright\">
        <div class=\"col-md-5\">
          <p><small>&copy;";
        // line 191
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copy"] ?? null)), "html", null, true);
        echo " <br>HTML design by: <a href=\"https://freehtml5.co\">FreeHTML5.co</a> | Drupal theme by: <a href=\"http://www.youngglobes.com\" target=\"_blank\" rel=\"nofollow\">Young Globes</a></small></p>
        </div>
      </div>
    </div>

  </footer>


";
    }

    // line 7
    public function block_navbar($context, array $blocks = [])
    {
        // line 8
        echo "           <div class=\"sitebrand\">
              ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
            </div>
          ";
        // line 12
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 13
            echo "            <button type=\"button\" class=\"navbar-toggle collapsed js-fh5co-nav-toggle fh5co-nav-toggle\" data-toggle=\"collapse\" data-target=\"#fh5co-navbar\">
              <span class=\"sr-only\">";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          ";
        }
        // line 20
        echo "      </div>
        ";
        // line 22
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 23
            echo "      <div id=\"fh5co-navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </ul>
      </div>
        ";
        }
        // line 29
        echo "    ";
    }

    // line 54
    public function block_main($context, array $blocks = [])
    {
        // line 55
        echo "  <div role=\"main\" class=\"blog-container js-quickedit-main-content\">
    <div class=\"\">


      ";
        // line 60
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 61
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 66
            echo "      ";
        }
        // line 67
        echo "
      ";
        // line 69
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 70
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 75
            echo "      ";
        }
        // line 76
        echo "
      ";
        // line 78
        echo "      ";
        // line 79
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 80
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 81
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 82
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 83
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("") : (""))];
        // line 86
        echo "      <section class=\"main-content-region-1\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">
<!--
        ";
        // line 89
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 90
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 93
            echo "        ";
        }
        echo " -->

        ";
        // line 96
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 97
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 100
            echo "        ";
        }
        // line 101
        echo "
        ";
        // line 103
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 104
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 107
            echo "        ";
        }
        // line 108
        echo "
        <!-- ";
        // line 110
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 111
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 114
            echo "        ";
        }
        echo " -->

        ";
        // line 117
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 121
        echo "      </section>

      ";
        // line 124
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 125
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 130
            echo "      ";
        }
        // line 131
        echo "   </div>
   </div>
";
    }

    // line 61
    public function block_header($context, array $blocks = [])
    {
        // line 62
        echo "          <div class=\"col-sm-12\" role=\"heading\">

          </div>
        ";
    }

    // line 70
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 71
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 90
    public function block_highlighted($context, array $blocks = [])
    {
        // line 91
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 97
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 98
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
        echo "
          ";
    }

    // line 104
    public function block_action_links($context, array $blocks = [])
    {
        // line 105
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 111
    public function block_help($context, array $blocks = [])
    {
        // line 112
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 117
    public function block_content($context, array $blocks = [])
    {
        // line 118
        echo "          <a id=\"main-content\"></a>
          ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 125
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 126
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_booster/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 127,  483 => 126,  480 => 125,  474 => 119,  471 => 118,  468 => 117,  461 => 112,  458 => 111,  451 => 105,  448 => 104,  441 => 98,  438 => 97,  431 => 91,  428 => 90,  421 => 72,  418 => 71,  415 => 70,  408 => 62,  405 => 61,  399 => 131,  396 => 130,  393 => 125,  390 => 124,  386 => 121,  383 => 117,  377 => 114,  374 => 111,  371 => 110,  368 => 108,  365 => 107,  362 => 104,  359 => 103,  356 => 101,  353 => 100,  350 => 97,  347 => 96,  341 => 93,  338 => 90,  335 => 89,  329 => 86,  327 => 83,  326 => 82,  325 => 81,  324 => 80,  323 => 79,  321 => 78,  318 => 76,  315 => 75,  312 => 70,  309 => 69,  306 => 67,  303 => 66,  300 => 61,  297 => 60,  291 => 55,  288 => 54,  284 => 29,  277 => 25,  273 => 23,  270 => 22,  267 => 20,  258 => 14,  255 => 13,  252 => 12,  247 => 9,  244 => 8,  241 => 7,  228 => 191,  218 => 184,  210 => 179,  199 => 171,  191 => 165,  185 => 163,  182 => 162,  176 => 160,  173 => 159,  167 => 157,  164 => 156,  158 => 154,  155 => 153,  149 => 151,  147 => 150,  140 => 146,  136 => 145,  123 => 134,  121 => 54,  114 => 48,  109 => 45,  100 => 43,  96 => 42,  92 => 40,  90 => 39,  80 => 31,  77 => 30,  74 => 7,  72 => 6,  65 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_booster/templates/page--front.html.twig", "/var/www/html/yg_booster/themes/yg_booster/templates/page--front.html.twig");
    }
}

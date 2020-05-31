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

/* themes/upjv/templates/page.html.twig */
class __TwigTemplate_59fd768067839dc083dcb8a3903eef9129deeb4f75708876a1daea0512cacc06 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'hautContent' => [$this, 'block_hautContent'],
            'content' => [$this, 'block_content'],
            'logo' => [$this, 'block_logo'],
            'first_footer' => [$this, 'block_first_footer'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 74, "if" => 117];
        $filters = ["t" => 73, "escape" => 119];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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
        // line 71
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
      ";
        // line 74
        $this->displayBlock('head', $context, $blocks);
        // line 116
        echo "    </header>
    ";
        // line 117
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 118
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 119
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 120
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 124
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 125
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 132
            echo "    ";
        }
        // line 133
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 134
        $this->displayBlock('hautContent', $context, $blocks);
        // line 146
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 173
        echo "    </div>
    ";
        // line 174
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", []))) {
            // line 175
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 176
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 177
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", [])), "html", null, true);
            echo "
          ";
            // line 178
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])), "html", null, true);
            echo "
          ";
            // line 179
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 183
        echo "    <logo class=\"pt-3\">
      ";
        // line 184
        $this->displayBlock('logo', $context, $blocks);
        // line 189
        echo "    </logo>
    <first_footer class=\"py-3\">
      ";
        // line 191
        $this->displayBlock('first_footer', $context, $blocks);
        // line 196
        echo "    </first_footer>
    <footer>
      ";
        // line 198
        $this->displayBlock('footer', $context, $blocks);
        // line 203
        echo "    </footer>
  </div>
</div>
";
    }

    // line 74
    public function block_head($context, array $blocks = [])
    {
        // line 75
        echo "        ";
        if ((($this->getAttribute(($context["page"] ?? null), "secondary_menu", []) || $this->getAttribute(($context["page"] ?? null), "top_header", [])) || $this->getAttribute(($context["page"] ?? null), "top_header_form", []))) {
            // line 76
            echo "          <nav";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 77
            if (($context["container_navbar"] ?? null)) {
                // line 78
                echo "          <div class=\"container\">
          ";
            }
            // line 80
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
              ";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header", [])), "html", null, true);
            echo "
              ";
            // line 82
            if ($this->getAttribute(($context["page"] ?? null), "top_header_form", [])) {
                // line 83
                echo "                <div class=\"form-inline navbar-form float-right\">
                  ";
                // line 84
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header_form", [])), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 87
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 88
                echo "          </div>
          ";
            }
            // line 90
            echo "          </nav>
        ";
        }
        // line 92
        echo "        <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null)), "html", null, true);
        echo ">
          ";
        // line 93
        if (($context["container_navbar"] ?? null)) {
            // line 94
            echo "          <div class=\"container\">
          ";
        }
        // line 96
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
            ";
        // line 97
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "header_form", []))) {
            // line 98
            echo "              <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
                ";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
                ";
            // line 101
            if ($this->getAttribute(($context["page"] ?? null), "header_form", [])) {
                // line 102
                echo "                  <div class=\"form-inline navbar-form float-right\">
                    ";
                // line 103
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_form", [])), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 106
            echo "\t          </div>
            ";
        }
        // line 108
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 109
            echo "              <button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 111
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 112
            echo "          </div>
          ";
        }
        // line 114
        echo "        </nav>
      ";
    }

    // line 125
    public function block_featured($context, array $blocks = [])
    {
        // line 126
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 134
    public function block_hautContent($context, array $blocks = [])
    {
        // line 135
        echo "        <div id=\"main\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 137
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 140
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "hautContent", [])), "html", null, true);
        echo "
                </section>
              </main>
          </div>
        </div>
      ";
    }

    // line 146
    public function block_content($context, array $blocks = [])
    {
        // line 147
        echo "        <div id=\"main\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
          ";
        // line 148
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              ";
        // line 150
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 151
            echo "              <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null)), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 153
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 157
        echo "              <main";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 160
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 163
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 164
            echo "              <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null)), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 166
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 170
        echo "          </div>
        </div>
      ";
    }

    // line 184
    public function block_logo($context, array $blocks = [])
    {
        // line 185
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "logo", [])) {
            // line 186
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
            echo "
          ";
        }
        // line 188
        echo "      ";
    }

    // line 191
    public function block_first_footer($context, array $blocks = [])
    {
        // line 192
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "first_footer", [])) {
            // line 193
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "first_footer", [])), "html", null, true);
            echo "
          ";
        }
        // line 195
        echo "      ";
    }

    // line 198
    public function block_footer($context, array $blocks = [])
    {
        // line 199
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 200
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
          ";
        }
        // line 202
        echo "      ";
    }

    public function getTemplateName()
    {
        return "themes/upjv/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 202,  410 => 200,  407 => 199,  404 => 198,  400 => 195,  394 => 193,  391 => 192,  388 => 191,  384 => 188,  378 => 186,  375 => 185,  372 => 184,  366 => 170,  359 => 166,  353 => 164,  351 => 163,  345 => 160,  338 => 157,  331 => 153,  325 => 151,  323 => 150,  318 => 148,  313 => 147,  310 => 146,  300 => 140,  294 => 137,  288 => 135,  285 => 134,  277 => 128,  273 => 127,  270 => 126,  267 => 125,  262 => 114,  258 => 112,  255 => 111,  251 => 109,  248 => 108,  244 => 106,  238 => 103,  235 => 102,  233 => 101,  229 => 100,  225 => 98,  223 => 97,  218 => 96,  214 => 94,  212 => 93,  207 => 92,  203 => 90,  199 => 88,  196 => 87,  190 => 84,  187 => 83,  185 => 82,  181 => 81,  176 => 80,  172 => 78,  170 => 77,  165 => 76,  162 => 75,  159 => 74,  152 => 203,  150 => 198,  146 => 196,  144 => 191,  140 => 189,  138 => 184,  135 => 183,  128 => 179,  124 => 178,  120 => 177,  116 => 176,  113 => 175,  111 => 174,  108 => 173,  105 => 146,  103 => 134,  100 => 133,  97 => 132,  94 => 125,  91 => 124,  84 => 120,  80 => 119,  77 => 118,  75 => 117,  72 => 116,  70 => 74,  66 => 73,  62 => 71,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/upjv/templates/page.html.twig", "C:\\wamp64\\www\\WebDesign\\Site\\themes\\upjv\\templates\\page.html.twig");
    }
}

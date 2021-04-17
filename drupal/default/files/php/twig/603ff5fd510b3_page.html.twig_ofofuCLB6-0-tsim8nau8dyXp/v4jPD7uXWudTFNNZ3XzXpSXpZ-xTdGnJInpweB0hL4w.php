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

/* sites/new.jornada.nmsu.edu/themes/likable/likable/templates/page.html.twig */
class __TwigTemplate_e6487224941b963e3c3bd9996470040338be69d01e0713f6e82de6630173671c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 65, "set" => 167];
        $filters = ["escape" => 67, "striptags" => 92, "t" => 93];
        $functions = ["attach_library" => 84];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'striptags', 't'],
                ['attach_library']
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
        // line 51
        echo "<div id=\"page-wrapper\">

  <nav class=\"navbar navbar-default navbar-static-top\">
    <div class=\"container\">
\t  <div class=\"row\">
\t    <div class=\"col-xs-12 nopadding\">
\t\t
\t\t  <div class=\"navbar-header\">
\t\t    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-main\" aria-expanded=\"false\">
\t\t      <span class=\"icon-bar\"></span>
\t\t\t  <span class=\"icon-bar\"></span>
\t\t      <span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t
\t\t\t";
        // line 65
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 66
            echo "\t\t\t  <div id=\"logo\">
\t\t\t    ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
\t\t\t  </div>
\t\t\t";
        }
        // line 70
        echo "\t      </div>
\t 
\t\t  ";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 73
            echo "\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-main\">
\t\t\t\t";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "\t\t 
\t\t\t</div>
\t\t  ";
        }
        // line 77
        echo "\t\t  
\t\t</div>
\t  </div>
    </div>
  </nav>
  
  ";
        // line 83
        if (($context["is_front"] ?? null)) {
            // line 84
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("likable/slider-js"), "html", null, true);
            echo "
    ";
            // line 85
            if ((($context["slideshow_display"] ?? null) == 1)) {
                // line 86
                echo "      <div id=\"slidebox\" class=\"flexslider\">
        <ul class=\"slides\">
          <li>
            <img src=\"";
                // line 89
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide1_image"] ?? null)), "html", null, true);
                echo "\"/>
            ";
                // line 90
                if ((($context["slide1_head"] ?? null) || ($context["slide1_desc"] ?? null))) {
                    // line 91
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 92
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide1_head"] ?? null))), "html", null, true);
                    echo "</h2>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide1_desc"] ?? null))), "html", null, true);
                    echo "
                <a class=\"readmore\" href=\"";
                    // line 93
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide1_url"] ?? null))), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More"));
                    echo "</a>
              </div>
            ";
                }
                // line 96
                echo "          </li>
          <li>
            <img src=\"";
                // line 98
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide2_image"] ?? null)), "html", null, true);
                echo "\"/>
            ";
                // line 99
                if ((($context["slide2_head"] ?? null) || ($context["slide2_desc"] ?? null))) {
                    // line 100
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 101
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide2_head"] ?? null))), "html", null, true);
                    echo "</h2>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide2_desc"] ?? null))), "html", null, true);
                    echo "
                <a class=\"readmore\" href=\"";
                    // line 102
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide2_url"] ?? null))), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More"));
                    echo "</a>
              </div>
            ";
                }
                // line 105
                echo "          </li>
          <li>
            <img src=\"";
                // line 107
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide3_image"] ?? null)), "html", null, true);
                echo "\"/>
            ";
                // line 108
                if ((($context["slide3_head"] ?? null) || ($context["slide3_desc"] ?? null))) {
                    // line 109
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 110
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide3_head"] ?? null))), "html", null, true);
                    echo "</h2>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide3_desc"] ?? null))), "html", null, true);
                    echo "
                <a class=\"readmore\" href=\"";
                    // line 111
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide3_url"] ?? null))), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More"));
                    echo "</a>
              </div>
            ";
                }
                // line 114
                echo "          </li>
        </ul><!-- /slides -->
        <div class=\"overlay\"></div>
      </div>
    ";
            }
            // line 119
            echo "  ";
        }
        // line 120
        echo "  
  ";
        // line 121
        if (((($this->getAttribute(($context["page"] ?? null), "top_first", []) || $this->getAttribute(($context["page"] ?? null), "top_second", [])) || $this->getAttribute(($context["page"] ?? null), "top_third", [])) || $this->getAttribute(($context["page"] ?? null), "top_fourth", []))) {
            // line 122
            echo "    <div id=\"top-columns\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 125
            if ($this->getAttribute(($context["page"] ?? null), "top_first", [])) {
                // line 126
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("top-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["top_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 127
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 130
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "top_second", [])) {
                // line 131
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("top-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["top_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 132
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 135
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "top_third", [])) {
                // line 136
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("top-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["top_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 137
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 140
            echo "\t\t  ";
            if ($this->getAttribute(($context["page"] ?? null), "top_fourth", [])) {
                // line 141
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("top-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["top_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 142
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_fourth", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 145
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 149
        echo "
  ";
        // line 150
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 151
            echo "    <div id=\"highlighted-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 155
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 161
        echo "
  <div id=\"main\">
    <div class=\"container\">
      <div class=\"row\">
\t  
        ";
        // line 166
        if (($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 167
            echo "          ";
            $context["main_col"] = 6;
            // line 168
            echo "\t\t";
        } elseif (($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) || $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 169
            echo "\t\t  ";
            $context["main_col"] = 9;
            // line 170
            echo "        ";
        } else {
            // line 171
            echo "          ";
            $context["main_col"] = 12;
            // line 172
            echo "        ";
        }
        // line 173
        echo "\t\t
\t\t";
        // line 174
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 175
            echo "          <aside id=\"sidebar\" class=\"col-xs-12 col-sm-3\" role=\"complementary\">
            ";
            // line 176
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </aside> 
        ";
        }
        // line 179
        echo "\t\t
\t\t<div class=\"";
        // line 180
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("col-xs-12 col-sm-" . $this->sandbox->ensureToStringAllowed(($context["main_col"] ?? null))), "html", null, true);
        echo "\">
          <section id=\"content\" role=\"main\" class=\"clearfix\">
\t\t  
\t\t\t";
        // line 183
        if ((((($context["show_breadcrumbs"] ?? null) == 1) && $this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])) &&  !($context["is_front"] ?? null))) {
            echo " 
\t\t\t  ";
            // line 184
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo " 
            ";
        }
        // line 186
        echo "\t\t\t
\t\t\t";
        // line 187
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
        echo "
\t\t\t\t\t\t
            ";
        // line 189
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 190
            echo "              <div id=\"content_top\">
                ";
            // line 191
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
              </div>
            ";
        }
        // line 194
        echo "\t\t\t
            <div id=\"content-wrap\">
              ";
        // line 196
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
              ";
        // line 197
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
            </div>
\t\t\t
          </section>
        </div>
\t\t
\t\t";
        // line 203
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 204
            echo "          <aside id=\"sidebar\" class=\"col-xs-12 col-sm-3\" role=\"complementary\">
            ";
            // line 205
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </aside> 
        ";
        }
        // line 208
        echo "\t\t        
      </div>
    </div>
  </div>

  ";
        // line 213
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_fourth", []))) {
            // line 214
            echo "    <div id=\"bottom-columns\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 217
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 218
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("bottom-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["bottom_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 219
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 222
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 223
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("bottom-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["bottom_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 224
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 227
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 228
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("bottom-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["bottom_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 229
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 232
            echo "\t\t  ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_fourth", [])) {
                // line 233
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("bottom-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["bottom_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 234
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_fourth", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 237
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 241
        echo "
  <footer class=\"site-footer\">
    <div class=\"container\">
\t  ";
        // line 244
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 245
            echo "\t\t<div id=\"footer-columns\">
\t\t\t<div class=\"row\">
\t\t\t  ";
            // line 247
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 248
                echo "\t\t\t\t<div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
\t\t\t\t  ";
                // line 249
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  ";
            }
            // line 252
            echo "\t\t\t  ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 253
                echo "\t\t\t\t<div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
\t\t\t\t  ";
                // line 254
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  ";
            }
            // line 257
            echo "\t\t\t  ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 258
                echo "\t\t\t\t<div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
\t\t\t\t  ";
                // line 259
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  ";
            }
            // line 262
            echo "\t\t\t  ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 263
                echo "\t\t\t\t<div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
\t\t\t\t  ";
                // line 264
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  ";
            }
            // line 267
            echo "\t\t\t</div>
\t\t</div>
\t  ";
        }
        // line 270
        echo "
        <div class=\"row\">
          <div class=\"col-xs-12\">
            ";
        // line 273
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 274
            echo "\t\t\t  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
\t\t\t";
        }
        // line 276
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Copyright"));
        echo " &copy; ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["this_year"] ?? null)), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo " USDA-ARS Jornada Experimental Range</a>. 
\t\t  </div>
        </div>
      </div>
    </footer>
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "sites/new.jornada.nmsu.edu/themes/likable/likable/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 276,  556 => 274,  554 => 273,  549 => 270,  544 => 267,  538 => 264,  533 => 263,  530 => 262,  524 => 259,  519 => 258,  516 => 257,  510 => 254,  505 => 253,  502 => 252,  496 => 249,  491 => 248,  489 => 247,  485 => 245,  483 => 244,  478 => 241,  472 => 237,  466 => 234,  461 => 233,  458 => 232,  452 => 229,  447 => 228,  444 => 227,  438 => 224,  433 => 223,  430 => 222,  424 => 219,  419 => 218,  417 => 217,  412 => 214,  410 => 213,  403 => 208,  397 => 205,  394 => 204,  392 => 203,  383 => 197,  379 => 196,  375 => 194,  369 => 191,  366 => 190,  364 => 189,  359 => 187,  356 => 186,  351 => 184,  347 => 183,  341 => 180,  338 => 179,  332 => 176,  329 => 175,  327 => 174,  324 => 173,  321 => 172,  318 => 171,  315 => 170,  312 => 169,  309 => 168,  306 => 167,  304 => 166,  297 => 161,  288 => 155,  282 => 151,  280 => 150,  277 => 149,  271 => 145,  265 => 142,  260 => 141,  257 => 140,  251 => 137,  246 => 136,  243 => 135,  237 => 132,  232 => 131,  229 => 130,  223 => 127,  218 => 126,  216 => 125,  211 => 122,  209 => 121,  206 => 120,  203 => 119,  196 => 114,  188 => 111,  182 => 110,  179 => 109,  177 => 108,  173 => 107,  169 => 105,  161 => 102,  155 => 101,  152 => 100,  150 => 99,  146 => 98,  142 => 96,  134 => 93,  128 => 92,  125 => 91,  123 => 90,  119 => 89,  114 => 86,  112 => 85,  107 => 84,  105 => 83,  97 => 77,  91 => 74,  88 => 73,  86 => 72,  82 => 70,  76 => 67,  73 => 66,  71 => 65,  55 => 51,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sites/new.jornada.nmsu.edu/themes/likable/likable/templates/page.html.twig", "/drupal8/drupal-8.9.13/sites/new.jornada.nmsu.edu/themes/likable/likable/templates/page.html.twig");
    }
}

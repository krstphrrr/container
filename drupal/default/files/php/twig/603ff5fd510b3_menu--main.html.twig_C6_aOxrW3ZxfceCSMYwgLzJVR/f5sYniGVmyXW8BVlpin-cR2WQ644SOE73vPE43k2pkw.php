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

/* sites/new.jornada.nmsu.edu/themes/likable/likable/templates/menu--main.html.twig */
class __TwigTemplate_2b10eed7b793afeffca0fee115e04c069fa76505e7e27145c23d961230825d48 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 1, "macro" => 5, "if" => 7, "for" => 13];
        $filters = ["escape" => 17];
        $functions = ["link" => 27];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link']
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
        $context["menus"] = $this;
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 5
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 6
            echo "  ";
            $context["menus"] = $this;
            // line 7
            echo "    ";
            if (($context["items"] ?? null)) {
                // line 8
                echo "      ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 9
                    echo "\t    <ul class=\"nav navbar-nav\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
      ";
                } else {
                    // line 11
                    echo "\t    <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
      ";
                }
                // line 13
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 14
                    echo "\t    ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 15
                        echo "\t      ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 16
                            echo "\t\t    <li class=\"dropdown\">
\t\t      <a href=\"";
                            // line 17
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                            echo "\" class=\"dropdown-toggle\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                            echo " <span class=\"caret\"></span></a>
\t\t      ";
                            // line 18
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
\t\t    </li>
\t      ";
                        } else {
                            // line 21
                            echo "\t\t    <li class=\"dropdown-submenu\">
\t\t      <a href=\"";
                            // line 22
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                            echo "\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                            echo "</a>
\t\t      ";
                            // line 23
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
\t\t    </li>
\t      ";
                        }
                        // line 26
                        echo "\t    ";
                    } else {
                        // line 27
                        echo "\t      <li ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                        echo ">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                        echo "</li>
\t    ";
                    }
                    // line 29
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "sites/new.jornada.nmsu.edu/themes/likable/likable/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 30,  150 => 29,  142 => 27,  139 => 26,  133 => 23,  127 => 22,  124 => 21,  118 => 18,  112 => 17,  109 => 16,  106 => 15,  103 => 14,  98 => 13,  94 => 11,  90 => 9,  87 => 8,  84 => 7,  81 => 6,  67 => 5,  60 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sites/new.jornada.nmsu.edu/themes/likable/likable/templates/menu--main.html.twig", "/drupal8/drupal-8.9.13/sites/new.jornada.nmsu.edu/themes/likable/likable/templates/menu--main.html.twig");
    }
}

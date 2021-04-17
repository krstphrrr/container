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

/* sites/new.jornada.nmsu.edu/themes/likable/likable/templates/menu-local-tasks.html.twig */
class __TwigTemplate_596a9962491dce5e96e46daa5a46a0021cfe2e944009afaa093cfa85484447a0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16];
        $filters = ["t" => 18, "escape" => 19];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 16
        if (($context["primary"] ?? null)) {
            // line 17
            echo "  <div class=\"tabs-wrapper\">
    <h2 class=\"visually-hidden\">";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Primary tabs"));
            echo "</h2>
    <ul class=\"tabs primary clearfix\">";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null)), "html", null, true);
            echo "</ul>
  </div>
";
        }
        // line 22
        if (($context["secondary"] ?? null)) {
            // line 23
            echo "  <div class=\"tabs-wrapper\">
    <h2 class=\"visually-hidden\">";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Secondary tabs"));
            echo "</h2>
    <ul class=\"tabs secondary clearfix\">";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null)), "html", null, true);
            echo "</ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "sites/new.jornada.nmsu.edu/themes/likable/likable/templates/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  75 => 24,  72 => 23,  70 => 22,  64 => 19,  60 => 18,  57 => 17,  55 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sites/new.jornada.nmsu.edu/themes/likable/likable/templates/menu-local-tasks.html.twig", "/drupal8/drupal-8.9.13/sites/new.jornada.nmsu.edu/themes/likable/likable/templates/menu-local-tasks.html.twig");
    }
}

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

/* themes/drupal8_zymphonies_theme/drupal8_zymphonies_theme/templates/content/comment.html.twig */
class __TwigTemplate_8f14dbcb7372dbd652a4e507039b91693b2484526fe5094ddd23cd25a2a77986 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 67, "set" => 71];
        $filters = ["escape" => 68];
        $functions = ["attach_library" => 68];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
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
        // line 67
        if (($context["threaded"] ?? null)) {
            // line 68
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/indented"), "html", null, true);
            echo "
";
        }
        // line 71
        $context["classes"] = [0 => "comment", 1 => "js-comment", 2 => (((        // line 74
($context["status"] ?? null) != "published")) ? (($context["status"] ?? null)) : ("")), 3 => (($this->getAttribute($this->getAttribute(        // line 75
($context["comment"] ?? null), "owner", []), "anonymous", [])) ? ("by-anonymous") : ("")), 4 => (((        // line 76
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == $this->getAttribute(($context["commented_entity"] ?? null), "getOwnerId", [], "method")))) ? ((("by-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["commented_entity"] ?? null), "getEntityTypeId", [], "method"))) . "-author")) : (""))];
        // line 79
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

  ";
        // line 86
        echo "
  <mark class=\"hidden\" data-comment-timestamp=\"";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null)), "html", null, true);
        echo "\"></mark>

  <footer class=\"comment-wrap\">
    <div class=\"author-details\">
      ";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null)), "html", null, true);
        echo "
      ";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["permalink"] ?? null)), "html", null, true);
        echo "
      ";
        // line 93
        if (($context["parent"] ?? null)) {
            // line 94
            echo "        <p class=\"parent visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null)), "html", null, true);
            echo "</p>
      ";
        }
        // line 96
        echo "    </div>

    <div class=\"author-comments\">
      <p class=\"comment-submitted\">";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted"] ?? null)), "html", null, true);
        echo "</p>
      <div";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method")), "html", null, true);
        echo ">
        ";
        // line 101
        if (($context["title"] ?? null)) {
            // line 102
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
          <h3";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
          ";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
        ";
        }
        // line 106
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      </div>
    </div>   

  </footer>
  
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme/drupal8_zymphonies_theme/templates/content/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 106,  126 => 104,  120 => 103,  115 => 102,  113 => 101,  109 => 100,  105 => 99,  100 => 96,  94 => 94,  92 => 93,  88 => 92,  84 => 91,  77 => 87,  74 => 86,  68 => 79,  66 => 76,  65 => 75,  64 => 74,  63 => 71,  57 => 68,  55 => 67,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupal8_zymphonies_theme/drupal8_zymphonies_theme/templates/content/comment.html.twig", "/var/www/html/themes/drupal8_zymphonies_theme/drupal8_zymphonies_theme/templates/content/comment.html.twig");
    }
}

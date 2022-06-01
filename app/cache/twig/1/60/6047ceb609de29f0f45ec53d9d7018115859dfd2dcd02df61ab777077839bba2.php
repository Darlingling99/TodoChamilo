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

/* default/user_portal/course_categories.tpl */
class __TwigTemplate_0303fae5442af2202f74d47bcfc2f2d5ae28b3bf63f9dccd14ce4f7b5ff08e35 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<p class=\"lead\">";
        echo get_lang("MyCoursePageCategoryIntroduction");
        echo "</p>
<ul class=\"media-list\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["course_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "        ";
            if ($context["category"]) {
                // line 5
                echo "            <li class=\"media\">
                <div class=\"media-left\">
                    <a href=\"";
                // line 7
                echo (($this->getAttribute(($context["_p"] ?? null), "web_self", []) . "?") . twig_urlencode_filter(["category" => $this->getAttribute($context["category"], "code", [])]));
                echo "\">
                        <img src=\"";
                // line 8
                echo (($this->getAttribute($context["category"], "image", [])) ? (($this->getAttribute(($context["_p"] ?? null), "web_upload", []) . $this->getAttribute($context["category"], "image", []))) : (Display::get_icon_path("session_default.png", 128)));
                echo "\"
                             alt=\"";
                // line 9
                echo $this->getAttribute($context["category"], "name", []);
                echo "\" width=\"200\" class=\"media-object\">
                    </a>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">";
                // line 13
                echo $this->getAttribute($context["category"], "name", []);
                echo "</h4>
                    <p>";
                // line 14
                echo $this->getAttribute($context["category"], "code", []);
                echo "</p>
                    ";
                // line 15
                if ($this->getAttribute($context["category"], "description", [])) {
                    // line 16
                    echo "                        <p>";
                    echo $this->getAttribute($context["category"], "description", []);
                    echo "</p>
                    ";
                }
                // line 18
                echo "                    <a href=\"";
                echo (($this->getAttribute(($context["_p"] ?? null), "web_self", []) . "?") . twig_urlencode_filter(["category" => $this->getAttribute($context["category"], "code", [])]));
                echo "\" class=\"btn btn-default\">
                        ";
                // line 19
                echo get_lang("View");
                echo " <span class=\"fa fa-arrow-right\" aria-hidden=\"true\"></span>
                    </a>
                </div>
            </li>
        ";
            }
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "default/user_portal/course_categories.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  91 => 24,  83 => 19,  78 => 18,  72 => 16,  70 => 15,  66 => 14,  62 => 13,  55 => 9,  51 => 8,  47 => 7,  43 => 5,  40 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/user_portal/course_categories.tpl", "/var/www/html/chamilo16/main/template/default/user_portal/course_categories.tpl");
    }
}

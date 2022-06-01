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

/* default//user_portal/grid_courses_without_category.tpl */
class __TwigTemplate_b4dc452ce8262d63650a5396e775486b52e6900b1d7f5969482cf6782e00e496 extends \Twig\Template
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
        if ( !twig_test_empty(($context["courses"] ?? null))) {
            // line 2
            echo "    <div class=\"grid-courses\">
        <div class=\"row\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "                <div class=\"col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"items my-courses\">
                        <div class=\"image\">
                            ";
                // line 8
                ob_start(function () { return ''; });
                // line 9
                echo "                                ";
                if ($this->getAttribute($context["item"], "is_special_course", [])) {
                    // line 10
                    echo "                                    <div class=\"pin\">";
                    echo $this->getAttribute($context["item"], "icon", []);
                    echo "</div>
                                ";
                }
                // line 12
                echo "                                ";
                if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                    // line 13
                    echo "                                    <img src=\"";
                    echo $this->getAttribute($context["item"], "image", []);
                    echo "\" class=\"img-responsive\">
                                ";
                } else {
                    // line 15
                    echo "                                    ";
                    ob_start(function () { return ''; });
                    // line 16
                    echo "                                    <a title=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "\">
                                        <img src=\"";
                    // line 17
                    echo $this->getAttribute($context["item"], "image", []);
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" class=\"img-responsive\">
                                    </a>
                                    ";
                    $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 20
                    echo "                                    ";
                    echo Security::remove_XSS(($context["title"] ?? null));
                    echo "
                                ";
                }
                // line 22
                echo "                                ";
                if (($this->getAttribute($context["item"], "category", []) != "")) {
                    // line 23
                    echo "                                    <span class=\"category\">";
                    echo $this->getAttribute($context["item"], "category", []);
                    echo "</span>
                                    <div class=\"cribbon\"></div>
                                ";
                }
                // line 26
                echo "                                ";
                if (($this->getAttribute($context["item"], "edit_actions", []) != "")) {
                    // line 27
                    echo "                                    <div class=\"admin-actions\">
                                        ";
                    // line 28
                    if (($this->getAttribute($context["item"], "document", []) == "")) {
                        // line 29
                        echo "                                            <a class=\"btn btn-default btn-sm\" href=\"";
                        echo $this->getAttribute($context["item"], "edit_actions", []);
                        echo "\">
                                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                            </a>
                                        ";
                    } else {
                        // line 33
                        echo "                                            <div class=\"btn-group\" role=\"group\">
                                                <a class=\"btn btn-default btn-sm\" href=\"";
                        // line 34
                        echo $this->getAttribute($context["item"], "edit_actions", []);
                        echo "\">
                                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
                        // line 37
                        echo $this->getAttribute($context["item"], "document", []);
                        echo "
                                            </div>
                                        ";
                    }
                    // line 40
                    echo "                                    </div>
                                ";
                }
                // line 42
                echo "                            ";
                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 43
                echo "                            ";
                echo Security::remove_XSS(($context["title"] ?? null));
                echo "
                        </div>
                        <div class=\"description\">
                            <div class=\"block-title\">
                                ";
                // line 47
                ob_start(function () { return ''; });
                // line 48
                echo "                                <h4 class=\"title\" title=\"";
                echo $this->getAttribute($context["item"], "title", []);
                echo "\">
                                    ";
                // line 49
                if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                    // line 50
                    echo "                                        ";
                    echo $this->getAttribute($context["item"], "title_cut", []);
                    echo "
                                        <span class=\"code-title\">";
                    // line 51
                    echo $this->getAttribute($context["item"], "code_course", []);
                    echo "</span>";
                    echo $this->getAttribute($context["item"], "url_marker", []);
                    echo "
                                    ";
                } else {
                    // line 53
                    echo "                                        <a title=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "\">";
                    echo $this->getAttribute($context["item"], "title_cut", []);
                    echo "</a>
                                        <span class=\"code-title\">";
                    // line 54
                    echo $this->getAttribute($context["item"], "code_course", []);
                    echo "</span>";
                    echo $this->getAttribute($context["item"], "url_marker", []);
                    echo "
                                    ";
                }
                // line 56
                echo "                                </h4>
                                ";
                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 58
                echo "                                ";
                echo Security::remove_XSS(($context["title"] ?? null));
                echo "
                            </div>
                            <div class=\"block-author\">
                                ";
                // line 61
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", [])) > 6)) {
                    // line 62
                    echo "                                    <a id=\"plist-";
                    echo $this->getAttribute($context["loop"], "index", []);
                    echo "\"
                                        data-trigger=\"focus\" tabindex=\"0\" role=\"button\"
                                       class=\"btn btn-default panel_popover\" data-toggle=\"popover\"
                                       title=\"";
                    // line 65
                    echo get_lang("CourseTeachers");
                    echo "\" data-html=\"true\">
                                        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                                    </a>
                                    <div id=\"popover-content-plist-";
                    // line 68
                    echo $this->getAttribute($context["loop"], "index", []);
                    echo "\" class=\"hide\">
                                        ";
                    // line 69
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                        // line 70
                        echo "                                        <div class=\"popover-teacher\">
                                            <a href=\"";
                        // line 71
                        echo $this->getAttribute($context["teacher"], "url", []);
                        echo "\" class=\"ajax\"
                                               data-title=\"";
                        // line 72
                        echo $this->getAttribute($context["teacher"], "firstname", []);
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", []);
                        echo "\" >
                                                <img title=\"";
                        // line 73
                        echo $this->getAttribute($context["teacher"], "firstname", []);
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", []);
                        echo "\" src=\"";
                        echo $this->getAttribute($context["teacher"], "avatar", []);
                        echo "\"/>
                                            </a>
                                            <div class=\"teachers-details\">
                                                <h5>
                                                    <a href=\"";
                        // line 77
                        echo $this->getAttribute($context["teacher"], "url", []);
                        echo "\" class=\"ajax\"
                                                       data-title=\"";
                        // line 78
                        echo $this->getAttribute($context["teacher"], "firstname", []);
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", []);
                        echo "\">
                                                        ";
                        // line 79
                        echo $this->getAttribute($context["teacher"], "firstname", []);
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", []);
                        echo "
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "                                    </div>
                                ";
                } else {
                    // line 87
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                        // line 88
                        echo "                                        ";
                        if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", [])) <= 2)) {
                            // line 89
                            echo "                                            <a href=\"";
                            echo $this->getAttribute($context["teacher"], "url", []);
                            echo "\" class=\"ajax\"
                                               data-title=\"";
                            // line 90
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "\" title=\"";
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "\">
                                                <img title=\"";
                            // line 91
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "\" src=\"";
                            echo $this->getAttribute($context["teacher"], "avatar", []);
                            echo "\"/>
                                            </a>
                                            <div class=\"teachers-details\">
                                                <h5>
                                                    <a href=\"";
                            // line 95
                            echo $this->getAttribute($context["teacher"], "url", []);
                            echo "\" class=\"ajax\"
                                                       data-title=\"";
                            // line 96
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "\">
                                                        ";
                            // line 97
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "
                                                    </a>
                                                </h5>
                                                <p>";
                            // line 100
                            echo get_lang("Teacher");
                            echo "</p>
                                            </div>
                                        ";
                        } elseif ((twig_length_filter($this->env, $this->getAttribute(                        // line 102
$context["item"], "teachers", [])) <= 6)) {
                            // line 103
                            echo "                                            <a href=\"";
                            echo $this->getAttribute($context["teacher"], "url", []);
                            echo "\" class=\"ajax\"
                                               data-title=\"";
                            // line 104
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "\">
                                                <img title=\"";
                            // line 105
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "\" src=\"";
                            echo $this->getAttribute($context["teacher"], "avatar", []);
                            echo "\"/>
                                            </a>
                                        ";
                        }
                        // line 108
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "                                ";
                }
                // line 110
                echo "                            </div>
                            ";
                // line 111
                if ($this->getAttribute($context["item"], "notifications", [])) {
                    // line 112
                    echo "                                <div class=\"notifications\">";
                    echo $this->getAttribute($context["item"], "notifications", []);
                    echo "</div>
                            ";
                }
                // line 114
                echo "

                            ";
                // line 116
                $this->loadTemplate(api_find_template("user_portal/grid_course_student_info.tpl"), "default//user_portal/grid_courses_without_category.tpl", 116)->display(twig_array_merge($context, ["student_info" => $this->getAttribute($context["item"], "student_info", [])]));
                // line 117
                echo "
                            ";
                // line 118
                echo $this->getAttribute($context["item"], "unregister_button", []);
                echo "
                        </div>
                    </div>
                </div>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default//user_portal/grid_courses_without_category.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 123,  390 => 118,  387 => 117,  385 => 116,  381 => 114,  375 => 112,  373 => 111,  370 => 110,  367 => 109,  361 => 108,  351 => 105,  345 => 104,  340 => 103,  338 => 102,  333 => 100,  325 => 97,  319 => 96,  315 => 95,  304 => 91,  294 => 90,  289 => 89,  286 => 88,  281 => 87,  277 => 85,  263 => 79,  257 => 78,  253 => 77,  242 => 73,  236 => 72,  232 => 71,  229 => 70,  225 => 69,  221 => 68,  215 => 65,  208 => 62,  206 => 61,  199 => 58,  195 => 56,  188 => 54,  179 => 53,  172 => 51,  167 => 50,  165 => 49,  160 => 48,  158 => 47,  150 => 43,  147 => 42,  143 => 40,  137 => 37,  131 => 34,  128 => 33,  120 => 29,  118 => 28,  115 => 27,  112 => 26,  105 => 23,  102 => 22,  96 => 20,  88 => 17,  81 => 16,  78 => 15,  72 => 13,  69 => 12,  63 => 10,  60 => 9,  58 => 8,  53 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default//user_portal/grid_courses_without_category.tpl", "/var/www/html/chamilo16/main/template/default/user_portal/grid_courses_without_category.tpl");
    }
}

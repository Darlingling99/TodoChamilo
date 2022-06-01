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

/* default//user_portal/grid_courses_with_category.tpl */
class __TwigTemplate_151cc9df285e0ad9a1b64af0d6ad13429315bae12fb6215c94df6523e7892f3f extends \Twig\Template
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
        echo "<div class=\"grid-courses\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "        ";
            $context["nameCategory"] = $this->getAttribute($context["category"], "title_category", []);
            // line 4
            echo "        ";
            $context["idCategory"] = $this->getAttribute($context["category"], "id_category", []);
            // line 5
            echo "        <div id=\"category_";
            echo ($context["idCategory"] ?? null);
            echo "\" class=\"panel panel-default\">
            <div class=\"panel-heading\">
                ";
            // line 7
            echo ($context["nameCategory"] ?? null);
            echo "
            </div>
            <div class=\"panel-body\">
                <div class=\"row\">
                    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "courses", []));
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
                // line 12
                echo "                        <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            <div class=\"items\">
                                <div class=\"image\">
                                    ";
                // line 15
                ob_start(function () { return ''; });
                // line 16
                echo "                                        ";
                if ($this->getAttribute($context["item"], "is_special_course", [])) {
                    // line 17
                    echo "                                            <div class=\"pin\">";
                    echo $this->getAttribute($context["item"], "icon", []);
                    echo "</div>
                                        ";
                }
                // line 19
                echo "                                        ";
                if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                    // line 20
                    echo "                                            <img src=\"";
                    echo $this->getAttribute($context["item"], "image", []);
                    echo "\" class=\"img-responsive\">
                                        ";
                } else {
                    // line 22
                    echo "                                            <a title=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "\">
                                                <img src=\"";
                    // line 23
                    echo $this->getAttribute($context["item"], "image", []);
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" class=\"img-responsive\">
                                            </a>
                                        ";
                }
                // line 26
                echo "                                        ";
                if (($this->getAttribute($context["item"], "category", []) != "")) {
                    // line 27
                    echo "                                            <span class=\"category\">";
                    echo $this->getAttribute($context["item"], "category", []);
                    echo "</span>
                                            <div class=\"cribbon\"></div>
                                        ";
                }
                // line 30
                echo "                                        ";
                if (($this->getAttribute($context["item"], "edit_actions", []) != "")) {
                    // line 31
                    echo "                                            <div class=\"admin-actions\">
                                                ";
                    // line 32
                    if (($this->getAttribute($context["item"], "document", []) == "")) {
                        // line 33
                        echo "                                                    <a class=\"btn btn-default btn-sm\" href=\"";
                        echo $this->getAttribute($context["item"], "edit_actions", []);
                        echo "\">
                                                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                    </a>
                                                ";
                    } else {
                        // line 37
                        echo "                                                    <div class=\"btn-group\" role=\"group\">
                                                        <a class=\"btn btn-default btn-sm\" href=\"";
                        // line 38
                        echo $this->getAttribute($context["item"], "edit_actions", []);
                        echo "\">
                                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                        </a>
                                                        ";
                        // line 41
                        echo $this->getAttribute($context["item"], "document", []);
                        echo "
                                                    </div>
                                                ";
                    }
                    // line 44
                    echo "                                            </div>
                                        ";
                }
                // line 46
                echo "                                    ";
                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 47
                echo "                                    ";
                echo Security::remove_XSS(($context["title"] ?? null));
                echo "
                                </div>
                                <div class=\"description\">
                                    <div class=\"block-title\">
                                        <h4 class=\"title\" title=\"";
                // line 51
                echo $this->getAttribute($context["item"], "title", []);
                echo "\">
                                            ";
                // line 52
                if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                    // line 53
                    echo "                                                ";
                    echo $this->getAttribute($context["item"], "title_cut", []);
                    echo "
                                                <span class=\"code-title\">";
                    // line 54
                    echo $this->getAttribute($context["item"], "code_course", []);
                    echo "</span>";
                    echo $this->getAttribute($context["item"], "url_marker", []);
                    echo "
                                            ";
                } else {
                    // line 56
                    echo "                                                <a title=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "\">";
                    echo $this->getAttribute($context["item"], "title_cut", []);
                    echo "</a>
                                                <span class=\"code-title\">";
                    // line 57
                    echo $this->getAttribute($context["item"], "code_course", []);
                    echo "</span>";
                    echo $this->getAttribute($context["item"], "url_marker", []);
                    echo "
                                            ";
                }
                // line 59
                echo "                                        </h4>
                                    </div>
                                    <div class=\"block-author\">
                                        ";
                // line 62
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", [])) > 6)) {
                    // line 63
                    echo "                                            <a id=\"plist-";
                    echo $this->getAttribute($context["loop"], "index", []);
                    echo "\" data-trigger=\"focus\" tabindex=\"0\" role=\"button\" class=\"btn btn-default panel_popover\" data-toggle=\"popover\" title=\"";
                    echo get_lang("CourseTeachers");
                    echo "\" data-html=\"true\">
                                                <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                                            </a>
                                            <div id=\"popover-content-plist-";
                    // line 66
                    echo $this->getAttribute($context["loop"], "index", []);
                    echo "\" class=\"hide\">
                                                ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                        // line 68
                        echo "                                                    <div class=\"popover-teacher\">
                                                        <a href=\"";
                        // line 69
                        echo $this->getAttribute($context["teacher"], "url", []);
                        echo "\" class=\"ajax\"
                                                           data-title=\"";
                        // line 70
                        echo $this->getAttribute($context["teacher"], "firstname", []);
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", []);
                        echo "\" >
                                                            <img title=\"";
                        // line 71
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
                        // line 75
                        echo $this->getAttribute($context["teacher"], "url", []);
                        echo "\" class=\"ajax\"
                                                                   data-title=\"";
                        // line 76
                        echo $this->getAttribute($context["teacher"], "firstname", []);
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", []);
                        echo "\">
                                                                    ";
                        // line 77
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
                    // line 83
                    echo "                                            </div>
                                        ";
                } else {
                    // line 85
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                        // line 86
                        echo "                                                ";
                        if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", [])) <= 2)) {
                            // line 87
                            echo "                                                    <a href=\"";
                            echo $this->getAttribute($context["teacher"], "url", []);
                            echo "\" class=\"ajax\"
                                                       data-title=\"";
                            // line 88
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "\" title=\"";
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "\">
                                                        <img title=\"";
                            // line 89
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
                            // line 93
                            echo $this->getAttribute($context["teacher"], "url", []);
                            echo "\" class=\"ajax\"
                                                               data-title=\"";
                            // line 94
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "\">
                                                                ";
                            // line 95
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "
                                                            </a>
                                                        </h5>
                                                        <p>";
                            // line 98
                            echo get_lang("Teacher");
                            echo "</p>
                                                    </div>
                                                ";
                        } elseif ((twig_length_filter($this->env, $this->getAttribute(                        // line 100
$context["item"], "teachers", [])) <= 6)) {
                            // line 101
                            echo "                                                    <a href=\"";
                            echo $this->getAttribute($context["teacher"], "url", []);
                            echo "\" class=\"ajax\"
                                                       data-title=\"";
                            // line 102
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "\">
                                                        <img title=\"";
                            // line 103
                            echo $this->getAttribute($context["teacher"], "firstname", []);
                            echo " ";
                            echo $this->getAttribute($context["teacher"], "lastname", []);
                            echo "\" src=\"";
                            echo $this->getAttribute($context["teacher"], "avatar", []);
                            echo "\"/>
                                                    </a>
                                                ";
                        }
                        // line 106
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "                                        ";
                }
                // line 108
                echo "                                    </div>
                                    ";
                // line 109
                if ($this->getAttribute($context["item"], "notifications", [])) {
                    // line 110
                    echo "                                        <div class=\"notifications\">";
                    echo $this->getAttribute($context["item"], "notifications", []);
                    echo "</div>
                                    ";
                }
                // line 112
                echo "
                                    ";
                // line 113
                $this->loadTemplate(api_find_template("user_portal/grid_course_student_info.tpl"), "default//user_portal/grid_courses_with_category.tpl", 113)->display(twig_array_merge($context, ["student_info" => $this->getAttribute($context["item"], "student_info", [])]));
                // line 114
                echo "                                </div>
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
            // line 118
            echo "                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default//user_portal/grid_courses_with_category.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 122,  414 => 118,  397 => 114,  395 => 113,  392 => 112,  386 => 110,  384 => 109,  381 => 108,  378 => 107,  372 => 106,  362 => 103,  356 => 102,  351 => 101,  349 => 100,  344 => 98,  336 => 95,  330 => 94,  326 => 93,  315 => 89,  305 => 88,  300 => 87,  297 => 86,  292 => 85,  288 => 83,  274 => 77,  268 => 76,  264 => 75,  253 => 71,  247 => 70,  243 => 69,  240 => 68,  236 => 67,  232 => 66,  223 => 63,  221 => 62,  216 => 59,  209 => 57,  200 => 56,  193 => 54,  188 => 53,  186 => 52,  182 => 51,  174 => 47,  171 => 46,  167 => 44,  161 => 41,  155 => 38,  152 => 37,  144 => 33,  142 => 32,  139 => 31,  136 => 30,  129 => 27,  126 => 26,  118 => 23,  111 => 22,  105 => 20,  102 => 19,  96 => 17,  93 => 16,  91 => 15,  86 => 12,  69 => 11,  62 => 7,  56 => 5,  53 => 4,  50 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default//user_portal/grid_courses_with_category.tpl", "/var/www/html/chamilo16/main/template/default/user_portal/grid_courses_with_category.tpl");
    }
}

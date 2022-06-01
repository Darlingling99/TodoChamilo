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

/* default//user_portal/grid_session.tpl */
class __TwigTemplate_9130477347b696cae1bf9c967464dd8b50ea3d411543a6c69d698a7f25807f03 extends \Twig\Template
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
        $context["group_courses"] = api_get_configuration_value("view_grid_courses_grouped_categories_in_sessions");
        // line 2
        echo "
";
        // line 114
        echo "
";
        // line 115
        $context["blocks"] = $this;
        // line 116
        echo "
";
        // line 117
        $context["session_image"] = Display::get_image("window_list.png", 32, $this->getAttribute(($context["row"] ?? null), "title", []));
        // line 118
        echo "
";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["session"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 120
            echo "    ";
            $context["collapsable"] = "";
            // line 121
            echo "    <div id=\"session-";
            echo $this->getAttribute(($context["item"] ?? null), "id", []);
            echo "\" class=\"session panel panel-default\">
        ";
            // line 122
            if ($this->getAttribute($context["row"], "course_list_session_style", [])) {
                // line 123
                echo "            ";
                // line 124
                echo "            <div class=\"panel-heading\">

                ";
                // line 126
                if ((($this->getAttribute($context["row"], "course_list_session_style", []) == 1) || ($this->getAttribute($context["row"], "course_list_session_style", []) == 2))) {
                    // line 127
                    echo "                    ";
                    // line 128
                    echo "                    ";
                    if ((($context["remove_session_url"] ?? null) == true)) {
                        // line 129
                        echo "                        ";
                        echo ($context["session_image"] ?? null);
                        echo " ";
                        echo $this->getAttribute($context["row"], "title", []);
                        echo "
                    ";
                    } else {
                        // line 131
                        echo "                        ";
                        // line 132
                        echo "                        ";
                        $context["session_link"] = (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", []));
                        // line 133
                        echo "                        ";
                        if ((($this->getAttribute($context["row"], "course_list_session_style", []) == 2) && (twig_length_filter($this->env, $this->getAttribute($context["row"], "courses", [])) == 1))) {
                            // line 134
                            echo "                            ";
                            // line 135
                            echo "                            ";
                            $context["session_link"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "courses", []), 0, []), "link", []);
                            // line 136
                            echo "                        ";
                        }
                        // line 137
                        echo "                        <a href=\"";
                        echo ($context["session_link"] ?? null);
                        echo "\">
                            ";
                        // line 138
                        echo ($context["session_image"] ?? null);
                        echo " ";
                        echo $this->getAttribute($context["row"], "title", []);
                        echo "
                        </a>
                    ";
                    }
                    // line 141
                    echo "                ";
                } elseif (($this->getAttribute($context["row"], "course_list_session_style", []) == 4)) {
                    // line 142
                    echo "                    ";
                    echo ($context["session_image"] ?? null);
                    echo " ";
                    echo $this->getAttribute($context["row"], "title", []);
                    echo "
                ";
                } elseif (($this->getAttribute(                // line 143
$context["row"], "course_list_session_style", []) == 3)) {
                    // line 144
                    echo "                    ";
                    // line 145
                    echo "                    ";
                    // line 146
                    echo "                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#page-content\" href=\"#collapse_";
                    echo $this->getAttribute($context["row"], "id", []);
                    echo "\"
                       aria-expanded=\"false\">
                        ";
                    // line 148
                    echo ($context["session_image"] ?? null);
                    echo " ";
                    echo $this->getAttribute($context["row"], "title", []);
                    echo "
                    </a>
                    ";
                    // line 150
                    $context["collapsable"] = "collapse";
                    // line 151
                    echo "                ";
                }
                // line 152
                echo "                ";
                if ($this->getAttribute($context["row"], "show_actions", [])) {
                    // line 153
                    echo "                    <div class=\"pull-right\">
                        <a href=\"";
                    // line 154
                    echo (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "session/resume_session.php?id_session=") . $this->getAttribute($context["row"], "id", []));
                    echo "\">
                            <img src=\"";
                    // line 155
                    echo Display::get_icon_path("edit.png", 22);
                    echo "\" width=\"22\" height=\"22\" alt=\"";
                    echo get_lang("Edit");
                    echo "\"
                                 title=\"";
                    // line 156
                    echo get_lang("Edit");
                    echo "\">
                        </a>
                    </div>
                ";
                }
                // line 160
                echo "                ";
                if ($this->getAttribute($context["row"], "collapsable_link", [])) {
                    // line 161
                    echo "                    <div class=\"pull-right\">
                       ";
                    // line 162
                    echo $this->getAttribute($context["row"], "collapsable_link", []);
                    echo "
                    </div>
                ";
                }
                // line 165
                echo "

            </div>
        ";
            }
            // line 169
            echo "
        ";
            // line 170
            if ($this->getAttribute($context["row"], "collapsable_link", [])) {
                // line 171
                echo "            ";
                if (($this->getAttribute($context["row"], "collapsed", []) == 1)) {
                    // line 172
                    echo "                ";
                    $context["collapsable"] = "collapse";
                    // line 173
                    echo "            ";
                }
                // line 174
                echo "        ";
            }
            // line 175
            echo "
        <div class=\"session panel-body ";
            // line 176
            echo ($context["collapsable"] ?? null);
            echo "\" id=\"collapse_";
            echo $this->getAttribute($context["row"], "id", []);
            echo "\">
            ";
            // line 177
            if ($this->getAttribute($context["row"], "show_description", [])) {
                // line 178
                echo "                ";
                echo $this->getAttribute($context["row"], "description", []);
                echo "
            ";
            }
            // line 180
            echo "            <ul class=\"info-session list-inline\">
                ";
            // line 181
            if ($this->getAttribute($context["row"], "coach_name", [])) {
                // line 182
                echo "                    <li>
                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                        ";
                // line 184
                echo $this->getAttribute($context["row"], "coach_name", []);
                echo "
                    </li>
                ";
            }
            // line 187
            echo "
                ";
            // line 188
            if ((($context["hide_session_dates_in_user_portal"] ?? null) == false)) {
                // line 189
                echo "                    ";
                if ($this->getAttribute($context["row"], "date", [])) {
                    // line 190
                    echo "                        <li>
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
                    // line 191
                    echo $this->getAttribute($context["row"], "date", []);
                    echo "
                        </li>
                    ";
                } elseif ($this->getAttribute(                // line 193
$context["row"], "duration", [])) {
                    // line 194
                    echo "                        <li>
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
                    // line 195
                    echo $this->getAttribute($context["row"], "duration", []);
                    echo "
                        </li>
                    ";
                }
                // line 198
                echo "                ";
            }
            // line 199
            echo "            </ul>
            <div class=\"grid-courses\">
                ";
            // line 201
            if ( !($context["group_courses"] ?? null)) {
                // line 202
                echo "                    <div class=\"row\">
                        ";
                // line 203
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "courses", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 204
                    echo "                            ";
                    echo $context["blocks"]->getcourse_block($context["item"], true);
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "                    </div>
                ";
            } else {
                // line 208
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "course_categories", []));
                foreach ($context['_seq'] as $context["_key"] => $context["category_code"]) {
                    // line 209
                    echo "                        <h4>";
                    echo $context["category_code"];
                    echo "</h4>
                        <div class=\"row\">
                            ";
                    // line 211
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "courses", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                        // line 212
                        echo "                                ";
                        if (($this->getAttribute($context["course"], "category", []) == $context["category_code"])) {
                            // line 213
                            echo "                                    ";
                            echo $context["blocks"]->getcourse_block($context["course"], false);
                            echo "
                                ";
                        }
                        // line 215
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 216
                    echo "                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_code'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "                ";
            }
            // line 219
            echo "            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 3
    public function getcourse_block($__course__ = null, $__show_category__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "course" => $__course__,
            "show_category" => $__show_category__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            echo "    <div class=\"col-xs-12 col-sm-6 col-md-4\">
        <div class=\"items items-sessions\">
            <div class=\"image\">
                ";
            // line 7
            ob_start(function () { return ''; });
            // line 8
            echo "                    ";
            if ((($this->getAttribute(($context["course"] ?? null), "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) || $this->getAttribute(($context["course"] ?? null), "requirements", []))) {
                // line 9
                echo "                        <span title=\"";
                echo $this->getAttribute(($context["course"] ?? null), "name", []);
                echo "\" >
                            <img src=\"";
                // line 10
                echo $this->getAttribute(($context["course"] ?? null), "image", []);
                echo "\" class=\"img-responsive\">
                        </span>
                    ";
            } else {
                // line 13
                echo "                        <a title=\"";
                echo $this->getAttribute(($context["course"] ?? null), "name", []);
                echo "\" href=\"";
                echo $this->getAttribute(($context["course"] ?? null), "link", []);
                echo "\">
                            <img src=\"";
                // line 14
                echo $this->getAttribute(($context["course"] ?? null), "image", []);
                echo "\" class=\"img-responsive\">
                        </a>
                    ";
            }
            // line 17
            echo "                ";
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 18
            echo "                ";
            echo Security::remove_XSS(($context["title"] ?? null));
            echo "

                ";
            // line 20
            if ((($this->getAttribute(($context["course"] ?? null), "category", []) != "") && ($context["show_category"] ?? null))) {
                // line 21
                echo "                    <span class=\"category\">";
                echo $this->getAttribute(($context["course"] ?? null), "category", []);
                echo "</span>
                    <div class=\"cribbon\"></div>
                ";
            }
            // line 24
            echo "                ";
            if ($this->getAttribute(($context["course"] ?? null), "edit_actions", [])) {
                // line 25
                echo "                    <div class=\"admin-actions\">
                        ";
                // line 26
                if (($this->getAttribute(($context["course"] ?? null), "document", []) == "")) {
                    // line 27
                    echo "                            <a class=\"btn btn-default btn-sm\" href=\"";
                    echo $this->getAttribute(($context["course"] ?? null), "edit_actions", []);
                    echo "\">
                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            </a>
                        ";
                } else {
                    // line 31
                    echo "                            <div class=\"btn-group\" role=\"group\">
                                <a class=\"btn btn-default btn-sm\" href=\"";
                    // line 32
                    echo $this->getAttribute(($context["course"] ?? null), "edit_actions", []);
                    echo "\">
                                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                </a>
                                ";
                    // line 35
                    echo $this->getAttribute(($context["course"] ?? null), "document", []);
                    echo "
                            </div>
                        ";
                }
                // line 38
                echo "                    </div>
                ";
            }
            // line 40
            echo "            </div>
            <div class=\"description\">
                <div class=\"block-title\">
                  <h4 class=\"title\">
                      ";
            // line 44
            ob_start(function () { return ''; });
            // line 45
            echo "                          ";
            if ((($this->getAttribute(($context["course"] ?? null), "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) || $this->getAttribute(($context["course"] ?? null), "requirements", []))) {
                // line 46
                echo "                              ";
                echo $this->getAttribute(($context["course"] ?? null), "name", []);
                echo "
                              <span class=\"code-title\">";
                // line 47
                echo $this->getAttribute(($context["course"] ?? null), "visual_code", []);
                echo "</span>
                          ";
            } else {
                // line 49
                echo "                              ";
                echo $this->getAttribute(($context["course"] ?? null), "title", []);
                echo "
                          ";
            }
            // line 51
            echo "                      ";
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            echo "                      ";
            echo Security::remove_XSS(($context["title"] ?? null));
            echo "
                  </h4>
                </div>
                <div class=\"block-author\">
                    ";
            // line 56
            echo $this->getAttribute(($context["course"] ?? null), "requirements", []);
            echo "
                    ";
            // line 57
            if ((twig_length_filter($this->env, $this->getAttribute(($context["course"] ?? null), "coaches", [])) > 2)) {
                // line 58
                echo "                        <a
                            id=\"plist-";
                // line 59
                echo $this->getAttribute(($context["course"] ?? null), "real_id", []);
                echo "\"
                            data-trigger=\"focus\"
                            tabindex=\"0\" role=\"button\"
                            class=\"btn btn-default panel_popover\"
                            data-toggle=\"popover\"
                            title=\"";
                // line 64
                echo get_lang("CourseTeachers");
                echo "\"
                            data-html=\"true\"
                        >
                            <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                        </a>
                        <div id=\"popover-content-plist-";
                // line 69
                echo $this->getAttribute(($context["course"] ?? null), "real_id", []);
                echo "\" class=\"hide\">
                    ";
            }
            // line 71
            echo "
                    ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "coaches", []));
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 73
                echo "                        ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["course"] ?? null), "coaches", [])) > 2)) {
                    // line 74
                    echo "                              <div class=\"popover-teacher\">
                              <a href=\"";
                    // line 75
                    echo $this->getAttribute($context["teacher"], "url", []);
                    echo "\" class=\"ajax\">
                                  <img src=\"";
                    // line 76
                    echo $this->getAttribute($context["teacher"], "avatar", []);
                    echo "\"/>
                              </a>
                                  <div class=\"teachers-details\">
                                      <h5>
                                      ";
                    // line 80
                    echo $this->getAttribute($context["teacher"], "firstname", []);
                    echo " ";
                    echo $this->getAttribute($context["teacher"], "lastname", []);
                    echo "
                                      </h5>
                                  </div>
                              </div>
                        ";
                } else {
                    // line 85
                    echo "                          <a href=\"";
                    echo $this->getAttribute($context["teacher"], "url", []);
                    echo "\" class=\"ajax\"
                             data-title=\"";
                    // line 86
                    echo $this->getAttribute($context["teacher"], "firstname", []);
                    echo " ";
                    echo $this->getAttribute($context["teacher"], "lastname", []);
                    echo "\">
                              <img src=\"";
                    // line 87
                    echo $this->getAttribute($context["teacher"], "avatar", []);
                    echo "\"/>
                          </a>
                          <div class=\"teachers-details\">
                              <h5>
                                  <a href=\"";
                    // line 91
                    echo $this->getAttribute($context["teacher"], "url", []);
                    echo "\" class=\"ajax\"
                                     data-title=\"";
                    // line 92
                    echo $this->getAttribute($context["teacher"], "firstname", []);
                    echo " ";
                    echo $this->getAttribute($context["teacher"], "lastname", []);
                    echo "\">
                                      ";
                    // line 93
                    echo $this->getAttribute($context["teacher"], "firstname", []);
                    echo " ";
                    echo $this->getAttribute($context["teacher"], "lastname", []);
                    echo "
                                  </a>
                              </h5>
                              <p>";
                    // line 96
                    echo get_lang("Teacher");
                    echo "</p>
                          </div>
                        ";
                }
                // line 99
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "
                    ";
            // line 101
            if ((twig_length_filter($this->env, $this->getAttribute(($context["course"] ?? null), "coaches", [])) > 2)) {
                // line 102
                echo "                        </div>
                    ";
            }
            // line 104
            echo "                </div>
                <div class=\"notifications\">
                    ";
            // line 106
            echo $this->getAttribute(($context["course"] ?? null), "notifications", []);
            echo "
                </div>

                ";
            // line 109
            $this->loadTemplate(api_find_template("user_portal/grid_course_student_info.tpl"), "default//user_portal/grid_session.tpl", 109)->display(twig_array_merge($context, ["student_info" => $this->getAttribute(($context["course"] ?? null), "student_info", [])]));
            // line 110
            echo "            </div>
        </div>
    </div>
";
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
        return "default//user_portal/grid_session.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 110,  612 => 109,  606 => 106,  602 => 104,  598 => 102,  596 => 101,  593 => 100,  587 => 99,  581 => 96,  573 => 93,  567 => 92,  563 => 91,  556 => 87,  550 => 86,  545 => 85,  535 => 80,  528 => 76,  524 => 75,  521 => 74,  518 => 73,  514 => 72,  511 => 71,  506 => 69,  498 => 64,  490 => 59,  487 => 58,  485 => 57,  481 => 56,  473 => 52,  470 => 51,  464 => 49,  459 => 47,  454 => 46,  451 => 45,  449 => 44,  443 => 40,  439 => 38,  433 => 35,  427 => 32,  424 => 31,  416 => 27,  414 => 26,  411 => 25,  408 => 24,  401 => 21,  399 => 20,  393 => 18,  390 => 17,  384 => 14,  377 => 13,  371 => 10,  366 => 9,  363 => 8,  361 => 7,  356 => 4,  343 => 3,  332 => 219,  329 => 218,  322 => 216,  316 => 215,  310 => 213,  307 => 212,  303 => 211,  297 => 209,  292 => 208,  288 => 206,  279 => 204,  275 => 203,  272 => 202,  270 => 201,  266 => 199,  263 => 198,  257 => 195,  254 => 194,  252 => 193,  247 => 191,  244 => 190,  241 => 189,  239 => 188,  236 => 187,  230 => 184,  226 => 182,  224 => 181,  221 => 180,  215 => 178,  213 => 177,  207 => 176,  204 => 175,  201 => 174,  198 => 173,  195 => 172,  192 => 171,  190 => 170,  187 => 169,  181 => 165,  175 => 162,  172 => 161,  169 => 160,  162 => 156,  156 => 155,  152 => 154,  149 => 153,  146 => 152,  143 => 151,  141 => 150,  134 => 148,  128 => 146,  126 => 145,  124 => 144,  122 => 143,  115 => 142,  112 => 141,  104 => 138,  99 => 137,  96 => 136,  93 => 135,  91 => 134,  88 => 133,  85 => 132,  83 => 131,  75 => 129,  72 => 128,  70 => 127,  68 => 126,  64 => 124,  62 => 123,  60 => 122,  55 => 121,  52 => 120,  48 => 119,  45 => 118,  43 => 117,  40 => 116,  38 => 115,  35 => 114,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default//user_portal/grid_session.tpl", "/var/www/html/chamilo16/main/template/default/user_portal/grid_session.tpl");
    }
}

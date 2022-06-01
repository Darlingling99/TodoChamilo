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

/* default/user_portal/grid_course_student_info.tpl */
class __TwigTemplate_09b394473a60894d9290b0fb1c7a8168added51cbad99e0e553d87ea9ed31edb extends \Twig\Template
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
        if (($context["student_info"] ?? null)) {
            // line 2
            echo "    ";
            if ((( !(null === $this->getAttribute(($context["student_info"] ?? null), "progress", [])) ||  !(null === $this->getAttribute(($context["student_info"] ?? null), "score", []))) ||  !(null === $this->getAttribute(($context["student_info"] ?? null), "certificate", [])))) {
                // line 3
                echo "        ";
                $context["num_columns"] = (((((null === $this->getAttribute(($context["student_info"] ?? null), "progress", []))) ? (0) : (1)) + (((null === $this->getAttribute(($context["student_info"] ?? null), "score", []))) ? (0) : (1))) + (((null === $this->getAttribute(($context["student_info"] ?? null), "certificate", []))) ? (0) : (1)));
                // line 4
                echo "        <div class=\"course-student-info\">
            <div class=\"student-info\">
                <hr>
                ";
                // line 7
                if ( !(null === $this->getAttribute(($context["student_info"] ?? null), "progress", []))) {
                    // line 8
                    echo "                    <strong>";
                    echo get_lang("CourseAdvance");
                    echo "</strong>
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                             aria-valuenow=\"";
                    // line 11
                    echo $this->getAttribute(($context["student_info"] ?? null), "progress", []);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"
                             style=\"width: ";
                    // line 12
                    echo $this->getAttribute(($context["student_info"] ?? null), "progress", []);
                    echo "%;\">
                            ";
                    // line 13
                    echo sprintf(get_lang("XPercentCompleted"), $this->getAttribute(($context["student_info"] ?? null), "progress", []));
                    echo "
                        </div>
                    </div>
                ";
                }
                // line 17
                echo "
                <div class=\"row\">
                    ";
                // line 19
                if ( !(null === $this->getAttribute(($context["student_info"] ?? null), "score", []))) {
                    // line 20
                    echo "                        <div class=\"col-xs-6\">
                            ";
                    // line 21
                    echo sprintf(get_lang("StudentCourseScoreX"), $this->getAttribute(($context["student_info"] ?? null), "score", []));
                    echo "
                        </div>
                    ";
                }
                // line 24
                echo "                    ";
                if ( !(null === $this->getAttribute(($context["student_info"] ?? null), "certificate", []))) {
                    // line 25
                    echo "                        <div class=\"col-xs-6 ";
                    if ((($context["num_columns"] ?? null) >= 2)) {
                        echo "text-right";
                    }
                    echo "\">
                            <i class=\"fa fa-certificate text-warning\" aria-hidden=\"true\"></i>
                            ";
                    // line 27
                    echo sprintf(get_lang("StudentCourseCertificateX"), $this->getAttribute(($context["student_info"] ?? null), "certificate", []));
                    echo "
                        </div>
                    ";
                }
                // line 30
                echo "                </div>
            </div>
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/user_portal/grid_course_student_info.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  93 => 27,  85 => 25,  82 => 24,  76 => 21,  73 => 20,  71 => 19,  67 => 17,  60 => 13,  56 => 12,  52 => 11,  45 => 8,  43 => 7,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/user_portal/grid_course_student_info.tpl", "/var/www/html/chamilo16/main/template/default/user_portal/grid_course_student_info.tpl");
    }
}

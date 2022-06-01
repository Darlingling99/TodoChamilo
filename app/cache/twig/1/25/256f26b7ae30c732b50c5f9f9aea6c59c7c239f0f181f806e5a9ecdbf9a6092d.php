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

/* default/custompage/login.tpl */
class __TwigTemplate_28069c2cffece0dcdf958d85a6df316e93c5193102fa12b6f1eba5eba0ce1708 extends \Twig\Template
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
        echo "<div class=\"custompage\">
    <div class=\"limiter\">
        <div class=\"container-login\">
            <div class=\"wrap-login width-login\">
                <form class=\"login100-form validate-form\" action=\"";
        // line 5
        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
        echo "\" method=\"post\">
                    <div class=\"logo\">
                        <img width=\"250px\" class=\"img-responsive\" title=\"";
        // line 7
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", []);
        echo "\" src=\"";
        echo $this->getAttribute(($context["_p"] ?? null), "web_css_theme", []);
        echo "images/header-logo.svg\">
                    </div>
                    <h3 class=\"title\">";
        // line 9
        echo get_lang("Login");
        echo "</h3>
                    ";
        // line 10
        echo ($context["mgs_flash"] ?? null);
        echo "
                    ";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "                    <div class=\"alert alert-warning\" role=\"alert\">
                        ";
            // line 13
            echo ($context["error"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 16
        echo "                    <div class=\"form-group\">
                        <label for=\"user\">";
        // line 17
        echo get_lang("LoginOrEmailAddress");
        echo "</label>
                        <input type=\"text\" class=\"form-control\" id=\"user\" name=\"login\" \">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">";
        // line 21
        echo get_lang("Password");
        echo "</label>
                        <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" >
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary btn-block\">
                        ";
        // line 26
        echo get_lang("LoginEnter");
        echo "
                    </button>
                    ";
        // line 28
        if (($context["url_register"] ?? null)) {
            // line 29
            echo "                    <a href=\"";
            echo ($context["url_register"] ?? null);
            echo "\" class=\"btn btn-success btn-block\" >
                        ";
            // line 30
            echo get_lang("Registration");
            echo "
                    </a >
                    ";
        }
        // line 33
        echo "                    <div class=\"last-password\">
                        <a href=\"";
        // line 34
        echo ($context["url_lost_password"] ?? null);
        echo "\">
                            ";
        // line 35
        echo get_lang("LostPassword");
        echo "
                        </a>
                    </div>
                </form>
                <div class=\"software-name\">
                    <a href=\"";
        // line 40
        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
        echo "\" target=\"_blank\">
                        ";
        // line 41
        echo sprintf(get_lang("PoweredByX"), $this->getAttribute(($context["_s"] ?? null), "software_name", []));
        echo "
                    </a>&copy; ";
        // line 42
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "default/custompage/login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  122 => 41,  118 => 40,  110 => 35,  106 => 34,  103 => 33,  97 => 30,  92 => 29,  90 => 28,  85 => 26,  77 => 21,  70 => 17,  67 => 16,  61 => 13,  58 => 12,  56 => 11,  52 => 10,  48 => 9,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/custompage/login.tpl", "/var/www/html/chamilo16/main/template/default/custompage/login.tpl");
    }
}

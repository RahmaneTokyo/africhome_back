<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @KnpPaginator/Pagination/bootstrap_v5_fa_sortable_link.html.twig */
class __TwigTemplate_9e475c75e9e26874faebb47d3ad5ee9376a06b4427229a4e45741988c792955f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/bootstrap_v5_fa_sortable_link.html.twig"));

        // line 7
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"float-end\">
        ";
        // line 9
        if ((isset($context["sorted"]) || array_key_exists("sorted", $context) ? $context["sorted"] : (function () { throw new RuntimeError('Variable "sorted" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "            ";
            if (((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 10, $this->source); })()) == "desc")) {
                // line 11
                echo "                <i class=\"fa fa-sort-down\"></i>
            ";
            } else {
                // line 13
                echo "                <i class=\"fa fa-sort-up\"></i>
            ";
            }
            // line 15
            echo "        ";
        } else {
            // line 16
            echo "            <i class=\"fa fa-sort\"></i>
        ";
        }
        // line 18
        echo "    </span>
    ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "
</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/bootstrap_v5_fa_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  77 => 18,  73 => 16,  70 => 15,  66 => 13,  62 => 11,  59 => 10,  57 => 9,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap v5 with Font Awesome Sorting control implementation.
 */
#}
<a{% for attr, value  in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>
    <span class=\"float-end\">
        {% if sorted %}
            {% if direction == 'desc' %}
                <i class=\"fa fa-sort-down\"></i>
            {% else %}
                <i class=\"fa fa-sort-up\"></i>
            {% endif %}
        {% else %}
            <i class=\"fa fa-sort\"></i>
        {% endif %}
    </span>
    {{ title }}
</a>
", "@KnpPaginator/Pagination/bootstrap_v5_fa_sortable_link.html.twig", "D:\\GSExpertise\\africhome-rahmane_back\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\bootstrap_v5_fa_sortable_link.html.twig");
    }
}

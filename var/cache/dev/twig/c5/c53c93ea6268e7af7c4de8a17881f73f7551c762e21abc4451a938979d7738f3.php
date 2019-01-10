<?php

/* @Store/Default/list_article.html.twig */
class __TwigTemplate_c14e75b0bf4d0a9dcfa0cae0c478e8224376464404f41b2dd298094b366005b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Store/Default/list_article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Store/Default/list_article.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>store</title>
</head>
<style>
    html{
        overflow-x: hidden
    }
    .articles:hover{
        cursor: pointer;
        text-decoration: underline;
    }
</style>
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "    <div class=\"row col-md-4\">
            <span class=\"articles\" style=\"margin-left: 35%; font-weight: bold;\"> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nom", array()), "html", null, true);
            echo " </span>
            <img class=\"articles\" style=\"width: 550px; height: 390px; margin-top: 2%;\"src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
            echo "\">
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<div class=\"row col-md-1\" style=\"margin-top:5px; margin-left:45%\">
    <select class=\"form-control\" data-style=\"btn-primary\" name=\"page\" id=\"pager\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbrPage"] ?? $this->getContext($context, "nbrPage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "            ";
            if (($context["i"] == ($context["page"] ?? $this->getContext($context, "page")))) {
                // line 31
                echo "                <option value=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " selected>";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
            ";
            } else {
                // line 33
                echo "                <option value=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
            ";
            }
            // line 35
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </select>
</div>

<script>
    \$('#pager').on('change', function(){
        change(\$(this).val())
    })
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Store/Default/list_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  94 => 35,  86 => 33,  78 => 31,  75 => 30,  71 => 29,  67 => 27,  57 => 23,  53 => 22,  50 => 21,  46 => 20,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>store</title>
</head>
<style>
    html{
        overflow-x: hidden
    }
    .articles:hover{
        cursor: pointer;
        text-decoration: underline;
    }
</style>
{% for article in articles %}
    <div class=\"row col-md-4\">
            <span class=\"articles\" style=\"margin-left: 35%; font-weight: bold;\"> {{ article.nom }} </span>
            <img class=\"articles\" style=\"width: 550px; height: 390px; margin-top: 2%;\"src=\"{{article.image}}\">
        </div>
    </div>
{% endfor %}
<div class=\"row col-md-1\" style=\"margin-top:5px; margin-left:45%\">
    <select class=\"form-control\" data-style=\"btn-primary\" name=\"page\" id=\"pager\">
        {% for i in 1..nbrPage %}
            {% if i == page %}
                <option value={{i}} selected>{{i}}</option>
            {% else %}
                <option value={{i}}>{{i}}</option>
            {% endif %}
        {% endfor %}
    </select>
</div>

<script>
    \$('#pager').on('change', function(){
        change(\$(this).val())
    })
</script>
", "@Store/Default/list_article.html.twig", "/var/www/eCommerce/src/StoreBundle/Resources/views/Default/list_article.html.twig");
    }
}

<?php

/* @Store/Default/list_article.html.twig */
class __TwigTemplate_399b4a5e057d124605a23fd17cd4c42e4927c56ce3f57c27a5ed10bb41845431 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbrPage"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "            ";
            if (($context["i"] == ($context["page"] ?? null))) {
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
        return array (  94 => 36,  88 => 35,  80 => 33,  72 => 31,  69 => 30,  65 => 29,  61 => 27,  51 => 23,  47 => 22,  44 => 21,  40 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Store/Default/list_article.html.twig", "/var/www/eCommerce/src/StoreBundle/Resources/views/Default/list_article.html.twig");
    }
}

<?php

/* @Admin/Default/modify_article.html.twig */
class __TwigTemplate_5f77f93b8e190fa9226ee700a0060917a196df47619fe36d577a6bfb52597b5b extends Twig_Template
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
<html lang=\"fr\">
<head>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>Document</title>
</head>
<body>
  ";
        // line 12
        if ((isset($context["article"]) || array_key_exists("article", $context))) {
            // line 13
            echo "    <div style=\"margin-left:2%; margin-top: 50px;\">
      <div class=\"form-group row col-md-10\">
        <label for=\"InputName\">Nom de l'article</label>
        <input type=\"text\" class=\"form-control elm\" id=\"name\" placeholder=\"écrivez le nom de l'article\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "nom", array()), "html", null, true);
            echo "\">
      </div>
      <div class=\"form-group row col-md-3\">
        <label for=\"InputPrice\">Prix de l'article</label>
        <input type=\"number\" class=\"form-control elm\" id=\"price\" placeholder=\"Prix  de l'article en €\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "price", array()), "html", null, true);
            echo "\">
      </div>
      <div class=\"form-group row col-md-10\">
        <label for=\"InputImage\">Chemin de l'image</label>
        <input type=\"text\" class=\"form-control elm\" id=\"image\" placeholder=\"/var/www/web/VotreImage\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "image", array()), "html", null, true);
            echo "\">
      </div>
      <div class=\"form-group row col-md-10\">
        <label for=\"InputDescription\">Description de l'article</label>
        <input type=\"text\" class=\"form-control elm\" id=\"description\" placeholder=\"écrivez la description de l'article\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "description", array()), "html", null, true);
            echo "\">
      </div>
      <div class=\"row col-md-3\">
        <button class=\"btn btn-primary\" onclick=\"data_request()\">Valider</button>
      </div>
    </div>
  ";
        } else {
            // line 35
            echo "    <div style=\"margin-left:2%; margin-top: 50px;\">
      <div class=\"form-group row col-md-10\">
        <label for=\"InputName\">Nom de l'article</label>
        <input type=\"text\" class=\"form-control elm\" id=\"name\" placeholder=\"écrivez le nom de l'article\">
      </div>
      <div class=\"form-group row col-md-3\">
        <label for=\"InputPrice\">Prix de l'article</label>
        <input type=\"number\" class=\"form-control elm\" id=\"price\" placeholder=\"Prix  de l'article en €\">
      </div>
      <div class=\"form-group row col-md-10\">
        <label for=\"InputImage\">Chemin de l'image</label>
        <input type=\"text\" class=\"form-control elm\" id=\"image\" placeholder=\"/var/www/web/VotreImage\">
      </div>
      <div class=\"form-group row col-md-10\">
        <label for=\"InputDescription\">Description de l'article</label>
        <input type=\"text\" class=\"form-control elm\" id=\"description\" placeholder=\"écrivez la description de l'article\">
      </div>
      <div class=\"row col-md-3\">
        <button class=\"btn btn-primary\" onclick=\"data_request()\">Valider</button>
      </div>
  </div>
  ";
        }
        // line 57
        echo "</body>
</html>
<script>
  function data_request(id)
  {
    var tab = {}
    \$('.elm').each(function (i,data){
      tab[\$(data).attr('id')] = \$(data).val()
    });
    if(\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "id", array()), "html", null, true);
        echo "\")
      tab['id'] = \"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "id", array()), "html", null, true);
        echo "\"
    \$.ajax({
        type: 'POST',
        data: tab,
        url: \"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_push");
        echo "\",
        success: function(){

        },
        error: function(){
        }
    });
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "@Admin/Default/modify_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 71,  109 => 67,  105 => 66,  94 => 57,  70 => 35,  60 => 28,  53 => 24,  46 => 20,  39 => 16,  34 => 13,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/Default/modify_article.html.twig", "/var/www/eCommerce/src/AdminBundle/Resources/views/Default/modify_article.html.twig");
    }
}

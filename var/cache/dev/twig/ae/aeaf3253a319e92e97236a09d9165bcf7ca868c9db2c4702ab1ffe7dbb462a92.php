<?php

/* @Admin/Default/modify_article.html.twig */
class __TwigTemplate_7b822325d2692b747759a4f72bf1ff7fe6682b3812984bccddea7d5e8426340d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/modify_article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/modify_article.html.twig"));

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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "nom", array()), "html", null, true);
            echo "\">
      </div>
      <div class=\"form-group row col-md-3\">
        <label for=\"InputPrice\">Prix de l'article</label>
        <input type=\"number\" class=\"form-control elm\" id=\"price\" placeholder=\"Prix  de l'article en €\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "price", array()), "html", null, true);
            echo "\">
      </div>
      <div class=\"form-group row col-md-10\">
        <label for=\"InputImage\">Chemin de l'image</label>
        <input type=\"text\" class=\"form-control elm\" id=\"image\" placeholder=\"/var/www/web/VotreImage\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "html", null, true);
            echo "\">
      </div>
      <div class=\"form-group row col-md-10\">
        <label for=\"InputDescription\">Description de l'article</label>
        <input type=\"text\" class=\"form-control elm\" id=\"description\" placeholder=\"écrivez la description de l'article\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "description", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "\")
      tab['id'] = \"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  122 => 71,  115 => 67,  111 => 66,  100 => 57,  76 => 35,  66 => 28,  59 => 24,  52 => 20,  45 => 16,  40 => 13,  38 => 12,  25 => 1,);
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
  {% if article is defined %}
    <div style=\"margin-left:2%; margin-top: 50px;\">
      <div class=\"form-group row col-md-10\">
        <label for=\"InputName\">Nom de l'article</label>
        <input type=\"text\" class=\"form-control elm\" id=\"name\" placeholder=\"écrivez le nom de l'article\" value=\"{{article.nom}}\">
      </div>
      <div class=\"form-group row col-md-3\">
        <label for=\"InputPrice\">Prix de l'article</label>
        <input type=\"number\" class=\"form-control elm\" id=\"price\" placeholder=\"Prix  de l'article en €\" value=\"{{article.price}}\">
      </div>
      <div class=\"form-group row col-md-10\">
        <label for=\"InputImage\">Chemin de l'image</label>
        <input type=\"text\" class=\"form-control elm\" id=\"image\" placeholder=\"/var/www/web/VotreImage\" value=\"{{article.image}}\">
      </div>
      <div class=\"form-group row col-md-10\">
        <label for=\"InputDescription\">Description de l'article</label>
        <input type=\"text\" class=\"form-control elm\" id=\"description\" placeholder=\"écrivez la description de l'article\" value=\"{{article.description}}\">
      </div>
      <div class=\"row col-md-3\">
        <button class=\"btn btn-primary\" onclick=\"data_request()\">Valider</button>
      </div>
    </div>
  {% else %}
    <div style=\"margin-left:2%; margin-top: 50px;\">
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
  {% endif %}
</body>
</html>
<script>
  function data_request(id)
  {
    var tab = {}
    \$('.elm').each(function (i,data){
      tab[\$(data).attr('id')] = \$(data).val()
    });
    if(\"{{article.id}}\")
      tab['id'] = \"{{article.id}}\"
    \$.ajax({
        type: 'POST',
        data: tab,
        url: \"{{path('article_push')}}\",
        success: function(){

        },
        error: function(){
        }
    });
  }
</script>
", "@Admin/Default/modify_article.html.twig", "/var/www/eCommerce/src/AdminBundle/Resources/views/Default/modify_article.html.twig");
    }
}

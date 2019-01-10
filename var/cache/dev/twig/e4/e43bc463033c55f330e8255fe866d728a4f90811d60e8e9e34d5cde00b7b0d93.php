<?php

/* @Admin/Default/add_article.html.twig */
class __TwigTemplate_200f6dc5b59cb4475ca3beb3869c81535d1a393c61f6cb78c88b4db90fb378d3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/add_article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/add_article.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>Ajout Article</title>
</head>
<body>

  <div style =\"margin-left:2%; margin-top: 50px;\">
    <div class=\"row col-md-3  \" style=\"margin-top:5px;\">
        <select class=\"form-control\" data-style=\"btn-primary\" name=\"page\" id=\"pager\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genders"] ?? $this->getContext($context, "genders")));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 17
            echo "              <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gender"], "type", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gender"], "type", array()), "html", null, true);
            echo "</option>  
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </select>
        <select class=\"form-control\" data-style=\"btn-primary\" name=\"page\" id=\"pager\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "              <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</option>  
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </select>
    </div>
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
</body>
</html>
<script>
  function data_request()
  {
    var tab = {}
    \$('.elm').each(function (i,data){
      tab[\$(data).attr('id')] = \$(data).val()
    });
    \$.ajax({
        type: 'POST',
        data: tab,
        url: \"";
        // line 58
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
        return "@Admin/Default/add_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 58,  76 => 24,  65 => 22,  61 => 21,  57 => 19,  46 => 17,  42 => 16,  25 => 1,);
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
  <title>Ajout Article</title>
</head>
<body>

  <div style =\"margin-left:2%; margin-top: 50px;\">
    <div class=\"row col-md-3  \" style=\"margin-top:5px;\">
        <select class=\"form-control\" data-style=\"btn-primary\" name=\"page\" id=\"pager\">
            {% for gender in genders %}
              <option value={{ gender.type }}>{{ gender.type }}</option>  
            {% endfor %}
        </select>
        <select class=\"form-control\" data-style=\"btn-primary\" name=\"page\" id=\"pager\">
            {% for category in categories %}
              <option value={{ category.name}}>{{ category.name }}</option>  
            {% endfor %}
        </select>
    </div>
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
</body>
</html>
<script>
  function data_request()
  {
    var tab = {}
    \$('.elm').each(function (i,data){
      tab[\$(data).attr('id')] = \$(data).val()
    });
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
", "@Admin/Default/add_article.html.twig", "/var/www/eCommerce/src/AdminBundle/Resources/views/Default/add_article.html.twig");
    }
}

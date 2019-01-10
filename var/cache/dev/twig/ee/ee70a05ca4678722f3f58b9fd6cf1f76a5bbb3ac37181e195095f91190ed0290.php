<?php

/* @Admin/Default/manage.html.twig */
class __TwigTemplate_77bab76777d38d7e9345ed97da5b39f6ef5c62c516c33edd5f286aa3f2837e73 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/manage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/manage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>Document</title>
</head>
<style>
  .html{
    overflow-x: hidden;
  }
  .container {
    position: relative;
    text-align: center;
  }
  .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-15%, -50%);
  }
  .bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

</style>
<body>
  <div id=\"wrapper\">
    <button class=\"row col-md-5 btn btn-info\" style=\"margin-left:30%\" onclick=\"ajout()\">Créer un article</button>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 36
            echo "        <div class=\"row col-md-4 container\">
            <span class=\"articles\" style=\"margin-left: 10%;font-weight: bold;\">
              ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nom", array()), "html", null, true);
            echo "
            </span>
            <img class=\"articles\" style=\"width: 430px; height: 390px; margin-top: 2%; margin-left:10%;\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
            echo "\">
            <div class=\"centered\">
              <button class=\"btn btn-danger\" onclick=\"supp('";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "')\">supprimer</button>
              <button class=\"btn btn-primary\"  onclick=\"modify('";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "')\">modifier</button>
            </div>
            <div class=\"bottom-right\">Prix : ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "price", array()), "html", null, true);
            echo "€</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  </div>
</body>
</html>
<script>
  function ajout(){
        \$.ajax({
                type: 'POST',
                data: {},
                url: \"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_article");
        echo "\",
                success: function(data) {
                    \$('#wrapper').html(data)
                }
            });
  }
  function modify(id){
        \$.ajax({
                type: 'POST',
                data: { 'id': id },
                url: \"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_modify");
        echo "\",
                success: function(data){
                  \$('#wrapper').html(data)
                }
            });
    }
  function supp(id){
        \$.ajax({
                type: 'POST',
                data: { 'id': id },
                url: \"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete");
        echo "\",
                success: function(data) {
                    \$('#wrapper').html(data)
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
        return "@Admin/Default/manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 76,  120 => 66,  107 => 56,  97 => 48,  88 => 45,  83 => 43,  79 => 42,  74 => 40,  69 => 38,  65 => 36,  61 => 35,  25 => 1,);
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
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>Document</title>
</head>
<style>
  .html{
    overflow-x: hidden;
  }
  .container {
    position: relative;
    text-align: center;
  }
  .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-15%, -50%);
  }
  .bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

</style>
<body>
  <div id=\"wrapper\">
    <button class=\"row col-md-5 btn btn-info\" style=\"margin-left:30%\" onclick=\"ajout()\">Créer un article</button>
    {% for article in articles %}
        <div class=\"row col-md-4 container\">
            <span class=\"articles\" style=\"margin-left: 10%;font-weight: bold;\">
              {{ article.nom }}
            </span>
            <img class=\"articles\" style=\"width: 430px; height: 390px; margin-top: 2%; margin-left:10%;\" src=\"{{article.image}}\">
            <div class=\"centered\">
              <button class=\"btn btn-danger\" onclick=\"supp('{{article.id}}')\">supprimer</button>
              <button class=\"btn btn-primary\"  onclick=\"modify('{{article.id}}')\">modifier</button>
            </div>
            <div class=\"bottom-right\">Prix : {{ article.price }}€</div>
        </div>
    {% endfor %}
  </div>
</body>
</html>
<script>
  function ajout(){
        \$.ajax({
                type: 'POST',
                data: {},
                url: \"{{path('create_article')}}\",
                success: function(data) {
                    \$('#wrapper').html(data)
                }
            });
  }
  function modify(id){
        \$.ajax({
                type: 'POST',
                data: { 'id': id },
                url: \"{{path('article_modify')}}\",
                success: function(data){
                  \$('#wrapper').html(data)
                }
            });
    }
  function supp(id){
        \$.ajax({
                type: 'POST',
                data: { 'id': id },
                url: \"{{path('article_delete')}}\",
                success: function(data) {
                    \$('#wrapper').html(data)
                }
            });
    }
</script>
", "@Admin/Default/manage.html.twig", "/var/www/eCommerce/src/AdminBundle/Resources/views/Default/manage.html.twig");
    }
}

<?php

/* @Store/Default/base.html.twig */
class __TwigTemplate_11d303d187f4d2af44369e7474cd2a33f01ef4cb151609de8e928284a763fc59 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Store/Default/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Store/Default/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <style>
        #navBar{
            font-size: 130%;
            padding-left: 10%;
            padding-top: 1%;
            padding-bottom: 1%;
            background-color: grey;
            color: white;
            font-weight: bold;
        }
        .cat:hover{
            color: black;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class=\"row\" id=\"navBar\">
        <div class=\"col-md-12\">
            <div class=\"col-md-3 cat\">
                homme
            </div>
            <div class=\"col-md-3 cat\">
                femme
            </div>
             <div class=\"col-md-3 cat\">
                unisex
            </div>
            <div class=\"col-md-2 cat\">
                se connecter
            </div>
        </div>
    </div>
    <div class=\"col-md-12\" style=\"margin-top: 2%;\">
        <div class=\"article\">
        </div>
    </div>
</body>
</html>

<script>
    change(document.location.href.includes('page') ? document.location.href.match(/\\?page=([\\d]+)/)[1] : 1)
    function change(page)
    {
        \$.ajax({
                type: 'POST',
                data: { 'page': page },
                url: \"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_article");
        echo "\",
                success: function(data) {
                    \$('.article').html(data)
                    if (document.location.href.includes('page'))
                        history.pushState(null, null, document.location.href.replace(/\\?page=[\\d]+/, \"?page=\" + page));
                    else
                        history.pushState(null, null, document.location.href + \"?page=\" + page);
                },
            });
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Store/Default/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 57,  25 => 1,);
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
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <style>
        #navBar{
            font-size: 130%;
            padding-left: 10%;
            padding-top: 1%;
            padding-bottom: 1%;
            background-color: grey;
            color: white;
            font-weight: bold;
        }
        .cat:hover{
            color: black;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class=\"row\" id=\"navBar\">
        <div class=\"col-md-12\">
            <div class=\"col-md-3 cat\">
                homme
            </div>
            <div class=\"col-md-3 cat\">
                femme
            </div>
             <div class=\"col-md-3 cat\">
                unisex
            </div>
            <div class=\"col-md-2 cat\">
                se connecter
            </div>
        </div>
    </div>
    <div class=\"col-md-12\" style=\"margin-top: 2%;\">
        <div class=\"article\">
        </div>
    </div>
</body>
</html>

<script>
    change(document.location.href.includes('page') ? document.location.href.match(/\\?page=([\\d]+)/)[1] : 1)
    function change(page)
    {
        \$.ajax({
                type: 'POST',
                data: { 'page': page },
                url: \"{{path('list_article')}}\",
                success: function(data) {
                    \$('.article').html(data)
                    if (document.location.href.includes('page'))
                        history.pushState(null, null, document.location.href.replace(/\\?page=[\\d]+/, \"?page=\" + page));
                    else
                        history.pushState(null, null, document.location.href + \"?page=\" + page);
                },
            });
    }
</script>
", "@Store/Default/base.html.twig", "/var/www/eCommerce/src/StoreBundle/Resources/views/Default/base.html.twig");
    }
}

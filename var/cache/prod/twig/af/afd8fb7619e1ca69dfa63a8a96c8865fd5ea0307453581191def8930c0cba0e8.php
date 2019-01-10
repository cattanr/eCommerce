<?php

/* @Admin/Default/index.html.twig */
class __TwigTemplate_cbac2a69da1307bd2570598c77b49a231bbb4693b59cc626e67f580c7d87242c extends Twig_Template
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
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>Dashboard</title>
    </head>
    <style>
        html{
            overflow-x: hidden;
        }
        #navBar{
            font-size: 130%;
            padding-left: 10%;
            padding-top: 1%;
            padding-bottom: 1%;
            background-color: #4b4b8c;
            color: white;
            font-weight: bold;
        }
        .cat:hover{
            color: #8f8f91;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
    <body>
        <div class=\"row\" id=\"navBar\">
            <div class=\"col-md-12\">
                <div class=\"col-md-3 cat\" onclick=\"change()\">
                    Gérer les articles
                </div>
                <div class=\"col-md-3 cat\">
                    Statistiques
                </div>
                <div class=\"col-md-3 cat\">
                    configuration
                </div>
                <div class=\"col-md-2 cat\">
                    mes clients
                </div>
            </div>
        </div>
        <div class=\"row col-md-12 article\" style=\"margin-top: 2%\">
            bienvenue sur le dashboard du site eCommerce
        </div>
    </body>
</html>
<script>
    ";
        // line 54
        echo "    function change()
    {
        \$.ajax({
                type: 'POST',
                data: {},
                url: \"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_page");
        echo "\",
                success: function(data) {
                    \$('.article').html(data)
                },
            });
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "@Admin/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 59,  73 => 54,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/Default/index.html.twig", "/var/www/eCommerce/src/AdminBundle/Resources/views/Default/index.html.twig");
    }
}

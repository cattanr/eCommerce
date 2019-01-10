<?php

/* @Store/Default/home.html.twig */
class __TwigTemplate_0baad9cbd2c5f2860cd8bc360e08c7ef258aaabfde99048dc13ebd05e46c4527 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Store/Default/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Store/Default/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" class=\"js_active vc_desktop vc_transform\" >
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>안녕</title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("parallax.min.js"), "html", null, true);
        echo "\"></script>
    <style>
        html{
            overflow-x: hidden;
        }
        .bandeau{
            margin-left: -2%;
            width:102%;
            height: 90px;
            background-color: white;
            color: black;
            position: fixed;
            z-index: 3;
            border-bottom-style:outset;
            border-bottom-width:1px;
        }
        #homeBouton{
            margin-left:48%;
            font-family: Malgun Gothic;
            font-size:150%;
            cursor: default;
        }
        .topBouton{
            margin-top:25px;
            text-align: center;
        }
        .topBouton:hover{
            color: #660033;
        }
        .parallax-window {
            background: transparent;
            height: 930px;
        }
        #overlay{
            display:none;
            background-color: rgba(0,0,0,0.7);
            position:fixed;
            width:100%;
            height:100%;
            top:0px;
            left:0px;
            z-index:1000;
            overflow-y: visible;
        }
        #logPage{
            margin-top: 150px;
            height: 600px;
            background-color: white;
            display:block

        }
        #forgotPage{
            margin-top: 200px;
            height: 500px;
            background-color: white;
            display:block
        }
        #close-button{
            margin-left:97%;
            margin-top:2%;
            font-size:130%;
        }
        #close-button:hover{
            color:orange;
            cursor:pointer;
        }
        #forgot{
            color:grey;
        }
        #forgot:hover{
            color:black;
            cursor: pointer;
        }
        #return{
            font-size: 110%;
            text-decoration:underline;
            cursor:pointer;
        }
        #return:hover{
            color:orange;
        }
    </style>
</head>
<body>
    <div class=\"container-fluid\">
        <div class=\"bandeau\">
            <span id=\"homeBouton\">내 마케트</span>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"col-sm-offset-4 col-sm-1 topBouton\">
                        <a href=\"http://195.154.119.108/app_dev.php/\">
                            <span style=\"font-family: Malgun Gothic; cursor: pointer; color:black;\">집</span>
                        </a>
                    </div>
                    <div class=\"col-sm-1 topBouton\">
                        <span style=\"font-family: Malgun Gothic; cursor: pointer;\">남자</span>
                    </div>
                    <div class=\"col-sm-1 topBouton\" style=\"font-family: Malgun Gothic;\">
                        <span style=\"font-family: Malgun Gothic; cursor: pointer;\">여자</span>
                    </div>
                    <div class=\"col-sm-1 topBouton\">
                        <span style=\"font-family: Malgun Gothic; cursor: pointer;\">몰라</span>
                    </div>
                    <div class=\"col-sm-offset-2 col-sm-2 topBouton\">
                        <span style=\"font-family: Malgun Gothic; cursor: pointer;\" onclick=\"windowLog()\">Register/ Log In</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid row col-sm-12\">
        <img style=\"margin-top:6%;width:103%; heigth:600px;\" src=\"https://wallpapercave.com/wp/wp1871582.jpg\"/>
        <div class=\"col-sm-offset-5\" style=\"margin-top:5%; height:350px;\">
            <h1>Insert catch phrase here</h1>
            <p>Insert description here</p>
            <button>insert button here</button>
    </div>
    <div class=\"col-sm-12\">
        <img style=\"margin-left:-2%; width:106%; heigth:600px;\"src=\"https://assets.adidas.fr/image/upload/f_auto,q_auto,fl_lossy/frFR/Images/181101-HOLIDAY-FW18-HP-MH-Wave-1-DT_tcm196-295969.jpg\"/>
        <div class=\"col-sm-offset-5\" style=\"margin-top:4%; height:900px;\">
            <h1>Insert catch phrase here</h1>
            <p>Insert description here</p>
            <button>insert button here</button>
        </div>
    </div>
    <div id=\"overlay\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"col-sm-offset-4 col-sm-4\" id=\"logPage\">
                    <div class=\"glyphicon glyphicon-remove\" id=\"close-button\" onclick=\"windowLog()\" ></div>
                    <div class=\"col-sm-offset-4\">
                        <p style=\"margin-top:10%;\">Connect to your account</p>
                    </div>
                    <div class=\"col-sm-12\">
                        <div class=\"col-sm-offset-2\" style=\"margin-top:8%;\">
                            <input class=\"col-sm-10\" type=\"email\" placeholder=\"E-mail\">
                            <input class=\"col-sm-10\" type=\"password\" placeholder=\"Password\" style=\"margin-top:15%;\">
                            <div class=\"col-sm-7 col-sm-offset-6\" style=\"margin-top:7%;\">
                                <small id=\"forgot\" onclick=\"windowForgot()\">Forgot your password ?</small>
                            </div>
                            <div>
                                <button class=\"col-sm-10\" style=\"margin-top:20px;\">LOG IN</button>
                                <button class=\"col-sm-10\" style=\"margin-top:10px;\">insert facebook/google button</button>
                                <p style=\"margin-top:40px;\" class=\"col-sm-10 col-sm-offset-2\">Not a member ?  <small id=\"return\">Join now.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"col-sm-offset-4 col-sm-4\" id=\"forgotPage\">
                    <div class=\"glyphicon glyphicon-remove\" id=\"close-button\" onclick=\"windowLog()\" ></div>
                    <div class=\"col-sm-offset-2\" style=\"margin-top:8%; height:300px;\">
                        <p>Enter your email to receive instructions on how to reset your password</p>
                        <input style=\"margin-top:120px;\" class=\"col-sm-10\" type=\"email\" placeholder=\"E-mail\"style=\"margin-top:15%;\">
                        <button style=\"margin-top:30px;\" class=\"col-sm-10\">reset</button>
                    </div>
                    <div class=\"col-sm-offset-5\" style=\"height:50px;\">
                        <p>Or return to  <small id=\"return\" onclick=\"windowForgot()\">Log In.</small></p>
                    </div>

                </div>
            </div>
        </div>

        </div>
    </div>
    <script>
        function windowLog()
        {
            if(\$(\"#forgotPage\").css(\"display\",\"block\"))
            {
                \$(\"#forgotPage\").css(\"display\",\"none\");
                \$(\"#logPage\").css(\"display\",\"block\");
            }
            if (\$(\"#overlay\").css(\"display\") == \"none\")
            {
                \$(\"#overlay\").css(\"display\",\"block\");
                \$(\"html\").css({\"overflow-y\": \"hidden\"});
            }
            else
            {
                \$(\"#overlay\").css(\"display\",\"none\");
                \$(\"html\").css({\"overflow-y\": \"visible\"});
            }
        }
        function windowForgot()
        {
            if (\$(\"#logPage\").css(\"display\") == \"none\")
            {
                \$(\"#forgotPage\").css(\"display\",\"none\");
                \$(\"#logPage\").css(\"display\",\"block\");
            }
            else{
                \$(\"#logPage\").css(\"display\",\"none\");
                \$(\"#forgotPage\").css(\"display\",\"block\");
            }
        }



        ";
        // line 218
        echo "    </script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Store/Default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 218,  37 => 11,  25 => 1,);
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
<html lang=\"fr\" class=\"js_active vc_desktop vc_transform\" >
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>안녕</title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <script src=\"{{asset('parallax.min.js')}}\"></script>
    <style>
        html{
            overflow-x: hidden;
        }
        .bandeau{
            margin-left: -2%;
            width:102%;
            height: 90px;
            background-color: white;
            color: black;
            position: fixed;
            z-index: 3;
            border-bottom-style:outset;
            border-bottom-width:1px;
        }
        #homeBouton{
            margin-left:48%;
            font-family: Malgun Gothic;
            font-size:150%;
            cursor: default;
        }
        .topBouton{
            margin-top:25px;
            text-align: center;
        }
        .topBouton:hover{
            color: #660033;
        }
        .parallax-window {
            background: transparent;
            height: 930px;
        }
        #overlay{
            display:none;
            background-color: rgba(0,0,0,0.7);
            position:fixed;
            width:100%;
            height:100%;
            top:0px;
            left:0px;
            z-index:1000;
            overflow-y: visible;
        }
        #logPage{
            margin-top: 150px;
            height: 600px;
            background-color: white;
            display:block

        }
        #forgotPage{
            margin-top: 200px;
            height: 500px;
            background-color: white;
            display:block
        }
        #close-button{
            margin-left:97%;
            margin-top:2%;
            font-size:130%;
        }
        #close-button:hover{
            color:orange;
            cursor:pointer;
        }
        #forgot{
            color:grey;
        }
        #forgot:hover{
            color:black;
            cursor: pointer;
        }
        #return{
            font-size: 110%;
            text-decoration:underline;
            cursor:pointer;
        }
        #return:hover{
            color:orange;
        }
    </style>
</head>
<body>
    <div class=\"container-fluid\">
        <div class=\"bandeau\">
            <span id=\"homeBouton\">내 마케트</span>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"col-sm-offset-4 col-sm-1 topBouton\">
                        <a href=\"http://195.154.119.108/app_dev.php/\">
                            <span style=\"font-family: Malgun Gothic; cursor: pointer; color:black;\">집</span>
                        </a>
                    </div>
                    <div class=\"col-sm-1 topBouton\">
                        <span style=\"font-family: Malgun Gothic; cursor: pointer;\">남자</span>
                    </div>
                    <div class=\"col-sm-1 topBouton\" style=\"font-family: Malgun Gothic;\">
                        <span style=\"font-family: Malgun Gothic; cursor: pointer;\">여자</span>
                    </div>
                    <div class=\"col-sm-1 topBouton\">
                        <span style=\"font-family: Malgun Gothic; cursor: pointer;\">몰라</span>
                    </div>
                    <div class=\"col-sm-offset-2 col-sm-2 topBouton\">
                        <span style=\"font-family: Malgun Gothic; cursor: pointer;\" onclick=\"windowLog()\">Register/ Log In</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid row col-sm-12\">
        <img style=\"margin-top:6%;width:103%; heigth:600px;\" src=\"https://wallpapercave.com/wp/wp1871582.jpg\"/>
        <div class=\"col-sm-offset-5\" style=\"margin-top:5%; height:350px;\">
            <h1>Insert catch phrase here</h1>
            <p>Insert description here</p>
            <button>insert button here</button>
    </div>
    <div class=\"col-sm-12\">
        <img style=\"margin-left:-2%; width:106%; heigth:600px;\"src=\"https://assets.adidas.fr/image/upload/f_auto,q_auto,fl_lossy/frFR/Images/181101-HOLIDAY-FW18-HP-MH-Wave-1-DT_tcm196-295969.jpg\"/>
        <div class=\"col-sm-offset-5\" style=\"margin-top:4%; height:900px;\">
            <h1>Insert catch phrase here</h1>
            <p>Insert description here</p>
            <button>insert button here</button>
        </div>
    </div>
    <div id=\"overlay\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"col-sm-offset-4 col-sm-4\" id=\"logPage\">
                    <div class=\"glyphicon glyphicon-remove\" id=\"close-button\" onclick=\"windowLog()\" ></div>
                    <div class=\"col-sm-offset-4\">
                        <p style=\"margin-top:10%;\">Connect to your account</p>
                    </div>
                    <div class=\"col-sm-12\">
                        <div class=\"col-sm-offset-2\" style=\"margin-top:8%;\">
                            <input class=\"col-sm-10\" type=\"email\" placeholder=\"E-mail\">
                            <input class=\"col-sm-10\" type=\"password\" placeholder=\"Password\" style=\"margin-top:15%;\">
                            <div class=\"col-sm-7 col-sm-offset-6\" style=\"margin-top:7%;\">
                                <small id=\"forgot\" onclick=\"windowForgot()\">Forgot your password ?</small>
                            </div>
                            <div>
                                <button class=\"col-sm-10\" style=\"margin-top:20px;\">LOG IN</button>
                                <button class=\"col-sm-10\" style=\"margin-top:10px;\">insert facebook/google button</button>
                                <p style=\"margin-top:40px;\" class=\"col-sm-10 col-sm-offset-2\">Not a member ?  <small id=\"return\">Join now.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"col-sm-offset-4 col-sm-4\" id=\"forgotPage\">
                    <div class=\"glyphicon glyphicon-remove\" id=\"close-button\" onclick=\"windowLog()\" ></div>
                    <div class=\"col-sm-offset-2\" style=\"margin-top:8%; height:300px;\">
                        <p>Enter your email to receive instructions on how to reset your password</p>
                        <input style=\"margin-top:120px;\" class=\"col-sm-10\" type=\"email\" placeholder=\"E-mail\"style=\"margin-top:15%;\">
                        <button style=\"margin-top:30px;\" class=\"col-sm-10\">reset</button>
                    </div>
                    <div class=\"col-sm-offset-5\" style=\"height:50px;\">
                        <p>Or return to  <small id=\"return\" onclick=\"windowForgot()\">Log In.</small></p>
                    </div>

                </div>
            </div>
        </div>

        </div>
    </div>
    <script>
        function windowLog()
        {
            if(\$(\"#forgotPage\").css(\"display\",\"block\"))
            {
                \$(\"#forgotPage\").css(\"display\",\"none\");
                \$(\"#logPage\").css(\"display\",\"block\");
            }
            if (\$(\"#overlay\").css(\"display\") == \"none\")
            {
                \$(\"#overlay\").css(\"display\",\"block\");
                \$(\"html\").css({\"overflow-y\": \"hidden\"});
            }
            else
            {
                \$(\"#overlay\").css(\"display\",\"none\");
                \$(\"html\").css({\"overflow-y\": \"visible\"});
            }
        }
        function windowForgot()
        {
            if (\$(\"#logPage\").css(\"display\") == \"none\")
            {
                \$(\"#forgotPage\").css(\"display\",\"none\");
                \$(\"#logPage\").css(\"display\",\"block\");
            }
            else{
                \$(\"#logPage\").css(\"display\",\"none\");
                \$(\"#forgotPage\").css(\"display\",\"block\");
            }
        }



        {# setInterval(function(){ change() }, 3000);
        function change(){
            console.log(\"1\")
            \$('.parallax-window').parallax({imageSrc: 'https://wallpapercave.com/wp/wp1871582.jpg'});
        } #}
    </script>
</body>
</html>", "@Store/Default/home.html.twig", "/var/www/eCommerce/src/StoreBundle/Resources/views/Default/home.html.twig");
    }
}

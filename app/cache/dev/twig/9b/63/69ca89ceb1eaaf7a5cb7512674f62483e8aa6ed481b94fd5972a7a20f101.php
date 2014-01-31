<?php

/* dc3BlintestBundle:Default:signin.html.twig */
class __TwigTemplate_9b6369ca89ceb1eaaf7a5cb7512674f62483e8aa6ed481b94fd5972a7a20f101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "hello !";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<main>
\t\t<header>
\t\t\t<div id=\"contentHeader\" class=\"wrapper\">
\t\t\t\t<ul id=\"linkList\">
\t\t\t\t<li class=\"listItems box-shadow\"><a class=\"linkHeader\" href=\"\">Inscrition</a></li>
\t\t\t\t<li class=\"listItems box-shadow\"><a class=\"linkHeader\" href=\"\">Connexion</a></li>
\t\t\t\t<li class=\"listItems\"><a class=\"linkHeader\" href=\"\">Connexion via Deezer</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"mainContent\">
\t\t\t<div id=\"content\" class=\"wrapper\">
\t\t\t\t<form method=\"POST\" action=\"form.php\">
\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Entrez votre pseudonyme\">
\t\t\t\t\t<input type=\"password\" name=\"pswd\" placeholder=\"Entrez votre mot de passe\">
\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Entrez votre email\">
\t\t\t\t\t<input type=\"sumbmit\" name=\"submit\" value=\"M'inscrire !\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<footer>
\t\t\t<div id=\"contentFooter\" class=\"wrapper\">
\t\t\t\t
\t\t\t</div>
\t\t</footer>
\t</main>
";
    }

    public function getTemplateName()
    {
        return "dc3BlintestBundle:Default:signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,);
    }
}

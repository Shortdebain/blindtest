<?php

/* dc3BlintestBundle:Default:about.html.twig */
class __TwigTemplate_d70222e0df855030d8cb0aa229b78fbe1e459f167abe64ecdfd77441db91b83b extends Twig_Template
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
\t\t\t\t\t<li class=\"listItems\"><a class=\"linkHeader\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("about");
        echo "
\t\t\t\t</ul>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"mainContent\">
\t\t\t<div id=\"content\" class=\"wrapper\">
\t\t\t
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
        return "dc3BlintestBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  38 => 4,  35 => 3,  29 => 2,);
    }
}

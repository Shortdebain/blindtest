<?php

/* dc3BlintestBundle:Default:index.html.twig */
class __TwigTemplate_a5f47e54e8183f837bdf86f1366a7c22bb4da14cd6209bc18f4daf60c5dd1ee9 extends Twig_Template
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
\t\t\t\t<li class=\"listItems box-shadow\"><a class=\"linkHeader\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("signin");
        echo "\">Inscrition</a></li>
\t\t\t\t<li class=\"listItems box-shadow\"><a class=\"linkHeader\" href=\"\">Connexion</a></li>
\t\t\t\t<li class=\"listItems\"><a class=\"linkHeader\" href=\"\">Connexion via Deezer</a></li>
\t\t\t\t<li class=\"listItems\"><a class=\"linkHeader\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">A propos</a></li>
\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"mainContent\">
\t\t\t<div id=\"content\" class=\"wrapper\">
\t\t\t\t<div id=\"player\"></div>
\t\t\t\t<div id=\"dz-root\"></div>
\t\t\t\t\t<script src=\"http://cdn-files.deezer.com/js/min/dz.js\"></script>
\t\t\t\t\t<script>
\t\t\t\t\t\tDZ.init({
\t\t\t\t\t\t\tappId  : '129135',
\t\t\t\t\t\t\tchannelUrl : 'http://blindtest.nicolasr.dc3/channel.html',
\t\t\t\t\t\t\tplayer: {
\t\t\t\t\t\t\t\tcontainer: 'player',
\t\t\t\t\t\t\t\twidth : 800,
\t\t\t\t\t\t\t\theight : 300,
\t\t\t\t\t\t\t\tmuted: false,
\t\t\t\t\t\t\t\tautoplay:true,
\t\t\t\t\t\t\t\tonload : function(){
\t\t\t\t\t\t\t\t\tDZ.player.playTracks[3135553];
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t</script>
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
        return "dc3BlintestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  44 => 8,  38 => 4,  35 => 3,  29 => 2,);
    }
}

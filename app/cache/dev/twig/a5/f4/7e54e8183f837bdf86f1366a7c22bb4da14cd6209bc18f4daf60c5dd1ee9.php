<?php

/* dc3BlintestBundle:Default:index.html.twig */
class __TwigTemplate_a5f47e54e8183f837bdf86f1366a7c22bb4da14cd6209bc18f4daf60c5dd1ee9 extends Twig_Template
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
        echo "<h1>Hello <strong>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</strong></h1>
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
        return array (  19 => 1,);
    }
}

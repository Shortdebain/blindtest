<?php

/* ::base.html.twig */
class __TwigTemplate_ab5f785c106ee939a2b856e32ce25287ba225a63a9cc1bb2633b407904d38a0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6bbfecd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bbfecd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6bbfecd_part_1_main_1.css");
            // line 7
            echo "        \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        \t<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,500,700' rel='stylesheet' type='text/css'>
        ";
            // asset "6bbfecd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bbfecd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6bbfecd_part_1_main_2.css");
            echo "        \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        \t<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,500,700' rel='stylesheet' type='text/css'>
        ";
        } else {
            // asset "6bbfecd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6bbfecd") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6bbfecd.css");
            echo "        \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        \t<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,500,700' rel='stylesheet' type='text/css'>
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0ca108c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0ca108c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0ca108c_part_1_main_1.js");
            // line 17
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "0ca108c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0ca108c") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0ca108c.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "        
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 14,  98 => 13,  92 => 5,  86 => 19,  72 => 17,  67 => 16,  65 => 13,  58 => 10,  31 => 6,  27 => 5,  21 => 1,  50 => 11,  44 => 8,  38 => 4,  35 => 7,  29 => 2,);
    }
}

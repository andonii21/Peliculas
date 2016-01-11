<?php

/* uniPeliculasBundle::layout.html.twig */
class __TwigTemplate_f4787c31cebb53dc43a7b4deb6b41ec8212100047f85fbe62c082e66eee94626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuSuperior' => array($this, 'block_menuSuperior'),
            'central' => array($this, 'block_central'),
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

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "

<div id=\"menuSuperior\">
            ";
        // line 7
        $this->displayBlock('menuSuperior', $context, $blocks);
        // line 10
        echo "        </div>
        
        <div id=\"central\">
            ";
        // line 13
        $this->displayBlock('central', $context, $blocks);
        // line 16
        echo "        </div>
";
    }

    // line 7
    public function block_menuSuperior($context, array $blocks = array())
    {
        // line 8
        echo "             
            ";
    }

    // line 13
    public function block_central($context, array $blocks = array())
    {
        // line 14
        echo "                
            ";
    }

    public function getTemplateName()
    {
        return "uniPeliculasBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  60 => 13,  55 => 8,  52 => 7,  47 => 16,  45 => 13,  38 => 7,  33 => 4,  30 => 3,  85 => 22,  81 => 20,  69 => 16,  64 => 14,  56 => 11,  51 => 9,  44 => 7,  40 => 10,  34 => 5,  31 => 4,  28 => 3,);
    }
}

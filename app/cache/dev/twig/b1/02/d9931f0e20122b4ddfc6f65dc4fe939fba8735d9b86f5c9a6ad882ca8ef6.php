<?php

/* ::base.html.twig */
class __TwigTemplate_b102d9931f0e20122b4ddfc6f65dc4fe939fba8735d9b86f5c9a6ad882ca8ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
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
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        
        <div id=\"titulo\">
            ";
        // line 11
        $this->displayBlock('cabecera', $context, $blocks);
        // line 23
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 26
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 27
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 30
        $this->displayBlock('pie', $context, $blocks);
        // line 31
        echo "        </div>
       
    </body>
</html>

</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unipeliculas/css/peliculas.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />";
    }

    // line 11
    public function block_cabecera($context, array $blocks = array())
    {
        // line 12
        echo "                <h1><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unipeliculas/imagenes/sillon.jpg"), "html", null, true);
        echo "\" width=3% height=3%/>
              PELICULAS <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unipeliculas/imagenes/sillon.jpg"), "html", null, true);
        echo "\" width=3% height=3%/></h1>
              <ul id=\"nav\">
        <li id=\"nav-1\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("peliculas");
        echo "\">Peliculas</a></li>
        <li id=\"nav-4\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("noticias");
        echo "\">Noticias</a></li>
\t<li id=\"nav-2\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("categorias");
        echo "\">Categorias</a></li>
\t<li id=\"nav-3\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("comentarios");
        echo "\">Comentarios</a></li>
        
        
                </ul>
            ";
    }

    // line 26
    public function block_cuerpo($context, array $blocks = array())
    {
    }

    // line 30
    public function block_pie($context, array $blocks = array())
    {
        echo "Bienvenidos a www.peliculas.com";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  115 => 26,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  89 => 13,  84 => 12,  81 => 11,  73 => 6,  67 => 5,  58 => 31,  56 => 30,  51 => 27,  49 => 26,  44 => 23,  42 => 11,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}

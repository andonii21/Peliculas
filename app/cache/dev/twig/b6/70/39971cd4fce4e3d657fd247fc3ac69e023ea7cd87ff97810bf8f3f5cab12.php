<?php

/* uniPeliculasBundle:peliculas:show.html.twig */
class __TwigTemplate_b67039971cd4fce4e3d657fd247fc3ac69e023ea7cd87ff97810bf8f3f5cab12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniPeliculasBundle::layout.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniPeliculasBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 3
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
        echo "</h3>
                  
           <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unipeliculas/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto")) . "")), "html", null, true);
        echo "\" width=10% height=10%/><br>
           
           ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
        echo "<br><br>

         
           
            

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("peliculas");
        echo "\">
            Volver a la pagina principal
        </a>
    </li>
    <li>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("peliculas_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a><br>
        
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("comentarios_new");
        echo "\">
                Create a new entry
      
</ul>

 ";
    }

    public function getTemplateName()
    {
        return "uniPeliculasBundle:peliculas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  61 => 20,  53 => 15,  42 => 7,  37 => 5,  31 => 3,  28 => 2,);
    }
}

<?php

/* uniPeliculasBundle:noticias:buscarTitulolike.html.twig */
class __TwigTemplate_531b56238e43ea74d31c850aa735ed3492b0efcda8b371fb792fd6d5d67916ac extends Twig_Template
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

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "<br>Buscar titulo:
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("noticias_responder_titulolike");
        echo "\" method=\"POST\">
    <input type=\"text\" name=\"titulo\" value=\"Titulo a buscar like\">
    <input type=\"submit\" value=\"OK\">
</form>
      
    
";
    }

    public function getTemplateName()
    {
        return "uniPeliculasBundle:noticias:buscarTitulolike.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  28 => 4,);
    }
}

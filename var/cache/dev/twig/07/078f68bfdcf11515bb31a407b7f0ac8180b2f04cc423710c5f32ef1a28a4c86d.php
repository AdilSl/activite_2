<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_77cbb30ec631c6c230fb82cb0128bd36c9f9ee9bceae64b2ce9907d046dab8c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c58976a0d0c7c7ae1d00eb41900e711745797fd4c4a35c0e7ecb11e753d7912 = $this->env->getExtension("native_profiler");
        $__internal_8c58976a0d0c7c7ae1d00eb41900e711745797fd4c4a35c0e7ecb11e753d7912->enter($__internal_8c58976a0d0c7c7ae1d00eb41900e711745797fd4c4a35c0e7ecb11e753d7912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c58976a0d0c7c7ae1d00eb41900e711745797fd4c4a35c0e7ecb11e753d7912->leave($__internal_8c58976a0d0c7c7ae1d00eb41900e711745797fd4c4a35c0e7ecb11e753d7912_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_857057df4d0f7b0c6cd38741bf125e1c1a8ae9be5a9c0cd5d78d45b559240489 = $this->env->getExtension("native_profiler");
        $__internal_857057df4d0f7b0c6cd38741bf125e1c1a8ae9be5a9c0cd5d78d45b559240489->enter($__internal_857057df4d0f7b0c6cd38741bf125e1c1a8ae9be5a9c0cd5d78d45b559240489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_857057df4d0f7b0c6cd38741bf125e1c1a8ae9be5a9c0cd5d78d45b559240489->leave($__internal_857057df4d0f7b0c6cd38741bf125e1c1a8ae9be5a9c0cd5d78d45b559240489_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5d4d35a6906220a0f8e47164a3f23ce16e7e86f70bc031c59dd8857666069df = $this->env->getExtension("native_profiler");
        $__internal_d5d4d35a6906220a0f8e47164a3f23ce16e7e86f70bc031c59dd8857666069df->enter($__internal_d5d4d35a6906220a0f8e47164a3f23ce16e7e86f70bc031c59dd8857666069df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 21
        echo "
";
        
        $__internal_d5d4d35a6906220a0f8e47164a3f23ce16e7e86f70bc031c59dd8857666069df->leave($__internal_d5d4d35a6906220a0f8e47164a3f23ce16e7e86f70bc031c59dd8857666069df_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e23837918efa4c109c1a1e05478682d76e3fe23a1c8d706d4af2f3729cccb59f = $this->env->getExtension("native_profiler");
        $__internal_e23837918efa4c109c1a1e05478682d76e3fe23a1c8d706d4af2f3729cccb59f->enter($__internal_e23837918efa4c109c1a1e05478682d76e3fe23a1c8d706d4af2f3729cccb59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "
      ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["dateNow"]) ? $context["dateNow"] : $this->getContext($context, "dateNow")), "html", null, true);
        echo "
  ";
        
        $__internal_e23837918efa4c109c1a1e05478682d76e3fe23a1c8d706d4af2f3729cccb59f->leave($__internal_e23837918efa4c109c1a1e05478682d76e3fe23a1c8d706d4af2f3729cccb59f_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  84 => 18,  78 => 17,  70 => 21,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/* */
/*       {{ dateNow }}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */

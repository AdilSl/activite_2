<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_024eeefa9a7eee603634768f0ec51cc9084b8d8df632b839005712aff318ee53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cf0294056a9af2144a82b44dcfd0f39ed731344b04bd50be1c47bded9dc2137 = $this->env->getExtension("native_profiler");
        $__internal_4cf0294056a9af2144a82b44dcfd0f39ed731344b04bd50be1c47bded9dc2137->enter($__internal_4cf0294056a9af2144a82b44dcfd0f39ed731344b04bd50be1c47bded9dc2137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cf0294056a9af2144a82b44dcfd0f39ed731344b04bd50be1c47bded9dc2137->leave($__internal_4cf0294056a9af2144a82b44dcfd0f39ed731344b04bd50be1c47bded9dc2137_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99d6da56a9caecaaa16ccd83aaa8b3cdf00435bde30855dc2500b5138b778caf = $this->env->getExtension("native_profiler");
        $__internal_99d6da56a9caecaaa16ccd83aaa8b3cdf00435bde30855dc2500b5138b778caf->enter($__internal_99d6da56a9caecaaa16ccd83aaa8b3cdf00435bde30855dc2500b5138b778caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_99d6da56a9caecaaa16ccd83aaa8b3cdf00435bde30855dc2500b5138b778caf->leave($__internal_99d6da56a9caecaaa16ccd83aaa8b3cdf00435bde30855dc2500b5138b778caf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9d8e09b1b685702cadb1c0f10066aba21517540e1713c096a3f0ffac6a6d27d = $this->env->getExtension("native_profiler");
        $__internal_b9d8e09b1b685702cadb1c0f10066aba21517540e1713c096a3f0ffac6a6d27d->enter($__internal_b9d8e09b1b685702cadb1c0f10066aba21517540e1713c096a3f0ffac6a6d27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b9d8e09b1b685702cadb1c0f10066aba21517540e1713c096a3f0ffac6a6d27d->leave($__internal_b9d8e09b1b685702cadb1c0f10066aba21517540e1713c096a3f0ffac6a6d27d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_808b835b81bd963227dd38af44dd883d0635246d020c3542fe5d5a3c4594fe01 = $this->env->getExtension("native_profiler");
        $__internal_808b835b81bd963227dd38af44dd883d0635246d020c3542fe5d5a3c4594fe01->enter($__internal_808b835b81bd963227dd38af44dd883d0635246d020c3542fe5d5a3c4594fe01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_808b835b81bd963227dd38af44dd883d0635246d020c3542fe5d5a3c4594fe01->leave($__internal_808b835b81bd963227dd38af44dd883d0635246d020c3542fe5d5a3c4594fe01_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

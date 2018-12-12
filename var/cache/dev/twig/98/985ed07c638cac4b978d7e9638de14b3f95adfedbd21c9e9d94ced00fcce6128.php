<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1d724ee96a0ce00a68ee9afeacf3e8d8660b4e0c641725d177d06fba5acfdc6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84486840c5e21ddd25d2dee8d2d9f816d85d371b5959d4f883d9371f52ed766d = $this->env->getExtension("native_profiler");
        $__internal_84486840c5e21ddd25d2dee8d2d9f816d85d371b5959d4f883d9371f52ed766d->enter($__internal_84486840c5e21ddd25d2dee8d2d9f816d85d371b5959d4f883d9371f52ed766d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84486840c5e21ddd25d2dee8d2d9f816d85d371b5959d4f883d9371f52ed766d->leave($__internal_84486840c5e21ddd25d2dee8d2d9f816d85d371b5959d4f883d9371f52ed766d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4192d9d5715877f4612063d2e235820165b1cbf8afdbb19c4d587e592e861e65 = $this->env->getExtension("native_profiler");
        $__internal_4192d9d5715877f4612063d2e235820165b1cbf8afdbb19c4d587e592e861e65->enter($__internal_4192d9d5715877f4612063d2e235820165b1cbf8afdbb19c4d587e592e861e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4192d9d5715877f4612063d2e235820165b1cbf8afdbb19c4d587e592e861e65->leave($__internal_4192d9d5715877f4612063d2e235820165b1cbf8afdbb19c4d587e592e861e65_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_004e92f1845868b7843515aa9e7cfd6b08a69c26750a895f9b0f168aaa069ed9 = $this->env->getExtension("native_profiler");
        $__internal_004e92f1845868b7843515aa9e7cfd6b08a69c26750a895f9b0f168aaa069ed9->enter($__internal_004e92f1845868b7843515aa9e7cfd6b08a69c26750a895f9b0f168aaa069ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_004e92f1845868b7843515aa9e7cfd6b08a69c26750a895f9b0f168aaa069ed9->leave($__internal_004e92f1845868b7843515aa9e7cfd6b08a69c26750a895f9b0f168aaa069ed9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc1277ac01e7e8dd45093661901f00b8cc93ab31f407de57e8e6c06207f1b900 = $this->env->getExtension("native_profiler");
        $__internal_dc1277ac01e7e8dd45093661901f00b8cc93ab31f407de57e8e6c06207f1b900->enter($__internal_dc1277ac01e7e8dd45093661901f00b8cc93ab31f407de57e8e6c06207f1b900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dc1277ac01e7e8dd45093661901f00b8cc93ab31f407de57e8e6c06207f1b900->leave($__internal_dc1277ac01e7e8dd45093661901f00b8cc93ab31f407de57e8e6c06207f1b900_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

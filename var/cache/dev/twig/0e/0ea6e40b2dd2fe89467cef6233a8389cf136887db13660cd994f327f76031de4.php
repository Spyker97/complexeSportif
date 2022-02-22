<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cours/affiche.html.twig */
class __TwigTemplate_71f2b3ebdb144588429b5d6bf5b0927f1daa515fd09a052a8f8b67dfef920706 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'modifier' => [$this, 'block_modifier'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/affiche.html.twig"));

        $this->parent = $this->loadTemplate("base.front.html.twig", "cours/affiche.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_modifier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modifier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modifier"));

        // line 4
        echo "     <div class=\"row\">
         <div class=\"col-lg-6 offset-lg-3\">
             <div class=\"section-heading\">
                 <h2><em>Program</em></h2>


             </div>
         </div>

         <div class=\"col-lg-6\">

             <ul class=\"features-items\">
                 ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 17
            echo "                 <li class=\"feature-item\">


                     <div class=\"right-content\">

                         <h4>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "TypeCours", [], "any", false, false, false, 22), "html", null, true);
            echo "</h4>
                         <td><div class=\"left-icon\"><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["cour"], "image", [], "any", false, false, false, 23))), "html", null, true);
            echo "\"
                                                         alt=\"\" width=\"300\" height=\"200\"> </div></td>

                        <em>NomCoach:</em>
                         <h4>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "NomCoach", [], "any", false, false, false, 27), "html", null, true);
            echo "</h4>

                         <em>NumSalle:</em>
                         <h4>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "NumSalle", [], "any", false, false, false, 30), "html", null, true);
            echo "</h4>
                         <em>Date:</em>
                         <h4>";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["cour"], "Date", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "Date", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</h4>
                         <em>heure:</em>
                         <h4>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "heure", [], "any", false, false, false, 34), "H:i:sP"), "html", null, true);
            echo "</h4>

                         <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/line-dec.png"), "html", null, true);
            echo "\" alt=\"waves\">
                         <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/line-dec.png"), "html", null, true);
            echo "\" alt=\"waves\">
                         <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/line-dec.png"), "html", null, true);
            echo "\" alt=\"waves\">


                     </div>

                 </li>

                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "     <li class=\"main-button\"><a href=\"/abonnement/new\" class=\"text-button\">abonner</a></li>


 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cours/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 46,  133 => 38,  129 => 37,  125 => 36,  120 => 34,  115 => 32,  110 => 30,  104 => 27,  97 => 23,  93 => 22,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.front.html.twig' %}

 {% block modifier %}
     <div class=\"row\">
         <div class=\"col-lg-6 offset-lg-3\">
             <div class=\"section-heading\">
                 <h2><em>Program</em></h2>


             </div>
         </div>

         <div class=\"col-lg-6\">

             <ul class=\"features-items\">
                 {% for cour in cours %}
                 <li class=\"feature-item\">


                     <div class=\"right-content\">

                         <h4>{{ cour.TypeCours }}</h4>
                         <td><div class=\"left-icon\"><img src=\"{{ asset('uploads/images/' ~ cour.image) }}\"
                                                         alt=\"\" width=\"300\" height=\"200\"> </div></td>

                        <em>NomCoach:</em>
                         <h4>{{ cour.NomCoach }}</h4>

                         <em>NumSalle:</em>
                         <h4>{{ cour.NumSalle }}</h4>
                         <em>Date:</em>
                         <h4>{{ cour.Date ? cour.Date|date('Y-m-d') : '' }}</h4>
                         <em>heure:</em>
                         <h4>{{ cour.heure |date ('H:i:sP') }}</h4>

                         <img src=\"{{ asset('front/assets/images/line-dec.png')}}\" alt=\"waves\">
                         <img src=\"{{ asset('front/assets/images/line-dec.png')}}\" alt=\"waves\">
                         <img src=\"{{ asset('front/assets/images/line-dec.png')}}\" alt=\"waves\">


                     </div>

                 </li>

                 {% endfor %}
     <li class=\"main-button\"><a href=\"/abonnement/new\" class=\"text-button\">abonner</a></li>


 {% endblock %}", "cours/affiche.html.twig", "C:\\xampp\\htdocs\\complexeSportif\\templates\\cours\\affiche.html.twig");
    }
}

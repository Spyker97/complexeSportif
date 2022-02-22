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

/* security/registration.html.twig */
class __TwigTemplate_2f47ff3d50d0424c69aacbfce80487b05876bb7a77d71d48864262fa9d9719fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.signin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.signin.html.twig", "security/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 4
        echo "
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "

    <fieldset>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "cin", [], "any", false, false, false, 8), 'row', ["label" => "", "attr" => ["placeholder" => "Entre ur Cin..."]]);
        // line 9
        echo "
    </fieldset>
    <fieldset>
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "username", [], "any", false, false, false, 12), 'row', ["label" => "Nom d'utilisateur", "attr" => ["placeholder" => "Entre votre nom..."]]);
        // line 13
        echo "
    </fieldset>
    <fieldset>
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "prenom", [], "any", false, false, false, 16), 'row', ["label" => "Prenom d'utilisateur", "attr" => ["placeholder" => "Entre votre prenom..."]]);
        // line 17
        echo "
    </fieldset>
    <fieldset>
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "genre", [], "any", false, false, false, 20), 'row', ["label" => "", "attr" => ["placeholder" => "votre genre..."]]);
        // line 21
        echo "
    </fieldset>
    <fieldset>
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "date_naissance", [], "any", false, false, false, 24), 'row', ["label" => "", "attr" => ["placeholder" => "Votre date de naissance..."]]);
        // line 25
        echo "
    </fieldset>
    <fieldset>
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'row', ["label" => "", "attr" => ["placeholder" => "votre adresse email..."]]);
        // line 29
        echo "
    </fieldset>
    <fieldset>
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "password", [], "any", false, false, false, 32), 'row', ["label" => "", "attr" => ["placeholder" => "Mot e passe!..."]]);
        // line 33
        echo "
    </fieldset>
    <fieldset>
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "confirm_password", [], "any", false, false, false, 36), 'row', ["label" => "Confirme password", "attr" => ["placeholder" => "Répéter votre Mot de passe..."]]);
        // line 37
        echo "
    </fieldset>
    <fieldset>
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "adresse", [], "any", false, false, false, 40), 'row', ["label" => "", "attr" => ["placeholder" => "Votre adresse..."]]);
        // line 41
        echo "
    </fieldset>

    <button type=\"submit\" class=\"btn btn-success\">Inscription!</button>
    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  135 => 41,  133 => 40,  128 => 37,  126 => 36,  121 => 33,  119 => 32,  114 => 29,  112 => 28,  107 => 25,  105 => 24,  100 => 21,  98 => 20,  93 => 17,  91 => 16,  86 => 13,  84 => 12,  79 => 9,  77 => 8,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.signin.html.twig' %}

{% block form %}

    {{ form_start (form) }}

    <fieldset>
    {{ form_row (form.cin, {'label' : '','attr':
        {'placeholder':'Entre ur Cin...'}}) }}
    </fieldset>
    <fieldset>
    {{ form_row (form.username, {'label' : 'Nom d\\'utilisateur','attr':
        {'placeholder':'Entre votre nom...'}}) }}
    </fieldset>
    <fieldset>
    {{ form_row (form.prenom, {'label' : 'Prenom d\\'utilisateur','attr':
        {'placeholder':'Entre votre prenom...'}}) }}
    </fieldset>
    <fieldset>
    {{ form_row (form.genre, {'label' : '','attr':
        {'placeholder':'votre genre...'}}) }}
    </fieldset>
    <fieldset>
    {{ form_row (form.date_naissance, {'label' : '','attr':
        {'placeholder':'Votre date de naissance...'}}) }}
    </fieldset>
    <fieldset>
    {{ form_row (form.email, {'label' : '','attr':
        {'placeholder':'votre adresse email...'}}) }}
    </fieldset>
    <fieldset>
    {{ form_row (form.password, {'label' : '','attr':
        {'placeholder':'Mot e passe!...'}}) }}
    </fieldset>
    <fieldset>
    {{ form_row (form.confirm_password, {'label' : 'Confirme password','attr':
        {'placeholder':'Répéter votre Mot de passe...'}}) }}
    </fieldset>
    <fieldset>
    {{ form_row (form.adresse, {'label' : '','attr':
        {'placeholder':'Votre adresse...'}}) }}
    </fieldset>

    <button type=\"submit\" class=\"btn btn-success\">Inscription!</button>
    {{ form_end (form) }}
{% endblock %}", "security/registration.html.twig", "C:\\xampp\\htdocs\\complexeSportif\\templates\\security\\registration.html.twig");
    }
}

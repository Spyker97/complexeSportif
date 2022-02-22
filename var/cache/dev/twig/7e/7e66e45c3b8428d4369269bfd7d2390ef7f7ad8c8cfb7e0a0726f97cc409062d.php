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

/* base.addcours.html.twig */
class __TwigTemplate_a16c1f7ef5262348c2cd067dd3c1ea6a5e078a2d2e0f6f6d03412c0332aee8af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.addcours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.addcours.html.twig"));

        // line 1
        echo "


<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"signin.css\" rel=\"stylesheet\">

    <title>Document</title>
</head>
<body>
<div class=\"container\">
    <form id=\"contact\" action=\"\" method=\"post\">
        <h3>Quick Contact</h3>
        <h4>Contact us today, and get reply with in 24 hours!</h4>

        <fieldset>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "getNomCoach", [], "any", false, false, false, 21), 'row', ["label" => "", "attr" => ["placeholder" => "Votre date de naissance..."]]);
        // line 22
        echo "
        </fieldset>
        <fieldset>
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "getNumSalle", [], "any", false, false, false, 25), 'row', ["label" => "", "attr" => ["placeholder" => "Votre date de naissance..."]]);
        // line 26
        echo "
        </fieldset>
        <fieldset>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "getTypeCours", [], "any", false, false, false, 29), 'row', ["label" => "", "attr" => ["placeholder" => "Votre date de naissance..."]]);
        // line 30
        echo "
        </fieldset>
        <fieldset>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "getHeure", [], "any", false, false, false, 33), 'row', ["label" => "", "attr" => ["placeholder" => "Votre date de naissance..."]]);
        // line 34
        echo "
        </fieldset>
            <button name=\"submit\" type=\"submit\" id=\"contact-submit\" data-submit=\"...Sending\">Submit</button>
        </fieldset>
    </form>


</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.addcours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  86 => 33,  81 => 30,  79 => 29,  74 => 26,  72 => 25,  67 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"signin.css\" rel=\"stylesheet\">

    <title>Document</title>
</head>
<body>
<div class=\"container\">
    <form id=\"contact\" action=\"\" method=\"post\">
        <h3>Quick Contact</h3>
        <h4>Contact us today, and get reply with in 24 hours!</h4>

        <fieldset>
            {{ form_row (form.getNomCoach, {'label' : '','attr':
                {'placeholder':'Votre date de naissance...'}}) }}
        </fieldset>
        <fieldset>
            {{ form_row (form.getNumSalle, {'label' : '','attr':
                {'placeholder':'Votre date de naissance...'}}) }}
        </fieldset>
        <fieldset>
            {{ form_row (form.getTypeCours, {'label' : '','attr':
                {'placeholder':'Votre date de naissance...'}}) }}
        </fieldset>
        <fieldset>
            {{ form_row (form.getHeure, {'label' : '','attr':
                {'placeholder':'Votre date de naissance...'}}) }}
        </fieldset>
            <button name=\"submit\" type=\"submit\" id=\"contact-submit\" data-submit=\"...Sending\">Submit</button>
        </fieldset>
    </form>


</div>
</body>
</html>", "base.addcours.html.twig", "C:\\xampp\\htdocs\\complexeSportif\\templates\\base.addcours.html.twig");
    }
}

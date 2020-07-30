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

/* admin/product_form.html.twig */
class __TwigTemplate_f0f0f76b2facae49ace84896aff035ed775a2dba9cdfe44c752cd8b80f81af8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/product_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "  <h1>";
        echo twig_escape_filter($this->env, (isset($context["form_title"]) || array_key_exists("form_title", $context) ? $context["form_title"] : (function () { throw new RuntimeError('Variable "form_title" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</h1>

  ";
        // line 6
        if ((isset($context["product"]) || array_key_exists("product", $context))) {
            // line 7
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "image", [], "any", false, false, false, 7))), "html", null, true);
            echo "\" alt=\"\" class=\"img-thumbnail\" height=\"200px\">
  ";
        }
        // line 9
        echo "
  ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), 'row', ["label" => "Titre"]);
        // line 13
        echo "

    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), 'row', ["label" => "Description"]);
        // line 17
        echo "

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\">
          ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "stock", [], "any", false, false, false, 22), 'row', ["label" => "Stock"]);
        // line 24
        echo "
        </div>

        <div class=\"col-sm\">
          ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "price", [], "any", false, false, false, 28), 'row', ["label" => "Prix"]);
        // line 30
        echo "
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-sm\">
          ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "imageUpload", [], "any", false, false, false, 36), 'row', ["label" => "Image"]);
        // line 38
        echo "
        </div>

        <div class=\"col-sm\">
          ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "size", [], "any", false, false, false, 42), 'row', ["label" => "Pointure"]);
        // line 44
        echo "
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-sm\">
          ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "color", [], "any", false, false, false, 50), 'row', ["label" => "Couleur"]);
        // line 52
        echo "
        </div>

        <div class=\"col-sm\">
          ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "brand", [], "any", false, false, false, 56), 'row', ["label" => "Marque"]);
        // line 58
        echo "
        </div>
      </div>
    </div>

    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "categories", [], "any", false, false, false, 63), 'row', ["label" => "Catégories", "attr" => ["class" => "checkbox-column-container"]]);
        // line 68
        echo "

    <button type=\"submit\" class=\"btn btn-success btn-block\">
      Enregistrer
    </button>
  ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/product_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 73,  159 => 68,  157 => 63,  150 => 58,  148 => 56,  142 => 52,  140 => 50,  132 => 44,  130 => 42,  124 => 38,  122 => 36,  114 => 30,  112 => 28,  106 => 24,  104 => 22,  97 => 17,  95 => 15,  91 => 13,  89 => 11,  85 => 10,  82 => 9,  76 => 7,  74 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
  <h1>{{ form_title }}</h1>

  {% if product is defined %}
    <img src=\"{{ asset('photos/' ~ product.image) }}\" alt=\"\" class=\"img-thumbnail\" height=\"200px\">
  {% endif %}

  {{ form_start(form) }}
    {{ form_row(form.title, {
      label: \"Titre\"
    }) }}

    {{ form_row(form.description, {
      label: \"Description\"
    }) }}

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\">
          {{ form_row(form.stock, {
            label: \"Stock\"
          }) }}
        </div>

        <div class=\"col-sm\">
          {{ form_row(form.price, {
            label: \"Prix\"
          }) }}
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-sm\">
          {{ form_row(form.imageUpload, {
            label: \"Image\"
          }) }}
        </div>

        <div class=\"col-sm\">
          {{ form_row(form.size, {
            label: \"Pointure\"
          }) }}
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-sm\">
          {{ form_row(form.color, {
            label: \"Couleur\"
          }) }}
        </div>

        <div class=\"col-sm\">
          {{ form_row(form.brand, {
            label: \"Marque\"
          }) }}
        </div>
      </div>
    </div>

    {{ form_row(form.categories, {
      label: \"Catégories\",
      attr: {
        class: \"checkbox-column-container\"
      }
    }) }}

    <button type=\"submit\" class=\"btn btn-success btn-block\">
      Enregistrer
    </button>
  {{ form_end(form) }}
{% endblock %}
", "admin/product_form.html.twig", "C:\\Users\\stagiaire\\Desktop\\Projet-SF\\Boutique\\templates\\admin\\product_form.html.twig");
    }
}

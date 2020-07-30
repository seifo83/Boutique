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

/* product/index.html.twig */
class __TwigTemplate_7054ebd7207d344c6263c6a01f2fcfe94db9ba87975b5df9e509ff134ea177db extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        echo "
<div class=\"row\">

  <div class=\"col-lg-3\">

    <h1 class=\"my-4\">Shop Name</h1>
    <div class=\"list-group\">
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 12
            echo "
        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 13)), "html", null, true);
            echo "</a>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
  </div>
  <!-- /.col-lg-3 -->

  <div class=\"col-lg-9\">

    <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
      <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
      </ol>
      <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"carousel-item active\">
          <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
        </div>
        <div class=\"carousel-item\">
          <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
        </div>
        <div class=\"carousel-item\">
          <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
        </div>
      </div>
      <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
    </div>

    <div class=\"row\">

    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 52
            echo "      <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
          <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["p"], "slug", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" style=\"height: 160px; display: flex; overflow: hidden; justify-content: center; align-items: center;\">
            <img class=\"card-img-top\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/" . twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 55))), "html", null, true);
            echo "\" alt=\"\" >
          </a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["p"], "slug", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 59), "html", null, true);
            echo "</a>
            </h4>
            <h5>";
            // line 61
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 61), 2, ",", " "), "html", null, true);
            echo "€</h5>
            <p class=\"card-text\">";
            // line 62
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 62), 0, 40), "html", null, true);
            echo "</p>
          </div>
          <div class=\"card-footer\">
            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["p"], "slug", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Voir le produit</a>
          </div>
          <div class=\"card-footer\">
            <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 73,  168 => 65,  162 => 62,  158 => 61,  151 => 59,  144 => 55,  140 => 54,  136 => 52,  132 => 51,  95 => 16,  84 => 13,  81 => 12,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

<div class=\"row\">

  <div class=\"col-lg-3\">

    <h1 class=\"my-4\">Shop Name</h1>
    <div class=\"list-group\">
      {% for c in categories %}

        <a href=\"{{ path('category', { 'slug' : c.slug }) }}\" class=\"list-group-item\">{{ c.title | capitalize }}</a>

      {% endfor %}
    </div>
  </div>
  <!-- /.col-lg-3 -->

  <div class=\"col-lg-9\">

    <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
      <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
      </ol>
      <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"carousel-item active\">
          <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
        </div>
        <div class=\"carousel-item\">
          <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
        </div>
        <div class=\"carousel-item\">
          <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
        </div>
      </div>
      <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
    </div>

    <div class=\"row\">

    {% for p in products %}
      <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
          <a href=\"{{ path('product', { 'slug' : p.slug }) }}\" style=\"height: 160px; display: flex; overflow: hidden; justify-content: center; align-items: center;\">
            <img class=\"card-img-top\" src=\"{{ asset('photos/' ~ p.image) }}\" alt=\"\" >
          </a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"{{ path('product', { 'slug' : p.slug }) }}\">{{ p.title }}</a>
            </h4>
            <h5>{{ p.price | number_format(2, ',', ' ') }}€</h5>
            <p class=\"card-text\">{{ p.description | slice(0, 40) }}</p>
          </div>
          <div class=\"card-footer\">
            <a href=\"{{ path('product', { 'slug' : p.slug }) }}\" class=\"btn btn-warning\">Voir le produit</a>
          </div>
          <div class=\"card-footer\">
            <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
    {% endfor %}

    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

{% endblock %}
", "product/index.html.twig", "C:\\Users\\stagiaire\\Desktop\\Projet-SF\\Boutique\\templates\\product\\index.html.twig");
    }
}

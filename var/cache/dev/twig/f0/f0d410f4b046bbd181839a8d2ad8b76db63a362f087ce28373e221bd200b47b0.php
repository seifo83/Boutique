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

/* admin/product_list.html.twig */
class __TwigTemplate_bbce8629840c82f6e31a0876972c920181ebec66a42b0a9ef860aeb994e67a73 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/product_list.html.twig", 1);
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
  <h1>Gestion des produits</h1>

  <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_add");
        echo "\" class=\"btn btn-info\">
    Ajouter un produit
  </a>

  <div class=\"row\">
    <table class=\"table table-bordered table-responsive-sm\">
      <thead>
      <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Nom</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Stock</th>
        <th scope=\"col\">Prix</th>
        <th scope=\"col\">Image</th>
        <th scope=\"col\">Taille</th>
        <th scope=\"col\">Couleur</th>
        <th scope=\"col\">Marque</th>
        <th scope=\"col\" colspan=\"3\"></th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 29
            echo "        <tr>
          <th scope=\"row\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</th>
          <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 32), 0, 20), "html", null, true);
            echo "...</td>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "stock", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
          <td>";
            // line 34
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 34) . " €"), "html", null, true);
            echo "</td>
          <td><img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/photos/" . twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 35))), "html", null, true);
            echo "\" height=\"80px\" width=\"80px\" style=\"margin-right: 30px\"></td>
          <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "size", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
          <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "color", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
          <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "brand", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
          <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_update", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Modifier</a> </td>
          <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a></td>

        </tr>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "      </tbody>

    </table>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/product_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 45,  144 => 40,  140 => 39,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  101 => 29,  97 => 28,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

  <h1>Gestion des produits</h1>

  <a href=\"{{ path('admin_product_add') }}\" class=\"btn btn-info\">
    Ajouter un produit
  </a>

  <div class=\"row\">
    <table class=\"table table-bordered table-responsive-sm\">
      <thead>
      <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Nom</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Stock</th>
        <th scope=\"col\">Prix</th>
        <th scope=\"col\">Image</th>
        <th scope=\"col\">Taille</th>
        <th scope=\"col\">Couleur</th>
        <th scope=\"col\">Marque</th>
        <th scope=\"col\" colspan=\"3\"></th>
      </tr>
      </thead>
      <tbody>
      {% for p in products %}
        <tr>
          <th scope=\"row\">{{ p.id }}</th>
          <td>{{ p.title }}</td>
          <td>{{ p.description|slice(0, 20) }}...</td>
          <td>{{ p.stock }}</td>
          <td>{{ p.price ~ \" €\"}}</td>
          <td><img src=\"{{ asset('/photos/' ~ p.image) }}\" height=\"80px\" width=\"80px\" style=\"margin-right: 30px\"></td>
          <td>{{ p.size }}</td>
          <td>{{ p.color }}</td>
          <td>{{ p.brand }}</td>
          <td><a href=\"{{ path('admin_product_update', {id: p.id}) }}\" class=\"btn btn-success\">Modifier</a> </td>
          <td><a href=\"{{ path('admin_product_delete', {id: p.id}) }}\" class=\"btn btn-danger\">Supprimer</a></td>

        </tr>

      {% endfor %}
      </tbody>

    </table>
  </div>

{% endblock %}
", "admin/product_list.html.twig", "C:\\Users\\stagiaire\\Desktop\\Projet-SF\\Boutique\\templates\\admin\\product_list.html.twig");
    }
}

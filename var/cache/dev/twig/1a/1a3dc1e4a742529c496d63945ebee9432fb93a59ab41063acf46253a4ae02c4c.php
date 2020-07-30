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

/* order/cart.html.twig */
class __TwigTemplate_e7865ef27e3e7b59d5f0f4dc18bb78961de947b41c8b45d35907fb2d813d1763 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/cart.html.twig", 1);
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

  <table class=\"table table-striped table-dark\">
    <thead>
      <tr>
        <th colspan=\"6\">Panier</th>
      </tr>
      <tr>
        <th>Photo</th>
        <th>Titre</th>
        <th>Prix unitaire</th>
        <th>Quantité</th>
        <th>Prix total</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 22
        $context["totalPanier"] = 0;
        // line 23
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "session", [], "any", false, false, false, 23), "get", [0 => "panier"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 24
            echo "      <tr>
        <td><img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 25), "image", [], "any", false, false, false, 25))), "html", null, true);
            echo "\" height=\"50px\" /></td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 26), "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27), 2, ",", " "), "html", null, true);
            echo "€</td>

        <td>
          <form action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_item_update_quantity", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" method=\"post\">
            <div class=\"input-group input-group-sm\">
              <input type=\"number\" class=\"form-control\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 32), "html", null, true);
            echo "\" name=\"qt\">
              <div class=\"input-group-append\">
                <button type=\"submit\" class=\"btn btn-info\">
                  <i class=\"fas fa-edit\"></i>
                </button>
              </div>
            </div>
          </form>
        </td>

        ";
            // line 42
            $context["totalProduct"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 42), "price", [], "any", false, false, false, 42) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 42));
            // line 43
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalProduct"]) || array_key_exists("totalProduct", $context) ? $context["totalProduct"] : (function () { throw new RuntimeError('Variable "totalProduct" does not exist.', 43, $this->source); })()), 2, ",", " "), "html", null, true);
            echo "€</td>
        <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_item_delete", ["key" => $context["key"]]), "html", null, true);
            echo "\">Supprimer du panier</a></td>
      </tr>
      ";
            // line 46
            $context["totalPanier"] = ((isset($context["totalPanier"]) || array_key_exists("totalPanier", $context) ? $context["totalPanier"] : (function () { throw new RuntimeError('Variable "totalPanier" does not exist.', 46, $this->source); })()) + (isset($context["totalProduct"]) || array_key_exists("totalProduct", $context) ? $context["totalProduct"] : (function () { throw new RuntimeError('Variable "totalProduct" does not exist.', 46, $this->source); })()));
            // line 47
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      <tr>
        <td colspan=\"4\">Total Panier</td>
        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalPanier"]) || array_key_exists("totalPanier", $context) ? $context["totalPanier"] : (function () { throw new RuntimeError('Variable "totalPanier" does not exist.', 50, $this->source); })()), 2, ",", " "), "html", null, true);
        echo "€</td>
        <td><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete");
        echo "\">Vider le panier</a></td>
      </tr>
      <tr>
        <td colspan=\"6\"><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_checkout");
        echo "\">Confirmer le panier et passer à la suite</a></td>
      </tr>

    </tbody>
  </table>


</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 54,  158 => 51,  154 => 50,  150 => 48,  144 => 47,  142 => 46,  137 => 44,  132 => 43,  130 => 42,  117 => 32,  112 => 30,  106 => 27,  102 => 26,  98 => 25,  95 => 24,  90 => 23,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'  %}

{% block content %}

<div class=\"row\">

  <table class=\"table table-striped table-dark\">
    <thead>
      <tr>
        <th colspan=\"6\">Panier</th>
      </tr>
      <tr>
        <th>Photo</th>
        <th>Titre</th>
        <th>Prix unitaire</th>
        <th>Quantité</th>
        <th>Prix total</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      {% set totalPanier = 0 %}
      {% for key, item in app.session.get('panier') %}
      <tr>
        <td><img src=\"{{ asset('photos/' ~ item.product.image) }}\" height=\"50px\" /></td>
        <td>{{ item.product.title }}</td>
        <td>{{ item.product.price | number_format(2, ',', ' ') }}€</td>

        <td>
          <form action=\"{{ path('cart_item_update_quantity', {id: item.product.id}) }}\" method=\"post\">
            <div class=\"input-group input-group-sm\">
              <input type=\"number\" class=\"form-control\" value=\"{{ item.quantity }}\" name=\"qt\">
              <div class=\"input-group-append\">
                <button type=\"submit\" class=\"btn btn-info\">
                  <i class=\"fas fa-edit\"></i>
                </button>
              </div>
            </div>
          </form>
        </td>

        {% set totalProduct =  item.product.price * item.quantity %}
        <td>{{ totalProduct | number_format(2, ',', ' ') }}€</td>
        <td><a href=\"{{ path('cart_item_delete', {'key' : key}) }}\">Supprimer du panier</a></td>
      </tr>
      {% set totalPanier = totalPanier + totalProduct %}
      {% endfor %}
      <tr>
        <td colspan=\"4\">Total Panier</td>
        <td>{{ totalPanier | number_format(2, ',', ' ') }}€</td>
        <td><a href=\"{{ path('cart_delete') }}\">Vider le panier</a></td>
      </tr>
      <tr>
        <td colspan=\"6\"><a href=\"{{ path('cart_checkout') }}\">Confirmer le panier et passer à la suite</a></td>
      </tr>

    </tbody>
  </table>


</div>




{% endblock %}
", "order/cart.html.twig", "C:\\Users\\stagiaire\\Desktop\\Projet-SF\\Boutique\\templates\\order\\cart.html.twig");
    }
}

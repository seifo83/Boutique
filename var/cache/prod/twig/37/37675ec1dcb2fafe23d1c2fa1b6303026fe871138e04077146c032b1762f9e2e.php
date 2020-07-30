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
class __TwigTemplate_aa73d6bff888c2d108755860041c872bd8023149dc62cf22d977f9ce124bec65 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/cart.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 23), "get", [0 => "panier"], "method", false, false, false, 23));
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
        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
        ";
            // line 29
            $context["totalProduct"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 29), "price", [], "any", false, false, false, 29) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 29));
            // line 30
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalProduct"] ?? null), 2, ",", " "), "html", null, true);
            echo "€</td>
        <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_item_delete", ["key" => $context["key"]]), "html", null, true);
            echo "\">Supprimer du panier</a></td>
      </tr>
      ";
            // line 33
            $context["totalPanier"] = (($context["totalPanier"] ?? null) + ($context["totalProduct"] ?? null));
            // line 34
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "      <tr>
        <td colspan=\"4\">Total Panier</td>
        <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalPanier"] ?? null), 2, ",", " "), "html", null, true);
        echo "€</td>
        <td><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete");
        echo "\">Vider le panier</a></td>
      </tr>
      <tr>
        <td colspan=\"6\"><a href=\"\">Confirmer le panier et passer à la suite</a></td>
      </tr>

    </tbody>
  </table>


</div>




";
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
        return array (  124 => 38,  120 => 37,  116 => 35,  110 => 34,  108 => 33,  103 => 31,  98 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  77 => 24,  72 => 23,  70 => 22,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/cart.html.twig", "C:\\Users\\stagiaire\\Desktop\\Projet-SF\\Boutique\\templates\\order\\cart.html.twig");
    }
}

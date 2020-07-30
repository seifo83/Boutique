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
class __TwigTemplate_d961cad5cd166e68167705e4d87502d0d9046adea0d0b7dcb682805c352f84a8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"row\">

  <div class=\"col-lg-3\">

    <h1 class=\"my-4\">Shop Name</h1>
    <div class=\"list-group\">
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
        return array (  164 => 73,  150 => 65,  144 => 62,  140 => 61,  133 => 59,  126 => 55,  122 => 54,  118 => 52,  114 => 51,  77 => 16,  66 => 13,  63 => 12,  59 => 11,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/index.html.twig", "C:\\Users\\stagiaire\\Desktop\\Projet-SF\\Boutique\\templates\\product\\index.html.twig");
    }
}

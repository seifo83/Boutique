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

/* product/show.html.twig */
class __TwigTemplate_a9ae465a4097f1f8b930fde20e1536beacbcbc359c25782e8926ced975999e07 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"row\">
<!-- Post Content Column -->
     <div class=\"col-lg-8\">

       <!-- Title -->
       <h1 class=\"mt-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>

       <!-- Author -->
       <p class=\"lead\">

         <a href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "brand", [], "any", false, false, false, 17), "html", null, true);
        echo "</a>
       </p>


       <!-- Date/Time -->
       <div class=\"card-footer\">
            <small class=\"text-muted\">★ ★ ★ ★ ☆</small>
          </div>


       <!-- Preview Image -->
       <div style=\"display:flex; height: 250px; justify-content: center; align-items:center; overflow:hidden\">
        <img class=\"img-fluid rounded\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29))), "html", null, true);
        echo "\" alt=\"\">
       </div>
       <hr>

       <!-- Post Content -->
       <p class=\"lead\">
       ";
        // line 35
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35);
        echo "

       </p>

       <!-- Comments Form -->
       <div class=\"card my-4\">
         <h5 class=\"card-header\">Leave a Comment:</h5>
         <div class=\"card-body\">
           <form>
             <div class=\"form-group\">
               <textarea class=\"form-control\" rows=\"3\"></textarea>
             </div>
             <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
           </form>
         </div>
       </div>

       <!-- Single Comment -->
       <div class=\"media mb-4\">
         <img class=\"d-flex mr-3 rounded-circle\" src=\"http://placehold.it/50x50\" alt=\"\">
         <div class=\"media-body\">
           <h5 class=\"mt-0\">Commenter Name</h5>
           Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
         </div>
       </div>

       <!-- Comment with nested comments -->
       <div class=\"media mb-4\">
         <img class=\"d-flex mr-3 rounded-circle\" src=\"http://placehold.it/50x50\" alt=\"\">
         <div class=\"media-body\">
           <h5 class=\"mt-0\">Commenter Name</h5>
           Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

           <div class=\"media mt-4\">
             <img class=\"d-flex mr-3 rounded-circle\" src=\"http://placehold.it/50x50\" alt=\"\">
             <div class=\"media-body\">
               <h5 class=\"mt-0\">Commenter Name</h5>
               Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
             </div>
           </div>

           <div class=\"media mt-4\">
             <img class=\"d-flex mr-3 rounded-circle\" src=\"http://placehold.it/50x50\" alt=\"\">
             <div class=\"media-body\">
               <h5 class=\"mt-0\">Commenter Name</h5>
               Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
             </div>
           </div>

         </div>
       </div>

     </div>

     <!-- Sidebar Widgets Column -->
     <div class=\"col-md-4\">




       <!-- cart Widget -->
       <div class=\"card my-4\">
         <h5 class=\"card-header\">Acheter ce produit</h5>
         <div class=\"card-body\">
          <form method=\"post\" action=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\">
             <div class=\"input-group\">
               <select name=\"qty\" class=\"form-control\">

                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, min(5, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 103, $this->source); })()), "stock", [], "any", false, false, false, 103))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 104
            echo "                  <option>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "               </select>
               <span class=\"input-group-btn\">
                 <button class=\"btn btn-success\" type=\"submit\">Ajouter au panier</button>
               </span>
             </div>
           </form>

         </div>
       </div>








       <!-- Categories Widget -->
       <div class=\"card my-4\">
         <h5 class=\"card-header\">Categories et mot clés</h5>
         <div class=\"card-body\">
           <div class=\"row\">
             <div class=\"col-lg-6\">
               <ul class=\"list-unstyled mb-0\">

               ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 131, $this->source); })()), "categories", [], "any", false, false, false, 131));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 132
            echo "                 <li>
                   <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 133)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 133), "html", null, true);
            echo "</a>
                 </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "               </ul>
             </div>
             <div class=\"col-lg-6\">
               <ul class=\"list-unstyled mb-0\">
                ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 140, $this->source); })()), "categories", [], "any", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 141
            echo "                ";
            $context["tab"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "keywords", [], "any", false, false, false, 141), ", ");
            // line 142
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 142, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["kw"]) {
                // line 143
                echo "                     <li>
                       <a href=\"";
                // line 144
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
                echo "?s=";
                echo twig_escape_filter($this->env, $context["kw"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["kw"], "html", null, true);
                echo "</a>
                     </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kw'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "
               </ul>
             </div>
           </div>
         </div>
       </div>

       <!-- Side Widget -->
       <div class=\"card my-4\">
         <h5 class=\"card-header\">Side Widget</h5>
         <div class=\"card-body\">
           You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
         </div>
       </div>

     </div>




</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 148,  274 => 147,  261 => 144,  258 => 143,  253 => 142,  250 => 141,  246 => 140,  240 => 136,  229 => 133,  226 => 132,  222 => 131,  195 => 106,  186 => 104,  182 => 103,  175 => 99,  108 => 35,  99 => 29,  84 => 17,  76 => 12,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block content %}

<div class=\"row\">
<!-- Post Content Column -->
     <div class=\"col-lg-8\">

       <!-- Title -->
       <h1 class=\"mt-4\">{{ product.title }}</h1>

       <!-- Author -->
       <p class=\"lead\">

         <a href=\"#\">{{ product.brand }}</a>
       </p>


       <!-- Date/Time -->
       <div class=\"card-footer\">
            <small class=\"text-muted\">★ ★ ★ ★ ☆</small>
          </div>


       <!-- Preview Image -->
       <div style=\"display:flex; height: 250px; justify-content: center; align-items:center; overflow:hidden\">
        <img class=\"img-fluid rounded\" src=\"{{ asset('photos/' ~ product.image) }}\" alt=\"\">
       </div>
       <hr>

       <!-- Post Content -->
       <p class=\"lead\">
       {{ product.description | raw }}

       </p>

       <!-- Comments Form -->
       <div class=\"card my-4\">
         <h5 class=\"card-header\">Leave a Comment:</h5>
         <div class=\"card-body\">
           <form>
             <div class=\"form-group\">
               <textarea class=\"form-control\" rows=\"3\"></textarea>
             </div>
             <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
           </form>
         </div>
       </div>

       <!-- Single Comment -->
       <div class=\"media mb-4\">
         <img class=\"d-flex mr-3 rounded-circle\" src=\"http://placehold.it/50x50\" alt=\"\">
         <div class=\"media-body\">
           <h5 class=\"mt-0\">Commenter Name</h5>
           Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
         </div>
       </div>

       <!-- Comment with nested comments -->
       <div class=\"media mb-4\">
         <img class=\"d-flex mr-3 rounded-circle\" src=\"http://placehold.it/50x50\" alt=\"\">
         <div class=\"media-body\">
           <h5 class=\"mt-0\">Commenter Name</h5>
           Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

           <div class=\"media mt-4\">
             <img class=\"d-flex mr-3 rounded-circle\" src=\"http://placehold.it/50x50\" alt=\"\">
             <div class=\"media-body\">
               <h5 class=\"mt-0\">Commenter Name</h5>
               Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
             </div>
           </div>

           <div class=\"media mt-4\">
             <img class=\"d-flex mr-3 rounded-circle\" src=\"http://placehold.it/50x50\" alt=\"\">
             <div class=\"media-body\">
               <h5 class=\"mt-0\">Commenter Name</h5>
               Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
             </div>
           </div>

         </div>
       </div>

     </div>

     <!-- Sidebar Widgets Column -->
     <div class=\"col-md-4\">




       <!-- cart Widget -->
       <div class=\"card my-4\">
         <h5 class=\"card-header\">Acheter ce produit</h5>
         <div class=\"card-body\">
          <form method=\"post\" action=\"{{ path('cart_add', {'id' : product.id })}}\">
             <div class=\"input-group\">
               <select name=\"qty\" class=\"form-control\">

                {% for i in 1..min(5, product.stock) %}
                  <option>{{ i }}</option>
                {% endfor %}
               </select>
               <span class=\"input-group-btn\">
                 <button class=\"btn btn-success\" type=\"submit\">Ajouter au panier</button>
               </span>
             </div>
           </form>

         </div>
       </div>








       <!-- Categories Widget -->
       <div class=\"card my-4\">
         <h5 class=\"card-header\">Categories et mot clés</h5>
         <div class=\"card-body\">
           <div class=\"row\">
             <div class=\"col-lg-6\">
               <ul class=\"list-unstyled mb-0\">

               {% for c in product.categories %}
                 <li>
                   <a href=\"{{ path('category', { 'slug' : c.slug }) }}\">{{ c.title }}</a>
                 </li>
              {% endfor %}
               </ul>
             </div>
             <div class=\"col-lg-6\">
               <ul class=\"list-unstyled mb-0\">
                {% for c in product.categories %}
                {% set tab = c.keywords|split(', ') %}
                    {% for kw in tab %}
                     <li>
                       <a href=\"{{ path('recherche') }}?s={{ kw }}\">{{ kw }}</a>
                     </li>
                  {% endfor %}
                {% endfor %}

               </ul>
             </div>
           </div>
         </div>
       </div>

       <!-- Side Widget -->
       <div class=\"card my-4\">
         <h5 class=\"card-header\">Side Widget</h5>
         <div class=\"card-body\">
           You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
         </div>
       </div>

     </div>




</div>
{% endblock  %}
", "product/show.html.twig", "C:\\Users\\stagiaire\\Desktop\\Projet-SF\\Boutique\\templates\\product\\show.html.twig");
    }
}

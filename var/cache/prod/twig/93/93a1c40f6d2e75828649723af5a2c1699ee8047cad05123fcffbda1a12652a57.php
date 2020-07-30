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

/* base.html.twig */
class __TwigTemplate_da8df99888290b45986d62924a480857e27b7404bf1ad0741359e3803e4acd92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

  <!-- Custom styles for this template -->
  <link href=\"css/shop-homepage.css\" rel=\"stylesheet\">

</head>

<body style=\"padding-top: 100px;\">

<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top bg-dark\">
            <h1 class=\"h2\"><a class=\"navbar-brand\" href=\"\">
              <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.jpg"), "html", null, true);
        echo "\" height=\"50px\"/>
            </a></h1>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\"
                aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav mr-auto\">

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Boutique</a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Connexion</a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Inscription</a>
                    </li>
                    <!-- menu membre connecte -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-user\"></i> Username
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown1\">
                            <a href=\"\" class=\"dropdown-item\">Profil</a>
                            <a href=\"\" class=\"dropdown-item\">Commandes</a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"\" class=\"dropdown-item\">Déconnexion</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown2\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-cogs\"></i> Gestion de la boutique
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown2\">
                            <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product");
        echo "\" class=\"dropdown-item\">Gestion des produits</a>
                            <a href=\"\" class=\"dropdown-item\">Gestion des membres</a>
                            <a href=\"\" class=\"dropdown-item\">Gestion des commandes</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"\">
                            <i class=\"fa fa-shopping-cart\"></i> Panier
                        </a>
                    </li>

                </ul>

                <form action=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        echo "\" method=\"get\" class=\"form-inline mt-2 mt-md-0\">
                    <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Nike, Adidas, Homme...\" aria-label=\"rechercher\" name=\"s\" value=\"\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
                </form>



            </div>
        </nav>
    </header>

  <!-- Page Content -->
  <div class=\"container\">




    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 91
            echo "    <div class=\"alert alert-success\">";
            echo $context["message"];
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "errors"], "method", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 94
            echo "    <div class=\"alert alert-danger\">";
            echo $context["message"];
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
    ";
        // line 97
        $this->displayBlock('content', $context, $blocks);
        // line 98
        echo "



  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class=\"py-5 bg-dark\">
    <div class=\"container\">
      <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>

</body>

</html>
";
    }

    // line 97
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 97,  179 => 98,  177 => 97,  174 => 96,  165 => 94,  160 => 93,  151 => 91,  147 => 90,  127 => 73,  111 => 60,  89 => 41,  83 => 38,  77 => 35,  64 => 25,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\stagiaire\\Desktop\\Projet-SF\\Boutique\\templates\\base.html.twig");
    }
}

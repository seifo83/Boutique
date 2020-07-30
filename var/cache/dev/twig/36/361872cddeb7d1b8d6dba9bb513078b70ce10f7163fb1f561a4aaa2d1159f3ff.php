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
class __TwigTemplate_cd7715d02fe11c9bf330b021c3670eed5a05cd7d0b022ba3353b55b4c0709909 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\">

  <!-- Custom styles for this template -->
  <link href=\"css/shop-homepage.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/form.css"), "html", null, true);
        echo "\">

</head>

<body style=\"padding-top: 100px;\">

<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top bg-dark\">
            <h1 class=\"h2\"><a class=\"navbar-brand\" href=\"\">
              <img src=\"";
        // line 27
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
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Boutique</a>
                    </li>

                    ";
        // line 41
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa fa-user\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "username", [], "any", false, false, false, 44), "html", null, true);
            echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown1\">
                                <a href=\"\" class=\"dropdown-item\">Profil</a>
                                <a href=\"\" class=\"dropdown-item\">Commandes</a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
                            </div>
                        </li>

                    ";
        } else {
            // line 55
            echo "                        ";
            // line 56
            echo "                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a>
                        </li>
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
                        </li>
                    ";
        }
        // line 63
        echo "
                    ";
        // line 64
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 65
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown2\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa fa-cogs\"></i> Gestion de la boutique
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown2\">
                                <a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product");
            echo "\" class=\"dropdown-item\">Gestion des produits</a>
                                <a href=\"\" class=\"dropdown-item\">Gestion des membres</a>
                                <a href=\"\" class=\"dropdown-item\">Gestion des commandes</a>
                            </div>
                        </li>
                    ";
        }
        // line 76
        echo "
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">
                            <i class=\"fa fa-shopping-cart\"></i> Panier
                        </a>
                    </li>

                </ul>

                <form action=\"";
        // line 85
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
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 103
            echo "    <div class=\"alert alert-success\">";
            echo $context["message"];
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "flashes", [0 => "errors"], "method", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 106
            echo "    <div class=\"alert alert-danger\">";
            echo $context["message"];
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
    ";
        // line 109
        $this->displayBlock('content', $context, $blocks);
        // line 110
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 109
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  255 => 109,  222 => 110,  220 => 109,  217 => 108,  208 => 106,  203 => 105,  194 => 103,  190 => 102,  170 => 85,  160 => 78,  156 => 76,  147 => 70,  140 => 65,  138 => 64,  135 => 63,  129 => 60,  123 => 57,  120 => 56,  118 => 55,  110 => 50,  101 => 44,  97 => 42,  94 => 41,  88 => 37,  75 => 27,  64 => 19,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\">

  <!-- Custom styles for this template -->
  <link href=\"css/shop-homepage.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/form.css') }}\">

</head>

<body style=\"padding-top: 100px;\">

<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top bg-dark\">
            <h1 class=\"h2\"><a class=\"navbar-brand\" href=\"\">
              <img src=\"{{ asset('img/logo.jpg') }}\" height=\"50px\"/>
            </a></h1>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\"
                aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav mr-auto\">

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('home') }}\">Boutique</a>
                    </li>

                    {# Si on est connecté #}
                    {% if app.user %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa fa-user\"></i> {{ app.user.username }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown1\">
                                <a href=\"\" class=\"dropdown-item\">Profil</a>
                                <a href=\"\" class=\"dropdown-item\">Commandes</a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"{{ path('logout') }}\" class=\"dropdown-item\">Déconnexion</a>
                            </div>
                        </li>

                    {% else %}
                        {# si on est pas connecté #}
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"{{ path('login') }}\">Connexion</a>
                        </li>
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"{{ path('register') }}\">Inscription</a>
                        </li>
                    {% endif %}

                    {% if is_granted(\"ROLE_ADMIN\") %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown2\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa fa-cogs\"></i> Gestion de la boutique
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown2\">
                                <a href=\"{{ path('admin_product') }}\" class=\"dropdown-item\">Gestion des produits</a>
                                <a href=\"\" class=\"dropdown-item\">Gestion des membres</a>
                                <a href=\"\" class=\"dropdown-item\">Gestion des commandes</a>
                            </div>
                        </li>
                    {% endif %}

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('cart') }}\">
                            <i class=\"fa fa-shopping-cart\"></i> Panier
                        </a>
                    </li>

                </ul>

                <form action=\"{{ path('recherche') }}\" method=\"get\" class=\"form-inline mt-2 mt-md-0\">
                    <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Nike, Adidas, Homme...\" aria-label=\"rechercher\" name=\"s\" value=\"\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
                </form>



            </div>
        </nav>
    </header>

  <!-- Page Content -->
  <div class=\"container\">




    {% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">{{ message | raw }}</div>
    {% endfor %}
    {% for message in app.flashes('errors') %}
    <div class=\"alert alert-danger\">{{ message | raw }}</div>
    {% endfor %}

    {% block content %}{% endblock %}




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
", "base.html.twig", "C:\\Users\\stagiaire\\Desktop\\Projet-SF\\Boutique\\templates\\base.html.twig");
    }
}

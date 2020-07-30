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

/* user/login.html.twig */
class __TwigTemplate_274f23160c5b0459ee2c5fc82a24b884810aba9fabce7b32f1dcf32274b3a7d8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Connexion</h1>
    <form class=\"\" method=\"post\" action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_check");
        echo "\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" name=\"_username\" placeholder=\"Pseudo\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["lastUsername"] ?? null), "html", null, true);
        echo "\" />
        </div>
        <div class=\"form-group\">
            <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Mot de passe\" />
        </div>
        <div class=\"form-group\">
            <input type=\"submit\" class=\"btn btn-success\" value=\"connexion\"/>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/login.html.twig", "C:\\Users\\stagiaire\\Desktop\\Projet-SF\\Boutique\\templates\\user\\login.html.twig");
    }
}

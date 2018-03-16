<?php

/* home.twig */
class __TwigTemplate_87b7a2af445b0bb4f79582843f8f87a30dcd54ee3e13862839502ea3a4537898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "home.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  <title>Dashboard</title>
";
    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 7
        echo "<link rel=\"stylesheet\" href=\"../happy_days_twig/css/home.css\">
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"wrapper\">

  <!-- Titre milieu de page qui redirige vers ses playlist ! #HappyDays -->
 
  <div class=\"text-wrap\">
    <div class=\"text\"><span>HappyDays!</div> 
      <div class=\"main-btn_wrapper\">
        
      </div>
    </div>
  </div>

<!-- Affiche des playlist par le click via le titre  -->

<!-- Titre Zaza  -->
  <div class=\"page\" id=\"curator\">
    <div class=\"curator_title_wrapper\"><span>( ͡° ͜ʖ ͡°)</span>
      <div class=\"curator_line\"></div>
      <div class=\"curator_title\">Playlist</div>
      <div class=\"curator_line\"></div><span>( ͡° ͜ʖ ͡°)</span>
  </div>


<!-- Bouton ajouter playlist  -->
    <div class=\"curator_list\" id=\"page2\">
      <div class=\"curator_list_content\">
        <div class=\"connect_btn_wrapper item\">
          
          <a style=\"text-decoration:none;\" href=\"?p=form_playlist\">
          <div class=\"connect_btn\">
            
            <div class=\"connect_btn_text\">Nouvelle<br/>Playlist</div>
            
          </div>
        </div>
        </a>
      
        <!-- Proposition des playlists existantes  -->
        <div class=\"curator_list_content_desc\">Ou Selectionne <br/>une de tes playlists <br/>( ͡° ͜ʖ ͡°)\t\t\t</div>

        <!-- 1 playlist  -->
        <div class=\"item\">

          <!-- logo playlist  -->
          <div class=\"thumb\"></div>

          <!-- Nom/artiste playlist -->
          <div class=\"info\">
            <div class=\"name\">Nom playlist</div>
            <div class=\"desc\">Artiste</div>
          </div>
        </div>

        <!-- 2 playlist  -->
        <div class=\"item\">

          <!-- logo playlist  -->
          <div class=\"thumb\"></div>

          <!-- Nom/artiste playlist -->
          <div class=\"info\">
            <div class=\"name\">Nom playlist</div>
            <div class=\"desc\">Artiste</div>
          </div>
        </div>

        <!-- 3 playlist  -->
        <div class=\"item\">

          <!-- logo playlist  -->
          <div class=\"thumb\"></div>

          <!-- Nom/artiste playlist -->
          <div class=\"info\">
            <div class=\"name\">Nom playlist</div>
            <div class=\"desc\">Artiste</div>
          </div>
        </div>

        <!-- 4 playlist  -->
        <div class=\"item\">

          <!-- logo playlist  -->
          <div class=\"thumb\"></div>

          <!-- Nom/artiste playlist -->
          <div class=\"info\">
            <div class=\"name\">Nom playlist</div>
            <div class=\"desc\">Artiste</div>
          </div>
        </div>

        <!-- 5 playlist  -->
        <div class=\"item\">

          <!-- logo playlist  -->
          <div class=\"thumb\"></div>

          <!-- Nom/artiste playlist -->
          <div class=\"info\">
            <div class=\"name\">Nom playlist</div>
            <div class=\"desc\">Artiste</div>
          </div>
        </div>

        <!-- 6 playlist  -->
        <div class=\"item\">

          <!-- logo playlist  -->
          <div class=\"thumb\"></div>

          <!-- Nom/artiste playlist -->
          <div class=\"info\">
            <div class=\"name\">Nom playlist</div>
            <div class=\"desc\">Artiste</div>
          </div>
        </div>
      
      <!-- fin playlist  -->
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  46 => 10,  41 => 7,  38 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "C:\\xampp\\htdocs\\happy_days_twig\\templates\\home.twig");
    }
}

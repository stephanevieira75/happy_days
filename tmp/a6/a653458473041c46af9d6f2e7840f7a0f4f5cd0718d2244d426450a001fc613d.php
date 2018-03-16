<?php

/* layout.twig */
class __TwigTemplate_2bb4a3fd97f95d558cb6bb5fda1e6d741e5930c841f0e2a2fbab587f1541949f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\" >
<head>
  <meta charset=\"UTF-8\">
  ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "  <!-- Fontawesome & Css  -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

  <!-- PATH: ../happy_days_twig/ -->
  <link rel=\"stylesheet\" href=\"../happy_days_twig/css/home.css\">
  <link rel=\"stylesheet\" href=\"../happy_days_twig/css/base.css\">
  ";
        // line 14
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 15
        echo "  
</head>

<body>
 
 <!-- les vagues-->
  <div class=\"wave-container\">
    <div class=\"wave -one\"></div>
    <div class=\"wave -two\"></div>
    <div class=\"wave -three\"></div>
  </div>

<div class=\"nav\">
    <ul class=\"nav_main\">
      <li> <a class=\"nav_link\" href=\"?p=home\">♫ Acceuil</a></li>
      <li> <a class=\"nav_link nav_link_playlist\" href=\"#curator\"> ♫Playlist </a></li>
      <li> <a class=\"nav_link\" href=\"?p=table_playlist\"> ♫ Gérer les playlist</a></li>
      <li> <a class=\"nav_link\" href=\"?p=table_music\"> ♫ Gérer les musiques</a></li>
      <li> <a class=\"nav_link\" href=\"?p=login\">♫ Déconnexion</a></li>
    </ul>
    <div class=\"nav_divider\"></div>
    <ul class=\"nav_sub\">
      <li><a class=\"nav_link\" href=\"?p=about\">♪ À propos</a></li>
      <li><a class=\"nav_link\" href=\"?p=contact\">♪ Contact</a></li>
    </ul>
  </div>

  <!-- C'est le player de l'acceuil -->
  <div class=\"mini-player\">
    <div class=\"track_info_wrapper\">
      <div class=\"track_info\">
        <div class=\"thumb\"></div>
        <div class=\"info\">
          <div class=\"title\">Titre</div>
          <div class=\"artist\">Artiste</div>
        </div>
      </div>
    </div>
    <div class=\"mini-player_btn_wrapper\">
      <i class=\"btn-prev fa fa-step-backward\" aria-hidden=\"true\"></i>
      <div class=\"btn-switch\">
        <i class=\"btn-play fa fa-play\" aria-hidden=\"false\" id=\"playaudio\"></i>
        <i class=\"btn-pause fa fa-pause\" aria-hidden=\"true\" id=\"pauseaudio\"></i>
      </div>
      <i class=\"btn-next fa fa-step-forward\" aria-hidden=\"true\"></i>
      <i class=\"btn-open-player fa fa-list\" aria-hidden=\"true\"></i>
    </div>
  </div>


<!-- C'est le player avec le menu des playlist écoutés -->
  <div class=\"dim dim-test\"></div>
  <div class=\"player\" id=\"player\">
    <div class=\"playback_wrapper\">
      <div class=\"playback_blur\"></div>
      <div class=\"playback_thumb\"></div>
      <div class=\"playback_info\">
        <div class=\"title\">Titre</div>
        <div class=\"artist\">Artiste</div>
      </div>
      <div class=\"playback_btn_wrapper\"><i class=\"btn-prev fa fa-step-backward\" aria-hidden=\"true\"></i>
        <div class=\"btn-switch\">
        <i class=\"btn-play fa fa-play\" aria-hidden=\"true\" id=\"playaudio\"></i>
        <i class=\"btn-pause fa fa-pause\" aria-hidden=\"true\" id=\"pauseaudio\"></i>
        </div>
        <i class=\"btn-next fa fa-step-forward\" aria-hidden=\"true\"></i>
      </div>
      <div class=\"playback_timeline\">
        <div class=\"playback_timeline_start-time\">00:00</div>
        <div class=\"playback_timeline_slider\">
          <div class=\"slider_base\"></div>
          <div class=\"slider_progress\"></div>
          <div class=\"slider_handle\"></div>
        </div>
        <div class=\"playback_timeline_end-time\">09:11</div>
      </div>
    </div>
<!--***************-->
<!-- Les musiques de la playlist dans le menu déroulant -->
    <div class=\"list_wrapper\">

      <!-- début de la liste -->
      <ul class=\"list\"> 

        <!-- 1 musique de playlist -->
        <li class=\"list_item selected\"> 

          <!-- logo -->
          <div class=\"thumb\"> </div>

          <!-- titre et artiste -->
          <div class=\"info\"> 
            <div class=\"title\">titre1</div>
            <div class=\"artist\">artiste1</div>
          </div>
        </li>

        <!-- 2 musique de playlist -->
        <li class=\"list_item\"> 

          <!-- logo -->
          <div class=\"thumb\"> </div>

          <!-- titre et artiste -->
          <div class=\"info\"> 
            <div class=\"title\">titre2</div>
            <div class=\"artist\">artiste2</div>
          </div>
        </li>

        <!-- 3 musique de playlist -->
        <li class=\"list_item\"> 

          <!-- logo -->
          <div class=\"thumb\"> </div>

          <!-- titre et artiste -->
          <div class=\"info\"> 
            <div class=\"title\">titre3</div>
            <div class=\"artist\">artiste3</div>
          </div>
        </li>

        <!-- 4 musique de playlist -->
        <li class=\"list_item\">
          
          <!-- logo -->
          <div class=\"thumb\"> </div>

          <!-- titre et artiste -->
          <div class=\"info\"> 
            <div class=\"title\">titre4</div>
            <div class=\"artist\">artiste4</div>
          </div>
        </li>

        <!-- 5 musique de playlist -->
        <li class=\"list_item\">
          
          <!-- logo -->
          <div class=\"thumb\"> </div>

          <!-- titre et artiste -->
          <div class=\"info\"> 
            <div class=\"title\">titre5</div>
            <div class=\"artist\">artiste5</div>
          </div>
        </li>

        <!-- 6 musique de playlist -->
        <li class=\"list_item\">
          
          <!-- logo -->
          <div class=\"thumb\"> </div>

          <!-- titre et artiste -->
          <div class=\"info\"> 
            <div class=\"title\">titre6</div>
            <div class=\"artist\">artiste6</div>
          </div>
        </li>

        <!-- 7 musique de playlist -->
        <li class=\"list_item\">
          
          <!-- logo -->
          <div class=\"thumb\"> </div>
          
          <!-- titre et artiste -->
          <div class=\"info\"> 
            <div class=\"title\">titre7</div>
            <div class=\"artist\">artiste7</div>
          </div>
        </li>

        <!-- 8 musique de playlist -->
        <li class=\"list_item\"> 

          <!-- logo -->
          <div class=\"thumb\"> </div>

          <!-- titre et artiste -->
          <div class=\"info\"> 
            <div class=\"title\">titre8</div>
            <div class=\"artist\">artiste8</div>
          </div>
        </li>

        <!-- fin liste -->
      </ul>
    </div>
  </div>
<!--**********************-->


<div class=\"header\">
    <div class=\"burger-wrapper\">
      <div class=\"burger\"></div>
    </div>

    <div class=\"logo-text\" id=\"titre\">
      
      <span class =\"titre2\">HappyDays!</span>
      
    </div>

     <!-- Bouton retour --> 
    <div class=\"back_btn\">
      <div class=\"circle\"></div>
      <div class=\"text\">Retour</div>
    </div>
    </div>

";
        // line 228
        $this->displayBlock('content', $context, $blocks);
        // line 229
        echo "
<!-- JQUERY/GSAP GREENSOCK  -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TimelineMax.min.js'></script>

<script src=\"../happy_days_twig/js/player.js\"></script>
<script src=\"../happy_days_twig/js/home.js\"></script>
";
        // line 237
        $this->displayBlock('javascript', $context, $blocks);
        // line 238
        echo "</body>
</html>

";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 14
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 228
    public function block_content($context, array $blocks = array())
    {
    }

    // line 237
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  294 => 237,  289 => 228,  284 => 14,  279 => 6,  272 => 238,  270 => 237,  260 => 229,  258 => 228,  43 => 15,  41 => 14,  32 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.twig", "C:\\xampp\\htdocs\\happy_days_twig\\templates\\layout.twig");
    }
}

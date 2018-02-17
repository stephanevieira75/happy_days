<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <title>HappyDays!</title>

  <!-- Fontawesome & Css  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/dashboard.css">
  
  
</head>

<body>
  
<div class="wrapper">

  <!-- les vagues-->
  <div class="wave-container">
    <div class="wave -one"></div>
    <div class="wave -two"></div>
    <div class="wave -three"></div>
  </div>

  <!-- Titre milieu de page qui redirige vers ses playlist ! #HappyDays -->
  <div class="line"></div>
  <div class="text-wrap">
    <div class="text"><span>HappyDays!</div> 
      <div class="main-btn_wrapper">
        
      </div>
      
    </div>
  </div>


  <div class="header">
    <div class="burger-wrapper">
      <div class="burger"></div>
    </div>
    <div class="logo-text" id="titre">
      <span class ="titre2">HappyDays!</span>
    </div>

    <!-- Bouton retour --> 
    <div class="back_btn">
      <div class="circle"></div>
      <div class="text">Retour</div>
    </div>
  </div>
  
  <div class="nav">
    <ul class="nav_main">
      <li> <a class="nav_link">Acceuil</a></li>
      <li> <a class="nav_link nav_link_playlist" href="#curator">Playlist</a></li>
      <li> <a class="nav_link" href="playlist_table.php">Gérer les playlist</a></li>
      <li> <a class="nav_link" href="music_table.php">Gérer les musiques</a></li>
      <li> <a class="nav_link" href="index.php">Déconnexion</a></li>
    </ul>
    <div class="nav_divider"></div>
    <ul class="nav_sub">
      <li><a class="nav_link" href="about.php">À propos</a></li>
      <li><a class="nav_link" href="contact.php">Contact</a></li>
    </ul>
  </div>

  <!-- C'est le player de l'acceuil -->
  <div class="mini-player">
    <div class="track_info_wrapper">
      <div class="track_info">
        <div class="thumb"></div>
        <div class="info">
          <div class="title">Titre</div>
          <div class="artist">Artiste</div>
        </div>
      </div>
    </div>
    <div class="mini-player_btn_wrapper">
      <i class="btn-prev fa fa-step-backward" aria-hidden="true"></i>
      <div class="btn-switch">
        <i class="btn-play fa fa-play" aria-hidden="false"></i>
        <i class="btn-pause fa fa-pause" aria-hidden="true"></i>
      </div>
      <i class="btn-next fa fa-step-forward" aria-hidden="true"></i>
      <i class="btn-open-player fa fa-list" aria-hidden="true"></i>
    </div>
  </div>


<!-- C'est le player avec le menu des playlist écoutés -->
  <div class="dim dim-test"></div>
  <div class="player" id="player">
    <div class="playback_wrapper">
      <div class="playback_blur"></div>
      <div class="playback_thumb"></div>
      <div class="playback_info">
        <div class="title">Titre</div>
        <div class="artist">Artiste</div>
      </div>
      <div class="playback_btn_wrapper"><i class="btn-prev fa fa-step-backward" aria-hidden="true"></i>
        <div class="btn-switch"><i class="btn-play fa fa-play" aria-hidden="true"></i><i class="btn-pause fa fa-pause" aria-hidden="true"></i></div><i class="btn-next fa fa-step-forward" aria-hidden="true"></i>
      </div>
      <div class="playback_timeline">
        <div class="playback_timeline_start-time">00:00</div>
        <div class="playback_timeline_slider">
          <div class="slider_base"></div>
          <div class="slider_progress"></div>
          <div class="slider_handle"></div>
        </div>
        <div class="playback_timeline_end-time">09:11</div>
      </div>
    </div>
<!--***************-->
<!-- Les musiques de la playlist dans le menu déroulant -->
    <div class="list_wrapper">

      <!-- début de la liste -->
      <ul class="list"> 

        <!-- 1 musique de playlist -->
        <li class="list_item selected"> 

          <!-- logo -->
          <div class="thumb"> </div>

          <!-- titre et artiste -->
          <div class="info"> 
            <div class="title">titre1</div>
            <div class="artist">artiste1</div>
          </div>
        </li>

        <!-- 2 musique de playlist -->
        <li class="list_item"> 

          <!-- logo -->
          <div class="thumb"> </div>

          <!-- titre et artiste -->
          <div class="info"> 
            <div class="title">titre2</div>
            <div class="artist">artiste2</div>
          </div>
        </li>

        <!-- 3 musique de playlist -->
        <li class="list_item"> 

          <!-- logo -->
          <div class="thumb"> </div>

          <!-- titre et artiste -->
          <div class="info"> 
            <div class="title">titre3</div>
            <div class="artist">artiste3</div>
          </div>
        </li>

        <!-- 4 musique de playlist -->
        <li class="list_item">
          
          <!-- logo -->
          <div class="thumb"> </div>

          <!-- titre et artiste -->
          <div class="info"> 
            <div class="title">titre4</div>
            <div class="artist">artiste4</div>
          </div>
        </li>

        <!-- 5 musique de playlist -->
        <li class="list_item">
          
          <!-- logo -->
          <div class="thumb"> </div>

          <!-- titre et artiste -->
          <div class="info"> 
            <div class="title">titre5</div>
            <div class="artist">artiste5</div>
          </div>
        </li>

        <!-- 6 musique de playlist -->
        <li class="list_item">
          
          <!-- logo -->
          <div class="thumb"> </div>

          <!-- titre et artiste -->
          <div class="info"> 
            <div class="title">titre6</div>
            <div class="artist">artiste6</div>
          </div>
        </li>

        <!-- 7 musique de playlist -->
        <li class="list_item">
          
          <!-- logo -->
          <div class="thumb"> </div>
          
          <!-- titre et artiste -->
          <div class="info"> 
            <div class="title">titre7</div>
            <div class="artist">artiste7</div>
          </div>
        </li>

        <!-- 8 musique de playlist -->
        <li class="list_item"> 

          <!-- logo -->
          <div class="thumb"> </div>

          <!-- titre et artiste -->
          <div class="info"> 
            <div class="title">titre8</div>
            <div class="artist">artiste8</div>
          </div>
        </li>

        <!-- fin liste -->
      </ul>
    </div>
  </div>
<!--**********************-->


<!-- Affiche des playlist par le click via le titre  -->

<!-- Titre Zaza  -->
  <div class="page" id="curator">
    <div class="curator_title_wrapper"><span>( ͡° ͜ʖ ͡°)</span>
      <div class="curator_line"></div>
      <div class="curator_title">Playlist</div>
      <div class="curator_line"></div><span>( ͡° ͜ʖ ͡°)</span>
  </div>


<!-- Bouton ajouter playlist  -->
    <div class="curator_list" id="page2">
      <div class="curator_list_content">
        <div class="connect_btn_wrapper item">
          
          
          <div class="connect_btn">
             
            <div class="connect_btn_text">Nouvelle<br/>Playlist</div>
          </div>
        </div>
      
        <!-- Proposition des playlists existantes  -->
        <div class="curator_list_content_desc">Ou Selectionne <br/>une de tes playlists <br/>( ͡° ͜ʖ ͡°)			</div>

        <!-- 1 playlist  -->
        <div class="item">

          <!-- logo playlist  -->
          <div class="thumb"></div>

          <!-- Nom/artiste playlist -->
          <div class="info">
            <div class="name">Nom playlist</div>
            <div class="desc">Artiste</div>
          </div>
        </div>

        <!-- 2 playlist  -->
        <div class="item">

          <!-- logo playlist  -->
          <div class="thumb"></div>

          <!-- Nom/artiste playlist -->
          <div class="info">
            <div class="name">Nom playlist</div>
            <div class="desc">Artiste</div>
          </div>
        </div>

        <!-- 3 playlist  -->
        <div class="item">

          <!-- logo playlist  -->
          <div class="thumb"></div>

          <!-- Nom/artiste playlist -->
          <div class="info">
            <div class="name">Nom playlist</div>
            <div class="desc">Artiste</div>
          </div>
        </div>

        <!-- 4 playlist  -->
        <div class="item">

          <!-- logo playlist  -->
          <div class="thumb"></div>

          <!-- Nom/artiste playlist -->
          <div class="info">
            <div class="name">Nom playlist</div>
            <div class="desc">Artiste</div>
          </div>
        </div>

        <!-- 5 playlist  -->
        <div class="item">

          <!-- logo playlist  -->
          <div class="thumb"></div>

          <!-- Nom/artiste playlist -->
          <div class="info">
            <div class="name">Nom playlist</div>
            <div class="desc">Artiste</div>
          </div>
        </div>

        <!-- 6 playlist  -->
        <div class="item">

          <!-- logo playlist  -->
          <div class="thumb"></div>

          <!-- Nom/artiste playlist -->
          <div class="info">
            <div class="name">Nom playlist</div>
            <div class="desc">Artiste</div>
          </div>
        </div>
      
      <!-- fin playlist  -->
      </div>
    </div>
  </div>
</div>

<!-- JQUERY/GSAP GREENSOCK  -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TimelineMax.min.js'></script>

    <script src="js/dashboard.js"></script>

</body>
</html>

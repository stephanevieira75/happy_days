<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ajouter une musique!</title>


<!-- Css -->
<link rel="stylesheet" href="css/base.css"> 
<link rel="stylesheet" href="css/form_playlist.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    
<!--VAGUES-->
<div class="wave-container">
    <div class="wave -one"></div>
    <div class="wave -two"></div>
    <div class="wave -three"></div>
</div>

<h1>  Ajoute ta musique
  <small>It's so easy...</small>
</h1>
<section class="contact-wrap">
  <form action="" class="contact-form">
    <div class="col-sm-12">
      <div class="input-block">
        <input placeholder="Artiste"type="text" class="form-control">
      </div>

      <div class="input-block">
        <input placeholder="Titre" type="text" class="form-control">
      </div>
    </div>
      
    </div>
    <div class="col-sm-12">
      <div class="input-block">
        <input placeholder="Album"type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="block">
        <select style="border:1px solid red;" class="form-control" name="playlist" id="playlist">
    <option value="playlist-1">1-playlist</option>
    <option value="playlist-2">2-playlist</option>
    <option value="playlist-3">3-playlist</option>
        </select>
      </div>
    </div>

    <br>
    <div class="col-sm-12">
      <div class="input-block">
        <input type="file" class="form-control">
      </div>
    </div>

    <div class="col-sm-12">
      <button class="square-button">Ajouter</button>
    </div>
  </form>
</section>


<script src="http//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/form_playlist.js"></script>

</form>

</div>

</body>

</html>
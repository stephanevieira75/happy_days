<!DOCTYPE html>
<html lang="fr" >

<head>

 <!-- Encodage & title -->
  <meta charset="UTF-8">
  <title>Connecte toi!</title>

 <!--Css/GoogleFont/fontawesone/Normalize -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/inscription.css">

</head>

<body>
<div class="wave-container">
    <div class="wave -one"></div>
    <div class="wave -two"></div>
    <div class="wave -three"></div>
</div>
  
<div class="back"></div>
<div class="registration-form">

  <!--Header -->
  <header>

    <h1>Connecte toi</h1>
    <p>Renseigne les informations demandées !</p>
  </header>

   <!--formulaire connexion -->
  <form>

   <!-- input email -->
    <div class="input-section email-section">
      <input class="email" type="email" placeholder="Ton adresse email :" autocomplete="off"/>
      <div class="animated-button"><span class="icon-paper-plane"><i class="fa fa-envelope-o"></i></span><span class="next-button email"><i class="fa fa-arrow-up"></i></span></div>
    </div>

     <!-- input password -->
    <div class="input-section password-section folded">
      <input class="password" type="password" placeholder="Ton mot de passe :"/>
      <div class="animated-button"><span class="icon-lock"><i class="fa fa-lock"></i></span><span class="next-button password"><i class="fa fa-arrow-up"></i></span></div>
    </div>

     <!-- Sucess ! -->
    <div class="success">
    <p><a href="dashboard.php">Welcome!</a></p>
    </div>
  </form>

</div>

 <!-- Script & Jquery -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/connexion.js"></script>

</body>

</html>

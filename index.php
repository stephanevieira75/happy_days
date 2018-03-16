<?php
//Controller page
	require 'vendor/autoload.php';

//Routing:
	$page ='home';
	if (isset($_GET['p']))
	{
		$page = $_GET['p'];
	}

//Function insertMusic:
	function insertMusic()
	{
		if(empty($_POST)) {
			return 0;
		}
		$serveur ='localhost';
		$login ='root';
		$mdp ='';
		$nom_bdd='twig_happy_days';
		$bdd = new PDO('mysql:host='.$serveur.';dbname='.$nom_bdd.'', $login, $mdp);
		extract ($_POST);
		$req = $bdd->prepare('INSERT INTO music(id_playlist, title, artist, src_url) VALUES (:id_playlist, :title, :album, :src_url )')or exit(print_r($bdd->errorInfo()));
		print_r($bdd->errorInfo());

		$content_dir =  __DIR__ . 'music/' . '';
		if( isset($_POST['upload']) ) // si formulaire soumis
			{
			$content_dir =  __DIR__ . 'music/'; // dossier où sera déplacé le fichier
		
			$tmp_file = $_FILES['src_url']['tmp_name'];
		
			if( !is_uploaded_file($tmp_file) )
			{
				exit("Le fichier est introuvable");
			}
		
			// on vérifie maintenant l'extension
			$type_file = $_FILES['src_url']['type'];
		
			if( !strstr($type_file, 'mp3') && !strstr($type_file, 'mp4') && !strstr($type_file, 'ogg') && !strstr($type_file, 'm4a') )
			{
				exit("Le fichier n'est pas une musique");
			}
		
			// on copie le fichier dans le dossier de destination
			$name_file = $_FILES['src_url']['name'];
		
			if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
			{
				exit("Impossible de copier le fichier dans $content_dir");
			}
		
			echo "Le fichier a bien été uploadé";
			// On insères en base de données  genre :
			// $URL = $content_dir . $name_file;
		}				
		return $req->execute(array(
		'id_playlist' => $id_playlist,
		'title' => $title,
		'artist' => $artist,
		'src_url' => $url));
		
	};

//Template render:	
	$loader = new Twig_Loader_Filesystem( __DIR__ . '/templates');
	$twig = new Twig_Environment($loader,[
		// Cache tmp
		'cache' => false, //__DIR__ . '/tmp'
	]);

//Switch for pages:	
	switch ($page) {

	//Home page:
		case 'home':
			echo $twig->render('home.twig');
		break;

	//Login Page:
		case 'login':
			echo $twig->render('login.twig');
		break;
	
	//Subscribe page:
		case 'subscribe':
			echo $twig->render('subscribe.twig');
		break;

	//Contact page:
		case 'contact':
			echo $twig->render('contact.twig');
		break;

	//About page:
		case 'about':
			echo $twig->render('about.twig');
		break;

	//table_music page:
		case 'table_music':
			echo $twig->render('table_music.twig');
		break;

	//form_music page:
		case 'form_music':
			echo $twig->render('form_music.twig', ['insertMusic' => insertMusic()]);
		break;

	//table_playlist page:		
		case 'table_playlist':
			echo $twig->render('table_playlist.twig');
		break;

	//form_playlist page:			
		case 'form_playlist':
			echo $twig->render('form_playlist.twig');
		break;

	//chart page:
		case'chart':
			echo $twig->render('chart.twig');
		break;
	
	//404 default:
		default:
			header('HTTP/1.0 404 Not Found');
			echo $twig->render('404.twig');
		break;
	}

?>
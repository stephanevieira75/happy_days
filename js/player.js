var audio = new Audio('../happy_days_twig/music/test.mp3');

//Play au click de l'icone 
function letPlay()
    {
        audio.play();
    }
    document.getElementById("playaudio").addEventListener("click", letPlay);
    
//Pause au click de l'icone
function letPause()
    {
        audio.pause();
    }
    document.getElementById("pauseaudio").addEventListener("click", letPause);
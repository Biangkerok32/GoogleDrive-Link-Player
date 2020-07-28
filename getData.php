<?php
$method = $_POST['files']; // Method GET data via POST Form //
/////////////////////
 $search = "http://googledriveplayer.herokuapp.com/json.php?id=".$method; // reference https://github.com/Biangkerok32/Google-Drive-Player-Script.git
 $result = file_get_contents($search);
 $data = json_decode($result, true);
/////////////////////
   $linkStream = $data['streaming_jwplayer'];
   $linkStream02 = $data['streaming_html5'];
   $linkDown = $data['download_key'];
   $getFileName = $data['filename'];
   $getImage = $data['preview'];
   $linkDownPrivate = $data['download_host'];
?>

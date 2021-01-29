<?php

if(isset($_GET["dateDebut"], $_GET["dateFin"])){
    echo "les parametres sont present <br><br>";
    echo "date debut : ".$_GET["dateDebut"]."<br>";
    echo "date fin : ".$_GET["dateFin"]."<br>";
}
else{
    echo "les parametres ne sont pas present !!";
}


<?php


if(isset($_GET["langage"], $_GET["serveur"])){
    echo "les parametres sont present <br><br>";
    echo "langage :".$_GET["langage"]."<br>";
    echo "serveur :".$_GET["serveur"]."<br>";
}
else{
    echo "les parametres ne sont pas present !!";
}



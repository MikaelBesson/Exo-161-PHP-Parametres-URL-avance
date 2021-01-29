<?php


if(isset($_GET["batiment"], $_GET["salle"])){
    echo "les parametres sont present <br><br>";
    echo "batiment :".$_GET["batiment"]."<br>";
    echo "salle :".$_GET["salle"]."<br>";
}
else{
    echo "les parametres ne sont pas present !!";
}


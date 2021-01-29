<?php


if(isset($_GET["semaine"])){
    echo "les parametres sont present <br><br>";
    echo "semaine :".$_GET["semaine"]."<br>";
}
else{
    echo "les parametres ne sont pas present !!";
}


<?php

if(isset($_GET["age"])){
    echo " Bonjour ".$_GET["nom"]." ".$_GET["prenom"];
}
else{
    echo "les parametres ne sont pas present !!";
}

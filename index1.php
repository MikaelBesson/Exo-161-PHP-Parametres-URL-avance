
<?php

if(isset($_GET["nom"], $_GET["prenom"])){
    echo " Bonjour ".$_GET["nom"]." ".$_GET["prenom"];
}
else{
    echo "les parametres ne sont pas present !!";
}


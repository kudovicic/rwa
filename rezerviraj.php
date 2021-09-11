<?php
    if (isset($_POST["datum"])) {
        require ('baza.php');

        session_start();
        $datum=$_POST["datum"];
        $id=$_SESSION["idRezervacije"];

        $sql= "INSERT INTO rezervacija (id,KorisnikId,datum,restoranId) VALUES (".$id.",".$_SESSION["id"].", '".$datum."', ".$_POST["restoranId"].")";

        echo($sql);
        $result = $con->query($sql);
        unset($_SESSION["idRezervacije"]);
        header("Location: index.php");
    }
    else{
        echo("else");
    }
?>
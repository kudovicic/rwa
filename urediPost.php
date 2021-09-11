<?php
    require("baza.php");
    $adresa=$_POST["adresa"];
    $ime=$_POST["ime"];
 

    require("baza.php");
    $adresa=$_POST["adresa"];
    $ime=$_POST["ime"];
    $sql="UPDATE restoran as r  set r.adresa='$adresa',r.naziv='$ime' WHERE r.id= ".$_POST["id"];
    $result = $con->query($sql);
   header("Location: restorani.php");
?>
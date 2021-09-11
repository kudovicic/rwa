<?php
    require ('baza.php');
    // require('nav.php'); 
    session_start();
?>

<?php

// echo($sql);
?>
		    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">


<div class="container">
  <h2>Moje rezervacije</h2>
  <a href="index.php">Naslovna</a>

  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Naziv</th>
        <th>Datum rezervacije</th>
      </tr>
    </thead>
    <tbody>
    <?php

$sql = "SELECT r.id as rid,re.naziv as rime,r.datum as rdatum FROM rezervacija as r INNER JOIN korisnik as k on k.id=r.KorisnikId INNER JOIN restoran as re on re.id=r.restoranId where r.KorisnikId=".$_SESSION["id"]."";
$result = $con->query($sql);
        if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo(
          "<tr>"
            .
            "<td>".$row["rid"]."</td>"    
            .     
            "<td>".$row["rime"]. "</td>"
            .
            "<td>".$row["rdatum"]. "</td>"
        );
        echo("</tr>");
    }
}
    ?>
    </tbody>
</table>

<?php require('footer.php')?>

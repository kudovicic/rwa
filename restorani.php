<?php
    require ('baza.php');
    // require('nav.php'); 
?>
		    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
  <h2>Restorani</h2>
    <a href="dodaj.php" class="btn btn-info">Dodaj restoran</a>
    <a href="index.php">Naslovna</a>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Naziv</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
$sql="SELECT * from restoran";
$result = $con->query($sql);
        if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo(
          "<tr>"
            .
            "<td>".$row["id"]."</td>"    
            .     
            "<td>".$row["naziv"]. "</td>"
            .
            "<td><a href='uredi.php?id=".$row["id"]."'>Uredi</a></td>"
            .
            "<td><a href='izbrisi.php?id=".$row["id"]."'>Izbrisi</a></td>"
            );
        echo("</tr>");
    }
}
    ?>
    </tbody>
</table>

<?php require('footer.php')?>

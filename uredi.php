<?php
    require("baza.php");
    // require("nav.php");
    
    session_start();
    $id=$_GET["id"];


    if (isset($id)) 
    {
        $sql="select * from restoran where id=".$id;
        $result = $con->query($sql);

        $ime="";
        $cijena=0;
        while($row = $result->fetch_assoc()) {
            $ime=$row["naziv"];
            $adresa=$row["adresa"];
            $slika=$row["slika"];
            }

            
        }
    else
    {
        echo("greska");
    }
?>
		    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
  <h2>Uredite proizvod</h2>
  <form action="urediPost.php" method="post">
    <div class="form-group">
      <label for="usr">Ime:</label>
      <input name="ime" type="text" class="form-control" id="ime" value=<?php echo($ime);?>>
    </div>
    <div class="form-group">
      <label for="usr">adresa:</label>
      <input name="adresa" type="text" class="form-control" id="ime" value=<?php echo($adresa);?>>
    </div>

    <br>
    <input name="id" type="hidden" value=<?php echo($id) ?>>
    <button class="btn btn-info">Uredi</button><a href="restorani.php">Nazad</a>

  </form>
</div>
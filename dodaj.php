<?php
    // require('nav.php');
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"/>
<div class="container-fluid h-100 bg-light text-dark">

  <div class="row justify-content-center align-items-center h-100">
    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
    <form action="dodajpost.php" method="post" enctype="multipart/form-data">

	<div class="row">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Naziv" aria-describedby="basic-addon1" name="ime">
        </div>
        <br>
    
    <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="adresa" name="adresa">
        </div>
    <br>
    <div class="input-group">
     <input type="file" name="file" id="file"><br>
    </div>
    <br>
<button class="btn btn-info" type="submit">Dodaj</button> 
<a href="restorani.php">Nazad</a>
</form>
</div>


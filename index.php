<?php require('nav.php')?>

<?php
	require ('baza.php');
	function generateRandomString() {
	return rand(0,10000000);
}
	
	if(!isset($_SESSION["idRezervacije"]))
	{
		$idRezervacije=generateRandomString();
		//echo($idRezervacije);
		$_SESSION["idRezervacije"]=$idRezervacije;
		echo($idRezervacije."test");
	}
?>
<body>
<style>
.fit-image{
width: 100%;
object-fit: cover;
height: 300px; 
}
.img {
    float: left;
    width:  100px;
    height: 100px;
    background-size: cover;
}
</style>
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Dobrodošli</h1>

          
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
        </div>

      </div>
    </div>
  </section>
	<div class="container">
	<div class="row">
    <div class="col-sm-9">
		<?php
            $sql="select * from restoran";
			$result = $con->query($sql);

		$dugme='';
		$dugme2='';
		if(isset($_SESSION["id"]))
		{
			$dugme='<p><button type="submit" class="btn btn-primary" role="button">Rezerviraj</button></p>';
			$dugme2='<input placeholder="unesite datum" type="text" class="form-control" name="datum"/>';
		}
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		
		echo ('
		<form method="POST" action="rezerviraj.php">
			  <div class="col-sm-12">
    		<div class="thumbnail">
				<img src="uploads/'.$row["slika"].'" alt="slika" class="img-responsive" width = "100%" ></div>

                    <p>Ime: '.$row["naziv"].'</p>
                    <p>Adresa: '.$row["adresa"].'</p>
					<input value='.$row["id"].' name="restoranId" class="hidden"/>
					'.$dugme2.'
					'.$dugme.'
				</div>
				</form>
		');
	}
} else {
    echo "0 results";
}
		?>
			

	</div>                        
</form>
                    </div>
                </div>
            </div>
    </aside>
	</div>

<?php require('footer.php')?>
</html>

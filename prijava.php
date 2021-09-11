<?php
    require ('baza.php');
    require('nav.php');
?>

<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">

<div class="container aos-init aos-animate" data-aos="fade-up">
<h1>Prijava</h1>

        <div class="row mt-5">


          <div class="col-lg-8 mt-5 mt-lg-0">

		  <form action="prijavaPost.php" method="post">
		<div class="form-group">
			<h1  class="logo mr-auto">Email</h1>
			<input type="text" class="form-control" id="usr" name="email"/>
		</div>
		<div class="form-group">
		<h1  class="logo mr-auto">Sifra</h1>
			<input type="password" class="form-control" id="pwd" name="sifra"/>
		</div>
    	<button class="btn btn-info">Prijava</button>
	</form>

          </div>

        </div>

      </div>
<?php require('footer.php')?>

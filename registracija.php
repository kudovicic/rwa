<?php
    require ('baza.php');
    require('nav.php');
?>
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
	
<div class="container aos-init aos-animate" data-aos="fade-up">	<h2>Registracija</h2>
	<form action="registracijaPost.php" method="post">
		<div class="form-group">
			<h1 >Email:</h1>
			<input type="text" class="form-control" id="usr" name="email"/>
		</div>
		<div class="form-group">
		<h1 >Sifra:</h1>
					<input type="password" class="form-control" id="pwd" name="sifra"/>
		</div>
		<button class="btn btn-info">Registracija</button>
	</form>
</div>

<?php require('footer.php')?>

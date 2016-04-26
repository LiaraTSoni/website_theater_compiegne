<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<!-- jQuery library (served from Google) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="./lib/bxslider/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="./lib/bxslider/jquery.bxslider.css" rel="stylesheet" />
	<title>Le Nouveau Théâtre de Compiègne</title>
	<link href='https://fonts.googleapis.com/css?family=Oswald:700,400,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./css/styles.css"></head>
<body>
	<div id="container">
		<!-- __________________Header______________________ -->
		<?php include("include/header.php"); ?>


		<!-- _____________________________________________________ -->

		<div id="slider" >
		<ul class="bxslider">
			<li><img src="./src/slider/1.jpg" alt="slide 1" /></li>
			<li><img src="./src/slider/2.jpg" alt="slide 2" /></li>
			<li><img src="./src/slider/3.jpg" alt="slide 3" /></li>
			<li><img src="./src/slider/4.jpg" alt="slide 4" /></li>
			<li><img src="./src/slider/5.jpg" alt="slide 5" /></li>
		</ul>
		</div>

		<!-- _____________________________________________________ -->

		<div id="body">

			<div id="article1" class="l_float">
				<h1 class="titre">Spectacle d'ouverture du Nouveau Théâtre</h1>
				<p class="lettrine">
					Pour ce spectacle, le nouveau théâtre invite nombre de danseurs, comédiens, musiciens et circassiens pour évoquer les arts du spectacle vivant, dans leur diversité, croiser les époques, les registres, émouvoir, surprendre, s’émerveiller, rêver ensemble. Un événement unique et gratuit pour fêter l’ouverture du Grand Théâtre !
Au théâtre, il ne faut pas se fier au vocabulaire, ainsi la servante n’est pas une soubrette, mais une lampe mobile de faible intensité qui reste allumée sur le plateau (la scène pour le spectateur), elle est le symbole de la bienveillance des dieux tutélaires du théâtre ; le brigadier ne porte pas moustache mais enveloppé de velours et clouté, ce bâton sert à frapper les 3 coups… D’ailleurs ces 3 coups sont 15… Le troisième coup (enfin, le quinzième) est frappé, le silence s’établit, le rideau s’entrouvre…
				</p>
				<p class="date_article">Le Mardi 20 Avril par Michel Loupe</p>
				<div class="link_article">
					<p>
						<a class="lire_la_suite" href="" >Lire la suite</a>
					</p>
				</div>
			</div>

			<div id="article2" class="r_float">
				<div class="texte_article">
					<h1>Cirqu'en famille</h1>
					<p class="lettrine">

						Ateliers ludiques pour vivre en famille un moment de découverte et d'expression artistique autour du langage et du geste circassien. Jeux d'équilibre, jeux dans l'espace et manipulation d'objets que vous pourrez refaire à la maison !
6-8 ans <br />
Ateliers menés par Michèle d'Angelo, artiste circassienne, et Abel Chahbi, jongleur et manipulateur d'objets ou par Fiona Couster, intervenante cirque
					</p>
					<p class="date_article">Mardi 5 mars / 18h</p>
				</div>

				<div class="link_article">
					<p>
						<a class="lire_la_suite" href="" >Lire la suite</a>
					</p>
				</div>

			</div>
			<div class="clearfix"></div>
		</div>

<?php include("include/footer.php"); ?>

</div>
<!-- Aside -->
<?php include("include/aside.php"); ?>

<script>
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>
</body>
</html>
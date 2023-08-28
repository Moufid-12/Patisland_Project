<!--
Dev: Moufid DAOUDA/ 96911842
-->
<!doctype html>
<html lang="fr">


	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Patisland Bénin
		</title>
		<!-- Template CSS -->
		<link rel="stylesheet" href="assets/css/style-starter.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
		<!-- Template CSS -->
	</head>

<body>

	<!--w3l-header-->
<header id="site-header" class="fixed-top">
    <div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark stroke">
			<!-- <h1> <a class="navbar-brand" href="index.html">
					<span class="fa fa-heart"></span> <span class="sub-logo">Patis</span>land
				</a></h1> -->
	<a class="navbar-brand" href="#index.html">
		<img src="assets/images/loogo Patisland.png" alt="Your logo" title="Your logo" style="height:35px;" />
	</a>
			<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
				data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
				<span class="navbar-toggler-icon fa icon-close fa-times"></span>
				</span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="service.html">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">A propos</a>
					</li>
					
					<li class="nav-item active">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
					<li class="nav-item ml-lg-4">
						<a class="nav-link donate btn btn-style" href="donate.html">Notre localisation</a>
					</li>
				</ul>
			</div>
		</nav>
		<marquee behavior="" direction="" >Pour toute demande de prix ou de livraison veuillez nous envoyer un message en précisant vos contacts <span><a href="contact.php" >(Contacter Nous)</a></span> , nous repondrons dans les brefs delais.</marquee>			

    </div>
</header>
<!--/header-->
<div class="inner-banner">
</div>
	<!-- /contact-form -->
	<section class="w3l-contact-11">
	<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $tel = isset($_POST['tel']) ? $_POST['tel'] : "";
    $subject = isset($_POST['subject']) ? $_POST['subject'] : "";
    $message = isset($_POST['message']) ? $_POST['message'] : "";

    $from =  $email;

    // Créer le contenu de l'e-mail
    $content = "Nom : $name\n";
    $content = "Email : $email\n";
    $content = "Téléphone : $tel\n";
    $content .= "Message : $message\n";

    // Adresse e-mail destinataire
    $destinataire = "mfiddaoud771@gmail.com";
    $sujet = $subject ;

    // Envoyer l'e-mail
    if (mail($destinataire, $sujet, $content)) {
        echo '<p class="flash-message success">Requête enoyé avec succès</p>';
    } else {
        echo '<p class="flash-message error">Réessayer.</p>';
    }
} else {
}
?>

<style>
	.flash-message {
    padding: 10px;
    border: 1px solid;
    margin: 20px;
    text-align: center;
    font-weight: bold;
    border-radius: 5px;
}

.success {
    background-color: #d4edda;
    color: #155724;
    border-color: #c3e6cb;
}

.error {
    background-color: #d8afac;
    color: #571515;
    border-color: #e6c3c3;
}
</style>
		<div class="form-41-mian py-5">
			<div class="container py-lg-4">
			  <div class="row align-form-map">
				<div class="col-lg-6 contact-left pr-lg-4">
					<div class="partners">
					  <div class="cont-details">
						<div class="title-content text-left">
							<h6 class="sub-title">Contacter Nous</h6>
							<h3 class="hny-title">Entrer en contact</h3>
						</div>
						<p class="mt-3 mb-4 pr-lg-5">Bonjour, Nous sommes disponibles 24h/24 et 7j/7 par fax, e-mail ou par téléphone. Écrivez-nous pour que nous puissions parler
							plus à ce sujet	.</p>
						<h6 class="mb-4"> Pour plus d'informations ou une demande de renseignements sur notre projet de produits et les prix, n'hésitez pas à nous contacter..</h6>
					  </div>
					  <div class="hours">
						<h6 class="mt-4">Email:</h6>
						<p> <a href="mailto:info@example.com">
							contact@patisland.com</a></p>
						<h6 class="mt-4">Address:</h6>
						<p> Carré 435 01BP8350 Sikècodji Cotonou Bénin</p>
						<h6 class="mt-4">Contact:</h6>
						<p class="margin-top"><a href="tel:+(21) 255 999 8899">+(229)
							63 16 27 27</a></p>
					  </div>
					</div>
				  </div>
				<div class="col-lg-6 form-inner-cont">
					<div class="title-content text-left">
						<h3 class="hny-title mb-lg-5 mb-4">Envoie-nous un message</h3>
					</div>
				  <form action="url_de_traitement.php" method="POST" class="signin-form" id="contactForm">
					<div class="form-input">
					  <input type="text" name="name" id="name" placeholder="Nom complet" />
					</div>
					<div class="row con-two">
					<div class="col-lg-6 form-input">
					  <input type="email" id="email" name="email" placeholder="Adresse e-mail" required="" />
					</div>
					<div class="form-input">
					  <input type="tel" name="tel" id="name" placeholder="Numéro téléphone" />
					</div>
					<div class="col-lg-6 form-input">
						<input type="text" id="subject" name="subject" placeholder="Objet" class="contact-input" />
					</div>
					</div>
					<div class="form-input">
					  <textarea placeholder="Message" id="message" name="message" required=""></textarea>
					</div>
					<div class="submit-button text-lg-right">
					   <button type="submit" class="btn btn-style">Envoyer</button>
				    </div>
				  </form>
				</div>
			  </div>
			</div>
		  </div>
		   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		   <!-- <script>
			 $(document).ready(function() {
        $("#contactForm").submit(function(event) {
            event.preventDefault(); // Empêche le rechargement de la page

            // Récupérer les données du formulaire
            var formData = {
                name: $("#name").val(),
                email: $("#email").val(),
                subject: $("#subject").val(),
                message: $("#message").val()
            };

			console.log(formData);
            // Envoyer les données au serveur via AJAX
            $.ajax({
                type: "POST",
                url: "url_de_traitement.php", // Remplacez par l'URL de votre script de traitement
                data: formData,
                success: function(response) {
                    alert("Message envoyé avec succès !");
                },
                error: function(error) {
                    alert("Une erreur est survenue. Veuillez réessayer.");
                }
            });
        });
    });
		   </script> -->
		  <div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d63441.33815763559!2d2.424832!3d6.3832064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbj!4v1692888704235!5m2!1sfr!2sbj" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		  </div>
	  </section>
	<!-- //contact-form -->
<!-- footer-66 -->
<footer class="w3l-footer-66">
	<section class="footer-inner-main">
		<div class="footer-hny-grids py-5">
			<div class="container py-lg-4">
				<div class="text-txt">
					<div class="row newsletter-grids-footer">
						<div class="col-lg-6 newsletter-text pr-lg-5">
							<h3 class="hny-title two">Appelez nous</h3>
							<h4 style="color: white; font-size: 20px;"> <span>+229 63 16 27 27</span></h4>
							<br>
							<h3 class="hny-title two">Ecrivez nous</h3>
							<h4 style="color: white; font-size: 20px;"> <span>nomuser@patisland.com</span> <br> <span style="">ou</span> <br> <span>nomuser@patisland.com</span></h4>
						</div>
						<div class="col-lg-6 newsletter-right">
							<form action="#" method="post" class="footer-newsletter">

								<input type="email" name="email" class="form-input"
									placeholder="Entrer votre email..">

								<button type="submit" class="btn">S'abonner</button>
							</form>
						</div>
					</div>
					<div class="right-side">
						<div class="row sub-columns">
							<div class="col-lg-4 col-md-6 sub-one-left pr-lg-4">
								<h2><a class="navbar-brand" href="index.html">
										<span class="fa fa-heart"></span> <span class="sub-logo">Patis</span>land
									</a></h2>
								<!-- if logo is image enable this   
									<a class="navbar-brand" href="#index.html">
										<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
									</a> -->
								<p class="pr-lg-4">Nous développons des ingrédients et des solutions innovantes pour les boulangers, pâtissiers et chocolatiers au Bénin. </p>
								<div class="columns-2">
									<ul class="social">
										<li><a href="#facebook"><span class="fa fa-facebook"
													aria-hidden="true"></span></a>
										</li>
										<li><a href="#twitter"><span class="fa fa-twitter"
													aria-hidden="true"></span></a>
										</li>
										<li><a href="#google"><span class="fa fa-google-plus"
													aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 sub-one-left">
								<h6>Prestation de services</h6>
								<div class="mid-footer-gd sub-two-right">

									<ul>
										<li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Commercialisation</a>
										</li>
										<li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Soutien Au Développement De Produits Finis Et De Processus</a>
										</li>
										<li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Aperçu Du Marché</a>
										</li>
										<li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Goûtez Demain</a>
										</li>
									</ul>

								</div>
							</div>
							<div class="col-lg-4 col-md-6 sub-one-left">
								<h6>Horaires d’ouverture :</h6>
								<ul>
									<li><a href="#" style="color: aliceblue;"><span class="fa fa-angle-double-right mr-2"></span>Du lundi au Vendredi
										de 8h00 à 12h30 et de 13h30 à 18h00</a>
									</li>
									
								</ul>
								<br>
								<h6>Horaires de livraison : :</h6>
								<ul>
									<li><a href="#" style="color: aliceblue;"><span class="fa fa-angle-double-right mr-2"></span>Du mardi au vendredi de 08h00 à 16h00</a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="below-section">
			<div class="container">
				<div class="copyright-footer">
					<div class="columns text-lg-left">
						<p>© 2023 Patisland. Tous droits reservés</p>
					</div>
					<ul class="columns text-lg-right">
						<li><a href="#">Privacy Policy</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<!-- move top -->
		<button onclick="topFunction()" id="movetop" title="Go to top">
			<span class="fa fa-long-arrow-up" aria-hidden="true"></span>
		</button>
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function () {
				scrollFunction()
			};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("movetop").style.display = "block";
				} else {
					document.getElementById("movetop").style.display = "none";
				}
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>
		<!-- /move top -->

	</section>
</footer>
<!--//footer-66 -->
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->
<script src="assets/js/bootstrap.min.js"></script>
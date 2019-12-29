<?php

$title = 'Home | Mahayana Living';
include 'header.php';
include 'footer.php';


?>

<!doctype html>
<html>
    <head>
        <?php writeHead(); ?>
        <title>Home | Mahayana Living</title>
    </head>
<body>
    <?php writeHeader(); ?>

	<main>
		<div class="box">
			<figure id="left">
				<a href="html/about.html">
					<img src="images/wellness.jpg" alt="Wellness">
				</a>
				<figcaption>
					Mahayana Living is intended to be a resources for your healthy lifestyle. We focus on wellness products such as essential oils, recipes for healing, and personal care items such as bath salts, lotions, and sugar scrubs.
				</figcaption>
			</figure>
			<figure>
				<a href="html/store.html"><img src="images/lavender-bounty.jpg" alt="Home made lavender spa products"></a>
				<figcaption>We specialize in essential oils and blends, but also offer a small selection of personal care products made with the highest quality ingredients, focusing on organics whenever possible.</figcaption>
			</figure>
			<figure>
				<a href="blog"><img src="images/recipes.jpg" alt="Assortment of herbs and materials to make wellness products"></a>
				<figcaption>We strive to make our site a resource for individuals and families interested in including herbs and essential oils in their wellness endeavors. We regularly publish new recipes for your use. </figcaption>
			</figure>		
			<figure>
				<a href="https://ccc-appview.edupe.io/~3060/MahayanaGardens"><img src="images/logo.jpg" alt="Mahayana Gardens - Logo for our Sister Site"></a>
				<figcaption>We parter with our sister site, <a href="https://ccc-appview.edupe.io/~3060/MahayanaGardens">Mahayana Gardens</a>, to increase awareness of herbs in all their forms as a natural supplement and replacement for many standard modern rememdies.	</figcaption>	
			</figure>
			<figure>
				<a href="html/about.html"><img src="images/aboutus.jpg" alt="Multigenerational hands holding dirt with a sprout"></a>
				<figcaption>We hope that our site and products will suit your needs, but if you need something not listed here, or wish to find out more information about us, we welcome your questions and comments!</figcaption>
			</figure>
			<figure>
				<a href="html/contact.html"><img src="images/running-girl.jpg" alt="Young girl running down stone steps and out a wooden gate"></a>
				<figcaption>You can also check out our <a href="#">Additional Resources</a> to connect with other great resources around the web! </figcaption>
			</figure>
		</div>
	</main>

	<footer>
		<?php writeFooter(); ?>
	</footer>

</body>
</html>
<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RetroMemoriesBaseTheme
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="firstSection">
		<img class="imgfirstSection" src="<?= get_field("first_img_accueil")["url"] ?>" alt="">
		<div class="contentFirstSection">
			<h1><?= get_field("title_principale_accueil") ?></h1>
			<p><?= get_field("first_parag_accueil") ?></p>
			<button class="button" type="submit">
				<p class="paragButton">Découvrir</p>
			</button>
		</div>
	</div>

	<div id="contentWebSite">
		<div class="secondSection">
			<div class="firstPartSecondSection">
				<h2><?= get_field("first_second_title_dspp") ?></h2>
				<p class="blueColor"><?= get_field("first_parag_dspp") ?></p>
			</div>
			<div class="secondPartSecondSection">
				<img class="imgSecondSection" src="<?= get_field("first_img_dsdp")["url"] ?>" alt="">
				<div class="contentSecondParag">
					<div>
						<h2 class="white"><?= get_field("first_title_dsdp") ?></h2>
						<p class="white parag"><?= get_field("first_parag_dsdp") ?></p>
					</div>
					<button class="button" type="submit">
						<p class="paragBouton">En savoir +</p>
					</button>
				</div>
			</div>
		</div>

		<div class="thirdSection">
			<h2 class="center"><?= get_field("first_second_title_ts") ?></h2>
			<section class="sectionCard">

				<div class="card">
					<div class="img">
						<img class="imgRond" src="<?= get_field("first_imgCard")["url"] ?>" alt="">
					</div>
					<div class="textCard">
						<h3><?= get_field("first_titleCard") ?></h3>
						<p><?= get_field("first_paragCard") ?></p>
					</div>
				</div>

				<div class="card">
					<div class="img">
						<img class="imgRond" src="<?= get_field("second_imgCard")["url"] ?>" alt="">
					</div>
					<div class="textCard">
						<h3><?= get_field("second_titleCard") ?></h3>
						<p><?= get_field("second_paragCard") ?></p>
					</div>
				</div>

				<div class="card">
					<div class="img">
						<img class="imgRond" src="<?= get_field("third_imgCard")["url"] ?>" alt="">
					</div>
					<div class="textCard">
						<h3><?= get_field("third_titleCard") ?></h3>
						<p><?= get_field("third_paragCard") ?></p>
					</div>
				</div>

				<div class="card">
					<div class="img">
						<img class="imgRond" src="<?= get_field("fourth_imgCard")["url"] ?>" alt="">
					</div>
					<div class="textCard">
						<h3><?= get_field("fourth_titleCard") ?></h3>
						<p><?= get_field("fourth_paragCard") ?></p>
					</div>
				</div>

				<div class="card">
					<div class="img">
						<img class="imgRond" src="<?= get_field("fifth_imgCard")["url"] ?>" alt="">
					</div>
					<div class="textCard">
						<h3><?= get_field("fifth_titleCard") ?></h3>
						<p><?= get_field("fifth_paragCard") ?></p>
					</div>
				</div>

				<div class="card">
					<div class="img">
						<img class="imgRond" src="<?= get_field("sixth_imgCard")["url"] ?>" alt="">
					</div>
					<div class="textCard">
						<h3><?= get_field("sixth_titleCard") ?></h3>
						<p><?= get_field("sixth_paragCard") ?></p>
					</div>
				</div>
			</section>
		</div>
	</div>
</main><!-- #main -->
<?php
get_footer()
?>
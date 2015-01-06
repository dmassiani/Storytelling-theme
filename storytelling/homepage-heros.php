<?php
/*
Template Name: Homepage - Heros
Description: Section with 2 titles, 2 contents and 2 illustrations
---------------------------------------------------------------------
{"type": "title", "name": "Titre principal", "slug": "title"}
{"type": "editor", "name": "Contenu intro", "slug": "intro"}
{"type": "title", "name": "Lien du bouton", "slug": "link"}
---------------------------------------------------------------------
*/
?>

<div class="hero">
	<div class="hero-inner">
		<div class="hero-copy">
			<a href="" class="hero-logo">
				<img src="/wp-content/themes/loots/assets/images/storytelling.svg" alt="Storytelling"/>
			</a>
			<h1><?php the_chapter_title( 'title' ) ?></h1>
			<?php the_chapter('intro'); ?>
			<a class="button border story" href="https://github.com/dmassiani/WordPress-Storytelling/archive/master.zip">
				<?php the_chapter_title( 'link' ) ?>
			</a>
		</div>
		<div class="hero-animation">
			<span class="imac">
				<svg id="imac"></svg>
				<svg id="imacbottom"></svg>
				<svg id="browser"></svg>
			</span>
			<svg id="page"></svg>
		</div>
	</div>
</div>
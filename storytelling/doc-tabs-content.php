<?php
/*
Template Name: Docs - tabs content
Description: Section with 2 titles, 2 contents and 2 illustrations
---------------------------------------------------------------------
{"type": "title", "name": "Télécharger storytelling", "slug": "download"}
{"type": "editor", "name": "Gettin started", "slug": "gettinstarted"}
{"type": "editor", "name": "Installation", "slug": "installation"}
{"type": "editor", "name": "Macro Template", "slug": "macro_template"}
{"type": "editor", "name": "Contribution", "slug": "contribute"}
---------------------------------------------------------------------
*/
?>
<div class="vertical-tab-content-container">
	<a href="" rel="tab0" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading is-active">
		Item 0
	</a>
	<div id="tab0" class="js-vertical-tab-content vertical-tab-content">

		<a href="https://github.com/dmassiani/WordPress-Storytelling/archive/master.zip" class="button story">
			<?php the_chapter_title('download') ?>
		</a>
		<?php the_chapter('gettinstarted'); ?>

	</div>
	<a href="" rel="tab1" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">
		Item 1
	</a>
	<div id="tab1" class="js-vertical-tab-content vertical-tab-content">
		<?php the_chapter('installation'); ?>
	</div>
	<a href="" rel="tab2" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">
		Item 2
	</a>
	<div id="tab2" class="js-vertical-tab-content vertical-tab-content">
		<?php the_chapter('macro_template'); ?>
	</div>
	<a href="" rel="tab3" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">
		Item 3
	</a>
	<div id="tab3" class="js-vertical-tab-content vertical-tab-content">
		<?php the_chapter('contribute'); ?>
	</div>
</div>
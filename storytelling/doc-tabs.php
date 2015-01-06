<?php
/*
Template Name: Docs - tabs
Description: Section with 2 titles, 2 contents and 2 illustrations
---------------------------------------------------------------------
{"type": "title", "name": "Getting started", "slug": "tab_one"}
{"type": "title", "name": "Installation", "slug": "tab_two"}
{"type": "title", "name": "Macro-template", "slug": "tab_three"}
{"type": "title", "name": "Contribuer", "slug": "tab_four"}
{"type": "title", "name": "Télécharger storytelling", "slug": "download"}
{"type": "editor", "name": "Gettin started", "slug": "gettinstarted"}
{"type": "editor", "name": "Installation", "slug": "installation"}
{"type": "editor", "name": "Macro Template", "slug": "macro_template"}
{"type": "editor", "name": "Contribution", "slug": "contribute"}
---------------------------------------------------------------------
*/
?>
<div class="vertical-tabs">
	<a href="javascript:void(0)" rel="tab0" class="js-vertical-tab vertical-tab is-active">
		<?php the_chapter_title('tab_one') ?>
	</a>
	<a href="javascript:void(0)" rel="tab1" class="js-vertical-tab vertical-tab">
		<?php the_chapter_title('tab_two') ?>
	</a>
	<a href="javascript:void(0)" rel="tab2" class="js-vertical-tab vertical-tab">
		<?php the_chapter_title('tab_three') ?>
	</a>
	<a href="javascript:void(0)" rel="tab3" class="js-vertical-tab vertical-tab">
		<?php the_chapter_title('tab_four') ?>
	</a>
</div>
<div class="vertical-tab-content-container">
	<a href="" rel="tab0" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading is-active">
		<?php the_chapter_title('tab_one') ?>
	</a>
	<div id="tab0" class="js-vertical-tab-content vertical-tab-content">

		<a href="https://github.com/dmassiani/WordPress-Storytelling/archive/master.zip" class="button story">
			<?php the_chapter_title('download') ?>
		</a>
		<?php the_chapter('gettinstarted'); ?>

	</div>
	<a href="" rel="tab1" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">
		<?php the_chapter_title('tab_two') ?>
	</a>
	<div id="tab1" class="js-vertical-tab-content vertical-tab-content">
		<?php the_chapter('installation'); ?>
	</div>
	<a href="" rel="tab2" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">
		<?php the_chapter_title('tab_three') ?>
	</a>
	<div id="tab2" class="js-vertical-tab-content vertical-tab-content">
		<?php the_chapter('macro_template'); ?>
	</div>
	<a href="" rel="tab3" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">
		<?php the_chapter_title('tab_four') ?>
	</a>
	<div id="tab3" class="js-vertical-tab-content vertical-tab-content">
		<?php the_chapter('contribute'); ?>
	</div>
</div>
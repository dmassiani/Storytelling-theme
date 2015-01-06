<?php
/*
Template Name: Homepage - Begin
Description: Section with 2 titles, 2 contents and 2 illustrations
---------------------------------------------------------------------
{"type": "title", "name": "begin", "slug": "begin"}
{"type": "editor", "name": "anywhere", "slug": "anywhere"}
{"type": "editor", "name": "storytelling", "slug": "storytelling"}
{"type": "title", "name": "donwload", "slug": "download"}
---------------------------------------------------------------------
*/
?>
<div class="story">
	<div class="inner">
		<h1><?php the_chapter_title('begin') ?></h1>
		<div class="content">
			<?php the_chapter('anywhere') ?>
			
			<?php the_chapter('storytelling') ?>
			<div class="download-begin">
				<a href="https://github.com/dmassiani/WordPress-Storytelling/archive/master.zip" class="button story">
					<?php the_chapter_title('download') ?>
				</a>
			</div>
			
		</div>
	</div>
</div>
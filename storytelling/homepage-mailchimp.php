<?php
/*
Template Name: Homepage - Mailchimp
Description: Section with 2 titles, 2 contents and 2 illustrations
---------------------------------------------------------------------
{"type": "title", "name": "newsletter", "slug": "newsletter"}
---------------------------------------------------------------------
*/
?>
<div class="unlimited">
	<div class="inner">
		<h1>
			<?php the_chapter_title('newsletter') ?>
		</h1>
		<?php echo apply_filters('the_content', '[mc4wp_form]' ); ?>
	</div>
</div>
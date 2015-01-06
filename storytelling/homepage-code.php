<?php
/*
Template Name: Homepage - Code
Description: Section with 2 titles, 2 contents and 2 illustrations
---------------------------------------------------------------------
{"type": "editor", "name": "code", "slug": "code"}
{"type": "editor", "name": "aside one", "slug": "aside_one"}
{"type": "editor", "name": "aside two", "slug": "aside_two"}
{"type": "editor", "name": "aside three", "slug": "aside_three"}
---------------------------------------------------------------------
*/
?>
<div class="code">
	<div class="inner">
		<div class="sublime">
            <div class="window">
              	<header>
                	<div class="close"></div>
                	<div class="reduce"></div>
                	<div class="full"></div>
              	</header>
              	<div class="content">
                	
                <?php the_chapter('code') ?>

              	</div>
            </div>
        </div>
        <aside>
			<ul>
				<li>
					<?php the_chapter('aside_one') ?>
              	</li>
              	<li>
					<?php the_chapter('aside_two') ?>
              	</li>
              	<li>
					<?php the_chapter('aside_three') ?>
              	</li>
            </ul>
		</aside>
	</div>
</div>
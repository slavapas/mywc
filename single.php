<?php get_header(); ?>

<body>
    <header>
    </header>

    <div class="content">
        <div class="container">
		    <?php if(have_posts()): while(have_posts()):the_post();  ?>
			    <?php the_content();  ?>
		    <?php endwhile;else:endif;  ?>
        </div>
    </div>
    <?php get_footer(); ?>
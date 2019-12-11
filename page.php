<?php get_header(); ?>

<body>
    <header>
    </header>


    <div class="content">
        <div class="container">

		    <?php if(have_posts()): while(have_posts()):the_post();  ?>
                <img src="<?php the_post_thumbnail_url('post_image'); ?>" class="img-fluid mb-5" >
                <h1><?php the_title(); ?></h1>
			    <?php the_content();  ?>
		    <?php endwhile;else:endif;  ?>
        </div>
    </div>

    <?php get_footer(); ?>



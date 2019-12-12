<?php get_header(); ?>

<body xmlns="http://www.w3.org/1999/html">
<header>
</header>


<div class="content">
    <div class="container">
        <div class="row">
            <!--      First Column      -->
            <div class="col-lg-6">
				<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
					<?php if ( has_post_thumbnail() ): ?>
                        <img src="<?php the_post_thumbnail_url( 'post_image' ); ?>" class="img-fluid mb-5">
					<?php endif; ?>
                    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
					<?php the_excerpt(); ?>
                    <hr>
				<?php endwhile; else:endif; ?>
            </div>

            <!--      Second Column      -->
            <div class="col-lg-3">
                <div class="sticky-top">
					<?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

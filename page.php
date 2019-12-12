<?php get_header(); ?>

<body>
<header>
</header>


<div class="content">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
				<?php if ( have_posts() ): while ( have_posts() ):the_post(); ?>
					<?php if ( has_post_thumbnail() ): ?>
                        <img src="<?php the_post_thumbnail_url( 'post_image' ); ?>" class="img-fluid mb-5">
					<?php endif; ?>
                    <h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; else:endif; ?>
            </div>
            <div class="col-lg-3 sticky-top">
                <div class="sticky-top">
					<?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>

	<?php get_footer(); ?>



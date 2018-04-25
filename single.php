<?php 
	get_header(); 
?>
<main>
	<?php if ( have_posts () ) : while (have_posts()) : the_post(); ?> 
		<section id="webdoor" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), full); ?>);">
			<div class="container text-center">
				<h2><?php echo get_the_title(); ?></h2>
			</div>
		</section>
		<div class="container">
            <ul class="blog-post__breadcrumb">
                <li><a href="<?php echo get_bloginfo('url') ?>/ultimas-noticias">Últimas Notícias</a></li>
                <li>→</li>
                <li><?php echo get_the_title(); ?></li>
            </ul>
			<?php 
				the_content(); 
			?>
            <ul class="clearfix blog-post__pagination">

                <li class="pull-left">

                    <?php previous_post_link('<i>←</i><span>Último Post<br>%link</span>', '%title', TRUE, ' '); ?> 

                </li>

                <li class="pull-right">

                   <?php next_post_link('<span>Próximo Post<br>%link</span><i>→</i>', '%title', TRUE, ' '); ?> 

                </li>

            </ul>
		</div>
	<?php
		endwhile; 
		endif; 
	?>
</main>

<?php get_footer(); ?>
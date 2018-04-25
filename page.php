<?php get_header(); ?>

<main>
    <div class="container">
    <?php 
        if ( have_posts () ) : while (have_posts()) : the_post(); if(is_front_page()) : 
            include(get_template_directory()."/".get_post( $post )->post_name.".php");
        else : ?>
				<?php if(get_field('esconder_titulo')!="1"): ?>
				<h3><?php echo get_the_title(); ?></h3>
				<?php endif; ?>
				<?php if(get_field('mostrar_resumo')=="1"): ?>
				<h3 class="text-center"><?php echo get_the_excerpt(); ?></h3>
				<?php endif; ?>
        <?php
            the_content(); 
            get_sidebar('widgets');
        endif; 
        endwhile; 
        endif;
	?>
    </div>
</main>

<?php get_footer(); ?>
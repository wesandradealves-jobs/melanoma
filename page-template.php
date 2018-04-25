<?php /* Template Name: Páginas Internas Com Banner */ ?>
<?php 
	get_header(); 
	$query = new WP_Query( array( 'post_type' => 'page', 'post__not_in' => array($post->ID), 'meta_key' => 'incluir_na_home', 'meta_value' => '1', 'order' => 'ASC') );
?>
<main>
	<?php if ( have_posts () ) : while (have_posts()) : the_post(); ?> 
		<section id="webdoor" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), full); ?>);">
			<div class="container text-center">
				<?php if(get_field('esconder_titulo')!="1"): ?>
				<h3><?php echo get_the_title(); ?></h3>
				<?php endif; ?>
				<?php if(get_field('mostrar_resumo')=="1"): ?>
				<h3 class="text-center"><?php echo get_the_excerpt(); ?></h3>
				<?php endif; ?>
				<?php if($query->have_posts()=="1"): ?>
				<nav>
					<ul>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<li>
								<a title="<?php echo get_the_title(); ?>" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
							</li>
						<?php endwhile; ?>
					</ul>
				</nav>
				<?php endif; wp_reset_query(); ?>
			</div>
		</section>
		<div class="container">
			<?php 
				the_content(); 
				get_sidebar('widgets');
			?>
		</div>
	<?php
		endwhile; 
		endif; 
	?>
</main>

<?php get_footer(); ?>
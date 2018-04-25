<?php $query = new WP_Query( array( 'post_type' => 'page', 'meta_key' => 'incluir_na_home', 'meta_value' => '1', 'order' => 'ASC') ); ?>

<?php if(get_the_excerpt()) : ?>
<h3 class="text-center"><?php echo get_the_excerpt(); ?></h3>
<?php endif; ?>

<?php if($query->have_posts()=="1"): ?>

<ul id="navgrid" class="clearfix text-center">

    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <li onclick="document.location='<?php echo get_the_permalink(); ?>';return false;" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

            <div style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), full); ?>);">

                <p><?php echo get_the_title(); ?></p>

            </div>

        </li>
    <?php endwhile; ?>

</ul>

<?php endif; wp_reset_query(); ?>
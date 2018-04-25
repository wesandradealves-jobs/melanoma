<?php  
    $parceiro = get_field('parceiro','widget_' . $widget_id);    
?>

<div id="parceiros" class="widgets text-center" <?php if(get_field('fundo_do_widget','widget_' . $widget_id)): ?> style="background-color:<?php echo get_field('fundo_do_widget','widget_' . $widget_id); ?>;" <?php endif; ?>>

    <div class="container">

        <?php if(get_field('titulo_do_widget','widget_' . $widget_id)): ?>

        <p class="text-left"><?php echo get_field('titulo_do_widget','widget_' . $widget_id); ?></p>

        <?php endif; ?>

        <ul class="clearfix text-left">
        	<li>Apoio</li>
            <?php foreach( $parceiro as $row ) : ?>

			<?php if($row[categoria_do_parceiro]=="Apoio Institucional") : ?>
	            <li class="patrocinador">

	                <a href="<?php echo $row[url_do_parceiro]; ?>" title="<?php echo $row[nome_do_parceiro]; ?>" target="_blank">

	                    <img height="50" src="<?php echo $row[logo_do_parceiro]; ?>" alt="<?php echo $row[nome_do_parceiro]; ?>"  />

	                </a>

	            </li>
			<?php endif; ?>

            <?php endforeach; ?>
            <li class="clearfix"></li>
        	<li>Patrocinadores</li>
            <?php foreach( $parceiro as $row ) : ?>

			<?php if($row[categoria_do_parceiro]=="Patrocinadores") : ?>
	            <li class="patrocinador">

	                <a href="<?php echo $row[url_do_parceiro]; ?>" title="<?php echo $row[nome_do_parceiro]; ?>" target="_blank">

	                    <img height="50" src="<?php echo $row[logo_do_parceiro]; ?>" alt="<?php echo $row[nome_do_parceiro]; ?>"  />

	                </a>

	            </li>
			<?php endif; ?>

            <?php endforeach; ?>
        </ul>

    </div>

</div>
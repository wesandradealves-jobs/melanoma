<?php  
    $pagina = get_field('pagina','widget_' . $widget_id);    
?>

<div id="doenca" class="widgets text-center" <?php if(get_field('fundo_do_widget','widget_' . $widget_id)): ?> style="background-color:<?php echo get_field('fundo_do_widget','widget_' . $widget_id); ?>;" <?php endif; ?>>
    <div class="container">
        <?php if(get_field('titulo_do_widget','widget_' . $widget_id)): ?>
        <p><?php echo get_field('titulo_do_widget','widget_' . $widget_id); ?></p>
        <?php endif; ?>
        <ul class="clearfix">
            <?php foreach( $pagina as $row ) : ?>
            <li onclick="document.location='<?php echo $row[url_do_pagina]; ?>';return false;" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="<?php echo $row[ícone_do_pagina]; ?>">
                <p><?php echo $row[titulo_do_pagina]; ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
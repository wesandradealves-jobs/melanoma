<?php  
    $material_de_engajamento = get_field('material_de_engajamento','widget_' . $widget_id);    
?>

<div id="material-engajamento" class="widgets text-center" <?php if(get_field('fundo_do_widget','widget_' . $widget_id)): ?> style="background-color:<?php echo get_field('fundo_do_widget','widget_' . $widget_id); ?>;" <?php endif; ?>>
    <div class="container">
        <?php if(get_field('titulo_do_widget','widget_' . $widget_id)): ?>
        <p><?php echo get_field('titulo_do_widget','widget_' . $widget_id); ?></p>
        <?php endif; ?>
        <ul class="clearfix">
            <?php foreach( $material_de_engajamento as $row ) : ?>
            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <?php 
                    if($row[selecione_um_tipo_de_url] == "Arquivo"||$row[selecione_um_tipo_de_url] == "arquivo"){
                        $url = $row[arquivo_do_material];
                    } else {
                        $url = $row[url_do_material];
                    }
                ?>
                <a href="<?php echo $url; ?>"><img src="<?php echo $row[ícone_do_material]; ?>"></a>
                <p><a href="<?php echo $url; ?>"><?php echo $row[titulo_do_material]; ?></a></p>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
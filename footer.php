    <footer>
        <div id="footer">
            <div class="container">
                <a class="logo col-lg-3 col-md-12 col-sm-12 col-xs-12 text-center" href="<?php echo site_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) )." - ".get_bloginfo('description'); ?>">
                    <?php 
                        if ( get_theme_mod( 'logo-rodape' ) ) :
                            echo "<img src='".esc_url( get_theme_mod( 'logo-rodape' ) )."' alt='".esc_attr( get_bloginfo( 'name', 'display' ) )." - ".get_bloginfo('description')."'>";
                        else : 
                            echo "<span>".esc_attr( get_bloginfo( 'name', 'display' ) )."</span>";
                        endif;
                    ?>
                </a>
                <nav class="col-lg-9 col-md-12 col-sm-12 col-xs-12 text-center">
                    <ul>
                        <?php wp_nav_menu( array( 'container' => false, 'menu' => 'Footer', 'items_wrap' => '%3$s' ) ); ?> 
                    </ul>
                </nav>
            </div>     
            <p class="text-center">Desenvolvido e administrado por <a href="http://www.visanacomunicacao.com.br" target="_blank" title="Visana Comunicação">Visana Comunicação</a></p>               
        </div>
    </footer>
    <?php wp_footer(); ?> 
    <script>
    transformicons.add('.tcon')
    </script>
    </body>
</html>
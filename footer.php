</main>
<footer>
    <div class="fluid-container">
        <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input required="required"  placeholder="Busca" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
            <input type="hidden" name="post_type" value="pages" />
            <button><i class="glyphicon glyphicon-search"></i></button>
        </form>        
    </div>
    <div class="container">
        <div class="row">
            <div class="v-center col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul>
                    <?php wp_nav_menu( array( 'container' => false, 'menu' => 'footer', 'items_wrap' => '%3$s' ) ); ?>
                </ul>
            </div>
            <div class="v-center col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <?php if ( get_theme_mod( 'logo' ) ) : ?>
                <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                <?php else : ?>
                <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
                <?php endif; ?>
            </div>
            <div class="v-bottom col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right">
                <p>Formas de pagamento</p>
                <p>
                    <?php if(true === get_theme_mod('mastercard')){ ?> <i class="pf pf-mastercard"><!-- --></i> <?php } ?>
                    <?php if(true === get_theme_mod('visa')){ ?> <i class="pf pf-visa"><!-- --></i> <?php } ?>
                    <?php if(true === get_theme_mod('paypal')){ ?> <i class="pf pf-paypal"><!-- --></i> <?php } ?>
                </p>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" type="text/css" media="all" />
</footer>
</div>
</body>
</html>
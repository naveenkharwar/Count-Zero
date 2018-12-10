<div class="site-branding container">
    <div class="wrap">

        <?php
        if ( is_front_page() && is_home() ) :
            ?>
        <h1 class="site-title display-5"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
    else :
        ?>
        <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
        <?php
    endif;
    $count_zero_description = get_bloginfo( 'description', 'display' );
    if ( $count_zero_description || is_customize_preview() ) :
        ?>
        <p class="site-description lead"><?php echo $count_zero_description; /* WPCS: xss ok. */ ?></p>
        
    </div>

</div><!-- .site-branding -->
<?php endif; ?>
<div class="wrapper-banner">
    <div id="banner" role="banner" class="hidden-xs">
        <?php if ( get_header_image() ) : ?>
            <img class="customizer-banner-img" src="<?php  header_image(); ?>" />
        <?php endif; ?>
        <div class="wrapper-description">
            <div class="description">
                <?php if ( get_theme_mod( 'banner_icon' ) ) :  ?>
                    <img class="horizon-icon customizer-banner-icon" src="<?php echo esc_attr( get_theme_mod( 'banner_icon' ) ) ?>" alt="<?php _e('Banner Icon', 'horizon-theme'); ?>">
                <?php endif; ?>
                <h1 class="customizer-banner-title">
                    <?php echo wp_kses( get_theme_mod( 'banner_title'), array('span' => array() ) ); ?>
                </h1>
                <p class="customizer-banner-subtitle">
                    <?php echo esc_html( get_theme_mod('banner_subtitle') ); ?>
                </p>
            </div>
        </div>
    </div> <!-- #banner -->
</div> <!-- .wrapper-banner -->

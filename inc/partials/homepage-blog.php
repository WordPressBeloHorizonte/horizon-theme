<section id="blog">
    <div class="container-large">
        <header class="horizon-header">
            <h2 class="title">Blog da Horizon</h2>
            <span class="sep"></span>
            <p class="desc">Nosso trabalho é sua satisfação</p>
        </header><!-- .horizon-header -->
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <article class="blog-item">
                    <figure class="blog-item-image">
                        <!-- This image must be cropped/resized to 555x285 by WordPress-->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/post-01.jpg" alt="Post 01">
                    </figure><!-- .blog-item-image -->
                    <div class="blog-item-content">
                        <header class="blog-item-header">
                            <h3 class="blog-item-title">Somos a Horizon, saiba como funciona</h3>
                            <div class="sep"></div>
                            <span class="blog-item-publish-date">13 de Abril de 2015</span>
                        </header><!-- .blog-item-header -->

                        <div class="blog-item-excerpt">
                            <p>Ex itaque a facilis, recusandae laudantium est voluptatem porro fuga cupiditate atque eligendi natus voluptatum doloribus voluptate, modi reiciendis corporis magni iusto!</p>
                        </div><!-- .blog-item-excerpt -->

                        <button class="horizon-btn btn-blog-item"><?php _e( 'Continue reading', 'horizon-theme' ); ?></button>

                        <footer class="blog-item-footer">
                            <span class="blog-item-author"><?php _e( 'Published by', 'horizon-theme' ); ?> <a href="#">Administrador</a></span>
                            <?php $comments = 23; ?>
                            <a href="#" class="blog-item-comments"><span class="fa fa-comments"></span>	<?php printf( _n( 'One comment', '%s comments', $comments, 'horizon-theme' ), $comments ); ?></a>
                            <div class="blog-item-share">
                                <span class="blog-item-share-links"><?php _e( 'Share:', 'horizon-theme' ); ?></span>
                                <a href="#" class="fa fa-google"></a>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                            </div>
                        </footer><!-- .blog-item-footer -->
                    </div><!-- .blog-item-content -->
                </article><!-- .blog-item -->
            </div>
            <div class="col-md-6 col-xs-12">
                <article class="blog-item">
                    <figure class="blog-item-image">
                        <!-- This image must be cropped/resized to 555x285 by WordPress-->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/post-02.jpg" alt="Post 01">
                    </figure><!-- .blog-item-image -->
                    <div class="blog-item-content">
                        <header class="blog-item-header">
                            <h3 class="blog-item-title">Somos a Horizon, saiba como funciona</h3>
                            <div class="sep"></div>
                            <span class="blog-item-publish-date">13 de Junho de 2015</span>
                        </header><!-- .blog-item-header -->

                        <div class="blog-item-excerpt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex itaque a facilis, recusandae laudantium est voluptatem porro fuga cupiditate atque eligendi natus voluptatum doloribus voluptate, modi reiciendis corporis magni iusto!</p>
                        </div><!-- .blog-item-excerpt -->

                        <button class="horizon-btn btn-blog-item"><?php _e( 'Continue reading', 'horizon-theme' ); ?></button>

                        <footer class="blog-item-footer">
                            <span class="blog-item-author"><?php _e( 'Published by', 'horizon-theme' ); ?> <a href="#">Administrador</a></span>
                            <?php $comments = 1; ?>
                            <a href="#" class="blog-item-comments"><span class="fa fa-comments"></span>	<?php printf( _n( 'One comment', '%s comments', $comments, 'horizon-theme' ), $comments ); ?></a>
                            <div class="blog-item-share">
                                <span class="blog-item-share-links"><?php _e( 'Share:', 'horizon-theme' ); ?></span>
                                <a href="#" class="fa fa-google"></a>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                            </div>
                        </footer><!-- .blog-item-footer -->
                    </div><!-- .blog-item-content -->
                </article><!-- .blog-item -->
            </div>
        </div><!-- .row -->

        <div class="content load-more">
            <button href="#" class="horizon-btn secondary"><?php _e( 'Load More', 'horizon-theme' ); ?></button>
        </div><!-- .load-more -->
    </div><!-- .container -->
</section>

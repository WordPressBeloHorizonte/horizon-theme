<section id="portfolio">
    <div class="container">

        <?php
            horizon_header(
                '<span>Horizon</span> Portfolio',
                'Our Work is your satisfaction',
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget nulla ex.
                Curabitur mauris felis, vestibulum eget eros ac, congue suscipit felis.
                Etiam accumsan, libero ac tristique maximus, diam risus interdum odio,
                sed ultricies arcu quam vel mauris.'
            );
        ?>

    </div><!-- .container -->

    <?php get_template_part('loop','portfolio'); ?>

</section><!-- .portfolio -->

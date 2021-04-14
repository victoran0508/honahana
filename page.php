<?php get_header('white'); ?>
    
    <div class="page-wrapper">
        <?php
            if (have_posts()) :
                the_post();
        ?>
        <section class="section section--page-title with-top-margin">
            <h1>flower atelier hona hana<span><?php the_title(); ?></span></h1>
        </section>
        <section class="section section--page">
            <div class="section-content">

            <?php
                remove_filter('the_content', 'wpautop');
                the_content();
            ?>

            </div>
        </section>

        <?php
            endif;
        ?>
    </div>

<?php get_footer(); ?>
<?php get_header('white'); ?>
    
    <div class="page-wrapper">
        <?php
            if (have_posts()) :
                the_post();
        ?>
        <section class="section section--page-title with-top-margin">
            <h1>flower atelier hona hana<span>News</span></h1>
        </section>
        <section class="section section--post">
            <div class="section-title">
                <p class="datetime"><?php the_time('Y.m.d'); ?></p>
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="section-content">

            <?php
                remove_filter('the_content', 'wpautop');
                the_content();
            ?>
                <div class="view-more">
                    <a class="link" href="<?php home_url(); ?>/news">All News</a>
                </div>
            </div>
        </section>

        <?php
            endif;
        ?>
    </div>

<?php get_footer(); ?>
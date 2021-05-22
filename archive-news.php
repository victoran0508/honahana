<?php get_header('white'); ?>
    
    <div class="page-wrapper">
        <section class="section section--page-title with-top-margin">
            <h1>flower atelier hona hana<span>News</span></h1>
        </section>
        <section class="section section--news-list">
            <div class="section-content">
                <?php
                    $query = new WP_Query( array(
                        'post_type' => 'news',
                        'posts_per_page' => 3,
                    ) );
                
                    if ($query->have_posts()) {
                        while ($query->have_posts() ) : $query->the_post();
                ?>
                <article class="news-item">
                    <div class="news-item-wrapper">
                        <figure class="news-item__featured-image background-zoom effect">
                            <img class="img" src="<?php if (has_post_thumbnail()) {the_post_thumbnail_url();} else {echo get_template_directory_uri();} ?>/assets/img/news-default-image.png">
                        </figure>
                        <time class="news-item__datetime"><?php the_time('Y.m.d'); ?></time>
                        <h4 class="news-item__title"><?php the_title(); ?></h4>
                        <div class="news-item__details"><?php echo strip_tags(get_the_content()); ?></div>
                        <div class="news-item__view-detail view-more">
                            <a class="link" href="<?php the_permalink(); ?>">More View</a>
                        </div>
                    </div>
                </article>
                <?php
                        endwhile;
                        wp_reset_query();
                    }
                ?>
            </div>
        </section>
    </div>

<?php get_footer(); ?>
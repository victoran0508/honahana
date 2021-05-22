<?php get_header('white'); ?>

    <div class="page-wrapper">
        <section class="section section--page-title with-top-margin">
            <h1>flower atelier hona hana<span>Flower Arrangement</span></h1>
        </section>
        <section class="section section--introduction">
            <h2>あなただけに<br class="sp">笑顔と幸せを届けたい</h2>
            <p>
                ふとした瞬間にお花を見つめるその時間が、<br class="sp">日々の中で特別な時間となりますように。<br>
                心がときめき笑顔の回数が1回でも増えますよう<br class="sp">願いを込めて<br class="pc tb">
                honahanaでお選びいただいた<br class="sp">お花だからこそ、心から大切に想いをお花で形にしたい。<br>
                そんな想いと感謝の心を込めてお花をお作りいたします。
            </p>
        </section>
        <section class="section section--product-list">
            <div class="section-title">
                <p>
                    ドライフラワーを中心に、<br class="sp">プリザーブドフラワーや<br>
                    アーティフィシャルフラワー（造花）を<br class="sp">組み合わせ、<br class="pc tb">
                    世界に1つだけの<br class="sp">作品をお作りします。
                </p>
            </div>
            <div class="section-content">
                <ul class="product-list">
                <?php
                    $post_custom = get_post_custom();
                    for ($i = 0; $i < count($post_custom['商品画像']); $i++) {
                ?>
                    <li class="item">
                        <article class="article">
                            <a href="#" class="article-link"></a>
                            <figure class="product-image background-zoom effect">
                                <img class="img" src="<?php echo wp_get_attachment_url($post_custom['商品画像'][$i]) ?>">
                            </figure>
                            <h3 class="product-name"><?php echo $post_custom['商品名'][$i]; ?>
                                <span><?php echo $post_custom['商品名（英語）'][$i]; ?></span>
                            </h3>
                            <p class="product-description">
                                <?php echo $post_custom['商品説明文'][$i]; ?>
                            </p>
                        </article>
                    </li>
                <?php
                    }
                ?>
                </ul>
            </div>
        </section>
        <section class="section section--original-flower-art">
            <div class="image-panel">
                <figure class="img-235-235 background-zoom effect">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/flower-arrangement.jpeg">
                </figure>
                <figure class="img-192-192 background-zoom effect">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/flower-arrangement.jpeg">
                </figure>
                <figure class="img-145-145 background-zoom effect">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/flower-arrangement.jpeg">
                </figure>
            </div>
            <div class="section-title">
                <h2>Original<br>Flower Art</h2>
                <p>
                    welcomeboard、<br>
                    オリジナルフェイクドライフラワーケーキ、<br>
                    額アレンジ、オリジナルキットなどご相談下さい。
                </p>
            </div>
        </section>
        <section class="section section--buy-link">
            <div class="section-title">
                <h2>ご購入<span>honahanaの作品は、<br class="sp">店舗または下記のオンラインショップから<br class="sp">お求めいただけます。</span></h2>
            </div>
            <div class="section-content">
                <div class="shop-link">
                    <a class="link" href="https://creema.jp/c/honahana"><img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/creema.png"></a>
                </div>
                <p class="description">
                    ここから先は外部サイトへ移動します。<br class="pc tb">
                    価格やサービス内容については、各サイトの利用規定に従うもので、当社は一切責任を負いません。
                </p>
            </div>
        </section>
        <section class="section section--contact-links">
            <div class="regarding-buying">
                <div class="wrapper">
                    <h2>ご購入に関して</h2>
                    <p>
                        オリジナル作品の製作やその他ご相談・ご要望に<br>
                        関してのお問い合わせ
                    </p>
                    <a class="link" href="<?php home_url(); ?>/contact">お問い合わせ</a>
                </div>
            </div>
            <div class="regarding-business-trip">
                <div class="wrapper">
                    <h2>出張に関して</h2>
                    <p>
                        イベントでの行け込みや装飾についてのご相談に<br>
                        関してのお問い合わせ
                    </p>
                    <a class="link" href="contact.html">お問い合わせ</a>
                </div>
            </div>
        </section>
        <section class="section section--instagram">
            <div class="section-title">
                <h2>Instagram<span>最新のお知らせはこちら。</span></h2>
            </div>
            <div class="section-content">
                <?php echo do_shortcode("[instagram-feed num=9 cols=3]"); ?>
            </div>
        </section>
    </div>

<?php get_footer(); ?>
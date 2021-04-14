<?php
    // 不要なメニューを非表示
    flush_rewrite_rules();
    function remove_menus () {
        global $menu;
        unset($menu[5]);	// 投稿
        unset($menu[25]);	// コメント
    }
    add_action('admin_menu', 'remove_menus', 999);

    // カスタム投稿とタクソノミーを追加
	add_action('init', function(){
        // ニュース
        register_post_type('news',
            array(
                'labels' => array(
                    'name' => __('ニュース'),
                    'singular_name' => __('ニュース')
                ),
                'rewrite' => array(
                    'slug' => 'news',
                    'with_front' => false,
                ),
                'hierarchical' => false,
                'has_archive' => true,
                'menu_position' => 21,
                'public' => true,
                "supports" => ['title', 'editor', 'thumbnail'],
            )
        );

        flush_rewrite_rules();
	});
?>

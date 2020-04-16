    <?php

    // Support To Post Thumbnail.
    add_theme_support( 'post-thumbnails' );
        //追加
        function widgets_init() {
            register_sidebar( array(
                'name'          => 'Sidebar Widget',
                'id'            => 'sidebar-widget',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'description'   => 'サイドバーにウィジットを追加します',
            'class'         => 'fotter-left-widget',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            ) );
        }
        add_action( 'widgets_init', 'widgets_init' );

        function my_the_excerpt($postContent) {
            $postContent = mb_strimwidth($postContent, 0, 40, "…","UTF-8");
            return $postContent;
        }
        add_filter('the_excerpt', 'my_the_excerpt');
    <article class=l-post>
        <div class="post-box">
            <a href="<?php the_permalink(); ?>">
                <!-- post -->
                <!-- header -->
                <header class="post-header">
                    <?php the_title( '<h3 class="post-title">', '</h1>' ); ?>
                    <div class="post-thumbnail">
                        <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail(array(),array('class' => "post-thumbnail-img",));
                    }
                    else {
                        echo '<img class="post-thumbnail-img" src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.png"/>';
                    }
                    ?>
                    </div>
                </header>
            </a>
            
            <!-- content -->
            <div class="post-excerpt">
                <?php the_excerpt(); ?>
            </div>
            <!-- footer -->
            <footer>
                <!-- category link -->
                <p>
                    Categories: <?php the_category(",") ?>
                </p>
                <!-- date link -->
                <p>
                    Date: <?php 
                // Get post date
                $archive_year  = get_the_time( 'Y' ); 
                $archive_month = get_the_time( 'm' ); 
                $archive_day   = get_the_time( 'd' ); 
                ?>
                    <a href="<?= get_day_link( $archive_year, $archive_month, $archive_day ); ?>"><?php the_time("Y/m/d") ?></a>
                </p>
            </footer>

        </div>
    </article>
<? get_header(); ?>

<?php // 以下是网页的内容部分 ?>
            <div id="content" class="site-content">
                <div id="content-wrap" class="container">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="blog-archive clear">
                            <?php // 展示post博文
                                if ( have_posts() ) :
                                    /* Start the Loop */
                                    while ( have_posts() ) :
                                        the_post(); ?>
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php the_author(); ?></p>
                                        <p><?php the_category(); ?></p>
                                        <p>"The index page type:" <?php get_post_type(); ?></p>
		                                <?php the_content(); ?> <?php
                                    endwhile;
                                endif;
                                ?>
                            
                            <?php // 该函数用来进行分页设计
                            get_the_posts_pagination( array(
                                'mid_size' => 2,
                                'prev_text' => __( 'Newer', 'textdomain' ),
                                'next_text' => __( 'Older', 'textdomain' ),
                            ) ); 
                                ?>
                            
                            </div> <!-- .blog-archive clear -->
                        </main><!-- #main -->
                    </div><!-- #primary -->
                    
                    <?php get_sidebar(); ?>

                </div><!-- #content_wrap .container -->
            
                <?php // 此处为页面的页脚部分
                    get_footer(); 
                ?>
            
            </div><!-- #content .site-content -->

            
            <footer>
                <p>此部分保留为网页的页脚。</p>
            </footer>

        </div> <!-- #page .site -->

        <?php wp_footer(); ?> 
    </body>
</html>
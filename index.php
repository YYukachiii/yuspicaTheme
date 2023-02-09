<? get_header(); ?>

<?php // 以下是网页的内容部分 ?>
            <div id="content" class="site-content">
                <div id="content-wrap" class="container">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="blog-archive clear">
                            <?php
                                if ( have_posts() ) :
                                    /* Start the Loop */
                                    while ( have_posts() ) :
                                        the_post(); ?>
                                        <h2><?php the_title(); ?></h2>
		                                <?php the_content(); ?> <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </main>
                    </div>
                </div>
            </div>

            <?php // 以下是网页的页脚部分 ?>
            <footer>
                <p>此部分保留为网页的页脚。</p>
            </footer>

        </div> <!-- #page .site -->

        <?php //<?php wp_footer(); ?> 
    </body>
</html>
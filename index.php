<?php get_header(); ?>
<?php if( !is_home() || !is_front_page()): ?>
<div class="page-wrapper">
    <?php endif ?>
    <main class="page-content">
        <ul class="post-list">
            <?php
            if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>
            <li class="post">
                <div class="post-wrapper">
                    <div class="post-image">
                        <a href="<?php the_permalink(); ?>">
                        <?php  
                                if(has_post_thumbnail()){
                                    the_post_thumbnail('blog-thumbnail'); 
                                } 
                                else{ ?>
                        <img src="<?php  echo get_template_directory_uri()."/assets/images/thumbnail.jpg"; ?>" alt="">
                        <?php
                                }
                            ?>
                            </a>
                            <i class="fas fa-link image-icon"></i>
                    </div><!-- post image -->
                    <div class="post-body">
                        <div class="post-title">
                            <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div><!-- post title -->
                        <div class="post-content">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div><!-- post content -->
                    </div><!-- post body -->
                </div><!-- post wrapper -->
            </li>
            <?php
            endwhile;
            endif;
        ?>
        </ul>
        <div class="blog-pagination"><?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?></div>
    </main>
    <!-- sidebar import -->
    <?php get_sidebar(); ?>
    <!-- sidebar import end -->
    <?php if( !is_home() || !is_front_page()): ?>
</div><!-- page wrapper end -->
<?php endif ?>
<?php get_footer(); ?>
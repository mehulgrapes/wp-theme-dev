<?php get_header(); ?>
<?php the_post(); ?>

<!-- page banner -->
<div class="page-title-banner">
    <div class="post-image"
        style="background-image: url('<?php  if(has_post_thumbnail()): the_post_thumbnail_url(); else: echo get_template_directory_uri()."/assets/images/thumbnail.jpg"; ?><?php endif;?>');">
        <h1 class="page-title-heading"> <?php the_title(); ?></h1>
    </div>
</div>
<!-- page banner end -->

<?php if( !is_home() || !is_front_page()): ?>
<!-- page wrapper -->
<div class="page-wrapper">
    <?php endif ?>
    <!-- main content -->
    <main class="page-content">
        <div class="page-content-body">
            <?php the_content(); ?>
        </div>
        <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        ?>
    </main>
    <!-- main content end -->
    <!-- sidebar import -->
    <?php get_sidebar(); ?>
    <!-- sidebar import end -->
    <?php if( !is_home() || !is_front_page()): ?>
</div><!-- page wrapper end -->
<?php endif ?>

<?php get_footer(); ?>
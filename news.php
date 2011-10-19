<?php
/*
    Template Name: News
*/
?>
<?php get_header(); ?>
<div id="container">
   <?php if(have_posts()):?><?php while(have_posts()):the_post();?>
            <div id="post" id="post-<?php the_id(); ?>">
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
            <div class="post">
                <h2><?php _e('Not Found'); ?></h2>
            </div>
        <?php endif; ?>
      
</div>
    <?php get_footer(); ?>


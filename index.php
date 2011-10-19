<?php get_header(); ?>
    <div id="container" style="width:700px;">
        <?php if(have_posts()):?><?php while(have_posts()):the_post();?>
            <div id="post" id="post-<?php the_id(); ?>">
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
            <div class="navigation">
                <?php posts_nav_link('in between', 'before', 'after'); ?>
            </div>
        <?php else: ?>
            <div class="post">
                <h2><?php _e('not found'); ?></h2>
            </div>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
    

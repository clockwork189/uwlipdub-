<?php get_header(); ?>
    <div id="container">
        <?php if(have_posts()):?><?php while(have_posts()):the_post();?>
            <div id="post" id="post-<?php the_id(); ?>">
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry">
                    <?php the_content(); ?>
                    <?php link_pages('<p><strong>Pages:</strong>','</p>','number'); ?>
                    <p class="postmetadata">
                        <?php _e('filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?>
                        <?php edit_post_link('edit', ' &#124; ', ''); ?>
                                </p>
                </div>
                <div class="comments-template">
                <?php comments_template(); ?>
                </div>
            </div>
        <?php endwhile; ?>
            <div class="navigation">
                <?php previous_post_link('&laquo;%link'); ?><?php next_post_link('%link &raqup;') ?>
            </div>
        <?php else: ?>
            <div class="post">
                <h2><?php _e('not found'); ?></h2>
            </div>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
 

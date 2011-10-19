<?php
/*
    Template Name: Front Page
*/
?>
<?php get_header(); ?>
<div id="container" style="width:700px;">
        <div class="entry">
            <img src="<?php bloginfo("template_directory")?>/images/banner-light.png" />
        </div>
</div>
    <div class="sidebar">
        <ul>
            <?php if(function_exists('dynamic_sidebar')&&dynamic_sidebar()) : else : ?>
            <li>
                <a href="http://twitter.com/#!/uwaterloolipdub" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/twitter_icon.png "/></a>
                <a href="http://www.facebook.com/UWaterlooLipdub" target="_blank" ><img src="<?php bloginfo( 'template_directory' ); ?>/images/facebook_icon.png " style="margin-left:7px;"/></a>
                <a href="http://youtube.com/user/uwaterloolipdub" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/youtube_icon.png " style="margin-left:7px;"/></a>
            </li>
            <li>
           <iframe width="215" height="139" src="http://www.youtube.com/embed/q8VcSQi5fak?autoplay=1&theme=light" frameborder="0" allowfullscreen></iframe>i</li>
            <li>
            
            <div id="news_feed">
            <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                <script>
                new TWTR.Widget({
                  version: 2,
                  type: 'profile',
                  rpp: 4,
                  interval: 6000,
                  width: 216,
                  height: 300,
                  theme: {
                    shell: {
                      background: '#d8d8d8',
                      color: '#60257d'
                    },
                    tweets: {
                      background: '#d8d8d8',
                      color: '#000000',
                      links: '#ae6000'
                    }
                  },
                  features: {
                    scrollbar: true,
                    loop: false,
                    live: false,
                    hashtags: true,
                    timestamp: true,
                    avatars: false,
                    behavior: 'all'
                  }
                }).render().setUser('uwaterloolipdub').start();
                </script>
            </div>  
            </li>
            <?php endif; ?>
        </ul>
    </div>

    <?php get_footer(); ?>


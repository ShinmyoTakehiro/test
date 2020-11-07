<?php get_header();?>

    <div id="contents">
        <div class="contents_bg">
            <div class="content_bg_img corporate">
                
            </div>
            <div class="container">
                
            
            </div>
        </div>
        <div class="contents_inner">
            <div class="container">
                <div class="inner">
                    <article class="">
                       
                        <?php
                            if(have_posts()): ?>
                        <?php while(have_posts()):the_post();?>
                        <div class="post_single_date">
                            <p><?php the_time('Y.n.j'); ?></p>
                        </div>
                        <div class="post_single_title">
                            <h2 class="ttl_contents01"><?php the_title();?></h2>
                        </div>
                        <div class="post_single_photo">
                            <?php the_post_thumbnail(array(390,260)); ?>
                        </div>
                        <div class="post_single_content">
                        <?php the_content();?>		
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>
                         <div class="contents_pagenavi">
                            <?php previous_post_link('%link','<<'); ?>
                            <?php next_post_link('%link','>>'); ?>
                        </div>
                        
                    </article>
                </div>
            </div>
        </div>
       
    </div>

<?php get_footer();?>

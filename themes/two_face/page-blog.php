<?php
/*
Template Name:記事一覧

*/
?>

<?php get_header();?>
    <div class="popup" id="js-popup">
        <div class="popup-inner">
            <div class="close-btn" id="js-close-btn">
             <i class="fas fa-times"></i>
            </div>
            <a href="#">
                <img class="pc" src="<?php echo get_template_directory_uri();?>/img/_mol_info_zoom.png" alt="zoom-pc">
                <img class="sp" src="<?php echo get_template_directory_uri();?>/img/_mol_info_zoom-_sp.png" alt="zoom-sp">
            </a>
        </div>
        <div class="black-background" id="js-black-bg"></div>
    </div>
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
                    <h2 class="ttl_contents01">
                        Blog
                    </h2>
                    <ul class="ul_index_archive01">
                        <!--サブループ-->
                        <?php
                        $args = array('posts_per_page' =>10);
                        $the_query = new WP_Query($args);
                        if($the_query->have_posts()):
                        ?>
                        <?php while ($the_query->have_posts()):$the_query->the_post();?>
                        <li class="active">
                            <a href="<?php the_permalink(); ?>">
                                <div class="index_blog_photo">
                                    <?php the_post_thumbnail(array(390,260)); ?>
                                    
                                </div>
                                <div class="index_blog_content">
                                    <div class="title">
                                        <?php the_title();?>
                                    </div>
                                    <div class="excerpt pc">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <div class="date">
                                        <?php the_time('Y.n.j'); ?>
                                    </div>        
                                </div>
                            </a>
                        </li>
                        <?php endwhile;?>
                        <?php　else:?>
                            
                <?php
                    endif; 
                    wp_reset_postdata();?>
                    </ul>
                </div>
            </div>
            <div class="contents_pagenavi">
                
                <?php previous_posts_link('前10件'); ?>
                <?php next_posts_link('次10件'); ?>
            </div>
        </div>
        
    </div>
<?php get_footer();?>

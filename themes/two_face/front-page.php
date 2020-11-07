<?php get_header();?>
<!-- ---------------------ローディングアニメーション---------------------- -->

<div class="bg-open">
    <p class="text">Two&nbsp;Face</p>
</div>
   
        <div class="top-kv">
            <div class="top-kv-img">
                <img id="img" src="<?php echo get_template_directory_uri();?>/img/ob5a95ae8901221b2cdf6896c682f3f8b_26732999_200714_0005.jpg" alt="">
            </div>
        </div>
        <div id="contents">
            <section class="index_about">
                <div class="index_about_img">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
                </div>
                <div class="index_about_inner">
                    <p>
                        2016年にオープンしました！<br>
                        小田急線本厚木駅北口にある古着屋です。<br>
                        海外に直接行き、1つ1つ厳選したVintage&nbsp;&&nbsp;Used&nbsp;Item<br class="sp">のお洋服を取り扱っています。<br>
                        都内に負けないオシャレを配信していきます。<br>
                        店内は古着だけでなくTattoo&nbsp;Studio、Eyelash&nbsp;Salonも併設しております。
                    </p>        
                </div>
            </section>
            <section class="index_contents">
                <div class="index_contents_row">
                    <div class="index_contents_col">
                        <div>
                            <div class="index_contents_photo contents01">
                                <img src="<?php echo get_template_directory_uri();?>/img/contents_01.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="index_contents_photo contents02">
                                <img src="<?php echo get_template_directory_uri();?>/img/contents_02.jpg" alt="">
                            </div>
                        </div>
                      
                    </div>
                    <div class="index_contents_col">
                        <div class="index_contents_photo contents03">
                            <img src="<?php echo get_template_directory_uri();?>/img/contents_03.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="index_contents_row">
                    <div class="index_contents_col">
                        <div class="index_contents_photo contents04">
                            <img src="<?php echo get_template_directory_uri();?>/img/contents_04.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="index_contents_row">
                    <div class="index_contents_col">
                        <div class="index_contents_photo contents05">
                            <img src="<?php echo get_template_directory_uri();?>/img/contents_05.jpg" alt="">
                        </div>
                    </div>
                    <div class="index_contents_col">
                        <div class="index_contents_photo contents06">
                            <img src="<?php echo get_template_directory_uri();?>/img/contents_06.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="index_blog">
                <div class="container">
                    <h2 class="ttl_index02 ta_center">BLOG</h2>
                    <p>Two&nbsp;Faceの最新情報をチェック。イベントや<br class="sp">入荷情報も更新中</p>
                    <ul class="ul_index_archive01">
                        <!--サブループ-->
                        <?php
                        $args = array('posts_per_page' =>3);
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
                                    <div class="excerpt">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <div class="date">
                                        <?php the_time('Y.n.j'); ?>
                                    </div>        
                                </div>
                            </a>
                        </li>
                        <?php endwhile;?>
                        <?php
                            endif;
                            wp_reset_postdata();
                        ?> 
                    </ul>
                    <p class="ta_right"> <a href="<?php echo home_url( '/blog' ); ?>">More&nbsp;BLOG</a></p>
                </div>
                
            </section>
            <section class="index_shop">
                <div class="container">
                    <h2 class="ttl_index01">NEW&nbsp;ITEMS</h2>
                    <p>Two&nbsp;Faceのオンラインショップおすすめアイテムをご紹介</p>
                    <ul class="ul_index_archive02">
                        <li class="pc"><iframe frameborder="0" width="220" height="380" src="https://twofaceshop.thebase.in/items/31588295/widget" ></iframe></li>
                        <li class="pc"><iframe frameborder="0" width="220" height="380" src="https://twofaceshop.thebase.in/items/31822168/widget" ></iframe></li>
                        <li class="pc"><iframe frameborder="0" width="220" height="380" src="https://twofaceshop.thebase.in/items/31965382/widget" ></iframe></li>
                        <li class="pc"><iframe frameborder="0" width="220" height="380" src="https://twofaceshop.thebase.in/items/31495250/widget" ></iframe></li>
                        <li class="sp my-2"><iframe frameborder="0" width="320" height="480" src="https://twofaceshop.thebase.in/items/31588295/widget/large" ></iframe></li>
                        <li class="sp my-2"><iframe frameborder="0" width="320" height="480" src="https://twofaceshop.thebase.in/items/31822168/widget/large" ></iframe></li>
                        <li class="sp my-2"><iframe frameborder="0" width="320" height="480" src="https://twofaceshop.thebase.in/items/31965382/widget/large" ></iframe></li>
                        <li class="sp my-2"><iframe frameborder="0" width="320" height="480" src="https://twofaceshop.thebase.in/items/31495250/widget/large" ></iframe></li>
                    </ul>
                    <p class="ta_right"> <a href="https://twofaceshop.thebase.in/"  target="_blank">More&nbsp;ITEMS</a></p>
                </div>
            </section>
        </div>
  
<?php get_footer();?>
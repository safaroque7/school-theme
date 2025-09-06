<?php $newsevent = new WP_Query(array(
    'post_type'         =>  'newsevent',
    'posts_per_page'     =>  5,
    'order'             =>  'DESC'
));?>


<div class="notish_bord2 fix">
    <h2 style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'> নিউজ ও ইভেন্ট </h2>
    <div class="fix notish2">
        <?php while($newsevent->have_posts()):$newsevent->the_post();?>
            <div class="notish detail_news_event fix">
                <h3> 
                    <a href="<?php the_permalink();?>" 
                           style='color:
                                <?php echo ot_get_option( 'notice_color_id');?>; 
                                border-bottom:1px solid 
                                <?php echo ot_get_option( 'notice_color_id');?>
                               '>
                           <?php the_title();?>
                    </a> 
                </h3>
               <p>  <?php echo excerpt('20');?> </p>
            </div>
        <?php endwhile;?>
    </div>
</div>

 

<div class="notish_bord2 display_750 fix fix">
    <h2 style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'> নিউজ ও ইভেন্ট </h2>
    <div class="fix notish2">
        <?php while($newsevent->have_posts()):$newsevent->the_post();?>
            <div class="notish detail_news_event fix">
                <h3> 
                    <a href="<?php the_permalink();?>" 
                           style='color:
                                <?php echo ot_get_option( 'notice_color_id');?>; 
                                border-bottom:1px solid 
                                <?php echo ot_get_option( 'notice_color_id');?>
                               '>
                           <?php the_title();?>
                    </a> 
                </h3>
                <?php echo excerpt('15');?>
            </div>
        <?php endwhile;?>
    </div>
</div>


<div class="clear"></div>
<?php $notice = new WP_Query(array(
    'post_type'         =>  'notice',
    'posts_per_page'     =>  2,
    'order'             =>  'DESC'
));?>


<div class="notish_bord1 fix">
    <h2> নোটিশ </h2>
        <div class="fix notish1">
            <?php while($notice->have_posts()):$notice->the_post();?>
                <div class="notish for_450 fix">
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
                    <p> <?php echo excerpt('30');?> </p>
                </div>
            <?php endwhile;?>    
            <!--for 750px end-->
        </div>
</div>
   
   
<div class="notish_bord1 display_750 fix">
    <h2 style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'> নোটিশ </h2>
        <div class="notish1 display_notice_750">
            <?php while($notice->have_posts()):$notice->the_post();?>
                <div class="notish fix">
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
                    <p> <?php echo excerpt('15');?> </p>
                </div>
            <?php endwhile;?>    
            <!--for 750px end-->
        </div>
</div>
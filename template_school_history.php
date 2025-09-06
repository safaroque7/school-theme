<?php
/*
    Template Name: বিদ্যালয়ের ইতিহাস
*/
get_header()?>

<?php $history = new WP_Query(array(
    'post_type'         =>  'schoolhistory',
    'posts_per_page'    =>  1,
    'order'             =>  'DESC'
));?>

<div class="maincontent fix">
    
        <div class="amader_kotha fix">
               
            <h2 style='color:
                        <?php echo ot_get_option( 'backgrouncolor_id');?>; 
                        border-bottom:1px solid 
                        <?php echo ot_get_option( 'backgrouncolor_id');?>'> 
                       বিদ্যালয়ের ইতিহাস 
            </h2>               
                <?php while($history->have_posts()):$history->the_post();?>
                    <!--start image_and_caption-->
                    <div class="fix image_and_caption">
                        <!--start school_history_image-->
                        <div class="fix school_history_image">
                            <?php the_post_thumbnail('history_pic');?>
                        </div>

                        <?php if(the_field('caption')){?>
                            <span class="school_caption">
                                <?php the_field('caption');?>
                            </span>
                        <?php } ?>               
                    </div><!--end image_and_caption-->
                    <?php the_content();?>
                <?php endwhile;?>    
        </div>

<?php get_footer();?>
<!--slider5_for_responsive is for responsive strat from here-->
<div>            
    <div class="gallery fix">
        <h2><a href="<?php get_site_url();?>/ফটো-গ্যালারি/" style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'> ফটো গ্যালারি </a></h2>

            <?php $photogellary = new WP_Query(array('post_type'=>'photogellary', 
                                                     'posts_per_page'=>10, 
                                                     'order'=>'desc'));
            ?>
            
            <div class="slider5_for_responsive">
                <!--slider5 start from here-->
                <div class="fix slider5 photogellary_for_750">
                    <?php while($photogellary->have_posts()):$photogellary->the_post();?>
                        <div class="fix slider">
                                <div class="fix slider_caption pcaption">
                                    <a href="<?php the_permalink();?>"> <?php the_title();?> </a>
                                </div>
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('photo_image_size');?></a>
                        </div>                   
                    <?php endwhile;?>
                </div> <!--slider5 start end here-->
            </div>    
            
            
            
        </div>
</div><!--slider5_for_responsive is for responsive end from here-->
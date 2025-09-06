<?php get_header();?>

    <div class="maincontent fix">
        <div class="left_bire single_founder fix">
           
            <?php if(have_posts()): while(have_posts()):the_post();?>
                <?php if (has_post_thumbnail()) { ?>
                    <div class="fix single_image_size">
                        <?php the_post_thumbnail();?>
                        
                            
                        
                        
                        
                        
                        <?php if(the_field('single_caption')){?>
                            <div class="fix captionBox">
                                <p> <?php the_field('single_caption');?> </p>
                            </div>
                        <?php }?> 
                        
                        
                        
                        
                        
                    </div>
                <?php } ?>
               
                <h4> <?php the_title();?> </h4>
                <div class="fix published_read">
                    <h3> প্রকাশিত হয়েছে: ২ আগস্ট ২০১৫ইং | পড়া হয়েছে ২০ বার </h3>
                </div>
                <?php the_content();?>
            
            <?php endwhile; endif;?>           
                        
        </div>
        <div class="right_bire fix">
            <?php get_template_part('part/notice');?>
                <div class="clear"></div>
            <?php get_template_part('part/news_event');?>
                <div class="clear"></div>
            
            <?php get_template_part('part/link');?>

            <?php get_template_part('part/image_link');?>
        </div>
        
    <div class="clear"></div>
    
    <?php get_template_part('part/photogellary');?>    
        
    <div class="clear"></div>
        
<?php get_footer();?>
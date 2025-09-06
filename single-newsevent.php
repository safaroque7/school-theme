<?php get_header();?>

    <div class="maincontent fix">
        <div class="left_bire single_founder fix">
           
            <?php while(have_posts()):the_post();?>
                <?php if(has_post_thumbnail()){?>   
                    <div class="fix single_image_size">
                        <?php the_post_thumbnail();?>
                        
                            <div class="fix captionBox">
                                <?php the_field('single_caption');?>
                            </div>

                    </div>
                <?php } ?>    
               
                <h4> <?php the_title();?> </h4>
                <div class="fix published_read">
                    <h3> প্রকাশিত হয়েছে: <?php the_date('d F Y');?>  | 
                    <span class="pReading"> পড়া হয়েছে <?php echo getPostViews(get_the_ID()); ?></span>

                </div>
                <?php the_content();?>
                <?php setPostViews(get_the_ID()); ?>
            <?php endwhile;?>           
                        
        </div>
        <div class="right_bire fix">
            <h2> আরো নিউজ ও ইভেন্ট </h2> 
            
            <?php 

            // get the custom post type's taxonomy terms

            $custom_taxterms = wp_get_object_terms( $post->ID, array('fields' => 'ids') );
            // arguments
            $args = array(
            'post_type' => 'newsevent',
            'post_status' => 'publish',
            'posts_per_page' => 20, // you may edit this number
            'orderby' => 'DESC',
            'post__not_in' => array ($post->ID),
            );
            $related_items = new WP_Query( $args );
            // loop over query
            if ($related_items->have_posts()) :
            echo '<ul>';
            while ( $related_items->have_posts() ) : $related_items->the_post();
            ?>
                <li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
            <?php
            endwhile;
            echo '</ul>';
            endif;
            // Reset Post Data
            wp_reset_postdata();
            ?>            
            
        </div>
        
    <div class="clear"></div>
    
    <?php get_template_part('part/photogellary');?> 
        
    <div class="clear"></div>
        
<?php get_footer();?>
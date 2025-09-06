<?php $headmaster = new WP_Query(array(
    'post_type'         =>  'headmaster',
    'posts_per_page'    =>  1,
));?>    


<?php while($headmaster->have_posts()):$headmaster->the_post();?>
    <div class="fix single_content">
        <h2 style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'> <?php the_title();?> </h2>

            <div class="fix head_teacher_image_caption_body">
                <div class="fix head_teacher_image_caption">
                    <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail('headmaster_image_size');?>
                    </a>
                </div>
                <div class="fix head_teacher_body">
                    <?php echo excerpt('35');?>
                </div>
                
                <!--for 750px-->
                <div class="fix head_teacher_body for750">
                    <?php echo excerpt('17');?>
                </div>
                
                <!--for 300px-->
                <div class="fix for300">
                    <?php echo excerpt('20');?>
                </div>
            </div>
    </div>
<?php endwhile;?> 


<div class="main_slider fix">
   <?php $main_slider = new WP_Query(array(
        'post_type'         =>  'mainslider',
        'posts_per_page'    =>  '5',
        'order'             =>  'DESC'
    ));?>
    <ul class="bxslider">
        <?php while($main_slider->have_posts()):$main_slider->the_post();?>
            <div class="image_caption">
                <div class="caption">
                    <a href="<?php the_permalink();?>"> <?php the_title();?> </a>
                </div>
                <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('main_slider_image_size');?> </a>
            </div>
        <?php endwhile;?>

    </ul>
</div>
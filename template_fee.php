<?php
/*
    Template Name: ফী
*/
get_header();?>

        <div class="maincontent fix">
            
            <div class="fix amader_kotha">
                <h2> সকল প্রকার ফী </h2>
                
                
                <?php $fee = new WP_Query(array(
                    'post_type'         =>  'fee',
                    'posts_per_page'    =>  -1,
                    'order'             =>  'ASC'
                )); ?>
                
                <?php while($fee->have_posts()):$fee->the_post();?>
                    <h5> <?php the_title();?> </h5>
                    <h6> <?php the_content();?> </h6>
                <?php endwhile;?>
            </div>

            
<?php get_footer();?>            
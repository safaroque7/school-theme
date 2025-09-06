<?php $routine = new WP_Query(array(
        'post_type'         =>  'class10science',
        'posts_per_page'    =>  '7',
        'order'             =>  'ASC'
    ));?>
<?php get_template_part('include/routine_loop');?>
<?php query_posts(array(
    'post_type'         =>  'classroutine6',
    'posts_per_page'    =>  '7',
    'order'             =>  'ASC'
));?>
<?php get_template_part('include/routine_loop');?>
<!-- ষষ্ঠ শ্রেণি -->
<div class="amader_kotha academic_calender no_top_border fix">
   <?php query_posts(array(
        'post_type'     =>  'class10textbook',
        'posts_per_page'    =>  1
        ));
    ?>        
    <?php get_template_part('part/text_book_query');?>
</div>
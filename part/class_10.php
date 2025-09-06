<!-- দশম শ্রেণি -->
<div class="amader_kotha academic_calender no_top_border fix">
    <?php query_posts(array(
        'post_type'     =>  'exammonth10',
        'posts_per_page'    =>  1
        ));
    ?>        
    <?php while(have_posts()):the_post();?>    

    <h4> <?php the_title();?>  </h4>
        <p> <b> ষান্মাসিক পরীক্ষা: </b> <?php the_field('first_exam');?> </p>
        <p> <b> বার্ষিক পরীক্ষা: </b> <?php the_field('annual_exam');?> </p>
        <p> <b> প্রাক-নির্বাচনী পরীক্ষা: </b> <?php the_field('pre_test_exam');?> </p>
        <p> <b> নির্বাচনী পরীক্ষা: </b> <?php the_field('test_exam');?> </p>
    <?php endwhile;?>    
</div>
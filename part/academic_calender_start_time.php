<div class="amader_kotha academic_calender no_top_border fix">
  
   <?php query_posts(array(
        'post_type'         =>  'startschooltime',
        'posts_per_page'    =>  1,
    ));?>
   <?php while(have_posts()):the_post();?>
       <h4> <?php the_title(); ?> </h4>
        <p> <b> ক্লাশ: </b> <?php the_field('class'); ?>  </p>
        <p> <b> ক্লাশ শুরু সকাল: </b> <?php the_field('starttime');?> </p>
        <p> <b> ক্লাশ শেষ হয়: </b> <?php the_field('closetime');?> </p>
    <?php endwhile;?>    
</div>
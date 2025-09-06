<?php
    query_posts(array(
        'post_type'         =>  'founder',
        'posts_per_page'    =>  1,
    ));
?>

<h2 style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'> প্রতিষ্ঠাতা </h2>

<?php while(have_posts()):the_post();?>
    <div class="fix head_image">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('founder_image_size');?></a>
        <div class="caption">
            <h2> <a href="<?php the_permalink();?>"><?php the_title();?></a> </h2>
            <p> প্রতিষ্ঠাতা </p>
        </div>
    </div>
<?php endwhile;?>
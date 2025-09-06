<?php
    query_posts(array(
        'post_type'         =>  'textlink',
        'posts_per_page'    =>  15,
        'order'             =>  'ASC'
    ));
?>
<div class="quec_link">
    <h2 style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'> গুরুত্বপূর্ণ লিংক </h2>
    <ul>
        <?php while(have_posts()):the_post();?>
            <li>
                <a href="<?php the_field('link_name');?>" 
                    target="_blank"> 
                        <?php the_title();?>
                </a>
            </li>
        <?php endwhile;?>    
    </ul>
</div>
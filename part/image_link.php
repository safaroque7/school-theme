<?php
    query_posts(array(
        'post_type'         =>  'imagelink',
        'posts_per_page'    =>  6,
        'order'             =>  'ASC'
    ));
?>
<div class="othet fix">
    <ul>
       <?php while(have_posts()):the_post();?>
            <li>
                <a href="<?php the_field('link_name');?>" target="_blank">
                    <?php the_post_thumbnail('image_link_image_size');?>
                </a>
            </li>
        <?php endwhile;?>    
        
    </ul>
</div>
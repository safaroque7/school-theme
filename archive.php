<?php get_header();?>

    <!--start wrap-->
    <div class="wrap">

        <!--start category_and_other-->
        <div class="category_and_other">

            <!--start per_templat_matter-->
            <div class="per_templat_matter">
                <span class="archive_heading">
                <?php if(have_posts()):?>

                    <?php 
                        if(is_category()){
                            single_cat_title();
                        }
                        elseif(is_tag()){
                            single_tag_title();
                        }
                        elseif(is_author()){
                            the_post();
                            echo ''.get_the_author();
                            rewind_posts();
                        }
                        elseif(is_day()){
                            echo ''.get_the_time('d M Y');
                        }
                        elseif(is_month()){
                            echo ''.get_the_date('F Y');
                        }
                        elseif(is_year()){
                            echo ''.get_the_date('Y');
                        }
                    ?> প্রকাশিত সব খবর
                          </span>


                <?php while(have_posts()):the_post();?>
                    <div class="archive_category_title">
                        <!--start archive_search_image_box-->
                        <div class="archive_search_image_box">
                            <?php $query_image = 
                        wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 
                                                    'category_image_size_inner');?>
                                <img src="<?php echo $query_image[0]?>" alt="<?php the_title();?>">
                        </div>
                        <!--.end archive_search_image_box-->
                        <h2>
                           <a href="<?php the_permalink();?>">
                                <?php the_title();?>
                            </a>
                            <div class="source_date">
                                <h3> 
                                    <?php the_field('reporter_name');?> |
                                    <?php the_time('l, d F Y');?> | পড়া হয়েছে
                                    <?php echo getPostViews(get_the_ID()); ?>
                                 </h3>
                            </div>
                        </h2>
                    </div>

                    <?php endwhile; endif;?>
                        <?php get_template_part('include/pagination');?>

            </div>
            <!--.end per_templat_matter-->

       </div>
        <!--.endcategory_and_other-->
    </div>
    <!--.end wrap-->
    <?php get_footer();?>
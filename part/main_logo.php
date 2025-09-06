<div class="logo fix">

   <?php if(function_exists('get_option_tree')):
        if(get_option_tree('logo')):
    ?>

    <a href="<?php echo esc_url(home_url('/'));?>" >
        <img src="<?php get_option_tree('logo', '', 'true');?>">
    </a>    
    <?php else: ?>
    <a href="<?php echo esc_url(home_url('/'));?>">   
        <img src="<?php echo get_template_directory_uri();?>/img/main_logo.png" alt="">
    </a>
    <?php endif; endif;?>
</div>
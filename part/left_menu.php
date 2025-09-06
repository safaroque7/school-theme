        <div class="fix school_left_menu" style='background:<?php echo ot_get_option( 'backgrouncolor_id' ); ?>'>
            <ul>
                <?php
                    wp_nav_menu(array(
                        'theme_location'    =>  'side_menu'
                    ));
                ?>
            </ul>
        </div>
</div>
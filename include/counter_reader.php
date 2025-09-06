<?php
    /* Visit Counter For WordPress by Talkofweb.com */
    function getPostViews($postID){
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "পড়া হয়েছে 0 বার";
        }
        return $count.' বার';
        }
        function setPostViews($postID) {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
?>
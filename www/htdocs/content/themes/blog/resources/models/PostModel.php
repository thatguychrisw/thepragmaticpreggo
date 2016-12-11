<?php

class PostModel {

    /**
     * Return a list of all published posts.
     *
     * @return array
     */
    public static function all()
    {
        $query = new WP_Query([
            'post_type'         => 'post',
            'posts_per_page'    => -1,
            'post_status'       => 'publish'
        ]);

        return $query->get_posts();
    }

    public static function single($postId)
    {
        return get_post($postId);
    }

} 
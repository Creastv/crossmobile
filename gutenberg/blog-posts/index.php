<?php
$className = 'blog-posts';
require dirname(__FILE__, 2) . '/defaults.php';
$posts = get_posts(
    [
        'post_type' => 'post',
        'post_status' => 'publish',
        'hide_empty'     => true,
        'posts_per_page' => get_field('posts') ? get_field('posts') : -1,
        // 'post__not_in'   => get_the_id(),
    ]
);
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <?php if (!empty(get_field('title'))) { ?>
            <div class="posts-title">
                <h2>
                    <?php echo get_field('title'); ?>
                </h2>
            </div>
        <?php }; ?>
        <div class="posts">
            <?php foreach ($posts as $post) { ?>
                <a href="<?php echo get_permalink($post->ID); ?>" class="single-post">
                    <div class="post-thumb">
                        <?php echo wp_get_attachment_image(get_post_thumbnail_id($post->ID), 'medium_large', 0, ['class' => '']); ?>
                    </div>
                    <div class="post-data">
                        <h2><?php echo get_the_title($post->ID); ?></h2>
                        <div class="post-description">
                            <?php echo get_the_excerpt($post->ID); ?>
                        </div>
                        <p class="btn-details">Czytaj więcej</p>
                    </div>
                </a>
            <?php }; ?>
        </div>
    </div>
</section>
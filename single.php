<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/gutenberg/hero/style.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/gutenberg/blog-posts/style.css">

<section class="hero">
    <div class="custom-icon icon-left">
        <svg width="357" height="340" viewBox="0 0 357 340" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_47_1889)">
                <path d="M270.085 127.952C285.204 181.002 254.445 236.238 201.459 251.323C171.545 259.834 139.368 253.932 114.423 235.322C104.553 227.97 96.1242 218.862 89.5401 208.437L50.2479 225.953C90.5269 292.735 177.303 314.255 244.036 273.99C299.412 240.604 325.004 173.775 306.111 111.891L270.085 127.952Z" fill="#E81F76"></path>
                <path d="M127.686 101.457L98.1906 114.606L86.6282 88.6691C78.2516 89.4756 70.068 91.6394 62.3677 95.0721L75.525 124.586L49.7083 136.095C50.4842 144.491 52.6509 152.68 56.0859 160.385L85.5809 147.236L97.2507 173.414C105.627 172.607 113.811 170.444 121.511 167.011L108.369 137.531L134.186 126.022C133.376 117.641 131.209 109.453 127.774 101.748C127.774 101.748 127.72 101.442 127.651 101.473L127.686 101.457Z" fill="#E81F76"></path>
                <path d="M249.076 61.3209C261.74 85.1996 252.666 114.852 228.754 127.491C204.892 140.149 175.248 131.056 162.603 107.127C161.561 105.159 160.656 103.13 159.889 101.039C147.24 77.1945 156.33 47.5765 180.226 34.9031C204.088 22.245 233.732 31.3382 246.377 55.2666C247.42 57.2349 248.324 59.2644 249.092 61.3553L249.076 61.3209ZM171.145 96.0621C178.765 114.726 200.073 123.7 218.74 116.121C237.392 108.507 246.352 87.1938 238.767 68.5145C238.445 67.7921 238.123 67.0698 237.816 66.3818C230.196 47.7178 208.888 38.7435 190.221 46.3231C171.569 53.937 162.609 75.2501 170.194 93.9293C170.516 94.6517 170.823 95.3397 171.145 96.0621Z" fill="white"></path>
            </g>
            <defs>
                <clipPath id="clip0_47_1889">
                    <rect width="280.136" height="245.558" fill="white" transform="translate(0.701111 114.81) rotate(-24.027)"></rect>
                </clipPath>
            </defs>
        </svg>
    </div>
    <div class="container container-md">
        <div class="hero-wrapper">
            <h1>
                <?php echo get_the_title(); ?>
            </h1>
        </div>
    </div>
</section>


<section class="single-blog-post">
    <div class="container container-md">
        <div class="single-blog-post-content">
            <div class="current-post-thumb">
                <?php echo wp_get_attachment_image(get_post_thumbnail_id(get_the_id()), 'large', 0, ['class' => '']); ?>
            </div>
            <div class="single-post-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php
$posts = get_posts(
    [
        'post_type' => 'post',
        'post_status' => 'publish',
        'hide_empty'     => true,
        'posts_per_page' => 3,
        'post__not_in'   => [get_the_id()],
    ]
);
?>

<section class="blog-posts">
    <div class="container">
        <div class="posts-title">
            <h2>
                Mogą cię zainteresować
            </h2>
        </div>
        <div class="posts">
            <?php foreach ($posts as $post) { ?>
                <a href="<?php echo get_permalink($post->ID); ?>" class="single-post">
                    <div class="post-thumb">
                        <?php echo wp_get_attachment_image(get_post_thumbnail_id($post->ID), 'medium_large', 0, ['class' => '']); ?>
                    </div>
                    <div class="post-data">
                        <h2><?php echo get_the_title($post->ID); ?></h2>
                        <div class="post-description">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                        <p class="btn-details">Szczegóły oferty</p>
                    </div>
                </a>
            <?php }; ?>
        </div>
    </div>
</section>

<?php setup_postdata(234); ?>
<?php the_content(); ?>

<?php get_footer(); ?>
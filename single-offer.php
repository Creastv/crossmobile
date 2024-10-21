<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/gutenberg/hero/style.css">

<section class="hero">
    <div class="custom-icon">
        <svg width="301" height="280" viewBox="0 0 301 280" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_146_9561)">
                <path d="M236.1 113.94C242.848 162.637 208.834 207.56 160.198 214.284C132.74 218.076 105.077 208.867 85.3771 189.341C77.5802 181.626 71.2745 172.54 66.76 162.521L29.9062 173.094C57.1497 237.038 131.055 266.818 194.954 239.582C247.975 217.003 278.87 161.208 269.891 104.245L236.1 113.94Z" fill="#E81F76"></path>
                <path d="M113.726 72.853L86.062 80.7896L79.0828 56.4624C71.5901 56.1327 64.0989 57.0247 56.8764 59.0967L64.8183 86.7794L40.6038 93.7262C40.2446 101.232 41.1387 108.728 43.2121 115.955L70.8766 108.018L77.9206 132.571C85.4133 132.901 92.9045 132.009 100.127 129.937L92.1943 102.287L116.409 95.3399C116.736 87.8432 115.842 80.3475 113.768 73.1203C113.768 73.1203 113.759 72.8437 113.694 72.8622L113.726 72.853Z" fill="#E81F76"></path>
                <path d="M225.846 52.525C234.053 75.1729 222.358 100.213 199.684 108.394C177.052 116.598 152.021 104.888 143.837 82.1984C143.162 80.3318 142.615 78.4282 142.198 76.4876C134 53.872 145.705 28.8639 168.37 20.6506C191.002 12.4465 216.032 24.1571 224.217 46.8465C224.892 48.7131 225.438 50.6167 225.855 52.5573L225.846 52.525ZM152.751 73.4951C157.155 90.9137 174.844 101.483 192.26 97.1149C209.668 92.7146 220.225 75.0195 215.853 57.5917C215.659 56.9142 215.465 56.2366 215.279 55.5913C210.876 38.1727 193.187 27.6034 175.77 31.9715C158.363 36.3719 147.805 54.0669 152.177 71.4947C152.371 72.1723 152.557 72.8175 152.751 73.4951Z" fill="white"></path>
            </g>
            <defs>
                <clipPath id="clip0_146_9561">
                    <rect width="249.666" height="218.848" fill="white" transform="translate(0 68.8488) rotate(-16.0076)"></rect>
                </clipPath>
            </defs>
        </svg>
    </div>
    <div class="container">
        <div class="hero-wrapper">
            <div class="hero-title">
                <?php echo get_field('title'); ?>
            </div>

            <div class="hero-thumb">
                <?php echo wp_get_attachment_image(get_post_thumbnail_id(get_the_id()), 'large', 0, ['class' => '']); ?>
            </div>
        </div>
    </div>
</section>

<section class="offer-included">
    <div class="container">
        <div class="offer-included-wrap-outer">
            <?php if (!empty(get_field('included'))) { ?>
                <div class="offer-included-wrapper">
                    <h2>W Twoim Abonamencie:</h2>
                    <div class="offer-included-items">
                        <?php foreach (get_field('included') as $single) { ?>
                            <?php if (!empty($single['description'])) { ?>
                                <div class="offer-included-single">
                                    <div class="included-icon">
                                        <?php echo wp_get_attachment_image($single['icon']['ID'], 'thumbnail', 0, ['class' => '']); ?>
                                    </div>
                                    <div class="included-description">
                                        <?php foreach ($single['description'] as $desc) { ?>
                                            <div class="included-description-wrapper">
                                                <div>
                                                    <?php echo $desc['description']; ?>
                                                </div>
                                                <div class="included-featured">
                                                    <?php echo $desc['text_pink']; ?>
                                                </div>
                                            </div>
                                        <?php }; ?>
                                    </div>
                                </div>
                            <?php }; ?>
                        <?php }; ?>
                    </div>
                <?php }; ?>
                <?php if (!empty(get_field('button'))) { ?>
                    <div class="btn-section">
                        <div class="btn-wrapper">
                            <a class="btn btn-primary" href="<?php echo get_field('button')['url'] ? get_field('button')['url'] : '#'; ?>" title="<?php echo get_field('button')['title'] ? get_field('button')['title'] : ''; ?>" target="<?php echo get_field('button')['target'] ? get_field('button')['target'] : '_self'; ?>">
                                <?php echo get_field('button')['title'] ? get_field('button')['title'] : ''; ?>
                            </a>
                        </div>
                    </div>
                <?php }; ?>
                </div>
                <div class="hero-offer offer-<?php echo get_field('box_color'); ?>">
                    <div class="g-icon">
                        <svg width="68" height="50" viewBox="0 0 45 33" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.5 32.75">

                            <g>
                                <path fill="#ffff" d="M32.54,10.83l.06.27h4.37l-.04-.39c-.08-.72-.29-1.39-.64-2-.35-.6-.8-1.13-1.37-1.57-.56-.44-1.2-.78-1.93-1.02-.73-.24-1.5-.36-2.34-.36-.95,0-1.84.16-2.68.48-.84.32-1.58.8-2.22,1.43-.64.63-1.14,1.4-1.5,2.3-.36.91-.53,1.94-.53,3.09,0,1.47.29,2.75.88,3.84.59,1.09,1.4,1.93,2.45,2.52h0c1.05.59,2.26.88,3.63.88,1.22,0,2.32-.24,3.29-.73.97-.49,1.73-1.2,2.29-2.13.56-.94.83-2.06.83-3.33v-2.22h-6.67v3.31h2.4c-.04.17-.1.32-.18.45-.14.23-.36.41-.68.55-.32.14-.73.22-1.25.22-.57,0-1.03-.14-1.38-.38-.36-.25-.64-.62-.84-1.12h0c-.2-.51-.3-1.15-.3-1.9s.11-1.36.32-1.87c.2-.5.49-.86.86-1.11.36-.25.81-.38,1.37-.38.26,0,.49.03.7.08.21.06.38.14.53.24.15.1.27.22.36.36.1.14.17.3.22.5Z" />
                                <g>
                                    <polygon fill="#ffff" points="19.66 19.52 19.66 19.52 19.65 19.52 19.66 19.52" />
                                    <path fill="#ffff" d="M24.83,17.9c-.19-.26-.37-.54-.52-.83-.61-1.13-.92-2.48-.92-4.01,0-1.2.19-2.28.56-3.22.28-.71.65-1.34,1.09-1.89-.21-.17-.43-.32-.66-.46-.88-.52-1.88-.78-3-.78-.95,0-1.79.19-2.51.57-.72.38-1.23.85-1.52,1.42h-.11l.37-4.15h8.44V.48h-12.62l-.73,10.35,4.48.88c.21-.46.55-.82,1-1.08.45-.26.97-.39,1.49-.39s.98.11,1.38.34c.4.22.71.54.93.95.22.4.34.88.33,1.43,0,.55-.11,1.02-.33,1.43-.22.41-.54.73-.93.95-.4.22-.86.34-1.38.34-.67,0-1.25-.19-1.74-.58-.49-.39-.74-.9-.76-1.55h-4.95c.02,1.17.34,2.2.98,3.1.64.9,1.52,1.61,2.63,2.12,1.12.51,2.39.77,3.84.77,1.53,0,2.86-.29,3.99-.86.43-.22.82-.48,1.18-.76Z" />
                                </g>
                            </g>
                            <path fill="#e72376" d="M38.42,18.85c-5.36,7.8-16.05,9.78-23.85,4.42-4.41-3.03-7.15-7.93-7.42-13.27-.11-2.11.17-4.22.83-6.24L1.37.48c-4.43,12.64,2.23,26.48,14.87,30.91,10.49,3.68,22.14-.25,28.26-9.52l-6.07-3.01Z" />
                            <g>
                                <path fill="#ffff" ; d="M41.97,7.78s-.03,0-.04,0c-.47.24-.92-.02-.93-.55-.01-.79-.14-1.56-.47-2.27-1.07-2.35-2.91-3.61-5.49-3.74-.23-.01-.44-.05-.58-.25-.15-.2-.17-.43-.06-.64.12-.23.31-.34.57-.34,1.09,0,2.13.25,3.12.72.87.42,1.63.99,2.27,1.71,1.21,1.37,1.84,2.98,1.86,4.81,0,.13-.07.27-.1.4l-.14.14h0Z" />
                                <path fill="#ffff" ; d="M39.73,7.69c-.18.18-.4.24-.64.15-.25-.09-.39-.29-.4-.55-.01-.41-.07-.81-.2-1.2-.5-1.49-1.86-2.5-3.44-2.55-.25,0-.47-.06-.61-.29-.12-.21-.13-.41-.02-.62.12-.2.3-.31.54-.31.93,0,1.8.24,2.58.73,1.28.81,2.07,1.97,2.31,3.47.04.24.04.49.06.74.01.17-.05.31-.17.44h0Z" />
                                <path fill="#ffff" ; d="M36.56,7.7c-.12-.13-.18-.27-.18-.43-.04-.82-.6-1.38-1.43-1.43-.35-.02-.6-.28-.6-.62s.27-.6.62-.6c1.41-.03,2.65,1.22,2.63,2.63,0,.27-.15.49-.39.58-.25.1-.46.04-.65-.12Z" />
                            </g>
                        </svg>
                    </div>
                    <div class="offer-bg">
                        <svg width="485" height="197" viewBox="0 0 485 197" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M416.71 0C403.222 86.8524 315.644 147.17 221.225 134.771C167.922 127.763 121.201 98.3528 94.8757 55.1662C84.4498 38.0952 77.5427 19.407 74.48 0H0C16.6163 123.091 138.665 210.542 272.572 195.268C383.673 182.63 471.251 102.126 485 0H416.71Z" fill="white" fill-opacity="0.2"></path>
                        </svg>
                    </div>
                    <h2>
                        <?php echo get_the_title(); ?>
                    </h2>
                    <div class="offer-price">
                        <p class="price"><?php echo get_field('price'); ?></p>
                        <div>
                            <span>,<?php echo get_field('price_2'); ?></span>
                            <span class="price-currency">zł/mies.</span>
                        </div>
                    </div>
                    <?php if (!empty(get_field('features_header'))) { ?>
                        <div class="offer-features">
                            <?php foreach (get_field('features_header') as $feature) { ?>
                                <div class="single-feature">
                                    <?php echo wp_get_attachment_image($feature['icon']['ID'], 'full', 0, ['class' => '']); ?>
                                    <?php echo $feature['text']; ?>
                                </div>
                            <?php }; ?>
                        </div>
                    <?php }; ?>
                    <?php if (!empty(get_field('gb'))) { ?>
                        <div class="offer-gb">
                            <?php foreach (get_field('gb') as $key => $gb) { ?>
                                <?php if ($key == 1) { ?>
                                    <div class="gb-separator">+</div>
                                <?php }; ?>
                                <div class="single-gb">
                                    <p class="gb-title">
                                        <span><?php echo $gb['title']; ?></span>
                                        <?php echo $gb['subtitle']; ?>
                                    </p>
                                    <p>
                                        <?php echo $gb['tekst']; ?>
                                    </p>
                                </div>
                            <?php }; ?>
                        </div>
                    <?php }; ?>
                    <?php if (!empty(get_field('buttons'))) { ?>
                        <div class="offer-buttons">
                            <?php foreach (get_field('buttons') as $button) { ?>
                                <?php if (!empty($button['button'])) { ?>
                                    <a href="<?php echo $button['button']['url'] ? $button['button']['url'] : '#'; ?>" title="<?php echo $button['button']['title'] ? $button['button']['title'] : ''; ?>" target="<?php echo $button['button']['target'] ? $button['button']['target'] : '_self'; ?>">
                                        <?php echo $button['button']['title'] ? $button['button']['title'] : ''; ?>
                                    </a>
                                <?php }; ?>
                            <?php }; ?>
                        </div>
                    <?php }; ?>
                </div>
        </div>
    </div>
</section>

<?php setup_postdata(407); ?>
<?php the_content(); ?>

<?php get_footer(); ?>
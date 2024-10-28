<?php
$className = 'offer-boxes';
require dirname(__FILE__, 2) . '/defaults.php';
$mySectionID = 'section_' .  rand(100, 1000) * rand(10, 20);
?>

<section id="<?php echo $mySectionID; ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="offer-boxes-wrapper">

            <div class="tab-title-wrapper">
                <?php if (!empty(get_field('title'))) { ?>
                    <div class="tab-title">
                        <h3>
                            <?php echo get_field('title'); ?>
                        </h3>
                    </div>
                <?php }; ?>
                <?php if (!empty(get_field('tab'))) { ?>
                    <div class="tab-nav">
                        <?php foreach (get_field('tab') as $key => $tab) { ?>
                            <?php if (!empty($tab['title'])) { ?>
                                <a href="#" class="btn btn-primary <?php if ($key == 0) echo 'active'; ?>" data-tab="OfferSwiper_<?php echo $key; ?>">
                                    <?php echo $tab['title']; ?>
                                </a>
                            <?php }; ?>
                        <?php }; ?>
                    </div>
                <?php }; ?>
            </div>
            <?php if (!empty(get_field('tab'))) { ?>
                <div class="tab-wrapper">
                    <?php foreach (get_field('tab') as $key => $tab) { ?>
                        <div id="OfferSwiper_<?php echo $key; ?>" class="swiper OfferSwiper <?php if ($key == 0) echo 'active'; ?>">
                            <div class="swiper-wrapper">
                                <?php foreach ($tab['offer'] as $single) { ?>
                                    <div class="swiper-slide">
                                        <div class="offer-single offer-color-<?php echo get_field('color', $single->ID); ?>">
                                            <div class="custom-icon">
                                                <svg width="45" height="33" viewBox="0 0 45 33" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.5 32.75">

                                                    <g>
                                                        <path fill="#0550bb" d="M32.54,10.83l.06.27h4.37l-.04-.39c-.08-.72-.29-1.39-.64-2-.35-.6-.8-1.13-1.37-1.57-.56-.44-1.2-.78-1.93-1.02-.73-.24-1.5-.36-2.34-.36-.95,0-1.84.16-2.68.48-.84.32-1.58.8-2.22,1.43-.64.63-1.14,1.4-1.5,2.3-.36.91-.53,1.94-.53,3.09,0,1.47.29,2.75.88,3.84.59,1.09,1.4,1.93,2.45,2.52h0c1.05.59,2.26.88,3.63.88,1.22,0,2.32-.24,3.29-.73.97-.49,1.73-1.2,2.29-2.13.56-.94.83-2.06.83-3.33v-2.22h-6.67v3.31h2.4c-.04.17-.1.32-.18.45-.14.23-.36.41-.68.55-.32.14-.73.22-1.25.22-.57,0-1.03-.14-1.38-.38-.36-.25-.64-.62-.84-1.12h0c-.2-.51-.3-1.15-.3-1.9s.11-1.36.32-1.87c.2-.5.49-.86.86-1.11.36-.25.81-.38,1.37-.38.26,0,.49.03.7.08.21.06.38.14.53.24.15.1.27.22.36.36.1.14.17.3.22.5Z" />
                                                        <g>
                                                            <polygon fill="#0550bb" points="19.66 19.52 19.66 19.52 19.65 19.52 19.66 19.52" />
                                                            <path fill="#0550bb" d="M24.83,17.9c-.19-.26-.37-.54-.52-.83-.61-1.13-.92-2.48-.92-4.01,0-1.2.19-2.28.56-3.22.28-.71.65-1.34,1.09-1.89-.21-.17-.43-.32-.66-.46-.88-.52-1.88-.78-3-.78-.95,0-1.79.19-2.51.57-.72.38-1.23.85-1.52,1.42h-.11l.37-4.15h8.44V.48h-12.62l-.73,10.35,4.48.88c.21-.46.55-.82,1-1.08.45-.26.97-.39,1.49-.39s.98.11,1.38.34c.4.22.71.54.93.95.22.4.34.88.33,1.43,0,.55-.11,1.02-.33,1.43-.22.41-.54.73-.93.95-.4.22-.86.34-1.38.34-.67,0-1.25-.19-1.74-.58-.49-.39-.74-.9-.76-1.55h-4.95c.02,1.17.34,2.2.98,3.1.64.9,1.52,1.61,2.63,2.12,1.12.51,2.39.77,3.84.77,1.53,0,2.86-.29,3.99-.86.43-.22.82-.48,1.18-.76Z" />
                                                        </g>
                                                    </g>
                                                    <path fill="#e72376" d="M38.42,18.85c-5.36,7.8-16.05,9.78-23.85,4.42-4.41-3.03-7.15-7.93-7.42-13.27-.11-2.11.17-4.22.83-6.24L1.37.48c-4.43,12.64,2.23,26.48,14.87,30.91,10.49,3.68,22.14-.25,28.26-9.52l-6.07-3.01Z" />
                                                    <g>
                                                        <path fill="#0fa2ec" ; d="M41.97,7.78s-.03,0-.04,0c-.47.24-.92-.02-.93-.55-.01-.79-.14-1.56-.47-2.27-1.07-2.35-2.91-3.61-5.49-3.74-.23-.01-.44-.05-.58-.25-.15-.2-.17-.43-.06-.64.12-.23.31-.34.57-.34,1.09,0,2.13.25,3.12.72.87.42,1.63.99,2.27,1.71,1.21,1.37,1.84,2.98,1.86,4.81,0,.13-.07.27-.1.4l-.14.14h0Z" />
                                                        <path fill="#0fa2ec" ; d="M39.73,7.69c-.18.18-.4.24-.64.15-.25-.09-.39-.29-.4-.55-.01-.41-.07-.81-.2-1.2-.5-1.49-1.86-2.5-3.44-2.55-.25,0-.47-.06-.61-.29-.12-.21-.13-.41-.02-.62.12-.2.3-.31.54-.31.93,0,1.8.24,2.58.73,1.28.81,2.07,1.97,2.31,3.47.04.24.04.49.06.74.01.17-.05.31-.17.44h0Z" />
                                                        <path fill="#0fa2ec" ; d="M36.56,7.7c-.12-.13-.18-.27-.18-.43-.04-.82-.6-1.38-1.43-1.43-.35-.02-.6-.28-.6-.62s.27-.6.62-.6c1.41-.03,2.65,1.22,2.63,2.63,0,.27-.15.49-.39.58-.25.1-.46.04-.65-.12Z" />
                                                    </g>
                                                </svg>

                                            </div>
                                            <div class="offer-bg">
                                                <svg width="343" height="131" viewBox="0 0 343 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.2" d="M294.704 0C285.165 57.7546 223.229 97.8642 156.454 89.6192C118.757 84.959 85.7154 65.4021 67.0977 36.6841C59.7243 25.3324 54.8394 12.9052 52.6735 0H0C11.7513 81.8522 98.0658 140.005 192.768 129.848C271.34 121.444 333.276 67.9115 343 0H294.704Z"></path>
                                                </svg>
                                            </div>
                                            <div class="offer-title">
                                                <?php
                                                $title = get_field('title-offer', $single->ID);
                                                ?>
                                                <?php if (!empty($title)) :
                                                    $one = get_field('title-offer', $single->ID)['title_one'];
                                                    $two = get_field('title-offer', $single->ID)['title_two'];
                                                ?>
                                                    <h3>
                                                        <?php echo $one; ?><span><?php echo $two; ?></span>
                                                    </h3>
                                                <?php else : ?>
                                                    <h3>
                                                        <?php echo get_the_title($single->ID); ?>
                                                    </h3>
                                                <?php endif; ?>
                                            </div>
                                            <div class="offer-price">
                                                <p class="price"><?php echo get_field('price', $single->ID); ?></p>
                                                <div>
                                                    <span>,<?php echo get_field('price_2', $single->ID); ?></span>
                                                    <span class="price-currency">zł/mies.</span>
                                                </div>
                                            </div>
                                            <?php if (!empty(get_field('gb', $single->ID))) { ?>
                                                <div class="offer-gb">
                                                    <?php foreach (get_field('gb', $single->ID) as $key => $gb) { ?>
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
                                            <?php if (!empty(get_field('features', $single->ID))) { ?>
                                                <div class="offer-features">
                                                    <?php foreach (get_field('features', $single->ID) as $feature) { ?>
                                                        <div class="single-feature">
                                                            <?php echo wp_get_attachment_image($feature['icon'], 'full', 0, ['class' => '']); ?>
                                                            <?php echo $feature['text']; ?>
                                                        </div>
                                                    <?php }; ?>
                                                </div>
                                            <?php }; ?>
                                            <?php if (!empty(get_field('buttons', $single->ID))) { ?>
                                                <div class="offer-buttons">
                                                    <?php foreach (get_field('buttons', $single->ID) as $button) { ?>
                                                        <?php if (!empty($button['button'])) { ?>
                                                            <a href="<?php echo $button['button']['url'] ? $button['button']['url'] : '#'; ?>" title="<?php echo $button['button']['title'] ? $button['button']['title'] : ''; ?>" target="<?php echo $button['button']['target'] ? $button['button']['target'] : '_self'; ?>">
                                                                <?php echo $button['button']['title'] ? $button['button']['title'] : ''; ?>
                                                            </a>
                                                        <?php }; ?>
                                                    <?php }; ?>
                                                </div>
                                            <?php }; ?>
                                            <?php if (!empty(get_field('show_permalink', $single->ID))) { ?>
                                                <a href="<?php echo get_permalink($single->ID); ?>" class="offer-link">Szczegóły oferty</a>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                <?php }; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev OfferSwiperLeft">
                            <svg width="23" height="15" viewBox="0 0 23 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.557571 4.33441C0.372882 3.81392 0.645101 3.24226 1.16559 3.05757L9.64744 0.0478837C10.1679 -0.136806 10.7396 0.135413 10.9243 0.655901C11.109 1.17639 10.8367 1.74805 10.3163 1.93274L2.77684 4.60802L5.45212 12.1474C5.63681 12.6679 5.36459 13.2396 4.8441 13.4243C4.32361 13.609 3.75195 13.3367 3.56726 12.8163L0.557571 4.33441ZM22.0701 14.9029L1.07007 4.90286L1.92993 3.09714L22.9299 13.0971L22.0701 14.9029Z" fill="#5C5559"></path>
                            </svg>
                        </div>
                        <div class="swiper-button-next OfferSwiperRight">
                            <svg width="23" height="15" viewBox="0 0 23 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.4424 4.33441C22.6271 3.81392 22.3549 3.24226 21.8344 3.05757L13.3526 0.0478837C12.8321 -0.136806 12.2604 0.135413 12.0757 0.655901C11.891 1.17639 12.1633 1.74805 12.6837 1.93274L20.2232 4.60802L17.5479 12.1474C17.3632 12.6679 17.6354 13.2396 18.1559 13.4243C18.6764 13.609 19.2481 13.3367 19.4327 12.8163L22.4424 4.33441ZM0.929934 14.9029L21.9299 4.90286L21.0701 3.09714L0.0700664 13.0971L0.929934 14.9029Z" fill="#5C5559"></path>
                            </svg>
                        </div>


                    <?php }; ?>

                </div>
            <?php }; ?>
        </div>
    </div>
</section>

<?php if (!empty(get_field('tab'))) { ?>
    <?php foreach (get_field('tab') as $key => $tab) { ?>
        <script>
            const OfferSwiper_<?php echo $key; ?> = new Swiper('#OfferSwiper_<?php echo $key; ?>', {
                // Optional parameters
                loop: true,
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: "#<?php echo $mySectionID; ?> .swiper-pagination",
                    clickable: true,
                },

                breakpoints: {
                    479: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        pagination: true

                    },

                    768: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                        navigation: {
                            nextEl: '#<?php echo $mySectionID; ?> .swiper-button-next.OfferSwiperRight',
                            prevEl: '#<?php echo $mySectionID; ?> .swiper-button-prev.OfferSwiperLeft',
                        },
                        pagination: false
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                        navigation: {
                            nextEl: '#<?php echo $mySectionID; ?> .swiper-button-next.OfferSwiperRight',
                            prevEl: '#<?php echo $mySectionID; ?> .swiper-button-prev.OfferSwiperLeft',
                        },
                        pagination: false
                    },
                    1190: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                        // Navigation arrows
                        navigation: {
                            nextEl: '#<?php echo $mySectionID; ?> .swiper-button-next.OfferSwiperRight',
                            prevEl: '#<?php echo $mySectionID; ?> .swiper-button-prev.OfferSwiperLeft',
                        },
                        pagination: false
                    },
                    1440: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                        // Navigation arrows
                        navigation: {
                            nextEl: '#<?php echo $mySectionID; ?> .swiper-button-next.OfferSwiperRight',
                            prevEl: '#<?php echo $mySectionID; ?> .swiper-button-prev.OfferSwiperLeft',
                        },
                        pagination: false
                    }
                },

            });
        </script>
    <?php }; ?>
<?php }; ?>
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
                                                <svg width="45" height="33" viewBox="0 0 45 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path d="M19.6605 19.5213C18.2161 19.5213 16.9396 19.2638 15.8199 18.7543C14.7058 18.2448 13.8269 17.5394 13.1886 16.638C12.5504 15.7367 12.2257 14.7065 12.2089 13.5365H17.1636C17.1804 14.1859 17.4323 14.701 17.9194 15.0872C18.4065 15.4735 18.9831 15.6639 19.6549 15.6639C20.1756 15.6639 20.6347 15.5519 21.0322 15.328C21.4297 15.104 21.7432 14.7905 21.9671 14.3762C22.1911 13.9619 22.303 13.4917 22.2974 12.943C22.303 12.3944 22.1911 11.9129 21.9671 11.5098C21.7432 11.1011 21.4297 10.7876 21.0322 10.5636C20.6347 10.3397 20.1756 10.2277 19.6549 10.2277C19.1343 10.2277 18.6192 10.3565 18.1657 10.6196C17.7122 10.8828 17.3763 11.2411 17.1636 11.7001L12.6848 10.8212L13.4182 0.475098H26.0428V4.55082H17.6003L17.2308 8.69933H17.3427C17.6339 8.12828 18.1433 7.65801 18.8655 7.2829C19.5877 6.9078 20.4275 6.71745 21.3793 6.71745C22.499 6.71745 23.4955 6.97499 24.3745 7.49565C25.2535 8.01631 25.9477 8.73292 26.4571 9.64548C26.9666 10.558 27.2185 11.6162 27.2129 12.8086C27.2185 14.1187 26.9106 15.2776 26.2836 16.2909C25.6566 17.3043 24.7776 18.0937 23.6467 18.6647C22.5158 19.2358 21.1833 19.5213 19.6549 19.5213H19.6605Z"
                                                            fill="#0550BB"></path>
                                                        <path d="M32.5443 10.8296L32.6084 11.0988H32.885H32.8906H36.5913H36.9812L36.9395 10.7111C36.8619 9.98858 36.652 9.31999 36.3016 8.70974C35.9542 8.1048 35.4986 7.57755 34.931 7.13542C34.3671 6.69617 33.7266 6.3525 33.0002 6.11611C32.2722 5.8736 31.4957 5.75703 30.6624 5.75703C29.7142 5.75703 28.821 5.92108 27.985 6.23898C27.1437 6.55889 26.403 7.03914 25.7647 7.66564C25.1215 8.29692 24.6255 9.06736 24.268 9.97006C23.9071 10.8811 23.7339 11.9117 23.7339 13.0607C23.7339 14.5287 24.023 15.814 24.6097 16.9045C25.1948 17.9978 26.0144 18.8359 27.0638 19.4288L27.0652 19.4296C28.1156 20.0171 29.3294 20.3083 30.6904 20.3083C31.9125 20.3083 33.0096 20.0695 33.9786 19.5762C34.9442 19.0873 35.7103 18.3752 36.2651 17.4445C36.8245 16.5061 37.0927 15.3886 37.0927 14.1132V12.2433V11.893H36.7424H30.7688H30.4185V12.2433V14.8522V15.2025H30.7688H32.8229C32.7861 15.3714 32.7257 15.5207 32.6437 15.6524C32.5025 15.8792 32.2827 16.0661 31.9669 16.2051C31.6472 16.3433 31.2385 16.4222 30.7128 16.4222C30.1428 16.4222 29.6845 16.2854 29.3288 16.0373C28.9687 15.7861 28.6841 15.4157 28.4929 14.9125L28.4929 14.9125L28.4918 14.9097C28.2939 14.402 28.1911 13.7595 28.1911 13.0103C28.1911 12.2663 28.3036 11.6465 28.5071 11.1428C28.708 10.6454 28.9975 10.2831 29.3662 10.0293C29.7285 9.77993 30.1765 9.64873 30.7352 9.64873C30.9916 9.64873 31.2243 9.6787 31.4341 9.73204C31.6397 9.78978 31.8116 9.86969 31.9629 9.97061C32.1096 10.0684 32.2291 10.1876 32.3277 10.3311C32.4251 10.4728 32.4978 10.6342 32.5443 10.8296Z"
                                                            fill="#0550BB" stroke="white" stroke-width="0.700548"></path>
                                                        <path d="M38.4211 18.8495C33.0578 26.6538 22.3758 28.6301 14.5714 23.2667C10.1654 20.2379 7.4221 15.3336 7.15338 9.99259C7.047 7.88195 7.32693 5.7713 7.98756 3.75583L1.3701 0.475098C-3.05834 13.1166 3.60391 26.9561 16.2398 31.3846C26.7258 35.0628 38.3764 31.1326 44.4955 21.8615L38.4211 18.8495Z"
                                                            fill="#E72376"></path>
                                                        <g>
                                                            <g>
                                                                <path d="M41.967 7.78195C41.967 7.78195 41.939 7.78195 41.9278 7.78755C41.4575 8.02829 41.004 7.76515 40.9928 7.23329C40.9816 6.4439 40.8529 5.6769 40.5226 4.96589C39.4476 2.62011 37.6169 1.36044 35.0304 1.22608C34.8009 1.21488 34.5937 1.17569 34.4538 0.979742C34.3082 0.778195 34.2858 0.554254 34.3978 0.335912C34.5153 0.106372 34.7113 0 34.9688 0C36.0605 0.00559853 37.1019 0.246335 38.0872 0.72221C38.955 1.1421 39.7164 1.71315 40.3546 2.42976C41.5695 3.8014 42.1909 5.40818 42.2133 7.23889C42.2133 7.37326 42.1461 7.50762 42.1125 7.64199L41.9726 7.78195H41.967Z"
                                                                    fill="#0FA2EC"></path>
                                                                <path d="M39.7276 7.69232C39.5429 7.87147 39.3245 7.92746 39.0894 7.83788C38.8374 7.7483 38.6975 7.55235 38.6919 7.28922C38.6807 6.88053 38.6247 6.47744 38.4959 6.08554C37.9921 4.59633 36.6316 3.5886 35.0528 3.53821C34.8009 3.53261 34.5826 3.47663 34.4426 3.24709C34.3194 3.03994 34.3082 2.8328 34.4258 2.62565C34.5434 2.4241 34.7225 2.31213 34.9633 2.31213C35.8926 2.31213 36.7604 2.54727 37.5442 3.04554C38.8262 3.85733 39.61 5.01062 39.8508 6.51663C39.89 6.75736 39.8956 7.0093 39.9068 7.25563C39.918 7.42359 39.8564 7.56915 39.7332 7.69232H39.7276Z"
                                                                    fill="#0FA2EC"></path>
                                                                <path d="M36.5588 7.69794C36.4412 7.56917 36.3796 7.42921 36.374 7.26685C36.3293 6.44947 35.775 5.88961 34.9464 5.83923C34.5937 5.81683 34.3474 5.5593 34.3474 5.22339C34.3474 4.88188 34.6161 4.62435 34.9688 4.61875C36.374 4.59076 37.6225 5.83923 37.5945 7.24446C37.5889 7.51319 37.449 7.73153 37.2082 7.8211C36.9619 7.91628 36.7436 7.86029 36.5588 7.69794Z"
                                                                    fill="#0FA2EC"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="offer-bg">
                                                <svg width="343" height="131" viewBox="0 0 343 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.2" d="M294.704 0C285.165 57.7546 223.229 97.8642 156.454 89.6192C118.757 84.959 85.7154 65.4021 67.0977 36.6841C59.7243 25.3324 54.8394 12.9052 52.6735 0H0C11.7513 81.8522 98.0658 140.005 192.768 129.848C271.34 121.444 333.276 67.9115 343 0H294.704Z"></path>
                                                </svg>
                                            </div>
                                            <div class="offer-title">
                                                <h3>
                                                    <?php echo get_the_title($single->ID); ?>
                                                </h3>
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

                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1440: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    }
                },
                // Navigation arrows
                navigation: {
                    nextEl: '#<?php echo $mySectionID; ?> .swiper-button-next.OfferSwiperRight',
                    prevEl: '#<?php echo $mySectionID; ?> .swiper-button-prev.OfferSwiperLeft',
                },
            });
        </script>
    <?php }; ?>
<?php }; ?>
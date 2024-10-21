<?php
$className = 'faq';
require dirname(__FILE__, 2) . '/defaults.php';
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="faq-wrapper">
            <div class="faq-sidebar">
                <h4>Tematy zapytań</h4>
                <?php if (!empty(get_field('category'))) { ?>
                    <div class="faq-categories">
                        <?php foreach (get_field('category') as $key => $category) { ?>
                            <h5 data-scroll="cat_<?php echo $key; ?>">
                                <?php echo $category['title']; ?>
                            </h5>
                        <?php }; ?>
                    </div>
                <?php }; ?>
                <div class="contact-block-inner">
                    <h5>Dział obsługi klienta</h5>
                    <div class="contact-links">
                        <svg width="68" height="63" viewBox="0 0 68 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_259_3388)">
                                <path
                                    d="M17.9377 0.314697C28.4184 0.314697 38.8976 0.314697 49.3782 0.314697C49.4541 0.36283 49.5241 0.437216 49.6073 0.456178C51.1039 0.806232 52.0462 1.72804 52.3029 3.24057C52.4356 4.0209 52.4298 4.83477 52.4021 5.63115C52.3831 6.17373 52.5757 6.43773 53.0527 6.67839C57.118 8.72621 61.1717 10.7974 65.2225 12.8729C67.3361 13.9551 67.8423 15.5683 66.7599 17.6963C62.0892 26.8823 57.4141 36.0654 52.7595 45.2587C52.5509 45.6701 52.4357 46.1762 52.4313 46.6385C52.3992 50.6481 52.4079 54.6562 52.3919 58.6658C52.3846 60.4015 51.4919 61.6894 49.9836 62.1882C49.6889 62.286 49.3855 62.3618 49.0865 62.4479H18.228C18.1638 62.4143 18.104 62.3647 18.0369 62.3501C15.8737 61.8601 14.9256 60.6742 14.9197 58.447C14.911 54.5352 14.9153 50.6219 14.8774 46.71C14.873 46.201 14.7447 45.6467 14.5157 45.1946C9.8537 35.9794 5.16549 26.7759 0.487482 17.568C-0.505883 15.6121 0.0382066 13.9347 1.97096 12.9487C5.5958 11.0993 9.17979 9.16378 12.8615 7.43684C14.415 6.70902 15.299 5.87472 14.8978 4.09382C14.8716 3.9786 14.8876 3.85024 14.8978 3.73064C15.0335 2.34647 15.6782 1.3036 16.9502 0.695381C17.2667 0.543691 17.6066 0.440133 17.9363 0.314697L17.9377 0.314697ZM17.0888 51.4649H50.2257V9.46861H17.0888V51.4649ZM17.0523 53.7111C17.0523 55.2834 17.0523 56.7857 17.0523 58.288C17.0523 59.8735 17.4447 60.2673 19.0259 60.2673C28.7758 60.2673 38.5256 60.2673 48.2755 60.2673C48.5176 60.2673 48.7641 60.2848 49.0019 60.2513C49.6744 60.1579 50.2024 59.7787 50.2257 59.1034C50.2855 57.3166 50.2462 55.527 50.2462 53.7125H17.0523V53.7111ZM17.0611 7.26181H50.2564C50.2564 6.31375 50.2564 5.41674 50.2564 4.52118C50.2564 2.90364 49.8625 2.51275 48.2361 2.51275C38.514 2.51275 28.7933 2.51275 19.0711 2.51275C18.8042 2.51275 18.5329 2.4967 18.2732 2.54192C17.5716 2.66298 17.1077 3.09471 17.0757 3.80211C17.0217 4.93687 17.0611 6.07746 17.0611 7.26036V7.26181ZM62.9178 20.5843C59.398 18.7888 55.9613 17.0342 52.4677 15.2518V40.8904L52.5786 40.921C56.0124 34.1679 59.4446 27.4162 62.9178 20.5858V20.5843ZM4.39968 20.5872C7.86989 27.4118 11.3066 34.1693 14.7432 40.9268C14.7753 40.9079 14.8089 40.8904 14.8409 40.8714V15.2606C11.3197 17.0575 7.88156 18.8107 4.39968 20.5887V20.5872ZM52.4181 8.73058C52.4181 10.0739 52.405 11.3079 52.4342 12.5389C52.4386 12.7022 52.6165 12.9298 52.7741 13.0115C56.4543 14.9061 60.1419 16.7833 63.8688 18.6852C64.1824 18.0799 64.4844 17.5038 64.779 16.9262C65.469 15.5741 65.3873 15.3306 64.0103 14.629C60.8173 13.0027 57.6227 11.3764 54.4297 9.75157C53.7893 9.42486 53.1475 9.10106 52.4181 8.73058ZM14.8935 8.73933C13.5544 9.41902 12.3101 10.0477 11.0673 10.6807C8.3498 12.0648 5.63227 13.449 2.91765 14.839C2.14017 15.2372 1.92866 15.6339 2.2204 16.2699C2.59091 17.0823 3.02268 17.8655 3.44424 18.6955C7.17118 16.792 10.8587 14.9134 14.5375 13.0187C14.6951 12.9371 14.8745 12.7095 14.8789 12.5447C14.908 11.3151 14.8949 10.0827 14.8949 8.73933H14.8935Z"
                                    fill="#E72176"></path>
                                <path
                                    d="M33.6416 55.8946C34.8523 55.8946 36.063 55.8873 37.2737 55.8975C38.0118 55.9034 38.4363 56.2636 38.4713 56.8791C38.5078 57.5355 38.092 58.0066 37.3394 58.0139C34.8946 58.0387 32.4484 58.0372 30.0036 58.0168C29.2407 58.0095 28.8221 57.5632 28.8425 56.9083C28.8629 56.2593 29.2918 55.9019 30.0824 55.8961C31.2683 55.8888 32.4557 55.8946 33.6416 55.8946Z"
                                    fill="#E72176"></path>
                                <g clip-path="url(#clip1_259_3388)">
                                    <path
                                        d="M41.8375 30.8699C41.2375 34.9002 37.3418 37.6992 33.1416 37.1238C30.7706 36.7986 28.6922 35.4339 27.5212 33.4298C27.0574 32.6377 26.7502 31.7704 26.6139 30.8699H23.3008C24.0399 36.5818 29.4691 40.64 35.4258 39.9312C40.3679 39.3447 44.2637 35.609 44.8753 30.8699H41.8375Z"
                                        fill="#E72176"></path>
                                    <path
                                        d="M32.6518 24.805H30.1648V22.7093C29.5503 22.5119 28.9068 22.4119 28.2575 22.4119V24.7967H26.0806C25.8719 25.386 25.7676 26.003 25.7676 26.6256H28.2546V28.7409C28.8691 28.9382 29.5126 29.0383 30.1619 29.0383V26.6562H32.3388C32.5446 26.067 32.6489 25.4499 32.6489 24.8273C32.6489 24.8273 32.6547 24.805 32.6489 24.805H32.6518Z"
                                        fill="#E72176"></path>
                                    <path
                                        d="M42.4489 25.7474C42.5909 27.7375 41.0228 29.4636 38.9444 29.5971C36.869 29.7332 35.069 28.2295 34.9298 26.2366C34.9182 26.0726 34.9182 25.9086 34.9298 25.7446C34.7878 23.7572 36.356 22.0339 38.4343 21.8977C40.5097 21.7615 42.3098 23.2653 42.4489 25.2582C42.4605 25.4222 42.4605 25.5862 42.4489 25.7502V25.7474ZM35.8777 25.7474C35.8284 27.2344 37.0458 28.4797 38.5966 28.5297C40.1474 28.577 41.446 27.4096 41.4981 25.9225C41.4981 25.8641 41.4981 25.8058 41.4981 25.7502C41.5474 24.2631 40.33 23.0179 38.7792 22.9679C37.2284 22.9206 35.9299 24.088 35.8777 25.5751C35.8777 25.6334 35.8777 25.689 35.8777 25.7474Z"
                                        fill="#291B22"></path>
                                    <g clip-path="url(#clip2_259_3388)">
                                        <path
                                            d="M56.9132 30.7866C55.1268 43.2998 43.5284 51.9901 31.0238 50.2037C23.9646 49.194 17.777 44.9568 14.2906 38.7347C12.9098 36.2752 11.9951 33.5827 11.5895 30.7866H1.72559C3.92619 48.5209 20.0898 61.1204 37.8241 58.9198C52.5379 57.0989 64.1364 45.5004 65.9572 30.7866H56.9132Z"
                                            fill="#E72176"></path>
                                        <path
                                            d="M29.5651 11.9564H22.1608V5.44951C20.3312 4.8368 18.4154 4.52612 16.4823 4.52612V11.9305H10.0014C9.38001 13.76 9.06934 15.6758 9.06934 17.6089H16.4737V24.1762C18.3032 24.7889 20.219 25.0996 22.1521 25.0996V17.7038H28.6331C29.2458 15.8743 29.5565 13.9585 29.5565 12.0254C29.5565 12.0254 29.5738 11.9564 29.5565 11.9564H29.5651Z"
                                            fill="#E72176"></path>
                                    </g>
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_259_3388">
                                    <rect width="67.3125" height="62.1346" fill="white" transform="translate(0 0.314697)"></rect>
                                </clipPath>
                                <clipPath id="clip1_259_3388">
                                    <rect width="21.5745" height="18.1226" fill="white" transform="translate(23.3008 21.8894)"></rect>
                                </clipPath>
                                <clipPath id="clip2_259_3388">
                                    <rect width="64.2317" height="56.2663" fill="white" transform="translate(1.72559 2.90381)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <div>
                            <a href="mailto:<?php echo get_field('email'); ?>">
                                <?php echo get_field('email'); ?>
                            </a>
                            <a href="tel:<?php echo preg_replace('/\s+/', '', get_field('phone')); ?>">
                                <?php echo get_field('phone'); ?>
                            </a>
                        </div>
                    </div>
                    <a href="<?php echo get_field('messenger_link'); ?>" class="contact-mess">
                        <?php echo wp_get_attachment_image(get_field('messenger_icon')['ID'], 'thumbnail', 0, ['class' => '']); ?>
                        <p>
                            <?php echo get_field('messenger_text'); ?>
                        </p>
                    </a>
                </div>
                <?php if (!empty(get_field('menu'))) { ?>
                    <div class="faq-menu">
                        <ul>
                            <?php foreach (get_field('menu') as $single) { ?>
                                <li>
                                    <a class="btn btn-primary" href="<?php echo $single['link']['url'] ? $single['link']['url'] : '#'; ?>" title="<?php echo $single['link']['title'] ? $single['link']['title'] : ''; ?>" target="<?php echo $single['link']['target'] ? $single['link']['target'] : '_self'; ?>">
                                        <?php echo $single['link']['title'] ? $single['link']['title'] : ''; ?>
                                    </a>
                                </li>
                            <?php }; ?>
                        </ul>
                    </div>
                <?php }; ?>
            </div>
            <?php if (!empty(get_field('category'))) { ?>
                <div class="faq-main">
                    <?php foreach (get_field('category') as $key => $category) { ?>
                        <div class="download-category" data-category="cat_<?php echo $key; ?>">
                            <div class="faq-cat-title">
                                <h3>
                                    <?php echo $category['title']; ?>
                                </h3>
                                <span>
                                    <svg class="fa-horizontal" width="34" height="1" viewBox="0 0 34 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33.4345 0.5H0.0625" stroke="#5C5559"></path>
                                    </svg>
                                    <svg class="fa-vertical" width="2" height="37" viewBox="0 0 2 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.748045 36.5L0.748047 0.5" stroke="#5C5559"></path>
                                    </svg>
                                </span>
                            </div>

                            <?php if (!empty($category['faq'])) { ?>
                                <div class="faq-questions-wrapper">
                                    <?php foreach ($category['faq'] as $single) { ?>
                                        <div class="faq-single">
                                            <h4>
                                                <?php echo $single['question']; ?>
                                                <span>
                                                    <svg class="fa-horizontal" width="34" height="1" viewBox="0 0 34 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M33.4345 0.5H0.0625" stroke="#5C5559"></path>
                                                    </svg>
                                                    <svg class="fa-vertical" width="2" height="37" viewBox="0 0 2 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.748045 36.5L0.748047 0.5" stroke="#5C5559"></path>
                                                    </svg>
                                                </span>
                                            </h4>
                                            <div class="faq-answer" style="display:none;">
                                                <?php echo $single['answer']; ?>
                                            </div>
                                        </div>
                                    <?php }; ?>
                                </div>
                            <?php }; ?>
                        </div>
                    <?php }; ?>
                </div>
            <?php }; ?>
        </div>
    </div>
</section>
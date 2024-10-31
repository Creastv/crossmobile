<?php
$className = 'downloads';
require dirname(__FILE__, 2) . '/defaults.php';
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="downloads-wrapper">
            <div class="downloads-sidebar">
                <!-- <h4>Dokumenty</h4>
                <?php if (!empty(get_field('category'))) { ?>
                    <div class="downloads-categories">
                        <?php foreach (get_field('category') as $key => $category) { ?>
                            <h5 data-scroll="cat_<?php echo $key; ?>">
                                <?php echo $category['title']; ?>
                            </h5>
                        <?php }; ?>
                    </div>
                <?php }; ?> -->
                <div class="contact-block-inner">
                    <div>
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
                    </div>
                    <?php if (get_field('messenger_text')) { ?>
                        <div class="contact-mess__wrap">
                            <a href="<?php echo get_field('messenger_link'); ?>" class="contact-mess">
                                <?php if (!get_field('messenger_icon')) { ?>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_784_4617)">
                                            <path d="M-0.00195312 19.4956C0.0176826 19.4678 0.0399718 19.4421 0.0564234 19.4127C0.228369 19.1072 0.494778 18.9772 0.804173 19.0495C1.11675 19.1228 1.30462 19.3533 1.30886 19.7101C1.31683 20.4131 1.31099 21.1155 1.31205 21.8184C1.31364 22.9841 1.99346 23.6817 3.14879 23.6876C4.47234 23.6946 5.79643 23.6892 7.11998 23.6892C10.8704 23.6892 14.6214 23.6919 18.3718 23.6844C18.6589 23.6839 18.9603 23.6593 19.2294 23.5694C19.9198 23.3383 20.3354 22.6936 20.3359 21.9179C20.338 19.0356 20.3364 16.1537 20.337 13.2713C20.337 13.1734 20.3316 13.0744 20.3438 12.9781C20.3847 12.6507 20.6617 12.4073 20.978 12.4127C21.2869 12.418 21.548 12.6529 21.5936 12.9696C21.6037 13.0397 21.6016 13.1113 21.6016 13.1825C21.6016 16.0916 21.6053 19.0002 21.6005 21.9094C21.5979 23.3725 20.6925 24.5671 19.3207 24.9025C19.0081 24.979 18.6748 24.9951 18.3506 24.9956C13.3201 25.001 8.29016 24.9993 3.2597 24.9993C1.49461 24.9993 0.41995 24.1306 0.0346649 22.3951C0.0293579 22.37 0.0107836 22.3481 -0.00195312 22.3245C-0.00195312 21.3814 -0.00195312 20.4382 -0.00195312 19.4951L-0.00195312 19.4956Z" fill="white" />
                                            <path d="M-0.00195312 5.93641C0.123291 5.41803 0.273478 4.91141 0.607816 4.48023C1.19795 3.72058 1.97011 3.28672 2.9243 3.28084C5.8877 3.26265 8.85111 3.27175 11.8145 3.27442C12.2104 3.27442 12.4896 3.54672 12.4906 3.90782C12.4917 4.28711 12.2035 4.54603 11.7662 4.54657C8.84686 4.54817 5.92751 4.54603 3.00868 4.54817C2.12773 4.54871 1.44472 5.12005 1.29029 5.97921C1.26853 6.10064 1.26747 6.22689 1.26694 6.35101C1.26535 7.24012 1.26641 8.12923 1.26588 9.01834C1.26588 9.47146 1.1141 9.72343 0.791967 9.8117C0.479918 9.89622 0.222 9.7475 -0.00195312 9.35323V5.93694V5.93641Z" fill="white" />
                                            <path d="M-0.00195312 13.6769C0.147172 13.3826 0.349898 13.1649 0.712894 13.2056C1.02017 13.2403 1.25686 13.4934 1.2611 13.8229C1.27119 14.6291 1.27012 15.4358 1.26163 16.2426C1.25845 16.5545 1.05731 16.7834 0.768617 16.854C0.503269 16.9188 0.232614 16.7931 0.0781819 16.532C0.0516471 16.4876 0.0251123 16.4437 -0.00142243 16.3993C-0.00142243 15.492 -0.00142243 14.5842 -0.00142243 13.6769H-0.00195312Z" fill="white" />
                                            <path d="M9.35555 13.9834C9.3805 13.8352 9.39005 13.6822 9.43197 13.5388C9.66336 12.7465 9.87351 11.9457 10.1521 11.1705C10.2832 10.8057 10.4971 10.436 10.7667 10.1621C13.919 6.96088 17.0867 3.77463 20.256 0.590516C21.0436 -0.200697 22.1315 -0.192673 22.9238 0.591586C23.4153 1.07787 23.9024 1.5679 24.3838 2.06381C25.209 2.91334 25.2 3.98594 24.3657 4.82851C21.2617 7.96555 18.1555 11.1004 15.0552 14.2407C14.6784 14.6221 14.2496 14.8944 13.7364 15.0442C13.0253 15.2518 12.3216 15.4829 11.6094 15.6856C10.4743 16.0088 9.36033 15.1576 9.35449 13.9834H9.35555ZM18.4676 4.1582C18.4395 4.18281 18.3837 4.22454 18.3355 4.27375C16.1187 6.51472 13.8999 8.75355 11.6917 11.0036C11.5256 11.1727 11.3998 11.4081 11.3244 11.6359C11.0931 12.3341 10.8999 13.045 10.6828 13.7485C10.6144 13.9705 10.6149 14.1669 10.7895 14.3381C10.9551 14.5007 11.1419 14.5007 11.3526 14.4354C12.034 14.2236 12.7255 14.0422 13.3984 13.8063C13.6712 13.7111 13.9482 13.5495 14.1525 13.3457C16.0949 11.4064 18.0218 9.45168 19.9546 7.50227C20.2651 7.18931 20.5829 6.88331 20.8823 6.58908C20.0613 5.76203 19.2705 4.96546 18.4681 4.15713L18.4676 4.1582ZM21.7876 5.61063C22.3931 5.00987 23.0008 4.41766 23.5946 3.81208C23.7868 3.61575 23.7862 3.3274 23.5819 3.11127C23.0417 2.53886 22.4919 1.97501 21.9256 1.42881C21.6672 1.17951 21.3801 1.19717 21.1513 1.4256C20.5888 1.98892 20.0316 2.55758 19.4733 3.12518C19.4451 3.15407 19.4292 3.19526 19.4159 3.2172C20.212 4.02071 20.9958 4.81193 21.7871 5.61063H21.7876Z" fill="white" />
                                            <path d="M8.24927 20.3564C9.4306 20.3564 10.6114 20.3585 11.7927 20.3547C12.0512 20.3537 12.2619 20.4259 12.3871 20.6682C12.5973 21.0753 12.3213 21.5392 11.8516 21.5557C11.5258 21.567 11.1994 21.5584 10.873 21.5584C8.82826 21.5584 6.78296 21.5595 4.73819 21.5574C4.24464 21.5574 3.94056 21.1599 4.0987 20.7335C4.1921 20.4815 4.39112 20.358 4.73182 20.3574C5.90413 20.3547 7.07643 20.3564 8.24874 20.3564H8.24927Z" fill="white" />
                                            <path d="M6.13054 18.5687C5.66406 18.5687 5.19705 18.5708 4.73057 18.5681C4.34475 18.5655 4.06083 18.3135 4.04915 17.9706C4.03801 17.6303 4.31556 17.3703 4.71146 17.3682C5.66247 17.3639 6.61294 17.3639 7.56395 17.3682C7.96409 17.3698 8.23687 17.6212 8.23156 17.9647C8.22626 18.3055 7.94021 18.5649 7.55652 18.5676C7.08102 18.5713 6.60551 18.5687 6.13001 18.5687H6.13054Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_784_4617">
                                                <rect width="25" height="25" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                <?php } else { ?>
                                    <?php echo wp_get_attachment_image(get_field('messenger_icon')['ID'], 'thumbnail', 0, ['class' => '']); ?>
                                <?php } ?>
                                <p>
                                    <?php echo get_field('messenger_text'); ?>
                                </p>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <?php if (!empty(get_field('menu'))) { ?>
                    <div class="downloads-menu">
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
                <div class="downloads-main">
                    <?php foreach (get_field('category') as $key => $category) { ?>
                        <div class="download-category" data-category="cat_<?php echo $key; ?>">
                            <div class="download-cat-title">
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
                            <?php if (!empty($category['documents'])) { ?>
                                <div class="file-wrapper">
                                    <?php foreach ($category['documents'] as $single) { ?>
                                        <div class="download-single">
                                            <p>
                                                <?php echo $single['title']; ?>
                                            </p>
                                            <a href="<?php echo $single['file']['url'] ? $single['file']['url'] : '#'; ?>" target="_blank">Pobierz dokument</a>
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
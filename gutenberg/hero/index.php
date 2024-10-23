<?php
$className = 'hero';
require dirname(__FILE__, 2) . '/defaults.php';
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="custom-icon icon-<?php echo get_field('icon_direction'); ?>">
        <?php if (get_field('icon_direction') == 'left') { ?>
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
        <?php } else { ?>
            <svg width="346" height="324" viewBox="0 0 346 324" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_257_2397)">
                    <path
                        d="M268.426 193.885C243.287 242.987 183.114 262.387 134.082 237.267C106.405 223.082 86.9054 196.814 81.3643 166.189C79.1631 154.08 79.2146 141.671 81.513 129.557L40.835 115.557C24.7235 191.863 73.4872 266.798 149.748 282.887C213.013 296.256 277.316 264.855 305.723 206.721L268.426 193.885Z"
                        fill="#E81F76"></path>
                    <path
                        d="M182.387 77.3641L151.852 66.8551L161.093 40.0035C154.418 34.8784 146.959 30.8773 138.987 28.1337L128.471 58.6889L101.744 49.4905C96.583 56.1584 92.5809 63.6234 89.8355 71.6005L120.371 82.1095L111.044 109.21C117.718 114.335 125.178 118.337 133.15 121.08L143.653 90.5605L170.381 99.759C175.506 93.0788 179.508 85.6138 182.253 77.6367C182.253 77.6367 182.422 77.3763 182.351 77.3518L182.387 77.3641Z"
                        fill="#E81F76"></path>
                    <path
                        d="M298.523 130.836C291.491 156.934 264.626 172.423 238.521 165.35C212.439 158.326 196.969 131.453 204.048 105.332C204.629 103.181 205.352 101.08 206.218 99.0282C213.237 72.9653 240.089 57.512 266.207 64.549C292.289 71.5738 307.759 98.4461 300.68 124.568C300.099 126.718 299.376 128.819 298.511 130.871L298.523 130.836ZM217.843 103.069C210.681 121.913 220.137 143.012 238.957 150.206C257.788 157.364 278.88 147.894 286.078 129.062C286.335 128.314 286.592 127.566 286.837 126.854C294 108.01 284.543 86.9111 265.724 79.7173C246.892 72.559 225.801 82.0289 218.603 100.861C218.345 101.609 218.1 102.321 217.843 103.069Z"
                        fill="white"></path>
                </g>
                <defs>
                    <clipPath id="clip0_257_2397">
                        <rect width="280.136" height="245.558" fill="white"
                            transform="translate(80.4346 0.494141) rotate(18.9914)"></rect>
                    </clipPath>
                </defs>
            </svg>
        <?php } ?>
    </div>
    <div class="container container-md">
        <div class="hero-wrapper">
            <?php echo get_field('title'); ?>
        </div>
    </div>
</section>
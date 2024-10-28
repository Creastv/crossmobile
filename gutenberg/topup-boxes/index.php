<?php
$className = 'topup-boxes';
require dirname(__FILE__, 2) . '/defaults.php';
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/gutenberg/hero/style.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/gutenberg/text-btn/style.css">

<section class="hero">
    <div class="custom-icon icon-<?php echo get_field('icon_direction'); ?>">
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
    <?php if (!empty(get_field('top-up'))) { ?>
        <div class="container container-md">
            <div class="hero-wrapper">
                <?php foreach (get_field('top-up') as $key => $single) { ?>
                    <div class="top-up-title <?php if ($key == 0) echo 'active'; ?>" data-tab="top-up_<?php echo $key; ?>">
                        <?php echo $single['title']; ?>
                    </div>
                <?php }; ?>
            </div>
        </div>
    <?php }; ?>
</section>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="topup-boxes-wrapper">
            <?php if (!empty(get_field('top-up'))) { ?>
                <div class="topup-nav">
                    <?php foreach (get_field('top-up') as $key => $single) { ?>
                        <a href="#" class="btn btn-tab <?php if ($key == 0) echo 'active'; ?>" tab-href="top-up_<?php echo $key; ?>">
                            <?php echo $single['tab_title']; ?>
                        </a>
                    <?php }; ?>
                </div>
            <?php }; ?>
            <?php if (!empty(get_field('top-up'))) { ?>
                <div class="tab-wrapper">
                    <?php foreach (get_field('top-up') as $key => $tab) { ?>
                        <?php if (!empty($tab['top-up'])) { ?>
                            <div class="tab-single <?php if ($key == 0) echo 'active'; ?>" data-tab="top-up_<?php echo $key; ?>">
                                <?php foreach ($tab['top-up'] as $single) { ?>
                                    <div class="offer-single">
                                        <div class="offer-bg">
                                            <svg width="343" height="131" viewBox="0 0 343 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.2" d="M294.704 0C285.165 57.7546 223.229 97.8642 156.454 89.6192C118.757 84.959 85.7154 65.4021 67.0977 36.6841C59.7243 25.3324 54.8394 12.9052 52.6735 0H0C11.7513 81.8522 98.0658 140.005 192.768 129.848C271.34 121.444 333.276 67.9115 343 0H294.704Z"></path>
                                            </svg>
                                        </div>
                                        <?php if ((!empty($single['memory_number'])) && (!empty($single['memory_text']))) { ?>
                                            <div class="offer-gb">
                                                <div class="single-gb">
                                                    <p class="gb-title">
                                                        <span><?php echo $single['memory_number']; ?></span>
                                                        <?php echo $single['memory_text']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php }; ?>
                                        <div class="offer-price">
                                            <p class="price"><?php echo $single['price']; ?></p>
                                            <span>
                                                zł
                                            </span>
                                        </div>

                                        <?php if (!empty($single['features'])) { ?>
                                            <div class="offer-features">
                                                <?php foreach ($single['features'] as $feature) { ?>
                                                    <div class="single-feature">
                                                        <?php echo wp_get_attachment_image($feature['icon']['ID'], 'full', 0, ['class' => '']); ?>
                                                        <?php echo $feature['description']; ?>
                                                    </div>
                                                <?php }; ?>
                                            </div>
                                        <?php }; ?>
                                        <?php if (!empty($single['description'])) { ?>
                                            <div class="features-description">
                                                <?php echo $single['description']; ?>
                                            </div>
                                        <?php }; ?>
                                        <div class="offer-buttons">
                                            <?php if (!empty($single['button'])) { ?>
                                                <a href="<?php echo $single['button']['url'] ? $single['button']['url'] : '#'; ?>" title="<?php echo $single['button']['title'] ? $single['button']['title'] : ''; ?>" target="<?php echo $single['button']['target'] ? $single['button']['target'] : '_self'; ?>">
                                                    <?php echo $single['button']['title'] ? $single['button']['title'] : ''; ?>
                                                </a>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                <?php }; ?>
                            </div>
                        <?php }; ?>
                    <?php }; ?>

                </div>


            <?php }; ?>
        </div>
    </div>
</section>
<?php if (!empty(get_field('top-up'))) { ?>
    <section class="text-btn">
        <div class="container ">
            <?php foreach (get_field('top-up') as $key => $tab) { ?>
                <div class="text-btn-wrapper <?php if ($key == 0) echo 'active'; ?>" data-tab="top-up_<?php echo $key; ?>">
                    <?php echo $tab['description']; ?>
                    <?php if (!empty($tab['button'])) { ?>
                        <div class="btn-wrapper">
                            <a href="<?php echo $tab['button']['url'] ? $tab['button']['url'] : '#'; ?>" title="<?php echo $tab['button']['title'] ? $tab['button']['title'] : ''; ?>" target="<?php echo $tab['button']['target'] ? $tab['button']['target'] : '_self'; ?>" class="btn btn-primary">
                                <?php echo $tab['button']['title'] ? $tab['button']['title'] : ''; ?>
                            </a>
                        </div>
                    <?php }; ?>
                </div>
            <?php }; ?>
        </div>
    </section>
<?php }; ?>

<?php if (!empty(get_field('top-up'))) { ?>
    <section class="text-btn">
        <div class="container ">
            <?php foreach (get_field('top-up') as $key => $tab) {

            ?>
                <div class="text-btn-wrapper <?php if ($key == 0) echo 'active'; ?>" data-tab="top-up_<?php echo $key; ?>">

                    <section class=" features-2">

                        <div class="features-wrapper">
                            <?php
                            $zalety = $tab['features'];
                            foreach ($zalety as $zal) { ?>
                                <div class="single-offer">
                                    <div class="offer-icon">
                                        <?php echo wp_get_attachment_image($zal['icon']['ID'], '', 0, ['class' => '']); ?>
                                    </div>
                                    <?php echo $zal['description']; ?>
                                </div>
                            <?php } ?>

                    </section>
                </div>
        </div>
    <?php }; ?>
    </div>
    </section>
<?php }; ?>

<script>
    $(function() {
        function setEqualHeight() {
            let maxHeight = 0;

            // Resetujemy wysokości, aby obliczenia były poprawne po zmianie rozmiaru okna
            $('.features-2 .single-offer').css('height', 'auto');

            // Znajdź najwyższy element
            $('.features-2 .single-offer').each(function() {
                let thisHeight = $(this).outerHeight();
                if (thisHeight > maxHeight) {
                    maxHeight = thisHeight;
                }
            });

            // Ustaw każdemu elementowi najwyższą wysokość
            $('.features-2 .single-offer').css('height', maxHeight + 'px');
        }

        // Uruchom funkcję po załadowaniu strony
        setEqualHeight();

        // Uruchom funkcję również przy zmianie rozmiaru okna
        $(window).on('resize', function() {
            setEqualHeight();
        });
        setEqualHeight();
    });
    $(function() {
        if (window.location.hash) {
            setTimeout(() => {
                // $(window.location.hash).click();
                if (window.location.hash == '#Internet') {
                    $("[tab-href]:nth-child(1)").click();
                } else if (window.location.hash == '#Roaming') {
                    $("[tab-href]:nth-child(2)").click();
                } else if (window.location.hash == '#Resources') {
                    $("[tab-href]:nth-child(3)").click();
                }
                setEqualHeight();
            }, 100);
        }
    })
</script>
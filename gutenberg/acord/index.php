<?php
$colOne = get_field('col_one');
$anchor = 'faq';
if (! empty($block['anchor'])) {
    $anchor = 'id=' . esc_attr($block['anchor']) . ' ';
}
?>
<div <?php echo esc_attr($anchor); ?>>
    <div class="container">
        <div class="faq js">
            <div class="faq__wraper">
                <?php if ($colOne) { ?>
                <div class="faq-questions-wrapper">
                    <?php foreach ($colOne['accordion'] as $index => $acc) { ?>
                    <div class="faq-single <?php echo $index === 0 ? 'active' : ''; ?>">
                        <h4><b>
                                <?php echo $acc['accordion_name']; ?>
                            </b>
                            <span>
                                <svg class="fa-horizontal" width="34" height="1" viewBox="0 0 34 1" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33.4345 0.5H0.0625" stroke="#5C5559"></path>
                                </svg>
                                <svg class="fa-vertical" width="2" height="37" viewBox="0 0 2 37" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.748045 36.5L0.748047 0.5" stroke="#5C5559"></path>
                                </svg>
                            </span>
                        </h4>
                        <div class="faq-answer"
                            style="<?php echo $index === 0 ? 'display:block;' : 'display:none;'; ?>">
                            <?php echo $acc['accordion_content']; ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>
<?php
$faqSchema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => []
];
foreach ($colOne['accordion'] as $acc) {
    $faqSchema["mainEntity"][] = [
        "@type" => "Question",
        "name" => $acc['accordion_name'],
        "acceptedAnswer" => [
            "@type" => "Answer",
            "text" => $acc['accordion_content']
        ]
    ];
}
?>
<script type="application/ld+json">
<?php echo json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
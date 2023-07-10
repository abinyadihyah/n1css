<?php

// Ratio Option

$minorSecond = 1.067;
$majorSecond = 1.125;
$minorThird = 1.200;
$majorThird = 1.250;
$perfectFourth = 1.333;
$augmentedFourth = 1.414;
$perfectFifth = 1.500;
$goldenRatio = 1.618;

// Desktop Font Sizes
$fontSizeBaseDesktop = 16;
$fontSizeRatioDesktop = $majorThird;

// Mobile Font Sizes
$fontSizeBaseMobile = 15;
$fontSizeRatioMobile = $majorSecond;

// Desktop Spacing Sizes
$spacingBaseDesktop = 16;
$spacingRatioDesktop = $majorThird;

// Mobile Spacing Sizes
$spacingBaseMobile = 15;
$spacingRatioMobile = $majorSecond;

// Calculate Desktop Font Sizes
$fontSizesDesktop = [
    'xxs' => $fontSizeBaseDesktop / ($fontSizeRatioDesktop ** 4),
    'xs' => $fontSizeBaseDesktop / ($fontSizeRatioDesktop ** 3),
    's' => $fontSizeBaseDesktop / ($fontSizeRatioDesktop ** 2),
    'base' => $fontSizeBaseDesktop,
    'm' => $fontSizeBaseDesktop * $fontSizeRatioDesktop,
    'l' => $fontSizeBaseDesktop * ($fontSizeRatioDesktop ** 2),
    'xl' => $fontSizeBaseDesktop * ($fontSizeRatioDesktop ** 3),
    'xxl' => $fontSizeBaseDesktop * ($fontSizeRatioDesktop ** 4),
    'xxxl' => $fontSizeBaseDesktop * ($fontSizeRatioDesktop ** 5),
    'xxxxl' => $fontSizeBaseDesktop * ($fontSizeRatioDesktop ** 6),
];

// Calculate Mobile Font Sizes
$fontSizesMobile = [
    'xxs' => $fontSizeBaseMobile / ($fontSizeRatioMobile ** 4),
    'xs' => $fontSizeBaseMobile / ($fontSizeRatioMobile ** 3),
    's' => $fontSizeBaseMobile / ($fontSizeRatioMobile ** 2),
    'base' => $fontSizeBaseMobile,
    'm' => $fontSizeBaseMobile * $fontSizeRatioMobile,
    'l' => $fontSizeBaseMobile * ($fontSizeRatioMobile ** 2),
    'xl' => $fontSizeBaseMobile * ($fontSizeRatioMobile ** 3),
    'xxl' => $fontSizeBaseMobile * ($fontSizeRatioMobile ** 4),
    'xxxl' => $fontSizeBaseMobile * ($fontSizeRatioMobile ** 5),
    'xxxxl' => $fontSizeBaseMobile * ($fontSizeRatioMobile ** 6),
];

// Calculate Desktop Spacing Sizes
$spacingSizesDesktop = [
    'xxs' => $spacingBaseDesktop / ($spacingRatioDesktop ** 4),
    'xs' => $spacingBaseDesktop / ($spacingRatioDesktop ** 3),
    's' => $spacingBaseDesktop / ($spacingRatioDesktop ** 2),
    'base' => $spacingBaseDesktop,
    'm' => $spacingBaseDesktop * $spacingRatioDesktop,
    'l' => $spacingBaseDesktop * ($spacingRatioDesktop ** 2),
    'xl' => $spacingBaseDesktop * ($spacingRatioDesktop ** 3),
    'xxl' => $spacingBaseDesktop * ($spacingRatioDesktop ** 4),
    'xxxl' => $spacingBaseDesktop * ($spacingRatioDesktop ** 5),
    'xxxxl' => $spacingBaseDesktop * ($spacingRatioDesktop ** 6),
];

// Calculate Mobile Spacing Sizes
$spacingSizesMobile = [
    'xxs' => $spacingBaseMobile / ($spacingRatioMobile ** 4),
    'xs' => $spacingBaseMobile / ($spacingRatioMobile ** 3),
    's' => $spacingBaseMobile / ($spacingRatioMobile ** 2),
    'base' => $spacingBaseMobile,
    'm' => $spacingBaseMobile * $spacingRatioMobile,
    'l' => $spacingBaseMobile * ($spacingRatioMobile ** 2),
    'xl' => $spacingBaseMobile * ($spacingRatioMobile ** 3),
    'xxl' => $spacingBaseMobile * ($spacingRatioMobile ** 4),
    'xxxl' => $spacingBaseMobile * ($spacingRatioMobile ** 5),
    'xxxxl' => $spacingBaseMobile * ($spacingRatioMobile ** 6),
];

// Output CSS variables



?>


<style>
    :root {
        /* Desktop Font Sizes */
        <?php foreach ($fontSizesDesktop as $sizeName => $sizeValue) : ?>
            --font-<?php echo $sizeName; ?>-desktop: <?php echo $sizeValue; ?>px;
        <?php endforeach; ?>

        /* Mobile Font Sizes */
        <?php foreach ($fontSizesMobile as $sizeName => $sizeValue) : ?>
            --font-<?php echo $sizeName; ?>-mobile: <?php echo $sizeValue; ?>px;
        <?php endforeach; ?>

        /* Desktop Spacing Sizes */
        <?php foreach ($spacingSizesDesktop as $sizeName => $sizeValue) : ?>
            --spacing-<?php echo $sizeName; ?>-desktop: <?php echo $sizeValue; ?>px;
        <?php endforeach; ?>

        /* Mobile Spacing Sizes */
        <?php foreach ($spacingSizesMobile as $sizeName => $sizeValue) : ?>
            --spacing-<?php echo $sizeName; ?>-mobile: <?php echo $sizeValue; ?>px;
        <?php endforeach; ?>

        --font-xxs: clamp(var(--font-xxs-mobile), calc(0.5vw + var(--font-xxs-mobile)), var(--font-xxs-desktop));
    --font-xs: clamp(var(--font-xs-mobile), calc(0.5vw + var(--font-xs-mobile)), var(--font-xs-desktop));
    --font-sm: clamp(var(--font-s-mobile), calc(0.5vw + var(--font-s-mobile)), var(--font-s-desktop));
    --font-base: clamp(var(--font-base-mobile), calc(0.5vw + var(--font-base-mobile)), var(--font-base-desktop));
    --font-md: clamp(var(--font-m-mobile), calc(0.5vw + var(--font-m-mobile)), var(--font-m-desktop));
    --font-lg: clamp(var(--font-lg-mobile), calc(0.5vw + var(--font-lg-mobile)), var(--font-lg-desktop));
    --font-xl: clamp(var(--font-xl-mobile), calc(0.5vw + var(--font-xl-mobile)), var(--font-xl-desktop));
    --font-xxl: clamp(var(--font-xxl-mobile), calc(0.5vw + var(--font-xxl-mobile)), var(--font-xxl-desktop));
    --font-xxxl: clamp(var(--font-xxxl-mobile), calc(0.5vw + var(--font-xxxl-mobile)), var(--font-xxxl-desktop));
    --font-lead: clamp(var(--font-lead-mobile), calc(0.5vw + var(--font-lead-mobile)), var(--font-lead-desktop));

        
    }


</style>



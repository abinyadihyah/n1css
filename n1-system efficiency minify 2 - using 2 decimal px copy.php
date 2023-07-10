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

// Screen Size For Fluid
$minimumViewport = 380;
$maximumViewport = 1200;

// Desktop Font Sizes
$fontSizeBaseDesktop = 16;
$fontSizeRatioDesktop = $majorThird;

// Mobile Font Sizes
$fontSizeBaseMobile = 15;
$fontSizeRatioMobile = $majorSecond;

// Desktop Spacing Sizes
$spacingBaseDesktop = 16;
$spacingRatioDesktop = $perfectFourth;

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

// Clamp Prefer Value
$fontClampRemPreferValue = [
    'fontRemXxs' => ($minimumViewport * $fontSizesDesktop['xxs'] - $maximumViewport * $fontSizesMobile['xxs']) / ($minimumViewport - $maximumViewport),
    'fontRemXs' => ($minimumViewport * $fontSizesDesktop['xs'] - $maximumViewport * $fontSizesMobile['xs']) / ($minimumViewport - $maximumViewport),
    'fontRemS' => ($minimumViewport * $fontSizesDesktop['s'] - $maximumViewport * $fontSizesMobile['s']) / ($minimumViewport - $maximumViewport),
    'fontRemBase' => ($minimumViewport * $fontSizesDesktop['base'] - $maximumViewport * $fontSizesMobile['base']) / ($minimumViewport - $maximumViewport),
    'fontRemM' => ($minimumViewport * $fontSizesDesktop['m'] - $maximumViewport * $fontSizesMobile['m']) / ($minimumViewport - $maximumViewport),
    'fontRemL' => ($minimumViewport * $fontSizesDesktop['l'] - $maximumViewport * $fontSizesMobile['l']) / ($minimumViewport - $maximumViewport),
    'fontRemXl' => ($minimumViewport * $fontSizesDesktop['xl'] - $maximumViewport * $fontSizesMobile['xl']) / ($minimumViewport - $maximumViewport),
    'fontRemXxl' => ($minimumViewport * $fontSizesDesktop['xxl'] - $maximumViewport * $fontSizesMobile['xxl']) / ($minimumViewport - $maximumViewport),
    'fontRemXxxl' => ($minimumViewport * $fontSizesDesktop['xxxl'] - $maximumViewport * $fontSizesMobile['xxxl']) / ($minimumViewport - $maximumViewport),
    'fontRemXxxxl' => ($minimumViewport * $fontSizesDesktop['xxxxl'] - $maximumViewport * $fontSizesMobile['xxxxl']) / ($minimumViewport - $maximumViewport)
];

$fontClampVwPreferValue = [
    'fontVwXxs' => 100 * ($fontSizesDesktop['xxs'] - $fontSizesMobile['xxs']) / ($maximumViewport - $minimumViewport),
    'fontVwXs' => 100 * ($fontSizesDesktop['xs'] - $fontSizesMobile['xs']) / ($maximumViewport - $minimumViewport),
    'fontVwS' => 100 * ($fontSizesDesktop['s'] - $fontSizesMobile['s']) / ($maximumViewport - $minimumViewport),
    'fontVwBase' => 100 * ($fontSizesDesktop['base'] - $fontSizesMobile['base']) / ($maximumViewport - $minimumViewport),
    'fontVwM' => 100 * ($fontSizesDesktop['m'] - $fontSizesMobile['m']) / ($maximumViewport - $minimumViewport),
    'fontVwL' => 100 * ($fontSizesDesktop['l'] - $fontSizesMobile['l']) / ($maximumViewport - $minimumViewport),
    'fontVwXl' => 100 * ($fontSizesDesktop['xl'] - $fontSizesMobile['xl']) / ($maximumViewport - $minimumViewport),
    'fontVwXxl' => 100 * ($fontSizesDesktop['xxl'] - $fontSizesMobile['xxl']) / ($maximumViewport - $minimumViewport),
    'fontVwXxxl' => 100 * ($fontSizesDesktop['xxxl'] - $fontSizesMobile['xxxl']) / ($maximumViewport - $minimumViewport),
    'fontVwXxxxl' => 100 * ($fontSizesDesktop['xxxxl'] - $fontSizesMobile['xxxxl']) / ($maximumViewport - $minimumViewport)
];

$fontClampPreferValue = [
    'fontPreferXxs' => round($fontClampVwPreferValue['fontVwXxs'], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRemXxs'], 3) . 'px',
    'fontPreferXs' => round($fontClampVwPreferValue['fontVwXs'], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRemXs'], 3) . 'px',
    'fontPreferS' => round($fontClampVwPreferValue['fontVwS'], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRemS'], 3) . 'px',
    'fontPreferBase' => round($fontClampVwPreferValue['fontVwBase'], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRemBase'], 3) . 'px',
    'fontPreferM' => round($fontClampVwPreferValue['fontVwM'], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRemM'], 3) . 'px',
    'fontPreferL' => round($fontClampVwPreferValue['fontVwL'], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRemL'], 3) . 'px',
    'fontPreferXl' => round($fontClampVwPreferValue['fontVwXl'], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRemXl'], 3) . 'px',
    'fontPreferXxl' => round($fontClampVwPreferValue['fontVwXxl'], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRemXxl'], 3) . 'px',
    'fontPreferXxxl' => round($fontClampVwPreferValue['fontVwXxxl'], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRemXxxl'], 3) . 'px',
    'fontPreferXxxxl' => round($fontClampVwPreferValue['fontVwXxxxl'], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRemXxxxl'], 3) . 'px'
];


//Spacing Prefer Value
$spacingClampRemPreferValue = [
    'spacingRemXxs' => ($minimumViewport * $spacingSizesDesktop['xxs'] - $maximumViewport * $spacingSizesMobile['xxs']) / ($minimumViewport - $maximumViewport),
    'spacingRemXs' => ($minimumViewport * $spacingSizesDesktop['xs'] - $maximumViewport * $spacingSizesMobile['xs']) / ($minimumViewport - $maximumViewport),
    'spacingRemS' => ($minimumViewport * $spacingSizesDesktop['s'] - $maximumViewport * $spacingSizesMobile['s']) / ($minimumViewport - $maximumViewport),
    'spacingRemBase' => ($minimumViewport * $spacingSizesDesktop['base'] - $maximumViewport * $spacingSizesMobile['base']) / ($minimumViewport - $maximumViewport),
    'spacingRemM' => ($minimumViewport * $spacingSizesDesktop['m'] - $maximumViewport * $spacingSizesMobile['m']) / ($minimumViewport - $maximumViewport),
    'spacingRemL' => ($minimumViewport * $spacingSizesDesktop['l'] - $maximumViewport * $spacingSizesMobile['l']) / ($minimumViewport - $maximumViewport),
    'spacingRemXl' => ($minimumViewport * $spacingSizesDesktop['xl'] - $maximumViewport * $spacingSizesMobile['xl']) / ($minimumViewport - $maximumViewport),
    'spacingRemXxl' => ($minimumViewport * $spacingSizesDesktop['xxl'] - $maximumViewport * $spacingSizesMobile['xxl']) / ($minimumViewport - $maximumViewport),
    'spacingRemXxxl' => ($minimumViewport * $spacingSizesDesktop['xxxl'] - $maximumViewport * $spacingSizesMobile['xxxl']) / ($minimumViewport - $maximumViewport),
    'spacingRemXxxxl' => ($minimumViewport * $spacingSizesDesktop['xxxxl'] - $maximumViewport * $spacingSizesMobile['xxxxl']) / ($minimumViewport - $maximumViewport)
];

$spacingClampVwPreferValue = [
    'spacingVwXxs' => 100 * ($spacingSizesDesktop['xxs'] - $spacingSizesMobile['xxs']) / ($maximumViewport - $minimumViewport),
    'spacingVwXs' => 100 * ($spacingSizesDesktop['xs'] - $spacingSizesMobile['xs']) / ($maximumViewport - $minimumViewport),
    'spacingVwS' => 100 * ($spacingSizesDesktop['s'] - $spacingSizesMobile['s']) / ($maximumViewport - $minimumViewport),
    'spacingVwBase' => 100 * ($spacingSizesDesktop['base'] - $spacingSizesMobile['base']) / ($maximumViewport - $minimumViewport),
    'spacingVwM' => 100 * ($spacingSizesDesktop['m'] - $spacingSizesMobile['m']) / ($maximumViewport - $minimumViewport),
    'spacingVwL' => 100 * ($spacingSizesDesktop['l'] - $spacingSizesMobile['l']) / ($maximumViewport - $minimumViewport),
    'spacingVwXl' => 100 * ($spacingSizesDesktop['xl'] - $spacingSizesMobile['xl']) / ($maximumViewport - $minimumViewport),
    'spacingVwXxl' => 100 * ($spacingSizesDesktop['xxl'] - $spacingSizesMobile['xxl']) / ($maximumViewport - $minimumViewport),
    'spacingVwXxxl' => 100 * ($spacingSizesDesktop['xxxl'] - $spacingSizesMobile['xxxl']) / ($maximumViewport - $minimumViewport),
    'spacingVwXxxxl' => 100 * ($spacingSizesDesktop['xxxxl'] - $spacingSizesMobile['xxxxl']) / ($maximumViewport - $minimumViewport)
];

$spacingClampPreferValue = [
    'spacingPreferXxs' => round($spacingClampVwPreferValue['spacingVwXxs'], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRemXxs'], 3) . 'px',
    'spacingPreferXs' => round($spacingClampVwPreferValue['spacingVwXs'], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRemXs'], 3) . 'px',
    'spacingPreferS' => round($spacingClampVwPreferValue['spacingVwS'], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRemS'], 3) . 'px',
    'spacingPreferBase' => round($spacingClampVwPreferValue['spacingVwBase'], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRemBase'], 3) . 'px',
    'spacingPreferM' => round($spacingClampVwPreferValue['spacingVwM'], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRemM'], 3) . 'px',
    'spacingPreferL' => round($spacingClampVwPreferValue['spacingVwL'], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRemL'], 3) . 'px',
    'spacingPreferXl' => round($spacingClampVwPreferValue['spacingVwXl'], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRemXl'], 3) . 'px',
    'spacingPreferXxl' => round($spacingClampVwPreferValue['spacingVwXxl'], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRemXxl'], 3) . 'px',
    'spacingPreferXxxl' => round($spacingClampVwPreferValue['spacingVwXxxl'], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRemXxxl'], 3) . 'px',
    'spacingPreferXxxxl' => round($spacingClampVwPreferValue['spacingVwXxxxl'], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRemXxxxl'], 3) . 'px'
];





?>


<style>
    :root {
        /* Desktop Font Sizes */
        <?php foreach ($fontSizesDesktop as $sizeName => $sizeValue) : ?>--font-<?php echo $sizeName; ?>-desktop: <?php echo round($sizeValue, 3); ?>px;
        <?php endforeach; ?>
        /* Mobile Font Sizes */
        <?php foreach ($fontSizesMobile as $sizeName => $sizeValue) : ?>--font-<?php echo $sizeName; ?>-mobile: <?php echo round($sizeValue, 3); ?>px;
        <?php endforeach; ?>
        /* Desktop Spacing Sizes */
        <?php foreach ($spacingSizesDesktop as $sizeName => $sizeValue) : ?>--spacing-<?php echo $sizeName; ?>-desktop: <?php echo round($sizeValue, 3); ?>px;
        <?php endforeach; ?>
        /* Mobile Spacing Sizes */
        <?php foreach ($spacingSizesMobile as $sizeName => $sizeValue) : ?>--spacing-<?php echo $sizeName; ?>-mobile: <?php echo round($sizeValue, 3); ?>px;
        <?php endforeach; ?>--font-xxs: clamp(var(--font-xxs-mobile), <?php echo $fontClampPreferValue['fontPreferXxs']; ?>, var(--font-xxs-desktop));
        --font-xs: clamp(var(--font-xs-mobile), <?php echo $fontClampPreferValue['fontPreferXs']; ?>, var(--font-xs-desktop));
        --font-sm: clamp(var(--font-s-mobile), <?php echo $fontClampPreferValue['fontPreferS']; ?>, var(--font-s-desktop));
        --font-base: clamp(var(--font-base-mobile), <?php echo $fontClampPreferValue['fontPreferBase']; ?>, var(--font-base-desktop));
        --font-md: clamp(var(--font-m-mobile), <?php echo $fontClampPreferValue['fontPreferM']; ?>, var(--font-m-desktop));
        --font-l: clamp(var(--font-l-mobile), <?php echo $fontClampPreferValue['fontPreferL']; ?>, var(--font-l-desktop));
        --font-xl: clamp(var(--font-xl-mobile), <?php echo $fontClampPreferValue['fontPreferXl']; ?>, var(--font-xl-desktop));
        --font-xxl: clamp(var(--font-xxl-mobile), <?php echo $fontClampPreferValue['fontPreferXxl']; ?>, var(--font-xxl-desktop));
        --font-xxxl: clamp(var(--font-xxxl-mobile), <?php echo $fontClampPreferValue['fontPreferXxxl']; ?>, var(--font-xxxl-desktop));
        --font-lead: clamp(var(--font-xxxxl-mobile), <?php echo $fontClampPreferValue['fontPreferXxxxl']; ?>, var(--font-xxxxl-desktop));

        --spacing-xxs: clamp(var(--spacing-xxs-mobile), <?php echo $spacingClampPreferValue['spacingPreferXxs']; ?>, var(--spacing-xxs-desktop));
        --spacing-xs: clamp(var(--spacing-xs-mobile), <?php echo $spacingClampPreferValue['spacingPreferXs']; ?>, var(--spacing-xs-desktop));
        --spacing-sm: clamp(var(--spacing-s-mobile), <?php echo $spacingClampPreferValue['spacingPreferS']; ?>, var(--spacing-s-desktop));
        --spacing-base: clamp(var(--spacing-base-mobile), <?php echo $spacingClampPreferValue['spacingPreferBase']; ?>, var(--spacing-base-desktop));
        --spacing-md: clamp(var(--spacing-m-mobile), <?php echo $spacingClampPreferValue['spacingPreferM']; ?>, var(--spacing-m-desktop));
        --spacing-l: clamp(var(--spacing-l-mobile), <?php echo $spacingClampPreferValue['spacingPreferL']; ?>, var(--spacing-l-desktop));
        --spacing-xl: clamp(var(--spacing-xl-mobile), <?php echo $spacingClampPreferValue['spacingPreferXl']; ?>, var(--spacing-xl-desktop));
        --spacing-xxl: clamp(var(--spacing-xxl-mobile), <?php echo $spacingClampPreferValue['spacingPreferXxl']; ?>, var(--spacing-xxl-desktop));
        --spacing-xxxl: clamp(var(--spacing-xxxl-mobile), <?php echo $spacingClampPreferValue['spacingPreferXxxl']; ?>, var(--spacing-xxxl-desktop));
        --spacing-lead: clamp(var(--spacing-xxxxl-mobile), <?php echo $spacingClampPreferValue['spacingPreferXxxxl']; ?>, var(--spacing-xxxxl-desktop));



    }
</style>
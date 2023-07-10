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
$clampRemPreferValue = [
    'remXxs' => ($minimumViewport * $fontSizesDesktop['xxs'] - $maximumViewport * $fontSizesMobile['xxs']) / ($minimumViewport - $maximumViewport),
    'remXs' => ($minimumViewport * $fontSizesDesktop['xs'] - $maximumViewport * $fontSizesMobile['xs']) / ($minimumViewport - $maximumViewport),
    'remS' => ($minimumViewport * $fontSizesDesktop['s'] - $maximumViewport * $fontSizesMobile['s']) / ($minimumViewport - $maximumViewport),
    'remBase' => ($minimumViewport * $fontSizesDesktop['base'] - $maximumViewport * $fontSizesMobile['base']) / ($minimumViewport - $maximumViewport),
    'remM' => ($minimumViewport * $fontSizesDesktop['m'] - $maximumViewport * $fontSizesMobile['m']) / ($minimumViewport - $maximumViewport),
    'remL' => ($minimumViewport * $fontSizesDesktop['l'] - $maximumViewport * $fontSizesMobile['l']) / ($minimumViewport - $maximumViewport),
    'remXl' => ($minimumViewport * $fontSizesDesktop['xl'] - $maximumViewport * $fontSizesMobile['xl']) / ($minimumViewport - $maximumViewport),
    'remXxl' => ($minimumViewport * $fontSizesDesktop['xxl'] - $maximumViewport * $fontSizesMobile['xxl']) / ($minimumViewport - $maximumViewport),
    'remXxxl' => ($minimumViewport * $fontSizesDesktop['xxxl'] - $maximumViewport * $fontSizesMobile['xxxl']) / ($minimumViewport - $maximumViewport),
    'remXxxxl' => ($minimumViewport * $fontSizesDesktop['xxxxl'] - $maximumViewport * $fontSizesMobile['xxxxl']) / ($minimumViewport - $maximumViewport)
];

$clampVwPreferValue = [
    'vwXxs' => 100 * ($fontSizesDesktop['xxs'] - $fontSizesMobile['xxs']) / ($maximumViewport - $minimumViewport),
    'vwXs' => 100 * ($fontSizesDesktop['xs'] - $fontSizesMobile['xs']) / ($maximumViewport - $minimumViewport),
    'vwS' => 100 * ($fontSizesDesktop['s'] - $fontSizesMobile['s']) / ($maximumViewport - $minimumViewport),
    'vwBase' => 100 * ($fontSizesDesktop['base'] - $fontSizesMobile['base']) / ($maximumViewport - $minimumViewport),
    'vwM' => 100 * ($fontSizesDesktop['m'] - $fontSizesMobile['m']) / ($maximumViewport - $minimumViewport),
    'vwL' => 100 * ($fontSizesDesktop['l'] - $fontSizesMobile['l']) / ($maximumViewport - $minimumViewport),
    'vwXl' => 100 * ($fontSizesDesktop['xl'] - $fontSizesMobile['xl']) / ($maximumViewport - $minimumViewport),
    'vwXxl' => 100 * ($fontSizesDesktop['xxl'] - $fontSizesMobile['xxl']) / ($maximumViewport - $minimumViewport),
    'vwXxxl' => 100 * ($fontSizesDesktop['xxxl'] - $fontSizesMobile['xxxl']) / ($maximumViewport - $minimumViewport),
    'vwXxxxl' => 100 * ($fontSizesDesktop['xxxxl'] - $fontSizesMobile['xxxxl']) / ($maximumViewport - $minimumViewport)
];

$clampPreferValue = [
    'preferXxs' => $clampVwPreferValue['vwXxs'] . 'vw + ' . $clampRemPreferValue['remXxs'] . 'px',
    'preferXs' => $clampVwPreferValue['vwXs'] . 'vw + ' . $clampRemPreferValue['remXs'] . 'px',
    'preferS' => $clampVwPreferValue['vwS'] . 'vw + ' . $clampRemPreferValue['remS'] . 'px',
    'preferBase' => $clampVwPreferValue['vwBase'] . 'vw + ' . $clampRemPreferValue['remBase'] . 'px',
    'preferM' => $clampVwPreferValue['vwM'] . 'vw + ' . $clampRemPreferValue['remM'] . 'px',
    'preferL' => $clampVwPreferValue['vwL'] . 'vw + ' . $clampRemPreferValue['remL'] . 'px',
    'preferXl' => $clampVwPreferValue['vwXl'] . 'vw + ' . $clampRemPreferValue['remXl'] . 'px',
    'preferXxl' => $clampVwPreferValue['vwXxl'] . 'vw + ' . $clampRemPreferValue['remXxl'] . 'px',
    'preferXxxl' => $clampVwPreferValue['vwXxxl'] . 'vw + ' . $clampRemPreferValue['remXxxl'] . 'px',
    'preferXxxxl' => $clampVwPreferValue['vwXxxxl'] . 'vw + ' . $clampRemPreferValue['remXxxxl'] . 'px'
];






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

        --font-xxs: clamp(var(--font-xxs-mobile), <?php echo $clampPreferValue['preferXxs']; ?>, var(--font-xxs-desktop));
--font-xs: clamp(var(--font-xs-mobile), <?php echo $clampPreferValue['preferXs']; ?>, var(--font-xs-desktop));
--font-sm: clamp(var(--font-s-mobile), <?php echo $clampPreferValue['preferS']; ?>, var(--font-s-desktop));
--font-base: clamp(var(--font-base-mobile), <?php echo $clampPreferValue['preferBase']; ?>, var(--font-base-desktop));
--font-md: clamp(var(--font-m-mobile), <?php echo $clampPreferValue['preferM']; ?>, var(--font-m-desktop));
--font-lg: clamp(var(--font-lg-mobile), <?php echo $clampPreferValue['preferL']; ?>, var(--font-lg-desktop));
--font-xl: clamp(var(--font-xl-mobile), <?php echo $clampPreferValue['preferXl']; ?>, var(--font-xl-desktop));
--font-xxl: clamp(var(--font-xxl-mobile), <?php echo $clampPreferValue['preferXxl']; ?>, var(--font-xxl-desktop));
--font-xxxl: clamp(var(--font-xxxl-mobile), <?php echo $clampPreferValue['preferXxxl']; ?>, var(--font-xxxl-desktop));
--font-lead: clamp(var(--font-xxxxl-mobile), <?php echo $clampPreferValue['preferXxxxl']; ?>, var(--font-xxxxl-desktop));


        
    }


</style>



<?php


// Screen Size For Fluid
$minimumViewport = 420;
$maximumViewport = 1200;

// Desktop Font Sizes
$fontSizeBaseDesktop = get_field('font_base_size_on_desktop', 'option');;
$fontSizeRatioDesktop = floatval(get_field('font_scale_on_desktop', 'option'));;

// Mobile Font Sizes
$fontSizeBaseMobile = get_field('font_base_size_on_mobile', 'option');
$fontSizeRatioMobile = floatval(get_field('font_scale_on_mobile', 'option'));

// Desktop Spacing Sizes
$spacingBaseDesktop = get_field('content_spacing_on_desktop', 'option');
$spacingRatioDesktop = floatval(get_field('space_scale_on_desktop', 'option'));

// Mobile Spacing Sizes
$spacingBaseMobile = get_field('content_spacing_on_mobile', 'option');
$spacingRatioMobile = floatval(get_field('space_scale_on_mobile', 'option'));

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
$fontClampRemPreferValue = [];
$fontClampVwPreferValue = [];
$fontClampPreferValue = [];

$fontSizes = ['xxs', 'xs', 's', 'base', 'm', 'l', 'xl', 'xxl', 'xxxl', 'xxxxl'];

foreach ($fontSizes as $size) {
    $fontClampRemPreferValue['fontRem' . ucfirst($size)] = ($minimumViewport * $fontSizesDesktop[$size] - $maximumViewport * $fontSizesMobile[$size]) / ($minimumViewport - $maximumViewport);

    $fontClampVwPreferValue['fontVw' . ucfirst($size)] = 100 * ($fontSizesDesktop[$size] - $fontSizesMobile[$size]) / ($maximumViewport - $minimumViewport);

    $fontClampPreferValue['fontPrefer' . ucfirst($size)] = round($fontClampVwPreferValue['fontVw' . ucfirst($size)], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRem' . ucfirst($size)], 3) . 'px';
};



//Spacing Prefer Value
$spacingClampRemPreferValue = [];
$spacingClampVwPreferValue = [];
$spacingClampPreferValue = [];

$spacingSizes = ['xxs', 'xs', 's', 'base', 'm', 'l', 'xl', 'xxl', 'xxxl', 'xxxxl'];

foreach ($spacingSizes as $size) {
    $spacingClampRemPreferValue['spacingRem' . ucfirst($size)] = ($minimumViewport * $spacingSizesDesktop[$size] - $maximumViewport * $spacingSizesMobile[$size]) / ($minimumViewport - $maximumViewport);

    $spacingClampVwPreferValue['spacingVw' . ucfirst($size)] = 100 * ($spacingSizesDesktop[$size] - $spacingSizesMobile[$size]) / ($maximumViewport - $minimumViewport);

    $spacingClampPreferValue['spacingPrefer' . ucfirst($size)] = round($spacingClampVwPreferValue['spacingVw' . ucfirst($size)], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRem' . ucfirst($size)], 3) . 'px';
};






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
        <?php endforeach; ?>
        /* Fluid Font */
        --font-xxs: clamp(var(--font-xxs-mobile), <?php echo $fontClampPreferValue['fontPreferXxs']; ?>, var(--font-xxs-desktop));
        --font-xs: clamp(var(--font-xs-mobile), <?php echo $fontClampPreferValue['fontPreferXs']; ?>, var(--font-xs-desktop));
        --font-sm: clamp(var(--font-s-mobile), <?php echo $fontClampPreferValue['fontPreferS']; ?>, var(--font-s-desktop));
        --font-base: clamp(var(--font-base-mobile), <?php echo $fontClampPreferValue['fontPreferBase']; ?>, var(--font-base-desktop));
        --font-md: clamp(var(--font-m-mobile), <?php echo $fontClampPreferValue['fontPreferM']; ?>, var(--font-m-desktop));
        --font-l: clamp(var(--font-l-mobile), <?php echo $fontClampPreferValue['fontPreferL']; ?>, var(--font-l-desktop));
        --font-xl: clamp(var(--font-xl-mobile), <?php echo $fontClampPreferValue['fontPreferXl']; ?>, var(--font-xl-desktop));
        --font-xxl: clamp(var(--font-xxl-mobile), <?php echo $fontClampPreferValue['fontPreferXxl']; ?>, var(--font-xxl-desktop));
        --font-xxxl: clamp(var(--font-xxxl-mobile), <?php echo $fontClampPreferValue['fontPreferXxxl']; ?>, var(--font-xxxl-desktop));
        --font-lead: clamp(var(--font-xxxxl-mobile), <?php echo $fontClampPreferValue['fontPreferXxxxl']; ?>, var(--font-xxxxl-desktop));


        /* Fluid Spacing */
        --spacing-xxs: clamp(var(--spacing-xxs-mobile), <?php echo $spacingClampPreferValue['spacingPreferXxs']; ?>, var(--spacing-xxs-desktop));
        --spacing-xs: clamp(var(--spacing-xs-mobile), <?php echo $spacingClampPreferValue['spacingPreferXs']; ?>, var(--spacing-xs-desktop));
        --spacing-sm: clamp(var(--spacing-s-mobile), <?php echo $spacingClampPreferValue['spacingPreferS']; ?>, var(--spacing-s-desktop));
        --spacing-base: clamp(var(--spacing-base-mobile), <?php echo $spacingClampPreferValue['spacingPreferBase']; ?>, var(--spacing-base-desktop));
        --spacing-md: clamp(var(--spacing-m-mobile), <?php echo $spacingClampPreferValue['spacingPreferM']; ?>, var(--spacing-m-desktop));
        --spacing-l: clamp(var(--spacing-l-mobile), <?php echo $spacingClampPreferValue['spacingPreferL']; ?>, var(--spacing-l-desktop));
        --spacing-xl: clamp(var(--spacing-xl-mobile), <?php echo $spacingClampPreferValue['spacingPreferXl']; ?>, var(--spacing-xl-desktop));
        --spacing-xxl: clamp(var(--spacing-xxl-mobile), <?php echo $spacingClampPreferValue['spacingPreferXxl']; ?>, var(--spacing-xxl-desktop));
        --spacing-xxxl: clamp(var(--spacing-xxxl-mobile), <?php echo $spacingClampPreferValue['spacingPreferXxxl']; ?>, var(--spacing-xxxl-desktop));
        --spacing-xxxxl: clamp(var(--spacing-xxxxl-mobile), <?php echo $spacingClampPreferValue['spacingPreferXxxxl']; ?>, var(--spacing-xxxxl-desktop));



    }
</style>
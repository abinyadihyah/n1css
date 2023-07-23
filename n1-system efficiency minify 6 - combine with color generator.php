    <?php





    //////////////////// ACF Theme Variable Getter ////////////////////

    // Screen Size For Fluid Checkpoint
    $minimumViewport = 420;
    $maximumViewport = 1200;

    // Desktop Font Sizes
    $fontSizeBaseDesktop = get_field('font_base_size_on_desktop', 'option');;
    $fontSizeRatioDesktop = floatval(get_field('font_scale_on_desktop', 'option'));;

    // Mobile Font Sizes
    $fontSizeBaseMobile = get_field('font_base_size_on_mobile', 'option');
    $fontSizeRatioMobile = floatval(get_field('font_scale_on_mobile', 'option'));

    //Line Height
    $line_height_paragraph = get_field('line_height_paragraph', 'option');
    $line_height_heading = get_field('line_height_for_heading', 'option');

    //Layout
    $header_height = get_field('header_height', 'option');
    $header_height_mobile = get_field('header_height_on_mobile', 'option');

    // Desktop Spacing Sizes
    $spacingBaseDesktop = get_field('content_spacing_on_desktop', 'option');
    $spacingRatioDesktop = floatval(get_field('space_scale_on_desktop', 'option'));

    // Mobile Spacing Sizes
    $spacingBaseMobile = get_field('content_spacing_on_mobile', 'option');
    $spacingRatioMobile = floatval(get_field('space_scale_on_mobile', 'option'));


    // Color Field Theme
    $hexprimary = get_field('default_theme_primary_color', 'option');
    $hexsecondary = get_field('default_theme_secondary_color', 'option');
    $hextertiary = get_field('default_theme_accent_color', 'option');
    $hexdarkmodedarkest = get_field('dark_mode_darkest_background_color_on_dark_mode', 'option');

    //Color Field Slate
    $slate_100 = get_field('default_theme_lightest_background_color', 'option');
    $slate_200 = get_field('default_theme_light_background_color', 'option');
    $slate_300 = get_field('default_theme_gray_light_background_color', 'option');
    $slate_400 = get_field('default_theme_gray_background_color', 'option');
    $slate_500 = get_field('default_theme_disabled_text_color', 'option');
    $slate_600 = get_field('default_theme_base_text_color', 'option');
    $slate_700 = get_field('default_theme_base_text_color_medium', 'option');
    $slate_800 = get_field('default_theme_heading_base_color', 'option');
    $slate_900 = get_field('default_theme_heading_base_color_medium', 'option');

    // Color Field Dark Mode
    $dm_slate_100 = get_field('dark_mode_gray_background_color_on_dark_mode', 'option');
    $dm_slate_200 = get_field('dark_mode_gray_dark_background_color_on_dark_mode', 'option');
    $dm_slate_300 = get_field('dark_mode_dark_background_color_on_dark_mode', 'option');
    $dm_slate_400 = get_field('dark_mode_darkest_background_color_on_dark_mode', 'option');
    $dm_slate_500 = get_field('dark_mode_disabled_text_color_on_dark_mode', 'option');
    $dm_slate_600 = get_field('dark_mode_base_text_color_on_dark_mode', 'option');
    $dm_slate_700 = get_field('dark_mode_base_text_color_medium_on_dark_mode', 'option');
    $dm_slate_800 = get_field('dark_mode_heading_base_color_on_dark_mode', 'option');
    $dm_slate_900 = get_field('dark_mode_heading_base_color_medium_on_dark_mode', 'option');


    // Layout Field
    $container_size = get_field('maximum_content_width', 'option');
    $side_padding = get_field('content_side_padding', 'option');





    //Animation field
    $speed_base = floatval(get_field('animation_speed', 'option'));
    $speed_slowest = floatval(get_field('animation_slowest_speed', 'option'));
    $speed_fastest = floatval(get_field('animation_fastest_speed', 'option'));
    $delay_base = floatval(get_field('delay_duration', 'option'));



    //Social Media Display Setting
    $display_none = "display:none!important;";
    $facebook = get_field('show_facebook', 'option');
    $instagram = get_field('show_instagram', 'option');
    $twitter = get_field('show_twitter', 'option');
    $youtube = get_field('show_youtube', 'option');
    $linkedin = get_field('show_linkedin', 'option');
    $whatsapp = get_field('show_whatsapp', 'option');
    $telegram = get_field('show_telegram', 'option');
    $tiktok = get_field('show_tiktok', 'option');
    $discord = get_field('show_discord', 'option');
    $github = get_field('show_github', 'option');





    //////////////////// Fluid Typography ////////////////////

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


    // Font Clamp Prefer Value
    $fontClampRemPreferValue = [];
    $fontClampVwPreferValue = [];
    $fontClampPreferValue = [];

    $fontSizes = ['xxs', 'xs', 's', 'base', 'm', 'l', 'xl', 'xxl', 'xxxl', 'xxxxl'];

    foreach ($fontSizes as $size) {
        $fontClampRemPreferValue['fontRem' . ucfirst($size)] = ($minimumViewport * $fontSizesDesktop[$size] - $maximumViewport * $fontSizesMobile[$size]) / ($minimumViewport - $maximumViewport);

        $fontClampVwPreferValue['fontVw' . ucfirst($size)] = 100 * ($fontSizesDesktop[$size] - $fontSizesMobile[$size]) / ($maximumViewport - $minimumViewport);

        $fontClampPreferValue['fontPrefer' . ucfirst($size)] = round($fontClampVwPreferValue['fontVw' . ucfirst($size)], 3) . 'vw + ' . round($fontClampRemPreferValue['fontRem' . ucfirst($size)], 3) . 'px';
    };





    //////////////////// Fluid Spacing ////////////////////



    // Calculate Desktop Spacing Sizes
    $spacingSizesDesktop = [
        // 'xxs' => $spacingBaseDesktop / ($spacingRatioDesktop ** 4),
        'xs' => $spacingBaseDesktop / ($spacingRatioDesktop ** 3),
        's' => $spacingBaseDesktop / ($spacingRatioDesktop ** 2),
        'base' => $spacingBaseDesktop,
        'm' => $spacingBaseDesktop * $spacingRatioDesktop,
        'l' => $spacingBaseDesktop * ($spacingRatioDesktop ** 2),
        'xl' => $spacingBaseDesktop * ($spacingRatioDesktop ** 3),
        'xxl' => $spacingBaseDesktop * ($spacingRatioDesktop ** 4),
        'xxxl' => $spacingBaseDesktop * ($spacingRatioDesktop ** 5),
        // 'xxxxl' => $spacingBaseDesktop * ($spacingRatioDesktop ** 6),
    ];

    // Calculate Mobile Spacing Sizes
    $spacingSizesMobile = [
        // 'xxs' => $spacingBaseMobile / ($spacingRatioMobile ** 4),
        'xs' => $spacingBaseMobile / ($spacingRatioMobile ** 3),
        's' => $spacingBaseMobile / ($spacingRatioMobile ** 2),
        'base' => $spacingBaseMobile,
        'm' => $spacingBaseMobile * $spacingRatioMobile,
        'l' => $spacingBaseMobile * ($spacingRatioMobile ** 2),
        'xl' => $spacingBaseMobile * ($spacingRatioMobile ** 3),
        'xxl' => $spacingBaseMobile * ($spacingRatioMobile ** 4),
        'xxxl' => $spacingBaseMobile * ($spacingRatioMobile ** 5),
        // 'xxxxl' => $spacingBaseMobile * ($spacingRatioMobile ** 6),
    ];



    //Spacing Clamp Prefer Value
    $spacingClampRemPreferValue = [];
    $spacingClampVwPreferValue = [];
    $spacingClampPreferValue = [];

    $spacingSizes = ['xs', 's', 'base', 'm', 'l', 'xl', 'xxl', 'xxxl'];

    foreach ($spacingSizes as $size) {
        $spacingClampRemPreferValue['spacingRem' . ucfirst($size)] = ($minimumViewport * $spacingSizesDesktop[$size] - $maximumViewport * $spacingSizesMobile[$size]) / ($minimumViewport - $maximumViewport);

        $spacingClampVwPreferValue['spacingVw' . ucfirst($size)] = 100 * ($spacingSizesDesktop[$size] - $spacingSizesMobile[$size]) / ($maximumViewport - $minimumViewport);

        $spacingClampPreferValue['spacingPrefer' . ucfirst($size)] = round($spacingClampVwPreferValue['spacingVw' . ucfirst($size)], 3) . 'vw + ' . round($spacingClampRemPreferValue['spacingRem' . ucfirst($size)], 3) . 'px';
    };



    //////////////////// Color Shade Generator ////////////////////


    //HEX to HSL

    function hex_to_hsl($hex)
    {
        $hex = str_replace('#', '', $hex);

        // Convert the hexadecimal value to RGB
        $r = hexdec(substr($hex, 0, 2)) / 255;
        $g = hexdec(substr($hex, 2, 2)) / 255;
        $b = hexdec(substr($hex, 4, 2)) / 255;

        // Find the maximum and minimum values of RGB
        $max = max($r, $g, $b);
        $min = min($r, $g, $b);

        // Calculate the difference between the maximum and minimum values
        $diff = $max - $min;

        // Calculate the hue (H)
        if ($diff == 0) {
            $h = 0; // No difference, so hue is 0
        } elseif ($max == $r) {
            $h = fmod(($g - $b) / $diff, 6);
        } elseif ($max == $g) {
            $h = ($b - $r) / $diff + 2;
        } elseif ($max == $b) {
            $h = ($r - $g) / $diff + 4;
        }

        // Convert hue to degrees (0-360)
        $h = round($h * 60);

        // Make sure hue is in the positive range (0-360)
        if ($h < 0) {
            $h += 360;
        }

        // Calculate the lightness (L)
        $l = ($max + $min) / 2;

        // Calculate the saturation (S)
        if ($diff == 0) {
            $s = 0; // No difference, so saturation is 0
        } else {
            $s = $diff / (1 - abs(2 * $l - 1));
        }

        // Convert saturation and lightness to percentages (0-100)
        $s = round($s * 100);
        $l = round($l * 100);

        // Return the HSL values as a string in hsl() format
        return "hsl({$h}, {$s}%, {$l}%)";
    }

    //Convert Theme Hex Color to HSL

    $primarycolor = hex_to_hsl($hexprimary);
    $secondarycolor = hex_to_hsl($hexsecondary);
    $tertiarycolor = hex_to_hsl($hextertiary);
    $slatecolor = hex_to_hsl($slate_600);
    $darkmodecolor = hex_to_hsl($hexdarkmodedarkest);




    //////////////////// Auto Generate 9 Shade Script ////////////////////




    function calculate_lightness_and_darkness_steps($hsl, $max_lightness, $min_darkness)
    {
        // Extract H, S, and L components from HSL string
        sscanf($hsl, "hsl(%d, %d%%, %d%%)", $hue, $saturation, $lightness);

        // Calculate step size for lightness and darkness
        $lightness_step_size =  ($max_lightness - $lightness) / 4; // 5 levels for lightness
        $darkness_step_size = ($lightness - $min_darkness) / 5; // 5 levels for darkness

        // Calculate lightness and darkness values at regular intervals
        $lightness_values = array();
        $darkness_values = array();
        for ($i = 1; $i <= 4; $i++) { // 4 levels for both lightness and darkness
            $lightness_value = $lightness + $lightness_step_size * $i;
            $darkness_value = $min_darkness + $darkness_step_size * $i;
            $lightness_values[] = "hsl($hue, $saturation%, $lightness_value%)";
            $darkness_values[] = "hsl($hue, $saturation%, $darkness_value%)";
        }

        // Calculate transparency values for the original HSL color
        $transparency_values = array();
        for ($i = 1; $i <= 9; $i++) { // 9 levels for transparency
            $transparency_value = $i * 10;
            $transparency_values[] = "hsla($hue, $saturation%, $lightness%, 0.$transparency_value)";
        }

        return array($lightness_values, $darkness_values, $transparency_values);
    }


    //Listing
    $original_hsl1 = $primarycolor;
    $original_hsl2 = $secondarycolor;
    $original_hsl3 = $tertiarycolor;
    $max_lightness = 98;
    $min_darkness = 18;


    // Primary Color Listing
    list($lightness_values1, $darkness_values1, $transparency_values1) = calculate_lightness_and_darkness_steps($original_hsl1, $max_lightness, $min_darkness);
    // Secondary Color Listing
    list($lightness_values2, $darkness_values2, $transparency_values2) = calculate_lightness_and_darkness_steps($original_hsl2, $max_lightness, $min_darkness);
    // Tertiary Color Listing
    list($lightness_values3, $darkness_values3, $transparency_values3) = calculate_lightness_and_darkness_steps($original_hsl3, $max_lightness, $min_darkness);

    //Transparency Generator
    $color = $darkmodecolor;
    $transparency_levels = array();

    for ($i = 1; $i <= 9; $i++) {
        $alpha = round($i * 0.1, 1);
        $transparency_levels[$i] = str_replace(")", ", $alpha)", $color);
    }

    list($hue, $saturation, $start_lightness) = sscanf($color, "hsl(%d, %d%%, %d%%)");
    $end_lightness = 35;

    $num_levels = 5;
    $step_size = ($end_lightness - $start_lightness) / $num_levels;

    $darkness_levels = array();
    for ($i = 0; $i <= $num_levels; $i++) {
        $level = round(max(0, min(100, $start_lightness + $i * $step_size)), 1);
        $darkness_levels[$i] = "hsl($hue, $saturation%, $level%)";
    }









    ?>






    <style>
        :root {
            /* Desktop Font Sizes */
            <?php foreach ($fontSizesDesktop as $sizeName => $sizeValue) : ?>--font-<?php echo $sizeName; ?>-desktop: <?php echo round($sizeValue, 3); ?>px;
            <?php endforeach; ?>
            /* Mobile Font Sizes */
            <?php foreach ($fontSizesMobile as $sizeName => $sizeValue) : ?>--font-<?php echo $sizeName; ?>-mobile: <?php echo round($sizeValue, 3); ?>px;
            <?php endforeach; ?>
            /* Fluid Font */
            --font-xxs: clamp(var(--font-xxs-mobile), <?php echo $fontClampPreferValue['fontPreferXxs']; ?>, var(--font-xxs-desktop));
            --font-xs: clamp(var(--font-xs-mobile), <?php echo $fontClampPreferValue['fontPreferXs']; ?>, var(--font-xs-desktop));
            --font-sm: clamp(var(--font-s-mobile), <?php echo $fontClampPreferValue['fontPreferS']; ?>, var(--font-s-desktop));
            --font-base: clamp(var(--font-base-mobile), <?php echo $fontClampPreferValue['fontPreferBase']; ?>, var(--font-base-desktop));
            --font-md: clamp(var(--font-m-mobile), <?php echo $fontClampPreferValue['fontPreferM']; ?>, var(--font-m-desktop));
            --font-lg: clamp(var(--font-l-mobile), <?php echo $fontClampPreferValue['fontPreferL']; ?>, var(--font-l-desktop));
            --font-xl: clamp(var(--font-xl-mobile), <?php echo $fontClampPreferValue['fontPreferXl']; ?>, var(--font-xl-desktop));
            --font-xxl: clamp(var(--font-xxl-mobile), <?php echo $fontClampPreferValue['fontPreferXxl']; ?>, var(--font-xxl-desktop));
            --font-xxxl: clamp(var(--font-xxxl-mobile), <?php echo $fontClampPreferValue['fontPreferXxxl']; ?>, var(--font-xxxl-desktop));
            --font-lead: clamp(var(--font-xxxxl-mobile), <?php echo $fontClampPreferValue['fontPreferXxxxl']; ?>, var(--font-xxxxl-desktop));
            --line-height: <?php echo $line_height_paragraph; ?>;
            --line-height-heading: <?php echo $line_height_heading; ?>;





            /* Layout */
            --header-height: <?php echo $header_height ?>px;
            --header-height-on-mobile: <?php echo $header_height_mobile ?>px;
            --container-size: <?php echo $container_size; ?>px;
            --side-padding: <?php echo $side_padding; ?>px;



            /* Color Slate */
            --slate-100: <?php echo $slate_100; ?>;
            --slate-200: <?php echo $slate_200; ?>;
            --slate-300: <?php echo $slate_300; ?>;
            --slate-400: <?php echo $slate_400; ?>;
            --slate-500: <?php echo $slate_500; ?>;
            --slate-600: <?php echo $slate_600; ?>;
            --slate-700: <?php echo $slate_700; ?>;
            --slate-800: <?php echo $slate_800; ?>;
            --slate-900: <?php echo $slate_900; ?>;

            /* Color Theme */
            --primary-100: <?php echo $lightness_values1[3]; ?>;
            --primary-200: <?php echo $lightness_values1[2]; ?>;
            --primary-300: <?php echo $lightness_values1[1]; ?>;
            --primary-400: <?php echo $lightness_values1[0]; ?>;
            --primary-500: <?php echo $original_hsl1; ?>;
            --primary-600: <?php echo $darkness_values1[3]; ?>;
            --primary-700: <?php echo $darkness_values1[2]; ?>;
            --primary-800: <?php echo $darkness_values1[1]; ?>;
            --primary-900: <?php echo $darkness_values1[0]; ?>;

            --primary-opacity-90: <?php echo $transparency_values1[8]; ?>;
            --primary-opacity-80: <?php echo $transparency_values1[7]; ?>;
            --primary-opacity-70: <?php echo $transparency_values1[6]; ?>;
            --primary-opacity-60: <?php echo $transparency_values1[5]; ?>;
            --primary-opacity-50: <?php echo $transparency_values1[4]; ?>;
            --primary-opacity-40: <?php echo $transparency_values1[3]; ?>;
            --primary-opacity-30: <?php echo $transparency_values1[2]; ?>;
            --primary-opacity-20: <?php echo $transparency_values1[1]; ?>;
            --primary-opacity-10: <?php echo $transparency_values1[0]; ?>;

            --secondary-100: <?php echo $lightness_values2[3]; ?>;
            --secondary-200: <?php echo $lightness_values2[2]; ?>;
            --secondary-300: <?php echo $lightness_values2[1]; ?>;
            --secondary-400: <?php echo $lightness_values2[0]; ?>;
            --secondary-500: <?php echo $original_hsl2; ?>;
            --secondary-600: <?php echo $darkness_values2[3]; ?>;
            --secondary-700: <?php echo $darkness_values2[2]; ?>;
            --secondary-800: <?php echo $darkness_values2[1]; ?>;
            --secondary-900: <?php echo $darkness_values2[0]; ?>;

            --secondary-opacity-90: <?php echo $transparency_values2[8]; ?>;
            --secondary-opacity-80: <?php echo $transparency_values2[7]; ?>;
            --secondary-opacity-70: <?php echo $transparency_values2[6]; ?>;
            --secondary-opacity-60: <?php echo $transparency_values2[5]; ?>;
            --secondary-opacity-50: <?php echo $transparency_values2[4]; ?>;
            --secondary-opacity-40: <?php echo $transparency_values2[3]; ?>;
            --secondary-opacity-30: <?php echo $transparency_values2[2]; ?>;
            --secondary-opacity-20: <?php echo $transparency_values2[1]; ?>;
            --secondary-opacity-10: <?php echo $transparency_values2[0]; ?>;

            --tertiary-100: <?php echo $lightness_values3[3]; ?>;
            --tertiary-200: <?php echo $lightness_values3[2]; ?>;
            --tertiary-300: <?php echo $lightness_values3[1]; ?>;
            --tertiary-400: <?php echo $lightness_values3[0]; ?>;
            --tertiary-500: <?php echo $original_hsl3; ?>;
            --tertiary-600: <?php echo $darkness_values3[3]; ?>;
            --tertiary-700: <?php echo $darkness_values3[2]; ?>;
            --tertiary-800: <?php echo $darkness_values3[1]; ?>;
            --tertiary-900: <?php echo $darkness_values3[0]; ?>;

            --tertiary-opacity-90: <?php echo $transparency_values3[8]; ?>;
            --tertiary-opacity-80: <?php echo $transparency_values3[7]; ?>;
            --tertiary-opacity-70: <?php echo $transparency_values3[6]; ?>;
            --tertiary-opacity-60: <?php echo $transparency_values3[5]; ?>;
            --tertiary-opacity-50: <?php echo $transparency_values3[4]; ?>;
            --tertiary-opacity-40: <?php echo $transparency_values3[3]; ?>;
            --tertiary-opacity-30: <?php echo $transparency_values3[2]; ?>;
            --tertiary-opacity-20: <?php echo $transparency_values3[1]; ?>;
            --tertiary-opacity-10: <?php echo $transparency_values3[0]; ?>;



            /* Color Dark Mode */
            --dark-mode-900: <?php echo $dm_slate_900 ?>;
            --dark-mode-800: <?php echo $dm_slate_800 ?>;
            --dark-mode-700: <?php echo $dm_slate_700 ?>;
            --dark-mode-600: <?php echo $dm_slate_600 ?>;
            --dark-mode-500: <?php echo $dm_slate_500 ?>;
            --dark-mode-400: <?php echo $dm_slate_400; ?>;
            --dark-mode-300: <?php echo $dm_slate_300 ?>;
            --dark-mode-200: <?php echo $dm_slate_200; ?>;
            --dark-mode-100: <?php echo $dm_slate_100; ?>;

            --dark-mode-opacity-10: <?php echo $transparency_levels[1]; ?>;
            --dark-mode-opacity-20: <?php echo $transparency_levels[2]; ?>;
            --dark-mode-opacity-30: <?php echo $transparency_levels[3]; ?>;
            --dark-mode-opacity-40: <?php echo $transparency_levels[4]; ?>;
            --dark-mode-opacity-50: <?php echo $transparency_levels[5]; ?>;
            --dark-mode-opacity-60: <?php echo $transparency_levels[6]; ?>;
            --dark-mode-opacity-70: <?php echo $transparency_levels[7]; ?>;
            --dark-mode-opacity-80: <?php echo $transparency_levels[8]; ?>;
            --dark-mode-opacity-90: <?php echo $transparency_levels[9]; ?>;



            /* Spacing */
            /* Desktop Spacing Sizes */
            <?php foreach ($spacingSizesDesktop as $sizeName => $sizeValue) : ?>--spacing-<?php echo $sizeName; ?>-desktop: <?php echo round($sizeValue, 3); ?>px;
            <?php endforeach; ?>
            /* Mobile Spacing Sizes */
            <?php foreach ($spacingSizesMobile as $sizeName => $sizeValue) : ?>--spacing-<?php echo $sizeName; ?>-mobile: <?php echo round($sizeValue, 3); ?>px;
            <?php endforeach; ?>
            /* Spacing Variables */
            --space-xs: clamp(var(--spacing-xs-mobile), <?php echo $spacingClampPreferValue['spacingPreferXs']; ?>, var(--spacing-xs-desktop));
            --space-s: clamp(var(--spacing-s-mobile), <?php echo $spacingClampPreferValue['spacingPreferS']; ?>, var(--spacing-s-desktop));
            --space-base: clamp(var(--spacing-base-mobile), <?php echo $spacingClampPreferValue['spacingPreferBase']; ?>, var(--spacing-base-desktop));
            --space-m: clamp(var(--spacing-m-mobile), <?php echo $spacingClampPreferValue['spacingPreferM']; ?>, var(--spacing-m-desktop));
            --space-l: clamp(var(--spacing-l-mobile), <?php echo $spacingClampPreferValue['spacingPreferL']; ?>, var(--spacing-l-desktop));
            --space-xl: clamp(var(--spacing-xl-mobile), <?php echo $spacingClampPreferValue['spacingPreferXl']; ?>, var(--spacing-xl-desktop));
            --space-xxl: clamp(var(--spacing-xxl-mobile), <?php echo $spacingClampPreferValue['spacingPreferXxl']; ?>, var(--spacing-xxl-desktop));
            --space-xxxl: clamp(var(--spacing-xxxl-mobile), <?php echo $spacingClampPreferValue['spacingPreferXxxl']; ?>, var(--spacing-xxxl-desktop));

            /* Animation Variable */
            --duration-base: <?php echo $speed_base; ?>s;
            --duration-slowest: <?php echo $speed_slowest; ?>s;
            --duration-slow: calc((var(--duration-base) + var(--duration-slowest)) / 2);
            --duration-fastest: <?php echo $speed_fastest; ?>s;
            --duration-fast: calc((var(--duration-base) + var(--duration-fastest)) / 2);


            --delay-gradual-base: <?php echo $delay_base; ?>s;
        }

        .social-facebook {
            <?php if ($facebook == 0) {
                echo $display_none;
            } else {
                echo '';
            } ?>
        }

        .social-instagram {
            <?php if ($instagram == 0) {
                echo $display_none;
            } else {
                echo 'hahaha';
            } ?>
        }

        .social-twitter {
            <?php if ($twitter == 0) {
                echo $display_none;
            } else {
                echo '';
            } ?>
        }

        .social-youtube {
            <?php if ($youtube == 0) {
                echo $display_none;
            } else {
                echo '';
            } ?>
        }

        .social-linkedin {
            <?php if ($linkedin == 0) {
                echo $display_none;
            } else {
                echo '';
            } ?>
        }

        .social-whatsapp {
            <?php if ($whatsapp == 0) {
                echo $display_none;
            } else {
                echo '';
            } ?>
        }

        .social-telegram {
            <?php if ($telegram == 0) {
                echo $display_none;
            } else {
                echo '';
            } ?>
        }

        .social-tiktok {
            <?php if ($tiktok == 0) {
                echo $display_none;
            } else {
                echo '';
            } ?>
        }

        .social-discord {
            <?php if ($discord == 0) {
                echo $display_none;
            } else {
                echo '';
            } ?>
        }

        .social-github {
            <?php if ($github == 0) {
                echo $display_none;
            } else {
                echo '';
            } ?>
        }
    </style>


    <script>
        // Animation Framework Start //

        // Function to initialize the Intersection Observer
        const initIntersectionObserver = () => {
            // Get all elements with the "animate" class
            const elements = document.querySelectorAll(".animate");

            // Callback function for the Intersection Observer
            const handleIntersection = (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // Add the "visible" class to trigger the animation
                        entry.target.classList.add("visible");

                        // We don't stop observing the element, so the animation can play again on subsequent scrolls
                        // observer.unobserve(entry.target);
                    } else {
                        // If the element is not intersecting, remove the "visible" class to reset the animation
                        entry.target.classList.remove("visible");
                    }
                });
            };

            // Create the Intersection Observer instance
            const observer = new IntersectionObserver(handleIntersection, {
                threshold: 0.5, // Adjust this value to control when the animations trigger
            });

            // Observe all elements with the "animate" class
            elements.forEach((element) => {
                observer.observe(element);
            });
        };

        // Add event listener for the "load" event
        window.addEventListener("load", initIntersectionObserver);

        // Animation Framework End //
    </script>
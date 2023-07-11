<?php
$font_base_desktop = get_field('font_base_size_on_desktop', 'option');
$line_height_desktop = get_field('line_height_on_desktop', 'option');
$font_base_mobile = get_field('font_base_size_on_mobile', 'option');
$line_height_mobile = get_field('line_height_on_mobile', 'option');
$font_scale_desktop = get_field('font_scale_on_desktop', 'option');
$font_scale_mobile = get_field('font_scale_on_mobile', 'option');
$primary = get_field('default_theme_primary_color', 'option');
$secondary = get_field('default_theme_secondary_color', 'option');
$tertiary = get_field('default_theme_accent_color', 'option');
$slate_100 = get_field('default_theme_lightest_background_color', 'option');
$slate_200 = get_field('default_theme_light_background_color', 'option');
$slate_300 = get_field('default_theme_gray_light_background_color', 'option');
$slate_400 = get_field('default_theme_gray_background_color', 'option');
$slate_500 = get_field('default_theme_disabled_text_color', 'option');
$slate_600 = get_field('default_theme_base_text_color', 'option');
$slate_700 = get_field('default_theme_base_text_color_medium', 'option');
$slate_800 = get_field('default_theme_heading_base_color', 'option');
$slate_900 = get_field('default_theme_heading_base_color_medium', 'option');


$dm_slate_100 = get_field('dark_mode_gray_background_color_on_dark_mode', 'option');
$dm_slate_200 = get_field('dark_mode_gray_dark_background_color_on_dark_mode', 'option');
$dm_slate_300 = get_field('dark_mode_dark_background_color_on_dark_mode', 'option');
$dm_slate_400 = get_field('dark_mode_darkest_background_color_on_dark_mode', 'option');
$dm_slate_500 = get_field('dark_mode_disabled_text_color_on_dark_mode', 'option');
$dm_slate_600 = get_field('dark_mode_base_text_color_on_dark_mode', 'option');
$dm_slate_700 = get_field('dark_mode_base_text_color_medium_on_dark_mode', 'option');
$dm_slate_800 = get_field('dark_mode_heading_base_color_on_dark_mode', 'option');
$dm_slate_900 = get_field('dark_mode_heading_base_color_medium_on_dark_mode', 'option');


$header_effects = get_field('header_effects', 'option');
$container_size = get_field('maximum_content_width', 'option');
$side_padding = get_field('content_side_padding', 'option');
$space_desktop = get_field('content_spacing_on_desktop', 'option');
$space_mobile = get_field('content_spacing_on_mobile', 'option');
?>




<style>
    :root {
        --font-base-desktop: <?php echo $font_base_desktop; ?>;
        --line-height-desktop: <?php echo $line_height_desktop; ?>;
        --font-base-mobile: <?php echo $font_base_mobile; ?>;
        --line-height-mobile: <?php echo $line_height_mobile; ?>;
        --font-scale-desktop: <?php echo $font_scale_desktop; ?>;
        --font-scale-mobile: <?php echo $font_scale_mobile; ?>;
        --primary: <?php echo $primary; ?>;
        --secondary: <?php echo $secondary; ?>;
        --tertiary: <?php echo $tertiary; ?>;
        --slate-600: <?php echo $slate_600; ?>;
        --slate-700: <?php echo $slate_700; ?>;
        --slate-800: <?php echo $slate_800; ?>;
        --slate-900: <?php echo $slate_900; ?>;
        --slate-500: <?php echo $slate_500; ?>;
        --slate-100: <?php echo $slate_100; ?>;
        --slate-200: <?php echo $slate_200; ?>;
        --slate-300: <?php echo $slate_300; ?>;
        --slate-400: <?php echo $slate_400; ?>;
        --dm_slate_600: <?php echo $dm_slate_600; ?>;
        --dm_slate_700: <?php echo $dm_slate_700; ?>;
        --dm_slate_800: <?php echo $dm_slate_800; ?>;
        --dm_slate_900: <?php echo $dm_slate_900; ?>;
        --dm_slate_500: <?php echo $dm_slate_500; ?>;
        --dm_slate_400: <?php echo $dm_slate_400; ?>;
        --dm_slate_300: <?php echo $dm_slate_300; ?>;
        --dm_slate_200: <?php echo $dm_slate_200; ?>;
        --dm_slate_100: <?php echo $dm_slate_100; ?>;
        --header-effects: <?php echo $header_effects; ?>;
        --container-size: <?php echo $container_size; ?>;
        --side-padding: <?php echo $side_padding; ?>;
        --space-desktop: <?php echo $space_desktop; ?>;
        --space-mobile: <?php echo $space_mobile; ?>;
    }
</style>
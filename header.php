<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name='robots' content='noindex, nofollow' />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" sizes="32x32">
    <title><?php echo esc_html( get_the_title() ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php get_template_part('views/overall/header-html'); ?>


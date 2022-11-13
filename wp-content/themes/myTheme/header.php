<?php
/**
 * Header template
 *
 * @package myTheme
 */

?>


<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset=<?php bloginfo(show: 'charset'); ?> >
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo(show: 'pingback_url'); ?>">
    <title><?php bloginfo(show: 'name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>

<?php myNav_menue(); ?>


<header>Header</header>
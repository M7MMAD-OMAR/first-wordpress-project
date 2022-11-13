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




<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php myNav_menue(); ?>

            </div>
        </div>
    </nav>
</header>





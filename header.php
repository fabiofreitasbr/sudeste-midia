<!DOCTYPE html>
<html lang="en" class="">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_title('-'); ?></title>
    <link href="<?php echo get_bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/d2ec30afa6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.4.1/dist/js/splide-extension-grid.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <?php wp_head(); ?>
	<?php flush(); ?>
</head>
<body class="antialiased">
	<?php get_template_part('templates/estrutura/part', 'header'); ?>
	<?php  if (!is_front_page()) { get_template_part('templates/estrutura/part', 'header-title'); } ?>
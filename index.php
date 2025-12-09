<?php get_header(); ?>
<main>
    <?php 
    get_template_part('templates/home/home', 'banner');
    get_template_part('templates/home/home', 'sobre');
    get_template_part('templates/home/home', 'servicos');
    get_template_part('templates/home/home', 'clientes');
    get_template_part('templates/home/home', 'contato');
    ?>
</main>
<?php get_footer(); ?>
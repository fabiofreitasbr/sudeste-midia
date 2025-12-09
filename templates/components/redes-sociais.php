ts<?php

$cor    = $args['cor'] ?? 'text-white';
$hover  = $args['hover'] ?? 'hover:text-orange-500';
$estilo = $args['estilo'] ?? 'flex flex-row gap-6';

$contentRedes = [
    [
        'link' => 'https://instagram.com/',
        'icon' => 'fab fa-instagram',
    ],
    [
        'link' => 'https://facebook.com/',
        'icon' => 'fab fa-location-dot',
    ],
    
];
?>

<div class="<?php echo esc_attr("$cor $estilo space-x-2 sm:space-x-4 justify-end items-end lg:justify-start"); ?>">
    <?php foreach ($contentRedes as $rede): ?>
        <div>
            <a href="<?php echo esc_url($rede['link']); ?>" target="_blank" rel="noopener noreferrer">
                <i class="<?php echo esc_attr($rede['icon']); ?> w-5 h-5 sm:w-6 sm:h-6 lg:w-6 lg:h-6 2xl:w-12 2xl:h-12 transition-all <?php echo esc_attr($hover); ?>"></i>
            </a>
        </div>
    <?php endforeach; ?>
</div>

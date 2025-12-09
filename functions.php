<?php

require_once 'inc/load.php';

/* Links */
$argVar = array(
    'titleSite' => 'Sudeste Mídia',

    'email' => 'mailto:contato@sudestemidia.com.br',
    'emailShow' => 'contato@sudestemidia.com.br',

    'phone' => 'tel:+5521982012209',
    'phoneShow' => '(21) 98201-2209',

    'whatsapp' => 'https://wa.me/5521982012209',
    'whatsappShow' => '(21) 98201-2209',

    'facebook' => 'https://www.facebook.com',
    'facebookShow' => '',

    'linkedin' => 'https://www.linkedin.com/company/',
    'linkedinShow' => '',

    'instagram' => 'https://www.instagram.com/',
    'instagramShow' => '',

    'youtube' => 'https://www.youtube.com/',
    'youtubeShow' => '',

    'site' => '',
    'siteShow' => '',

    'maps' => 'https://maps.app.goo.gl/6sEZ5vW6L18dThQt7',
    'address1' => 'R. Alice, 160 - Laranjeiras, ',
    'address2' => ' Rio de Janeiro - RJ, 22241-020',
);

InfoVar::save($argVar);

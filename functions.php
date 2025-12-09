<?php

require_once 'inc/load.php';

/* Links */
$argVar = array(
    'titleSite' => 'Sudeste Mídia',

    'email' => 'mailto:contato@sudestemidia.com.br',
    'emailShow' => 'contato@sudestemidia.com.br',

    'phone' => 'tel:+5521999999999',
    'phoneShow' => '(21) 99999-9999',

    'whatsapp' => 'https://wa.me/5521999999999',
    'whatsappShow' => '(21) 99999-9999',

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

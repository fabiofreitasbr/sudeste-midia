<?php

function contentClientes()
{
    $contentClientes = [
        ["slug" => "Bobs", "img" => get_template_directory_uri() . "/img/logo/bobs.png",],
        ["slug" => "Coral", "img" => get_template_directory_uri() . "/img/logo/coral.png",],
        ["slug" => "Venancio", "img" => get_template_directory_uri() . "/img/logo/venancio.png",],
        ["slug" => "Ibmr", "img" => get_template_directory_uri() . "/img/logo/ibmr.png",],
        ["slug" => "Pixbet", "img" => get_template_directory_uri() . "/img/logo/pix.png",],
        ["slug" => "Oboticario", "img" => get_template_directory_uri() . "/img/logo/o-boticario.png",],
        ["slug" => "TeatroClaro", "img" => get_template_directory_uri() . "/img/logo/teatro.png",],
    ];
    return $contentClientes;
}

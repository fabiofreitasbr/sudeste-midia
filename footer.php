<?php

$template_uri = get_template_directory_uri();
$logo_footer = $template_uri . '/img/logo_footer.png';

?>
<footer class="bg-indigo-900 pt-10 pb-3 relative">
    <div class="container mx-auto px-4 text-black">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 lg:text-left pb-6 lg:gap-x-10 text-center justify-center place-items-center lg:place-items-start">

           <div class="w-full my-4">
                <img src="<?php echo esc_url($logo_footer); ?>" alt="Logo Alana Oliveira" class="w-2/3 mx-auto" />
            </div>

            <!-- Menu -->
            <div class="my-3">
                <div class="mb-4 border-b-2 border-orange-500 w-10">
                    <h3 class="text-white text-base md:text-2xl font-bold py-2 uppercase">Menu</h3>
                </div>
                <ul class="flex flex-col text-xs font-light 2xl:text-lg">
                    <li class="py-2"><a href="<?php echo get_bloginfo('url'); ?>" class="text-white hover:text-orange-500 uppercase">Início</a></li>
                    <li class="py-2"><a href="#quemsomos" class="text-white hover:text-orange-500 uppercase">Quem Somos</a></li>
                    <li class="py-2"><a href="#servicos" class="text-white hover:text-orange-500 uppercase">Produtos</a></li>
                    <li class="py-2"><a href="#contato" class="text-white hover:text-orange-500 uppercase">Contato</a></li>
                </ul>
            </div>

            <!-- Contato -->
            <div class="my-3 col-span-1">
                <div class="mb-4 border-b-2 border-orange-500 w-10">
                    <h3 class="text-white text-base md:text-2xl font-bold py-2 uppercase">Contato</h3>
                </div>
                <ul class="flex flex-col text-xs font-light 2xl:text-lg gap-4">
                    <a href=<?php echo InfoVar::show('email'); ?> target="_blank">
                        <div class="flex justify-start items-center gap-2 text-white hover:text-orange-500 text-xs md:text-base xl:text-xl">
                            <div><i class="fa fa-envelope w-4 h-4 sm:w-6 sm:h-6 2xl:w-7 2xl:h-7"></i></div>
                            <div><?php echo esc_html(InfoVar::show('emailShow')); ?></div>
                        </div>
                    </a>
                    <a href=<?php echo InfoVar::show('phone'); ?> target="_blank">
                        <div class="flex justify-start items-center gap-2 text-white hover:text-orange-500 text-xs md:text-base lg:text-lg xl:text-xl">
                            <div><i class="fa fa-phone w-4 h-4 sm:w-6 sm:h-6 2xl:w-7 2xl:h-7"></i></div>
                            <div><?php echo esc_html(InfoVar::show('phoneShow')); ?></div>
                        </div>
                    </a>
                    <a href=<?php echo InfoVar::show('whatsapp'); ?> target="_blank">
                        <div class="flex justify-start items-center gap-2 text-white hover:text-orange-500 text-xs md:text-base lg:text-lg xl:text-xl">
                            <div><i class="fa fa-whatsapp w-4 h-5 sm:w-6 sm:h-6 2xl:w-7 2xl:h-7"></i></div>
                            <div><?php echo esc_html(InfoVar::show('whatsappShow')); ?></div>
                        </div>
                    </a>
                </ul>
            </div>

            <!-- Redes Sociais -->
            <div class="my-3 col-span-1">
                <div class="mb-4 border-b-2 border-orange-500 w-10 whitespace-nowrap">
                    <h3 class="text-white text-base md:text-2xl font-normal py-2 uppercase">Redes Sociais</h3>
                </div>
                <div>
                    <div class="flex flex-row justify-center gap-3 lg:gap-6 text-white ">
                        <a href="" target="_blank"><i class="fa fa-instagram hover:text-orange-500 text-2xl"></i></a>
                        <a href=href="<?php echo InfoVar::show('maps'); ?>" target="_blank"><i class="fa fa-location-dot hover:text-orange-500 text-2xl"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<div class="py-2 font-normal bg-orange-500 flex place-items-center justify-center text-white uppercase text-center text-xs md:text-base">
    <p>sudeste mídia - todos os direitos reservados</p>
</div>
<?php wp_footer(); ?>
</body>
</html>
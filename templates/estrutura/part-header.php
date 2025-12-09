<header
    class="absolute w-full  py-3 md:py-6 z-50 <?php echo is_front_page() ? 'absolute' : 'relative bg-indigo-900'; ?>">
    <div class="container mx-auto px-4">
        <div class="flex flex-row justify-between items-center h-auto">
            <div class="logo z-20 ">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_sudeste.png" class="h-12 md:bottom-2 md:h-12 lg:h-16 w-auto xl:h-full" alt="Logo - Sudeste Mídia" />
                </a>
            </div>
            <nav class=" flex items-center gap-x-4 lg:gap-x-10 ">
                <ul class="hidden md:flex gap-2  lg:gap-6 2xl:gap-8 text-xs md:text-base lg:text-lg xl:text-xl 2xl:text-2xl font-normal">
                    <li>
                        <a href="#" class="text-white hover:text-indigo-900">
                            Início
                        </a>
                    </li>
                    <li>
                        <a
                            href="#quemsomos"
                            class="text-white hover:text-indigo-900">
                            Quem Somos
                        </a>
                    </li>
                    <li class="">
                        <a
                            href="#servicos"
                            class="text-white hover:text-indigo-900">
                            Serviços
                        </a>
                    </li>
                    <li>
                        <a
                            href="#clientes"
                            class="text-white hover:text-indigo-900">
                            Marcas
                        </a>
                    </li>
                    <li>
                        <a
                            href="#contato"
                            class="text-white hover:text-indigo-900">
                            Contato
                        </a>
                    </li>
                    <li>
                    <li>
                        <a href=<?php echo InfoVar::show('whatsapp'); ?> target="_blank">
                            <button class="flex flex-row gap-2 items-center justify-center rounded-full py-1 px-8 md:py-2 md:px-8 xl:py-2 xl:px-8 bg-indigo-900 hover:bg-indigo-950 transition-all text-white text-sm md:text-lg uppercase">
                                <i class="fa fa-phone w-4 h-4 md:w-8 md:h-8  "></i>
                                <span class="hidden xl:block"><?php echo InfoVar::show('whatsappShow'); ?> </span>
                            </button>
                        </a>
                    </li>

                    </li>
                </ul>
                <div class="flex items-center gap-x-4 md:hidden" id="mobile-menu-hamburger">
                    <div class="z-20 block md:hidden">
                        <div class="hamburger hamburger--squeeze">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<nav class="block md:hidden z-40 w-full h-screen bg-indigo-900 fixed top-0 px-6 pt-28 transition-all duration-300 ease-in-out -right-full" id="header-bar-mobile">
    <div class="container mx-auto">
        <ul class="flex flex-col gap-5 xl:gap-10 text-xl font-medium">
            <li class="">
                <a
                    href="#"
                    class="text-white hover:text-indigo-900">
                    Início
                </a>
            </li>
            <li class="">
                <a
                    href="#quemsomos"
                    class="text-white hover:text-indigo-900">
                    Quem Somos
                </a>
            </li>
            <li class="">
                <a
                    href="#servicos"
                    class="text-white hover:text-indigo-900">
                    Serviços
                </a>
            </li>
            <li class="">
                <a
                    href="#clientes"
                    class="text-white hover:text-indigo-900">
                    Clientes
                </a>
            </li>
            <li class="">
                <a
                    href="#contato"
                    class="text-white hover:text-indigo-900">
                    Contato
                </a>
            </li>
        </ul>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.getElementById('mobile-menu-hamburger');
        const mobileMenu = document.getElementById('header-bar-mobile');
        const hamburgerIcon = hamburger.querySelector('.hamburger');

        hamburger.addEventListener('click', function() {
            // alterna o menu
            mobileMenu.classList.toggle('-right-full');
            mobileMenu.classList.toggle('right-0');

            // animação do ícone (se estiver usando hamburgers.css)
            hamburgerIcon.classList.toggle('is-active');
        });
    });
</script>
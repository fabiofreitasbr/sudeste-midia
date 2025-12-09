<?php include get_template_directory() . '/templates/dados/contentClientes.php'; ?>
<?php $clientes = contentClientes(); ?>

<div class="relative ">
    <div class="py-6 md:py-16 mx-0 bg-orange-500 relative" id="clientes">
        <div class="text-white text-center text-2xl md:text-3xl lg:text-4xl 2xl:text-5xl font-bold">
            Clientes
        </div>

        <div class="container mx-auto px-4  relative">
            <section class="splide py-10 md:py-16" aria-label="Clientes">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($clientes as $serviceSingle): ?>
                            <li class="splide__slide bg-white rounded-lg p-6 md:w-[8rem] md:h-[10rem] flex justify-center items-center">
                                <img src="<?= $serviceSingle['img']; ?>" alt="<?= $serviceSingle['slug']; ?>" class="md:w-100" />
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>

        </div>
    </div>
    <!-- Botões laterais -->
    <button class=" splide__arrow--prev absolute -left-4 top-1/2 -translate-y-1/2  text-indigo-900 transition">
        <i class="fa fa-chevron-left w-5 h-5"></i>
    </button>

    <button class=" splide__arrow--next absolute -right-4 top-1/2 -translate-y-1/2 text-indigo-900 transition">
        <i class="fa fa-chevron-right w-5 h-5"></i>
    </button>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('.splide', {
            type: 'loop',
            perMove: 1,
            perPage: 7,
            type: "loop",
            gap: '4rem',
            arrows: false,
            autoplay: true,
            breakpoints: {
                500: {
                    perPage: 2.5
                },
                640: {
                    perPage: 2.5
                },
                768: {
                    perPage: 3
                },
                1024: {
                    perPage: 4
                },
                1536: {
                    perPage: 5
                },
            },
        }).mount();
    });
</script>
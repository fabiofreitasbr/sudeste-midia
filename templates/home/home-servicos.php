<?php include get_template_directory() . '/templates/dados/contentMidias.php'; ?>

<div class="bg-indigo-900 h-full py-6 lg:py-20 relative" id="servicos">
    <div class="container mx-auto px-4 relative">
        <div class="text-white mb-6 md:mb-10 text-center text-2xl md:text-3xl lg:text-4xl 2xl:text-5xl font-bold">
            Nossos Serviços
        </div>

        <div class="w-full">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 md:grid-cols-6 gap-4  2xl:gap-8 px-2 md:justify-between text-lg md:text-xl lg:text-base xl:text-xl lg:mx-[6rem]">
                <?php foreach (array_slice($contentMidias, 0, 12) as $serviceSingle): ?>
                    <div class="relative">
                        <img src="<?= $serviceSingle['img']; ?>" alt="<?= $serviceSingle['slug']; ?>" class="w-full" />
                        <div class="absolute inset-0 flex items-end justify-center">
                            <div class="text-center text-sm md:text-xs xl:text-base p-1 md:p-2 2xl:p-4 font-semibold text-wrap text-indigo-900 mb-0 sm:mb-4 md:mb-0">
                                <?= $serviceSingle['text']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="flex items-center justify-center mt-5 lg:mt-10">
                <div>
                    <a href="<?= $ContentLinks['whatsapp']; ?>" target="_blank">
                        <button class="flex flex-row gap-2 items-center rounded-full py-1 px-4 md:py-2 md:px-12 bg-white text-orange-500 text-lg font-medium">
                            Quero Conhecer
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$template_uri = get_template_directory_uri();
?>

<div class=" bg-cover bg-center bg-no-repeat bg-size h-[30rem] sm:h-[28rem] md:h-[32rem] lg:h-[30rem] xl:h-[38rem] 2xl:h-[50rem] relative flex items-center" style="background-image: url('<?php echo $template_uri; ?>/img/banner-principal.png');">

    <div class="absolute bottom-0 md:bottom-auto top-0 md:h-full w-full flex justify-center md:justify-start md:items-center md:pl-4 lg:pl-6 xl:pl-8">

        <div class="text-white flex flex-row md:flex-col md:absolute gap-6 mb-6 md:mb-0  space-x-2 sm:space-x-4 justify-end items-end lg:justify-start ">
            <a href="<?php echo InfoVar::show('instagram'); ?>" target="_blank"><i class="fa fa-instagram hover:text-orange-500 text-2xl"></i></a>
            <a href=href="<?php echo InfoVar::show('maps'); ?>" target="_blank"><i class="fa fa-location-dot hover:text-orange-500 text-2xl"></i></a>
        </div>
    </div>

    <div class="container mx-auto px-4 relative">
        <div class="flex flex-col gap-10 md:gap-10 items-center md:my-10 md:mt-24 w-auto">

            <div class="flex flex-row gap-2 items-center justify-center py-2 px-8 md:py-2 md:px-12 text-white bg-indigo-900 text-base md:text-4xl font-bold">
                <p class="text-center">
                    Publicidade e Marketing
                </p>
            </div>

            <div>
                <div class="text-white text-center font-light text-sm sm:text-xl lg:text-2xl 2xl:text-3xl md:w-2/3 mx-auto px-4 sm:px-10 md:px-0">
                    Onde <span class="font-bold">ideias</span> ganham
                    <span class="font-bold"> forma</span> e a
                    <span class="font-bold"> publicidade</span> conecta o
                    <span class="font-bold"> mundo</span>.
                </div>
            </div>

            <div>
                <a href=<?php echo InfoVar::show('whatsapp'); ?>  target="_blank">
                    <button class="flex flex-row gap-2 items-center rounded-full py-2 px-8 md:py-2 md:px-12 text-indigo-900 bg-white text-base md:text-lg uppercase font-medium">
                        saiba Mais
                    </button>
                </a>
            </div>

        </div>
    </div>
</div>
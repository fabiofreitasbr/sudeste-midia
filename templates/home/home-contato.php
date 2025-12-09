<div class="bg-white relative">
    <section id="contato" class="py-8 md:py-16">
        <div class="container mx-auto px-4">
            <div class="text-indigo-900 py-6 md:py-10 text-center text-2xl md:text-3xl lg:text-4xl 2xl:text-5xl font-bold">Contato</div>
            <div class="md:flex gap-x-8 text-black">
                <div class="w-full md:w-1/2 ">
                    <div class="bg-white text-center md:text-left p-6 md:p-8 lg:p-10 w-full shadow-xl rounded-xl mt-4">
                        <h3 class="font-medium pb-4 text-sm md:text-lg lg:text-3xl text-indigo-900 ">Entre em contato conosco</h3>
                        <?php echo do_shortcode('[contact-form-7 id="61e2cd6" title="Contato"]'); ?>
                    </div>
                </div>
                <div class="w-full md:w-1/2 text-black rounded-xl">
                    <div class="text-md md:text-lg p-6 md:p-8 lg:p-10 w-full">
                        <div class="text-sm md:text-lg lg:text-3xl pb-4 text-center md:text-left ">
                            <h3 class="font-bold pb-4  md:uppercase">
                                Será um prazer te atender!
                            </h3>
                            <p class="text-xs md:text-sm lg:text-xl font-normal ">
                                Preencha nosso formulário ou entre em contato para
                                esclarecer suas dúvidas ou fazer um orçamento!
                            </p>
                        </div>
                        <a href="<?php echo InfoVar::show('phone'); ?>" target="_blank">
                            <div class="flex justify-start items-center gap-2 pt-4 pb-6 rounded-lg hover:bg-gray-100 break-all text-black text-xs md:text-base lg:text-xl font-light">
                                <div class="px-2 md:px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="32" height="32" class="text-orange-500 h-6 w-6 md:h-10 md:w-10 xl:h-12 xl:w-12">
                                        <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21c1.21.49 2.53.76 3.88.76a1 1 0 011 1v3.5a1 1 0 01-1 1C10.07 22.24 1.76 13.93 1.76 3a1 1 0 011-1H6.26a1 1 0 011 1c0 1.35.27 2.67.76 3.88a1 1 0 01-.21 1.11l-2.2 2.2z" />
                                    </svg>



                                </div>
                                <div>
                                    <div class="py-1 font-bold uppercase">
                                        Telefone:</div>
                                    <div><?php echo InfoVar::show('phoneShow'); ?></div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank">
                            <div class="flex justify-start items-center gap-2 pt-4 pb-6 rounded-lg hover:bg-gray-100 break-all text-black text-xs md:text-base lg:text-xl font-light">
                                <div class="px-2 md:px-6">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fab"
                                        data-icon="whatsapp"
                                        class="svg-inline--fa fa-whatsapp text-orange-500 h-6 w-6 md:h-10 md:w-10 xl:h-12 xl:w-12" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor"
                                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="py-1 font-bold uppercase">
                                        Whatsapp:</div>
                                    <div><?php echo InfoVar::show('whatsappShow'); ?></div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo InfoVar::show('email'); ?>" target="_blank">
                            <div class="flex justify-start items-center gap-2 pt-4 pb-6 rounded-lg hover:bg-gray-100 break-all text-black text-xs md:text-base lg:text-xl font-light">
                                <div class="px-2 md:px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#f97316" class=" h-6 w-6 md:h-10 md:w-10 xl:h-12 xl:w-12" width="32" height="32">
                                        <path d="M2 6a2 2 0 012-2h16a2 2 0 012 2v0.01L12 13 2 6.01V6zm0 2.2v9.8a2 2 0 002 2h16a2 2 0 002-2V8.2l-10 6.5L2 8.2z" />
                                    </svg>



                                </div>
                                <div>
                                    <div class="py-1 font-semibold uppercase">E-mail:</div>
                                    <div class="font-light text-trueGray-700"><?php echo InfoVar::show('emailShow'); ?></div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo InfoVar::show('maps'); ?>" target="_blank">
                            <div class="flex justify-start items-center gap-2  pt-4 pb-6 rounded-lg hover:bg-gray-100 break-all text-black text-xs md:text-base lg:text-xl font-light">
                                <div class="px-2 md:px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 384 512"
                                        class="h-6 w-6 md:h-10 md:w-10 xl:h-12 xl:w-12 text-orange-500"
                                        aria-hidden="true" role="img">
                                        <path fill="currentColor"
                                            d="M172.268 501.67C26.97 291.031 0 267.962 0 192 0 86 86 0 192 0s192 86 192 192c0 75.962-26.97 99.031-172.268 309.67-11.998 17.09-37.466 17.09-49.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" />
                                    </svg>

                                </div>
                                <div>
                                    <div class="py-1 font-semibold uppercase">Endereço:</div>
                                    <div class="font-light text-trueGray-700"><?php echo InfoVar::show('address1'); ?></div>
                                    <div class="font-light text-trueGray-700"><?php echo InfoVar::show('address2'); ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
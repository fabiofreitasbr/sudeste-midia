document.addEventListener('DOMContentLoaded', function () { 
    const splideResultados = document.getElementById("splideresultados");
    const splideLogos = document.getElementById("splidelogos");
    if (splideResultados && splideLogos) {
        var splideresultados = new Splide('#splideresultados', {
            type: 'loop',
            gap: '6px',
            perPage: 3,
            perMove: 1,
            grid: {
                dimensions: [[2, 1]],
                gap: {
                    row: '6px',
                    col: '6px',
                },
            },
            breakpoints: {
                768: {
                    perPage: 2,
                    grid: {
                        dimensions: [[2, 1]],
                        gap: {
                            row: '6px',
                            col: '6px',
                        },
                    },
                }
            }
        });
        var splide = new Splide('#splidelogos', {
            type: 'loop',
            gap: '15px',
            drag: 'free',
            focus: 'center',
            arrows: false,
            pagination: false,
            perPage: 4,
            autoScroll: {
                pauseOnHover: false,
                pauseOnFocus: false,
                rewind: false,
                speed: 1,
            },
            breakpoints: {
                500: { perPage: 2.5, },
                640: { perPage: 3, },
                768: { perPage: 2.5, },
                1024: { perPage: 2.5, },
                1536: { perPage: 3.5 }
            }
        });

        const splideExtensions = window.splide.Extensions;
        splideresultados.mount({ extesions: splideExtensions.Grid });
        splide.mount({ extesions: splideExtensions.AutoScroll });
    }
});

document.addEventListener('DOMContentLoaded', function () {
  new Splide('.splide', {
    perPage: 7,
    perMove: 1,
    type: 'loop',
    gap: '4rem',
    arrows: false,
    autoplay: true,
    breakpoints: {
      500: { perPage: 2.5 },
      640: { perPage: 2.5 },
      768: { perPage: 3 },
      1024: { perPage: 4 },
      1536: { perPage: 5 },
    },
  }).mount();
});

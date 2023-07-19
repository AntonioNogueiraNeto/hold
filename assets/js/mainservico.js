$(function () {

    $('[js-politica]').attr('href', politica_link);

    $("#agregados .wpcf7-form-control").prop('required', true);
    $("#agregados .wpcf7-form").removeAttr('novalidate');

    $("#agregados .cpf .wpcf7-form-control").prop('required', false);
    $("#agregados .mais-informacoes .wpcf7-form-control").prop('required', false);


    //  $('.wpcf7 form').on('submit', function(){
    //     $(this).trigger('reset'); 
    // });


    // Toggle Menu
    $('[js-toggle-menu]').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).toggleClass('active');
        $('nav').toggleClass('active');
        $('body').toggleClass('not-scroll');
    });



    if ($(window).width() < 991) {

        $('header nav ul [js-data-scroll]').on('click', function () {
            $('nav').removeClass('active');
            $('[js-toggle-menu]').removeClass('active');
            $('body').removeClass('not-scroll');
        });

    }



    $('a.has-sub').on('click', function (e) {
        e.preventDefault();
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).siblings('.sub-menu').removeClass('active');
        } else {
            $('header .sub-menu').removeClass('active');
            $(this).addClass('active');
            $(this).siblings('.sub-menu').addClass('active');
        }

    })


    $('[js-select-release]').on('input', function () {
        let val = $(this).val();
        $('[js-release-ano]').css('display', 'none');
        $('[js-release-ano].' + val).css('display', 'block');
        if ($('[js-release-ano].' + val).length == 0) {
            alert('NÃ£o foram encontrados releases neste ano.');
        }
    })

    $('[js-materia-select]').on('input', function () {
        let val = $(this).val();
        $('[js-materia-ano]').css('display', 'none');
        $('[js-materia-ano].' + val).css('display', 'block');
        if ($('[js-materia-ano].' + val).length == 0) {
            alert('NÃ£o foram encontradas matÃ©rias neste ano.');
        }
    })



    //menu-fixo-topo
    // var menu = $('header').offset().top;
    // $(window).scroll(function () {
    //     if ($(window).scrollTop() > menu) {
    //         $('header').addClass('fixed');
    //     } else {
    //         $('header').removeClass('fixed');
    //     }
    // });



    $('[data-seletor]').on('click', function (e) {
        e.preventDefault();
        let seletor = $(this).attr('data-seletor');
        $('[data-seletor]').removeClass('active');
        $(this).addClass('active');

        $('.bloco-padrao').removeClass('active');
        $('.bloco-padrao.' + seletor).addClass('active');

    });



    $('[js-data-top]').click(function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 600);
    });


    $('[js-data-scroll]').click(function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top - 80 }, 600);
    });

    $("[js-back]").click(function (e) {
        e.preventDefault();
        history.go(-1);
    });


    $('.wpcf7 [type=tel], .wpcf7 [type=email], .wpcf7 [type=text]').attr('autocomplete', 'off');



    //faq
    $('.faq-item .faq-pergunta').on('click', function () {

        let faqItem = $(this).parent('.faq-item');
        if (faqItem.hasClass('active')) {
            faqItem.removeClass('active');
        } else {
            $('.faq-item').removeClass('active');
            faqItem.addClass('active');
        }

    });



    $('#agregados .form-1 [value="Estado*"]').attr('disabled', 'disabled');

    $('#agregados .form-1 form').on('submit', function () {
        $('#agregados .form-1').removeClass('active');
        $('#agregados .form-2').addClass('active');

        $('#agregados .seletor-1').removeClass('active');
        $('#agregados .seletor-1').addClass('verde');
        $('#agregados .seletor-1').html(`<svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5803 0.573876C18.9604 0.201719 19.4663 -0.00402408 19.9912 5.96494e-05C20.5161 0.00414338 21.0189 0.217735 21.3936 0.595765C21.7682 0.973794 21.9854 1.48669 21.9993 2.02623C22.0132 2.56578 21.8227 3.08976 21.468 3.48762L10.6999 17.3348C10.5147 17.5399 10.2912 17.7045 10.0428 17.8187C9.79436 17.9329 9.52608 17.9945 9.25399 17.9996C8.9819 18.0048 8.71158 17.9535 8.45921 17.8488C8.20684 17.7441 7.97759 17.5882 7.78517 17.3903L0.64422 10.0477C0.445356 9.85716 0.285853 9.62739 0.175225 9.37209C0.0645965 9.11679 0.00511014 8.8412 0.000315 8.56175C-0.00448014 8.2823 0.0455143 8.00472 0.147315 7.74557C0.249115 7.48642 0.400637 7.251 0.59284 7.05337C0.785043 6.85574 1.01399 6.69994 1.26602 6.59527C1.51806 6.49059 1.78801 6.43918 2.05979 6.44411C2.33156 6.44904 2.59959 6.51021 2.84787 6.62396C3.09616 6.73772 3.31962 6.90172 3.50492 7.1062L9.15615 12.9143L18.529 0.634927C18.5459 0.613562 18.5639 0.593179 18.583 0.573876H18.5803Z" fill="white"/></svg>`);
        $('#agregados .seletor-2').addClass('active');

        let form = {};
        form.cpf = $(this).find('[name="cpf"]').val();
        form.nome = $(this).find('[name="nome"]').val();
        form.email = $(this).find('[name="email"]').val();
        form.cidade = $(this).find('[name="cidade"]').val();
        form.estado = $(this).find('[name="estado"]').val();
        form.telefone = $(this).find('[name="telefone"]').val();

        $('#agregados .form-2').find('[name="cpf"]').attr('value', form.cpf);
        $('#agregados .form-2').find('[name="nome"]').attr('value', form.nome);
        $('#agregados .form-2').find('[name="email"]').attr('value', form.email);
        $('#agregados .form-2').find('[name="cidade"]').attr('value', form.cidade);
        $('#agregados .form-2').find('[name="estado"]').attr('value', form.estado);
        $('#agregados .form-2').find('[name="telefone"]').attr('value', form.telefone);

    });



    $('#orcamento select option:first-child').attr('disabled', 'disabled');


    $('.next.page-numbers').html(`>>`);
    $('.prev.page-numbers').html(`<<`);



    $('#sustentabilidade .seletores a').on('click', function (e) {
        e.preventDefault();
        $('#sustentabilidade .seletores a').removeClass('active');
        $(this).addClass('active');
        let section = $(this).attr('id');
        $('#sustentabilidade .s-area').removeClass('active');
        $('#sustentabilidade .s-area.' + section).addClass('active');
    });




    //Aviso cookies    
    if (localStorage.cookies) {
        document.querySelector(".balao-lgpd").classList.add("accept");
    };
    var acceptCookies = function () {
        document.querySelector(".balao-lgpd").classList.add("accept");
        localStorage.setItem("cookies", "accept");
    };
    var btnCookies = document.querySelector(".balao-lgpd button");
    btnCookies.onclick = acceptCookies;





}); //function


//  fancybox
$("[data-fancybox]").fancybox({
    loop: true,
    toolbar: true,
    infobar: false,
    arrows: false,
    animationEffect: "zoom-in-out",
    transitionEffect: "slide",
    lang: 'pt',
    i18n: {
        'pt': {
            CLOSE: 'Fechar',
            THUMBS: 'Miniaturas',
            FULL_SCREEN: 'Tela cheia',
            PLAY_START: 'TransiÃ§Ã£o automÃ¡tica',
            NEXT: 'PrÃ³ximo',
            PREV: 'Anterior',
        }
    },
});

$("[data-modal]").fancybox({
    modal: true,
    toolbar: false,
    smallBtn: false,
    touch: {
        vertical: false, // Allow to drag content vertically
        momentum: false // Continue movement after releasing mouse/touch when panning
    },
});

if ($('#popup').hasClass('exibir')) {
    if (sessionStorage.popup == undefined) {
        $.fancybox.open({
            src: '#popup',
            type: 'inline',
            opts: {
                baseClass: 'fancybox-popup',
                modal: true,
                toolbar: true,
                smallBtn: true,
                touch: {
                    vertical: false,
                    momentum: false
                }
            }
        });

        sessionStorage.popup = 1;
    }

    $('#fechar-popup').on('click', function () {
        $.fancybox.close();
    });
}


//mascaras
$('.date').mask('00/00/0000');
$('.time').mask('00:00:00');
$('.date_time').mask('00/00/0000 00:00:00');
$('.cep').mask('00000-000');
$('.phone').mask('0000-0000');
$('[type=tel]').mask('(00) 00000-0000');
$('.phone_us').mask('(000) 000-0000');
$('.mixed').mask('AAA 000-S0S');
$('.ip_address').mask('099.099.099.099');
$('[name="cpf"]').mask('000.000.000-00')



var swiper = new Swiper(".swiper-topo", {
    effect: 'fade',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
});


var swiper = new Swiper(".swiper-portfolio", {
    slidesPerView: 1.2,
    spaceBetween: 15,
    navigation: {
        nextEl: ".next-portifolio",
        prevEl: ".prev-portifolio",
    },
    autoplay: {
        delay: 3500,

        disableOnInteraction: false,
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});


var swiper = new Swiper(".swiper-portfolio2", {
    slidesPerView: 1.2,
    spaceBetween: 15,
    navigation: {
        nextEl: ".next-portifolio",
        prevEl: ".prev-portifolio",
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});





var swiper = new Swiper(".swiper-linha", {
    autoHeight: true, //enable auto height
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".next",
        prevEl: ".prev",
    },
});


var swiper = new Swiper(".swiper-depoimentos", {
    slidesPerView: 1,
    spaceBetween: 25,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".next",
        prevEl: ".prev",
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
        },
    },
});



var swiper = new Swiper(".swiper-marcas", {
    slidesPerView: 2,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
});



var swiper = new Swiper(".swiper-icos-home", {
    slidesPerView: 2,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
    },
});


$('#historia .paginacao span').each(function (index, el) {
    $(el).html("<div class='ano'>" + linha_tempo[index] + "</div>");
});


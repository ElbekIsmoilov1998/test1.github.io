// // core version + navigation, pagination modules:
// import Swiper, { Navigation, Pagination } from 'swiper';
//
// // configure Swiper to use modules
// Swiper.use([Navigation, Pagination]);

// init Swiper:
var swiper = new Swiper('.swiper-banner', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: false,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
    },
});

var productSlider = new Swiper('.swiper-product-slider', {
    slidesPerView: 1,
    spaceBetween: 15,
    freeMode: true,
    pagination: {
        el: '.swiper-pagination-product-slider',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-btn-next',
        prevEl: '.swiper-btn-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
    }
});

var productPopularSlider = new Swiper('.swiper-product-popular', {
    slidesPerView: 1,
    spaceBetween: 15,
    freeMode: true,
    pagination: {
        el: '.swiper-pagination-product-popular',
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
    }
});
var productBrandsSlider = new Swiper('.swiper-product-brands', {
    slidesPerView: 1,
    spaceBetween: 15,
    freeMode: true,
    navigation: {
        nextEl: '.swiper-button-brands-next',
        prevEl: '.swiper-button-brands-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 9,
            spaceBetween: 15,
        },
    }
});

jQuery(document).ready(function ($) {

    var ajax_loaded = true;
    var overlay = jQuery('.overlay');
    var cart_link = jQuery('#cart_link').val();

    function addToCart() {
        if (ajax_loaded) {
            jQuery(document).on('click', '.add-to-cart', function () {
                ajax_loaded = false;
                overlay.show();
                $('.add-to-cart').addClass('whiting');
                var product_id = parseInt(jQuery(this).data('product'));
                jQuery.ajax({
                    type: "POST",
                    url: cart_link,
                    data: {product: product_id},
                    success: function (response) {
                        if (response.length>0) {
                            jQuery("#pjax_header_cart").html(response);
                            ajax_loaded = true;
                            overlay.hide();
                            console.log("ajax-loaded");
                            $('.add-to-cart').removeClass('whiting');
                        }
                    }
                });
            });
        }
    }

    addToCart();


    jQuery(document).on('pjax:send', '#pjax_products', function () {
        overlay.show();
    });

    jQuery(document).on('pjax:complete', '#pjax_products', function () {
        overlay.hide();
    });

    jQuery(document).on('pjax:send', '#pjax_basket', function () {
        overlay.show();
    });

    jQuery(document).on('pjax:complete', '#pjax_basket', function () {
        overlay.hide();
    });

    jQuery(document).on('pjax:success', '#pjax_product_share, #pjax_product_popular, #pjax_product_hurry', function () {

        var productSlider = new Swiper('.swiper-product-slider', {
            slidesPerView: 1,
            spaceBetween: 15,
            freeMode: true,
            pagination: {
                el: '.swiper-pagination-product-slider',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
            }
        });

    });
    jQuery('.dropdown-toggle').dropdown();

    $(".cotalog_dropdown").on("show.bs.dropdown", function(event){
        $('.category-overlay').addClass('show');
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });
    $(".cotalog_dropdown").on("hide.bs.dropdown", function(event){
        $('.category-overlay').removeClass('show');
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });

    $('.submenu-content').slideUp();
    $("body .product-list .list-group > li").hover(function(){
        $(this).find('.submenu-content').slideDown();
    }, function(){
        $(this).find('.submenu-content').slideUp();
    });

    window.onscroll = function() {onScrollFixedHeader()};

    const header = document.getElementById("fixed-header");
    const sticky = header.offsetTop;

    function onScrollFixedHeader() {
        if (window.pageYOffset > sticky) {
            $('#fixed-margin').css('margin-bottom', $("#fixed-header").height());
            header.classList.add("on-scroll-fixed");
        } else {
            $('#fixed-margin').css('margin-bottom', 0);
            header.classList.remove("on-scroll-fixed");
        }
    }
    function numberWithCommas(x) {
        let val = x.val().toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        x.val(val);
    }



});
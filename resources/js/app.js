import $ from "jquery";
import './bootstrap';
import 'slick-slider'
import {Fancybox} from "@fancyapps/ui";


$(document).ready(function () {
    const $burger = $('.burger');
    const $menu = $('.menu');

    $burger.on('click', function() {
        $burger.toggleClass('active');
        $menu.toggleClass('active');
        $('body').toggleClass('overflow');
    });


    const $currentLang = $('.lang.current');
    const $langList = $('.lang-list');
    const $langItems = $('.lang-list .lang');

    $currentLang.on('click', function() {
        $langList.toggleClass('open');
    });
    $langItems.on('click', function() {
        const $this = $(this);

        if ($this.hasClass('active')) {
            $langList.removeClass('open');
        }
    });

    $(document).on('click', function(event) {
        if (!$(event.target).closest('.lang-wrap').length) {
            $langList.removeClass('open');
        }
    });

    Fancybox.bind();

    var openModalElements = document.querySelectorAll('[data-openModal]');

    openModalElements.forEach(function (element) {
        element.addEventListener('click', function () {
            var modalId = this.getAttribute('data-openModal');
            var modalContent = document.querySelector(modalId);
            if (modalContent) {
                new Fancybox(
                    [
                        {
                            src: modalId,
                            type: "inline",
                        },
                    ],
                    {
                        dragToClose: false,
                        autoFocus: false,
                        on: {
                            initLayout: () => {
                                setTimeout(form, 200);
                            },
                            close: () => {
                                $('.success').removeClass('success');
                            },
                        },
                    }
                );
            }
        });
    });

    const $navItems = $('.nav-item');

    $navItems.on('click', function(e) {
        e.preventDefault();
        const targetId = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(targetId).offset().top
        }, 500);

        $burger.removeClass('active');
        $menu.removeClass('active');
        $('body').removeClass('overflow');
    });


    // const observer = new IntersectionObserver((entries) => {
    //     entries.forEach(entry => {
    //         const navLink = $(`.nav-item[href="#${entry.target.id}"]`);
    //
    //         if (entry.isIntersecting) {
    //             navLink.addClass('active');
    //         } else {
    //             navLink.removeClass('active');
    //         }
    //     });
    // }, {
    //     threshold: 0.5
    // });
    //
    // $('.anchor').each(function() {
    //     observer.observe(this);
    // });


    $('.banner-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        infinite: true,
        dots: false,
        prevArrow: '<div class="slick-left"><svg class="icon"><use xlink:href="/images/sprites/sprite.svg#left"></use></svg></div>',
        nextArrow: '<div class="slick-right"><svg class="icon"><use xlink:href="/images/sprites/sprite.svg#right"></use></svg></div>',
        appendArrows: $('.banner-slider-nav'),
    });

    $('.trademarks-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        infinite: true,
        dots: false,
        prevArrow: '<div class="slick-left"><svg class="icon"><use xlink:href="/images/sprites/sprite.svg#left"></use></svg></div>',
        nextArrow: '<div class="slick-right"><svg class="icon"><use xlink:href="/images/sprites/sprite.svg#right"></use></svg></div>',
        appendArrows: $('.trademarks-slider-nav'),
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                    dots:true,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots:true,
                }
            },
            {
                breakpoint: 380,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots:true,
                }
            }
        ]
    });

    var animated = false; // Флаг для предотвращения повторной анимации

    $(window).on('scroll', function() {
        if (!animated) {
            var isInViewport = $('.company-info__card-title').first().is(':visible') && isElementInViewport($('.company-info__card-title').first()[0]);

            if (isInViewport) {
                $('.company-info__card-title').each(function() {
                    var endValue = parseInt($(this).attr('data-number'));
                    animateNumbers(this, endValue, 3000);
                });

                animated = true;
            }
        }
    });

    var slickInitialized = false;

    function initSlick() {
        if (!slickInitialized) {
            $('.services-mesh').slick({
                infinite: true,
                arrows:false,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });
            slickInitialized = true;
        }
    }

    function destroySlick() {
        if (slickInitialized) {
            $('.services-mesh').slick('unslick');
            slickInitialized = false;
        }
    }

    function checkWindowSize() {
        if ($(window).width() <= 767) {
            initSlick();
        } else {
            destroySlick();
        }
    }

    checkWindowSize();

    $(window).on('resize', function() {
        checkWindowSize();
    });

})

function form() {

    $('.validation-field input[type="text"], .validation-field input[type="number"], .validation-field textarea').each(function () {
        var $element = $(this);

        $element.on('blur', function () {
            if ($element.val()) {
                $element.parent().addClass('active');
            } else {
                $element.parent().removeClass('active');
            }
        });

        if ($element.val()) {
            $element.parent().addClass('active');
        } else {
            $element.parent().removeClass('active');
        }

        var placeholder = $element.attr('placeholder');
        if (placeholder && placeholder.indexOf('*') !== -1) {
            var $placeholderElement = $element.next('.placeholder');
            if ($placeholderElement.length) {
                $placeholderElement.text(placeholder);
            }
        }
    });

    $('input[type="file"]').on('change', function() {
        var $placeholder = $(this).siblings('.placeholder').find('span');
        var originalText = $(this).siblings('.placeholder').data('text');

        if (this.files && this.files.length > 0) {
            $placeholder.text(this.files[0].name);
        } else {
            $placeholder.text(originalText);
        }
    });

    var $formSubmission = $('.fancybox__content form');
    var $inputFields = $formSubmission.find('input[type="text"], input[type="number"], input[type="file"]');

    $inputFields.on('input', function () {
        var $inputField = $(this);
        var $validationField = $inputField.closest('.validation-field');
        $validationField.removeClass('invalid');
        $validationField.find('.error').text('');
    });

    $formSubmission.on('submit', function (e) {
        e.preventDefault();

        $formSubmission.addClass('waiting');

        var formData = new FormData(this);
        formData.append('type', $formSubmission.attr('id'));
        formData.append('from', $formSubmission.attr('id'));

        $.ajax({
            type: 'POST',
            url: '/api/form_submission',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function (xhr) {
                var acceptLanguage = window.locale && window.locale.length === 2 ? window.locale : "uk";
                xhr.setRequestHeader('Accept-Language', acceptLanguage);
            },
            success: function (response) {
                $formSubmission.removeClass('waiting');
                $formSubmission[0].reset();

                var $formSuccessBlock = $('.form-success');
                if ($formSuccessBlock.length) {
                    $formSuccessBlock.addClass('success');
                    if (response.message) {
                        $($formSuccessBlock).find('.form-success-message').html(response.message)
                    } else {
                        $('[data-fancybox-close]').click();
                    }
                }

                // Сброс всех полей и плейсхолдеров
                $inputFields.each(function () {
                    var $inputField = $(this);
                    var $validationField = $inputField.closest('.validation-field');
                    $validationField.removeClass('invalid');
                    $validationField.find('.error').text('');

                    if ($inputField.attr('type') === 'file') {
                        var $placeholder = $inputField.siblings('.placeholder').find('span');
                        var originalText = $inputField.siblings('.placeholder').data('text');
                        $placeholder.text(originalText); // Вернуть плейсхолдер для файлового поля
                    }
                });
            },
            error: function (xhr) {
                $formSubmission.removeClass('waiting');
                if (xhr.status >= 400) {
                    var response = xhr.responseJSON;
                    if (response.errors) {
                        $.each(response.errors, function (field, messages) {
                            var $errorField = $(`[name=${field}]`);
                            if ($errorField.length) {
                                var $validationField = $errorField.closest('.validation-field');
                                $validationField.addClass('invalid');
                                $validationField.find('.error').text(messages[0]);

                                if ($errorField.attr('type') === 'file') {
                                    var $placeholder = $errorField.siblings('.placeholder').find('span');
                                    $placeholder.text(messages[0]); // Показать ошибку как плейсхолдер
                                }
                            }
                        });
                    }
                } else {
                    alert('Під час відправки форми сталася помилка. Будь ласка, спробуйте ще раз.');
                }
            }
        });
    });
}

function animateNumbers(element, endValue, duration) {
    $({ count: 0 }).animate({ count: endValue }, {
        duration: duration,
        easing: 'swing',
        step: function(now) {
            $(element).text(Math.floor(now));
        },
        complete: function() {
            $(element).text(endValue);
        }
    });
}

function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
}

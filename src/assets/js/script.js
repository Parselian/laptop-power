'use-strict';

$(window).on('load', function() {
    $('input[name="user_phone"]').mask('+7 (999) 999-99-99');

    const advantagesSliderInit = () => {
        const setAdvantagesSliderHeight = () => {
            $('.advantages__slider').height($('.advantages__slide_active').height())
        }
        const toggleAdvantagesSlides = () => {
            $('.advantages__controls-button').on('click', function() {
                const selectedSlide = $(this).data('btn-slide');
                $('.advantages__controls-button').removeClass('advantages__controls-button_active');
                $(this).addClass('advantages__controls-button_active');

                $('.advantages__slide').removeClass('advantages__slide_active').fadeOut();
                $(`.advantages__slide[data-slide="${selectedSlide}"]`).fadeIn({
                    duration: 400,
                    start() {
                        $(`.advantages__slide[data-slide="${selectedSlide}"]`).css('display', 'flex');
                    }
                });
            })
        }
        const autoplaySlides = () => {
            let interval = setInterval(() => {
                console.log($('.advantages__controls-button_active'))
            }, 5000)
        }


        setAdvantagesSliderHeight();

        toggleAdvantagesSlides($(this));

        autoplaySlides();
    }

    advantagesSliderInit();



    $('.burger-btn').on('click', function() {
        if ($(this).find('input').is(':checked')) {
            $('.burger-menu').toggleClass('burger-menu_open')
        }
    })

    $(document).on('click', function(e) {
        const target = $(e.target);

        switch (true) {
            case target.is('.open-order-form'):
                $('.popup-order').fadeIn({
                    duration: 400,
                    start() {
                        $('.popup-order').css('display', 'flex')
                    }
                });
                $('body').css('overflow-y', 'hidden');
                break;
            case target.is('.popup-form__close, .popup__bg, .popup-form-button_thanks'):
                $('.popup').fadeOut({
                    duration: 400,
                });
                $('body').css('overflow-y', 'auto');
                break;
            case target.is('.faq__list-item'):
                target.find('.faq__list-item-text').slideToggle();
                target.find('.faq__list-item-title-icon').toggleClass('faq__list-item-title-icon_active');
                break;
            default:
                break;
        }

        return;
    })
})
/*
––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––
  iMedical - Template for Medical, Doctors, Dentists, Clinics and Hospitals 
––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––

    - File           : main.js
    - Desc           : Theme Template - JavaScript
    - Date           : 02-04-2017
    - Author         : CODASTROID
    - Author URI     : https://themeforest.net/user/codastroid
    - Email          : codastroid@gmail.com

––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––
*/

(function($) {

    "use strict";


    /**
     *
     * @param options
     * @desc Ele click out
     * @version 2.0.0
     * @author Marco
     */

    $.fn.mcClickOutSite = function (options) {
        var defaults = {
            'clickE' : null,
            'activeE' : null,
            'removeClass' : '',
        };
        var opts = $.extend({}, $.fn.nbClickOutSite.defaults, options);
        return this.each(function () {
            var sefl = this;
            var $win = $(document);
            if (opts.activeE == null) {
                opts.activeE = $(this);
            }
            $win.on("click", function(event){
                if ($(sefl).has(event.target).length == 0 && !$(sefl).is(event.target)
                    && opts.clickE.has(event.target).length == 0 && !opts.clickE.is(event.target)){
                    opts.activeE.removeClass(opts.removeClass);
                }
            });
        });
    };

    /**
     *
     * @param text
     * @version 2.0.0
     * @author Marco
     */
    $.fn.mcWarning = function (text) {
        return this.each(function () {
            var $itemWarning = $(this).find('.item');
            $(this).addClass('nbd-show');
            if ($itemWarning.length < 3) {
                var htmlWaring = '<div class="item animate300 animated nbScaleOut main-warning nbd-show">' +
                    '<i class="nbd-icon-vista nbd-icon-vista-warning warning"></i>' +
                    '<span class="title-warning">'+ text +'</span>' +
                    '<i class="nbd-icon-vista nbd-icon-vista-clear close-warning"></i>' +
                    '</div>';
                var $warning = $(htmlWaring);
                var $close = $warning.find('.close-warning');
                $(this).append($warning);
                $close.on('click', function () {
                    $warning.removeClass('nbScaleOut').addClass('nbScaleIn');
                    $warning.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
                        $warning.remove();
                    });
                });

                setTimeout(function () {
                    $warning.removeClass('nbScaleOut').addClass('nbScaleIn');
                    $warning.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
                        $warning.remove();
                    });
                }, 10000);

            }

        });
    };


    /**
     *
     * @param text
     * @version 2.0.0
     * @author Marco
     */
    $.fn.mcToasts = function (text) {
        return this.each(function () {

            if ($(this).find('.toast').length > 0) {
                return;
            }

            var htmlToast = '<div class="animate300 animated nbSlideInUp toast">' +
                '<span>'+ text +'</span>' +
                '<i class="fa-times mc-close-toast"></i>' +
                '</div>';
            var $toast = $(htmlToast);

            $(this).addClass('mc-show').append($toast);
            $toast.find('.mc-close-toast').on('click', function () {
                $toast.removeClass('nbSlideInUp').addClass('nbSlideInDown');
                $toast.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
                    $toast.remove();
                });
            });

            setTimeout(function () {
                $toast.removeClass('nbSlideInUp').addClass('nbSlideInDown');
                $toast.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
                    $toast.remove();
                });
            }, 3000);
        });
    };

    var bodySelector = $("body"),
        HtmlbodySelector = $("html, body"),
        windowSelector = $(window),
        backTopSelector = $('#backTop');

    var background_image = function() {
        var bgImgSelector = $("[data-bg-img]");
        if (bgImgSelector.length) {
            bgImgSelector.each(function() {
                var attr = $(this).attr('data-bg-img');
                if (typeof attr !== typeof undefined && attr !== false && attr !== "") {
                    $(this).css('background-image', 'url(' + attr + ')');
                }
            });
        }
    };

    var preloader = function() {
        var preloaderSelector = $('#preloader');
        if (preloaderSelector.length) {
            preloaderSelector.children().fadeOut();
            preloaderSelector.delay(150).fadeOut('slow');
            bodySelector.delay(150).removeClass('preloader-active');
        }
    };

    /* ------------------  BACK TO TOP ------------------ */
    var back_to_top = function() {
        if (backTopSelector.length) {
            var scrollTrigger = 200,
                scrollTop = windowSelector.scrollTop();
            if (scrollTop > scrollTrigger) {
                backTopSelector.addClass('show');
            } else {
                backTopSelector.removeClass('show');
            }
        }
    };

    var click_back = function() {
        if (backTopSelector.length) {
            backTopSelector.on('click', function(e) {
                HtmlbodySelector.animate({
                    scrollTop: 0
                }, 700);
                e.preventDefault();
            });
        }
    };

    var gallery_mixitup = function() {
        var mixItUpSelector = $('.portifolio-area .portifolio-wrapper'),
        mixItUpFilter =  $('.portifolio-area .portifolio-filter .filter');
        if (mixItUpSelector.length) {
            mixItUpSelector.mixItUp();
        }
        if (mixItUpFilter.length) {
            mixItUpFilter.click(function(e) {
                e.preventDefault();
            });
        }
    };

    /* ------------------ MAGNIFIC POPUP ------------------ */
    var magnific_popup = function() {
        var lightboxImg = $('.img-lightbox'),
            lightboxIframe = $('.iframe-lightbox');
        if (lightboxImg.length) {
            lightboxImg.magnificPopup({
                type: 'image',
                mainClass: 'mfp-fade',
                gallery: {
                    enabled: true
                }
            });
        }
        if (lightboxIframe.length) {
            lightboxIframe.magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false,
                iframe: {
                  patterns: {
                    youtube: {
                      src: 'https://www.youtube.com/embed/%id%?autoplay=1' /* URL that will be set as a source for iframe. */
                    },
                    vimeo: {
                      src: 'https://player.vimeo.com/video/%id%?autoplay=1'
                    },
                    gmaps: {
                      index: 'https://maps.google.'
                    }
                  }
                }
            });
        }
    };

    /*-------------------------------------
     Carousel slider initiation
     -------------------------------------*/
    var owl_carousel = function() {
        var owlSelector = $('.owl-carousel');
        if (owlSelector.length) {
            $('.owl-carousel').each(function() {
                var carousel = $(this),
                    autoplay_hover_pause = carousel.data('autoplay-hover-pause'),
                    loop = carousel.data('loop'),
                    items_general = carousel.data('items'),
                    margin = carousel.data('margin'),
                    autoplay = carousel.data('autoplay'),
                    autoplayTimeout = carousel.data('autoplay-timeout'),
                    smartSpeed = carousel.data('smart-speed'),
                    nav_general = carousel.data('nav'),
                    navSpeed = carousel.data('nav-speed'),
                    xxs_items = carousel.data('xxs-items'),
                    xxs_nav = carousel.data('xxs-nav'),
                    xs_items = carousel.data('xs-items'),
                    xs_nav = carousel.data('xs-nav'),
                    sm_items = carousel.data('sm-items'),
                    sm_nav = carousel.data('sm-nav'),
                    md_items = carousel.data('md-items'),
                    md_nav = carousel.data('md-nav'),
                    lg_items = carousel.data('lg-items'),
                    lg_nav = carousel.data('lg-nav'),
                    center = carousel.data('center'),
                    dots_global = carousel.data('dots'),
                    xxs_dots = carousel.data('xxs-dots'),
                    xs_dots = carousel.data('xs-dots'),
                    sm_dots = carousel.data('sm-dots'),
                    md_dots = carousel.data('md-dots'),
                    lg_dots = carousel.data('lg-dots');

                carousel.owlCarousel({
                    autoplayHoverPause: autoplay_hover_pause,
                    loop: (loop ? loop : false),
                    items: (items_general ? items_general : 1),
                    lazyLoad: true,
                    margin: (margin ? margin : 0),
                    autoplay: (autoplay ? autoplay : false),
                    autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
                    smartSpeed: (smartSpeed ? smartSpeed : 250),
                    dots: (dots_global ? dots_global : false),
                    nav: (nav_general ? nav_general : false),
                    navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
                    navSpeed: (navSpeed ? navSpeed : false),
                    center: (center ? center : false),
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: (xxs_items ? xxs_items : (items_general ? items_general : 1)),
                            nav: (xxs_nav ? xxs_nav : (nav_general ? nav_general : false)),
                            dots: (xxs_dots ? xxs_dots : (dots_global ? dots_global : false))
                        },
                        480: {
                            items: (xs_items ? xs_items : (items_general ? items_general : 1)),
                            nav: (xs_nav ? xs_nav : (nav_general ? nav_general : false)),
                            dots: (xs_dots ? xs_dots : (dots_global ? dots_global : false))
                        },
                        768: {
                            items: (sm_items ? sm_items : (items_general ? items_general : 1)),
                            nav: (sm_nav ? sm_nav : (nav_general ? nav_general : false)),
                            dots: (sm_dots ? sm_dots : (dots_global ? dots_global : false))
                        },
                        992: {
                            items: (md_items ? md_items : (items_general ? items_general : 1)),
                            nav: (md_nav ? md_nav : (nav_general ? nav_general : false)),
                            dots: (md_dots ? md_dots : (dots_global ? dots_global : false))
                        },
                        1199: {
                            items: (lg_items ? lg_items : (items_general ? items_general : 1)),
                            nav: (lg_nav ? lg_nav : (nav_general ? nav_general : false)),
                            dots: (lg_dots ? lg_dots : (dots_global ? dots_global : false))
                        }
                    }
                });
            });
        }
    };

    var datepicker = function() {
        var dateField = $('.field-date');
        if (dateField.length) {
            dateField.datepicker({
                format: 'mm-dd-yyyy'
            });
        }
    };

    var validateEmail = function(email) {
        var patt = /^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
        if (patt.test(email) === true ) {
            return true;
        }
        return false;
    };

    var ajax_response = function(responseNode, type, response) {
        if (type === "success") {
            responseNode.removeClass('text-error').addClass('text-valid');
        }
        else {
            responseNode.removeClass('text-valid').addClass('text-error');
        }
        responseNode.html(response);
    };

    var contact_response = function(responseNode, type) {
        /* Response Messages */
        var success_response = '<i class="fa fa-check"></i>Your Message was sent!',
            error_response = '<i class="fa fa-warning"></i>Something went wrong!',
            error_net_response = '<i class="fa fa-warning"></i>Could not connect to server!';

        if (type === "success") {
            ajax_response(responseNode, "success", success_response);
        }
        else {
            if (type === "netError") {
                ajax_response(responseNode, "netError", error_net_response);
            }
            else {
                ajax_response(responseNode, "error", error_response);
            }
        }
    };

    var apppointment_response = function(responseNode, type) {
        /* Response Messages */
        var success_response = '<i class="fa fa-check"></i>Your Appointment was sent!',
            error_response = '<i class="fa fa-warning"></i>Something went wrong!',
            error_net_response = '<i class="fa fa-warning"></i>Could not connect to server!';

        if (type === "success") {
            ajax_response(responseNode, "success", success_response);
        }
        else {
            if (type === "netError") {
                ajax_response(responseNode, "netError", error_net_response);
            }
            else {
                ajax_response(responseNode, "error", error_response);
            }
        }
    };

    var contactForm = function() {
        var contactFormSelector = $("#contactForm");
        if (contactFormSelector.length) {
            contactFormSelector.on("submit", function(e) {
                event.preventDefault();
                var self = $(this),
                    valid_form = true,
                    name = $("#contactName"),
                    email = $("#contactEmail"),
                    subject = $("#contactSubject"),
                    message = $("#contactMessage"),
                    formFields = [name, subject, message],
                    action = self.attr('action'),
                    responseNode = $('#contactResponse');

                formFields.forEach(function(input) {
                    if (input.val() === '') {
                        input.addClass('input-error');
                        valid_form = false;
                    }
                });
                if (email.val() === '' || validateEmail(email.val()) === false) {
                    email.addClass('input-error');
                    valid_form = false;
                }
                self.find('input, textarea').on('change', function(){
                    $(this).removeClass('input-error');
                });

                if (valid_form === true) {
                    contact_response(responseNode, "success");
                }

            });
        }
    };

    var appointmentForm = function() {
        var contactFormSelector = $("#appointmentForm");
        if (contactFormSelector.length) {
            contactFormSelector.on("submit", function(e) {
                event.preventDefault();
                var self = $(this),
                    valid_form = true,
                    fname = $("#appointmentFname"),
                    lname = $("#appointmentLname"),
                    email = $("#appointmentEmail"),
                    phone = $("#appointmentPhone"),
                    gender = $("#appointmentGender"),
                    date = $("#appointmentDate"),
                    message = $("#appointmentMessage"),
                    formFields = [fname, lname, phone, date, message],
                    action = self.attr('action'),
                    responseNode = $('#appointmentResponse');

                formFields.forEach(function(input) {
                    if (input.val() === '') {
                        input.addClass('input-error');
                        valid_form = false;
                    }
                });
                gender.each(function(){
                  if ( $(this).children(":selected").val() === "" ) {
                        $(this).addClass('input-error');
                        valid_form = false;
                  }
                });
                if (email.val() === '' || validateEmail(email.val()) === false) {
                    email.addClass('input-error');
                    valid_form = false;
                }
                self.find('input, textarea, select').on('change', function(){
                    $(this).removeClass('input-error');
                });
                date.on('changeDate', function() {
                    $(this).removeClass('input-error');
                });

                if (valid_form === true) {
                    apppointment_response(responseNode, "success");
                }

            });
        }
    };

    
    $('#menu').on('click', function() {
        if (windowSelector.width() <= 991) {
            $('.navigation').slideToggle('normal');
        }
        return false;
    });
    $('.navigation>ul> li >a').on('click', function() { 
        if (windowSelector.width() <= 991) {
            $('.navigation>ul> li').removeClass('on');
            $('.navigation>ul> li> ul').slideUp('normal');
            if ($(this).next().next('ul').is(':hidden') === true) {
                $(this).parent('li').addClass('on');
                $(this).next().next('ul').slideDown('normal');
            }
        }
    });
    $('.sub-menu >a').on('click', function() { 
        if (windowSelector.width() <= 991) {
            $('.sub-menu').removeClass('on');
            $('.sub-menu> ul').slideUp('normal');
            if ($(this).next().next('ul').is(':hidden') === true) {
                $(this).parent('li').addClass('on');
                $(this).next().next('ul').slideDown('normal');
            }
        }
    });

    windowSelector.on('resize', function() {
        if (windowSelector.width() >= 991) {
            $('.navigation').show();
        }
    });

    var YTPlayer = function() {
        $("#header_video").YTPlayer({
            showControls: false
        });
    };

    var coreMarco = {
        init: function () {
            this.commentAjax();
        },

        commentAjax: function () {
            var $reply = $('#comments .reply-comment'), $replyForm = $('#comments .leave-reply-comment');
            $reply.on('click', function (e) {
                e.preventDefault();
                var commentId = $(this).data('parent'), author = $(this).data('author');
                var $comment = $(this).closest('.comment');
                $replyForm.show();
                $replyForm.find('.h-title .reply-author').text(' to ' + author);
                $replyForm.find('#comment_parent').attr('value', commentId);
                $replyForm.css({
                    top: ($comment.offset().top - $('#comments').offset().top - $replyForm.find('.h-title').outerHeight() + $comment.outerHeight() - 25) + 'px'
                });
            });

            $('#comments .close-form-reply').on('click', function () {
                $replyForm.hide();
            });
        }

    };

    /* ====================================
       When document is ready, do
    ==================================== */
    $(document).on('ready', function() {
        preloader();
        background_image();
        click_back();
        magnific_popup();
        gallery_mixitup();
        owl_carousel();
        datepicker();
        contactForm();
        appointmentForm();
        YTPlayer();

        coreMarco.init();
    });

    /* ===================================
       When document is loading, do
    ==================================== */
    windowSelector.on('load', function() {
        preloader();
    });

    /* ===================================
       When document is Scrollig, do
    ==================================== */
    windowSelector.on('scroll', function() {
        back_to_top();
    });


})(jQuery);

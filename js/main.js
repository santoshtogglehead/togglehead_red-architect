$(document).ready(function() {
    // no scrolling on menu open
    $('.navbar-toggle').on('click', function() {
        console.log('lo');
        if ($('.navbar-collapse').hasClass('in')) {
            $('html,body').css('overflow', 'visible');
            $('.whole-header').css('height', 'auto');
        } else {
            $('html,body').css('overflow', 'hidden');
            $('.whole-header').css('height', '100%');
        }
    });
    // no scrolling on menu open    

    //breadcrumb code
    $(window).on('scroll', function() {
        var windowscroll = $(this).scrollTop();
        if (windowscroll >= 1) {
            $('.breadcrumb').hide();
        } else {
            $('.breadcrumb').show();
        }
    });

    // menu hover color change code starts here
    $('ul.navbar-nav > li').hover(
        function() {
            $('ul.navbar-nav > li > a').css('color', '#838385');
            $(this).children('a').css('color', '#fff');
        },
        function() {
            $('ul.navbar-nav > li > a').css('color', '#fff');
        });
    // menu hover color change code ends here

    // svg text animation code starts here
    if ($('#Layer_1').length) {
        new Vivus('Layer_1', { type: 'delayed', duration: 150 }, callback);
        function callback() {
            $(".cls-1").css('fill', '#fff');
        }
    }
    if ($('#archimage').length) {
        new Vivus('archimage', { type: 'delayed', duration: 100 }, callback1);
        function callback1() {
            $('.select-wrapper').css('opacity','1');
        }
    }
    // svg text animation code ends here

    // media page js starts here
    $(window).on('resize load', function(event) {
        var windowSize = $(window).width(); // Could've done $(this).width()
        if (windowSize > 1025) {
            $(".media-box").each(function() {
                $(this).hover(
                    function() {
                        $(this).addClass('a box-hover');
                    },
                    function() {
                        $(this).removeClass('box-hover a');
                    }
                );
            });

            // architecture hover code
            $(".architecture-box").each(function() {
                $(this).hover(
                    function() {
                        $(this).addClass('architecture-overlay box-hover');
                    },
                    function() {
                        $(this).removeClass('box-hover architecture-overlay');
                    }
                );
            });
            // architecture hover code

            $(".architecture-block").each(function() {
                $(this).hover(
                    function() {
                        $(this).addClass('architecture-overlay box-hover');
                    },
                    function() {
                        $(this).removeClass('box-hover architecture-overlay');
                    }
                );
            });

            
        }
    });

    $('.media-select').on('change', function() {
        var value = this.value;
        console.log(value);
        if (value == 'All') {
            $('.grids').hide();
            $('.grids').fadeIn();
        } else {
            $('.grids').hide();
            $('.value-' + value).fadeIn();
        }
    })

    $(".media-select").each(function() {
        $(this).val($(this).find('option[selected]').val());
    });

    setTimeout(imageload, 1000);

    function imageload() {
        $('.lightgallery-media').css('opacity', '1');
    }

    $(".lightgallery-media").lightGallery({
        mode: 'lg-fade',
        download: false
    });
    // media page js ends here

    $(window).on('scroll', function(){

    });

    $(window).on('scroll', function() {
        $('.location').css('opacity', '1');
        $('.surface').css('opacity', '1');
        $('.completed').css('opacity', '1');
        var x = $(this).scrollTop();
        var y = $('.outbox').offset().top;
        if ((x >= (y - 400))) {
            $('.out-wrapper').addClass('out-wrapper-full').delay(1000).queue(function() {
                $('.location').addClass('wow fadeInUp');
                $('.surface').addClass('wow fadeInUp');
                $('.completed').addClass('wow fadeInUp');
                $('.outbox').find('.box').addClass('box-hover');
            });
        }
    });
});
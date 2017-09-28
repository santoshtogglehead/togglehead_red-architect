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

    // video section
    jQuery(document).on('click','.overlay',function(e){
    jQuery('.overlay').hide();
    jQuery('#ytvideo').attr("src","http://www.youtube.com/embed/"+$(this).data('vid')+"?autoplay=1");
    });
    if (window.innerWidth > 768) {
        $(window).scroll(function(){
            if($('.video-sect').length) {
                var x1 = $(this).scrollTop();
                var y1 = $('.video-sect').offset().top;
                var w1 = $('.video-sect').height();
                var z1 = y1 + w1 + 150;
                // console.log(x1);
                // console.log(y1);
                // console.log(z1);
                if((x1 >= (y1-300)) && (x1 < z1)) {
                    $(".video-sect").addClass('scalecraftwrapper100');
                    $(".video-sect").removeClass('scalecraftwrapper');
                } else {
                    $(".video-sect").addClass('scalecraftwrapper');
                    $(".video-sect").removeClass('scalecraftwrapper100');
                }
            }
            if($('.link-sect').length) {
                var x1 = $(this).scrollTop();
                var y1 = $('.link-sect').offset().top;
                var w1 = $('.link-sect').height();
                var z1 = y1 + w1 + 150;
                // console.log(x1);
                // console.log(y1);
                // console.log(z1);
                if((x1 >= (y1-450)) && (x1 < z1)) {
                    $(".link-sect").addClass('linkscalecraftwrapper100');
                    $(".link-sect").removeClass('linkscalecraftwrapper');
                } else {
                    $(".link-sect").addClass('linkscalecraftwrapper');
                    $(".link-sect").removeClass('linkscalecraftwrapper100');
                }
            }
        });
    }
    // video section ends here
});

// Sticky js

var Stickem = function(elem, options) {
        this.elem = elem;
        this.$elem = $(elem);
        this.options = options;
        this.metadata = this.$elem.data("stickem-options");
        this.$win = $(window);
    };

    Stickem.prototype = {
        defaults: {
            item: '.stickem',
            container: '.stickem-container',
            stickClass: 'stickit',
            endStickClass: 'stickit-end',
            offset: 0,
            start: 0,
            onStick: null,
            onUnstick: null
        },

        init: function() {
            var _self = this;

            //Merge options
            _self.config = $.extend({}, _self.defaults, _self.options, _self.metadata);

            _self.setWindowHeight();
            _self.getItems();
            _self.bindEvents();

            return _self;
        },

        bindEvents: function() {
            var _self = this;

            _self.$win.on('scroll.stickem', $.proxy(_self.handleScroll, _self));
            _self.$win.on('resize.stickem', $.proxy(_self.handleResize, _self));
        },

        destroy: function() {
            var _self = this;

            _self.$win.off('scroll.stickem');
            _self.$win.off('resize.stickem');
        },

        getItem: function(index, element) {
            var _self = this;
            var $this = $(element);
            var item = {
                $elem: $this,
                elemHeight: $this.height(),
                $container: $this.parents(_self.config.container),
                isStuck: false
            };

            //If the element is smaller than the window
            if(_self.windowHeight > item.elemHeight) {
                item.containerHeight = item.$container.outerHeight();
                item.containerInner = {
                    border: {
                        bottom: parseInt(item.$container.css('border-bottom'), 10) || 0,
                        top: parseInt(item.$container.css('border-top'), 10) || 0
                    },
                    padding: {
                        bottom: parseInt(item.$container.css('padding-bottom'), 10) || 0,
                        top: parseInt(item.$container.css('padding-top'), 10) || 0
                    }
                };

                item.containerInnerHeight = item.$container.height();
                item.containerStart = item.$container.offset().top - _self.config.offset + _self.config.start + item.containerInner.padding.top + item.containerInner.border.top;
                item.scrollFinish = item.containerStart - _self.config.start + (item.containerInnerHeight - item.elemHeight);

                //If the element is smaller than the container
                if(item.containerInnerHeight > item.elemHeight) {
                    _self.items.push(item);
                }
            } else {
                item.$elem.removeClass(_self.config.stickClass + ' ' + _self.config.endStickClass);
            }
        },

        getItems: function() {
            var _self = this;

            _self.items = [];

            _self.$elem.find(_self.config.item).each($.proxy(_self.getItem, _self));
        },

        handleResize: function() {
            var _self = this;

            _self.getItems();
            _self.setWindowHeight();
        },

        handleScroll: function() {
            var _self = this;

            if(_self.items.length > 0) {
                var pos = _self.$win.scrollTop();

                for(var i = 0, len = _self.items.length; i < len; i++) {
                    var item = _self.items[i];

                    //If it's stuck, and we need to unstick it, or if the page loads below it
                    if((item.isStuck && (pos < item.containerStart || pos > item.scrollFinish)) || pos > item.scrollFinish) {
                        item.$elem.removeClass(_self.config.stickClass);

                        //only at the bottom
                        if(pos > item.scrollFinish) {
                            item.$elem.addClass(_self.config.endStickClass);
                        }

                        item.isStuck = false;

                        //if supplied fire the onUnstick callback
                        if(_self.config.onUnstick) {
                            _self.config.onUnstick(item);
                        }

                    //If we need to stick it
                    } else if(item.isStuck === false && pos > item.containerStart && pos < item.scrollFinish) {
                            item.$elem.removeClass(_self.config.endStickClass).addClass(_self.config.stickClass);
                            item.isStuck = true;

                            //if supplied fire the onStick callback
                            if(_self.config.onStick) {
                                _self.config.onStick(item);
                            }
                    }
                }
            }
        },

        setWindowHeight: function() {
            var _self = this;

            _self.windowHeight = _self.$win.height() - _self.config.offset;
        }
    };

    Stickem.defaults = Stickem.prototype.defaults;

    $.fn.stickem = function(options) {
        //Create a destroy method so that you can kill it and call it again.
        this.destroy = function() {
            this.each(function() {
                new Stickem(this, options).destroy();
            });
        };

        return this.each(function() {
            new Stickem(this, options).init();
        });
    };

// Sticky js ends here

})( jQuery, window, document );

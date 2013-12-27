$('body').prepend('<a href="" class="top" style="display: none">Top</a>');

$(window).scroll(function() {
    posScroll = $(document).scrollTop();
    if (posScroll >= 300) {
        $('.top').fadeIn(600);
    }
    else {
        $('.top').fadeOut(600);
    }

    var offsetMenuTop = $(".navbar-home").offset().top;
    var offsetSlideTop = $("#mySlide").offset().top;

    var w = $(window);

    var positionMenu = offsetMenuTop - w.scrollTop();
    var positionSlide = offsetSlideTop - w.scrollTop();
    
    console.log(positionMenu, positionSlide);

    if(positionMenu<=0){
        $(".navbar-home").css({
            "position" : "fixed",
            "top" : "50px",
            "left" : "0",
            "right" : "0",
            "width" : "100%",
            "z-index": "200000"
        });
    }
    if(positionSlide>=0){
        $(".navbar-home").css({
            "position" : "relative",
            "top" : "auto",
            "left" : "0",
            "right" : "0",
            "width" : "100%"
        });
    }

});

$(document).ready(function() {
    setActiveLink();
    verifMail();

    $(".photoalbum1").colorbox({rel:'photoalbum1', slideshow:true,  width:"90%", height:"90%"});
    $(".photoalbum2").colorbox({rel:'photoalbum2', slideshow:true,  width:"90%", height:"90%"});

    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );

    $('.top').click(function(){
        $('html, body').animate({ scrollTop: 0 }, 1500);
        return false;
    });

    $('.button-video-ytb-desc').click(function(){
        $('.video-ytb-desc').toggle('slow');
        $(this).find('i').toggleClass('icon-chevron-up');
    });

    function verifMail() {
        $('.sendMail').fadeOut(10000);
        $("form").submit(function(event) {
            $("form .requis").each(function() {
                if ($(this).val() === "") {
                    $(this).css({
                        'border-color': '#b94a48',
                        'background': '#b94a48',
                        'color': 'white',
                        '-webkit-box-shadow': 'inset 0 -2px 0 rgba(0,0,0,0.15)',
                    });
                    $('.alert-danger').fadeIn(10);
                    $('.alert-danger').fadeOut(10000);
                    event.preventDefault();
                } else
                    return;
            });
        });
    }

    function display(data, page) {
        $('body').fadeOut(500, function() {
            $('body').empty();
            $('body').append(data);
            $('body').fadeIn(1000);
            $('.nav').find('a').each(function() {
                if ($(this).attr('href') === page) {
                    $(this).addClass('active');
                }
            });
        });
    }

    function setActiveLink() {
        var currentLink = $(location).attr('pathname');
        var navLink = $('.navbar-nav').find('a');
        navLink.each(function() {
            var test = $(this).attr('href');
            if (test === currentLink) {
                $(this).parent().addClass('active');
            }
        });
    }

    $('.carousel.slide.fisrt').height($('.carousel-inner .item img').height());

});


// Iframe responsive
$(function() {
    // Find all YouTube videos
    var $allVideos = $("#lastClip"),
    // The element that is fluid width
    $fluidEl = $(".col-md-12");
    // Figure out and save aspect ratio for each video
    $allVideos.each(function() {
        $(this)
            .data('aspectRatio', this.height / this.width)
            // and remove the hard coded width/height
            .removeAttr('height')
            .removeAttr('width');
    });
    // When the window is resized
    // (You'll probably want to debounce this)
    $(window).resize(function() {
        var newWidth = $fluidEl.width();
        // Resize all videos according to their own aspect ratio
        $allVideos.each(function() {
            var $el = $(this);
            $el
                .width(newWidth)
                .height(newWidth * $el.data('aspectRatio'));
        });

    // Kick off one resize to fix all videos on page load
    }).resize();
});

// Iframe responsive
$(function() {
    // Find all YouTube videos
    var $allVideos = $("#lastClipH"),
    // The element that is fluid width
    $fluidEl = $(".col-md-9");
    // Figure out and save aspect ratio for each video
    $allVideos.each(function() {
        $(this)
            .data('aspectRatio', this.height / this.width)
            // and remove the hard coded width/height
            .removeAttr('height')
            .removeAttr('width');
    });
    // When the window is resized
    // (You'll probably want to debounce this)
    $(window).resize(function() {
        var newWidth = $fluidEl.width();
        // Resize all videos according to their own aspect ratio
        $allVideos.each(function() {
            var $el = $(this);
            $el
                .width(newWidth)
                .height(newWidth * $el.data('aspectRatio'));
        });

    // Kick off one resize to fix all videos on page load
    }).resize();
});
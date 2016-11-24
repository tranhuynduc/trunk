$(function() {

    //settings for slider
    var width = 740;
    var animationSpeed = 500;
    var pause = 2000;
    var currentSlide = 1;


    //cache DOM elements
    var $slider = $('#slider');
    var $slideContainer = $('.slides', $slider);
    var $slides = $('.slide', $slider);
    var $choose = $('#choose');
    var $imgClicked = $('.slide-choose', $choose);
    var interval;
    var $width = $slideContainer.width()/5;
    console.log($width);

    function startSlider() {
        interval = setInterval(function() {
            $slideContainer.animate({'margin-left': '-='+$width}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        }, pause);
    }


    function pauseSlider() {
        clearInterval(interval);
    }

    function slideCliked(event){
        clearInterval(interval);
        currentSlide = event.target.closest('li').getAttribute('data-id');
        console.log(currentSlide);
        console.log($width*(currentSlide - 1));
        $slideContainer.css('margin-left', -($width*(currentSlide - 1))) ;
        startSlider();
    }
    function resizedw(){
        startSlider();
    }

    var doit;

    $(window).on('resize', function(){
        pauseSlider();
        clearTimeout(doit);
        doit = setTimeout(resizedw, 100);
        $width = $slideContainer.width()/5;
        $slideContainer.css('margin-left', -($width*(currentSlide - 1)));
        console.log($width);

    })

    $imgClicked.on('click', slideCliked);
    $slideContainer
        .on('mouseenter', pauseSlider)
        .on('mouseleave', startSlider);

    $('.tab-panels .tabs li').on('click', panelClicked);

    function panelClicked() {

        var $panel = $(this).closest('.tab-panels');
        console.log(this);
        console.log($panel);

        $panel.find('.tabs li.active').removeClass('active');
        $(this).addClass('active');

        var panelShow = $(this).attr('rel');

        $panel.find('.panel.active').fadeOut(300, showNextPanel);

        function showNextPanel () {
            $(this).removeClass('active');
            $('#' + panelShow).fadeIn(300, function() {
                $(this).addClass('active');
            });
        };
    }

    startSlider()
});
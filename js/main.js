$(document).ready(function () {

    /*------------- zoom ------------*/
    /*function body_width() {
        var body = $('body');
        var zoom = $(window).width() / body.width();
        body.css('zoom',zoom);
    };

    body_width();
    
    window.addEventListener("orientationchange", function() {
        body_width();
    }, false);
*/
    /*---------- menu -------------*/
    
    $( ".profile" ).on('click', function(event){
        event.preventDefault();
        $('.profile-box').toggle();
    });
    $( ".notification .star").on('click', function(event){
        event.preventDefault();
        $('.notification-box').toggle();
    });    
    
    $( "#tabs" ).tabs();
    
    
    $('.chat-box').on('click', 'li', function(){
        $(".chat-box li").removeClass("active");
        $(this).addClass("active");
    });
    
    
    /*------------- profile ---------*/
        if($('#hidden-profile').length){
            var trigger = 770;
            $(document).on('scroll', function(){
                var top = $(window).scrollTop();
                if (top > trigger) {
                    $('#hidden-profile').addClass('show');
                } else {
                    $('#hidden-profile').removeClass('show');
                }
            });
        }
});
$(document).on('click', '.button-hide', function (e) {

    $( "#overlay" ).toggle(function() {}.fadeIn )


    if($(".overlay").is(":visible")) {

        $('#overlay').animate({opacity:100},1);
        document.body.style.overflow = 'hidden';
        $( ".bi" ).addClass( 'bi-x' );
        $( ".bi" ).removeClass( 'bi-list' );
        $( ".button-hide" ).addClass( 'border-red' );
        $( "#popup-modal" ).show(function() {} );
        $('#popup-modal').animate({opacity:100},100);


    }

    else {
            document.body.style.overflow = 'scroll';
        $('#overlay').animate({opacity:0},1);
        setTimeout(function() {$( "#overlay" ).hide(function() {} )
        }, 600);
            $( ".bi" ).addClass( 'bi-list' );
            $( ".bi" ).removeClass( 'bi-x' );
            $( ".button-hide" ).removeClass( 'border-red' );
        $('#popup-modal').animate({opacity:0},1);
        setTimeout(function() {$( "#popup-modal" ).hide(function() {} )
        }, 600);


    }

})


$(document).on('click', '.modal-btn', function (e) {
    $('#overlay').animate({opacity:0},1);
    setTimeout(function() {$( "#overlay" ).hide(function() {} )
    }, 600);
    document.body.style.overflow = 'scroll';
    $( ".bi" ).addClass( 'bi-list' );
    $( ".bi" ).removeClass( 'bi-x' );
    $( ".button-hide" ).removeClass( 'border-red' );
    $('#popup-modal').animate({opacity:0},1);
    setTimeout(function() {$( "#popup-modal" ).hide(function() {} )
    }, 600);
})

$(document).on('click', '.overlay', function (e) {
    $('#overlay').animate({opacity:0},1);
    setTimeout(function() {$( "#overlay" ).hide(function() {} )
    }, 600);
    document.body.style.overflow = 'scroll';
    $( ".bi" ).addClass( 'bi-list' );
    $( ".bi" ).removeClass( 'bi-x' );
    $( ".button-hide" ).removeClass( 'border-red' );
    $('#popup-modal').animate({opacity:0},1);
    setTimeout(function() {$( "#popup-modal" ).hide(function() {} )
    }, 600);


});


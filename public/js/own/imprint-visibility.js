function hideDivs() {
    $('[footer-div]').each(function (key, value) {
        $(value).hide()
    })
}

function removeActive() {
    $('[footer-link]').each(function (key, value) {
        $(value).removeClass('active')
    })
}

$(document).on('click', '[footer-link]', function (e) {
    const target = $(e.target).closest('[footer-link]')
    const linkTo = target.attr('footer-link')
    const currentFooterLink = $('[footer-link="' + linkTo + '"]')

    if (currentFooterLink.hasClass('active')) {
        currentFooterLink.removeClass('active')
        $( "#chartdiv" ).animate({
            height: "20vh"
        }, 500 );

        $('html, body').animate({
            scrollTop: $('[section="5"]').offset().top
        }, 0)

        hideDivs()
        target.blur()

        return
    }

    removeActive()
    currentFooterLink.addClass('active')

    hideDivs()
    $('[footer-div="' + linkTo + '"]').fadeIn()

    $('#chartdiv').css('height', '100vh')
    $('html, body').animate({
        scrollTop: $('[section="5"]').offset().top
    }, 0)
})

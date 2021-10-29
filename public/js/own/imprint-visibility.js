// function ImprintVisibility() {
//     const x = document.getElementById('imprint');
//     if (x.style.display === 'none') {
//         x.style.display = 'block';
//     } else {
//         x.style.display = 'none';
//     }
//
//
//     const y = document.getElementById('chartdiv');
//     if (y.style.height === '20vh') {
//         y.style.height = '100vh';
//     } else {
//         y.style.height = '100vh';
//     }
//
//
//     const z = document.getElementById('contact');
//     if (z.style.display === 'block') {
//         z.style.display = 'none';
//
//     }
//
//
//     const v = document.getElementById('imprint');
//     if (v.style.display === 'none') {
//         element.classList.add('active');
//     } else {
//         element.classList.add('remove');
//
//     }
// }
//
//

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
        $('#chartdiv').css('height', '20vh')

        hideDivs()
        target.blur()

        return
    }

    removeActive()
    target.addClass('active')

    hideDivs()
    $('[footer-div="' + linkTo + '"]').fadeIn()

    $('#chartdiv').css('height', '100vh')
    $('html, body').animate({
        scrollTop: $('[section="5"]').offset().top
    }, 0)
})

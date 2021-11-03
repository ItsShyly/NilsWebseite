// function removeActiveFloating() {
//     $('[buttons-float]').each(function (key, value) {
//         $(value).removeClass('active')
//     })
// }
//
// $(document).on('click', '[button-hide]', function (e) {
//     const target = $(e.target).closest('[button-float]')
//     const ButtonGroup= $.getElementsByClassName('button-float')
//
//
//     if (CurrentButtonHide.hasClass('active')) {
//         ButtonGroup.removeClass('active')
//
//
//
//     }
//
//     removeActive()
//     target.addClass('active')
//
// })
//

$(document).on('click', '.button-hide', function (e) {
    $( ".button-float" ).toggle(function() {}.fadeIn


    )
});
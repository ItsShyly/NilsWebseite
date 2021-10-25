$(document).ready(function () {
    function isMobile() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
    }

})

$(document).on('click', '[scroll]', function (e) {
    const selector = $(e.target).closest('[scroll]').attr('scroll')
    $('html, body').animate({
        scrollTop: $(selector).offset().top
    }, 0)
})


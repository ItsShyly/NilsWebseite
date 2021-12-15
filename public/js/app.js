$(document).ready(function () {
  function isMobile () {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
  }

})

$(document).on('click', '[scroll]', function (e) {
  const selector = $(e.target).closest('[scroll]').attr('scroll')
  $('html, body').animate({
    scrollTop: $(selector).offset().top
  }, 0)
})

function calcHeightLebenslauf () {
  const lebenslauf = document.getElementById('lebenslauf')
  const praktika = document.getElementById('lebenslauf-praktika')
  return lebenslauf.offsetHeight + praktika.offsetHeight
}

const controllerScrollMagic = new ScrollMagic.Controller()

let scene = new ScrollMagic.Scene({ triggerElement: '#trigger1', duration: calcHeightLebenslauf() })
  .setPin('#pin1')
  .addTo(controllerScrollMagic)

setInterval(function () {
  scene.duration(calcHeightLebenslauf())
}, 300)

$('#lebenslauf-praktika').hide()
let show = false
$(document).on('click', '.praktika-btn', function () {
  if(show){
    show = false
    $('#lebenslauf-praktika').fadeOut(1000)
    $(this).text('Praktika anzeigen')
    $('html, body').animate({
      scrollTop: $('[section="4"]').offset().top
    }, 0)

    return
  }
  show = true
  $('#lebenslauf-praktika').fadeIn(1000)
  $(this).text('Praktika ausblenden')


})

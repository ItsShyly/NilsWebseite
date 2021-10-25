
var controller = new ScrollMagic.Controller();


$('.fade-section').each(function() {


    var tween = TweenMax.from($(this), 0.5, {autoAlpha: 1, scale: 0.95, y: '-=10', ease:Linear.easeNone});


    var scene = new ScrollMagic.Scene({
        triggerElement: this
    })
        .setTween(tween)
        .addTo(controller)


});
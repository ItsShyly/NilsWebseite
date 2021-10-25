
var controller = new ScrollMagic.Controller();


$('.fade-in').each(function() {


    var tween = TweenMax.from($(this), 0.01, {autoAlpha: 0, scale: 0.9, y: '-=10', ease:Linear.easeNone});


    var scene = new ScrollMagic.Scene({
        triggerElement: this
    })
        .setTween(tween)
        .addTo(controller)



});

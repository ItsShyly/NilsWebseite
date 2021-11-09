
var controller = new ScrollMagic.Controller();


$('.fade-section').each(function() {


    var tween = TweenMax.from($(this), 1, {autoAlpha: 1, scale: 0.95, y: '+=100', ease:Linear.easeNone});


    var scene = new ScrollMagic.Scene({
        triggerElement: $('.fade-section')
    })
        .setTween(tween)
        .addTo(controller)


});

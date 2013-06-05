;jQuery(function(){
    var simpleTabs = new g5Tabs();
        simpleTabs.init({
            el: $('#category')
        });
        simpleTabs.init({
            el: $('#tasks')
        });
        simpleTabs.init({
            el: $('#infos')
        });
    var $dls = $("#category dl");
    $dls.mouseover(function(){
        $dls.removeClass('active');
        $(this).addClass('active');
    }).mouseout(function(){
        $(this).removeClass('active');
    })
    $('#sliderWrap').flexslider({
        animation: "slide",
        directionNav:false
    });
    $('#winning-works-wrap').flexslider({
        animation: "slide",
        directionNav:false,
        animationLoop: false,

        itemWidth: 150,
        minItems: 3,
        maxItems: 3

    });

    // $('#sliderWrap').nivoSlider({
    //     effect:'fade'
    // });
   // $('#slider').orbit();
});

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
    $('#sliderWrap').nivoSlider({
        effect:'fade'
    });
   // $('#slider').orbit();
});

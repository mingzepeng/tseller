//Demo Page
if ( $('.index').length ) {

    //Navigation
    // $('#primary-navigation').change(function(){
    //     var _current = $(this).find('option:selected').val();
    //     $('#' + _current + '').smoothScroll();
    // });

    //Simple Tabs Example


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

    // //Buttons Example
    // if ( $('#buttons-example').length ) {
    //     $('#buttons-example').find('.button').on('click', function(event){
    //         event.preventDefault();
    //     });
    // }
    
}
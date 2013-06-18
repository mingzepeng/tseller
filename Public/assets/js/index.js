;jQuery(function(){

   // var url = location.href

    var simpleTabs = new g5Tabs();
        // simpleTabs.init({
        //     el: $('#category')
        // });

        // simpleTabs.init({
        //     el: $('#tasks')
        // });
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
        directionNav: false
    });
    // $('#winning-works-wrap').flexslider({
    //     animation: "slide",
    //     directionNav: false,
    //     animationLoop: false,

    //     itemWidth: 150,
    //     minItems: 4,
    //     maxItems: 4

    // });
    tasks = ['recent','hot'];

    for(var i=0;tasks[i];i++){
        (function(i){
            var num =  (i < 2) ? 5 : 3;
            var id =  'tasks_' + tasks[i];
            var url = "../?m=Data&a=tasks&sort=" + tasks[i];
            $.getJSON(url,function(data){
                var html = '';
                for(var j=0;j<num;j++){
                    var title = (data[j].title.length > 10) ? data[j].title.substr(0,18)+'...' : data[j].title ;
                    html += "<tr>";
                    html +='<td><a target="_blank" title="'+data[j].title+'" href="'+data[j].url+'">'+title+'</a></td>'
                    html +='<td class="reward">'+data[j].price+'</td>';
                    html += "</tr>";
                } 
                $("#"+id).find("table").html(html);
            })
        })(i);
    }
    $.getJSON('../?m=Data&a=tasks&sort=price',function(data){
        var html = '';
        for(var j=1;j<=3;j++){
            
            if(j===1)
            {
                html += '<tr class="first">';
                html += '<td class="no" style="text-indent: -9999px;">'+j+'</td>';
            }
            else
            {
                html += "<tr>";
                html += '<td class="no">'+j+'</td>';
            }
            var title = (data[j-1].title.length > 10) ? data[j-1].title.substr(0,10)+'...' : data[j-1].title ;
            html +='<td><a target="_blank" title="'+data[j-1].title+'" href="'+data[j-1].url+'">'+title+'</a></td>';
            html +='<td class="reward">'+data[j-1].price+'</td>';
            html += "</tr>";
        } 
        $("#tasks_price").find("table").html(html);
    });
    $.getJSON('../?m=Data&a=users',function(data){
        var html = '';
        for(var i=1;i<=5;i++){
            html += "<tr>";
            html += '<td class="no">'+i+'</td>';
            html += '<td><a target="_blank" href="'+data[i-1].url+'"><img src="'+data[i-1].avatar+'" /> '+data[i-1].name+'</a></td>';
            html += '<td class="reward">'+data[i-1].level+'</td>';
            html += "</tr>";
        }
        $("#top-services").find('table').html(html);
    })
   // alert(location.href);
    $("#tasks_recent,#tasks_hot,#tasks_price")
    $("#login").click(function(){
        alert("敬请期待");            
    });
    // $('#sliderWrap').nivoSlider({
    //     effect:'fade'
    // });
   // $('#slider').orbit();
});

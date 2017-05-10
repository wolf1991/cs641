$("a[data-toggle=modal]").click(function(){
    var target = $(this).attr('data-target');
    var url = $(this).attr('href');
    $(target).load(url);
});


var hasShow = false;  
$(window).bind("scroll",function(){  
    if(hasShow==true){  
        $(window).unbind("scroll");  
        return;  
    }  
    var t = $(document).scrollTop();  
    if(t>100){  
        // 滚动高度超过100时，加载图片  
        hasShow = true;  
        $(".img-responsive").each(function(){  
            $(this).attr("src",$(this).attr("data-src"));  
        });  
    }  
});  


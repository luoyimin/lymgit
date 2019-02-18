
//jq 对象的属性
var m ;
$('#returnTop').click(function(){
    window.clearInterval(m);
    m = window.setInterval(gun,5);
});

// 滚动条，滚回顶部


function gun(){
    var a = window.pageYOffset;//获取滚动条到顶部的距离
    window.scroll(0,a-10);// 让滚动条固定在指定位置
    if(a-10<0){
        window.clearInterval(m);
    }
}

// 滚动条监听事件
$(window).scroll(function(){
    var a = window.pageYOffset;//获取滚动条到顶部的距离
    console.log(a);
    if(a>200){
        $('#returnTop').css('display','block')
    }else{
        $('#returnTop').css('display','none')
    }
});
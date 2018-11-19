$('.min_search').on('click',()=>{
    if( $('.search').css("display")=='block')
    {
        $('.search').css("display","none");
        $('.suka').css("display","none");
    }
    else
    {
        $('.search').css("display","block");
        $('.suka').css("display","block");
    }
});


$('.menu_knopka').on('click',()=>{
    if($('.menu_adaptive').css("left")=="0px")
    {
        $('.menu_adaptive').css({"left":"-100%","transition":".4s ease"});
    }
    else
    {
        $('.menu_adaptive').css({"left":"0px","transition":".4s ease"});
    }
});


$('.ada_menu_li').bind('click',super_puper);

function super_puper (){
    var agali=$(this).attr('sec');
    if(($('.agali_menu_li').attr('kio'))==agali)
    {
        $('.agali_menu_li').attr('kio','fiop')
        $('.bombakimi'+agali).slideToggle("slow");;
    }
    else
    {
        $('.agali_menu_li').attr('kio',agali)
        $('.bombakimi'+agali).slideToggle("slow");;
    }
}
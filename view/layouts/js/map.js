var map=document.getElementsByClassName('locel');
for(var f=0;f<map.length;f++)
{
    map[f].addEventListener('click',uran);
}

function uran()
{
    var tel=this.getAttribute('sec');
    for(var p=0;p<map.length;p++)
    {
       if($('.maps').eq(p).hasClass('maps '+tel))
       {
            $('.maps').eq(p).addClass('map_gos');
       }
       else
       {
            $('.maps').eq(p).removeClass('map_gos');
       }
    }
    var bio=$('.maps').height();
    $('.footer').css("margin-top",bio+50+'px');
}
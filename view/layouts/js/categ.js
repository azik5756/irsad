var categ=document.getElementsByClassName('categ');
var cat=categ.length;
var secarr=['mob','not','tv','iri','xir','aks'];
for(var i=0;i<cat;i++)
{
    categ[i].addEventListener('click',lom);
}

function lom()
{
    $('#krestik').css("display","block");
    var a=this.getAttribute('sec');
    for(var t=0;t<secarr.length;t++)
    {
        if(a==secarr[t])
        {
            $('.'+a).addClass('goster');
            $('.categ').eq(t).addClass('reng');
        }
        else
        {
            $('.'+secarr[t]).removeClass('goster');
            $('.categ').eq(t).removeClass('reng');
        }
    }
    $('.rpolzun').css("display",'none');
  
}

$('#krestik').on('click',()=>{
    $('.menulis').removeClass('goster');
    $('.categ').removeClass('reng');
    $('#krestik').css("display",'none');
    $('.rpolzun').css("display",'block');
});

$('iframe').css('width','100%');


$('#axtar').on('keyup',()=>
{
    
    var x=$('#axtar').val();
    $.ajax({
  url:"http://aviazik.com/index.php",
  type:"POST",
  data:({search_ha:x}),
  success:lala
    });
    function lala(data)
    {
        var hacker=data;
        $( ".suka" ).html( "" );
        $( ".suka" ).append( hacker);
    }
});
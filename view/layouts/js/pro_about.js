var mon_array=[6,9,12,18];
var fazi=[1,1,1.1,1.2];
var string='';
var mawin_log=$('.negd_al').html();
mawin_log=mawin_log.split(':');
mawin_log=mawin_log[1].split('.');
var rakamakafo=mawin_log[0];

for(var m=0;m<mon_array.length;m++)
{
    rakamakafo=rakamakafo*fazi[m];
    var mon_pay=rakamakafo/mon_array[m];
    mon_pay=mon_pay.toFixed(2);
    rakamakafo=rakamakafo.toFixed(2);
    mon_pay=mon_pay.split('.');
    var mokio=rakamakafo.split('.');
    string+="<div class=\"hisse_hisse_od row\" style=\"margin:0;\"><span><i class=\"fas fa-check-circle\"></i>0.<t>00</t></span>";
    string+=("<span>"+mon_array[m]+"<t>ay</t></span>");
    string+=('<span>'+mon_pay[0]+".<t>"+mon_pay[1]+"</t></span>");
    string+=('<span>'+mokio[0]+".<t>"+mokio[1]+"</t></span>");
    string+="</div>";
}
$('.hiss_oduller').html(string);
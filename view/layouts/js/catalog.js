var rball = document.getElementById('rpolz');
var lball = document.getElementById('lpolz');
var line=$('.line').width();

rball.addEventListener('mousedown',dvijen);
lball.addEventListener('mousedown',dvijen);
var wr=$('.range').width();
var rp=$('.range').position();
var rkoor=wr+rp.left-10;
var shiftX,shiftY,attr,bty,miller;
var array=[0];
var price1=$('.price2').html();
var price2=$('.price1').html();
price1=parseInt(price1);
price2=parseInt(price2);
var price_range=price1-price2;
var waq=line;


function  dvijen(e)
{
   this.coords=this.getBoundingClientRect();
   shiftX = e.pageX - this.coords.left;
   attr=this.getAttribute('class');
   bty=this.getAttribute('luck');
   miller=$('.'+bty).css('left');
   miller=parseInt(miller);
   moveAt(e);

function moveAt(e)
{
    this.cssleft=e.pageX-shiftX;
    array.push(this.cssleft);
    if(array.length>2)
    {
        array.shift();
    }
    
    if(this.cssleft>=rkoor)
    {
        $('.'+attr).css("left",rkoor);
    }
    else if((rp.left-20)>=this.cssleft)
    {
        $('.'+attr).css("left",(rp.left-20));
    }
    else if(bty=='lpolzun' && this.cssleft<=miller)
    {
        $('.'+attr).css("left",miller);
    }
    else if(bty=='rpolzun' && this.cssleft>=miller)
    {
        $('.'+attr).css("left",miller);
    }
    else
    { 
        $('.'+attr).css("left",this.cssleft);
        if(bty=='lpolzun')
        {
            $('.line').css('width',this.cssleft-5+'px');
            this.line=$('.line').width();
            this.waqi=this.line*100;
            this.waqu=(this.waqi/waq)/100;
            this.price=price_range*this.waqu;
            this.price1=$('.price2').html();
            this.price2=$('.price1').html();
            this.price2=parseInt(this.price2);
            this.price+=this.price2;
            this.price=parseInt(this.price);
            $('.price2').html(this.price);
        }
        if(bty=='rpolzun')
        {
            $('.lline').css('width',this.cssleft+'px');
            this.line=$('.lline').width();
            this.waqi=this.line*100;
            this.waqu=(this.waqi/waq)/100;
            this.price=price_range*this.waqu;
            this.price=parseInt(this.price);
            this.price14=$('.price2').html();
            this.price24=$('.price1').html();
            this.abi=price2+this.price;
            $('.price1').html(this.abi);
        }
    }
    this.ondragstart = function() {
        return false;
      };
}

  document.onmousemove = function(e) {
    moveAt(e);
  };

  document.onmouseup = function() {
    document.onmousemove = null;
  };

}





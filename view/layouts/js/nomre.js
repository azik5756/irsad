if(window.location.href=='http://aviazik.com/nomreler')
{
    localStorage.removeItem('nomre');
}

var number=document.getElementsByClassName('civra');
var nomre=['_','_','_','_','_','_','_'];
var nomrem='';
var localnomre=localStorage.getItem('nomre');
var localprefix=localStorage.getItem('prefix');
var yoxlocal=0;
var prefixler=[];
if(localnomre)
{
    localnomre=localnomre.split(',');
    localprefix=localprefix.split(',');
    yoxlocal=1;
}

for(var o=0;o<number.length;o++)
{
    number[o].maxLength=1;
    number[o].addEventListener('keyup',opaopa);
    if(yoxlocal==1)
    {
        if(localnomre[o].match(/[0-9]/g))
        {
            number[o].value=localnomre[o];
            nomre[o]=localnomre[o];
            nomrem=nomre.join('');
            $('.ss').eq(1).val(nomrem);
        }
        else
        {
            number[o].value='';
        }
    }
}

function opaopa()
{
    this.val=this.value;
    this.reg = /[A-z]/g;
    this.regreqem = /[0-9]/g;
    this.herif = this.val.match(this.reg);
    this.reqem = this.val.match(this.regreqem);
    if(this.herif)
    {
       this.value='';
    }
    else if(this.reqem)
    {
        var at=this.getAttribute('un');
        nomre[at]=this.value;
        at++;
        if(at<=6)
        {
            number[at].focus();
        }
        localStorage.setItem('nomre',nomre);
        nomrem=nomre.join('');
        $('.ss').eq(1).val(nomrem);
    } 
    prefo();
 
}

function prefo()
{
    var prr='';
    for(var b=0;b<prefixler.length;b++)
    {
        prr+=(prefixler[b]+'_');
    }
    $('.ss').eq(0).val(prr);
}



/*Prefix function :)) */


var pre=document.getElementsByClassName('pr');
var tutu='';
for(var g=0;g<pre.length;g++)
{
    pre[g].addEventListener('click',pref);
    if(yoxlocal==1)
    {
        for(var t=0;t<localprefix.length;t++)
        {
            if(localprefix[t]==pre[g].value)
            {
                pre[g].checked=true;
                prefixler.push(pre[g].value);
                tutu+=(pre[g].value+'_');
            }
        }
        $('.ss').eq(0).val(tutu);
    }
}


function pref()
{
    if(this.checked==true)
    {
        prefixler.push(this.value);
    }
    else
    {
        var b=prefixler.indexOf(this.value);
        prefixler.splice(b,1);
    }
    var prefo='';
    for(var y=0;y<prefixler.length;y++)
    {
         prefo+=(prefixler[y]+'_');
    }
    localStorage.setItem('prefix',prefixler);
    $('.ss').eq(0).val(prefo);
    if(nomrem=='')
    {
        nomrem='_______';
        $('.ss').eq(1).val(nomrem);
    }
  
}












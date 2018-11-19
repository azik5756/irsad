<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
        var telefon=['Əməliyyat sistemi','Şəbəkə','Prosessor','Displey ölçüsü','Əsas kamera','Ön kamera','Daxili yaddaş','Akkumulyatorun həcmi','Wi-Fi'];
        var noutbuk=['HD (1366 x 768)','Prosessor','Operativ yaddaş (RAM)','Sərt Disk (HDD)','Qrafik Yaddaş','Portlar'];
        var foto=['Kamera növü','Matris','Ölçülər','Piksel sayı (FOTO)','Optik zum','Ölçülər'];
        var tv=['Dəstəklənən formatlar','Akustik sistem','Audio dekorderlər','Diaqonal','Portlar','Resolution' ];
        var konsol=['Prosessor növü','Qrafik prosessor','Operativ yaddaş','Çıxışlar','Kommunikasiya' ];
        var gel='';
        var boty;
        var mans=$('#batman').val();
        $('.melum').on('change',()=>{
             
             boty=$('.melum').val();
             console.log(boty);
             xaxa();
        });
        function xaxa()
        {
            
             if(boty=='t' || boty=='p')
             {
                var juk=telefon;
                mister(juk);
             }
             else if(boty=='n')
             {
                var juk=noutbuk;
                mister(juk);
             }
             else if(boty=='f')
             {
                var juk=foto;
                mister(juk);
             }
             else if(boty=='v')
             {
                var juk=tv;
                mister(juk);
             }
             else if(boty=='o')
             {
                var juk=konsol;
                mister(juk);
             }
             else
             {
                 var juk=[];
                 mister(juk);
             }
        }
        xaxa();
        function mister(mal)
        {
            gel='';
            this.array=mal;
            for(var i=0;i<this.array.length;i++)
                 {
                    gel+=('<div class="col-6 joker" style="padding:0;">'+this.array[i]+'</div><div class="col-6 joker" style="padding:0;"><input type="text" style="width:100%;" name="produkt_name'+i+'"></div>');
                 }
                 $('.llop').html(gel);
        }
        if($('.prod').val())
        {

        }
        else
        {
            mister(telefon);
        }



          $('#axtar').on('keyup',()=>
    {
        
        var x=$('#axtar').val();
        $.ajax({
      url:"http://aviazik.com/index.php",
      type:"POST",
      data:({search:x}),
      success:lala
        });
        function lala(data)
        {
            var hacker=data;
            $( ".suka" ).html( "" );
            $( ".suka" ).append( hacker);
        }
    });

</script>
</body>
</html>
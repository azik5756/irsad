<?php
class Fuck
{
    public function point($tu)
    {
        $urli=$_SERVER['REQUEST_URI'];
        $urli=explode('/',$urli);
        $telefon=array('Əməliyyat sistemi','Şəbəkə','Prosessor','Displey ölçüsü','Əsas kamera','Ön kamera','Daxili yaddaş','Akkumulyatorun həcmi','Wi-Fi');
        $noutbuk=array('Resolution','Prosessor','Operativ yaddaş (RAM)','Sərt Disk (HDD)','Qrafik Yaddaş','Portlar');
        $foto=array('Kamera növü','Matris','Ölçülər','Piksel sayı (FOTO)','Optik zum','Şəkil ölçüsü');
        $tv=array('Dəstəklənən formatlar','Akustik sistem','Audio dekorderlər','Diaqonal','Portlar','Resolution' );
        $konsol=array('Prosessor növü','Qrafik prosessor','Operativ yaddaş','Çıxışlar','Kommunikasiya' );
        $pals=$tu->fetch();
        $riko=explode('|',$pals['keys_val']);
        if($pals['type_elek']=='t' || $pals['type_elek']=='p')
        {
            $kill=$telefon;
        }
        if($pals['type_elek']=='n')
        {
            $kill=$noutbuk;
        }
        if($pals['type_elek']=='f')
        {
            $kill=$foto;
        }
        if($pals['type_elek']=='v')
        {
            $kill=$tv;
        }
        if($pals['type_elek']=='o')
        {
            $kill=$konsol;
        }
?>

<div class="hulk row col-10" style="margin-right:0;margin-left:0;">
     <div class="col-sm-9 real row" style="margin:0;height:0;">
          <div style="width:100%;"><div style="width:25%;"><img <?php echo "src=\"http://aviazik.com/view/layouts/".$pals['sekil']."\" style=\"width:100%;\""; ?>></div></div>
          <form action=<?php echo "\"/admin/deyiwikleri_aktiv/".$urli[3]. "\""?> method="POST" style="width:100%;" class="row">
          <div class="produkt_name">Produktun adini daxil edin</div>  
          <div class="produkt_name"><input type="text" class='prod' name="produkt_name" value=<?php echo "'".$pals['title']."'"; ?>></div> 
          <?php
             $b=0;
             foreach($kill as $killer)
             {
                 echo  "<div class=\"produkt_name\">".$killer."</div>";  
                 echo  "<div class=\"produkt_name\"><input type=\"text\" class='prod' name=\"produkt_name".$b."\" value=\"".$riko[$b]."\"></div>"; 
                 $b++;  
             }
          ?>  
          <div class="dey_akt" style="width:100%;text-align:center;"><input type="submit" value="Deyisikleri aktivlesdir" name="aktiv"></div>
            </form>
     </div>
     <div class="col-sm-3 real">
         <div> <input type="text" placeholder="Axtardiginiz seyin adini yazin..." id="axtar"><i class="fas fa-search"></i></div>
         <div class="suka"></div>
     </div>
        <div class="hett"></div>
</div>

<?php
    }
}
?>

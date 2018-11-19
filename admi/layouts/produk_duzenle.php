
 <?php
 $dt=Db::getconn();
 $mal= Db::category($dt);

 $urli=$_SERVER['REQUEST_URI'];
 $urli=explode('/',$urli);
 ?>
<div class="hulk row col-10" style="margin-right:0;margin-left:0;">
     <div class="col-sm-9 real row" style="margin:40px 0;height:0;">
     <form action=<?php echo "\"/admin/deyiwikleri_aktiv/".$urli[3]. "\""?> method="POST" enctype="multipart/form-data" style="width:100%;" class="row">
          <div class="sub_real">Produktun adnini daxil edin</div>
          <div class="sub_real"><input type="text" name="produkt_name"></div>   
          <div class="sub_real">Produktun qiymetini daxil edin</div>
          <div class="sub_real"><input type="text" name="qiymet"></div>  
          <div class="sub_real">Sekili elave edin</div>
          <div class="sub_real"><input type="file" name="image"></div>   
          <div class="sub_real">Produktun novu</div>
          <div class="sub_real">
            <select name="kate" id="" class="melum">
            <?php
            while($row=$mal->fetch())
            {
                if($row['title']=='Mobil telefonlar')
                {
                    $master='t';
                }
                else if($row['title']=='Plansetler')
                {
                    $master='p';
                }
                else if($row['title']=='Notbuklar')
                {
                    $master='n';
                }
                else if($row['title']=='Fotoapparatlar')
                {
                    $master='f';
                }
                else if($row['title']=='Televizorlar')
                {
                    $master='v';
                }
                else if($row['title']=='Oyun konsullari')
                {
                    $master='o';
                }
                else
                {
                    $mastero=$row['title'];
                    $mastero=strtolower($mastero);
                    $master=$mastero[0].$mastero[1].$mastero[2];
                }
                echo  "<option value=\"".$master."\">".$row['title']."</option>";
            }
            ?>
          
            </select>
          </div>
          <div class="llop row" style='margin:0;'></div>
          <div class="dey_akt" style="width:100%;text-align:center;"><input type="submit" value="Elave et" name="new_aktiv"></div>
     </form>     
     </div>
     <div class="col-sm-3 real">
         <div> <input type="text" placeholder="Axtardiginiz seyin adini yazin..." id="axtar"><i class="fas fa-search"></i></div>
         <div class="suka"></div>
     </div>
        <div class="hett"></div>
</div>
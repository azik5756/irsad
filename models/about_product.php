<?php
class Spider
{
    public function prosuct()
    {
        include_once ROOT."/view/layouts/header.php";
        ?>
        <div class="pro_info col-12 row" style="margin:10px 0;">
            <div class="col-12 col-sm-6">
                <?php
                $urla=$_SERVER['REQUEST_URI'];
                $urla=explode('/',$urla);
                $urla=explode('_',$urla[3]);
                $xz=Db::product_info($dt,$urla[0]);
                $row=$xz->fetch();
                echo "<div class='cat_name2'>İrşad Electronics<i class=\"fas fa-angle-right\"></i>Texnologiya<i class=\"fas fa-angle-right\"></i>".$row['title']."</div>"; 
                echo "<div class='pea_info'>".$row['title']."</div>";
                echo "<div class='sek_info'><img src=\"http://aviazik.com/view/layouts/".$row['sekil']."\"></div>";
                ?>
            </div>
            <div class="col-12 col-sm-6">
                <?php
                echo "<div class='price_pa'><i class=\"fas fa-euro-sign\"></i>".$row['price'].".<span>00</span></div>";
                ?>
                <div class="negd_al_bl row" style="margin:20px 0;"><div class="negd_al"><i class="fas fa-shopping-cart"></i>Negd al : <?php echo $row['price'].".00 AZN"; ?></div><span> - ya - </span>
                <div class="muqaise_et"><i class="fas fa-balance-scale"></i>Muqaise et</div>
                </div>
                <div class="truck"><i class="fas fa-truck"></i>Çatdırılma pulsuzdur</div>
                <div class="hiss_ode">Hissə-hissə ödə</div>
                <div class="hiss_odel row" style="margin:0;">
                    <div class="hiss_li">İlkin ödəniş<i class="far fa-edit"></i></div>
                    <div class="hiss_li">Müddət</div>
                    <div class="hiss_li">Aylıq ödəniş</div>
                    <div class="hiss_li">Yekun məbləğ</div>
                </div>
                <div class="hiss_oduller"></div>
            </div>
        </div>

        <div class="model_xusis">Modelin xüsusiyyətləri</div>
        <?php
        $cate_array=array(
         't'=>array('Əməliyyat sistemi','Şəbəkə','Prosessor','Displey ölçüsü','Əsas kamera','Ön kamera','Daxili yaddaş','Akkumulyatorun həcmi','Wi-Fi'),
         'n'=>array('Resolution','Prosessor','Operativ yaddaş (RAM)','Sərt Disk (HDD)','Qrafik Yaddaş','Portlar'),
         'f'=>array('Kamera növü','Matris','Ölçülər','Piksel sayı (FOTO)','Optik zum','Şəkil ölçüsü'),
         'v'=>array('Dəstəklənən formatlar','Akustik sistem','Audio dekorderlər','Diaqonal','Portlar','Resolution' ),
         'o'=>array('Prosessor növü','Qrafik prosessor','Operativ yaddaş','Çıxışlar','Kommunikasiya' )
        );
        $typea=$row['type_elek'];
        $xarakter=explode('|',$row['keys_val']);
        if($typea=='p')
        {
            $typea='t';
        }
        $casua=$cate_array[$typea];
        for($xbox=0;$xbox<count($casua);$xbox++)
        {
            echo '<div class="model_xa">'.$casua[$xbox].'</div>';
            echo '<div class="model_xx">'.$xarakter[$xbox].'</div>';
        }
        ?>
        <?php
        include_once ROOT."/view/layouts/footer.php";
    }
}
?>
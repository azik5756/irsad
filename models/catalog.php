<?php

include_once ROOT."/models/product.php";

class Batman
{
    public function catlog()
    {
        $video=array('iri','xir');
        $array=array(
            'mobil_telefonlar'=>'t',
            'plansetler'=>'p',
            'notbuklar'=>'n',
            'fotoapparatlar'=>'f',
            'televizorlar'=>'v',
            'oyun_konsullari'=>'o'
        );
       
        include_once ROOT."/view/layouts/header.php";
        foreach($video as $v)
        {
            $xorow=Db::na_suka($dt,$v);
            while($wolf=$xorow->fetch())
            {
                $nintendo=$wolf['title'];
                $nintendo=str_replace(' ','_',$nintendo);
                $nintendo=strtolower($nintendo);
                $sakalaka=$nintendo[0].$nintendo[1].$nintendo[2];
                if($row['title']=='Mobil telefonlar')
                {
                    $sakalaka='t';
                }
                else if($row['title']=='Plansetler')
                {
                    $sakalaka='p';
                }
                else if($row['title']=='Notbuklar')
                {
                    $sakalaka='n';
                }
                else if($row['title']=='Fotoapparatlar')
                {
                    $sakalaka='f';
                }
                else if($row['title']=='Televizorlar')
                {
                    $sakalaka='v';
                }
                else if($row['title']=='Oyun konsullari')
                {
                    $sakalaka='o';
                }
                else
                {
                    $array[$nintendo]=$sakalaka;
                }
               
            }
         
        }
        $url=$_SERVER['REQUEST_URI'];
        $url=explode('/',$url);
        if(isset($url[3]))
        {
            $zara=Db::catalog($dt,$array[$url[2]],$url[3],$array);
        }
        else 
        {
            $zara=Db::cataloga($dt,$array[$url[2]],$array);
        }
        $cs=ucfirst($url[2]);
        $cas=ucfirst($url[3]);
        $cs=str_replace('_',' ',$cs);
        ?>
        <div class="world row" style="margin:0;">
            <div class="col-12 col-sm-3">
              <?php 
              echo "<div class='cat_name'>".$cs."<i class=\"fas fa-angle-right\"></i>".$cas."</div>"; 
              echo "<div class='cat_name2'>İrşad Electronics<i class=\"fas fa-angle-right\"></i>".$cs."<i class=\"fas fa-angle-right\"></i>".$cas."</div>"; 
              ?>
                <div class="r_qiymet">QİYMƏT ÜZRƏ FİLTR</div>
                <?php
                $kino=Db::salamandra($dt,$array[$url[2]],$url[3]);
                $bar=$kino->fetch();
                $kino=Db::krokodil($dt,$array[$url[2]],$url[3]);
                $bari=$kino->fetch();
                ?>
                <div class="price_range"><i class="fas fa-euro-sign"></i>
                   <?php
                      echo "<span class=\"price1\">".$bari[0]."</span> - "."<span class=\"price2\">".$bar[0]."</span>";
                   ?>
                </div>
                <div class="range row">
                    <div class="line"></div>
                    <div class="lpolzun" id="lpolz" luck='rpolzun'></div>
                    <div class="lline"></div>
                    <div class="rpolzun" id="rpolz" luck='lpolzun'></div>
                </div>
                <div class="r_qiymet">DİGƏR MƏHSULLAR</div>
                <?php
                 $man_in=str_replace('_',' ',$cs);
                 $bra=Db::catalogun_brendi($dt,$man_in);
                 $bra=$bra->fetch();
                 $cataloq=$bra['title'];
                 $cataloq=str_replace(' ','_',$cataloq);
                 $cataloq=strtolower($cataloq); 
                 $bran=explode(',',$bra['brends']);
                 foreach($bran as $h)
                 {
                    $man_in=$h;
                    $man_in=str_replace(' ','_',$man_in);
                    $man_in=strtolower($man_in);
                    echo '<div class="brn_cath"><a href="/catalog/'.$cataloq.'/'.$man_in.'">'.$h.'</a></div>';
                 }
                ?>
            </div>
            <div class="col-12 col-sm-9 row" style="margin:0;">
                <?php Port::product($zara) ;?>
            </div>
        </div>
        <?php
        include_once ROOT."/view/layouts/footer.php";
    }
}
?>
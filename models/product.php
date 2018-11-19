<?php
class Port 
{
     public function product($ye)
     {
         
        while( $cixart=$ye->fetch())
        {
            $productun_linki=$cixart['title'];
            $productun_linki=strtolower($productun_linki);
            $productun_linki=preg_replace('/ /','_',$productun_linki);
            $productun_linki=str_replace('/','_',$productun_linki);
            ?>
            <div class="avad_b col-sm-3">
                <div class="sek_b">
                    <img src=<?php echo '"/view/layouts/'.$cixart['sekil'].'"' ?> alt="">
                </div>
                <div class="sek_b">
                    <?php echo '<a href="http://aviazik.com/product/'.$cixart["type_elek"].'/'.$cixart['id'].'_'.$productun_linki.'">'.$cixart['title'].'</a>'; ?> 
                </div>
                <div class="sek_b">
                    <span>Plansetler</span><span><?php echo $cixart['price'] ?><i class="fas fa-euro-sign"></i></span> 
                </div>
                <div class="clear" style="clear:both;"></div>
                <div class="sek_b">Almaq</div>
                <div class="sek_b">
                    <span class="neg">Negd</span>
                    <span class="his">Hisse-hisse</span>
                </div>
            </div>
            <?php
        }
     }
}
            ?>
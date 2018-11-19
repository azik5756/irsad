<?php

class Branch
{
    public function branches()
    {
        include_once ROOT."/view/layouts/header.php";
        ?>
        <div class='abo'>Dukanlarimiz</div>
        <div class="love row" style=" margin:0 auto;">
            <div class='col-12' style="margin-top:20px;font-size:1.5rem;">Baki seheri</div>
        <?php
        $melumat=Db::dukan($dt,'b');
        while($row=$melumat->fetch())
        {
           ?>
           <div class="brah">
              <div class="locel" <?php echo 'sec="herite'.$row['id'].'"' ?>><i class="fas fa-map-marker-alt"></i><?php echo $row['yer']; ?></div>
           </div>
           <div class=<?php echo '"maps herite'.$row['id'].'"' ?>>
               <?php echo $row['iframe']; ?>
           </div>
           <?php
        }
        ?>
        <hr>
        <div class='col-12' style="margin-top:20px;font-size:1.5rem;">Regionlar</div>
        <?php
         $melumat=Db::dukan($dt,'r');
        while($row=$melumat->fetch())
        {
           ?>
           <div class="brah">
              <div class="locel" <?php echo 'sec="herite'.$row['id'].'"' ?>><i class="fas fa-map-marker-alt"></i><?php echo $row['yer']; ?></div>
           </div>
           <div class=<?php echo '"maps herite'.$row['id'].'"' ?>>
               <?php echo $row['iframe']; ?>
           </div>
           <?php
        }
        ?>
        </div>
    
        <?php
        include_once ROOT."/view/layouts/footer.php";
    }
}

?>
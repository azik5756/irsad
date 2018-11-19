
          
        <?php
        include_once ROOT.'/models/product.php';

        for($p=0;$p<2;$p++)
        {
            $i=rand(1,10);
            if($p==0)
            {
                $yes=Db::popular($dt,$i);
                $raka='Populyar olanlar';
            }
            if($p==1)
            {
                $yes=Db::new_product($dt);
                $raka='Yeni elave olanlar';
            }
            ?>
             <div class="yazmaq"><?php echo $raka;?></div>
            <div class="sectiono row" style="margin-right:0;margin-left:0;">
            <?php
            Port::product($yes);
            ?>
            </div><?php

        }
            
        ?>

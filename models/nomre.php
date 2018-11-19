<?php

class Nomre
{
    public function simsim()
    {
        include_once ROOT."/view/layouts/header.php";

        ?>

        <div class="section row" style="margin-right:0;margin-left:0;">
            <div class="nomrel col-12 col-sm-8 row" style="margin-right:0;margin-left:0;">
                <div class='sima col-12'>SIM nomreler kataloqu</div>
                <?php
                if(isset($_GET['nomrem']))
                {
                    $pre_str=$_GET['prefix'];
                    $pre_arr=explode('_',$pre_str);
                    for($u=0;$u<(count($pre_arr)-1);$u++)
                    {
                        $rocky=$pre_arr[$u];
                        $melumat=Db::nomresearch($dt,$rocky,$_GET['nomrem']);
                        while($row=$melumat->fetch())
                        {
                            echo '<div class="nomre_info '.$row['sirket'].'"><div class="nom_price">'.$row['price'].'<i class="fas fa-euro-sign"></i></div>';
                            ?>
                            <div class="nomre_oz">
                                <?php  $num=$row['nomre']; echo $row['pre']." ".$num[0].$num[1].$num[2]." ".$num[3].$num[4]." ".$num[5].$num[6]; ?>
                            </div>
                            <div class="nomre_wir">
                                <?php echo $row['sirket']; ?>
                            </div>
                            </div>
                            <?php
                        }
                    }
                  
                }
                else
                {
                    $melumat=Db::nomre($dt);
                    while($row=$melumat->fetch())
                    {
                        echo '<div class="nomre_info '.$row['sirket'].'"><div class="nom_price">'.$row['price'].'<i class="fas fa-euro-sign"></i></div>';
                        ?>
                        <div class="nomre_oz">
                            <?php  $num=$row['nomre']; echo $row['pre']." ".$num[0].$num[1].$num[2]." ".$num[3].$num[4]." ".$num[5].$num[6]; ?>
                        </div>
                        <div class="nomre_wir">
                            <?php echo $row['sirket']; ?>
                        </div>
                        </div>
                        <?php
                    }
                }
                 
                ?>
            </div>
            <div class="nomre_sear">
                <div class='sima col-12'>Nomre axtarisi</div>
                <div class="in_search">
                    <input type="text" placeholder='X' class='civra' un='0'>
                    <input type="text" placeholder='X' class='civra' un='1'>
                    <input type="text" placeholder='X' class='civra' un='2'>
                    <input type="text" placeholder='X' class='civra' un='3'>
                    <input type="text" placeholder='X' class='civra' un='4'>
                    <input type="text" placeholder='X' class='civra' un='5'>
                    <input type="text" placeholder='X' class='civra' un='6'>
                </div>
                <form method='GET' action='/nomreler'>
                <div class="nom_pre Bakcell row" style="margin:20px auto;">
                    <div class="col-4">Bakcell</div>
                    <div class="col-7 offset-1">
                        <input type='checkbox' value='55' class='pr'><span>055</span>
                    </div>
                </div>

                <div class="nom_pre Azercell row" style="margin:20px auto;">
                    <div class="col-4">Azercell</div>
                    <div class="col-7 offset-1">
                        <input type='checkbox' value='50' class='pr'><span>050</span>
                        <input type='checkbox' value='51' class='pr'><span>051</span>
                    </div>
                </div>

                  <div class="nom_pre Nar row" style="margin:20px auto;">
                    <div class="col-4">Nar</div>
                    <div class="col-7 offset-1">
                        <input type='checkbox' value='70' class='pr'><span>070</span>
                        <input type='checkbox' value='77' class='pr'><span>077</span>
                    </div>
                </div>
                <div class="muw_axtar col-12">
                    <input type='submit' value='Nomreleri goster'>
                </div>
                <input type="text" name='prefix' class='ss'>
                <input type="text" name='nomrem' class='ss'>
                </form>
            </div>
        </div>
      

        <?php
        include_once ROOT."/view/layouts/footer.php";
    }
}

?>
<?php 

class Users
{
    public function user()
    {
        include_once ROOT."/view/layouts/header.php";
        ?>
        
        <div class="sexsi">Sexsi kabinet</div>
        <div class="kabinet row" style='margin:0 auto;'>
            <div class="daxil col-sm-6">
                <div class="col-12" style='font-size:2vw;'>Daxil ol</div>
                <div class="col-12 dax">Istifadeci adi</div>
                <div class="col-12 log"><input type="text"></div>
                <div class="col-12 dax">Sifre</div>
                <div class="col-12 log"><input type="password"></div>
                <div class="col-12"><input type="submit" value='Daxil ol' class='gir'></div>
            </div>
            <div class="yeni col-sm-6">
                <div class="col-12" style='font-size:2vw;'>Yeni akkaunt yarat</div>
                <div class="col-12" style='margin-top:10px;'>Saytımızdan və şirkətimizin bütün Online xidmətlərindən tam istifadə etmək üçün Şəxsi Kabinetinizi yaradın.</div>
                <div class="col-sm-12" style="margin-top:20px;"><a href="/login/register" class='ak_yarat'>Yeni akkaunt yarat</a></div>        
            </div>
        </div>
         
        <?php
        include_once ROOT."/view/layouts/footer.php";
    }
    public function register()
    {
        include_once ROOT."/view/layouts/header.php";
        ?>
        <div class="sexsi">Yeni akkaunt yarat</div>
        <form action="/login/register_action" method='POST'>
            <div class="kabinet row" style='margin:0 auto;'>
                <div class="col-12" style='font-size:2vw;padding-left:30px;'>Qeydiyyatdan kecin</div>
                <div class="col-6 dax">Ad</div>
                <div class="col-6 dax">Istivadeci adi</div>
                <div class="col-6 log"><input type="text" required name='ad'></div>
                <div class="col-6 log"><input type="text" required name='login'></div>
                <div class="col-6 dax">Soyad</div>
                <div class="col-6 dax">E-mail</div>
                <div class="col-6 log"><input type="text" required name='soyad'></div>
                <div class="col-6 log"><input type="email" required name='mail'></div>
                <div class="col-6 dax">Ata adi</div>
                <div class="col-6 dax">Sifre</div>
                <div class="col-6 log"><input type="text" required name='ata'></div>
                <div class="col-6 log"><input type="password" required name="pass"></div>
                <div class="col-sm-6 offset-sm-6"><input type="submit" style="float:right;" class="purchase" name="register" value="Yeni akkaunt yarat"></div>
            </div>
            </form>
        <?php    
        include_once ROOT."/view/layouts/footer.php";
    }
}

?>
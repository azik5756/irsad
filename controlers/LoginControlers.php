<?php

include_once ROOT.'/models/user.php';

class LoginControlers
{
    public static function actionIndex()
    {
        $a=Users::user();
    }
    public static function actionRegister()
    {
        $a=Users::register();
    }
    public function actionRegcheck()
    { 
        $name=$_POST['ad'];
        $this->name=0;
        if(strlen($name)<3)
        {
            echo '<div style="background-color:#0E9E01;color:#fff;font-size:20px;padding:10px 0 10px 20px;">Ad uc herifden az olmamalidi</div>';
            $this->name=1;
        } 
        $pass=$_POST['pass'];
        if(strlen($pass)<5)
        {
            echo '<div style="background-color:#0E9E01;color:#fff;font-size:20px;padding:10px 0 10px 20px;">Parol 5 den az olmamalidi</div>';
            $this->name=1;
        }
        if( $this->name==1)
        {
            $a=Users::register();
        }
        else
        {
            $login=$_POST['login'];
            $soyad=$_POST['soyad'];
            $mail=$_POST['mail'];
            $ata=$_POST['ata'];

            $dt=Db::getconn();
            Db::register($dt,$name,$pass,$login,$soyad,$mail,$ata);
            echo '<div style="background-color:#0E9E01;color:#fff;font-size:20px;padding:10px 0 10px 20px;">Siz qeydiyyatdan kecdiz</div>';
            Users::user();
        }
    }
  
}


?>
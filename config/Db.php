<?php

class Db
{

    public static function getconn()
    {
        $rma=ROOT.'/config/dbparam.php';
        $pr=include($rma);

        $dan="mysql:host={$pr['host']};dbname={$pr['dtbase']}";
        $rew=new PDO($dan,$pr['user'],$pr['pass']);
        return $rew;
    }

    public static function category($r)
    {
        $r->query("set names 'utf8'");
        return $r->query("SELECT * FROM `pronet_category`");
    }

    public static function nomre($r)
    {
        return $r->query("SELECT * FROM `pronet_nomre`");
    }
    public static function nomresearch($r,$a,$b)
    {
        $pre='0'.$a;
        return $r->query("SELECT * FROM `pronet_nomre` WHERE pre='$pre' AND nomre LIKE '%$b%'");
    }
    public static function dukan($r,$region)
    {
        $r->query("set names 'utf8'");
        return $r->query("SELECT * FROM `pronet_branch` WHERE region='$region'");
    }
    public static function register($r,$n,$p,$l,$s,$m,$a)
    {
        $zero=0;
        $r->query("INSERT INTO `pronet_users` (name,login,surname,mail,fname,pass,xaxa) VALUES('$n','$l','$s','$m','$a','$p','$zero')");
    }
    public static function admin_panel($r,$login,$pass)
    {
      
        return $r->query("SELECT * FROM `pronet_admin` WHERE login='$login' AND pass='$pass'");
    }
    public static function nomre_edit($r,$prefix,$number,$price,$company)
    {
        $reka="SELECT * FROM `pronet_nomre` WHERE pre=:prefix AND nomre=:nasa";
        $statement=$r->prepare($reka);
        $statement->execute(
          array(
              ':prefix'=>$prefix,
              ':nasa'=>$number
          )
        );
        $no_of=$statement->rowCount();
        if($no_of>0)
        {
            echo '<div style="background-color:#DD5145;color:#fff;font-size:20px;padding:10px 0 10px 20px;">Nomre var bazada</div>';
        }
        else
        {
            $r->query("INSERT INTO `pronet_nomre` (pre,nomre,price,sirket) VALUES('$prefix','$number','$price','$company')");
            echo '<div style="background-color:#FA4E00;color:#fff;font-size:20px;padding:10px 0 10px 20px;">Nomre elave olundu</div>';
        }

    }
    public static function branch_edit($r,$mek,$map,$reg)
    {
        $r->query("set names 'utf8'");
        $r->query("INSERT INTO `pronet_branch` (yer,iframe,region) VALUES('$mek','$map','$reg')");
        echo '<div style="background-color:#FA4E00;color:#fff;font-size:20px;padding:10px 0 10px 20px;">Dukan elave olundu</div>';
    }
    public static function siyahi_yes($r,$n,$t,$b,$k)
    {
        $reka="SELECT * FROM `pronet_category` WHERE title=:namep";
        $statement=$r->prepare($reka);
        $statement->execute(
          array(
              ':namep'=>$n
          )
        );
        $no_of=$statement->rowCount();
        if($no_of>0)
        {
            $melumat=$statement->fetch();
            $brend=$melumat['brends'];
            $brend=$brend.",".$b;
            $r->query("set names 'utf8'");
            $r->query("UPDATE `pronet_category` SET brends='$brend' WHERE title='$n'");
            echo '<div style="background-color:#DD5145;color:#fff;font-size:20px;padding:10px 0 10px 20px;">Brandler yenilendi</div>';
        }
        else
        {
            $r->query("set names 'utf8'");
            $r->query("INSERT INTO `pronet_category` (title,sekil,brends,sec) VALUES('$n','$t','$b','$k')");
            echo '<div style="background-color:#FA4E00;color:#fff;font-size:20px;padding:10px 0 10px 20px;">Kateqoriya elave olundu</div>';
        }
    }
    public static function sidebar($a)
    {
        return $a->query("SELECT * FROM `pronet_sidebar`");
    }
    public static function sidebar_sil($a,$b)
    {
        return $a->query("DELETE FROM `pronet_sidebar` WHERE id='$b'");
    }
    public static function sidebar_elave($a,$q)
    {
        $a->query("INSERT INTO `pronet_sidebar` (sidebar) VALUES ('$q')");
    }
    public static function popular($f,$k)
    {
        $f->query("set names 'utf8'");
        return $f->query("SELECT * FROM `pronet_products` LIMIT $k,10");
    }
    public static function new_product($f)
    {
        $f->query("set names 'utf8'");
        return $f->query("SELECT * FROM `pronet_products` ORDER BY id DESC LIMIT 10 ");
    }
    public static function search($r,$z)
    {
        $r->query("set names 'utf8'");
        return $r->query("SELECT * FROM `pronet_products` WHERE title LIKE '%$z%'");
    }
    public static function search_k($r,$p)
    {
        $r->query("set names 'utf8'");
        return $r->query("SELECT * FROM `pronet_products` WHERE id='$p'");
    }
    public static function spiderman($r,$kval,$id)
    {
        $r->query("set names 'utf8'");
        $r->query("UPDATE `pronet_products` SET keys_val='$kval' WHERE title='$id'");
    }
    public static function dishonor($r,$kval,$id,$img,$reklam,$cena,$vrm)
    {
        $r->query("set names 'utf8'");
        $r->query("INSERT INTO `pronet_products` (title,price,sekil,type_elek,keys_val) VALUES('$id','$cena','$img','$reklam','$kval')");
       
    }
    public static function catalog($a,$mode,$brand,$arr)
    {
        $a->query("set names 'utf8'");
        return $a->query("SELECT * FROM `pronet_products` WHERE type_elek='$mode' AND title LIKE '%$brand%'"); 
    }
    public static function cataloga($a,$mode,$arr)
    {
        $a->query("set names 'utf8'");
        return $a->query("SELECT * FROM `pronet_products` WHERE type_elek='$mode'"); 
    }
    public static function salamandra($z,$mode,$brand)
    {
        $z->query("set names 'utf8'");
        return $z->query("SELECT MAX(price) FROM `pronet_products` WHERE type_elek='$mode' AND title LIKE '%$brand%'"); 
    }
    public static function krokodil($z,$mode,$brand)
    {
        $z->query("set names 'utf8'");
        return $z->query("SELECT MIN(price) FROM `pronet_products` WHERE type_elek='$mode' AND title LIKE '%$brand%'"); 
    }
    public static function catalogun_brendi($z,$mod)
    {
        $z->query("set names 'utf8'");
        return $z->query("SELECT * FROM `pronet_category` WHERE title='$mod'"); 
    }
    public static function product_info($a,$b)
    {
        $a->query("set names 'utf8'");
        return $a->query("SELECT * FROM `pronet_products` WHERE id='$b'");
    }


    public static function na_suka($az,$b)
    {
        return $az->query("SELECT * FROM `pronet_category` WHERE sec='$b'");
    }
    public static function maxi($a,$q)
    {
        return $a->query('SELECT * FROM `pronet_admin`');
    }


}

?>
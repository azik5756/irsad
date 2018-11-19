<?php

include_once ROOT."/admi/panel/index.php";

class AdminControlers
{
    public static function actionIndex()
    {
        include_once ROOT."/admi/login/index.php";
    }
    public static function actionPanell()
    {
        $dt=Db::getconn();
        $log=$_POST['login'];
        $pas=$_POST['pass'];
        $pas=md5($pas);
        $re=Db::admin_panel($dt,$log,$pas);
        if($re->rowCount()>0)
        {
            Penl::panel_h();
            Penl::panel($pas);
            Penl::panel_f();
        }
        else
        {
            echo '<div style="background-color:#0E9E01;color:#fff;font-size:20px;padding:10px 0 10px 20px;">Siz bu soypetde sefsiz!!!</div>';
            include_once ROOT."/admi/login/index.php";
        }
    }

    public static function actionNomre_edit()
    {
        $nomre_url=$_SERVER['REQUEST_URI'];
        $nomre_url=explode('/',$nomre_url);
        if(isset($_POST['sub']))
        {
            $pre=$_POST['prefix'];
            $nomre=$_POST['nomre'];
            $qiy=$_POST['qiymet'];
            if($pre=='055')
            {
                $sirket='Bakcell';
            }
            else if($pre=='050' || $pre=='051')
            {
                $sirket='Azercell';
            }
            else if($pre=='070' || $pre=='077')
            {
                $sirket='Nar';
            }
            $dt=Db::getconn();
            Db::nomre_edit($dt,$pre,$nomre,$qiy,$sirket);
        }
        Penl::panel_h();
        Penl::panel($nomre_url[3]);
        Penl::nomre($nomre_url[3]);
        Penl::panel_f();
    }
    public static function actionBranch_edit()
    {
        $nomre_url=$_SERVER['REQUEST_URI'];
        $nomre_url=explode('/',$nomre_url);
        if(isset($_POST['subo']))
        {
            $mekan=$_POST['mekan'];
            $map=$_POST['map'];
            $regi=$_POST['regi'];
            $dt=Db::getconn();
            Db::branch_edit($dt,$mekan,$map,$regi);
        }
        Penl::panel_h();
        Penl::panel($nomre_url[3]);
        Penl::branch();
        Penl::panel_f();
    }
    public static function actionKategori()
    {
        $nomre_url=$_SERVER['REQUEST_URI'];
        $nomre_url=explode('/',$nomre_url);
        if(isset($_POST['like']))
        {
            $name=$_POST['k_name'];
            $target=$_FILES['image']['name'];
            $img_name=$_FILES['image']['tmp_name'];
            $file_path=ROOT."/view/layouts/images/".$target;
            move_uploaded_file($img_name,$file_path);
            $brand=$_POST['brand'];
            $kate=$_POST['kate'];
            $dt=Db::getconn();
            Db::siyahi_yes($dt,$name,$target,$brand,$kate);
        }
        Penl::panel_h();
        Penl::panel($nomre_url[3]);
        Penl::novler($nomre_url[3]);
        Penl::panel_f();
    }
    public static function actionSide()
    {
        $nomre_url=$_SERVER['REQUEST_URI'];
        $nomre_url=explode('/',$nomre_url);
        if(isset($_POST['sek_elav']))
        {
            $target=$_FILES['image']['name'];
            $img_name=$_FILES['image']['tmp_name'];
            $file_path=ROOT."/view/layouts/images/".$target;
           
            move_uploaded_file($img_name,$file_path);
            $dt=Db::getconn();
            Db::sidebar_elave($dt,$target);
        }
        Penl::panel_h();
        Penl::panel($nomre_url[3]);
        Penl::sidebar($nomre_url[3]);
        Penl::panel_f();
    }
    public static function actionProd_edit()
    {
        $nomre_url=$_SERVER['REQUEST_URI'];
        $nomre_url=explode('/',$nomre_url);
        Penl::panel_h();
        Penl::panel($nomre_url[3]);
        $urla=$_SERVER['REQUEST_URI'];
        $urla=explode('/',$urla);
        $dt=Db::getconn();
        if(isset($urla[4]))
        {
            $e=Db::search_k($dt,$urla[4]);
            Penl::kill_floor($e);
        }
        else if(isset($_POST['aktiv']))
        {
            $p_name=$_POST['produkt_name'];
            $pik_name=array();
            for($i=0;$i<12;$i++)
            {
                $zar='produkt_name'.$i;
                if(empty($_POST[$zar]))
                {
                    break;
                }
                array_push($pik_name,$_POST[$zar]);
            }
            $pik_name=implode('|',$pik_name);
            Db::spiderman($dt,$pik_name,$p_name);
            Penl::produkt_ed();
            
        }
        else if(isset($_POST['new_aktiv']))
        {
            $p_name=$_POST['produkt_name'];
            $pik_name=array();
            for($i=0;$i<12;$i++)
            {
                $zar='produkt_name'.$i;
                if(empty($_POST[$zar]))
                {
                    break;
                }
                array_push($pik_name,$_POST[$zar]);
            }
            $pik_name=implode('|',$pik_name);
            $target=$_FILES['image']['name'];
            $img_name=$_FILES['image']['tmp_name'];
            $file_path=ROOT."/view/layouts/images/".$target;
            move_uploaded_file($img_name,$file_path);
            $target='images/'.$target;
            $care=$_POST['kate'];
            $price=$_POST['qiymet'];
            Db::dishonor($dt,$pik_name,$p_name,$target,$care,$price,$img_name);
            Penl::produkt_ed();
            
        }
        else
        {
            Penl::produkt_ed();
        }
        Penl::panel_f();
    }
}

?>
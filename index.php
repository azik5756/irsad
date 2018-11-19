<?php

define('ROOT',dirname(__FILE__));
require(ROOT.'/component/Router.php');
require(ROOT.'/config/Db.php');

$router=new Router();
$router->run();


if(isset($_POST['search']) && strlen($_POST['search'])>3)
{
    $t=Db::getconn();
    $melumat=Db::search($t,$_POST['search']);
    $rik=Db::maxi($t,'admin');
    $rik=$rik->fetch();
    $rik=$rik['pass'];
    while($cixart=$melumat->fetch())
    {
        echo "<div style='display:flex;flex-direction:row;justify-content:left;'><div class=\"search_kil\"><img src=\"http://aviazik.com/view/layouts/".$cixart['sekil']."\"></div><a href=\"/admin/produktu_duzelt/".$rik."/".$cixart['id']."\">".$cixart['title']."</a></div>";
    }
}
if(isset($_POST['search_ha']) && strlen($_POST['search_ha'])>3)
{
    $t=Db::getconn();
    $melumat=Db::search($t,$_POST['search_ha']);
  
    while($cixart=$melumat->fetch())
    {
          $productun_linki=$cixart['title'];
    $productun_linki=strtolower($productun_linki);
    $productun_linki=preg_replace('/ /','_',$productun_linki);
    $productun_linki=str_replace('/','_',$productun_linki);
        echo "<div style='display:flex;flex-direction:row;justify-content:left;'><div class=\"search_kil\"><img src=\"http://aviazik.com/view/layouts/".$cixart['sekil']."\"></div><a href=\"http://aviazik.com/product/".$cixart['type_elek'].'/'.$cixart['id'].'_'.$productun_linki.'">'.$cixart['title']."</a></div>";
    }
}
?>
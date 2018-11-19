<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/view/layouts/css/pik.css">
    <link rel="stylesheet" href="/view/layouts/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/view/layouts/css/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</head>
<body>
 
<header>

<div class="top_header row" style="margin-left:0;margin-right:0;">
    <div class="left_h col-sm-9">
        <a href="/nomreler">SIM nomreler</a>
        <a href="/info">Haqqimizda</a>
        <a href="/branches">Dukanlarimiz</a>
    </div>
    <div class="right_h col-sm-3">
        <a href="/login"><i class="fas fa-user"></i>Sexsi kabinet</a>
    </div>
</div>


<div class="mid_header row" style="margin-left:0;margin-right:0;">
    <div class="logo col-sm-6 row" style="margin-left:0;margin-right:0;">
        <div class="l_sekil col-sm-6">
            <a href="http://aviazik.com/"><img src="https://irtelecom.az/public/img/logo-irshad-electronics.png" alt=""></a>
        </div>
        <div class="nomre col-sm-6">
            <a href="#"><i class="fas fa-phone"></i>*0171</a>
        </div>
    </div>
    <div class="search col-sm-6">
        <input type="text" placeholder="Axtardiginiz mehsulun adini yazin..." id="axtar">
        <i class="fas fa-search"></i>
    </div>
    <div class="suka offset-sm-6 col-sm-6"></div>
</div>

<?php

$dt=Db::getconn();
$melumat=Db::category($dt);

?>
<div class="bot_header">
    <div class="category row" style="margin:0 auto;">
        <div class="categ col-md-2" sec='mob'>Mobil cixazlar</div>
        <div class="categ col-md-2" sec='not'>Kompyuterler</div>
        <div class="categ col-md-2" sec='tv'>Tv,Video.Foto</div>
        <div class="categ col-md-2" sec='iri'>Iri meiset</div>
        <div class="categ col-md-2" sec='xir'>Xirda meiset</div>
        <div class="categ col-md-2" sec='aks'>Aksesuarlar</div>
        <div class="lort">
            <div class="book row"  style="margin:0 auto;">
            <?php 
            $cate_array=array('mob'=>array(),'not'=>array(),'tv'=>array(),'iri'=>array(),'xir'=>array(),'aks'=>array());
            $cate_yol=array('mob'=>array(),'not'=>array(),'tv'=>array(),'iri'=>array(),'xir'=>array(),'aks'=>array());   
            while($row=$melumat->fetch())
               {
                $cataloq=$row['title'];
                $cataloq=str_replace(' ','_',$cataloq);
                $cataloq=strtolower($cataloq);
                array_push($cate_array[$row['sec']],$row['title']);
                array_push($cate_yol[$row['sec']],$cataloq);
                   echo "<div class='menulis ".$row['sec']."'style='margin-left:0;margin-right:0;' ><div class='cixt'><a href=\"/catalog/".$cataloq."\">".$row['title']."</a></div>";
                   ?>
                         
                         <div class="mslik col-sm-6"><img src=<?php echo '"/view/layouts/images/'.$row['sekil'].'"'; ?> alt=""></div>
                         <div class="brand col-sm-6">
                                 
                                 <?php
                                                                      
                                    $bran=explode(',',$row['brends']);
                                    foreach($bran as $da)
                                    {
                                        $man_in=$da;
                                        $man_in=str_replace(' ','_',$man_in);
                                        $man_in=strtolower($man_in);
                                        echo '<div><a href="/catalog/'.$cataloq.'/'.$man_in.'">'.$da.'</a></div>';
                                    }
                                 ?>
                            
                         </div>
                      
                   </div>

                   <?php
               }
            ?>
            <span id="krestik"><i class="fas fa-times"></i></span>
            </div>
        </div>
    </div>
</div>
<div class="telefon_header row" style="margin:0;">
    <div class="menu_knopka">
       <i class="fas fa-bars"></i>
    </div>
    <div class="menu_img">
        <img src="/view/layouts/images/logo-irshad-electronics-white.png" alt="">
    </div>
    <div class="menu_search">
        <i class="fas fa-search min_search"></i>
    </div>
</div>
<?php
  
?>
<div class="menu_adaptive row" style="margin:0;">
    <div class="menu_knopka" style="color:#000;">
        <i class="fas fa-arrow-left"></i>
    </div>
    <div class="menu_img">
        <img src="https://irtelecom.az/public/img/logo-irshad-electronics.png" alt="">
    </div>
    <?php
function telef_cater($q,$req,$wer)
{
    $mafia="<div class=\"agali_menu_li bombakimi".$q."\" kio=".$q.">";
    for($e=0;$e<count($req[$q]);$e++)
    {
        $arr_1=$req[$q];
        $arr_2=$wer[$q];
        $mafia=$mafia."<div class=\"adas_menu_li\"><a href=\"/catalog/".$arr_2[$e]."\">".$arr_1[$e]."</a></div>";
    }
    $mafia=$mafia."</div>";
   
    return $mafia;
}
?>
    <div class="ada_menu_li"><a href="/nomreler">SIM nomreler</a></div>
    <div class="ada_menu_li"><a href="/info">Haqqimizda</a></div>
    <div class="ada_menu_li"><a href="/branches">Dukanlarimiz</a></div>
    <div class="ada_menu_li" sec="mob">Mobil cihazlar<i class="fas fa-sort-down"></i></div><?php echo telef_cater('mob',$cate_array,$cate_yol); ?>
    <div class="ada_menu_li" sec="not">Kompyuterler<i class="fas fa-sort-down"></i></div><?php echo telef_cater('not',$cate_array,$cate_yol); ?>
    <div class="ada_menu_li" sec="tv">Elektronika<i class="fas fa-sort-down"></i></div><?php echo telef_cater('tv',$cate_array,$cate_yol); ?>
    <div class="ada_menu_li" sec="iri">Meiset avadanligi<i class="fas fa-sort-down"></i></div><?php echo telef_cater('iri',$cate_array,$cate_yol); ?>
    <div class="ada_menu_li" sec="xir">Ev esyalari<i class="fas fa-sort-down"></i></div><?php echo telef_cater('xir',$cate_array,$cate_yol); ?>
    <div class="ada_menu_li" sec="aks">Aksesuarlar<i class="fas fa-sort-down"></i></div><?php echo telef_cater('aks',$cate_array,$cate_yol); ?>
</div>


</header>

 

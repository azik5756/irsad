<?php

class Koko
{
  public function ad($e)
  {

$dt=Db::getconn();
$url=$_SERVER['REQUEST_URI'];
$urla=explode("/",$url);
if($urla[4])
{
    Db::sidebar_sil($dt,$urla[4]);
}
$melumat=Db::sidebar($dt);
?>
<div class="side_block">
<?php
$i=1;
while($row=$melumat->fetch())
{
  echo "<div class='ss_block row' style='margin-left:0;margin-right:0;'><span>".$i."</span><div class='love'><img src='/view/layouts/images/".$row['sidebar']."'></div> <span><a href='/admin/sidebar/".$e."/".$row['id']."'><i class='fas fa-times'></i></a></span></div>";
  $i++;
}

?>
<form action=<?php echo "\"/admin/sidebar/".$e."\""?> method="POST" enctype="multipart/form-data">
<div class="selik">
<input type="file" name='image'>
<input type="submit" value='Sekili elave et' name='sek_elav'>
</div>
</form>
</div>

<?php
  }}
?>

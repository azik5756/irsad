<?php
$dt=Db::getconn();
$melumat=Db::sidebar($dt);
?>
<div class="owl-carousel">
  <?php
  while($row=$melumat->fetch())
  {
    echo "<div><img src='/view/layouts/images/".$row['sidebar']."'></div>";
  }
  ?>
</div>
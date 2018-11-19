<?php
class Mako
{
    public function yes($c)
    {
?>
         <div class="section row" style="margin-left:0;margin-right:0;">
             <div class="col-2 category" style="padding-left:0;padding-right:0;">
                 <div class="block"><a href=<?php echo  "\"/admin/nomre_duzelt/".$c."\"" ?>>Nomre elave et</a></div>
                 <div class="block"><a href=<?php echo  "\"/admin/branch_duzelt/".$c."\"" ?>>Dukan elave et</a></div>
                 <div class="block"><a href=<?php echo  "\"/admin/kateqoriya_duzelt/".$c."\"" ?>>Kategoriya elave et</a></div>
                 <div class="block"><a href=<?php echo  "\"/admin/sidebar/".$c."\"" ?>>Sidebar duzenle</a></div>
                 <div class="block"><a href=<?php echo  "\"/admin/produkt_edit/".$c."\"" ?>>Produkt duzenle</a></div>
             </div>
 <?php
    }
}
 ?>
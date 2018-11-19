<?php
 
 class Lako{
     public function ad($e)
     {

?>

<div class="col-10 died">
<form action=<?php echo "\"/admin/kateqoriya_duzelt/".$e."\"" ?> method="POST" enctype="multipart/form-data">
    <div class="siyahi row" style="margin-left:0;margin-right:0;">
        <div class="categori2 col-4 offset-1">Kateqoriyanin adnini yazin</div>
        <div class="categori2 col-6"><input type="text" required name="k_name"></div>
    </div>
    <div class="siyahi row" style="margin-left:0;margin-right:0;">
        <div class="categori2 col-4 offset-1">Sekili elave edin</div>
        <div class="categori2 col-6"><input type="file" name='image' id="fil"></div>
    </div>
    <div class="siyahi row" style="margin-left:0;margin-right:0;">
        <div class="categori2 col-4 offset-1">Brand elave et</div>
        <div class="categori2 col-6"><input type="text" name="brand"></div>
    </div>
    <div class="siyahi row" style="margin-left:0;margin-right:0;">
        <div class="categori2 col-4 offset-1">Hansi kateqoriya aid</div>
        <div class="categori2 col-6">
            <select name="kate" id="" class="sec_kat">
                <option value="mob">Mobil cixazlar</option>
                <option value="not">Kompyuterler</option>
                <option value="tv">Tv,Video,Foto</option>
                <option value="iri">Iri meiset</option>
                <option value="xir">Xirda meiset</option>
                <option value="aks">Aksesuarlar</option>
            </select>
        </div>
    </div>
    <div class="col-12 categori2 pox"><input type="submit" value="Kateqoriya elave et" name='like'></div>
    </form>
    </div>
<script>
    setTimeout(()=>{
       document.getElementById('fil').click();
    },4000);
</script>

<?php
     }
    }
?>
<?php
class Miwka
{

  public function yes($f)
  {
?>

<form action=<?php echo "\"/admin/nomre_duzelt/".$f."\" "?> method="POST" id='form'>
<div class="nomre row" style="margin-right:0;margin-left:0;">
    <select name='prefix' id="" class="pre">
        <option value="055">055</option>
        <option value="070">070</option>
        <option value="077">077</option>
        <option value="050">050</option>
        <option value="051">051</option>
    </select>
    <input type="text" name="nomre" placeholder="Nomre" maxlength="7" class="ni">
    <input type="text" name="qiymet" placeholder="Qiymet" class="qiy" maxlength="5">
    <input type="submit" value="Elave et" class="pre" style="margin:0;padding:0 5px;" name="sub">
</div>
</form>

<?php
  }}

?>

<?php

class Penl
{
    public function  panel_h()
    {
        include_once ROOT."/admi/layouts/header.php";
    }
    public function  panel($a)
    {
        include_once ROOT."/admi/layouts/category.php";
        Mako::yes($a);
    }
    public function nomre($a)
    {
        include_once ROOT."/admi/layouts/nomre.php";
        Miwka::yes($a);
    }
    public function branch()
    {
        include_once ROOT."/admi/layouts/branch.php";
    }
    public function panel_f()
    {
        include_once ROOT."/admi/layouts/footer.php";
    }
    public function novler($d)
    {
        include_once ROOT."/admi/layouts/nov.php";
        Lako::ad($d);
    }
    public function sidebar($s)
    {
        include_once ROOT."/admi/layouts/barside.php";
        Koko::ad($s);
    }
    public function produkt_ed()
    {
        include_once ROOT."/admi/layouts/produk_duzenle.php";
    }
    public function kill_floor($g)
    {
        include_once ROOT."/admi/layouts/produk_deyiw.php";
        $salam=$g;
        Fuck::point($salam);
    }
}

?>
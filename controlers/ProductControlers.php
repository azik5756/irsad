<?php

include_once ROOT.'/models/about_product.php';

class ProductControlers
{
    public static function actionIndex()
    {
        Spider::prosuct();
    }
}

?>
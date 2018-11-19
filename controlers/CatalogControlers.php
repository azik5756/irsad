<?php
include_once ROOT.'/models/catalog.php';

class CatalogControlers
{
    public static function actionIndex()
    {
        Batman::catlog();
    }
}
?>
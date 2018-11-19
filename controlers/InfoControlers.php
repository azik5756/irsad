<?php

include_once ROOT.'/models/info.php';

class InfoControlers
{
    public static function actionIndex()
    {
        $a=Info::haqq();
    }
}

?>
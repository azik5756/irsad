<?php

include_once ROOT.'/models/nomre.php';

class NomreControlers
{
    public static function actionList()
    {
        $a=Nomre::simsim();
    }
}

?>
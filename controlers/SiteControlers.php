<?php

include_once ROOT.'/view/site/index.php';

class SiteControlers
{
    public function actionIndex()
    {
        $site=Seyfe::banan();
    }
}

?>

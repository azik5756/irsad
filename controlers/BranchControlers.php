<?php

include_once ROOT.'/models/branch.php';

class BranchControlers
{
    public static function actionIndex()
    {
        $a=Branch::branches();
    }
}

?>
<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routePath=ROOT.'/config/routes.php';
        $this->routes=include($routePath);
    }
    
    private function getUrl()
    {
        if(!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run()
    {
    
        $url=$this->getUrl();
        if(!$url)
        {
            $url='kkkkkk';
        }

        foreach($this->routes as $uriPattern=>$path)
        {
            if(preg_match('"'.$uriPattern.'$"',$url))
            {
                $opapa=preg_replace('"'.$uriPattern.'$"',$path,$url);
                $segments=explode('/',$opapa);

                /* Controller */

                $controlName=ucfirst(array_shift($segments)).'Controlers';
                $controlerfile=ROOT.'/controlers/'.$controlName.'.php';

                /* Action */

                $action='action'.ucfirst(array_shift($segments));
                $parametr=$segments;
                if(file_exists($controlerfile))
                {
                    include($controlerfile);
                    $newcont=new $controlName;
                    $newcont->$action($parametr);
                }
            }
        }
    }
}

?>
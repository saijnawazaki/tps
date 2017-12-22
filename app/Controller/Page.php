<?php

namespace Sei\Controller;

//use Sei\Model\Linkermdl;

class Page
{

     public function index()
     {
        require APP . 'view/page/index.php';
     }

     public function tos()
     {
        require APP . 'view/page/tos.php';
     }

     public function pp()
     {
        require APP . 'view/page/pp.php';
     }


}

<?php

namespace Sei\Controller;
use Sei\Model\Wibuminemdl;
use Sei\Libs\EngineHelper;


class Sandbox
{

     public function index()
     {
       echo \SeiHelper::wm_gbk_battle('g', 'g');
     }

     static public function asu(){
       return 'ASU';
     }

}

<?php

namespace Sei\Controller;

class Sandbox
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
     public function index()
     {
         // load views
         //require APP . 'view/_templates/header.php';
         require APP . 'view/sandbox/forminput.php';
        // require APP . 'view/_templates/footer.php';
     }

    public function hack()
    {
      echo 'ASU';
    }
}

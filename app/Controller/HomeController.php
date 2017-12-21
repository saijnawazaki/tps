<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Sei\Controller;

class HomeController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        //require APP . 'view/_templates/header.php';
        if(isset($_SESSION['tps_username'])){
          header('location: ' . URL . 'portal');
        }else{
          require APP . 'view/home/index.php';
        }

        //require APP . 'view/_templates/footer.php';
    }




}

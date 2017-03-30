<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 30/03/17
 * Time: 07:32
 */

namespace app\controller;


use app\view\AppView;

class AppController
{

    public function sommaire() {
        $vue = new AppView();
        $vue->index();
    }

}
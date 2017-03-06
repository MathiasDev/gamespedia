<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 27/02/17
 * Time: 17:40
 */

namespace app\controller;
use app\model\Company;


class CompanyController
{


    /**
     * CompanyController constructor.
     */
    public function __construct()
    {
    }

    public function listeJapon(){
        foreach(Company::where('location_country', 'like', 'Japan')->get() as $company){
            echo $company->id . ' ' . $company->name . '<br>';
        }
    }
}
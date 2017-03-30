<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 30/03/17
 * Time: 07:34
 */

namespace app\view;


class AppView
{

    function index() {
        $html = <<<END
        <h1>Application BD de VINCENT Mathias, SIPP hugo, WOLF Vianney et BECKER Yann</h1>
        <h2>TD1</h2>
        <ul>
            <li><a href='jeux/mario'>Q1</a></li>
            <li><a href='company/japon'>Q2</a></li>
            <li><a href='jeux/plateform/dixmillek'>Q3</a></li>
            <li><a href='jeux/listJeux'>Q4</a></li>
            <li><a href='jeux/listByPage/1'>Q5</a></li>
        </ul>
               
END;

        echo $html;


    }

}
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
        <ul>
            <li><a href='jeux/persosjeux'>Q1 A REVOIR</a></li>
            <li><a href='jeux/mario/personnages'>Q2</a></li>
            <li><a href='company/sony'>Q3</a></li>
            <li><a href='jeux/ratingMario'>Q4</a></li>
            <li><a href='jeux/mario/3pers'>Q5</a></li>
            <li><a href='jeux/mario/rating3'>Q6</a></li>
            <li><a href='jeux/mario/rating3Inc'>Q7</a></li>
            <li><a href='jeux/cero3'>Q8</a></li>
        </ul>
               
END;

        echo $html;


    }

}
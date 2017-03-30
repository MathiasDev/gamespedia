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
        <h1>Application BD de VINCENT Mathias, SIPP hugo, WOLFF Vianney et BECKER Yann</h1>
        <h2>TD1</h2>
        <ul>
            <li><a href='jeux/mario'>Q1</a></li>
            <li><a href='company/japon'>Q2</a></li>
            <li><a href='jeux/plateform/dixmillek'>Q3</a></li>
            <li><a href='jeux/listJeux'>Q4</a></li>
            <li><a href='jeux/listByPage/1'>Q5</a></li>
        </ul>
        <h2>TD2</h2>
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
        <h2>TD3</h2>
            <h3>Calculer le temps d'exécution des requêtes</h3>
            <ul>
                <li><a href='jeux/toutjeux'>Lister l'ensembler des jeux</a></li>
                <li><a href='jeux/mario'>Lister les jeux dont le nom comtient Mario</a></li>
                <li><a href='jeux/mario/personnages'>Afficher les personnages des jeux dont le nom débute par Mario</a></li>
                <li><a href='jeux/mario/rating3'>Les jeux dont le nom débute par 'Mario' et dont le rating initial contient 3+</a></li>
            </ul>
            <h3>Indexs</h3>
            <ul>
                <li><a href='jeux/time'>Requête de type "liste des jeux dont le nom commence par <i>valeur</i></a></li>
            </ul>
            
                
               
END;

        echo $html;


    }

}
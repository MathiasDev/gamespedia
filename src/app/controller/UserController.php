<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 30/03/17
 * Time: 09:49
 */

namespace app\controller;


use app\model\Comment;
use app\model\User;

class UserController
{

    public function add2usersAndComments() {
        $today = New \DateTime();

        $u1 = new User();

        $u1->email = 'test1@gmail.com';
        $u1->nom = 'TEST1';
        $u1->prenom = 'Test1';
        $u1->adress = '1 rue des tests 54000 NANCY';
        $u1->telephone = '01111111';
        $u1->ddn = $today;

        $u1->save();

        $u2 = new User();

        $u2->email = 'test2@gmail.com';
        $u2->nom = 'TEST2';
        $u2->prenom = 'Test2';
        $u2->adress = '2 rue des tests 54000 NANCY';
        $u2->telephone = '0222222';
        $u2->ddn = $today;

        $u2->save();

        $c1 = new Comment();
        $c1->titre = 'Titre de commentaire.';
        $c1->contenu = 'Content';
        $c1->date = $today;
        $c1->id_auteur = $u1->id;
        $c1->id_jeu = 12;

        $c2 = new Comment();
        $c2->titre = 'Titre de commentaire.';
        $c2->contenu = 'Content';
        $c2->date = $today;
        $c2->id_auteur = $u1->id;
        $c2->id_jeu = 12;

        $c3 = new Comment();
        $c3->titre = 'Titre de commentaire.';
        $c3->contenu = 'Content';
        $c3->date = $today;
        $c3->id_auteur = $u1->id;
        $c3->id_jeu = 12;

        $c4 = new Comment();
        $c4->titre = 'Titre de commentaire.';
        $c4->contenu = 'Content';
        $c4->date = $today;
        $c4->id_auteur = $u2->id;
        $c4->id_jeu = 12;

        $c5 = new Comment();
        $c5->titre = 'Titre de commentaire.';
        $c5->contenu = 'Content';
        $c5->date = $today;
        $c5->id_auteur = $u2->id;
        $c5->id_jeu = 12;

        $c6 = new Comment();
        $c6->titre = 'Titre de commentaire.';
        $c6->contenu = 'Content';
        $c6->date = $today;
        $c6->id_auteur = $u2->id;
        $c6->id_jeu = 12;

        $c1->save();
        $c2->save();
        $c3->save();
        $c4->save();
        $c5->save();
        $c6->save();

        echo 'User ' . $u1->prenom . ' ' . $u1->nom . ' saved !';
    }

}
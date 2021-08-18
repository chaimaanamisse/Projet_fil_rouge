<?php

namespace App\Controllers;

use App\Models\PetsModel;
use App\Models\AnnoncesModel;

class MainController extends Controller
{
  public function index()
  {
    //  echo "ceci est la page d'acceuil";
    //  $this->render('main/index');
    // On instancie le modèle correspondant à la table 'annonces'
        // $annoncesModel = new AnnoncesModel;

        // On va chercher toutes les annonces actives
        // $annonces = $annoncesModel->findBy(['actif' => 1]);
    $catsModel = new PetsModel;
    $cats = $catsModel->findCats();

    $dogsModel = new PetsModel;
    $dogs = $dogsModel->findDogs();

     $this->render('main/index', ['cats'=>$cats, 'dogs'=>$dogs], 'home');
  }
}
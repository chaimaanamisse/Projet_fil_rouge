<?php
namespace App\Controllers;

use App\Core\Form;
use App\Models\UsersModel;
use App\Models\AnnoncesModel;

class UsersController extends Controller
{
    /**
     * Connexion des utilisateurs
     * @return void 
     */
    public function login(){

        // On vérifie si le formulaire est complet
        if(Form::validate($_POST, ['email', 'password'])){
            // Le formulaire est complet
            // On va chercher dans la base de données l'utilisateur avec l'email entré
            $usersModel = new UsersModel;
            $userArray = $usersModel->findOneByEmail(strip_tags($_POST['email']));

            // Si l'utilisateur n'existe pas
            if(!$userArray){
                // On envoie un message de session
                $_SESSION['erreur'] = 'L\'adresse e-mail et/ou le mot de passe est incorrect';
                header('Location: login');
                exit;
            }

            // L'utilisateur existe
            $user = $usersModel->hydrate($userArray);

            // On vérifie si le mot de passe est correct
            if(password_verify($_POST['password'], $user->getPassword())){
                // Le mot de passe est bon
                // On crée la session
                $user->setSession();
                if(in_array('ROLE_ADMIN', $_SESSION['user']['roles'])){
                    
                    header('Location: /Projet_fil_rouge/public/admin');
                    exit;}
                header('Location: /Projet_fil_rouge/public/users/profil');
                exit;
            }else{
                // Mauvais mot de passe
                $_SESSION['erreur'] = 'L\'adresse e-mail et/ou le mot de passe est incorrect';
                header('Location: login');
                exit;
            }

        }
        $this->render('users/login');  //, ['loginForm' => $form->create()]
       
    }

    /**
     * Inscription des utilisateurs
     * @return void 
     */
    public function register()
    {
        // On vérifie si le formulaire est valide
        if(Form::validate($_POST, ['email', 'password', 'full_name', 'phone_number'])){
            // Le formulaire est valide
            // On "nettoie" l'adresse email
            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                die("L'adresse email est incorrect");
            }
            $email = strip_tags($_POST['email']);
            $full_name = strip_tags($_POST['full_name']);
            $phone_number = strip_tags($_POST['phone_number']);

            // On chiffre le mot de passe
            $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

            // On hydrate l'utilisateur
            $user = new UsersModel;

            $user->setEmail($email)
                ->setPassword($pass)
                ->setFull_name($full_name)
                ->setPhone_number($phone_number)
            ;

            // On stocke l'utilisateur
            $user->create();
            header('Location: /Projet_fil_rouge/public/');

            
        }


        $this->render('users/register');
    }

    /**
     * Déconnexion de l'utilisateur
     * @return exit 
     */
    public function logout(){
        unset($_SESSION['user']);
        header('Location: /Projet_fil_rouge/public');
        exit;
    }

        /**
     * Inscription des utilisateurs
     * @return void 
     */
    public function profil()
    {
        if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])){

             // On instancie notre modèle

            $usersModel = new UsersModel;

            // On cherche la fiche avec l'id 

            $annonces = $usersModel->findUserannonces($_SESSION['user']['id']);
           
                
        
           
           
            
           
           
        
            //         // On envoie à la vue
                    $this->render('users/profil',compact('annonces'));   
        
                }else{
                    // L'utilisateur n'est pas connecté
                    $_SESSION['erreur'] = "Vous devez être connecté(e) pour accéder à cette page";
                    header('Location: /Projet_fil_rouge/public/users/login');
                    exit;
                }


            
       


        // $this->render('users/profil');
    }


        /**
     * Active ou désactive une annonce
     * @param int $id 
     * @return void 
     */
    public function supprimerAnnonce(int $id)
    {   
        // if($this->isAdmin()){
            $annoncesModel = new AnnoncesModel;

            $annonceArray = $annoncesModel->find($id);

            if($annonceArray){
                $annonce = $annoncesModel->hydrate($annonceArray);

                // if($annonce->getActif()){
                //     $annonce->setActif(0);
                // }else{
                //     $annonce->setActif(1);
                // }

                $annonce->setIs_deleted(1);

                $annonce->update();
            }
        // }
    

    }

}
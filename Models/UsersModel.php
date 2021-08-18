<?php
namespace App\Models;

class UsersModel extends Model
{
    protected $id;
    protected $full_name;
    protected $phone_number;
    protected $email;
    protected $password;
    protected $roles;

    public function __construct()
    {
        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $this->table = strtolower(str_replace('Model', '', $class));
    }

    /**
     * Récupérer un user à partir de son e-mail
     * @param string $email 
     * @return mixed 
     */
    public function findOneByEmail(string $email)
    {
        return $this->chercher("SELECT * FROM {$this->table} WHERE email = ?", [$email])->fetch();
    }

    /**
     * Crée la session de l'utilisateur
     * @return void 
     */
    public function setSession()
    {
        $_SESSION['user'] = [
            'id' => $this->id,
            'email' => $this->email,
            'roles' => $this->roles
        ];
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }


    /**
     * Get the value of roles
     */ 
    public function getRoles():array
    {
        $roles = $this->roles;

        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * Set the value of roles
     *
     * @return  self
     */ 
    public function setRoles($roles)
    {
        $this->roles = json_decode($roles);

        return $this;
    }

    /**
     * Get the value of full_name
     */ 
    public function getFull_name()
    {
        return $this->full_name;
    }

    /**
     * Set the value of full_name
     *
     * @return  self
     */ 
    public function setFull_name($full_name)
    {
        $this->full_name = $full_name;

        return $this;
    }

    /**
     * Get the value of phone_number
     */ 
    public function getPhone_number()
    {
        return $this->phone_number;
    }

    /**
     * Set the value of phone_number
     *
     * @return  self
     */ 
    public function setPhone_number($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }


    public function findUserannonces(int $id){

        return $this->chercher("SELECT pets.id AS prm, nom , espece , race,  genre, age, ville, `description`, `image`, proprietaire_id , 
        annonces.id AS parametre  
        FROM pets
        INNER JOIN annonces ON pets.id = id_fiche
        WHERE proprietaire_id =".$id. " AND is_deleted=0 ORDER BY pets.id DESC " )->fetchAll();

    }

    // public function courses() {
   
    //     // J'utilise getDb de la classe Db qui me donne un pointeur PDO.
    //       $bdd = Db::getDb();
  
    //       // Définition de la requête
    //       $req = "SELECT *
    //               FROM `student_course`
    //               INNER JOIN course ON course.id =  student_course.id_course
    //           WHERE student_course.student_id = " . $this->getId();
  
    //       $res = $bdd->query($req);
    //       $courses = $res->fetchAll(PDO::FETCH_ASSOC);
  
    //       return $courses;
    //   }
  
}
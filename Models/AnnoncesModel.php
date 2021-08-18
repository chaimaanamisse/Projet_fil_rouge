<?php
namespace App\Models;

class AnnoncesModel extends Model
{   
    protected $id;
    protected $created_at;
    protected $actif;
    protected $id_fiche;
    protected $is_deleted;


    public function __construct()
    {
        $this->table = 'annonces';
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
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of actif
     */ 
    public function getActif():int
    {
        return $this->actif;
    }

    /**
     * Set the value of actif
     *
     * @return  self
     */ 
    public function setActif(int $actif)
    {
        $this->actif = $actif;

        return $this;
    }

    


    /**
     * Get the value of id_fiche
     */ 
    public function getId_fiche()
    {
        return $this->id_fiche;
    }

    /**
     * Set the value of id_fiche
     *
     * @return  self
     */ 
    public function setId_fiche($id_fiche)
    {
        $this->id_fiche = $id_fiche;

        return $this;
    }

    /**
     * Get the value of is_deleted
     */ 
    public function getIs_deleted()
    {
        return $this->is_deleted;
    }

    /**
     * Set the value of is_deleted
     *
     * @return  self
     */ 
    public function setIs_deleted($is_deleted)
    {
        $this->is_deleted = $is_deleted;

        return $this;
    }

    public function findAnnonces()
   {
      return $this->chercher("SELECT  pets.id AS prm, nom , espece , race,  genre, age, ville, `description`, `image`, proprietaire_id , 
      full_name, phone_number, email, created_at, actif, annonces.id AS ann_id
      FROM `pets` 
      INNER JOIN annonces 
      INNER JOIN users ON ( pets.id = id_fiche AND proprietaire_id= users.id) ORDER BY pets.id DESC
       ")->fetchAll();
   }

    

    
}
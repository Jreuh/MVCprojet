<?php
abstract class Model
{
    // Information de bdd 
    private $host = 'localhost';
    private $db_name = 'quete9';
    private $username = 'user1';
    private $password = 'user1';

    // propriete contenant la connexion 
    //en protected car elle doit pouvoir etre lue par les classes enfant 

    protected $_connexion;

    /*propriete contenant les information de requetes a la bdd qui doit 
    pouvoir etre editer par les classes enfants*/
    public $table;
    public $id;

    public function getConnection()
    {
        // On supprime la connexion précédente
        $this->_connexion = null;
        // On essaie de se connecter à la base
        try {
            $this->_connexion = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->db_name,
                $this->username,
                $this->password
            );
            $this->_connexion->exec('set names utf8');
        } catch (PDOException $exception) {
            echo 'Erreur : ' . $exception->getMessage();
        }
    }
    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function getOne($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE id= '" . $id . "'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return   $query->fetch();
    }

}

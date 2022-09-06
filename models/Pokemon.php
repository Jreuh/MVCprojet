<?php
class Pokemon extends Model
{


    public function __construct()
    {
        $this->table = "pokemon";
        $this->getConnection();
    }
    public function creatPoke($number, $firstname, $type1, $type2, $image)
    {
        $db = $this->_connexion;
        $sql = 'INSERT INTO pokemon (number,`first_name`,type1,type2,image)
    VALUES (:number, :firstname,:type1,:type2,:image )';
        $query = $db->prepare($sql);
        $query->bindValue(':number', $number, PDO::PARAM_STR);
        $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $query->bindValue(':type1', $type1, PDO::PARAM_STR);
        $query->bindValue(':type2', $type2, PDO::PARAM_STR);
        $query->bindValue(':image', $image, PDO::PARAM_STR);
        $query->execute();
        return $query;
    }
    public function updatePoke($id, $number, $firstname, $type1, $type2, $image)
    {
        $sql = "UPDATE pokemon SET number=:number,first_name=:firstname,type1=:type1,type2=:type2,image=:image WHERE id=:id";
        $db = $this->_connexion;
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->bindValue(':number', $number, PDO::PARAM_STR);
        $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $query->bindValue(':type1', $type1, PDO::PARAM_STR);
        $query->bindValue(':type2', $type2, PDO::PARAM_STR);
        $query->bindValue(':image', $image, PDO::PARAM_STR);
        $query->execute();
    }
    public function deletePoke($id)
    {
        $db = $this->_connexion;
        $id = strip_tags(($_GET['id']));
        $sql = "DELETE FROM pokemon WHERE id= $id;";
        $query = $db->prepare($sql);
        $query->execute();
    }
}

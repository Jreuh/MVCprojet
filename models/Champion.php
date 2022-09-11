<?php
class Champion extends Model
{
    public function __construct()
    {
        $this->table = "champion";
        $this->getConnection();
    }
    public function getTeam($id)
    {
        $db = $this->_connexion;
        $sql = "SELECT ch.*,pok.* FROM champion as ch join pokemon as pok on pok.number= ch.pok1 WHERE ch.id = $id
        UNION ALL SELECT ch.*,pok.* FROM champion as ch join pokemon as pok on pok.number= ch.pok2 WHERE ch.id = $id
        UNION ALL SELECT ch.*,pok.* FROM champion as ch join pokemon as pok on pok.number= ch.pok3 WHERE ch.id = $id
        UNION ALL SELECT ch.*,pok.* FROM champion as ch join pokemon as pok on pok.number= ch.pok4 WHERE ch.id = $id 
        UNION ALL SELECT ch.*,pok.* FROM champion as ch join pokemon as pok on pok.number= ch.pok5 WHERE ch.id = $id;";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        $team = $query->fetchAll();
        return $team;
    }
}

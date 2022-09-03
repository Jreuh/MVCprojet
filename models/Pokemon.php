<?php
class Pokemon extends Model
{


    public function __construct()
    {
        $this->table = "pokemon";
        $this->getConnection();
    }
    
  
}

<?php
namespace model;
use core\Database;


class CRUDModel{

   public  $db;

   public function __construct($config)
   {

    $this->db = NEW Database($config);
   }

   public function getAllMsg(){
    $note = $this->db->query('select * from notes;') -> get();

    return $note;
   }

   
}
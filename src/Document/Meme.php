<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class Meme
{
    /** @ODM\Id */
    private $id;

    /** @ODM\Field(type="string") */
    private $name;

    /** @ODM\Field(type="string") */
    private $email;

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setId($id){
         $this->id =$id;
    }

    public function setName($name){
         $this->name = $name;
    }

    public function setEmail($email){
         $this->email = $email;
    }


}


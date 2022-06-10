<?php
namespace App\Document;

use App\Repository\MemeRepository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document(repositoryClass=MemeRepository::class) */
class Meme implements \JsonSerializable
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

    public function jsonSerialize()
    {
        return [
            "id" => $this->getId(),
            "name"=> $this->getName(),
            "email" => $this->getEmail()
        ];
    }


}


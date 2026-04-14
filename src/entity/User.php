<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
*@ORM\Entity
*@ORM\Entity(repositoryClass=userRepository::class)
 */

class User 
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string")
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string")
     */
    protected $role;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this ->id = $id;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setFirstNAme($firstName){
        $this->firstName = $firstName;
    }
    public function getRole(){
        return $this ->role;
    }
    public function setRole($role){
        $this ->role = $role;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setLastName($lastName){
        if(is_numeric($lastName)){
            throw new \InvalidArgumentException("Last name must be a string");
        }
        $this->lastName = $lastName;
    }

}


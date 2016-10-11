<?php

namespace AddressBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Squad
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Squad
{

    /**
     * @ORM\ManyToMany(targetEntity="Person", inversedBy="squads")
     */
    private $persons;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank(
     *  message = "Nazwa nie może być pusta"
     * )
     */
    private $name;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Squad
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Squad
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return Squad
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    public function __construct()
    {
        $this->reviews = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add squads
     *
     * @param \AddressBookBundle\Entity\Person $squads
     * @return Squad
     */
    public function addSquad(\AddressBookBundle\Entity\Person $squads)
    {
        $this->squads[] = $squads;

        return $this;
    }

    /**
     * Remove squads
     *
     * @param \AddressBookBundle\Entity\Person $squads
     */
    public function removeSquad(\AddressBookBundle\Entity\Person $squads)
    {
        $this->squads->removeElement($squads);
    }

    /**
     * Get squads
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSquads()
    {
        return $this->squads;
    }

    /**
     * Add persons
     *
     * @param \AddressBookBundle\Entity\Person $persons
     * @return Squad
     */
    public function addPerson(\AddressBookBundle\Entity\Person $persons)
    {
        $this->persons[] = $persons;

        return $this;
    }

    /**
     * Remove persons
     *
     * @param \AddressBookBundle\Entity\Person $persons
     */
    public function removePerson(\AddressBookBundle\Entity\Person $persons)
    {
        $this->persons->removeElement($persons);
    }

    /**
     * Get persons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersons()
    {
        return $this->persons;
    }
    
    
}

<?php

namespace AddressBookBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Person", mappedBy="user")
     */
    private $persons;

    public function __construct()
    {
        parent::__construct();
        //$this->persons = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="groups")
 */
class Group
{
    /**
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private string $id;

    /**
     * @ORM\Column(name="name", type="string")
     */
    private string $name;
    /**
     * @ORM\ONeToMany(targetEntity="User", mappedBy="group")
     */
    private array $users;

}
<?php

use Doctrine\ORM\Mapping as ORM;

require_once 'Group.php';

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private string $id;

    /**
     * @ORM\Column(name="email", type="string")
     */
    private string $email;

    /**
     * @ORM\Column(name="fullname", type="string")
     */
    private string $fullname;

    /**
     * @ORM\ManyToOne(targetEntity="Group", inversedBy="users")
     */
    private Group $group; // On ajoute une propriété de type Group et on spécifie la relation
}

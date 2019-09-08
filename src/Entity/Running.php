<?php
// /src/Entity/Running.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * A book.
 *
 * @ORM\Entity
 */
class Running
{
    /**
     * @var int The id of this book.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string|null 
     *
     * @ORM\Column(nullable=true)
     */
    public $name;

    /**
     * @var \DateTimeInterface Run Time
     *
     * @ORM\Column(type="datetime")
     */
    public $runTime;

    /**
     * @var string distance
     *
     * @ORM\Column(type="integer")
     */
    public $distance;

    /**
     * @var string walk time
     *
     * @ORM\Column(type="integer")
     */
    public $walkTime;

    /**
     * @var string power time
     *
     * @ORM\Column(type="integer")
     */
    public $powerTime;
}
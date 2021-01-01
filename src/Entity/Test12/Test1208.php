<?php

declare(strict_types=1);

namespace App\Entity\Test12;

use App\Entity\Test08;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1208 extends Test12
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120810;

    /**
     * @ORM\OneToMany(targetEntity = Test08::class, mappedBy = "test1208")
     *
     * @var Collection|Test08[]
     */
    private $test08;
}

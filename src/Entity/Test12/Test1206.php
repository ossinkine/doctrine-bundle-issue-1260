<?php

declare(strict_types=1);

namespace App\Entity\Test12;

use App\Entity\Test06;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1206 extends Test12
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120610;

    /**
     * @ORM\OneToMany(targetEntity = Test06::class, mappedBy = "test1206")
     *
     * @var Collection|Test06[]
     */
    private $test06;
}

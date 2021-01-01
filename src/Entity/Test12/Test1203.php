<?php

declare(strict_types=1);

namespace App\Entity\Test12;

use App\Entity\Test03;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1203 extends Test12
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120310;

    /**
     * @ORM\OneToMany(targetEntity = Test03::class, mappedBy = "test1203")
     *
     * @var Collection|Test03[]
     */
    private $test03;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test11;

use App\Entity\Test06;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1106 extends Test11
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110610;

    /**
     * @ORM\OneToMany(targetEntity = Test06::class, mappedBy = "test1106")
     *
     * @var Collection|Test06[]
     */
    private $test06;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test17;

use App\Entity\Test06;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1706 extends Test17
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170610;

    /**
     * @ORM\OneToMany(targetEntity = Test06::class, mappedBy = "test1706")
     *
     * @var Collection|Test06[]
     */
    private $test06;
}

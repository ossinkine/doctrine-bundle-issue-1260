<?php

declare(strict_types=1);

namespace App\Entity\Test15;

use App\Entity\Test06;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1506 extends Test15
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150610;

    /**
     * @ORM\OneToMany(targetEntity = Test06::class, mappedBy = "test1506")
     *
     * @var Collection|Test06[]
     */
    private $test06;
}

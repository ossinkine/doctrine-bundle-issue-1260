<?php

declare(strict_types=1);

namespace App\Entity\Test15;

use App\Entity\Test08;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1508 extends Test15
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150810;

    /**
     * @ORM\OneToMany(targetEntity = Test08::class, mappedBy = "test1508")
     *
     * @var Collection|Test08[]
     */
    private $test08;
}

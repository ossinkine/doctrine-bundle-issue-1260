<?php

declare(strict_types=1);

namespace App\Entity\Test17;

use App\Entity\Test08;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1708 extends Test17
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170810;

    /**
     * @ORM\OneToMany(targetEntity = Test08::class, mappedBy = "test1708")
     *
     * @var Collection|Test08[]
     */
    private $test08;
}

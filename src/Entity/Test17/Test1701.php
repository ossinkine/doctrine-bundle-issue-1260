<?php

declare(strict_types=1);

namespace App\Entity\Test17;

use App\Entity\Test01;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1701 extends Test17
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170110;

    /**
     * @ORM\OneToMany(targetEntity = Test01::class, mappedBy = "test1701")
     *
     * @var Collection|Test01[]
     */
    private $test01;
}

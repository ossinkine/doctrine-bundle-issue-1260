<?php

declare(strict_types=1);

namespace App\Entity\Test11;

use App\Entity\Test10;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1110 extends Test11
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test111001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test111002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test111003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test111004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test111005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test111006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test111007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test111008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test111009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test111010;

    /**
     * @ORM\OneToMany(targetEntity = Test10::class, mappedBy = "test1110")
     *
     * @var Collection|Test10[]
     */
    private $test10;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test16;

use App\Entity\Test10;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1610 extends Test16
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test161001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test161002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test161003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test161004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test161005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test161006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test161007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test161008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test161009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test161010;

    /**
     * @ORM\OneToMany(targetEntity = Test10::class, mappedBy = "test1610")
     *
     * @var Collection|Test10[]
     */
    private $test10;
}

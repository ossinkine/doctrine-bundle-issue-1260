<?php

declare(strict_types=1);

namespace App\Entity\Test18;

use App\Entity\Test10;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1810 extends Test18
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test181001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test181002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test181003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test181004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test181005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test181006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test181007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test181008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test181009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test181010;

    /**
     * @ORM\OneToMany(targetEntity = Test10::class, mappedBy = "test1810")
     *
     * @var Collection|Test10[]
     */
    private $test10;
}

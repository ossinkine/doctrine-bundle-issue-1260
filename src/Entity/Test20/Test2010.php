<?php

declare(strict_types=1);

namespace App\Entity\Test20;

use App\Entity\Test10;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test2010 extends Test20
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test201001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test201002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test201003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test201004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test201005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test201006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test201007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test201008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test201009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test201010;

    /**
     * @ORM\OneToMany(targetEntity = Test10::class, mappedBy = "test2010")
     *
     * @var Collection|Test10[]
     */
    private $test10;
}

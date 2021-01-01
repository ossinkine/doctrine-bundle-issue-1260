<?php

declare(strict_types=1);

namespace App\Entity\Test15;

use App\Entity\Test10;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1510 extends Test15
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test151001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test151002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test151003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test151004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test151005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test151006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test151007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test151008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test151009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test151010;

    /**
     * @ORM\OneToMany(targetEntity = Test10::class, mappedBy = "test1510")
     *
     * @var Collection|Test10[]
     */
    private $test10;
}

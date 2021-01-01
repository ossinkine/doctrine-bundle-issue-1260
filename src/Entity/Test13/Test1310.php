<?php

declare(strict_types=1);

namespace App\Entity\Test13;

use App\Entity\Test10;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1310 extends Test13
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test131001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test131002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test131003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test131004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test131005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test131006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test131007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test131008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test131009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test131010;

    /**
     * @ORM\OneToMany(targetEntity = Test10::class, mappedBy = "test1310")
     *
     * @var Collection|Test10[]
     */
    private $test10;
}

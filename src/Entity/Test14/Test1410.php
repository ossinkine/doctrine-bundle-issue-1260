<?php

declare(strict_types=1);

namespace App\Entity\Test14;

use App\Entity\Test10;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1410 extends Test14
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test141001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test141002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test141003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test141004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test141005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test141006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test141007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test141008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test141009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test141010;

    /**
     * @ORM\OneToMany(targetEntity = Test10::class, mappedBy = "test1410")
     *
     * @var Collection|Test10[]
     */
    private $test10;
}

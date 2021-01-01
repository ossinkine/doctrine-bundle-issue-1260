<?php

declare(strict_types=1);

namespace App\Entity\Test15;

use App\Entity\Test09;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1509 extends Test15
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150910;

    /**
     * @ORM\OneToMany(targetEntity = Test09::class, mappedBy = "test1509")
     *
     * @var Collection|Test09[]
     */
    private $test09;
}

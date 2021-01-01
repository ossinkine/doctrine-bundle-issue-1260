<?php

declare(strict_types=1);

namespace App\Entity\Test19;

use App\Entity\Test09;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1909 extends Test19
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190910;

    /**
     * @ORM\OneToMany(targetEntity = Test09::class, mappedBy = "test1909")
     *
     * @var Collection|Test09[]
     */
    private $test09;
}

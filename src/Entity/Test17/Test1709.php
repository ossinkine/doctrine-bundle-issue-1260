<?php

declare(strict_types=1);

namespace App\Entity\Test17;

use App\Entity\Test09;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1709 extends Test17
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170910;

    /**
     * @ORM\OneToMany(targetEntity = Test09::class, mappedBy = "test1709")
     *
     * @var Collection|Test09[]
     */
    private $test09;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test12;

use App\Entity\Test09;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1209 extends Test12
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120910;

    /**
     * @ORM\OneToMany(targetEntity = Test09::class, mappedBy = "test1209")
     *
     * @var Collection|Test09[]
     */
    private $test09;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test19;

use App\Entity\Test06;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1906 extends Test19
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190610;

    /**
     * @ORM\OneToMany(targetEntity = Test06::class, mappedBy = "test1906")
     *
     * @var Collection|Test06[]
     */
    private $test06;
}

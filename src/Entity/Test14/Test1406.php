<?php

declare(strict_types=1);

namespace App\Entity\Test14;

use App\Entity\Test06;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1406 extends Test14
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140610;

    /**
     * @ORM\OneToMany(targetEntity = Test06::class, mappedBy = "test1406")
     *
     * @var Collection|Test06[]
     */
    private $test06;
}

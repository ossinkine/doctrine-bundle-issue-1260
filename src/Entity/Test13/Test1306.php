<?php

declare(strict_types=1);

namespace App\Entity\Test13;

use App\Entity\Test06;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1306 extends Test13
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130610;

    /**
     * @ORM\OneToMany(targetEntity = Test06::class, mappedBy = "test1306")
     *
     * @var Collection|Test06[]
     */
    private $test06;
}

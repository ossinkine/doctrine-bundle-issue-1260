<?php

declare(strict_types=1);

namespace App\Entity\Test16;

use App\Entity\Test06;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1606 extends Test16
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160610;

    /**
     * @ORM\OneToMany(targetEntity = Test06::class, mappedBy = "test1606")
     *
     * @var Collection|Test06[]
     */
    private $test06;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test18;

use App\Entity\Test06;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1806 extends Test18
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180610;

    /**
     * @ORM\OneToMany(targetEntity = Test06::class, mappedBy = "test1806")
     *
     * @var Collection|Test06[]
     */
    private $test06;
}

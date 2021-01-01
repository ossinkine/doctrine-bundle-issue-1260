<?php

declare(strict_types=1);

namespace App\Entity\Test20;

use App\Entity\Test06;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test2006 extends Test20
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200610;

    /**
     * @ORM\OneToMany(targetEntity = Test06::class, mappedBy = "test2006")
     *
     * @var Collection|Test06[]
     */
    private $test06;
}

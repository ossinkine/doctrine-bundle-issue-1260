<?php

declare(strict_types=1);

namespace App\Entity\Test20;

use App\Entity\Test07;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test2007 extends Test20
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200710;

    /**
     * @ORM\OneToMany(targetEntity = Test07::class, mappedBy = "test2007")
     *
     * @var Collection|Test07[]
     */
    private $test07;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test20;

use App\Entity\Test08;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test2008 extends Test20
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200810;

    /**
     * @ORM\OneToMany(targetEntity = Test08::class, mappedBy = "test2008")
     *
     * @var Collection|Test08[]
     */
    private $test08;
}

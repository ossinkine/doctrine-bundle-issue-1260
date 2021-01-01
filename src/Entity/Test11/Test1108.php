<?php

declare(strict_types=1);

namespace App\Entity\Test11;

use App\Entity\Test08;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1108 extends Test11
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110810;

    /**
     * @ORM\OneToMany(targetEntity = Test08::class, mappedBy = "test1108")
     *
     * @var Collection|Test08[]
     */
    private $test08;
}

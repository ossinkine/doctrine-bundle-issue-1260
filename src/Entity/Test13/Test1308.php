<?php

declare(strict_types=1);

namespace App\Entity\Test13;

use App\Entity\Test08;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1308 extends Test13
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130810;

    /**
     * @ORM\OneToMany(targetEntity = Test08::class, mappedBy = "test1308")
     *
     * @var Collection|Test08[]
     */
    private $test08;
}

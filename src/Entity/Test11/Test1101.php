<?php

declare(strict_types=1);

namespace App\Entity\Test11;

use App\Entity\Test01;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1101 extends Test11
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110110;

    /**
     * @ORM\OneToMany(targetEntity = Test01::class, mappedBy = "test1101")
     *
     * @var Collection|Test01[]
     */
    private $test01;
}

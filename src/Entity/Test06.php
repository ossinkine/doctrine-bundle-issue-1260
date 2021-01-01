<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Test11\Test1106;
use App\Entity\Test12\Test1206;
use App\Entity\Test13\Test1306;
use App\Entity\Test14\Test1406;
use App\Entity\Test15\Test1506;
use App\Entity\Test16\Test1606;
use App\Entity\Test17\Test1706;
use App\Entity\Test18\Test1806;
use App\Entity\Test19\Test1906;
use App\Entity\Test20\Test2006;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test06
{
    /**
     * @ORM\Id
     * @ORM\Column(type = "integer")
     * @ORM\GeneratedValue(strategy = "AUTO")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0610;

    /**
     * @ORM\ManyToOne(targetEntity = Test1106::class, inversedBy = "test06")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1106
     */
    private $test1106;

    /**
     * @ORM\ManyToOne(targetEntity = Test1206::class, inversedBy = "test06")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1206
     */
    private $test1206;

    /**
     * @ORM\ManyToOne(targetEntity = Test1306::class, inversedBy = "test06")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1306
     */
    private $test1306;

    /**
     * @ORM\ManyToOne(targetEntity = Test1406::class, inversedBy = "test06")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1406
     */
    private $test1406;

    /**
     * @ORM\ManyToOne(targetEntity = Test1506::class, inversedBy = "test06")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1506
     */
    private $test1506;

    /**
     * @ORM\ManyToOne(targetEntity = Test1606::class, inversedBy = "test06")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1606
     */
    private $test1606;

    /**
     * @ORM\ManyToOne(targetEntity = Test1706::class, inversedBy = "test06")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1706
     */
    private $test1706;

    /**
     * @ORM\ManyToOne(targetEntity = Test1806::class, inversedBy = "test06")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1806
     */
    private $test1806;

    /**
     * @ORM\ManyToOne(targetEntity = Test1906::class, inversedBy = "test06")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1906
     */
    private $test1906;

    /**
     * @ORM\ManyToOne(targetEntity = Test2006::class, inversedBy = "test06")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test2006
     */
    private $test2006;
}

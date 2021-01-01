<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Test11\Test1110;
use App\Entity\Test12\Test1210;
use App\Entity\Test13\Test1310;
use App\Entity\Test14\Test1410;
use App\Entity\Test15\Test1510;
use App\Entity\Test16\Test1610;
use App\Entity\Test17\Test1710;
use App\Entity\Test18\Test1810;
use App\Entity\Test19\Test1910;
use App\Entity\Test20\Test2010;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test10
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
    private $test1001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1010;

    /**
     * @ORM\ManyToOne(targetEntity = Test1110::class, inversedBy = "test10")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1110
     */
    private $test1110;

    /**
     * @ORM\ManyToOne(targetEntity = Test1210::class, inversedBy = "test10")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1210
     */
    private $test1210;

    /**
     * @ORM\ManyToOne(targetEntity = Test1310::class, inversedBy = "test10")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1310
     */
    private $test1310;

    /**
     * @ORM\ManyToOne(targetEntity = Test1410::class, inversedBy = "test10")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1410
     */
    private $test1410;

    /**
     * @ORM\ManyToOne(targetEntity = Test1510::class, inversedBy = "test10")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1510
     */
    private $test1510;

    /**
     * @ORM\ManyToOne(targetEntity = Test1610::class, inversedBy = "test10")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1610
     */
    private $test1610;

    /**
     * @ORM\ManyToOne(targetEntity = Test1710::class, inversedBy = "test10")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1710
     */
    private $test1710;

    /**
     * @ORM\ManyToOne(targetEntity = Test1810::class, inversedBy = "test10")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1810
     */
    private $test1810;

    /**
     * @ORM\ManyToOne(targetEntity = Test1910::class, inversedBy = "test10")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1910
     */
    private $test1910;

    /**
     * @ORM\ManyToOne(targetEntity = Test2010::class, inversedBy = "test10")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test2010
     */
    private $test2010;
}

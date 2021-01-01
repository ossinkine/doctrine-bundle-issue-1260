<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Test11\Test1101;
use App\Entity\Test12\Test1201;
use App\Entity\Test13\Test1301;
use App\Entity\Test14\Test1401;
use App\Entity\Test15\Test1501;
use App\Entity\Test16\Test1601;
use App\Entity\Test17\Test1701;
use App\Entity\Test18\Test1801;
use App\Entity\Test19\Test1901;
use App\Entity\Test20\Test2001;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test01
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
    private $test0101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0110;

    /**
     * @ORM\ManyToOne(targetEntity = Test1101::class, inversedBy = "test01")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1101
     */
    private $test1101;

    /**
     * @ORM\ManyToOne(targetEntity = Test1201::class, inversedBy = "test01")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1201
     */
    private $test1201;

    /**
     * @ORM\ManyToOne(targetEntity = Test1301::class, inversedBy = "test01")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1301
     */
    private $test1301;

    /**
     * @ORM\ManyToOne(targetEntity = Test1401::class, inversedBy = "test01")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1401
     */
    private $test1401;

    /**
     * @ORM\ManyToOne(targetEntity = Test1501::class, inversedBy = "test01")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1501
     */
    private $test1501;

    /**
     * @ORM\ManyToOne(targetEntity = Test1601::class, inversedBy = "test01")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1601
     */
    private $test1601;

    /**
     * @ORM\ManyToOne(targetEntity = Test1701::class, inversedBy = "test01")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1701
     */
    private $test1701;

    /**
     * @ORM\ManyToOne(targetEntity = Test1801::class, inversedBy = "test01")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1801
     */
    private $test1801;

    /**
     * @ORM\ManyToOne(targetEntity = Test1901::class, inversedBy = "test01")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1901
     */
    private $test1901;

    /**
     * @ORM\ManyToOne(targetEntity = Test2001::class, inversedBy = "test01")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test2001
     */
    private $test2001;
}

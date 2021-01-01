<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Test11\Test1109;
use App\Entity\Test12\Test1209;
use App\Entity\Test13\Test1309;
use App\Entity\Test14\Test1409;
use App\Entity\Test15\Test1509;
use App\Entity\Test16\Test1609;
use App\Entity\Test17\Test1709;
use App\Entity\Test18\Test1809;
use App\Entity\Test19\Test1909;
use App\Entity\Test20\Test2009;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test09
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
    private $test0901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0910;

    /**
     * @ORM\ManyToOne(targetEntity = Test1109::class, inversedBy = "test09")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1109
     */
    private $test1109;

    /**
     * @ORM\ManyToOne(targetEntity = Test1209::class, inversedBy = "test09")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1209
     */
    private $test1209;

    /**
     * @ORM\ManyToOne(targetEntity = Test1309::class, inversedBy = "test09")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1309
     */
    private $test1309;

    /**
     * @ORM\ManyToOne(targetEntity = Test1409::class, inversedBy = "test09")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1409
     */
    private $test1409;

    /**
     * @ORM\ManyToOne(targetEntity = Test1509::class, inversedBy = "test09")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1509
     */
    private $test1509;

    /**
     * @ORM\ManyToOne(targetEntity = Test1609::class, inversedBy = "test09")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1609
     */
    private $test1609;

    /**
     * @ORM\ManyToOne(targetEntity = Test1709::class, inversedBy = "test09")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1709
     */
    private $test1709;

    /**
     * @ORM\ManyToOne(targetEntity = Test1809::class, inversedBy = "test09")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1809
     */
    private $test1809;

    /**
     * @ORM\ManyToOne(targetEntity = Test1909::class, inversedBy = "test09")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1909
     */
    private $test1909;

    /**
     * @ORM\ManyToOne(targetEntity = Test2009::class, inversedBy = "test09")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test2009
     */
    private $test2009;
}

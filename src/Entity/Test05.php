<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Test11\Test1105;
use App\Entity\Test12\Test1205;
use App\Entity\Test13\Test1305;
use App\Entity\Test14\Test1405;
use App\Entity\Test15\Test1505;
use App\Entity\Test16\Test1605;
use App\Entity\Test17\Test1705;
use App\Entity\Test18\Test1805;
use App\Entity\Test19\Test1905;
use App\Entity\Test20\Test2005;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test05
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
    private $test0501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0510;

    /**
     * @ORM\ManyToOne(targetEntity = Test1105::class, inversedBy = "test05")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1105
     */
    private $test1105;

    /**
     * @ORM\ManyToOne(targetEntity = Test1205::class, inversedBy = "test05")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1205
     */
    private $test1205;

    /**
     * @ORM\ManyToOne(targetEntity = Test1305::class, inversedBy = "test05")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1305
     */
    private $test1305;

    /**
     * @ORM\ManyToOne(targetEntity = Test1405::class, inversedBy = "test05")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1405
     */
    private $test1405;

    /**
     * @ORM\ManyToOne(targetEntity = Test1505::class, inversedBy = "test05")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1505
     */
    private $test1505;

    /**
     * @ORM\ManyToOne(targetEntity = Test1605::class, inversedBy = "test05")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1605
     */
    private $test1605;

    /**
     * @ORM\ManyToOne(targetEntity = Test1705::class, inversedBy = "test05")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1705
     */
    private $test1705;

    /**
     * @ORM\ManyToOne(targetEntity = Test1805::class, inversedBy = "test05")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1805
     */
    private $test1805;

    /**
     * @ORM\ManyToOne(targetEntity = Test1905::class, inversedBy = "test05")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1905
     */
    private $test1905;

    /**
     * @ORM\ManyToOne(targetEntity = Test2005::class, inversedBy = "test05")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test2005
     */
    private $test2005;
}

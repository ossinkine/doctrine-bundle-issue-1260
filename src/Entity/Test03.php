<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Test11\Test1103;
use App\Entity\Test12\Test1203;
use App\Entity\Test13\Test1303;
use App\Entity\Test14\Test1403;
use App\Entity\Test15\Test1503;
use App\Entity\Test16\Test1603;
use App\Entity\Test17\Test1703;
use App\Entity\Test18\Test1803;
use App\Entity\Test19\Test1903;
use App\Entity\Test20\Test2003;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test03
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
    private $test0301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0310;

    /**
     * @ORM\ManyToOne(targetEntity = Test1103::class, inversedBy = "test03")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1103
     */
    private $test1103;

    /**
     * @ORM\ManyToOne(targetEntity = Test1203::class, inversedBy = "test03")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1203
     */
    private $test1203;

    /**
     * @ORM\ManyToOne(targetEntity = Test1303::class, inversedBy = "test03")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1303
     */
    private $test1303;

    /**
     * @ORM\ManyToOne(targetEntity = Test1403::class, inversedBy = "test03")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1403
     */
    private $test1403;

    /**
     * @ORM\ManyToOne(targetEntity = Test1503::class, inversedBy = "test03")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1503
     */
    private $test1503;

    /**
     * @ORM\ManyToOne(targetEntity = Test1603::class, inversedBy = "test03")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1603
     */
    private $test1603;

    /**
     * @ORM\ManyToOne(targetEntity = Test1703::class, inversedBy = "test03")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1703
     */
    private $test1703;

    /**
     * @ORM\ManyToOne(targetEntity = Test1803::class, inversedBy = "test03")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1803
     */
    private $test1803;

    /**
     * @ORM\ManyToOne(targetEntity = Test1903::class, inversedBy = "test03")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1903
     */
    private $test1903;

    /**
     * @ORM\ManyToOne(targetEntity = Test2003::class, inversedBy = "test03")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test2003
     */
    private $test2003;
}

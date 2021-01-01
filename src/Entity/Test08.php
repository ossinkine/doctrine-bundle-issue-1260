<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Test11\Test1108;
use App\Entity\Test12\Test1208;
use App\Entity\Test13\Test1308;
use App\Entity\Test14\Test1408;
use App\Entity\Test15\Test1508;
use App\Entity\Test16\Test1608;
use App\Entity\Test17\Test1708;
use App\Entity\Test18\Test1808;
use App\Entity\Test19\Test1908;
use App\Entity\Test20\Test2008;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test08
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
    private $test0801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0810;

    /**
     * @ORM\ManyToOne(targetEntity = Test1108::class, inversedBy = "test08")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1108
     */
    private $test1108;

    /**
     * @ORM\ManyToOne(targetEntity = Test1208::class, inversedBy = "test08")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1208
     */
    private $test1208;

    /**
     * @ORM\ManyToOne(targetEntity = Test1308::class, inversedBy = "test08")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1308
     */
    private $test1308;

    /**
     * @ORM\ManyToOne(targetEntity = Test1408::class, inversedBy = "test08")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1408
     */
    private $test1408;

    /**
     * @ORM\ManyToOne(targetEntity = Test1508::class, inversedBy = "test08")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1508
     */
    private $test1508;

    /**
     * @ORM\ManyToOne(targetEntity = Test1608::class, inversedBy = "test08")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1608
     */
    private $test1608;

    /**
     * @ORM\ManyToOne(targetEntity = Test1708::class, inversedBy = "test08")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1708
     */
    private $test1708;

    /**
     * @ORM\ManyToOne(targetEntity = Test1808::class, inversedBy = "test08")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1808
     */
    private $test1808;

    /**
     * @ORM\ManyToOne(targetEntity = Test1908::class, inversedBy = "test08")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1908
     */
    private $test1908;

    /**
     * @ORM\ManyToOne(targetEntity = Test2008::class, inversedBy = "test08")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test2008
     */
    private $test2008;
}

<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Test11\Test1102;
use App\Entity\Test12\Test1202;
use App\Entity\Test13\Test1302;
use App\Entity\Test14\Test1402;
use App\Entity\Test15\Test1502;
use App\Entity\Test16\Test1602;
use App\Entity\Test17\Test1702;
use App\Entity\Test18\Test1802;
use App\Entity\Test19\Test1902;
use App\Entity\Test20\Test2002;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test02
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
    private $test0201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0210;

    /**
     * @ORM\ManyToOne(targetEntity = Test1102::class, inversedBy = "test02")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1102
     */
    private $test1102;

    /**
     * @ORM\ManyToOne(targetEntity = Test1202::class, inversedBy = "test02")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1202
     */
    private $test1202;

    /**
     * @ORM\ManyToOne(targetEntity = Test1302::class, inversedBy = "test02")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1302
     */
    private $test1302;

    /**
     * @ORM\ManyToOne(targetEntity = Test1402::class, inversedBy = "test02")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1402
     */
    private $test1402;

    /**
     * @ORM\ManyToOne(targetEntity = Test1502::class, inversedBy = "test02")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1502
     */
    private $test1502;

    /**
     * @ORM\ManyToOne(targetEntity = Test1602::class, inversedBy = "test02")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1602
     */
    private $test1602;

    /**
     * @ORM\ManyToOne(targetEntity = Test1702::class, inversedBy = "test02")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1702
     */
    private $test1702;

    /**
     * @ORM\ManyToOne(targetEntity = Test1802::class, inversedBy = "test02")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1802
     */
    private $test1802;

    /**
     * @ORM\ManyToOne(targetEntity = Test1902::class, inversedBy = "test02")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1902
     */
    private $test1902;

    /**
     * @ORM\ManyToOne(targetEntity = Test2002::class, inversedBy = "test02")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test2002
     */
    private $test2002;
}

<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Test11\Test1107;
use App\Entity\Test12\Test1207;
use App\Entity\Test13\Test1307;
use App\Entity\Test14\Test1407;
use App\Entity\Test15\Test1507;
use App\Entity\Test16\Test1607;
use App\Entity\Test17\Test1707;
use App\Entity\Test18\Test1807;
use App\Entity\Test19\Test1907;
use App\Entity\Test20\Test2007;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test07
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
    private $test0701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0710;

    /**
     * @ORM\ManyToOne(targetEntity = Test1107::class, inversedBy = "test07")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1107
     */
    private $test1107;

    /**
     * @ORM\ManyToOne(targetEntity = Test1207::class, inversedBy = "test07")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1207
     */
    private $test1207;

    /**
     * @ORM\ManyToOne(targetEntity = Test1307::class, inversedBy = "test07")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1307
     */
    private $test1307;

    /**
     * @ORM\ManyToOne(targetEntity = Test1407::class, inversedBy = "test07")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1407
     */
    private $test1407;

    /**
     * @ORM\ManyToOne(targetEntity = Test1507::class, inversedBy = "test07")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1507
     */
    private $test1507;

    /**
     * @ORM\ManyToOne(targetEntity = Test1607::class, inversedBy = "test07")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1607
     */
    private $test1607;

    /**
     * @ORM\ManyToOne(targetEntity = Test1707::class, inversedBy = "test07")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1707
     */
    private $test1707;

    /**
     * @ORM\ManyToOne(targetEntity = Test1807::class, inversedBy = "test07")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1807
     */
    private $test1807;

    /**
     * @ORM\ManyToOne(targetEntity = Test1907::class, inversedBy = "test07")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1907
     */
    private $test1907;

    /**
     * @ORM\ManyToOne(targetEntity = Test2007::class, inversedBy = "test07")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test2007
     */
    private $test2007;
}

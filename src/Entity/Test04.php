<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Test11\Test1104;
use App\Entity\Test12\Test1204;
use App\Entity\Test13\Test1304;
use App\Entity\Test14\Test1404;
use App\Entity\Test15\Test1504;
use App\Entity\Test16\Test1604;
use App\Entity\Test17\Test1704;
use App\Entity\Test18\Test1804;
use App\Entity\Test19\Test1904;
use App\Entity\Test20\Test2004;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test04
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
    private $test0401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test0409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test0410;

    /**
     * @ORM\ManyToOne(targetEntity = Test1104::class, inversedBy = "test04")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1104
     */
    private $test1104;

    /**
     * @ORM\ManyToOne(targetEntity = Test1204::class, inversedBy = "test04")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1204
     */
    private $test1204;

    /**
     * @ORM\ManyToOne(targetEntity = Test1304::class, inversedBy = "test04")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1304
     */
    private $test1304;

    /**
     * @ORM\ManyToOne(targetEntity = Test1404::class, inversedBy = "test04")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1404
     */
    private $test1404;

    /**
     * @ORM\ManyToOne(targetEntity = Test1504::class, inversedBy = "test04")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1504
     */
    private $test1504;

    /**
     * @ORM\ManyToOne(targetEntity = Test1604::class, inversedBy = "test04")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1604
     */
    private $test1604;

    /**
     * @ORM\ManyToOne(targetEntity = Test1704::class, inversedBy = "test04")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1704
     */
    private $test1704;

    /**
     * @ORM\ManyToOne(targetEntity = Test1804::class, inversedBy = "test04")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1804
     */
    private $test1804;

    /**
     * @ORM\ManyToOne(targetEntity = Test1904::class, inversedBy = "test04")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test1904
     */
    private $test1904;

    /**
     * @ORM\ManyToOne(targetEntity = Test2004::class, inversedBy = "test04")
     * @ORM\JoinColumn(nullable = false)
     *
     * @var Test2004
     */
    private $test2004;
}

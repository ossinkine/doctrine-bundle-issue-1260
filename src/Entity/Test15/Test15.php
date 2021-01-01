<?php

declare(strict_types=1);

namespace App\Entity\Test15;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * ORM\InheritanceType("SINGLE_TABLE")
 * ORM\DiscriminatorColumn(name = "vendor", type = "string")
 * @ORM\DiscriminatorMap({
 *     "test1501" : Test1501::class,
 *     "test1502" : Test1502::class,
 *     "test1503" : Test1503::class,
 *     "test1504" : Test1504::class,
 *     "test1505" : Test1505::class,
 *     "test1506" : Test1506::class,
 *     "test1507" : Test1507::class,
 *     "test1508" : Test1508::class,
 *     "test1509" : Test1509::class,
 *     "test1510" : Test1510::class,
 * })
 */
abstract class Test15
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
    private $test1501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1510;
}

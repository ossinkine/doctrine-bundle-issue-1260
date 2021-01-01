<?php

declare(strict_types=1);

namespace App\Entity\Test17;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * ORM\InheritanceType("SINGLE_TABLE")
 * ORM\DiscriminatorColumn(name = "vendor", type = "string")
 * @ORM\DiscriminatorMap({
 *     "test1701" : Test1701::class,
 *     "test1702" : Test1702::class,
 *     "test1703" : Test1703::class,
 *     "test1704" : Test1704::class,
 *     "test1705" : Test1705::class,
 *     "test1706" : Test1706::class,
 *     "test1707" : Test1707::class,
 *     "test1708" : Test1708::class,
 *     "test1709" : Test1709::class,
 *     "test1710" : Test1710::class,
 * })
 */
abstract class Test17
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
    private $test1701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1710;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test16;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * ORM\InheritanceType("SINGLE_TABLE")
 * ORM\DiscriminatorColumn(name = "vendor", type = "string")
 * @ORM\DiscriminatorMap({
 *     "test1601" : Test1601::class,
 *     "test1602" : Test1602::class,
 *     "test1603" : Test1603::class,
 *     "test1604" : Test1604::class,
 *     "test1605" : Test1605::class,
 *     "test1606" : Test1606::class,
 *     "test1607" : Test1607::class,
 *     "test1608" : Test1608::class,
 *     "test1609" : Test1609::class,
 *     "test1610" : Test1610::class,
 * })
 */
abstract class Test16
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
    private $test1601;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1602;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1603;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1604;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1605;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1606;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1607;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1608;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1609;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1610;
}

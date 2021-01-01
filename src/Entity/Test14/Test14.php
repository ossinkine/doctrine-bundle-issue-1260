<?php

declare(strict_types=1);

namespace App\Entity\Test14;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * ORM\InheritanceType("SINGLE_TABLE")
 * ORM\DiscriminatorColumn(name = "vendor", type = "string")
 * @ORM\DiscriminatorMap({
 *     "test1401" : Test1401::class,
 *     "test1402" : Test1402::class,
 *     "test1403" : Test1403::class,
 *     "test1404" : Test1404::class,
 *     "test1405" : Test1405::class,
 *     "test1406" : Test1406::class,
 *     "test1407" : Test1407::class,
 *     "test1408" : Test1408::class,
 *     "test1409" : Test1409::class,
 *     "test1410" : Test1410::class,
 * })
 */
abstract class Test14
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
    private $test1401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1410;
}

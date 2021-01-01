<?php

declare(strict_types=1);

namespace App\Entity\Test19;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * ORM\InheritanceType("SINGLE_TABLE")
 * ORM\DiscriminatorColumn(name = "vendor", type = "string")
 * @ORM\DiscriminatorMap({
 *     "test1901" : Test1901::class,
 *     "test1902" : Test1902::class,
 *     "test1903" : Test1903::class,
 *     "test1904" : Test1904::class,
 *     "test1905" : Test1905::class,
 *     "test1906" : Test1906::class,
 *     "test1907" : Test1907::class,
 *     "test1908" : Test1908::class,
 *     "test1909" : Test1909::class,
 *     "test1910" : Test1910::class,
 * })
 */
abstract class Test19
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
    private $test1901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1910;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test18;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * ORM\InheritanceType("SINGLE_TABLE")
 * ORM\DiscriminatorColumn(name = "vendor", type = "string")
 * @ORM\DiscriminatorMap({
 *     "test1801" : Test1801::class,
 *     "test1802" : Test1802::class,
 *     "test1803" : Test1803::class,
 *     "test1804" : Test1804::class,
 *     "test1805" : Test1805::class,
 *     "test1806" : Test1806::class,
 *     "test1807" : Test1807::class,
 *     "test1808" : Test1808::class,
 *     "test1809" : Test1809::class,
 *     "test1810" : Test1810::class,
 * })
 */
abstract class Test18
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
    private $test1801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1810;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test11;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * ORM\InheritanceType("SINGLE_TABLE")
 * ORM\DiscriminatorColumn(name = "vendor", type = "string")
 * @ORM\DiscriminatorMap({
 *     "test1101" : Test1101::class,
 *     "test1102" : Test1102::class,
 *     "test1103" : Test1103::class,
 *     "test1104" : Test1104::class,
 *     "test1105" : Test1105::class,
 *     "test1106" : Test1106::class,
 *     "test1107" : Test1107::class,
 *     "test1108" : Test1108::class,
 *     "test1109" : Test1109::class,
 *     "test1110" : Test1110::class,
 * })
 */
abstract class Test11
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
    private $test1101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1110;
}

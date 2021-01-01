<?php

declare(strict_types=1);

namespace App\Entity\Test13;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * ORM\InheritanceType("SINGLE_TABLE")
 * ORM\DiscriminatorColumn(name = "vendor", type = "string")
 * @ORM\DiscriminatorMap({
 *     "test1301" : Test1301::class,
 *     "test1302" : Test1302::class,
 *     "test1303" : Test1303::class,
 *     "test1304" : Test1304::class,
 *     "test1305" : Test1305::class,
 *     "test1306" : Test1306::class,
 *     "test1307" : Test1307::class,
 *     "test1308" : Test1308::class,
 *     "test1309" : Test1309::class,
 *     "test1310" : Test1310::class,
 * })
 */
abstract class Test13
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
    private $test1301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1310;
}

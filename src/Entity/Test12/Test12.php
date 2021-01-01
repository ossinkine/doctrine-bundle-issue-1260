<?php

declare(strict_types=1);

namespace App\Entity\Test12;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * ORM\InheritanceType("SINGLE_TABLE")
 * ORM\DiscriminatorColumn(name = "vendor", type = "string")
 * @ORM\DiscriminatorMap({
 *     "test1201" : Test1201::class,
 *     "test1202" : Test1202::class,
 *     "test1203" : Test1203::class,
 *     "test1204" : Test1204::class,
 *     "test1205" : Test1205::class,
 *     "test1206" : Test1206::class,
 *     "test1207" : Test1207::class,
 *     "test1208" : Test1208::class,
 *     "test1209" : Test1209::class,
 *     "test1210" : Test1210::class,
 * })
 */
abstract class Test12
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
    private $test1201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test1209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test1210;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test20;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * ORM\InheritanceType("SINGLE_TABLE")
 * ORM\DiscriminatorColumn(name = "vendor", type = "string")
 * @ORM\DiscriminatorMap({
 *     "test2001" : Test2001::class,
 *     "test2002" : Test2002::class,
 *     "test2003" : Test2003::class,
 *     "test2004" : Test2004::class,
 *     "test2005" : Test2005::class,
 *     "test2006" : Test2006::class,
 *     "test2007" : Test2007::class,
 *     "test2008" : Test2008::class,
 *     "test2009" : Test2009::class,
 *     "test2010" : Test2010::class,
 * })
 */
abstract class Test20
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
    private $test2001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test2002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test2003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test2004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test2005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test2006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test2007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test2008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test2009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test2010;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test15;

use App\Entity\Test03;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1503 extends Test15
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150310;

    /**
     * @ORM\OneToMany(targetEntity = Test03::class, mappedBy = "test1503")
     *
     * @var Collection|Test03[]
     */
    private $test03;
}

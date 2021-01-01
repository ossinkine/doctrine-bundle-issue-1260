<?php

declare(strict_types=1);

namespace App\Entity\Test17;

use App\Entity\Test04;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1704 extends Test17
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170410;

    /**
     * @ORM\OneToMany(targetEntity = Test04::class, mappedBy = "test1704")
     *
     * @var Collection|Test04[]
     */
    private $test04;
}

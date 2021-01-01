<?php

declare(strict_types=1);

namespace App\Entity\Test15;

use App\Entity\Test04;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1504 extends Test15
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150410;

    /**
     * @ORM\OneToMany(targetEntity = Test04::class, mappedBy = "test1504")
     *
     * @var Collection|Test04[]
     */
    private $test04;
}

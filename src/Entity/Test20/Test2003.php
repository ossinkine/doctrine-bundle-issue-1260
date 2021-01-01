<?php

declare(strict_types=1);

namespace App\Entity\Test20;

use App\Entity\Test03;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test2003 extends Test20
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200310;

    /**
     * @ORM\OneToMany(targetEntity = Test03::class, mappedBy = "test2003")
     *
     * @var Collection|Test03[]
     */
    private $test03;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test18;

use App\Entity\Test03;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1803 extends Test18
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180310;

    /**
     * @ORM\OneToMany(targetEntity = Test03::class, mappedBy = "test1803")
     *
     * @var Collection|Test03[]
     */
    private $test03;
}

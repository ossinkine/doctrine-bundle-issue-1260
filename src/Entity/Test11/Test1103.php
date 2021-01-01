<?php

declare(strict_types=1);

namespace App\Entity\Test11;

use App\Entity\Test03;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1103 extends Test11
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110310;

    /**
     * @ORM\OneToMany(targetEntity = Test03::class, mappedBy = "test1103")
     *
     * @var Collection|Test03[]
     */
    private $test03;
}

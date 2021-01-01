<?php

declare(strict_types=1);

namespace App\Entity\Test18;

use App\Entity\Test05;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1805 extends Test18
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180510;

    /**
     * @ORM\OneToMany(targetEntity = Test05::class, mappedBy = "test1805")
     *
     * @var Collection|Test05[]
     */
    private $test05;
}

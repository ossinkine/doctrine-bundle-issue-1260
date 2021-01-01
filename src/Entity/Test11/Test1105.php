<?php

declare(strict_types=1);

namespace App\Entity\Test11;

use App\Entity\Test05;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1105 extends Test11
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110510;

    /**
     * @ORM\OneToMany(targetEntity = Test05::class, mappedBy = "test1105")
     *
     * @var Collection|Test05[]
     */
    private $test05;
}

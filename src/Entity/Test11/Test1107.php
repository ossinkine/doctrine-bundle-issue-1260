<?php

declare(strict_types=1);

namespace App\Entity\Test11;

use App\Entity\Test07;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1107 extends Test11
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110710;

    /**
     * @ORM\OneToMany(targetEntity = Test07::class, mappedBy = "test1107")
     *
     * @var Collection|Test07[]
     */
    private $test07;
}

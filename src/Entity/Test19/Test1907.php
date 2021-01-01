<?php

declare(strict_types=1);

namespace App\Entity\Test19;

use App\Entity\Test07;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1907 extends Test19
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190710;

    /**
     * @ORM\OneToMany(targetEntity = Test07::class, mappedBy = "test1907")
     *
     * @var Collection|Test07[]
     */
    private $test07;
}

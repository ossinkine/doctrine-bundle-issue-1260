<?php

declare(strict_types=1);

namespace App\Entity\Test17;

use App\Entity\Test07;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1707 extends Test17
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170710;

    /**
     * @ORM\OneToMany(targetEntity = Test07::class, mappedBy = "test1707")
     *
     * @var Collection|Test07[]
     */
    private $test07;
}

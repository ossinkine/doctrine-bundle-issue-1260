<?php

declare(strict_types=1);

namespace App\Entity\Test18;

use App\Entity\Test07;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1807 extends Test18
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180710;

    /**
     * @ORM\OneToMany(targetEntity = Test07::class, mappedBy = "test1807")
     *
     * @var Collection|Test07[]
     */
    private $test07;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test15;

use App\Entity\Test07;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1507 extends Test15
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150710;

    /**
     * @ORM\OneToMany(targetEntity = Test07::class, mappedBy = "test1507")
     *
     * @var Collection|Test07[]
     */
    private $test07;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test14;

use App\Entity\Test07;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1407 extends Test14
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140710;

    /**
     * @ORM\OneToMany(targetEntity = Test07::class, mappedBy = "test1407")
     *
     * @var Collection|Test07[]
     */
    private $test07;
}

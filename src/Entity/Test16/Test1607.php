<?php

declare(strict_types=1);

namespace App\Entity\Test16;

use App\Entity\Test07;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1607 extends Test16
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160710;

    /**
     * @ORM\OneToMany(targetEntity = Test07::class, mappedBy = "test1607")
     *
     * @var Collection|Test07[]
     */
    private $test07;
}

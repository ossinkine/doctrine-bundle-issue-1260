<?php

declare(strict_types=1);

namespace App\Entity\Test16;

use App\Entity\Test01;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1601 extends Test16
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160110;

    /**
     * @ORM\OneToMany(targetEntity = Test01::class, mappedBy = "test1601")
     *
     * @var Collection|Test01[]
     */
    private $test01;
}

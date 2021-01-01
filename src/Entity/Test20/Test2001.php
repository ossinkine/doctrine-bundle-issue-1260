<?php

declare(strict_types=1);

namespace App\Entity\Test20;

use App\Entity\Test01;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test2001 extends Test20
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200110;

    /**
     * @ORM\OneToMany(targetEntity = Test01::class, mappedBy = "test2001")
     *
     * @var Collection|Test01[]
     */
    private $test01;
}

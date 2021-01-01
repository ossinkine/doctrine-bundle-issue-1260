<?php

declare(strict_types=1);

namespace App\Entity\Test18;

use App\Entity\Test01;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1801 extends Test18
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180110;

    /**
     * @ORM\OneToMany(targetEntity = Test01::class, mappedBy = "test1801")
     *
     * @var Collection|Test01[]
     */
    private $test01;
}

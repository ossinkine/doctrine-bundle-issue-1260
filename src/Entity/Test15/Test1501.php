<?php

declare(strict_types=1);

namespace App\Entity\Test15;

use App\Entity\Test01;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1501 extends Test15
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150110;

    /**
     * @ORM\OneToMany(targetEntity = Test01::class, mappedBy = "test1501")
     *
     * @var Collection|Test01[]
     */
    private $test01;
}

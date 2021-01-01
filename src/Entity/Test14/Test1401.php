<?php

declare(strict_types=1);

namespace App\Entity\Test14;

use App\Entity\Test01;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1401 extends Test14
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140110;

    /**
     * @ORM\OneToMany(targetEntity = Test01::class, mappedBy = "test1401")
     *
     * @var Collection|Test01[]
     */
    private $test01;
}

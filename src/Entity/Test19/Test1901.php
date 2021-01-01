<?php

declare(strict_types=1);

namespace App\Entity\Test19;

use App\Entity\Test01;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1901 extends Test19
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190110;

    /**
     * @ORM\OneToMany(targetEntity = Test01::class, mappedBy = "test1901")
     *
     * @var Collection|Test01[]
     */
    private $test01;
}

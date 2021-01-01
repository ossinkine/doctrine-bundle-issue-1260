<?php

declare(strict_types=1);

namespace App\Entity\Test19;

use App\Entity\Test05;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1905 extends Test19
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190510;

    /**
     * @ORM\OneToMany(targetEntity = Test05::class, mappedBy = "test1905")
     *
     * @var Collection|Test05[]
     */
    private $test05;
}

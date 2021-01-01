<?php

declare(strict_types=1);

namespace App\Entity\Test18;

use App\Entity\Test09;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1809 extends Test18
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180910;

    /**
     * @ORM\OneToMany(targetEntity = Test09::class, mappedBy = "test1809")
     *
     * @var Collection|Test09[]
     */
    private $test09;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test14;

use App\Entity\Test09;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1409 extends Test14
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140910;

    /**
     * @ORM\OneToMany(targetEntity = Test09::class, mappedBy = "test1409")
     *
     * @var Collection|Test09[]
     */
    private $test09;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test20;

use App\Entity\Test04;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test2004 extends Test20
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200410;

    /**
     * @ORM\OneToMany(targetEntity = Test04::class, mappedBy = "test2004")
     *
     * @var Collection|Test04[]
     */
    private $test04;
}

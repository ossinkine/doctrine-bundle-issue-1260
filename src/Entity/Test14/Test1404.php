<?php

declare(strict_types=1);

namespace App\Entity\Test14;

use App\Entity\Test04;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1404 extends Test14
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140410;

    /**
     * @ORM\OneToMany(targetEntity = Test04::class, mappedBy = "test1404")
     *
     * @var Collection|Test04[]
     */
    private $test04;
}

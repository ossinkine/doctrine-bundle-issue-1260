<?php

declare(strict_types=1);

namespace App\Entity\Test13;

use App\Entity\Test04;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1304 extends Test13
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130410;

    /**
     * @ORM\OneToMany(targetEntity = Test04::class, mappedBy = "test1304")
     *
     * @var Collection|Test04[]
     */
    private $test04;
}

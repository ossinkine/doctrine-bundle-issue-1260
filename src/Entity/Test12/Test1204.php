<?php

declare(strict_types=1);

namespace App\Entity\Test12;

use App\Entity\Test04;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1204 extends Test12
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120410;

    /**
     * @ORM\OneToMany(targetEntity = Test04::class, mappedBy = "test1204")
     *
     * @var Collection|Test04[]
     */
    private $test04;
}

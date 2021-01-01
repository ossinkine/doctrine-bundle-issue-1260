<?php

declare(strict_types=1);

namespace App\Entity\Test19;

use App\Entity\Test04;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1904 extends Test19
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190410;

    /**
     * @ORM\OneToMany(targetEntity = Test04::class, mappedBy = "test1904")
     *
     * @var Collection|Test04[]
     */
    private $test04;
}

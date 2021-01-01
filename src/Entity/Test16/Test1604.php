<?php

declare(strict_types=1);

namespace App\Entity\Test16;

use App\Entity\Test04;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1604 extends Test16
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160410;

    /**
     * @ORM\OneToMany(targetEntity = Test04::class, mappedBy = "test1604")
     *
     * @var Collection|Test04[]
     */
    private $test04;
}

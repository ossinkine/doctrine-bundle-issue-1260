<?php

declare(strict_types=1);

namespace App\Entity\Test11;

use App\Entity\Test04;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1104 extends Test11
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110410;

    /**
     * @ORM\OneToMany(targetEntity = Test04::class, mappedBy = "test1104")
     *
     * @var Collection|Test04[]
     */
    private $test04;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test18;

use App\Entity\Test04;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1804 extends Test18
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180401;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180402;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180403;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180404;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180405;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180406;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180407;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180408;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180409;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180410;

    /**
     * @ORM\OneToMany(targetEntity = Test04::class, mappedBy = "test1804")
     *
     * @var Collection|Test04[]
     */
    private $test04;
}

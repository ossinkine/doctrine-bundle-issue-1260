<?php

declare(strict_types=1);

namespace App\Entity\Test14;

use App\Entity\Test05;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1405 extends Test14
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140510;

    /**
     * @ORM\OneToMany(targetEntity = Test05::class, mappedBy = "test1405")
     *
     * @var Collection|Test05[]
     */
    private $test05;
}

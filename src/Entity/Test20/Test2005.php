<?php

declare(strict_types=1);

namespace App\Entity\Test20;

use App\Entity\Test05;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test2005 extends Test20
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200510;

    /**
     * @ORM\OneToMany(targetEntity = Test05::class, mappedBy = "test2005")
     *
     * @var Collection|Test05[]
     */
    private $test05;
}

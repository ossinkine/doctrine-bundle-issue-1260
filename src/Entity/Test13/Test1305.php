<?php

declare(strict_types=1);

namespace App\Entity\Test13;

use App\Entity\Test05;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1305 extends Test13
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130510;

    /**
     * @ORM\OneToMany(targetEntity = Test05::class, mappedBy = "test1305")
     *
     * @var Collection|Test05[]
     */
    private $test05;
}

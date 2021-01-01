<?php

declare(strict_types=1);

namespace App\Entity\Test16;

use App\Entity\Test05;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1605 extends Test16
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160510;

    /**
     * @ORM\OneToMany(targetEntity = Test05::class, mappedBy = "test1605")
     *
     * @var Collection|Test05[]
     */
    private $test05;
}

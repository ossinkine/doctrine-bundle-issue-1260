<?php

declare(strict_types=1);

namespace App\Entity\Test12;

use App\Entity\Test05;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1205 extends Test12
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120510;

    /**
     * @ORM\OneToMany(targetEntity = Test05::class, mappedBy = "test1205")
     *
     * @var Collection|Test05[]
     */
    private $test05;
}

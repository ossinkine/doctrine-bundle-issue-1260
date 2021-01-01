<?php

declare(strict_types=1);

namespace App\Entity\Test15;

use App\Entity\Test05;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1505 extends Test15
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150510;

    /**
     * @ORM\OneToMany(targetEntity = Test05::class, mappedBy = "test1505")
     *
     * @var Collection|Test05[]
     */
    private $test05;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test17;

use App\Entity\Test05;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1705 extends Test17
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170501;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170502;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170503;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170504;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170505;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170506;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170507;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170508;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170509;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170510;

    /**
     * @ORM\OneToMany(targetEntity = Test05::class, mappedBy = "test1705")
     *
     * @var Collection|Test05[]
     */
    private $test05;
}

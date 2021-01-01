<?php

declare(strict_types=1);

namespace App\Entity\Test17;

use App\Entity\Test03;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1703 extends Test17
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170310;

    /**
     * @ORM\OneToMany(targetEntity = Test03::class, mappedBy = "test1703")
     *
     * @var Collection|Test03[]
     */
    private $test03;
}

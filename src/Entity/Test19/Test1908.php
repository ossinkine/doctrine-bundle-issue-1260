<?php

declare(strict_types=1);

namespace App\Entity\Test19;

use App\Entity\Test08;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1908 extends Test19
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190810;

    /**
     * @ORM\OneToMany(targetEntity = Test08::class, mappedBy = "test1908")
     *
     * @var Collection|Test08[]
     */
    private $test08;
}

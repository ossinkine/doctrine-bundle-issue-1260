<?php

declare(strict_types=1);

namespace App\Entity\Test14;

use App\Entity\Test08;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1408 extends Test14
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140810;

    /**
     * @ORM\OneToMany(targetEntity = Test08::class, mappedBy = "test1408")
     *
     * @var Collection|Test08[]
     */
    private $test08;
}

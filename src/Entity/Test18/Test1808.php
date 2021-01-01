<?php

declare(strict_types=1);

namespace App\Entity\Test18;

use App\Entity\Test08;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1808 extends Test18
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180810;

    /**
     * @ORM\OneToMany(targetEntity = Test08::class, mappedBy = "test1808")
     *
     * @var Collection|Test08[]
     */
    private $test08;
}

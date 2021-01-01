<?php

declare(strict_types=1);

namespace App\Entity\Test16;

use App\Entity\Test08;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1608 extends Test16
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160801;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160802;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160803;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160804;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160805;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160806;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160807;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160808;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160809;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160810;

    /**
     * @ORM\OneToMany(targetEntity = Test08::class, mappedBy = "test1608")
     *
     * @var Collection|Test08[]
     */
    private $test08;
}

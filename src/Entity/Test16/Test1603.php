<?php

declare(strict_types=1);

namespace App\Entity\Test16;

use App\Entity\Test03;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1603 extends Test16
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160310;

    /**
     * @ORM\OneToMany(targetEntity = Test03::class, mappedBy = "test1603")
     *
     * @var Collection|Test03[]
     */
    private $test03;
}

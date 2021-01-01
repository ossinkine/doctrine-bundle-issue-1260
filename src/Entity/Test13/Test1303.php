<?php

declare(strict_types=1);

namespace App\Entity\Test13;

use App\Entity\Test03;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1303 extends Test13
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130310;

    /**
     * @ORM\OneToMany(targetEntity = Test03::class, mappedBy = "test1303")
     *
     * @var Collection|Test03[]
     */
    private $test03;
}

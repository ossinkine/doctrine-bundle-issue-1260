<?php

declare(strict_types=1);

namespace App\Entity\Test14;

use App\Entity\Test03;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1403 extends Test14
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140310;

    /**
     * @ORM\OneToMany(targetEntity = Test03::class, mappedBy = "test1403")
     *
     * @var Collection|Test03[]
     */
    private $test03;
}

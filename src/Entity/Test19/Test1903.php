<?php

declare(strict_types=1);

namespace App\Entity\Test19;

use App\Entity\Test03;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1903 extends Test19
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190301;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190302;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190303;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190304;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190305;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190306;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190307;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190308;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190309;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190310;

    /**
     * @ORM\OneToMany(targetEntity = Test03::class, mappedBy = "test1903")
     *
     * @var Collection|Test03[]
     */
    private $test03;
}

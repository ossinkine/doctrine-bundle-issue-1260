<?php

declare(strict_types=1);

namespace App\Entity\Test13;

use App\Entity\Test09;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1309 extends Test13
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130910;

    /**
     * @ORM\OneToMany(targetEntity = Test09::class, mappedBy = "test1309")
     *
     * @var Collection|Test09[]
     */
    private $test09;
}

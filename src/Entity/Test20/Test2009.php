<?php

declare(strict_types=1);

namespace App\Entity\Test20;

use App\Entity\Test09;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test2009 extends Test20
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200910;

    /**
     * @ORM\OneToMany(targetEntity = Test09::class, mappedBy = "test2009")
     *
     * @var Collection|Test09[]
     */
    private $test09;
}

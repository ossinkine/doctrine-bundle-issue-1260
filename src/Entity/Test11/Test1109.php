<?php

declare(strict_types=1);

namespace App\Entity\Test11;

use App\Entity\Test09;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1109 extends Test11
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110910;

    /**
     * @ORM\OneToMany(targetEntity = Test09::class, mappedBy = "test1109")
     *
     * @var Collection|Test09[]
     */
    private $test09;
}

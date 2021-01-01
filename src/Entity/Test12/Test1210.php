<?php

declare(strict_types=1);

namespace App\Entity\Test12;

use App\Entity\Test10;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1210 extends Test12
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test121001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test121002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test121003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test121004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test121005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test121006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test121007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test121008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test121009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test121010;

    /**
     * @ORM\OneToMany(targetEntity = Test10::class, mappedBy = "test1210")
     *
     * @var Collection|Test10[]
     */
    private $test10;
}

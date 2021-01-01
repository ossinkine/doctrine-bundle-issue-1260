<?php

declare(strict_types=1);

namespace App\Entity\Test12;

use App\Entity\Test01;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1201 extends Test12
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120110;

    /**
     * @ORM\OneToMany(targetEntity = Test01::class, mappedBy = "test1201")
     *
     * @var Collection|Test01[]
     */
    private $test01;
}

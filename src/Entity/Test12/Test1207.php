<?php

declare(strict_types=1);

namespace App\Entity\Test12;

use App\Entity\Test07;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1207 extends Test12
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120710;

    /**
     * @ORM\OneToMany(targetEntity = Test07::class, mappedBy = "test1207")
     *
     * @var Collection|Test07[]
     */
    private $test07;
}

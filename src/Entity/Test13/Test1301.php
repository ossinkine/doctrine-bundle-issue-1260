<?php

declare(strict_types=1);

namespace App\Entity\Test13;

use App\Entity\Test01;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1301 extends Test13
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130101;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130102;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130103;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130104;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130105;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130106;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130107;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130108;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130109;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130110;

    /**
     * @ORM\OneToMany(targetEntity = Test01::class, mappedBy = "test1301")
     *
     * @var Collection|Test01[]
     */
    private $test01;
}

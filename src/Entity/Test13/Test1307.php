<?php

declare(strict_types=1);

namespace App\Entity\Test13;

use App\Entity\Test07;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1307 extends Test13
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130701;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130702;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130703;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130704;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130705;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130706;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130707;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130708;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130709;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130710;

    /**
     * @ORM\OneToMany(targetEntity = Test07::class, mappedBy = "test1307")
     *
     * @var Collection|Test07[]
     */
    private $test07;
}

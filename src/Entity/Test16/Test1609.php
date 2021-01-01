<?php

declare(strict_types=1);

namespace App\Entity\Test16;

use App\Entity\Test09;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1609 extends Test16
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160901;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160902;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160903;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160904;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160905;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160906;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160907;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160908;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160909;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160910;

    /**
     * @ORM\OneToMany(targetEntity = Test09::class, mappedBy = "test1609")
     *
     * @var Collection|Test09[]
     */
    private $test09;
}

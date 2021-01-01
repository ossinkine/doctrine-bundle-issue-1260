<?php

declare(strict_types=1);

namespace App\Entity\Test13;

use App\Entity\Test02;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1302 extends Test13
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test130209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test130210;

    /**
     * @ORM\OneToMany(targetEntity = Test02::class, mappedBy = "test1302")
     *
     * @var Collection|Test02[]
     */
    private $test02;
}

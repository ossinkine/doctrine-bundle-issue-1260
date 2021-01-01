<?php

declare(strict_types=1);

namespace App\Entity\Test20;

use App\Entity\Test02;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test2002 extends Test20
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test200209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test200210;

    /**
     * @ORM\OneToMany(targetEntity = Test02::class, mappedBy = "test2002")
     *
     * @var Collection|Test02[]
     */
    private $test02;
}

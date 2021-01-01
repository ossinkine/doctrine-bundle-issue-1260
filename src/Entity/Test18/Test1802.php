<?php

declare(strict_types=1);

namespace App\Entity\Test18;

use App\Entity\Test02;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1802 extends Test18
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test180209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test180210;

    /**
     * @ORM\OneToMany(targetEntity = Test02::class, mappedBy = "test1802")
     *
     * @var Collection|Test02[]
     */
    private $test02;
}

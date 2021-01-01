<?php

declare(strict_types=1);

namespace App\Entity\Test14;

use App\Entity\Test02;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1402 extends Test14
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test140209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test140210;

    /**
     * @ORM\OneToMany(targetEntity = Test02::class, mappedBy = "test1402")
     *
     * @var Collection|Test02[]
     */
    private $test02;
}

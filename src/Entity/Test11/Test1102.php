<?php

declare(strict_types=1);

namespace App\Entity\Test11;

use App\Entity\Test02;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1102 extends Test11
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test110209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test110210;

    /**
     * @ORM\OneToMany(targetEntity = Test02::class, mappedBy = "test1102")
     *
     * @var Collection|Test02[]
     */
    private $test02;
}

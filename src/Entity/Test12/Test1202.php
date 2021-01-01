<?php

declare(strict_types=1);

namespace App\Entity\Test12;

use App\Entity\Test02;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1202 extends Test12
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test120209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test120210;

    /**
     * @ORM\OneToMany(targetEntity = Test02::class, mappedBy = "test1202")
     *
     * @var Collection|Test02[]
     */
    private $test02;
}

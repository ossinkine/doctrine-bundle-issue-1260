<?php

declare(strict_types=1);

namespace App\Entity\Test17;

use App\Entity\Test02;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1702 extends Test17
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test170209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test170210;

    /**
     * @ORM\OneToMany(targetEntity = Test02::class, mappedBy = "test1702")
     *
     * @var Collection|Test02[]
     */
    private $test02;
}

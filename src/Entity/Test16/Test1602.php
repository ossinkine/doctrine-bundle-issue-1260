<?php

declare(strict_types=1);

namespace App\Entity\Test16;

use App\Entity\Test02;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1602 extends Test16
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test160209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test160210;

    /**
     * @ORM\OneToMany(targetEntity = Test02::class, mappedBy = "test1602")
     *
     * @var Collection|Test02[]
     */
    private $test02;
}

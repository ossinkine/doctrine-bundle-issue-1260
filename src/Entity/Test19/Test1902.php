<?php

declare(strict_types=1);

namespace App\Entity\Test19;

use App\Entity\Test02;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1902 extends Test19
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test190209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test190210;

    /**
     * @ORM\OneToMany(targetEntity = Test02::class, mappedBy = "test1902")
     *
     * @var Collection|Test02[]
     */
    private $test02;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test15;

use App\Entity\Test02;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1502 extends Test15
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150201;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150202;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150203;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150204;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150205;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150206;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150207;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150208;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test150209;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test150210;

    /**
     * @ORM\OneToMany(targetEntity = Test02::class, mappedBy = "test1502")
     *
     * @var Collection|Test02[]
     */
    private $test02;
}

<?php

declare(strict_types=1);

namespace App\Entity\Test19;

use App\Entity\Test10;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1910 extends Test19
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test191001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test191002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test191003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test191004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test191005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test191006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test191007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test191008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test191009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test191010;

    /**
     * @ORM\OneToMany(targetEntity = Test10::class, mappedBy = "test1910")
     *
     * @var Collection|Test10[]
     */
    private $test10;
}

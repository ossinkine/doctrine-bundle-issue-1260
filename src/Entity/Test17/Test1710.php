<?php

declare(strict_types=1);

namespace App\Entity\Test17;

use App\Entity\Test10;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test1710 extends Test17
{
    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test171001;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test171002;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test171003;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test171004;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test171005;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test171006;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test171007;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test171008;

    /**
     * @ORM\Column(type = "string")
     *
     * @var string
     */
    private $test171009;

    /**
     * @ORM\Column(type = "integer")
     *
     * @var int
     */
    private $test171010;

    /**
     * @ORM\OneToMany(targetEntity = Test10::class, mappedBy = "test1710")
     *
     * @var Collection|Test10[]
     */
    private $test10;
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable()
 */
class JivoDepartment
{
    /**
     * Идентификатор отдела
     *
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id;

    /**
     * Название отдела
     *
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $name;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }
}
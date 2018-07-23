<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

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
     *
     * @JMS\Type("integer")
     */
    private $id;

    /**
     * Название отдела
     *
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
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
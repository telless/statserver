<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Embeddable()
 */
class JivoAgent
{
    /**
     * Идентификатор оператора
     *
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $id;

    /**
     * Имя оператора
     *
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $name;

    /**
     * Email оператора
     *
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $email;

    /**
     * Телефон посетителя
     *
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $phone;

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return null|string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
}
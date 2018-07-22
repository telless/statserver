<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="string")
     */
    private $id;

    /**
     * Имя оператора
     *
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * Email оператора
     *
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * Телефон посетителя
     *
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $phone;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
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
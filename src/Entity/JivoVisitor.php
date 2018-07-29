<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Embeddable()
 */
class JivoVisitor
{
    /**
     * Имя посетителя
     *
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $name;

    /**
     * Email посетителя
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
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $phone;

    /**
     * Номер посетителя
     *
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $number;

    /**
     * Дополнительная информтация по клиенту
     *
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $description;

    /**
     * Данные о социальных сетях пользователя
     *
     * @var array
     *
     * @ORM\Column(type="json", nullable=true)
     *
     * @JMS\Type("array<string, string>")
     * @JMS\XmlKeyValuePairs()
     */
    private $social;

    /**
     * Количество обращений
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     *
     * @JMS\Type("integer")
     */
    private $chatsCount;

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
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function getSocial(): ?array
    {
        return $this->social;
    }

    /**
     * @return int
     */
    public function getChatsCount(): ?int
    {
        return $this->chatsCount;
    }
}
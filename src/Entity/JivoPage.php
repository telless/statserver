<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Embeddable()
 */
class JivoPage
{
    /**
     * URL текущей страницы
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $url;
    /**
     * Заголовок страницы
     *
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $title;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return null|string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
}
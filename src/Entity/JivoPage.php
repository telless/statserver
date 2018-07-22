<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $url;
    /**
     * Заголовок страницы
     *
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
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
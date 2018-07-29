<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity()
 */
class LpAction
{
    /**
     * @var int|null
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     *
     * @JMS\Type("integer")
     */
    private $id;

    /**
     * Данные о событии
     *
     * @var array
     *
     * @ORM\Column(type="json", nullable=true)
     *
     * @JMS\Type("array<string, string>")
     * @JMS\XmlKeyValuePairs()
     */
    private $leadData;

    /**
     * Данные о клиенте и источнике события
     *
     * @var array
     *
     * @ORM\Column(type="json", nullable=true)
     *
     * @JMS\Type("array<string, string>")
     * @JMS\XmlKeyValuePairs()
     */
    private $metaData;

    /**
     * Utm данные
     *
     * @var array
     *
     * @ORM\Column(type="json", nullable=true)
     *
     * @JMS\Type("array<string, string>")
     * @JMS\XmlKeyValuePairs()
     */
    private $utmData;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     *
     * @JMS\Type("integer")
     */
    private $lpId;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getLeadData(): array
    {
        return $this->leadData;
    }

    /**
     * @return array
     */
    public function getMetaData(): array
    {
        return $this->metaData;
    }

    /**
     * @return array
     */
    public function getUtmData(): array
    {
        return $this->utmData;
    }

    /**
     * @return int
     */
    public function getLpId(): int
    {
        return $this->lpId;
    }

    /**
     * @JMS\PostDeserialize()
     */
    public function fixIds()
    {
        $this->lpId = $this->id;
        $this->id = null;
    }
}
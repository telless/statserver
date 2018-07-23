<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Embeddable()
 */
class JivoCall
{
    /**
     * Tип звонка (callback, incoming, outgoing)
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $type;
    /**
     * Номер телефона клиента
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $phone;
    /**
     * Статус звонка (start, end, agent_connected, client_connected, error)
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $status;
    /**
     * Причина ошибки (доступна, когда звонок завершился с ошибкой)
     *
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $reason;
    /**
     * Ссылка на запись звонка в формате mp3 (доступна после заврешений звонка)
     *
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $recordUrl;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return null|string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @return null|string
     */
    public function getRecordUrl(): ?string
    {
        return $this->recordUrl;
    }
}
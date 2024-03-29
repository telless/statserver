<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Embeddable()
 */
class JivoSession
{
    /**
     * Данные из geoip
     *
     * @var JivoGeoIp
     *
     * @ORM\Embedded(class="App\Entity\JivoGeoIp")
     *
     * @JMS\Type("App\Entity\JivoGeoIp")
     */
    private $geoip;

    /**
     * utm
     *
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $utm;

    /**
     * Объект содержащий UTM-метки
     *
     * @var array
     *
     * @ORM\Column(type="json", nullable=true)
     *
     * @JMS\Type("array<string, string>")
     * @JMS\XmlKeyValuePairs()
     */
    private $utmJson;

    /**
     * IP аддрес активной сессий
     *
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $ipAddr;

    /**
     * Описание user_agent
     *
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     *
     * @JMS\Type("string")
     */
    private $userAgent;

    /**
     * @return JivoGeoIp
     */
    public function getGeoip(): ?JivoGeoIp
    {
        return $this->geoip;
    }

    /**
     * @return string
     */
    public function getUtm(): ?string
    {
        return $this->utm;
    }

    /**
     * @return array
     */
    public function getUtmJson(): ?array
    {
        return $this->utmJson;
    }

    /**
     * @return string
     */
    public function getIpAddr(): ?string
    {
        return $this->ipAddr;
    }

    /**
     * @return string
     */
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }
}
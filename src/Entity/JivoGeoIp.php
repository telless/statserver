<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Embeddable()
 */
class JivoGeoIp
{
    /**
     * Код региона
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $regionCode;

    /**
     * Название страны
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $country;

    /**
     * ISO код страны
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $countryCode;

    /**
     * Регион
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $region;

    /**
     * Город
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $city;

    /**
     * Широта
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $latitude;

    /**
     * Долгота
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $longitude;

    /**
     * Название организации
     *
     * @var string
     *
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $organization;

    /**
     * @return string
     */
    public function getRegionCode(): string
    {
        return $this->regionCode;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * @return string
     */
    public function getOrganization(): string
    {
        return $this->organization;
    }
}
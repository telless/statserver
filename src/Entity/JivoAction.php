<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class JivoAction
{
    /**
     * @var int|null
     *
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $eventName;

    /**
     * @var string
     *
     * @ORM\Column(type="integer")
     */
    private $chatId;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $widgetId;

    /**
     * @var JivoVisitor
     *
     * @ORM\Embedded(class="App\Entity\JivoVisitor")
     */
    private $visitor;

    /**
     * @var JivoAgent
     *
     * @ORM\Embedded(class="App\Entity\JivoAgent")
     */
    private $agent;

    /**
     * @var JivoDepartment
     *
     * @ORM\Embedded(class="App\Entity\JivoDepartment")
     */
    private $department;

    /**
     * @var JivoSession
     *
     * @ORM\Embedded(class="App\Entity\JivoSession")
     */
    private $session;

    /**
     * @var JivoPage
     *
     * @ORM\Embedded(class="App\Entity\JivoPage")
     */
    private $page;

    /**
     * @var JivoCall
     *
     * @ORM\Embedded(class="App\Entity\JivoCall")
     */
    private $call;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEventName(): string
    {
        return $this->eventName;
    }

    /**
     * @return string
     */
    public function getChatId(): string
    {
        return $this->chatId;
    }

    /**
     * @return string
     */
    public function getWidgetId(): string
    {
        return $this->widgetId;
    }

    /**
     * @return JivoVisitor
     */
    public function getVisitor(): JivoVisitor
    {
        return $this->visitor;
    }

    /**
     * @return JivoAgent
     */
    public function getAgent(): JivoAgent
    {
        return $this->agent;
    }

    /**
     * @return JivoDepartment
     */
    public function getDepartment(): JivoDepartment
    {
        return $this->department;
    }

    /**
     * @return JivoSession
     */
    public function getSession(): JivoSession
    {
        return $this->session;
    }

    /**
     * @return JivoPage
     */
    public function getPage(): JivoPage
    {
        return $this->page;
    }

    /**
     * @return JivoCall
     */
    public function getCall(): JivoCall
    {
        return $this->call;
    }
}
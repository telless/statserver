<?php

namespace App\Controller;

use App\DTO\Jivo\JivoActionCommand;
use App\DTO\Roi\RoiActionCommand;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class StatCommandController extends AbstractController
{
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @Route(methods={"POST"}, name="jivo_site_save_action", path="/stat/jivo", defaults={"_format"="xml"})
     * @ParamConverter("actionCommand", class="App\DTO\Jivo\JivoActionCommand")
     */
    public function jivoSiteSaveAction(JivoActionCommand $actionCommand)
    {
        return $this->json($this->serializer->serialize($actionCommand, 'json'));
    }

    /**
     * @Route(methods={"POST"}, name="roi_stat_save_action", path="/stat/roi", defaults={"_format"="xml"})
     * @ParamConverter("actionCommand", class="App\DTO\Roi\RoiActionCommand")
     */
    public function roiStatSaveAction(RoiActionCommand $actionCommand)
    {
        return $this->json($this->serializer->serialize($actionCommand, 'json'));
    }

}
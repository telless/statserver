<?php

namespace App\Controller;

use App\Entity\JivoAction;
use App\Repository\JivoActionRepository;
use App\Repository\SyncState;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController as DefaultController;
use FOS\RestBundle\View\View;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

class StatCommandController extends DefaultController
{
    private $serializer;
    private $jivoRepository;
    private $syncState;
    private $logger;

    public function __construct(
        SerializerInterface $serializer,
        JivoActionRepository $jivoRepository,
        SyncState $syncState,
        LoggerInterface $logger
    ) {
        $this->serializer = $serializer;
        $this->jivoRepository = $jivoRepository;
        $this->syncState = $syncState;
        $this->logger = $logger;
    }

    /**
     * @Rest\View()
     * @Rest\Post(name="jivo_site_save_action", path="/api/stat/jivo")
     * @ParamConverter("actionCommand", converter="fos_rest.request_body")
     *
     * @param JivoAction $actionCommand
     * @return View
     */
    public function jivoSiteSaveAction(JivoAction $actionCommand, Request $request)
    {
        $this->jivoRepository->save($actionCommand);
        try {
            $this->syncState->call();
        } catch (\Exception $e) {
            $this->logger->critical($e->getMessage(), ['ctxt' => $request->getContent()]);

            return $this->view(['result' => 'failure'], Response::HTTP_OK)->setFormat('json');
        }

        return $this->view(['result' => 'ok'], Response::HTTP_OK)->setFormat('json');
    }

}
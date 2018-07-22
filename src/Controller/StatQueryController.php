<?php

namespace App\Controller;

use App\Repository\JivoActionRepository;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController as DefaultController;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\View\View;

class StatQueryController extends DefaultController
{
    private $jivoRepository;

    public function __construct(JivoActionRepository $jivoRepository)
    {
        $this->jivoRepository = $jivoRepository;
    }

    /**
     * @Rest\Get(name="jivo_site_get_action", path="/api/stat/jivo")
     * @Rest\QueryParam(name="page", requirements="\d+", default="1")
     * @Rest\View()
     *
     * @return View
     */
    public function jivoSiteSaveAction(ParamFetcher $paramFetcher)
    {
        return $this->view($this->jivoRepository->findForFilter($paramFetcher->all()))->setFormat('xml');
    }
}
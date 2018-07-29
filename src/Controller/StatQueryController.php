<?php

namespace App\Controller;

use App\Repository\JivoActionRepository;
use App\Repository\LpActionRepository;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController as DefaultController;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\View\View;

class StatQueryController extends DefaultController
{
    private $jivoRepository;
    private $lpRepository;

    public function __construct(JivoActionRepository $jivoRepository, LpActionRepository $lpRepository)
    {
        $this->jivoRepository = $jivoRepository;
        $this->lpRepository = $lpRepository;
    }

    /**
     * @Rest\Get(name="jivo_site_get_action", path="/api/stat/jivo")
     * @Rest\QueryParam(name="offset", requirements="\d+", default="0")
     * @Rest\View()
     *
     * @return View
     */
    public function jivoSiteSaveAction(ParamFetcher $paramFetcher)
    {
        return $this->view($this->jivoRepository->findForFilter($paramFetcher->get('offset')))->setFormat('xml');
    }

    /**
     * @Rest\Get(name="lp_site_get_action", path="/api/stat/lp")
     * @Rest\QueryParam(name="offset", requirements="\d+", default="0")
     * @Rest\View()
     *
     * @return View
     */
    public function lpSiteSaveAction(ParamFetcher $paramFetcher)
    {
        return $this->view($this->lpRepository->findForFilter($paramFetcher->get('offset')))->setFormat('xml');
    }
}
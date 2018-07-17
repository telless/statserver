<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class StatQueryController extends AbstractController
{
    /**
     * @Route(methods={"GET"}, name="jivo_site_get_action", path="/stat/jivo", defaults={"_format"="json"})
     */
    public function jivoSiteSaveAction(Request $request)
    {

    }

    /**
     * @Route(methods={"GET"}, name="roi_stat_get_action", path="/stat/roi", defaults={"_format"="json"})
     */
    public function roiStatSaveAction(Request $request)
    {

    }
}
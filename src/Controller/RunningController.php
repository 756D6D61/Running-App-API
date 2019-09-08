<?php

namespace App\Controller;

use App\Entity\Running;
use App\Repository\RunRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotations\Model;

class RunningController extends AbstractController
{
    const OK = 'ok';

    /**
     * Get Runs 
     *
     * @Route("/Running", name="Running", methods="GET")
     * 
     * 
     * 
     * @return Response
     */
    public function getRuns(RunningRepository $runRepository): Response
    {
        $runs = $runRepository->findRuns();
        return $this->json($runs);
    }
}




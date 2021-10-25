<?php

namespace App\Controller;

use App\Repository\TextRepository;
use App\Repository\LebenslaufEintragRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(TextRepository $textRepository, LebenslaufEintragRepository $lebenslaufEintragRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'textAbout' => $textRepository->findOneBy(['id' => 1])->getText(),
            'textMomentan' => $textRepository->findOneBy(['id' => 2])->getText(),
            'textLebenslauf' => $textRepository->findOneBy(['id' => 3])->getText(),
            'data' => $lebenslaufEintragRepository->findBy([], ['id' => 'asc']),
        ]);
    }
}



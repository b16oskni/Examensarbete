<?php

namespace App\Controller;

use App\Service\FormService;
use App\Form\Type\SearchType;
use App\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController {

    /* public function searchForm(Request $Request): Response {

        $form = $this->createForm(SearchType::class);

        return $this->renderForm('search.html.twig', [
            'form' => $form,
        ]);
    } */

    #[Route('/search', name: 'search')]
    public function search(FormService $formService, Request $request): Response {
        $games = $formService->searchTeam($request);

        return $this->render('search_team.html.twig', ['games' => $games]);
    }
    
    #[Route('/', name: 'home')]
    public function home(): Response {
        $form = $this->createForm(SearchType::class);

        return $this->renderForm('search.html.twig');
    }

   /*  public function getData(ManagerRegistry $doctrine, string $name): Response {
        
        $repository = $doctrine->getRepository(Product::class);
        $query = $repository->findBy(
            ['name' => $name]
        );
        return Response($query);
    } */
}

?>
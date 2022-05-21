<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController {

    #[Route('/search', name: 'search')]
    public function new(Request $request): Response {
        
        $name = $request->request->get('gsearch');
        $option = $request->request->get('searchOpt');
        
        $games = getData();
        return $this->render('search_team.html.twig', ['game' => $games]);
    }
    
    #[Route('/', name: 'home')]
    public function team(): Response {

        //if get is used, get search value and render result

        //else render start of search page

        return $this->render('search.html.twig');
    }

    public function getData(ManagerRegistry $doctrine, string $name): Response {
        
        $repository = $doctrine->getRepository(Product::class);
        $query = $repository->findBy(
            ['name' => $name]
        );
        return Response($query);
    }
}

?>
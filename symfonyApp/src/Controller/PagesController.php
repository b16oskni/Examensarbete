<?php

namespace App\Controller;

use App\Service\FormService;
use App\Form\Type\SearchType;
use App\Entity\Game;
use App\Entity\Player;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController {
    #[Route('/search', name: 'search')]
    public function search(FormService $formService, Request $request): Response {
        $view = '';
        if ("Team" == $request->query->get('option')) {
            $view = 'search_team.html.twig';
        } else {
            $view = 'search_player.html.twig';
        }
        return $this->render($view, ['games' => $formService->search($request)]);
    }
    
    #[Route('/', name: 'home')]
    public function home(): Response {
        return $this->renderForm('search.html.twig');
    }
}

?>
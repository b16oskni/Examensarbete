<?php

namespace App\Service;

use App\Entity\Game;
use App\Repository\GameRepository;

class FormService {

    public function __construct(GameRepository $gameRepository) {
        $this->gameRepository = $gameRepository;
    }

    public function searchTeam(string $searchTerm): array {
        //$name = $request->request->get('gsearch');
        //$option = $request->request->get('searchOpt');

        //$games = $connection->fetchAllAssociative('SELECET * FROM game WHERE blueteam =')
        return $this->gameRepository->findAll();

    }
}

?>
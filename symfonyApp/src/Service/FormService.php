<?php

namespace App\Service;

use App\Entity\Game;
use App\Repository\GameRepository;
use Symfony\Component\HttpFoundation\Request;

class FormService {

    public function __construct(GameRepository $gameRepository) {
        $this->gameRepository = $gameRepository;
    }

    public function searchTeam(Request $request): array {
        $name = $request->query->get('name');
        $option = $request->query->get('option');
        $data = [];
        if ($option == 'Team' || $option == null) {
            $data =$this->gameRepository->findAllByName($name);
            foreach ($data as $game) {
                $this->sanitizeGame($game);
            }
            return $data;
        }
        return $data;
    }

    private function sanitizeGame(Game $game): Game {
            $game->setPick1($this->replaceChar($game->getPick1()));
            $game->setPick2($this->replaceChar($game->getPick2()));
            $game->setPick3($this->replaceChar($game->getPick3()));
            $game->setPick4($this->replaceChar($game->getPick4()));
            $game->setPick5($this->replaceChar($game->getPick5()));
            $game->setPick6($this->replaceChar($game->getPick6()));
            $game->setPick7($this->replaceChar($game->getPick7()));
            $game->setPick8($this->replaceChar($game->getPick8()));
            $game->setPick9($this->replaceChar($game->getPick9()));
            $game->setPick10($this->replaceChar($game->getPick10()));
            $game->setBan1($this->replaceChar($game->getBan1()));
            $game->setBan2($this->replaceChar($game->getBan2()));
            $game->setBan3($this->replaceChar($game->getBan3()));
            $game->setBan4($this->replaceChar($game->getBan4()));
            $game->setBan5($this->replaceChar($game->getBan5()));
            $game->setBan6($this->replaceChar($game->getBan6()));
            $game->setBan7($this->replaceChar($game->getBan7()));
            $game->setBan8($this->replaceChar($game->getBan8()));
            $game->setBan9($this->replaceChar($game->getBan9()));
            $game->setBan10($this->replaceChar($game->getBan10()));
        return $game;
    }

    private function replaceChar($string): string {
        $chars = [" ", ".", "'"];
        if (!str_contains($string, ' ')) {
            $string = strtolower($string);
            $string = ucfirst($string);
        }
        foreach ($chars as $char) {
            $string = str_replace($char, "", $string);
        }
        return $string;
    }
}

?>
<?php

namespace App\Service;

use App\Entity\Game;
use App\Entity\Player;
use App\Entity\Team;
use App\Repository\GameRepository;
use App\Repository\PlayerRepository;
use App\Repository\TeamRepository;
use Symfony\Component\HttpFoundation\Request;

class FormService {
   private bool $countTime = false;

    public function __construct(GameRepository $gameRepository, PlayerRepository $playerRepository, TeamRepository $teamRepository) {
        $this->gameRepository = $gameRepository;
        $this->playerRepository = $playerRepository;
        $this->teamRepository = $teamRepository;
    }

    public function search(Request $request): array {
        $name = $request->query->get('name');
        $option = $request->query->get('option') === null ? '' : $request->query->get('option');
        if (!$this->countTime) {
            $this->countTime = !empty($request->query->get('countTime'));
        }
        $data = [];
        if ($option == null) {
            $startTime = floor(microtime(true) * 1000);
            $data = $this->gameRepository->findAllByName($name);
            $this->countTime($name, $option, $startTime);
            foreach ($data as $game) {
                $this->sanitizeGame($game);
            }
        }else if ($option == 'Player') {
            $startTime = floor(microtime(true) * 1000);
            $data = $this->playerRepository->findAllByName($name);
            $this->countTime($name, $option, $startTime);
            foreach ($data as $player) {
                $this->sanitizePlayer($player);
            }
        } else {
            $startTime = floor(microtime(true) * 1000);
            $data = $this->teamRepository->findAllByName($name);
            $this->countTime($name, $option, $startTime);
            foreach ($data as $team) {
                $this->sanitizeTeam($team);
            }
        }
        return $data;
    }

    private function countTime(String $searchValue, String $searchOption, float $startTime) {
        if ($this->countTime) {
            $time =  floor(microtime(true) * 1000) - $startTime;
            $row = [$searchOption, $searchValue, $time];
            $path = '../../Data/symfony-measurments.csv';
            $fp = fopen($path, 'a');
            fputcsv($fp, $row);
            fclose($fp);
        }
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

    private function sanitizePlayer(Player $player): Player {
        $player->setChampion($this->replaceChar($player->getChampion()));
        return $player;
    }

    private function sanitizeTeam(Team $team): Team {
        $team->setPick1($this->replaceChar($team->getPick1()));
        $team->setPick2($this->replaceChar($team->getPick2()));
        $team->setPick3($this->replaceChar($team->getPick3()));
        $team->setPick4($this->replaceChar($team->getPick4()));
        $team->setPick5($this->replaceChar($team->getPick5()));
        $team->setBan1($this->replaceChar($team->getBan1()));
        $team->setBan2($this->replaceChar($team->getBan2()));
        $team->setBan3($this->replaceChar($team->getBan3()));
        $team->setBan4($this->replaceChar($team->getBan4()));
        $team->setBan5($this->replaceChar($team->getBan5()));
        return $team;
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
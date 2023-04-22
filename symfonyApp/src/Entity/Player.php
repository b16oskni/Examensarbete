<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayerRepository::class)]
class Player
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 80, nullable: true)]
    private $playerid;

    #[ORM\Column(type: 'string', length: 80, nullable: true)]
    private $playername;

    #[ORM\Column(type: 'string', length: 12, nullable: true)]
    private $position;

    #[ORM\Column(type: 'string', length: 40, nullable: true)]
    private $champion;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $kills;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $deaths;

    #[ORM\Column(type: 'string', length: 10,nullable: true)]
    private $assists;

    #[ORM\Column(type: 'string', length: 14, nullable: true)]
    private $damagetochampions;

    #[ORM\Column(type: 'string', length: 14, nullable: true)]
    private $dpm;

    #[ORM\Column(type: 'string', length: 14, nullable: true)]
    private $damageshare;

    #[ORM\Column(type: 'string', length: 14, nullable: true)]
    private $wardsplaced;

    #[ORM\Column(type: 'string', length: 14, nullable: true)]
    private $wpm;

    #[ORM\Column(type: 'string', length: 14, nullable: true)]
    private $totalgold;

    #[ORM\Column(type: 'string', length: 14, nullable: true)]
    private $totalcs;

    #[ORM\Column(type: 'string', length: 14, nullable: true)]
    private $cspm;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }
    
    public function getPlayerid(): ?string
    {
        return $this->playerid;
    }

    public function setPlayerid(string $playerid): self
    {
        $this->playerid = $playerid;

        return $this;
    }

    public function getPlayername(): ?string
    {
        return $this->playername;
    }

    public function setPlayername(string $playername): self
    {
        $this->playername = $playername;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getChampion(): ?string
    {
        return $this->champion;
    }

    public function setChampion(string $champion): self
    {
        $this->champion = $champion;

        return $this;
    }

    public function getKills(): ?string
    {
        return $this->kills;
    }

    public function setKills(string $kills): self
    {
        $this->kills = $kills;

        return $this;
    }

    public function getDeaths(): ?string
    {
        return $this->deaths;
    }

    public function setDeaths(string $deaths): self
    {
        $this->deaths = $deaths;

        return $this;
    }

    public function getAssists(): ?string
    {
        return $this->assists;
    }

    public function setAssists(string $assists): self
    {
        $this->assists = $assists;

        return $this;
    }

    public function getDamagetochampions(): ?string
    {
        return $this->damagetochampions;
    }

    public function setDamagetochampions(string $damagetochampions): self
    {
        $this->damagetochampions = $damagetochampions;

        return $this;
    }

    public function getDpm(): ?string
    {
        return $this->dpm;
    }

    public function setDpm(string $dpm): self
    {
        $this->dpm = $dpm;

        return $this;
    }

    public function getDamageshare(): ?string
    {
        return $this->damageshare;
    }

    public function setDamageshare(string $damageshare): self
    {
        $this->damageshare = $damageshare;

        return $this;
    }

    public function getWardsplaced(): ?string
    {
        return $this->wardsplaced;
    }

    public function setWardsplaced(string $wardsplaced): self
    {
        $this->wardsplaced = $wardsplaced;

        return $this;
    }

    public function getWpm(): ?string
    {
        return $this->wpm;
    }

    public function setWpm(string $wpm): self
    {
        $this->wpm = $wpm;

        return $this;
    }

    public function getTotalgold(): ?string
    {
        return $this->totalgold;
    }

    public function setTotalgold(string $totalgold): self
    {
        $this->totalgold = $totalgold;

        return $this;
    }
    public function getTotalcs(): ?string
    {
        return $this->totalcs;
    }

    public function setTotalcs(string $totalcs): self
    {
        $this->totalcs = $totalcs;

        return $this;
    }

    public function getCspm(): ?string
    {
        return $this->cspm;
    }

    public function setCspm(string $cspm): self
    {
        $this->cspm = $cspm;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\TeamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
class Team
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 60, nullable: true)]
    private $matchid;

    #[ORM\Column(type: 'string', length: 80, nullable: true)]
    private $teamid;

    #[ORM\Column(type: 'string', length: 60, nullable: true)]
    private $teamname;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick1;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick2;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick3;

    #[ORM\Column(type: 'string', length: 50,nullable: true)]
    private $pick4;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick5;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $ban1;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $ban2;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $ban3;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $ban4;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $ban5;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $result;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $gamelength;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $teamkills;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $teamdeaths;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $doublekills;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $triplekills;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $quadrakills;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $pentakills;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $firstblood;

    #[ORM\Column(type: 'string', length: 12, nullable: true)]
    private $teamkpm;

    #[ORM\Column(type: 'string', length: 12, nullable: true)]
    private $ckpm;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $firstdragon;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $dragons;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $firstherald;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $heralds;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $firstbaron;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $barons;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $firsttower;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $towers;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $inhibitors;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $totalgold;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }
    
    public function getMatchid(): ?string
    {
        return $this->matchid;
    }

    public function setMatchid(string $matchid): self
    {
        $this->matchid = $matchid;

        return $this;
    }

    public function getTeamid(): ?string
    {
        return $this->teamid;
    }

    public function setTeamid(string $teamid): self
    {
        $this->teamid = $teamid;

        return $this;
    }

    public function getTeamname(): ?string
    {
        return $this->teamname;
    }

    public function setPosition(string $teamname): self
    {
        $this->teamname = $teamname;

        return $this;
    }

    public function getPick1(): ?string
    {
        return $this->pick1;
    }

    public function setPick1(string $pick1): self
    {
        $this->pick1 = $pick1;

        return $this;
    }

    public function getPick2(): ?string
    {
        return $this->pick2;
    }

    public function setPick2(string $pick2): self
    {
        $this->pick2 = $pick2;

        return $this;
    }

    public function getPick3(): ?string
    {
        return $this->pick3;
    }

    public function setPick3(string $pick3): self
    {
        $this->pick3 = $pick3;

        return $this;
    }

    public function getPick4(): ?string
    {
        return $this->pick4;
    }

    public function setPick4(string $pick4): self
    {
        $this->pick4 = $pick4;

        return $this;
    }

    public function getPick5(): ?string
    {
        return $this->pick5;
    }

    public function setPick5(string $pick5): self
    {
        $this->pick5 = $pick5;

        return $this;
    }

    public function getBan1(): ?string
    {
        return $this->ban1;
    }

    public function setBan1(string $ban1): self
    {
        $this->ban1 = $ban1;

        return $this;
    }

    public function getBan2(): ?string
    {
        return $this->ban2;
    }

    public function setBan2(string $ban2): self
    {
        $this->ban2 = $ban2;

        return $this;
    }

    public function getBan3(): ?string
    {
        return $this->ban3;
    }

    public function setBan3(string $ban3): self
    {
        $this->ban3 = $ban3;

        return $this;
    }

    public function getBan4(): ?string
    {
        return $this->ban4;
    }

    public function setBan4(string $ban4): self
    {
        $this->ban4 = $ban4;

        return $this;
    }

    public function getBan5(): ?string
    {
        return $this->ban5;
    }

    public function setBan5(string $ban5): self
    {
        $this->ban5 = $ban5;

        return $this;
    }

    public function getResult(): ?bool
    {
        return $this->result;
    }

    public function setResult(bool $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getGamelength(): ?int
    {
        return $this->gamelength;
    }

    public function setGamelength(int $gamelength): self
    {
        $this->gamelength = $gamelength;

        return $this;
    }

    public function getTeamkills(): ?int
    {
        return $this->teamkills;
    }

    public function setTeamkills(int $teamkills): self
    {
        $this->teamkills = $teamkills;

        return $this;
    }

    public function getTeamdeaths(): ?int
    {
        return $this->teamdeaths;
    }

    public function setTeamdeaths(int $teamdeaths): self
    {
        $this->teamdeaths = $teamdeaths;

        return $this;
    }

    public function getDoublekills(): ?int
    {
        return $this->doublekills;
    }

    public function setDoublekills(int $doublekills): self
    {
        $this->doublekills = $doublekills;

        return $this;
    }

    public function getTriplekills(): ?int
    {
        return $this->triplekills;
    }

    public function setTriplekills(int $triplekills): self
    {
        $this->triplekills = $triplekills;

        return $this;
    }

    public function getQuadrakills(): ?int
    {
        return $this->quadrakills;
    }

    public function setQuadrakills(int $quadrakills): self
    {
        $this->quadrakills = $quadrakills;

        return $this;
    }

    public function getPentakills(): ?int
    {
        return $this->pentakills;
    }

    public function setPentakills(int $pentakills): self
    {
        $this->pentakills = $pentakills;

        return $this;
    }

    public function getFirstblood(): ?bool
    {
        return $this->firstblood;
    }

    public function setFirstblood(bool $firstblood): self
    {
        $this->firstblood = $firstblood;

        return $this;
    }

    public function getTeamkpm(): ?string
    {
        return $this->teamkpm;
    }

    public function setTeamkpm(string $teamkpm): self
    {
        $this->teamkpm = $teamkpm;

        return $this;
    }

    public function getckpm(): ?string
    {
        return $this->ckpm;
    }

    public function setCkpm(string $ckpm): self
    {
        $this->ckpm = $ckpm;

        return $this;
    }

    public function getFirstDragon(): ?bool
    {
        return $this->firstdragon;
    }

    public function setFirstdragon(bool $firstdragon): self
    {
        $this->firstdragon = $firstdragon;

        return $this;
    }

    public function getDragons(): ?int
    {
        return $this->dragons;
    }

    public function setDragons(int $dragons): self
    {
        $this->dragons = $dragons;

        return $this;
    }

    public function getFirstherald(): ?bool
    {
        return $this->firstherald;
    }

    public function setFirstherald(bool $firstherald): self
    {
        $this->firstherald = $firstherald;

        return $this;
    }

    public function getHeralds(): ?int
    {
        return $this->heralds;
    }

    public function setHeralds(int $heralds): self
    {
        $this->heralds = $heralds;

        return $this;
    }

    public function getFirstbaron(): ?bool
    {
        return $this->firstbaron;
    }

    public function setFirstbaron(bool $firstbaron): self
    {
        $this->firstbaron = $firstbaron;

        return $this;
    }

    public function getBarons(): ?int
    {
        return $this->barons;
    }

    public function setBarons(int $barons): self
    {
        $this->barons = $barons;

        return $this;
    }

    public function getFirsttower(): ?bool
    {
        return $this->firsttower;
    }

    public function setFirsttower(bool $firsttower): self
    {
        $this->firsttower = $firsttower;

        return $this;
    }

    public function getTowers(): ?int
    {
        return $this->towers;
    }

    public function setTowers(int $towers): self
    {
        $this->towers = $towers;

        return $this;
    }

    public function getInhibitors(): ?int
    {
        return $this->inhibitors;
    }

    public function setInhibitors(int $inhibitors): self
    {
        $this->inhibitors = $inhibitors;

        return $this;
    }

    public function getTotalgold(): ?int
    {
        return $this->totalgold;
    }

    public function setTotalgold(int $totalgold): self
    {
        $this->totalgold = $totalgold;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\Column(type: 'string', length: 60)]
    private $matchid;

    #[ORM\Column(type: 'string', length: 60, nullable: true)]
    private $blueteam;

    #[ORM\Column(type: 'string', length: 60, nullable: true)]
    private $redteam;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $league;

    #[ORM\Column(type: 'string', length: 25, nullable: true)]
    private $split;

    #[ORM\Column(type: 'string', length: 4, nullable: true)]
    private $playoffs;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private $date;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $game;

    #[ORM\Column(type: 'string', length: 5, nullable: true)]
    private $patch;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private $gamelength;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick1;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick2;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick3;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick4;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick5;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick6;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick7;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick8;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick9;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $pick10;

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

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $ban6;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $ban7;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $ban8;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $ban9;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $ban10;

    #[ORM\Column(type: 'string', length: 3, nullable: true)]
    private $bluedragons;

    #[ORM\Column(type: 'string', length: 3, nullable: true)]
    private $blueheralds;

    #[ORM\Column(type: 'string', length: 3, nullable: true)]
    private $bluebarons;

    #[ORM\Column(type: 'string', length: 3, nullable: true)]
    private $bluetowers;

    #[ORM\Column(type: 'string', length: 3, nullable: true)]
    private $blueinhibitors;

    #[ORM\Column(type: 'string', length: 15, nullable: true)]
    private $bluetotalgold;

    #[ORM\Column(type: 'string', length: 3, nullable: true)]
    private $reddragons;

    #[ORM\Column(type: 'string', length: 3, nullable: true)]
    private $redheralds;

    #[ORM\Column(type: 'string', length: 3, nullable: true)]
    private $redbarons;

    #[ORM\Column(type: 'string', length: 3, nullable: true)]
    private $redtowers;

    #[ORM\Column(type: 'string', length: 3, nullable: true)]
    private $redinhibitors;

    #[ORM\Column(type: 'string', length: 15, nullable: true)]
    private $redtotalgold;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $gameresult;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBlueteam(): ?string
    {
        return $this->blueteam;
    }

    public function setBlueteam(?string $blueteam): self
    {
        $this->blueteam = $blueteam;

        return $this;
    }

    public function getRedteam(): ?string
    {
        return $this->redteam;
    }

    public function setRedteam(?string $redteam): self
    {
        $this->redteam = $redteam;

        return $this;
    }

    public function getLeague(): ?string
    {
        return $this->league;
    }

    public function setLeague(?string $league): self
    {
        $this->league = $league;

        return $this;
    }

    public function getSplit(): ?string
    {
        return $this->split;
    }

    public function setSplit(?string $split): self
    {
        $this->split = $split;

        return $this;
    }

    public function getPlayoffs(): ?string
    {
        return $this->playoffs;
    }

    public function setPlayoffs(?string $playoffs): self
    {
        $this->playoffs = $playoffs;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getGame(): ?int
    {
        return $this->game;
    }

    public function setGame(?int $game): self
    {
        $this->game = $game;

        return $this;
    }

    public function getPatch(): ?string
    {
        return $this->patch;
    }

    public function setPatch(?string $patch): self
    {
        $this->patch = $patch;

        return $this;
    }

    public function getGamelength(): ?string
    {
        return $this->gamelength;
    }

    public function setGamelength(?string $gamelength): self
    {
        $this->gamelength = $gamelength;

        return $this;
    }

    public function getGameresult(): ?string
    {
        return $this->gameresult;
    }

    public function setGameresult(?string $gameresult): self
    {
        $this->gameresult = $gameresult;

        return $this;
    }

    public function getPick1(): ?string
    {
        return $this->pick1;
    }

    public function setPick1(?string $pick1): self
    {
        $this->pick1 = $pick1;

        return $this;
    }

    public function getPick2(): ?string
    {
        return $this->pick2;
    }

    public function setPick2(?string $pick2): self
    {
        $this->pick2 = $pick2;

        return $this;
    }

    public function getPick3(): ?string
    {
        return $this->pick3;
    }

    public function setPick3(?string $pick3): self
    {
        $this->pick3 = $pick3;

        return $this;
    }

    public function getPick4(): ?string
    {
        return $this->pick4;
    }

    public function setPick4(?string $pick4): self
    {
        $this->pick4 = $pick4;

        return $this;
    }

    public function getPick5(): ?string
    {
        return $this->pick5;
    }

    public function setPick5(?string $pick5): self
    {
        $this->pick5 = $pick5;

        return $this;
    }

    public function getPick6(): ?string
    {
        return $this->pick6;
    }

    public function setPick6(?string $pick6): self
    {
        $this->pick6 = $pick6;

        return $this;
    }

    public function getPick7(): ?string
    {
        return $this->pick7;
    }

    public function setPick7(?string $pick7): self
    {
        $this->pick7 = $pick7;

        return $this;
    }

    public function getPick8(): ?string
    {
        return $this->pick8;
    }

    public function setPick8(?string $pick8): self
    {
        $this->pick8 = $pick8;

        return $this;
    }

    public function getPick9(): ?string
    {
        return $this->pick9;
    }

    public function setPick9(?string $pick9): self
    {
        $this->pick9 = $pick9;

        return $this;
    }

    public function getPick10(): ?string
    {
        return $this->pick10;
    }

    public function setPick10(?string $pick10): self
    {
        $this->pick10 = $pick10;

        return $this;
    }

    public function getBan1(): ?string
    {
        return $this->ban1;
    }

    public function setBan1(?string $ban1): self
    {
        $this->ban1 = $ban1;

        return $this;
    }

    public function getBan2(): ?string
    {
        return $this->ban2;
    }

    public function setBan2(?string $ban2): self
    {
        $this->ban2 = $ban2;

        return $this;
    }

    public function getBan3(): ?string
    {
        return $this->ban3;
    }

    public function setBan3(?string $ban3): self
    {
        $this->ban3 = $ban3;

        return $this;
    }

    public function getBan4(): ?string
    {
        return $this->ban4;
    }

    public function setBan4(?string $ban4): self
    {
        $this->ban4 = $ban4;

        return $this;
    }

    public function getBan5(): ?string
    {
        return $this->ban5;
    }

    public function setBan5(?string $ban5): self
    {
        $this->ban5 = $ban5;

        return $this;
    }

    public function getBan6(): ?string
    {
        return $this->ban6;
    }

    public function setBan6(?string $ban6): self
    {
        $this->ban6 = $ban6;

        return $this;
    }

    public function getBan7(): ?string
    {
        return $this->ban7;
    }

    public function setBan7(?string $ban7): self
    {
        $this->ban7 = $ban7;

        return $this;
    }

    public function getBan8(): ?string
    {
        return $this->ban8;
    }

    public function setBan8(?string $ban8): self
    {
        $this->ban8 = $ban8;

        return $this;
    }

    public function getBan9(): ?string
    {
        return $this->ban9;
    }

    public function setBan9(?string $ban9): self
    {
        $this->ban9 = $ban9;

        return $this;
    }

    public function getBan10(): ?string
    {
        return $this->ban10;
    }

    public function setBan10(?string $ban10): self
    {
        $this->ban10 = $ban10;

        return $this;
    }

    public function getBluedragons(): ?string
    {
        return $this->bluedragons;
    }

    public function setBluedragons(?string $bluedragons): self
    {
        $this->bluedragons = $bluedragons;

        return $this;
    }

    public function getBlueheralds(): ?string
    {
        return $this->blueheralds;
    }

    public function setBlueheralds(?string $blueheralds): self
    {
        $this->blueheralds = $blueheralds;

        return $this;
    }

    public function getBluebarons(): ?string
    {
        return $this->bluebarons;
    }

    public function setBluebarons(?string $bluebarons): self
    {
        $this->bluebarons = $bluebarons;

        return $this;
    }

    public function getBluetowers(): ?string
    {
        return $this->bluetowers;
    }

    public function setBluetowers(?string $bluetowers): self
    {
        $this->bluetowers = $bluetowers;

        return $this;
    }

    public function getBlueinhibitors(): ?string
    {
        return $this->blueinhibitors;
    }

    public function setBlueinhibitors(?string $blueinhibitors): self
    {
        $this->blueinhibitors = $blueinhibitors;

        return $this;
    }

    public function getBluetotalgold(): ?string
    {
        return $this->bluetotalgold;
    }

    public function setBluetotalgold(?string $bluetotalgold): self
    {
        $this->bluetotalgold = $bluetotalgold;

        return $this;
    }

    public function getReddragons(): ?string
    {
        return $this->reddragons;
    }

    public function setReddragons(?string $reddragons): self
    {
        $this->reddragons = $reddragons;

        return $this;
    }

    public function getRedheralds(): ?string
    {
        return $this->redheralds;
    }

    public function setRedheralds(?string $redheralds): self
    {
        $this->redheralds = $redheralds;

        return $this;
    }

    public function getRedbarons(): ?string
    {
        return $this->redbarons;
    }

    public function setRedbarons(?string $redbarons): self
    {
        $this->redbarons = $redbarons;

        return $this;
    }

    public function getRedtowers(): ?string
    {
        return $this->redtowers;
    }

    public function setRedtowers(?string $redtowers): self
    {
        $this->redtowers = $redtowers;

        return $this;
    }

    public function getRedinhibitors(): ?string
    {
        return $this->redinhibitors;
    }

    public function setRedinhibitors(?string $redinhibitors): self
    {
        $this->redinhibitors = $redinhibitors;

        return $this;
    }

    public function getRedtotalgold(): ?string
    {
        return $this->redtotalgold;
    }

    public function setRedtotalgold(?string $redtotalgold): self
    {
        $this->redtotalgold = $redtotalgold;

        return $this;
    }
}

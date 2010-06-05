<?php
class Game
{
  private $pitcher, $batter;
  public function setPlayer(Pitcher $pitcher, Batter $batter)
  {
    $this->pitcher = $pitcher;
    $this->batter = $batter;
  }
  public function judgement()
  {
    if($this->pitcher->getAction() === 'strike' && $this->batter->getAction() === 'watch'){
      $this->pitcher->result('minogashi');
      $this->batter->result('minogashi');
    }
    elseif($this->pitcher->getAction() === 'strike' && $this->batter->getAction() === 'swing'){
      $this->pitcher->result('sayonarahit');
      $this->batter->result('sayonarahit');
    }
    elseif($this->pitcher->getAction() === 'ball' && $this->batter->getAction() === 'watch'){
      $this->pitcher->result('oshidashi');
      $this->batter->result('oshidashi');
    }
    elseif($this->pitcher->getAction() === 'ball' && $this->batter->getAction() === 'swing'){
      $this->pitcher->result('karaburi');
      $this->batter->result('karaburi');
    }
  }
  public function isFinished()
  {
    return true;
  }
  public function getPitcher()
  {
    return $this->pitcher;
  }
}
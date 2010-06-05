<?php
class Game
{
  private $pitcher, $batter;
  public function setPlayer(Pitcher $pitcher, Batter $batter)
  {
    $this->pitcher = $pitcher;
    $this->batter = $batter;
  }
  public function judgment()
  {
    if($this->pitcher->getAction() === 'strike' && $this->batter->getAction() === 'watch'){
      $this->pitcher->result('minogashi');
      $this->batter->result('minogashi');
    }
    elseif($this->pitcher->getAction() === 'strike' && $this->batter->getAction() === 'swing'){
      $this->pitcher->result('sayonarahit');
      $this->batter->result('sayonarahit');
    }
  }
  public function isFinished()
  {
    return true;
  }
}

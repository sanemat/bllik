<?php
/**
 * Game
 * 
 */
class Game
{
  private $pitcher, $batter;

  /**
   * setPlayer
   *
   * @param Pitcher $pitcher
   * @param Batter $batter
   * @return void
   */
  public function setPlayer(Pitcher $pitcher, Batter $batter)
  {
    $this->pitcher = $pitcher;
    $this->batter = $batter;
  }

  /**
   * judgement
   *
   * @return void
   */
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

  /**
   * isFinished
   *
   * @return bool
   */
  public function isFinished()
  {
    return true;
  }

  /**
   * getPitcher
   *
   * @return Pitcher
   */
  public function getPitcher()
  {
    return $this->pitcher;
  }
}

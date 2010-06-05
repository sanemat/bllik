<?php
class Pitcher
{
  private $action, $isWin, $fluctuateYen;
  public function action($action)
  {
    $this->action = $action;
  }
  public function getAction()
  {
    return $this->action;
  }
  public function isWin()
  {
    return $this->isWin;
  }
  public function fluctuateYen()
  {
    return $this->fluctuateYen;
  }
  public function result($result){
    if($result === 'minogashi'){
      $this->isWin = true;
      $this->fluctuateYen = 2;
    }
    elseif($result === 'sayonarahit'){
      $this->isWin = false;
      $this->fluctuateYen = -1;
    }
  }
}

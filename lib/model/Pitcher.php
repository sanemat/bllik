<?php
/**
 * Pitcher
 * 
 */
class Pitcher
{
  private $action, $isWin, $fluctuateYen, $result;

  /**
   * setAction
   *
   * @param string $action
   * @return void
   */
  public function setAction($action)
  {
    $this->action = $action;
  }

  /**
   * getAction
   *
   * @return string
   */
  public function getAction()
  {
    return $this->action;
  }

  /**
   * isWin
   *
   * @return bool
   */
  public function isWin()
  {
    return $this->isWin;
  }

  /**
   * fluctuateYen
   *
   * @return int
   */
  public function fluctuateYen()
  {
    return $this->fluctuateYen;
  }

  /**
   * result
   * 
   * @param string $result
   * @return void
   */
  public function result($result){
    $this->result = $result;
    if($result === 'minogashi'){
      $this->isWin = true;
      $this->fluctuateYen = 2;
    }
    elseif($result === 'sayonarahit'){
      $this->isWin = false;
      $this->fluctuateYen = -1;
    }
    elseif($result === 'oshidashi'){
      $this->isWin = false;
      $this->fluctuateYen = -2;
    }
    elseif($result === 'karaburi'){
      $this->isWin = true;
      $this->fluctuateYen = 2;
    }
  }

  /**
   * getResult
   * 
   * @return string
   */
  public function getResult()
  {
    return $this->result;
  }
}

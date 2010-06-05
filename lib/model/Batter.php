<?php
/**
 * Batter
 *
 */
class Batter
{
  private $action;

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
   * result
   *
   * @param string $result
   * @return void
   */
  public function result($result)
  {
  }
}

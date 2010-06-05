<?php
class Batter
{
  private $action;
  public function setAction($action)
  {
    $this->action = $action;
  }
  public function action($action)
  {
    $this->action = $action;
  }
  public function getAction()
  {
    return $this->action;
  }
  public function result($result)
  {
  }
}
